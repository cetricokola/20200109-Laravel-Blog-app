@extends('layout.default')
@section('content')
    <div class=" mt-5">
        <h3>Write to us</h3>
        <form method="post" action="send_mail">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="email" placeholder="Your email address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="10" placeholder="Message body" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary px-4">Send message</button>
        </form>
    </div>
@stop
