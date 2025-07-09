@extends('layout')

@section('header')
    <h1 class="font-mono text-5xl font-bold text-center">Posts</h1>
@endsection

@section('main')
<div class="grid grid-cols-4 gap-10 w-[90%] min-w-[1400px] mt-[50px] justify-items-center">
  @foreach ($posts as $item)
    <div class="w-80 p-10 min-w-64 rounded-3xl shadow-xl bg-[#fff]">
      <img src="{{$item->image->path ?? ''}}" alt="imagen" class="w-full rounded-3xl">
      <h1 class="text-5xl text-[#C5BEB4] font-bold text-center pb-[20px]">{{$item->title}}</h1>
      <p>{{$item->body}}</p>
    </div>
  @endforeach
</div>
@endsection

@section('footer')
    <h1>Footer Footer</h1>
@endsection