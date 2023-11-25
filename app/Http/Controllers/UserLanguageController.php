<?php

namespace App\Http\Controllers;

use App\Models\UserLanguage;
use Illuminate\Http\Request;

class UserLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $userLanguages = UserLanguage::all();

    //     return view('user_languages.index', compact('userLanguages'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('user_languages.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'language' => 'required|string|max:255',
            'language_level' => 'required|string|max:255',
        ]);

        UserLanguage::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    // public function show(UserLanguage $userLanguage)
    // {
    //     return view('user_languages.show', compact('userLanguage'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(UserLanguage $userLanguage)
    // {
    //     return view('user_languages.edit', compact('userLanguage'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserLanguage $userLanguage)
    {
        $request->validate([
            'language' => 'required|string|max:255',
            'language_level' => 'required|string|max:255',
        ]);

        $userLanguage->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserLanguage $userLanguage)
    {
        $userLanguage->delete();
    }
}
