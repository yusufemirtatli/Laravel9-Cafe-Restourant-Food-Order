@extends('layouts.main')

@section('title','SubPage title')

@section('Header')
    @parent

    <p>This happend header</p>
@endsection

@section('content')
    <p>This is my body content</p>
@endsection

