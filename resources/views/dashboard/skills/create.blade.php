@extends('Dashboard.layout.app')

@php
    $pageTitle = "Create skill";
    $pageDes   = "Here you can Add skill"
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
              <h4 class="card-title">Add skill</h4>
              <p class="card-skill"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('skills.store')}} " method="POST">
                @csrf
                @include('Dashboard.skills.form')
                <button type="submit" class="btn btn-primary pull-right">Add skill</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection