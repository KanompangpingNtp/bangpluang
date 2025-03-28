<?php

namespace App\Http\Controllers\page\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class AdminContactController extends Controller
{
    public function ContactAdmin()
    {
        $contact = Contact::orderBy('id', 'asc')->first();

        return view('admin.post.contact.page', compact('contact'));
    }

    public function ContactCreate(Request $request)
    {
        $request->validate([
            'details' => 'nullable|string',
            'logo_file' => 'nullable|file|mimes:jpg,jpeg,png,',
            'payment_file' => 'nullable|file|mimes:jpg,jpeg,png,',
            'contact_administration_file' => 'nullable|file|mimes:jpg,jpeg,png,',
            'contact_finance_file' => 'nullable|file|mimes:jpg,jpeg,png,',
            'link_map' => 'nullable|url',
        ]);

        // dd($request);

        $filePaths = [];

        // จัดการการอัปโหลดไฟล์ Logo
        if ($request->hasFile('logo_file')) {
            $logoFile = $request->file('logo_file');
            $logoFileName = time() . '_logo_' . $logoFile->getClientOriginalName();
            $filePaths['logo_file'] = $logoFile->storeAs('contact_files', $logoFileName, 'public');
        }

        // จัดการการอัปโหลดไฟล์ช่องทางการชำระเงิน
        if ($request->hasFile('payment_file')) {
            $paymentFile = $request->file('payment_file');
            $paymentFileName = time() . '_payment_' . $paymentFile->getClientOriginalName();
            $filePaths['payment_file'] = $paymentFile->storeAs('contact_files', $paymentFileName, 'public');
        }

        // จัดการการอัปโหลดไฟล์ช่องทางการติดต่อสอบถาม อบต.
        if ($request->hasFile('contact_administration_file')) {
            $contactAdminFile = $request->file('contact_administration_file');
            $contactAdminFileName = time() . '_admin_' . $contactAdminFile->getClientOriginalName();
            $filePaths['contact_administration_file'] = $contactAdminFile->storeAs('contact_files', $contactAdminFileName, 'public');
        }

        // จัดการการอัปโหลดไฟล์ช่องทางการติดต่อสอบถาม กองคลัง
        if ($request->hasFile('contact_finance_file')) {
            $contactFinanceFile = $request->file('contact_finance_file');
            $contactFinanceFileName = time() . '_finance_' . $contactFinanceFile->getClientOriginalName();
            $filePaths['contact_finance_file'] = $contactFinanceFile->storeAs('contact_files', $contactFinanceFileName, 'public');
        }

        Contact::create([
            'details' => $request->details,
            'logo_file' => $filePaths['logo_file'] ?? null,
            'payment_file' => $filePaths['payment_file'] ?? null,
            'contact_administration_file' => $filePaths['contact_administration_file'] ?? null,
            'contact_finance_file' => $filePaths['contact_finance_file'] ?? null,
            'link_map' => $request->link_map,
        ]);

        return redirect()->back()->with('success', 'ข้อมูลถูกบันทึกเรียบร้อย');
    }

    public function ContactDelete($id)
    {
        $contact = Contact::findOrFail($id);

        // ลบไฟล์ที่เกี่ยวข้อง
        if ($contact->logo_file) {
            Storage::disk('public')->delete($contact->logo_file);
        }
        if ($contact->payment_file) {
            Storage::disk('public')->delete($contact->payment_file);
        }
        if ($contact->contact_administration_file) {
            Storage::disk('public')->delete($contact->contact_administration_file);
        }
        if ($contact->contact_finance_file) {
            Storage::disk('public')->delete($contact->contact_finance_file);
        }

        // ลบข้อมูลในฐานข้อมูล
        $contact->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
