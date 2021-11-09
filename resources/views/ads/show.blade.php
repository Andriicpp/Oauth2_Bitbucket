@extends('layout')

@section('content')
        <h2>{{ $ad->title }}</h2>
        <p>{{ $ad->user->username }}</p>
        <p>{{ $ad->created_at->diffForHumans() }}</p>
        <p>{{ $ad->description }}</p>
@endsection
