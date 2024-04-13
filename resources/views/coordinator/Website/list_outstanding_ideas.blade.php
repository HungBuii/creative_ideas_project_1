@extends('coordinator.Website.layout.app')

@section('title', 'List Outstanding Ideas')

@section('main_content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">List Outstanding Ideas</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i> Back</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#!">List Outstanding Ideas</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Management Faculties</h5>
                </div>
                <div class="card-body table-border-style d-flex justify-content-between align-items-center">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Topic</th>
                                    <th>Tag</th>
                                    <th>File</th>
                                    <th>Image</th>
                                    <th>Faculity</th>
                                    <th>Student</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1</td>
                                    <td><a href="">F</a></td>
                                    <td>hehe</td>
                                    <td>
                                        <a href="">
                                            <i class="feather mr-2 icon-file"></i>
                                            File.pdf
                                        </a>
                                    </td>
                                    <td><img src="https://media.istockphoto.com/id/1410046653/vector/cute-school-kids-around-chalkboard-happy-children-with-empty-blackboard-banner-with-adorable.jpg?s=1024x1024&w=is&k=20&c=Tt-ykpYpAv-JrCfyeNIrV0cpR7ife87gdhF838M9wRY="
                                        style="max-width: 257px; max-height: 257px;"
                                        class="profile-picture" alt="User-Image"></td>
                                    <td>hehe</td>
                                    <td><a href="">Student A</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection