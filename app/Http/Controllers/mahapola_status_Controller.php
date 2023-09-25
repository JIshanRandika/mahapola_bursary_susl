<?php

namespace App\Http\Controllers;

use App\Models\mahapola_status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class mahapola_status_Controller extends Controller
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
        $twoDaysAgo = Carbon::now()->subDays(2);

        DB::table('mahapola_statuses')
            ->where('status', 'PAID')
            ->where('updated_at', '<', $twoDaysAgo)
            ->delete();

        mahapola_status::create($request->all());
        return back()->with('success','New Process added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahapola_status  $mahapola_status
     * @return \Illuminate\Http\Response
     */
    public function show(mahapola_status $mahapola_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahapola_status  $mahapola_status
     * @return \Illuminate\Http\Response
     */
    public function edit(mahapola_status $mahapola_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahapola_status  $mahapola_status
     * @return \Illuminate\Http\Response
     */

//    public function mahapolaupdatepaid(Request $request, mahapola_status $mahapola_status)
//    {
//
//    }
    public function update(Request $request, mahapola_status $mahapola_status)
    {
        //

        $test = $mahapola_status->id;


        $value=mahapola_status::query()->find((int)$mahapola_status->id,'level');

//        echo 'a';

        print $test;



        $levelzero= '{"level":"0"}';
        $levelone = '{"level":"1"}';
        $leveltwo = '{"level":"2"}';
        $levelthree = '{"level":"3"}';
        $levelfour = '{"level":"4"}';

//        if($value==$levelone){
//            print $value;
//        }


        if ($request->paidmahapola) {
            $mahapola_status->update(
                [
                    'status' => 'PAID',
                    'level' => '7']
            );
            return back()->with('success','Marked as paid');
        }else{
            if($value==$levelzero){
                $mahapola_status->update(
                    [
                        'status'=>'Verifying list by Student Affairs Division before send to the Assistant Registrar',
                        'level'=>'1']
                );
                return back()->with('success','System updated successfully');

            }
            if($value==$levelone){
                $mahapola_status->update(
                    [
                        'status'=>'Verifyied by the Student Affairs Division and Moved to the Assistant Registrar of the Faculty',
                        'level'=>'2']
                );
                return back()->with('success','System updated successfully');

            }
            if ($value==$leveltwo) {
                $mahapola_status->update(
                    [
                        'status' => 'Assistant Registrar of the Faculty send the Finalized List to Studenet Affirs Division',
                        'level' => '3']
                );
                return back()->with('success','System updated successfully');
            }
            if ($value==$levelthree) {
                $mahapola_status->update(
                    [
                        'status' => 'Send the Finalized List to the UGC by the Student Affirs Division',
                        'level' => '4']
                );
                return back()->with('success','System updated successfully');
            }

            if ($value==$levelfour) {
                $mahapola_status->update(
                    [
                        'status' => 'Process Finished',
                        'level' => '0']
                );
                return back()->with('success','System updated successfully');
            }
        }





        return back()->with('success','System updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahapola_status  $mahapola_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahapola_status $mahapola_status)
    {
        //
    }
}
