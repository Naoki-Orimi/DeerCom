@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('ログインに成功しました!') }}
                    <p>
                        <a class="home-to-top" href="/top">TOPへ</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
