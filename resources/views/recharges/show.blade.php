@extends('layouts.master')

@section('content')

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title"> {{ $recharge -> recharge_date}} </h4>
                                    <h4 class="title"> {{ $recharge -> last_recharge_days}} </h4>
                                    <h4 class="title"> {{ $recharge -> last_months_KWh}} </h4>
                                    <h4 class="title"> {{ $recharge -> amount_paid}} </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection