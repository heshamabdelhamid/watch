@extends('dashboard.layout.app')

@php
    $pageTitle = "Edit User";
    $pageDes   = "Here you can Edit User"
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
              <h4 class="card-title">Edit User</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <form action=" {{ route('users.update', $user->id )}} " method="POST">
                @method('PUT')
                @include('dashboard.users.form')
                <button type="submit" class="btn btn-primary pull-right">Edit User</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection