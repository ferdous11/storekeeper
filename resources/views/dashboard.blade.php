@extends('layouts.app')

@section('content')
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container mt-4">
            <h1>Sales Dashboard</h1>
            <div class="row">
                <div class="card text-white bg-warning mt-5" style="max-width: 17rem;">
                   
                    <div class="card-body" style="text-align: center;vertical-align: middle;">
                        <h5 class="card-title">Today's Sales: {{ $todaySales }}</h5>
                    </div>
                </div>

                <div class="card text-white bg-secondary mt-5" style="max-width: 17rem;">
                   
                    <div class="card-body" style="text-align: center;vertical-align: middle;">
                        <h5 class="card-title">Yesterday's Sales: {{ $yesterdaySales }}</h5>
                    </div>
                </div>

                <div class="card text-white bg-info  mt-5" style="max-width: 17rem;">
                   
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title">This Month's Sales: {{ $thisMonthSales }}</h5>
                    </div>
                </div>

                <div class="card text-white bg-dark mt-5" style="max-width: 17rem;">
                   
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title">Last Month's Sales: {{ $lastMonthSales }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection