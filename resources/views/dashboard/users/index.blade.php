@extends('dashboard.layout.app')

@php
    $pageTitle = "Users Control";
    $pageDes   = "Here you can Add / Edit / Delete Users"
@endphp

@section('title')
    {{$pageTitle}}
@endsection

@section('content')

    @component('Dashboard.layout.header', ['nav_title' => $pageTitle ])
    @endcomponent

    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">

              <h3 class="box-title" style="margin-bottom: 15px"> <small>{{ $users->total() }}</small></h3>

              <form action="{{ route('users.index') }}" method="get">

                  <div class="row">

                      <div class="col-md-4">
                          <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->search }}">
                      </div>

                      <div class="col-md-4">
                          <button type="submit" class="btn btn-white"><i class="fa fa-search"></i> Search</button>
                      </div>

                  </div>
              </form><!-- end of form -->


              <div class="row">
                <div class="col-md-8">
                  <h4 class="card-title ">{{ $pageTitle}}</h4>
                  <p class="card-category">{{$pageDes}}</p>
                </div>
                <div class="col-md-4 text-right">
                  <a href=" {{route('users.create')}} " class="btn btn-white btn-round text-dark">Add User</a>
                </div>
              </div>


            </div>
            <div class="card-body">
              @if ($users->count() > 0)
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th> ID </th>
                    <th> Name </th>
                    <th>Email</th>
                    <th class="text-right"> Action </th>

                  </thead>
                  <tbody>
                    @foreach ($users as $index=>$user)
                      <tr>
                        <td> {{$index + 1}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td class="td-actions text-right">
                          <a href=" {{route('users.edit', $user->id)}} " rel="tooltip" class="btn btn-white btn-link btn-sm" data-original-title="Edit User">
                            <i class="material-icons">edit</i>
                          </a>
                          <form action="{{ route('users.destroy', $user->id )}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" rel="tooltip" class="btn btn-white btn-link btn-sm" data-original-title="Delete User">
                              <i class="material-icons">close</i>
                            </button>
                          </form>

                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>

                {{ $users->appends(request()->query())->links() }}
                @else
                  <h1>NOT FOUND</h1>
                @endif
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection
