@extends('layouts.app')
@section('title', 'Home')


{{-- main --}}
@section('main-content')
<div class="container p-5">
    <div class="row gy-3 ">
        @foreach ($comics as $comic)
            
        <div class="col-3">
            <div class="card p-3 border-warning">
            <img src="{{$comic['thumb']}}" class="img-fluid" alt="">
                <h4>{{$comic['title']}}</h4>
                <h6>{{$comic['series']}}</h6>
                <pre>{{$comic['price']}}</pre>
                <pre>{{$comic['series']}}</pre>
                <pre>{{$comic['type']}}</pre>



            </div>
            
        </div>
        @endforeach
    </div>
</div>
@endsection



