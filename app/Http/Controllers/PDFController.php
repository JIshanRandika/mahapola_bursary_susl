<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
class PDFController extends Controller
{
    //
    public function download()
    {
        $status = Status::all();
        $pdf=PDF::loadView('pdf.statusreport',['status'=>$status]);
    return $pdf->download('statusreport.pdf');

}
}
