@extends('guest.layout.base')

@section('documentTitle')
{{$nomePagina}}
@endsection

@section('content')
{{-- @dd($comic) --}}
<div class="container-90 relative">
    <div class="title">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <h2>{{$comic['title']}}</h2>
    <span>{{$comic['price']}}</span>
    <span>AVAIBLE</span>
    <button><select name="Check Avaibility" id="">
        <option value="ciao">Ciao</option>
        <option value="hello">Hello</option>
    </select></button>
    <p>{{$comic['description']}}</p>
    <div class="credits">
        <div class="artist">
            <h2>Artist:</h2>
            <ul>
                @foreach($comic['artists'] as $artist)
                    <li><a href="">{{$artist}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="writers">
            <h2>Writers:</h2>
            <ul>
                @foreach($comic['writers'] as $writer)
                    <li><a href="">{{$writer}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection