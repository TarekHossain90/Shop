<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Gallary;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $gallary = Gallary::all();

        return view('home.index',compact('gallary'));
    }

    public function contacts(Request $request)
    {
        $contact = new Contact;

        $contact->name=$request->name;

        $contact->phone=$request->phone;

        $contact->email=$request->email;

        $contact->message=$request->message;

        $contact->save();

        return redirect()->back();
    }
}
