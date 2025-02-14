<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                $gallary = Gallary::all();

                $data = Team::all();

                return view('home.index',compact('gallary','data'));
            }

            elseif($usertype == 'admin')
            {
                return view('admin.index');
            }
        }

        else{
            return redirect()->back();
        }
    }

    public function all_message()
    {
        $data = Contact::all();

        return view('admin.all_message',compact('data'));
    }

    public function view_gallary()
    {
        $gallary = Gallary::all();

        return view('admin.view_gallary',compact('gallary'));
    }

    public function add_gallary(Request $request)
    {
        $data = new Gallary;

        $image = $request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('gallary',$imagename);

            $data->image =$imagename;

            $data->save();

            return redirect()->back();
        }
    }

    public function delete_gallary($id)
    {
        $data = Gallary::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function all_team()
    {
        $data = Team::all();

        return view('admin.all_team',compact('data'));
    }

    public function view_team(Request $request)
    {
        $data = new Team;

        $data->name=$request->name;

        $data->description=$request->description;

        $data->price=$request->price;

        $image = $request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('team',$imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function delete_team($id)
    {
        $data = Team::find($id);

        $data->delete();

        return redirect()->back();
    }
}
