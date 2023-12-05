<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\UserLanguage;
use App\Models\User;
use App\Models\UserReview;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $randomSubcategoryId = Subcategory::inRandomOrder()->value('id'); 
        
        
        $reccomendServices = Service::join('users', 'services.user_id', '=', 'users.id')
        ->leftJoin('user_review', 'services.user_id', '=', 'user_review.user_id')
        ->where('services.subcategory_id', $randomSubcategoryId) // Filter by the randomized subcategory ID
        ->select(
            'services.*',
            'users.name as username',
            DB::raw('AVG(user_review.star_rating) as avg_star_rating'),
            DB::raw('COUNT(user_review.id) as total_reviews')
        )
        ->groupBy('services.id', 'users.name')
        ->take(25)
        ->get();

        $services = Service::join('users', 'services.user_id', '=', 'users.id')
        ->leftJoin('user_review', 'services.id', '=', 'user_review.service_id')
        ->select(
            'services.*',
            'users.name as username',
            DB::raw('AVG(user_review.star_rating) as avg_star_rating'),
            DB::raw('COUNT(user_review.id) as total_reviews')
        )
        ->groupBy('services.id', 'users.name')
        ->take(30)
        ->get();



        return view('dashboard', compact('services', 'reccomendServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id_user = Auth::user()->id;
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('service.addgigs', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        // dd($request);
        $user = Auth::user();
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'basic_plan_title' => 'required|string|max:255',
            'basic_plan_price' => 'required|integer',
            'basic_plan_description' => 'required|string|max:255',
            'basic_plan_days' => 'required|integer',
            'standard_plan_title' => 'required|string|max:255',
            'standard_plan_price' => 'required|integer',
            'standard_plan_description' => 'required|string|max:255',
            'standard_plan_days' => 'required|integer',
            'premium_plan_title' => 'required|string|max:255',
            'premium_plan_price' => 'required|integer',
            'premium_plan_description' => 'required|string|max:255',
            'premium_plan_days' => 'required|integer',
            'image' => 'required|max:2048|mimes:jpeg,png,jpg'
        ]);

        $path = $request->file('image')->store('public/images');

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'basic_plan_title' => $request->input('basic_plan_title'),
            'basic_plan_price' => $request->input('basic_plan_price'),
            'basic_plan_description' => $request->input('basic_plan_description'),
            'basic_plan_days' => $request->input('basic_plan_days'),
            'standard_plan_title' => $request->input('standard_plan_title'),
            'standard_plan_price' => $request->input('standard_plan_price'),
            'standard_plan_description' => $request->input('standard_plan_description'),
            'standard_plan_days' => $request->input('standard_plan_days'),
            'premium_plan_title' => $request->input('premium_plan_title'),
            'premium_plan_price' => $request->input('premium_plan_price'),
            'premium_plan_description' => $request->input('premium_plan_description'),
            'premium_plan_days' => $request->input('premium_plan_days'),
            'image' => $path,
            'category_id' => $request->input('category_id'),
            'subcategory_id' => $request->input('subcategory_id'),
        ];

        $user->service()->create($data);        

        $successMessage = "Gig successfully added";

        return redirect()->route('profile.show')->with('success', $successMessage);
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $user_id)
    {
        $languages = UserLanguage::where('user_id', $user_id)->pluck('language')->toArray();

        $user = User::find($user_id);
        
        $reviews = DB::table('user_review')
        ->join('users', 'user_review.user_id', '=', 'users.id')
        ->select('user_review.*', 'users.name as reviewer_name')
        ->where('user_review.service_id', $id)
        ->get();

       // dd($reviews);

 

        $registrationYear = $user->created_at->format('Y');

        $service = Service::join('users', 'services.user_id', '=', 'users.id')
        // ->leftJoin('service_pictures', function ($join) {
        //     $join->on('services.id', '=', 'service_pictures.service_id')
        //         ->whereRaw('service_pictures.id = (SELECT MIN(id) FROM service_pictures WHERE service_id = services.id)');
        // })
        ->leftJoin('user_review', 'services.user_id', '=', 'user_review.user_id')
        ->select(
            'services.*',
            'users.name as username',
            'service_pictures.path as picture_path',
            DB::raw('COUNT(user_review.id) as total_reviews')
        )
        ->where('services.id', $id)
        ->groupBy('services.id', 'users.name', 'service_pictures.path')
        ->first(); // Use first() to get a single result

        return view('gigs', compact('service', 'languages', 'registrationYear', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function filter(Request $request)
    {
        $searchBar = $request->input('search_bar');
        $services = Service::where('title', 'like', '%' . $searchBar . '%')
            ->join('users', 'services.user_id', '=', 'users.id')
            ->join('service_pictures', function ($join) {
                $join->on('services.id', '=', 'service_pictures.service_id')
                    ->whereRaw('service_pictures.id = (SELECT MIN(id) FROM service_pictures WHERE service_id = services.id)');
            })
            ->join('user_review', 'services.id', '=', 'user_review.service_id')
            ->select(
                'services.*',
                'users.name as username',
                'service_pictures.path as picture_path',
                DB::raw('AVG(user_review.star_rating) as avg_star_rating'),
                DB::raw('COUNT(user_review.id) as total_reviews')
            )
            ->groupBy('services.id', 'users.name', 'service_pictures.path')
            ->get();


        return view('searchfilter', compact('services', 'searchBar'));
    }

    public function edit(Request $request)
    {
        $service = Service::find($request->id_service);
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('service.editgigs', compact('service', 'categories', 'subcategories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        // dd($request);
        $user = Auth::user();
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'basic_plan_title' => 'required|string|max:255',
            'basic_plan_price' => 'required|integer',
            'basic_plan_description' => 'required|string|max:255',
            'basic_plan_days' => 'required|integer',
            'standard_plan_title' => 'required|string|max:255',
            'standard_plan_price' => 'required|integer',
            'standard_plan_description' => 'required|string|max:255',
            'standard_plan_days' => 'required|integer',
            'premium_plan_title' => 'required|string|max:255',
            'premium_plan_price' => 'required|integer',
            'premium_plan_description' => 'required|string|max:255',
            'premium_plan_days' => 'required|integer',
            'image' => 'required|max:2048|mimes:jpeg,png,jpg'
        ]);

        $path = $request->file('image')->store('public/images');

        $service = Service::find($request->id_service);
        $service->update([

            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'basic_plan_title' => $request->input('basic_plan_title'),
            'basic_plan_price' => $request->input('basic_plan_price'),
            'basic_plan_description' => $request->input('basic_plan_description'),
            'basic_plan_days' => $request->input('basic_plan_days'),
            'standard_plan_title' => $request->input('standard_plan_title'),
            'standard_plan_price' => $request->input('standard_plan_price'),
            'standard_plan_description' => $request->input('standard_plan_description'),
            'standard_plan_days' => $request->input('standard_plan_days'),
            'premium_plan_title' => $request->input('premium_plan_title'),
            'premium_plan_price' => $request->input('premium_plan_price'),
            'premium_plan_description' => $request->input('premium_plan_description'),
            'premium_plan_days' => $request->input('premium_plan_days'),
            'image' => $path,
            'category_id' => $request->input('category_id'),
            'subcategory_id' => $request->input('subcategory_id'),
        ]);

        $successMessage = "Gig successfully edited";

        return redirect()->route('profile.show')->with('success', $successMessage);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $service = Service::find($request->id_service);

        Storage::delete($service->image);
        $service->delete();

        $successMessage = "User certification successfully deleted";

        return back()->with('success', $successMessage);
    }
}
