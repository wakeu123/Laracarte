@extends('layouts.app', ['title' => 'contact'])


@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="padding-top:20px; margin-left:15%;">
            <h1>Get In Touch</h1>
        <p class="text-muted">if you having trouble with this service, please <a href="mailto:{{config('laracarte.admin_support_mail')}}">ask for help</a>.</p>

        <form action="{{route('post_contact_path')}}" method="POST">

                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="control-label">Name :</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required="required" value="{{ old('name') }}">
                   {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class="control-label">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Your email" required="required" value="{{old('email')}}">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group{{ $errors->has('message') ? 'has-error' : '' }}">
                    <label for="message" class="control-label sr-only">Message :</label>
                    <textarea class="form-control" rows="10" cols="10" required="required" id="message" name="message">{{old('message')}}</textarea>
                    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Send Message &raquo;</button>
                </div>
            </form>
        </div>

    </div>
@endsection
