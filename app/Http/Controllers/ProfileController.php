<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Lgu;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function show()
    {
        $lgus = Lgu::all()->map(function ($lgu) {
            return [
                'id' => $lgu->lgu_id,
                'name' => $lgu->name,
                'district' => $lgu->district,
                'class' => $lgu->class,
                'area' => $lgu->area,
                'pop' => $lgu->pop,
                'mapUrl' => $lgu->map_url,
                'seal' => $lgu->seal,
                'evacCenters' => $lgu->evac_centers,
            ];
        });

        return view('pages.guest.about.profile', compact('lgus'));
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if (! $request->user()->hasVerifiedEmail()) {
            $request->user()->email_verified_at = now();
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
