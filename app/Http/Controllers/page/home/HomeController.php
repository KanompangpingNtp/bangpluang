<?php

namespace App\Http\Controllers\page\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OperationalPlanType;
use App\Models\LawsRegsType;
use App\Models\AuthorityType;
use App\Models\PersonnelAgency;
use App\Models\PublicMenusType;
use App\Models\PerfResultsType;

class HomeController extends Controller
{
    public function home()
    {
        //เมนูผลการดำเนินงานเมนู
        $PerfResultsMenu = PerfResultsType::all();

        //เมนูอำนาจหน้าที่
        $AuthorityMenu = AuthorityType::all();

        //เมนูแผนงานพัฒนาท้องถิ่น
        $OperationalPlanMenu = OperationalPlanType::all();

        //เมนูกฎหมายและกฎระเบียบ
        $LawsRegsMenu = LawsRegsType::all();

        //เมนูสำหรับประชาชน
        $PublicMenus = PublicMenusType::all();

        //เมนูบุคลากร
        $personnelAgencies = PersonnelAgency::with('ranks')
            ->whereIn('status', [1, 2, 3, 4, 5])
            ->orderByRaw("FIELD(status, 1, 2, 3, 4, 5)")
            ->get();

        return view('users.home.app',compact(
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies'
        ));
    }
}
