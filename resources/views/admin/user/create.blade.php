@extends('admin.layouts.master')

@section('title', 'Create User')

@section('main-content')
    <h2>Create User</h2>

    <!-- Breadcrumb -->
    <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! route('admin.dashboard') !!}">Home</a></li>
                <li class="breadcrumb-item"><a href="{!! route('admin.users.index') !!}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create user</li>
            </ol>
        </nav>
    </div>

    <!-- Content -->
    <div class="section">
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        @include( 'admin.user._form' )
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected>Select status</option>
                                <option value="1">Draft</option>
                                <option value="2">Active</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <a class="btn btn-primary btn-block" href="#" role="button">Save</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
