<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MahapolaStatusesDetailsController extends Controller
{
    public function show($id) {
        $mahapola_statuses = DB::select('select * from mahapola_statuses where id = ?',[$id]);
        return view('mahapola_statuses_update',['mahapola_statuses'=>$mahapola_statuses]);
    }
    public function edit(Request $request,$id) {
        $batch = $request->input('batch');
        $faculty = $request->input('faculty');
        $installment_name = $request->input('installment_name');
        $mahalpola_description = $request->input('mahalpola_description');


        DB::update('update mahapola_statuses set batch = ?,faculty=?,installment_name=?,mahalpola_description=? where id = ?',[$batch,$faculty,$installment_name,$mahalpola_description,$id]);
        return back()->with('success','Updated successfully');
    }
    public function destroy($id) {
        DB::delete('delete from mahapola_statuses where id = ?',[$id]);
        return back()->with('success','successfully Deleted');
    }
}
