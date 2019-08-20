@extends('layouts.layout')

@section('content')


<div id="body">
    <h1><span>let's keep in touch</span></h1>
    <form action="{{ route('postcontactpage') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="fname" id="fname" placeholder="name">
        <input type="text" name="address" id="address" placeholder="address">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="text" name="phone" id="phone" placeholder="phone number">
        <textarea name="message" id="message" placeholder="Enter Message"></textarea>
        <input type="submit" name="send" id="send" placeholder="send">
    </form>
</div>


@endsection