@extends('layouts.app')

@section('content')
{{--{{ dd(json_encode($cars)) }}--}}
    <cars-component :cars="{{ json_encode($cars) }}"></cars-component>

@endsection
