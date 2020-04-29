@extends('Dashboard.layout.app')

@php
    $pageTitle = "Create User";
    $pageDes   = "Here you can Add User"
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
              <h4 class="card-title">Add User</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('users.store')}} " method="POST">
                @csrf
                @include('Dashboard.users.form')
                <button type="submit" class="btn btn-primary pull-right">Add User</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection