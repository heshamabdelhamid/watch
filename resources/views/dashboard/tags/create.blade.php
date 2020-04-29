@extends('Dashboard.layout.app')

@php
    $pageTitle = "Create tag";
    $pageDes   = "Here you can Add tag"
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
              <h4 class="card-title">Add tag</h4>
              <p class="card-tag"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('tags.store')}} " method="POST">
                @csrf
                @include('Dashboard.tags.form')
                <button type="submit" class="btn btn-primary pull-right">Add tag</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection