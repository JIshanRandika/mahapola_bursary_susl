@extends('layouts.app')


@section('content')
    <div class="container">
        <a class="dropdown-item" href={{url('mahapola')}} aria-expanded="false" v-pre>
            Mahapola
        </a>
        <a class="dropdown-item" href={{url('bursary')}} aria-expanded="false" v-pre>
            Bursary
        </a>
    </div>





@endsection
