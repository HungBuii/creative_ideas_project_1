<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="{{ route('index') }}" class="b-brand">
            <img src="https://cdn.discordapp.com/attachments/1231277635816914994/1231279628144873502/THT__1_-removebg-preview.png?ex=66366183&is=6623ec83&hm=2f484833ea9bb8a5cee3e5b59a2a3d0a03d833793f754548d1da3f8dac2752eb&" 
            alt="" class="logo" style="max-width: 180px; max-height:200px ">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Log in
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <ul class="pro-body">
                            <li>
                                <a href="{{ route('admin_login') }}" class="dropdown-item"><i
                                        class="feather icon-user"></i>
                                    As an admin
                                </a>
                            </li>
                                    <li>
                                        <a href="{{ route('manager_login') }}" class="dropdown-item"><i
                                        class="feather icon-user"></i>
                                    As a Marketing Manager
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('coordinator_login') }}" class="dropdown-item"><i
                                        class="feather icon-user"></i>
                                    As a Marketing Coordinator
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('student_login') }}" class="dropdown-item"><i
                                        class="feather icon-user"></i>
                                    As a student
                                        </a>
                                    </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>