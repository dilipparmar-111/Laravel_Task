@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>API Data</h1>
                        </div>
                    </div>
                </div>
            </section>
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <div class="card-header">
                <form method="GET" action="">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" name="search" placeholder="Search Here...">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body" style="font-weight: bold">
            @include('admin.api_data.table')
        </div>
    </div>
@endsection
