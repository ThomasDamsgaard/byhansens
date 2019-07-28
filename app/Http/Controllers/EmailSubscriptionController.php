<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmailSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validation = $request->validate([
          'firstname' => 'required',
          'lastname' => 'required',
          'email' => 'required',
        ]);

        DB::table('email_subscribers')->insertGetId([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
          ]);

        return redirect()->back();
    }
}
