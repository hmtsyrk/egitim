@extends('admin/template')

@section('title', 'Page Title')

@section('içerik')

    @foreach($user->yazilari as $yazilari)
    {{$yazilari->baslik}}
    {{$yazilari->icerik}}
    @endforeach
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
