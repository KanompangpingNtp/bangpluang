<?php

namespace App\Http\Controllers\manpower_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManpowerPlanType;
use App\Models\ManpowerPlanFile;
use Illuminate\Support\Facades\Storage;

class AdminManpowerPlanController extends Controller
{
    public function ManpowerPlanType()
    {
        $ManpowerPlanType = ManpowerPlanType::all();

        return view('admin.post.manpower_plan.page_type', compact('ManpowerPlanType'));
    }

    public function ManpowerPlanTypeCreate(Request $request)
    {
        $request->validate([
            'type_name' => 'required|string',
        ]);

        ManpowerPlanType::create([
            'type_name' => $request->type_name,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function ManpowerPlanTypeUpdate(Request $request, $id)
    {
        $request->validate([
            'type_name' => 'required|string',
        ]);

        $ManpowerPlanType = ManpowerPlanType::findOrFail($id);

        $ManpowerPlanType->update([
            'type_name' => $request->type_name,
        ]);

        return redirect()->back()->with('success', 'อัปเดตข้อมูลสำเร็จ');
    }

    public function ManpowerPlanTypeDelete($id)
    {
        // หา ManpowerPlanType ตาม ID ที่รับมา
        $ManpowerPlanType = ManpowerPlanType::findOrFail($id);

        // ลบไฟล์ทั้งหมดที่เกี่ยวข้องกับประเภทนี้
        $files = ManpowerPlanFile::where('type_id', $id)->get();
        foreach ($files as $file) {
            // ลบไฟล์ออกจาก storage
            if (Storage::disk('public')->exists($file->files_path)) {
                Storage::disk('public')->delete($file->files_path);
            }

            // ลบข้อมูลไฟล์ออกจากฐานข้อมูล
            $file->delete();
        }

        // ลบ ManpowerPlanType
        $ManpowerPlanType->delete();

        return redirect()->back()->with('success', 'ข้อมูลและไฟล์ถูกลบเรียบร้อยแล้ว');
    }


    public function ManpowerPlanShowDetail($id)
    {
        $ManpowerPlanType = ManpowerPlanType::findOrFail($id);
        $ManpowerPlanFile = ManpowerPlanFile::where('type_id', $id)->get();

        return view('admin.post.manpower_plan.page_details', compact('ManpowerPlanType', 'ManpowerPlanFile'));
    }

    public function ManpowerPlanDetailCreate(Request $request, $Id)
    {
        $request->validate([
            'file_post' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,csv',
        ]);

        if ($request->hasFile('file_post')) {
            $file = $request->file('file_post'); // รับไฟล์เดียว
            $filename = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->extension();
            $folder = ($fileType == 'pdf') ? 'procurement_plan_files' : 'procurement_files';
            $path = $file->storeAs($folder, $filename, 'public');

            ManpowerPlanFile::create([
                'type_id' => $Id,
                'files_path' => $path,
                'files_type' => $fileType,
            ]);
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function ManpowerPlanDetailDelete($id)
    {
        $file = ManpowerPlanFile::findOrFail($id);

        // ลบไฟล์ออกจาก storage
        if (Storage::disk('public')->exists($file->files_path)) {
            Storage::disk('public')->delete($file->files_path);
        }

        // ลบข้อมูลจากฐานข้อมูล
        $file->delete();

        return redirect()->back()->with('success', 'ลบไฟล์สำเร็จ');
    }
}
