@extends('layouts.master')

@section('content')

	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <a href="{{ url('/permissions/create') }}" class="btn btn-primary pull-right">Add new Permission</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Permissions</h4>
                                    <p class="category">user permissions and their respective operations</p>
                                </div>
                                
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Permissions</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permissions as $permission)
                                            <tr>
                                                <td>{{ $permission->name }}</td> 
                                                <td>
                                                <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
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

