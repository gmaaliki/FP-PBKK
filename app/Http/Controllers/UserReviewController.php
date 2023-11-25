<?php

namespace App\Http\Controllers;

use App\Models\UserReview;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'star_rating' => 'required|integer|max:5',
            'review_description' => 'required|string|max:255',
        ]);

        UserReview::create($request->all());
        return redirect('/');
    }
     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserReview $userReview)
    {
        $request->validate([
            'star_rating' => 'required|integer|max:5',
            'review_description' => 'required|string|max:255',
        ]);

        $userReview->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserReview $userReview)
    {
        $userReview->delete();
    }
}
