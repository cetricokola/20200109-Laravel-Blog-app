@extends('layout.default')
@section('content')
    <div class=" mt-5">
        <form method="post" action="post_blog">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="title" placeholder="Blog Title">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="10" placeholder="Blog Content" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary px-4">Publish blog</button>
        </form>
    </div>
@stop
