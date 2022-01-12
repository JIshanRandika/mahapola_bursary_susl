<?php

namespace App\Http\Controllers;

use App\Models\bursary_status;
use Illuminate\Http\Request;

class bursary_status_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        bursary_status::create($request->all());
        return back()->with('success','New Process added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bursary_status  $bursary_status
     * @return \Illuminate\Http\Response
     */
    public function show(bursary_status $bursary_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bursary_status  $bursary_status
     * @return \Illuminate\Http\Response
     */
    public function edit(bursary_status $bursary_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bursary_status  $bursary_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bursary_status $bursary_status)
    {
        //
        $test = $bursary_status->id;


        $value=bursary_status::query()->find((int)$bursary_status->id,'level');

//        echo 'a';

//        print $request->testvalue;



        $levelzero= '{"level":"0"}';
        $levelone = '{"level":"1"}';
        $leveltwo = '{"level":"2"}';
        $levelthree = '{"level":"3"}';
        $levelfourone = '{"level":"41"}';
        $levelfourtwo = '{"level":"42"}';
        $levelfive = '{"level":"5"}';
        $levelsix = '{"level":"6"}';
        $levelseven = '{"level":"7"}';

//        if($value==$levelone){
//            print $value;
//        }





//        if($value==$levelzero){
//            $status->update(
//                [
//                    'status'=>'Create the List of Bursory Aworded Students by the Student Affirs Division',
//                    'level'=>'1']
//            );
//            return back()->with('success','System updated successfully');
//
//        }
        if($value==$levelone){
            $bursary_status->update(
                [
                    'status'=>'Recommended the List by the Student Affairs Division and Moved to the Assistant Registrar of the Faculty',
                    'level'=>'2']
            );
            return back()->with('success','System updated successfully');

        }
        if ($value==$leveltwo) {
            $bursary_status->update(
                [
                    'status' => 'Assistant Registrar of the Faculty send the Finalized List to Students Affairs Division For Finalize the List (Check Registration) & Create Vouchers',
                    'level' => '3']
            );
            return back()->with('success','System updated successfully');
        }
        if ($value==$levelthree && $request->approval=="VC") {
            $bursary_status->update(
                [
                    'status' => 'Finalized the List (Check Registration) & Create Vouchers by the Student Affairs Division And Send To Vice Chancellor For Approval',
                    'level' => '41']
            );
            return back()->with('success','System updated successfully');
        }

        if ($value==$levelthree && $request->approval=="Registrar") {
            $bursary_status->update(
                [
                    'status' => 'Finalized the List (Check Registration) & Create Vouchers by the Student Affairs Division And Send To Registrar For Approval',
                    'level' => '42']
            );
            return back()->with('success','System updated successfully');
        }

        if ($value==$levelfourone) {
            $bursary_status->update(
                [
                    'status' => 'Approve Vouchers by the Vice Chancellor of the University And Send To The Student Affairs Division For Finalizing the Process and Create PRM Doc',
                    'level' => '5']
            );
            return back()->with('success','System updated successfully');
        }

        if ($value==$levelfourtwo) {
            $bursary_status->update(
                [
                    'status' => 'Approve Vouchers by the Registrar of the University And Send To The Student Affairs Division For Finalizing the Process and Create PRM Doc',
                    'level' => '5']
            );
            return back()->with('success','System updated successfully');
        }

        if ($value==$levelfive) {
            $bursary_status->update(
                [
                    'status' => 'Finalized the Process and Created PRM Doc. Send To The Finance Division Clerk',
                    'level' => '6']
            );
            return back()->with('success','System updated successfully');
        }
        if ($value==$levelsix) {
            $bursary_status->update(
                [
                    'status' => 'PAID',
                    'level' => '7']
            );
            return back()->with('success','System updated successfully');
        }

        if ($value==$levelseven) {
            $bursary_status->update(
                [
                    'status' => 'Process Finished',
                    'level' => '0']
            );
            return back()->with('success','System updated successfully');
        }


        return back()->with('success','System updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bursary_status  $bursary_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(bursary_status $bursary_status)
    {
        //
    }
}
