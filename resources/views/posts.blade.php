@extends('layout')

@section('header')
    <h1 class="font-mono text-5xl font-bold text-center">Posts</h1>
@endsection

@section('main')
    @foreach ($posts as $item)
      <div class="w-80 p-10 min-w-64 rounded-3xl border border-black shadow-xl">
        <img src="{{$item->image->path}}" alt="imagen">
        <h1 class="text-5xl text-red-500 font-bold">{{$item->title}}</h1>
        <p>{{$item->body}}</p>
      </div>
    @endforeach
@endsection

@section('footer')
    <h1>Footer Footer</h1>
@endsection