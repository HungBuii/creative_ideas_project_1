@extends('admin.Website.layout.app')

@section('title', 'Admin List Accounts')

@section('main_content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">List Accounts</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">List Accounts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Management Accounts</h5>
                    </div>
                    <div class="card-body table-border-style d-flex justify-content-between align-items-center">
                        <div class="table-responsive">
                            <a href="{{ route('admin_add_account') }}" <button type="button" class="btn btn-success" style="float:right" ;><i
                                    class="feather mr-2 icon-plus-circle"></i>Add an account</button></a>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                        <th>Gmail</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ubuntu</td>
                                        <td>null</td>
                                        <td>mdo</td>
                                        <td>mdo</td>
                                        <td>
                                            <a href="{{ route('admin_edit_account') }}"><button type="button" class="btn btn-info"><i
                                                        class="feather mr-2 icon-edit"></i>Edit</button></a>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="feather mr-2 icon-trash"></i>Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection