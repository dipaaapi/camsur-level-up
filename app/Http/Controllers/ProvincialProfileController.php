<?php

namespace App\Http\Controllers;

use App\Models\ProvincialProfile;
use Illuminate\Http\Request;

class ProvincialProfileController extends Controller
{
    public function index()
    {
        $profiles = ProvincialProfile::orderBy('sort_order')->get();

        return view('pages.guest.about.profile', compact('profiles'));
    }
}