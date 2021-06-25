@extends('layouts.app')
@section('form')

    <div class="form">
        <form action="{{url('sendemail/send')}}" method="post" role="form" class="php-email-form">
            @csrf

        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="col-md form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>
  @endsection