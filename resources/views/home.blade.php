@extends('layout.default')
@section('content')
<div class="container">
    @foreach($blogs as $key => $value)
    <div class="col-md-7 ml-auto mr-auto card mt-5 mb-2">
        <h6>Title: {{$value->title}}</h6>
        <p>{{$value->body}}</p>
    </div>
        <hr>
    @endforeach
</div>
@endsection
