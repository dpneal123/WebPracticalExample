@extends('layouts.app')
@section('title', $visitor->user->name)

@section('content')
    <p> {{ $visitor->comments }} </p>
    <div class="flex m-2">
    <a class="btn btn-blue" href="{{ route('visitors.index') }}">Back</a>
    </div>
@endsection
