@extends('layouts.layout')

@section('content')

<div id="body">
    <form action="{{ route('postprofilepage') }}" method="POST">
        {{ csrf_field() }}
        
        <input type="text" name="name" id="name" placeholder="name">
        <input type="text" name="address" id="address" placeholder="address">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="text" name="phone" id="phone" placeholder="phone">
        <input type="submit" name="send" id="send" placeholder="send">

        
    </form>
</div>
@endsection
