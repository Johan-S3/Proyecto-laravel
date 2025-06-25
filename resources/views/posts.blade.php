@extends('layout');

@section('header')
    <h1>Posts</h1>
@endsection

@section('main')
    @foreach ($posts as $item)
      <div>
        <img src="{{$item->image->path}}" alt="imagen">
        <h1>{{$item->title}}</h1>
        <p>{{$item->body}}</p>
      </div>
    @endforeach
@endsection

@section('footer')
    <h1>Footer Footer</h1>
@endsection