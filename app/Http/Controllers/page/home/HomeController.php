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
use App\Models\PostDetail;

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

        //ข่าวประชาสัมพันธ์
        $pressRelease = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })
            ->orderBy('date', 'desc')
            ->get();

        //กิจกรรม
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })->get();

        //ผลประกาศจัดซื้อจัดจ้าง
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลประกาศจัดซื้อจัดจ้าง');
            })->get();

        //ประกาศราคากลาง
        $averagePrice = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })->get();

        //รายงานผลจัดซื้อจัดจ้าง
        $procurementReport = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'รายงานผลจัดซื้อจัดจ้าง');
            })->get();

        return view('users.home.app', compact(
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu',
            'PublicMenus',
            'personnelAgencies',
            'pressRelease',
            'activity',
            'procurement',
            'procurementResults',
            'averagePrice',
            'procurementReport'
        ));
    }

    public function TreasuryAnnouncementData()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();
        $PerfResultsMenu = PerfResultsType::all();
        $AuthorityMenu = AuthorityType::all();
        $OperationalPlanMenu = OperationalPlanType::all();
        $LawsRegsMenu = LawsRegsType::all();
        $PublicMenus = PublicMenusType::all();

        return view('users.pages.treasury_announcement.show_data', compact(
            'PublicMenus',
            'personnelAgencies',
            'PerfResultsMenu',
            'AuthorityMenu',
            'OperationalPlanMenu',
            'LawsRegsMenu'
        ));
    }
}
