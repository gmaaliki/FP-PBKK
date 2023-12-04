<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index($subcategory, $budget, $time)
    {
        // Find the Subcategory by name or another identifier
        $subcategoryModel = Subcategory::where('subcategory_name', $subcategory)->first();
        //dd($subcategoryModel);
        // Check if the subcategory exists
        if (!$subcategoryModel) {
            abort(404); // Or handle the case when the subcategory is not found
        }

        // Get all services related to the subcategory
        $services = $subcategoryModel->service()->get();

        //dd($services);
        // Pass the services to the view
        return view('subcategory', compact('subcategoryModel', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subcategory_name' => 'required|string|max:255',
        ]);

        Subcategory::create($request->all());
        return redirect('/');
    }
     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'subcategory_name' => 'required|string|max:255',
        ]);

        $subcategory->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
    }
}
