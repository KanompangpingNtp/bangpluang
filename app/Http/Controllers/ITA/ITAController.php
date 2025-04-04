<?php

namespace App\Http\Controllers\ITA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ITAType;
use App\Models\AuthorityType;
use App\Models\PerfResultsType;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;

class ITAController extends Controller
{
    public function itaPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')
        ->whereIn('status', [1, 2, 3, 4, 5])
        ->orderByRaw("FIELD(status, 1, 2, 3, 4, 5)")
        ->get();

        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        $showITA = ITAType::with('itADetails.iTALinks')->get();

        return view('users.pages.ita.page', compact(
            'LawsRegsMenu',
            'showITA',
            'personnelAgencies',
            'PerfResultsMenu',
            'OperationalPlanMenu',
            'AuthorityMenu',
            'PublicMenus',
        ));
    }
}
