<?php

namespace App\Http\Controllers;

use App\Models\bursary_ar_comment;
use App\Models\bursary_status;
use App\Models\bursary_vc_or_reg_comment;
use App\Models\mahapola_ar_comment;
use App\Models\mahapola_status;
use Illuminate\Http\Request;

class AgriMahapolaController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bursary_ar_comment = bursary_ar_comment::all();

        $mahapola_ar_comment = mahapola_ar_comment::all();

        $bursary_vc_or_reg_comment = bursary_vc_or_reg_comment::all();
//        return view('home',compact('arcomment'));

        $bursary_status = bursary_status::all();

        $mahapola_status = mahapola_status::all();

        return view('agri_mahapola',compact('bursary_status','bursary_ar_comment','bursary_vc_or_reg_comment','mahapola_ar_comment','mahapola_status'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUsers()
    {
        dd('Access All Users');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminSuperadmin()
    {
        dd('Access Admin and Superadmin');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function superadmin()
    {
        dd('Access only Superadmin');
    }


    public function show(Status $status)
    {
        return view('/home',compact('status'));
    }



    public function updatemahapolaname($id){

//        Status::findOrFail(1)->update($request->all());


//        Status::->update(['mahalpola_name'=>'test']);

//        return back();
    }
}
