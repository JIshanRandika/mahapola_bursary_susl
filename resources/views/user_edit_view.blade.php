
@extends('layouts.app')


@section('content')
    <div class="card p-3 mb-2  text-white">
        <h5 class="card-header bg-secondary">User Details</h5>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card-body  ">

            <table class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Permission</td>


                    <td>Option</td>

                </tr>
                @foreach ($users as $user)
                    @if( $user->name != 'None')
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @if ($user->is_permission == '1')
                                <td>{{'Vice Chancellor' }}</td>
                            @elseif ($user->is_permission == '2')
                                <td>{{'Registrar' }}</td>
                            @elseif ($user->is_permission == '31')
                                <td>{{'Assistant Registrar of The Faculty of Graduate Studies' }}</td>
                            @elseif ($user->is_permission == '32')
                                <td>{{'Assistant Registrar of The Faculty of Agriculture Science' }}</td>
                            @elseif ($user->is_permission == '33')
                                <td>{{'Assistant Registrar of The Faculty of Applied Sciences' }}</td>
                            @elseif ($user->is_permission == '34')
                                <td>{{'Assistant Registrar of The Faculty of Geomatics' }}</td>
                            @elseif ($user->is_permission == '35')
                                <td>{{'Assistant Registrar of The Faculty of Management Studies' }}</td>
                            @elseif ($user->is_permission == '36')
                                <td>{{'Assistant Registrar of The Faculty of Medicine' }}</td>
                            @elseif ($user->is_permission == '37')
                                <td>{{'Assistant Registrar of The Faculty of Social Sciences & Languages' }}</td>
                            @elseif ($user->is_permission == '38')
                                <td>{{'Assistant Registrar of The Faculty of Technology' }}</td>
                            @elseif ($user->is_permission == '4')
                                <td>{{'Student Affairs Division Clerk' }}</td>
                            @else
                                <td>{{'Finance Division Clerk' }}</td>
                            @endif
{{--                            <td>{{ $user->is_permission }}</td>--}}

                            <td>
                                <a href = 'edit/{{ $user->id }}'>View</a>
                                </br>
                                <a href = 'delete/{{ $user->id }}'>Delete</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>

        </div>
    </div>



@endsection
