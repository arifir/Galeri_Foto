    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">

                            <a href="/home">
                                <img src="img/logo-2.png" alt="">
                            </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            {{-- <ul>
                                <li class=""><a href="/home">Homepage</a></li>
                                <li><a class="text-gray-500">Categories</a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./home.html">After Login</a></li>
                                        <li><a href="./foto-details.html">Foto Details</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">

                        <!-- <div class="header__right">
                            <a href="#" class="search-switch"><span class="icon_search"></span></a>
                            <a href="#" class=""><span class="icon_profile"></span></a>
                        </div> -->

                    <div class="header__nav">
                        <nav class="header__right mobile-menu">
                            <ul>
                                <li><a role="button" class="text-gray-500"><span class="icon_profile"></span></a>
                                    <ul class="dropdown">
                                        {{-- <li data-bs-toggle="modal" data-bs-target="#exampleModal"><a>Edit</a></li>
                                        <li data-bs-toggle="modal" data-bs-target="#exampleModal2"><a>Password</a></li> --}}
                                        <li><a href="/profil">My Profile</a></li>
                                        <li><a href="/Logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>


        <!-- Modal Edit Profil     -->
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Edit
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal Content -->
                    <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Profil</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                <!-- End Modal Content -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>
            </div>
        </div>
        <!-- End Modal edit profil -->

        <!-- Modal Change Password -->
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Inputpass" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="Inputpass" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Inputpass2" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="Inputpass2" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>
            </div>
        </div>
        <!-- End Modal Change Password -->


    </header>
    <!-- Header End -->
