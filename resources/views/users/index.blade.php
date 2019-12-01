@extends('layouts.master')

@section('title', '| Users')

@section('content')

	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <a href="{{ url('/users/create') }}" class="btn btn-primary pull-right">Add new user</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Users</h4>
                                    <p class="category">users and their respective roles and privileges</p>
                                </div>
                                
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th> Name </th>
                                            <th> Email </th>
                                            <th> Role </th>
                                            <th> Reg. Date </th>
                                            <th> Actions </th>
                                            <th> Assignment of Roles </th>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)

                                            <tr>
                                                <td> {{ $user -> name }} </td>
                                                <td> {{ $user -> email }} </td>
                                                <td> {{ $user->roles()->pluck('name')->implode(' ') }} </td> {{-- Retrieve array of roles associated to a user and convert to string --}}
                                                <td> {{ $user -> created_at -> toFormattedDateString() }} </td>
                                                
                                                <td>
                                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                                                    {{-- <a href="{{ route('users.assign', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Assign Role</a> --}}

                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                        {!! Form::close() !!}
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

@endsection

@section ('layouts.foot')

@endsection

