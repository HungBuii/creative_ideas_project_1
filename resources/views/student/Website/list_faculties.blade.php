@extends('student.Website.layout.app')

@section('title', 'List Faculity')

@section('main_content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Faculity</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">List Faculity</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>List Faculties</h5>
                    </div>
                    <div class="card-body table-border-style d-flex justify-content-between align-items-center">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Faculty</th>
                                        <th>Time Start</th>
                                        <th>Time End</th>
                                        <th>Coordinator</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faculties as $item)
                                    <form
                                        action="{{ route('student_join_faculty_submit', [Auth::guard('student')->user()->id, $item->id]) }}"
                                        method="POST">
                                        @csrf
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->date_start }}</td>
                                            <td>{{ $item->date_end }}</td>
                                            <td>
                                                @isset($item->coordinator->name)
                                                {{ $item->coordinator->name }}
                                                @else
                                                No Coordinator
                                                @endisset
                                            </td>
                                            {{-- <td id="actionCell1">
                                                <button type="button" class="btn btn-success"
                                                    onclick="joinFaculty(this)">
                                                    <i class="feather mr-2 icon-plus-circle"></i>Join
                                                </button>
                                            </td> --}}
                                            <td>
                                                <button>Join</button>
                                            </td>
                                        </tr>
                                    </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('student.Website.layout.button_scripts')

@endsection