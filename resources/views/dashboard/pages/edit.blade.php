@extends('dashboard.layout.app')

@php
    $pageTitle = "Edit page";
    $pageDes   = "Here you can Edit page"
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
              <h4 class="card-title">Edit page</h4>
              <p class="card-page"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('pages.update', $page->id )}} " method="POST">
                @method('PUT')
                @include('dashboard.pages.form')
                <button type="submit" class="btn btn-primary pull-right">Edit page</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection