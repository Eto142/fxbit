<?php

namespace App\Http\Controllers\Admin;

use App\Models\WhatsappSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index()
    {
        $setting = WhatsappSetting::first();
        return view('admin.whatsapp_settings', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'whatsapp_number' => 'required|string|max:20|regex:/^\+?[0-9\s\-]+$/',
        ]);

        $setting = WhatsappSetting::first();

        if ($setting) {
            $setting->update(['whatsapp_number' => $request->whatsapp_number]);
        } else {
            WhatsappSetting::create(['whatsapp_number' => $request->whatsapp_number]);
        }

        return redirect()->back()->with('message', 'WhatsApp number updated successfully.');
    }
}
