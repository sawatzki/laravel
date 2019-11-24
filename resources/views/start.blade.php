@extends('layouts.app')

@section('content')
<h1>START</h1>
    <art-prop-component :url_data="{{ json_encode($url_data) }}"></art-prop-component>
@endsection
