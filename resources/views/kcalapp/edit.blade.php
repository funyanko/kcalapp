@extends('layouts.app')

@section('content')
<div class="container small w-50">
    <div class="card-header">カロリー編集</div>
  <form action="{{ route('kcalapp.update', ['id'=>$calorie->id]) }}" method="POST">
  @csrf
    <fieldset>
      <div class="form-group">
        <label for="protein">{{ __('タンパク質') }}</label>
        <input type="text" class="form-control" name="protein">
      </div>
      <div class="form-group">
        <label for="carbohydrate">{{ __('炭水化物') }}</label>
        <input type="text" class="form-control" name="carbohydrate">
      </div>
      <div class="form-group">
        <label for="fat">{{ __('脂質') }}</label>
        <input type="text" class="form-control" name="fat">
      </div>
      <div class="d-flex justify-content-between pt-3">
        <a href="{{ route('kcalapp.index') }}" class="btn btn-outline-secondary" role="button">
            <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('メイン画面') }}
        </a>
        <button type="submit" class="btn btn-success">
            {{ __('更新') }}
        </button>
      </div>
    </fieldset>
  </form>
</div>
@endsection