<?php

namespace App\Http\Controllers;

use App\Models\UserEducation;
use Illuminate\Http\Request;

class UserEducationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'country_of_college' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        UserEducation::create($request->all());
        return redirect('/');
    }
     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserEducation $userEducation)
    {
        $request->validate([
            'country_of_college' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        $userEducation->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserEducation $userEducation)
    {
        $userEducation->delete();
    }
}
