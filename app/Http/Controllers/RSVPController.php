<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RSVP;

class RSVPController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'attendees' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
        ]);

        RSVP::create([
            'name' => $request->name,
            'attendees' => $request->attendees,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'RSVP berhasil dikirim!');
    }
}
