@extends('guest.layout.app')

@section('title', 'About Us')

@section('main_content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">About Us</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
			<!-- Members introduction -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4 style="text-align: center">Our Team</h4>
					</div>
					<div class="card-body">
                        <div class="card-columns"
                        style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: stretch;">
                        <div class="card"
                            style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
                            <img class="img-fluid card-img-top"
                                src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Hoang Minh Tam</h5>
                                <p class="card-text">Front-End Developer: UI Specialist and Bug Buster</p>
                            </div>
                        </div>
                        <div class="card"
                            style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
                            <img class="img-fluid card-img-top"
                                src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Bui Duy Hung</h5>
                                <p class="card-text">
                                    Data Maestro and Team Lead: Back-End Development Expertise
                                </p>
                            </div>
                        </div>
                        <div class="card"
                            style="width: 300px; margin: 10px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
                            <img class="img-fluid card-img-top" src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Dam Thanh Tung</h5>
                                <p class="card-text">Quality Assurance Specialist and Backlog Master: Ensuring Flawless Websites and Efficient Project Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
						
					</div>
					</div>
                    <!--Members introduction end -->
                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header">
                                        <h4 style="text-align: center">Welcome to our Website</h4>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                        <h5>What our website do ?</h5>
                                                        <p>
                                                            Our website is for a school management project that has four main roles: <br>

                                                            <br><b>Administrator:</b> The administrator is responsible for managing the overall system, including creating and managing user accounts, assigning roles, and monitoring system activity.
                                                            <br><b>Marketing Manager:</b> The marketing manager is responsible for overseeing the marketing efforts of the school. This includes developing and implementing marketing campaigns, tracking results, and generating reports.
                                                            <br><b>Marketing Coordinator:</b> The marketing coordinator is responsible for managing the marketing activities for a specific department or program. This includes creating and sharing content, managing social media accounts, and responding to inquiries.
                                                            <br><b>Student:</b> Students are able to post updates and share information with their classmates and teachers. They can also comment on other students' posts and view comments from marketing coordinators.
                                                            <br><br>In short, the project will manage student posts within each department. Each department will have a dedicated marketing coordinator who will review student posts and select the most promising ones to be featured. Students can also comment on each other's posts, and marketing coordinators can respond to these comments. 
                                                            The marketing manager will have an overview of each department and will be responsible for monitoring progress.
                                                        </p>
                                                </div>
                                                <button type="submit" class="btn btn-primary">View more</button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img src="https://cdn.discordapp.com/attachments/1231277635816914994/1232599527148617780/image.png?ex=662a0b43&is=6628b9c3&hm=dbee080dd2e968e7421a5ce22f2f9620e128ae3caacf01993aff06d4de237088&"
                                                style="max-width: 100%; max-height: 100%;" alt="User-Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			
		</div>
    </div>
</div>
@endsection