@extends('admin.Website.layout.app')

@section('title', 'Create Post')

@section('main_content')
<section class="pcoded-main-container">
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
                            <li class="breadcrumb-item"><a href="#!">Faculity</a></li>
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
                    <a href="#!">
                    <button class="btn btn-primary">Back to Faculity</button></a>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                
                                    <b><p style="font-size: 150%">Faculity :
                                          Development ideas</p></b>
                                
                                <div class="form-group">
                                    <label>Description</label>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <li><b>Deadline <i class="feather mr-2 icon-calendar"></i></b>: March-26-2024 - 04-38-00 p.m</li>
                                    <li><b>Coordinator assigned <i class="feather mr-2 icon-user"></i></b>: <a href="#!">John Doe</a></li>
                                </div>
                                
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form>    
                                        <!-- Comment !-->
                                        <p><a class="btn mb-1 btn-primary" data-toggle="collapse" href="#multiCollapseExample1"> <i class="feather mr-2 icon-message-square"></i>Submit a post</a>
                                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input type="text" class="form-control" placeholder="Enter Title">
                                                                <label>Upload Files</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file ( .docx, JPG and PNG only)</label>
                                                                </div>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">I have read and agreed to the <a href="#!">Terms of Service</a></label>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection