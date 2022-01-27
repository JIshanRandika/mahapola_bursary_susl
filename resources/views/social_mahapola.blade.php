@extends('layouts.app')


@section('content')




    {{--=================================--}}
    {{--============Mahapola=============--}}
    {{--=================================--}}

    <div class="welcomebgimage">
        <a class="welcomebutton" href={{url('bursary')}} aria-expanded="false" v-pre>
            Switch to Bursary
        </a>


        <div style="margin-top: 20px" class="myrow">

            <div class="col-md-12">

                <div class="panel panel-default">
                    <a class="facultybuttons welcomebutton" href={{url('mahapola')}} aria-expanded="false" v-pre>
                        All
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('gsdmahapola')}} aria-expanded="false" v-pre>
                        Graduated Studies
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('agrimahapola')}} aria-expanded="false" v-pre>
                        Agriculture Science
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('appliedmahapola')}} aria-expanded="false" v-pre>
                        Applied Sciences
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('geomahapola')}} aria-expanded="false" v-pre>
                        Geomatics
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('manmahapola')}} aria-expanded="false" v-pre>
                        Management Studies
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('medmahapola')}} aria-expanded="false" v-pre>
                        Medicine
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('socialmahapola')}} aria-expanded="false" v-pre>
                        Social Sciences & Languages
                    </a>
                    <a class="facultybuttons welcomebutton" href={{url('techmahapola')}} aria-expanded="false" v-pre>
                        Technology
                    </a>

                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        @if(checkPermission(['vice_chancellor','registrar','finance_division_clerk','student']))

                            @foreach($mahapola_status as $s)

                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>

                                            @if($s->level!=='1')
                                                <h6 class="card-text">Comments by Assistant Registrar:</h6>
                                                @foreach($mahapola_ar_comment as $arc)
                                                    @if($s->id==$arc->status_id)
                                                        <p>{{$arc->mahapola_ar_comment}}</p>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif


                        {{--                            Assistant Registrar of The Faculty of Graduate Studies--}}

                        @if(checkPermission(['graduate_studies_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Graduate Studies')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif


                        {{--                            Assistant Registrar of The Faculty of Agriculture Science--}}
                        @if(checkPermission(['agriculture_science_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Agriculture Science')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif

                        {{--                            Assistant Registrar of The Faculty of Applied Sciences--}}

                        @if(checkPermission(['applied_sciences_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Applied Sciences')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif
                        {{--                            Assistant Registrar of The Faculty of Geomatics--}}
                        @if(checkPermission(['geomatics_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Geomatics')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif

                        {{--                            Assistant Registrar of The Faculty of Management Studies--}}
                        @if(checkPermission(['management_studies_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Management Studies')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif

                        {{--                            Assistant Registrar of The Faculty of Medicine--}}
                        @if(checkPermission(['medicine_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Medicine')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif
                        {{--                            Assistant Registrar of The Faculty of Social Sciences & Languages--}}

                        @if(checkPermission(['social_sciences_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Social Sciences & Languages')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif
                        {{--                            Assistant Registrar of The Faculty of Technology--}}
                        @if(checkPermission(['technology_assistant_registrar']))

                            @foreach($mahapola_status as $s)
                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')
                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>


                                            @if($s->level=='2' && $s->faculty=='Technology')

                                                <form action="{{ route('mahapola_ar_comments.store') }}" method="POST">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                                            <div class="form-group">
                                                                <strong>Comment:</strong>
                                                                <input type="text" name="mahapola_ar_comment"
                                                                       class="form-control" placeholder="Comment">
                                                            </div>
                                                        </div>


                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-1">
                                                            <button name="status_id" value="{{$s->id}}" type="submit"
                                                                    class="btn btn-info">Add Comment
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>


                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Recommended the List and send to Student Affairs
                                                                Division
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif


                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>

                                @endif


                            @endforeach

                        @endif

                        @if(checkPermission(['student_affairs_division_clerk']))

                            <div style="margin: 20px" class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <h2>Add New Process</h2>
                                    </div>
                                </div>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('mahapola_statuses.store') }}" method="POST">
                                @csrf

                                <div style="margin: 20px" class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Batch:</strong>
                                            <input type="text" name="batch" class="form-control" placeholder="Batch">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Faculty:</strong>

                                            <select name="faculty" class="custom-select" id="inputGroupSelect01" >
                                                <option selected>Choose...</option>
                                                <option value="Graduate Studies">Graduate Studies</option>
                                                <option value="Agriculture Science">Agriculture Science</option>
                                                <option value="Applied Sciences">Applied Sciences</option>
                                                <option value="Geomatics">Geomatics</option>
                                                <option value="Management Studies">Management Studies</option>
                                                <option value="Medicine">Medicine</option>
                                                <option value="Social Sciences & Languages">Social Sciences & Languages</option>
                                                <option value="Technology">Technology</option>
                                            </select>

                                            {{--                                            <input type="text" name="faculty" class="form-control"--}}
                                            {{--                                                   placeholder="Faculty">--}}
                                        </div>
                                    </div>
                                    {{--                                    <div class="col-xs-12 col-sm-12 col-md-12">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <strong>Installment year:</strong>--}}
                                    {{--                                            <input type="text" name="mahapola_year" class="form-control"--}}
                                    {{--                                                   placeholder="Installment year">--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Installment Name:</strong>

                                            <select name="installment_name" class="custom-select" id="inputGroupSelect01" >
                                                <option selected>Choose...</option>
                                                <option value="Installment 01">Installment 01</option>
                                                <option value="Installment 02">Installment 02</option>
                                                <option value="Installment 03">Installment 03</option>
                                                <option value="Installment 04">Installment 04</option>
                                                <option value="Installment 05">Installment 05</option>
                                                <option value="Installment 06">Installment 06</option>
                                                <option value="Installment 07">Installment 07</option>
                                                <option value="Installment 08">Installment 08</option>
                                                <option value="Installment 09">Installment 09</option>
                                                <option value="Installment 10">Installment 10</option>
                                                <option value="Installment 11">Installment 11</option>
                                                <option value="Installment 12">Installment 12</option>
                                                <option value="Installment 13">Installment 13</option>
                                                <option value="Installment 14">Installment 14</option>
                                                <option value="Installment 15">Installment 15</option>
                                                <option value="Installment 16">Installment 16</option>
                                                <option value="Installment 17">Installment 17</option>
                                                <option value="Installment 18">Installment 18</option>
                                                <option value="Installment 19">Installment 19</option>
                                                <option value="Installment 20">Installment 20</option>
                                                <option value="Installment 21">Installment 21</option>
                                                <option value="Installment 22">Installment 22</option>
                                                <option value="Installment 23">Installment 23</option>
                                                <option value="Installment 24">Installment 24</option>
                                                <option value="Installment 25">Installment 25</option>
                                                <option value="Installment 26">Installment 26</option>
                                                <option value="Installment 27">Installment 27</option>
                                                <option value="Installment 28">Installment 28</option>
                                                <option value="Installment 29">Installment 29</option>
                                                <option value="Installment 30">Installment 30</option>
                                                <option value="Installment 31">Installment 31</option>
                                                <option value="Installment 32">Installment 32</option>
                                                <option value="Installment 33">Installment 33</option>
                                                <option value="Installment 34">Installment 34</option>
                                                <option value="Installment 35">Installment 35</option>
                                                <option value="Installment 36">Installment 36</option>
                                                <option value="Installment 37">Installment 37</option>
                                                <option value="Installment 38">Installment 38</option>
                                                <option value="Installment 39">Installment 39</option>
                                                <option value="Installment 40">Installment 40</option>
                                            </select>

                                            {{--                                            <input type="text" name="faculty" class="form-control"--}}
                                            {{--                                                   placeholder="Faculty">--}}
                                        </div>
                                    </div>
                                    {{--                                    <div class="col-xs-12 col-sm-12 col-md-12">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <strong>Installment month:</strong>--}}
                                    {{--                                            <input type="text" name="mahapola_month" class="form-control"--}}
                                    {{--                                                   placeholder="Installment month">--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Installment Description:</strong>
                                            <input type="text" name="mahalpola_description" class="form-control"
                                                   placeholder="Installment Description">
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>



                            @foreach($mahapola_status as $s)


                                @if($s->level!=='0' && $s->faculty=='Social Sciences & Languages')



                                    <div class="card text-center m-5">
                                        <div class="card-header">
                                            {{ $s->installment_name }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $s->faculty }} {{ $s->batch }}</h5>
                                            <h6 class="card-text">{{ $s->status }}</h6>
                                            <p class="card-text">{{ $s->mahalpola_description }}</p>

                                            @if($s->level!=='1' && $s->faculty=='Social Sciences & Languages')
                                                <h6 class="card-text">Comments by Assistant Registrar:</h6>
                                                @foreach($mahapola_ar_comment as $arc)
                                                    @if($s->id==$arc->status_id)
                                                        <p>{{$arc->mahapola_ar_comment}}</p>
                                                    @endif
                                                @endforeach
                                            @endif

                                            @if($s->level=='1' && $s->faculty=='Social Sciences & Languages')
                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Send to Assistant Registrar
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif

                                            @if($s->level=='3' && $s->faculty=='Social Sciences & Languages')
                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">
                                                                Send the Finalized List to the UGC
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif

                                            @if($s->level=='4' && $s->faculty=='Social Sciences & Languages' )
                                                <form action="{{ route('mahapola_statuses.update',$s->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                            <button type="submit" class="btn btn-danger">
                                                                Finished the current progress
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                            @endif

                                        </div>
                                        <div class="card-footer text-muted">
                                            Last update: {{ $s->updated_at }}
                                        </div>
                                    </div>



                                @endif

                            @endforeach




                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
