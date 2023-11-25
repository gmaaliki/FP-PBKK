<?php

namespace App\Http\Controllers;

use App\Models\UserSkill;
use Illuminate\Http\Request;

class UserSkillController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'skill' => 'required|string|max:255',
            'experience_level' => 'required|string|max:255',
        ]);

        UserSkill::create($request->all());
        return redirect('/');
    }

    public function update(Request $request, UserSkill $userSkill)
    {
        $request->validate([
            'skill' => 'required|string|max:255',
            'experience_level' => 'required|string|max:255',
        ]);

        $userSkill->update($request->all());
    }

    public function destroy(UserSkill $userSkill)
    {
        $userSkill->delete();
    }
}
