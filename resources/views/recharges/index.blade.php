@extends('layouts.master')

@section('title', '| Add Recharge')

@section('content')

	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <a href="{{ url('/recharges/create') }}" class="btn btn-primary pull-right">Add new</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    	<div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Recharges</h4>
                                    <p class="category">recharges made so far</p>
                                </div>
                                <div class="card-content table-responsive">

                                    <table class="table table-hover">

                                        <thead>
                                            <tr>
                                                <th> Date </th>
                                                <th> Days </th>
                                                <th> Months KWh </th>
                                                <th> Amount Paid </th>
                                                <th> Operations </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($recharges as $recharge)
                                            <tr>

                                                <td>{{ $recharge->recharge_date }}</td>
                                                <td>{{ $recharge->last_recharge_days }}</td>
                                                <td>{{ $recharge->last_months_KWh }}</td>
                                                <td>{{ $recharge->amount_paid }}</td>

                                                <td>
                                                <a href="{{ route('recharges.edit', $recharge->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['recharges.destroy', $recharge->id] ]) !!}
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

