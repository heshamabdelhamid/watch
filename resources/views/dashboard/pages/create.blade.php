@extends('Dashboard.layout.app')

@php
    $pageTitle = "Create page";
    $pageDes   = "Here you can Add page"
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
              <h4 class="card-title">Add page</h4>
              <p class="card-page"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('pages.store')}} " method="POST">
                @csrf
                @include('Dashboard.pages.form')
                <button type="submit" class="btn btn-primary pull-right">Add page</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection