@extends('layouts/home')

@section('content')
    @foreach ($posts as $idx => $post)
        <x-view-post :post="$post" :index="$idx" />
    @endforeach
@endsection
