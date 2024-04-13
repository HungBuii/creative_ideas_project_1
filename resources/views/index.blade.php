@extends('layout.app')

@section('title', 'Admin Home')

@section('main_content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Home</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-columns">

            <!-- Chạy form từ đây -->
            <div class="card">
                <img src="https://media.istockphoto.com/id/1410046653/vector/cute-school-kids-around-chalkboard-happy-children-with-empty-blackboard-banner-with-adorable.jpg?s=1024x1024&w=is&k=20&c=Tt-ykpYpAv-JrCfyeNIrV0cpR7ife87gdhF838M9wRY="
                          style="max-width: 257px; max-height: 257px;"class="profile-picture" alt="Banner">
                <div class="card-body">
                    <h5 class="card-title">Post A</h5>
                    <p class="card-text">This is the best post of 
                        <a href="#!">This Faculity</a>
                    </p>
                    <button class="btn  btn-primary">View More</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection