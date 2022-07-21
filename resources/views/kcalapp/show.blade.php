@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">カロリー摂取、計算</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-success table-striped">

                        <tr><th>タンパク質</th><th>炭水化物</th><th>脂質</th><th>入力時間</th>
                            <tr>
                                <td>{{$calorie->protein}}</td>
                                <td>{{$calorie->carbohydrate}}</td>
                                <td>{{$calorie->fat}}</td>
                                <td>{{$calorie->updated_at}}</td>
                            </tr>
                        <tr><th>g</th><th>g</th><th>g</th><th>-</th>
                        </table>

                        <table class="table table-success table-striped">

                            <tr><th>タンパク質</th><th>炭水化物</th><th>脂質</th><th>総カロリー</th>
                                <tr>
                                    <td>{{($calorie->protein)*4}}</td>
                                    <td>{{($calorie->carbohydrate)*4}}</td>
                                    <td>{{($calorie->fat)*9}}</td>
                                    <td>{{($calorie->protein)*4 + ($calorie->carbohydrate)*4 + ($calorie->fat)*9}}</td>
                                </tr>
                            <tr><th>kcal</th><th>kcal</th><th>kcal</th><th>kcal</th>
                            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
