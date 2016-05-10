<!-- Stored in resources/views/index.blade.php -->

@extends('layouts.master')

@section('sidebar')
    <p><a class="btn btn-primary btn-lg" href="{{url('/mosti')}}">
            Take the survey now>>
        </a></p>
@endsection

@section('content')
    <h1>All Mosti User Information</h1>

    @foreach ($forseos as $forseo)
        <forseo>
            <h2>
                <a href="{{ action('ForseoController@show', [$forseo->id]) }}">{{ $forseo->staffid }}</a></h2>
        </forseo>
    @endforeach
@stop