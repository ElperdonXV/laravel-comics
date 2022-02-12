@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')
    <div class="bg-prod">
        <div class="container-90">
            <div class="products">
                @foreach($comics as $comic)
                <div class="product">
                    <div class="thumb">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="comic-name">
                        <h2>{{$comic['title']}}</h2>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection