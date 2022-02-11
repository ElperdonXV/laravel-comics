@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')
    {{-- @php dd($comics)
@endphp --}}
    <main>
        <h1>Ciao a tutti</h1>
    </main>
@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection