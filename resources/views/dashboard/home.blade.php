@extends('dashboard.layout.app')

@section('title')
    Home Page
@endsection

@push('css')
    
@endpush

@section('content')

    @component('Dashboard.layout.header', ['nav_title' => 'Home Page' ])
    @endcomponent

@endsection

@push('js')
    
@endpush