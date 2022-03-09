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
    public function edit(Request $request,$id) {
        $batch = $request->input('batch');
        $faculty = $request->input('faculty');
        $installment_name = $request->input('installment_name');
        $bursary_description = $request->input('bursary_description');


        DB::update('update bursary_statuses set batch = ?,faculty=?,installment_name=?,bursary_description=? where id = ?',[$batch,$faculty,$installment_name,$bursary_description,$id]);
        return back()->with('success','Updated successfully');
    }
    public function destroy($id) {
        DB::delete('delete from bursary_statuses where id = ?',[$id]);
        return back()->with('success','successfully Deleted');
    }
}
