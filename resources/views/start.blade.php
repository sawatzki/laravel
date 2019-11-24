@extends('layouts.app')

@section('content')
<h1>START</h1>
    <art-prop-component :cars="{{ json_encode($cars) }}"></art-prop-component>
@endsection
