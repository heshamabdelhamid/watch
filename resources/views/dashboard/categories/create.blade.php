@extends('Dashboard.layout.app')

@php
    $pageTitle = "Create category";
    $pageDes   = "Here you can Add category"
@endphp

@section('title')
    {{$pageTitle}}
@endsection

@section('content')

    @component('Dashboard.layout.header', ['nav_title' => $pageTitle ])
    @endcomponent

    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Add category</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('categories.store')}} " method="POST">
                @csrf
                @include('Dashboard.categories.form')
                <button type="submit" class="btn btn-primary pull-right">Add category</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection
