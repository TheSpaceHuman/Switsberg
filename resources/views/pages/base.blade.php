@extends('layouts.main')

@section('title', $currentPage->title)
@section('description', $currentPage->description)
@section('keywords', $currentPage->keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')

    {!! Blade::compileString($currentPage->body, ['a' => 'AAaaa']) !!}

@endsection

@section('footer')
    @include('includes.footer')
@endsection
