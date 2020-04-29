@extends('dashboard.layout.app')

@php
    $pageTitle = "Edit skill";
    $pageDes   = "Here you can Edit skill"
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
              <h4 class="card-title">Edit skill</h4>
              <p class="card-skill"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('skills.update', $skill->id )}} " method="POST">
                @method('PUT')
                @include('dashboard.skills.form')
                <button type="submit" class="btn btn-primary pull-right">Edit skill</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection