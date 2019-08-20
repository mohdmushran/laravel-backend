@extends('layouts.layout')

@section('content')

<div id="body">
    <form action="{{ route('postvacancypage') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name" id="name" placeholder="name">
        {{ $errors->vacancypage->first('name') }}
        <input type="text" name="email" id="email" placeholder="email">
        {{ $errors->vacancypage->first('email') }}
        <input type="text" name="phone" id="phone" placeholder="phone">  
        {{ $errors->vacancypage->first('phone') }}
        <input type="text" name="city" id="city" placeholder="city">    
        {{ $errors->vacancypage->first('city') }}
        <input type="text" name="address" id="address" placeholder="address">  
        {{ $errors->vacancypage->first('address') }}<br/>
        <input type="submit" name="send" id="send" placeholder="send">    
    </form>
</div>

@endsection
