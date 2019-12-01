@extends('layouts.master')

@section('content')

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">User roles</h4>
                                    <p class="category">Add new role</p>
                                </div>
                                <div class="card-content">
                                    {{ Form::open(array('url' => 'roles')) }}

                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                                    </div>

                                    <h5><b>Assign Permissions</b></h5>

                                    <div class='form-group'>
                                        @foreach ($permissions as $permission)
                                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                        @endforeach
                                    </div>

                                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection