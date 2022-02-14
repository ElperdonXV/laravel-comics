@extends('guest.layout.base')

@section('documentTitle')
{{$nomePagina}}
@endsection

@section('content')
{{-- @dd($comic) --}}
<h2>{{$comic['title']}}</h2>
@endsection