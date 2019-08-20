@extends('layouts.layout')

@section('content')

<div id="body">
    <form action="{{ route('postproviderpage') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name" id="name" placeholder="name">
        {{ $errors->providerpage->first('name') }}
        <input type="text" name="address" id="address" placeholder="address">     
        {{ $errors->providerpage->first('address') }}
        <input type="text" name="email" id="email" placeholder="email">
        {{ $errors->providerpage->first('email') }}
        <input type="text" name="phone" id="phone" placeholder="phone">
        {{ $errors->providerpage->first('phone') }}
        <input type="text" name="city" id="city" placeholder="city">
        {{ $errors->providerpage->first('city') }}<br/>
        <input type="submit" name="send" id="send" placeholder="send">        
    </form>
</div>
@endsection