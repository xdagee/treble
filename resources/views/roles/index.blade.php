@extends('layouts.master')

@section('content')

	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <a href="{{ url('/roles/create') }}" class="btn btn-primary pull-right">Add new role</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Roles</h4>
                                    <p class="category">users roles and their respective privileges</p>
                                </div>
                                
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                                        <tr>
                                                            <th>Role</th>
                                                            <th>Permissions</th>
                                                            <th>Operation</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($roles as $role)
                                                        <tr>

                                                            <td>{{ $role->name }}</td>

                                                            <td>{{  $role->permissions()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                                                            <td>
                                                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
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

