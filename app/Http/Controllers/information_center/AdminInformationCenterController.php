<?php

namespace App\Http\Controllers\information_center;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformationCenter;
use App\Models\InformationCenterFile;
use Illuminate\Support\Facades\Storage;

class AdminInformationCenterController extends Controller
{
    public function InformationCenterType()
    {
        $InformationCenter = InformationCenter::all();

        return view('admin.information_center.page_type', compact('InformationCenter'));
    }

    public function InformationCenterCreate(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
        ]);

        InformationCenter::create([
            'name' => $request->name,
            'date' => $request->date,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function InformationCenterUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
        ]);

        $info = InformationCenter::findOrFail($id);

        $info->update([
            'name' => $request->name,
            'date' => $request->date,
        ]);

        return redirect()->back()->with('success', 'อัปเดตข้อมูลสำเร็จ');
    }

    public function InformationCenterDelete($id)
    {
        $information = InformationCenter::findOrFail($id);

        $files = InformationCenterFile::where('information_id', $id)->get();

        foreach ($files as $file) {
            if (Storage::disk('public')->exists($file->file_path)) {
                Storage::disk('public')->delete($file->file_path);
            }

            $file->delete();
        }

        $information->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลและไฟล์ทั้งหมดสำเร็จ');
    }

    public function InformationCenterShowDetail($id)
    {
        $InformationCenter = InformationCenter::findOrFail($id);
        $InformationCenterFile = InformationCenterFile::where('information_id', $id)->get();

        return view('admin.information_center.page_details', compact('InformationCenter', 'InformationCenterFile'));
    }

    public function InformationCenterDetailCreate(Request $request, $Id)
    {
        $request->validate([
            'file_post' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,csv',
        ]);

        if ($request->hasFile('file_post')) {
            $file = $request->file('file_post');
            $filename = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            $folder = 'information_center_files';
            $path = $file->storeAs($folder, $filename, 'public');

            InformationCenterFile::create([
                'information_id' => $Id,
                'file_path' => $path,
                'file_type' => $fileType,
            ]);
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function InformationCenterDetailDelete($id)
    {
        $file = InformationCenterFile::findOrFail($id);

        if (Storage::disk('public')->exists($file->file_path)) {
            Storage::disk('public')->delete($file->file_path);
        }

        $file->delete();

        return redirect()->back()->with('success', 'ลบไฟล์สำเร็จ');
    }
}
