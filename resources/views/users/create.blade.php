@extends('layouts.master')

@section('title', '| Add User')

@section('content')

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Users</h4>
                                    <p class="category">Add new user</p>
                                </div>
                                <div class="card-content">
                                    {{ Form::open(array('url' => 'users')) }}

                                    <div class="form-group">
                                        {{ Form::label('name', 'Name') }}
                                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('number', 'Number') }}
                                        {{ Form::text('number', '', array('class' => 'form-control')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('email', 'Email') }}
                                        {{ Form::email('email', '', array('class' => 'form-control')) }}
                                    </div>

                                    {{-- <div class='form-group'>
                                        @foreach ($roles as $role)
                                            {{ Form::checkbox('roles[]',  $role->id ) }}
                                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                        @endforeach
                                    </div> --}}

                                    <div class="form-group">
                                        {{ Form::label('password', 'Password') }}<br>
                                        {{ Form::password('password', array('class' => 'form-control')) }}

                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('password', 'Confirm Password') }}<br>
                                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                                    </div>

                                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                                    {{ Form::close() }}
                                    <div class="clearfix"></div>
                                    @include ('layouts.errors')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection