<?php

namespace App\Http\Controllers;

use App\Models\ProvincialProfile;
use Illuminate\Support\Collection;

class ProvincialProfileController extends Controller
{
    public function index()
    {
        $profiles = $this->loadProfiles();
        $profilesByKey = $profiles->keyBy('section_key');

        return view('pages.guest.about.profile', compact('profiles', 'profilesByKey'));
    }

    protected function loadProfiles(): Collection
    {
        try {
            $profiles = ProvincialProfile::orderBy('sort_order')->get();
        } catch (\Throwable $e) {
            $profiles = collect();
        }

        if ($profiles->isEmpty()) {
            $profiles = collect([
                [
                    'section_key' => 'overview',
                    'title' => 'Lalawigan ng Camarines Sur',
                    'subtitle' => 'A resilient and thriving province',
                    'content' => 'Camarines Sur continues to grow through innovation, digital inclusion, and public service.',
                    'quick_facts' => [
                        'Capital' => 'Pili',
                        'Land Area' => '5,497.03 km²',
                        'Population' => '2.06M+',
                    ],
                    'image_path' => 'img/icons/profile/Profile.jpg',
                    'sort_order' => 1,
                ],
                [
                    'section_key' => 'vision',
                    'title' => 'Vision',
                    'subtitle' => 'CamSur Level Up 2030',
                    'content' => 'A globally competitive, resilient, and sustainable province where citizens enjoy quality services and opportunities.',
                    'quick_facts' => null,
                    'image_path' => null,
                    'sort_order' => 2,
                ],
                [
                    'section_key' => 'mission',
                    'title' => 'Mission',
                    'subtitle' => 'Service and progress',
                    'content' => 'To deliver inclusive public services, accelerate growth, and protect the environment for future generations.',
                    'quick_facts' => null,
                    'image_path' => null,
                    'sort_order' => 3,
                ],
            ]);
        }

        return $profiles->map(function ($profile) {
            return is_object($profile) ? $profile : (object) $profile;
        });
    }
}