@extends('layouts.app')

@section('content')
@if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif
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
  <thead>
    <tr>
      <th>タンパク質</th>
      <th>炭水化物</th>
      <th>脂質</th>
      <th>詳細</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($calories as $calorie)
    <tr>
      <td>{{ $calorie->protein }}</td>
      <td>{{ $calorie->carbohydrate }}</td>
      <td>{{ $calorie->fat }}</td>
      <td><a href="{{ route('kcalapp.show', ['id'=>$calorie->id]) }}" class="btn btn-primary">詳細</a></td>
      <td><a href="{{ route('kcalapp.edit', ['id'=>$calorie->id]) }}" class="btn btn-info">編集</a></td>
      <td>
        <form action="{{ route('kcalapp.destroy', ['id'=>$calorie->id]) }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">削除</button>
        </form>
      </td>
    </tr>
    @endforeach
    <tr>
      <td>g</td>
      <td>g</td>
      <td>g</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<a href="{{ route('kcalapp.create') }}">登録</a>
<a href="{{ route('kcalapp.all') }}">全て表示</a>

                        
</div>
</div>
</div>
</div>
</div>
@endsection
