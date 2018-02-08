@extends("Admin::layouts.default")

@section("content")
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-primary">
                <div class="card-body pb-0">
                    <h4 class="mb-0">9.823</h4>
                    <p>Members online</p>
                </div>
                <div class="chart-wrapper px-3" style="height:70px;">
                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
    </div>
@stop

@section("script")

@stop