@extends('layouts/home')

@section('content')
@php $showFilter = true; @endphp
    @foreach ($posts as $idx => $post)
        <x-view-post :post="$post" :index="$idx" :showRoute="'show'" />
    @endforeach
@endsection
