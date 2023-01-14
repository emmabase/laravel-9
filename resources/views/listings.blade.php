@extends('layout')

@section('content')
<h1>{{$heading}}</h1>

@if(count($listings) ==0)
    <p>No listings found</p>
@endif

@foreach ($listings as $key => $value)
    <h2> <a href="/listings/{{$value['id']}}">{{$value['title']}}</a>
    <p>{{$value['description']}}</p>
@endforeach

@endsection