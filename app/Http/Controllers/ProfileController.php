<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }
    // nembak update profil req dari updateprofilreq
    public function update(UpdateProfileRequest $request)
    {
    $request->user()->update(
        $request->all()
    );

    return redirect()->route('login')->with('success', 'Data Berhasil Di Update');

    }


}
