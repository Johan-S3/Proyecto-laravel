<style>
  .is-invalid{
    border: 1px solid red
  }

  .alert-danger{
    color: red
  }

</style>
@extends('layout')

@section('header')
{{-- <h1 class="font-mono text-5xl font-bold text-center">Posts</h1> --}}
@endsection

@section('main')
<form action="{{ route('posts.store')}}" method="post" class="flex flex-col text-center justify-items-center w-[25%]  bg-[#fff] p-[50px] rounded-[25px] gap-6" enctype="multipart/form-data">
  @csrf
  <h1>Crear un Post</h1>
  <div class="flex flex-col text-left gap-1">
    <label for="title">Titulo</label>
    <input name="title" type="text" class="bg-[#C5BEB4] rounded-[25px] pt-[7px] pb-[7px] pl-[14px] pr-[14px]  @error('title') is-invalid @enderror" value="{{ old("title")}}">
    @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="flex flex-col text-left gap-1">
    <label for="body">Cuerpo</label>
    <textarea name="body" id="cuerpo" cols="30" rows="5" class="bg-[#C5BEB4] rounded-[25px] pt-[7px] pb-[7px] pl-[14px] pr-[14px] @error('body') is-invalid @enderror">{{ old("body") }}</textarea>
    @error('body')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="flex flex-col text-left gap-1">
    <label for="imagen">Imagen</label>
    <input type="file" name="file" class="bg-[#C5BEB4] rounded-[25px] pt-[7px] pb-[7px] pl-[14px] pr-[14px]  @error('file') is-invalid @enderror">
    @error('file')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="rounded-[25px] w-[50%] bg-[#C5BEB4] justify-self-center">Agregar</button>
</form>
@endsection

@section('footer')
    {{-- <h1>Footer Footer</h1> --}}
@endsection