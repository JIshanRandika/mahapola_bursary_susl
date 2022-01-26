@extends('layouts.app')


@section('content')
    <div class="welcomebgimage">
        <div class="row justify-content-center">
        <a class="mbutton" href={{url('mahapola')}} aria-expanded="false" v-pre>
            Mahapola
        </a>
            <a class="dropdown-item">

            </a>
        <a class="bbutton " href={{url('bursary')}} aria-expanded="false" v-pre>
            Bursary
        </a>
        </div>
    </div>





@endsection
