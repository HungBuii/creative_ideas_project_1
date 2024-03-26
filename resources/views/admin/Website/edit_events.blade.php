@extends('admin.Website.layout.app')

@section('title', 'Admin edit event')

@section('main_content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit an event</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit an event</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            </div>
        </div>
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5>Edit an event</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label>Faculity Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="text" class="form-control" rows="4" cols="50" placeholder="Enter Description"></textarea>
                                </div>
                                <button type="submit" class="btn  btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form>    
                                <label>Select Date</label>    
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text">Date Start</label>
                                    </div>
                                    <input type="date">
                                    <div style="margin-left: 5%">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text">Date End</label>
                                            <input type="date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection