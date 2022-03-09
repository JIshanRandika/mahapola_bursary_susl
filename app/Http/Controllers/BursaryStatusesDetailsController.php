<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BursaryStatusesDetailsController extends Controller
{
    //
    public function show($id) {
        $bursary_statuses = DB::select('select * from bursary_statuses where id = ?',[$id]);
        return view('bursary_status_update',['bursary_statuses'=>$bursary_statuses]);
    }
}
