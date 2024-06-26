@extends('coordinator.Website.layout.app')

@section('title', 'Edit Marketing Coordinator Profile')

@section('main_content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Edit {{ $single_coordinator->name }} 's account</h5>
                        <hr>
                        <form action="{{ route('coordinator_edit_profile_submit', $single_coordinator->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                            value="{{ $single_coordinator->name }}">
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="role" class="form-control" placeholder="Enter Email" name="email"
                                            value="{{ $single_coordinator->email }}">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="floating-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Enter password">
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div> --}}
                                    {{-- <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="submit" class="btn btn-secondary">Back to Profile</button> --}}
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="role" class="form-control" value="Marketing Coordinator" readonly style="cursor: not-allowed! important;">
                                    </div>
                                    <label>Photo</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                name="photo">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                    @error('photo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Current Image</label>
                                    <div class="input-group mb-3">
                                        <img src="{{ asset('/storage/uploads/' . $single_coordinator->photo) }}"
                                            style="max-width: 257px; max-height: 257px;" class="profile-picture"
                                            alt="User-Image">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Update</button>
                                <button class="btn btn-secondary" style="margin-left: 10px; background-color: greenyellow">
                                    <a href="{{ route('coodinator_profile') }}" style="color: green">Back to Profile</a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection