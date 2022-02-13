<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {   
         Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        Alert::success('Success', 'Feedback sudah di kirim :))');

        return view('contact.index');
        // dd($a);
    }
}
