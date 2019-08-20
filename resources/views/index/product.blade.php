@extends('layouts.layout')

@section('content')

<div id="body">
    <form action= "{{ route('postproductpage')}}" method ="POST">
        {{ csrf_field() }}
       <input type="text" name="title" id="title" placeholder="title">
       <textarea name="description" id="description" placeholder="description"></textarea>>
       <input type="text" name="price" id="price" placeholder="price">
       <input type="text" name="quantity" id="quantity" placeholder="quantity">
       <input type="submit" name="send" id="send" placeholder="send">
     </form>
</div>

@endsection