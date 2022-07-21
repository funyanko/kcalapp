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

                    <form action="{{ route('kcalapp.store')}}" method="post">
                        @csrf
                        <input type="text" class="form-control bc w-25" placeholder="タンパク質"
                                aria-describedby="basic-addon2" name="protein">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">g</span>
                            </div>
                        <input type="text" class="form-control bc w-25" placeholder="炭水化物" 
                                aria-describedby="basic-addon2" name="carbohydrate">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">g</span>
                            </div>
                        <input type="text" class="form-control bc w-25" placeholder="脂質" 
                                aria-describedby="basic-addon2" name="fat">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">g</span>
                            </div>
                    <input type="submit" value="送信">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
