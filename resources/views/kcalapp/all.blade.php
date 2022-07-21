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
                        @foreach ($kcals as $kcal)
                            <tr>
                                <td>{{$kcal->protein}}</td>
                                <td>{{$kcal->carbohydrate}}</td>
                                <td>{{$kcal->fat}}</td>
                                <td>{{$kcal->updated_at}}</td>
                                
                            </tr>
                        @endforeach
                        <tr><th>g</th><th>g</th><th>g</th>
                        </table>

                        <table class="table table-success table-striped">

                            <tr><th>タンパク質</th><th>炭水化物</th><th>脂質</th><th>カロリー合計</th>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->total_protein}}</td>
                                    <td>{{$item->total_carbohydrate}}</td>
                                    <td>{{$item->total_fat}}</td>
                                    <td>{{($item->total_protein)*4 + ($item->total_carbohydrate)*4 + ($item->total_fat)*9}}</td>
                                    
                                </tr>
                                @endforeach
                            
                            <tr><th>g</th><th>g</th><th>g</th><th>kcal</th>
                            </table>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
