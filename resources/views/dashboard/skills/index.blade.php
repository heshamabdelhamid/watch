@extends('dashboard.layout.app')

@php
$pageTitle = "Skills Control";
$pageDes = "Here you can Add / Edit / Delete Skills"
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

                <h3 class="box-title" style="margin-bottom: 15px"> <small>{{ $skills->total() }}</small></h3>

                <form action="{{ route('skills.index') }}" method="get">

                    <div class="row">

                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Search"
                                value="{{ request()->search }}">
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-white"><i class="fa fa-search"></i> Search</button>
                        </div>

                    </div>
                </form><!-- end of form -->


                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">{{ $pageTitle}}</h4>
                        <p class="card-skill">{{$pageDes}}</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href=" {{route('skills.create')}} " class="btn btn-white btn-round text-dark">Add skill</a>
                    </div>
                </div>


            </div>
            <div class="card-body">
                @if ($skills->count() > 0)
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th> ID </th>
                            <th> Name </th>
                            <th class="text-right"> Action </th>

                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                            <tr>
                                <td> {{$skill->id}} </td>
                                <td> {{$skill->name}} </td>
                                <td class="td-actions text-right">
                                    <a href=" {{route('skills.edit', $skill->id)}} " rel="tooltip"
                                        class="btn btn-white btn-link btn-sm" data-original-title="Edit skill">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <form action="{{ route('skills.destroy', $skill->id )}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" rel="tooltip" class="btn btn-white btn-link btn-sm"
                                            data-original-title="Delete skill">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $skills->appends(request()->query())->links() }}
                    @else
                    <h1>NOT FOUND</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
