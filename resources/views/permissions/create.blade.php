@extends('layouts.master')

@section('content')

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Permissions</h4>
                                    <p class="category">Add new permission</p>
                                </div>
                                <div class="card-content">

                                    {{ Form::open(array('url' => 'permissions')) }}

                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                                    </div>
                                    <br>

                                    @if(!$roles->isEmpty())

                                        <h4>Assign Permission to Roles</h4>

                                        @foreach ($roles as $role) 
                                            {{ Form::checkbox('roles[]',  $role->id ) }}
                                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                        @endforeach

                                    @endif
                                    
                                    <br>
                                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                                    {{ Form::close() }}

                                    {{-- <form method="POST" role="form" action="{{ url('/permissions/create') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" name="name" class="form-control" id="userName" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Role</label>
                                                    <select>
                                                        @foreach ($roles as $role)
                                                        <option value="{{ $id -> id }} ">  </option>
                                                        <option value="{{ $id -> id }} ">{{ $name -> name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success pull-right">Add</button>
                                        <div class="clearfix"></div>
                                        @include ('layouts.errors')
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection