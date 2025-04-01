<?php

namespace App\Http\Controllers\manpower_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManpowerPlanType;
use App\Models\ManpowerPlanFile;
use App\Models\AuthorityType;
use App\Models\PersonnelAgency;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class ManpowerPlanController extends Controller
{
    public function ManpowerPlanShowData()
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

        $ManpowerPlanType = ManpowerPlanType::paginate(14);

        return view('users.pages.manpower_plan.page', compact(
            'ManpowerPlanType',
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }

    public function ManpowerPlanDetail($id)
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

        $ManpowerPlanType = ManpowerPlanType::findOrFail($id);
        $ManpowerPlanFile = ManpowerPlanFile::where('type_id', $id)->get();

        return view('users.pages.manpower_plan.show_detail', compact(
            'ManpowerPlanType',
            'ManpowerPlanFile',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus'
        ));
    }
}
