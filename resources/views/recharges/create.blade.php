@extends('layouts.master')

@section('content')

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Recharges</h4>
                                    <p class="category">Add new recharge</p>
                                </div>
                                <div class="card-content">
                                    <form method="POST" role="form" action="{{ url('/recharges/create') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date</label>
                                                    <input type="date" name="recharge_date" class="form-control" id="rechargeDate" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last recharge days</label>
                                                    <input type="number" name="last_recharge_days" class="form-control" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last month's KWh</label>
                                                    <input type="number" name="last_months_KWh" class="form-control" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount paid</label>
                                                    <input type="number" name="amount_paid" class="form-control" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">Add</button>
                                        <div class="clearfix"></div>
                                        @include ('layouts.errors')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section ('footer')
<!-- Page script -->
<!-- <script>
        $('#rechargeDate').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        })
</script> -->
@endsection