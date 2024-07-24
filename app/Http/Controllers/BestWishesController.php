<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Best_Wishes;

class BestWishesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ucapan' => 'required|string|max:255',
        ]);

        Best_Wishes::create([
            'name' => $request->name,
            'ucapan' => $request->ucapan,
            
        ]);
        

        return redirect()->back()->with('success', 'RSVP berhasil dikirim!');
    }
}
