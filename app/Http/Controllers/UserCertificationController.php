<?php

namespace App\Http\Controllers;

use App\Models\UserCertification;
use Illuminate\Http\Request;

class UserCertificationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'certificate_or_award' => 'required|string|max:255',
            'certification_from' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        UserCertification::create($request->all());
        return redirect('/');
    }
     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserCertification $userCertification)
    {
        $request->validate([
            'certificate_or_award' => 'required|string|max:255',
            'certification_from' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        $userCertification->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserCertification $userCertification)
    {
        $userCertification->delete();
    }
}
