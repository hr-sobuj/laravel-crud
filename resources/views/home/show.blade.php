@extends('layouts/home')

@section('content')
    <x-view-single-post :post="$post" :back="'home'" />
@endsection
