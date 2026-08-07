<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Lgu;

class SocioEconomicController extends Controller
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

        return view('pages.guest.about.socio-economic', compact('lgus'));
    }
}
