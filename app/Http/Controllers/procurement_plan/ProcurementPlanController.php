<?php

namespace App\Http\Controllers\procurement_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProcurementPlanType;
use App\Models\ProcurementPlanFile;
use App\Models\AuthorityType;
use App\Models\PostDetail;
use App\Models\PersonnelAgency;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class ProcurementPlanController extends Controller
{
    public function ProcurementPlanShowData()
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

        $ProcurementPlanType = ProcurementPlanType::paginate(14);

        return view('users.pages.procurement_plan.page', compact(
            'ProcurementPlanType',
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }

    public function ProcurementPlanDetail($id)
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

        $ProcurementPlanType = ProcurementPlanType::findOrFail($id);
        $ProcurementPlanFile = ProcurementPlanFile::where('type_id', $id)->get();

        return view('users.pages.procurement_plan.show_detail', compact(
            'ProcurementPlanType',
            'ProcurementPlanFile',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus'
        ));
    }
}
