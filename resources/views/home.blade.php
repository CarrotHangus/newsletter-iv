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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="col md-8">
            <div class="card">
                <div class="card-body">
                    @foreach ($categories as $category)
                    <tr>
                        <td><strong>{{ $category->name}}</strong></td>
                        <p></p>
                        <td>{{ $category->description}}</td>
                        <p></p>
                    </tr>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
