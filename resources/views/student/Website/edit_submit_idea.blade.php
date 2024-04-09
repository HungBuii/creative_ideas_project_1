@extends('student.Website.layout.app')

@section('title', 'Create Idea Post')

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

                                <b>
                                    <p style="font-size: 150%">Faculity :
                                        {{ $single_faculty->name }}</p>
                                </b>

                                <div class="form-group">
                                    <label>Description</label>
                                    <p>{{ $single_faculty->description }}</p>
                                    <li><b>Deadline <i class="feather mr-2 icon-calendar"></i></b>: {{
                                        $single_faculty->date_start }} - {{ $single_faculty->date_end }}</li>
                                    <li><b>Coordinator assigned <i class="feather mr-2 icon-user"></i></b>:
                                        @if ($single_faculty->coordinator_id != 0)
                                        {{ $single_faculty->coordinator->name }}
                                        @else
                                        No Coordinator
                                        @endif
                                    </li>
                                </div>

                            </form>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="table-active">Submission status</td>
                                            <th class="table-success">Submitted for grading</th>
                                        </tr>
                                        <tr>
                                            <td class="table-active">Time Remaining</td>
                                            <th class="table-danger">Assignment was submitted 1 day 4 hours late</th>
                                        </tr>
                                        <tr>
                                            <td class="table-active">File submissions</td>
                                            <th><a href="{{ route('student_download_file', Auth::guard('student')->user()->idea->file) }}"><i
                                                        class="feather mr-2 icon-file"></i>{{ Auth::guard('student')->user()->idea->file }}</a>
                                                <br>
                                                <img src="https://media.istockphoto.com/id/1410046653/vector/cute-school-kids-around-chalkboard-happy-children-with-empty-blackboard-banner-with-adorable.jpg?s=1024x1024&w=is&k=20&c=Tt-ykpYpAv-JrCfyeNIrV0cpR7ife87gdhF838M9wRY="
                                                    style="max-width: 257px; max-height: 257px; margin-left: 220px"
                                                    class="profile-picture" alt="User-Image">
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End of Table -->

                        <!-- Edit -->
                        <button type="button" class="btn btn-warning" data-toggle="modal"
                            data-target=".bd-example-modal-lg" style="margin-left: 50%"><i
                                class="feather mr-2 icon-edit"></i>Edit Post
                        </button>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title h4" id="myLargeModalLabel">Edit Post</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <form action="{{ route('student_edit_submit_idea', Auth::guard('student')->user()->idea->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}">

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Topic</label>
                                                        <input type="text" class="form-control" placeholder="Enter Title" name="topic" value="{{ Auth::guard('student')->user()->idea->topic }}">
                                                        @error('topic')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror

                                                        <label>Tag#</label>
                                                        <input type="text" class="form-control" placeholder="Enter Tag#" name="tag" value="{{ Auth::guard('student')->user()->idea->tag }}">
                                                        @error('tag')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror

                                                        <label>Current File: </label>
                                                        <p>{{ Auth::guard('student')->user()->idea->file }}</p>
                                                        <label>Upload Files</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="inputGroupFile01" name="file">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                file ( .docx, JPG and PNG only)</label>
                                                            @error('file')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of Edit -->
                        <br><br>

                        <!-- Comment -->

                        @endsection