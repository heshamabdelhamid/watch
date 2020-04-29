@extends('dashboard.layout.app')

@php
    $pageTitle = "Edit tag";
    $pageDes   = "Here you can Edit tag"
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
              <h4 class="card-title">Edit tag</h4>
              <p class="card-tag"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('tags.update', $tag->id )}} " method="POST">
                @method('PUT')
                @include('dashboard.tags.form')
                <button type="submit" class="btn btn-primary pull-right">Edit tag</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection