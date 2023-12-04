<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Subcategory;
use App\Models\UserLanguage;
use App\Models\User;
use App\Models\UserReview;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $services = Service::join('users', 'services.user_id', '=', 'users.id')
        // ->leftJoin('service_pictures', function ($join) {
        //     $join->on('services.id', '=', 'service_pictures.service_id')
        //         ->whereRaw('service_pictures.id = (SELECT MIN(id) FROM service_pictures WHERE service_id = services.id)');
        // })
        // ->select('services.*', 'users.name as username', 'service_pictures.path as picture_path')
        // ->groupBy('services.id', 'users.name', 'service_pictures.path')
        // ->take(30)
        // ->get();

        $randomSubcategoryId = Subcategory::inRandomOrder()->value('id'); 
        
        
        $reccomendServices = Service::join('users', 'services.user_id', '=', 'users.id')
        ->leftJoin('service_pictures', function ($join) {
            $join->on('services.id', '=', 'service_pictures.service_id')
                ->whereRaw('service_pictures.id = (SELECT MIN(id) FROM service_pictures WHERE service_id = services.id)');
        })
        ->leftJoin('user_review', 'services.user_id', '=', 'user_review.user_id')
        ->where('services.subcategory_id', $randomSubcategoryId) // Filter by the randomized subcategory ID
        ->select(
            'services.*',
            'users.name as username',
            'service_pictures.path as picture_path',
            DB::raw('AVG(user_review.star_rating) as avg_star_rating'),
            DB::raw('COUNT(user_review.id) as total_reviews')
        )
        ->groupBy('services.id', 'users.name', 'service_pictures.path')
        ->take(25)
        ->get();

        $services = Service::join('users', 'services.user_id', '=', 'users.id')
        ->leftJoin('service_pictures', function ($join) {
            $join->on('services.id', '=', 'service_pictures.service_id')
                ->whereRaw('service_pictures.id = (SELECT MIN(id) FROM service_pictures WHERE service_id = services.id)');
        })
        ->leftJoin('user_review', 'services.user_id', '=', 'user_review.user_id')
        ->select(
            'services.*',
            'users.name as username',
            'service_pictures.path as picture_path',
            DB::raw('AVG(user_review.star_rating) as avg_star_rating'),
            DB::raw('COUNT(user_review.id) as total_reviews')
        )
        ->groupBy('services.id', 'users.name', 'service_pictures.path')
        ->take(30)
        ->get();


        return view('dashboard', compact('services', 'reccomendServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $user_id)
    {
        $languages = UserLanguage::where('user_id', $user_id)->pluck('language')->toArray();

        $user = User::find($user_id);

        $userReviews = UserReview::with('user')
            ->where('user_id', $user_id)
            ->get();
 

        $registrationYear = $user->created_at->format('Y');

        $service = Service::join('users', 'services.user_id', '=', 'users.id')
        ->leftJoin('service_pictures', function ($join) {
            $join->on('services.id', '=', 'service_pictures.service_id')
                ->whereRaw('service_pictures.id = (SELECT MIN(id) FROM service_pictures WHERE service_id = services.id)');
        })
        ->leftJoin('user_review', 'services.user_id', '=', 'user_review.user_id')
        ->select(
            'services.*',
            'users.name as username',
            'service_pictures.path as picture_path',
            DB::raw('AVG(user_review.star_rating) as avg_star_rating'),
            DB::raw('COUNT(user_review.id) as total_reviews')
        )
        ->where('services.id', $id)
        ->groupBy('services.id', 'users.name', 'service_pictures.path')
        ->first(); // Use first() to get a single result

        return view('gigs', compact('service', 'languages', 'registrationYear', 'userReviews'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    public function filter(Request $request)
    {
        $searchBar = $request->input('search_bar');
        $services = Service::where('title', 'like', '%' . $searchBar . '%')
            ->join('users', 'services.user_id', '=', 'users.id')
            ->join('service_pictures', function ($join) {
                $join->on('services.id', '=', 'service_pictures.service_id')
                    ->whereRaw('service_pictures.id = (SELECT MIN(id) FROM service_pictures WHERE service_id = services.id)');
            })
            ->join('user_review', 'services.user_id', '=', 'user_review.user_id')
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


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
