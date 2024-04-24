@extends('guest.layout.app')

@section('title', 'Guest View Contribution')

@section('main_content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">View contribution</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">View contribution</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @isset($temp)
        <iframe height="600" width="1000" src="{{ asset('/storage/files/' . $temp . '.pdf') }}" frameborder="0"></iframe>
        @else
        <iframe height="600" width="1000" src="{{ asset('/storage/files/' . $single_idea->file) }}" frameborder="0"></iframe>
        @endisset
        
        

    </div>
</div>
@endsection