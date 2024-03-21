@extends('admin.Website.layout.app')

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
        <div class="card-columns"
            style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: stretch;">
            <div class="card"
                style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
                <img class="img-fluid card-img-top"
                    src="https://psmag.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTMxODI3Mjk4OTkwMDgyMDU4/shutterstock_125158133jpg.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Project Ideas To Stimulate Your Creativity</h5>
                    <p class="card-text">Completing creative projects can help you relax and develop your skills.
                        When you have free time, consider working on creative projects that can benefit you
                        personally and professionally. You can try dozens of projects that are quick and easy to
                        complete.</p>
                </div>
            </div>
            <div class="card"
                style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
                <img class="img-fluid card-img-top"
                    src="https://scontent.fhan15-2.fna.fbcdn.net/v/t39.30808-6/365510167_679482324213284_7201273950306337203_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=10fPelVv3swAX8my-2Y&_nc_ht=scontent.fhan15-2.fna&oh=00_AfDJbZ5Y5YgJfPxt6hK6BA3XQYY6So75OC_jmSQLXpRoQQ&oe=6600BB76"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Student Commendation Awards</h5>
                    <p class="card-text">

                        Student Voice Commendation
                        Awarded to a student or students who promote student interests through engagement with the
                        University. The student will champion the student voice and promote positive change.</p>
                </div>
            </div>
            <div class="card"
                style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
                <img class="img-fluid card-img-top" src="https://avatars.githubusercontent.com/u/20041501?v=4"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Teacher Appreciation</h5>
                    <p class="card-text">Have you ever thought that teachers have spent their entire lives awarding
                        Certificates of Merit to students? What are the silent contributions of teachers? Where will
                        it be recorded? More than a thank you, FPT Edu wishes to accompany students to create
                        "special gifts" for teachers on November 20.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection