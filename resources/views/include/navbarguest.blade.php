<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="">
                            <img src="img/logo-2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class=""><a href="/">Homepage</a></li>
                            <li class=""><a href="/login">Login</a></li>
                            <li class=""><a href="/register">Register</a></li>
                            {{-- <li><a href="#">Login</a>
                                <ul class="dropdown">
                                    <li><a href="/register">Sign Up</a></li>
                                    <li><a href="/login">Login</a></li>
                                </ul>
                            </li> --}}
                        </ul>
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
                        {{-- <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li> --}}
                        <li><button type="text" data-bs-toggle="modal" data-bs-target="#exampleModal2" class=" text-white"><span class="icon_search"></span></button></li>
                    </ul>
                </nav>
            </div>
        </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    {{-- Modal Search --}}
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Search</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/" method="get">
                    <!-- Modal Content -->
                    <div class="mb-3">
                    {{-- <label for="Name" class="form-label">Search</label> --}}
                    <input type="text" class="form-control rounded-pill" name="cari" id="search">
                </div>
                <!-- End Modal Content -->
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    {{-- End Modal Search --}}
</header>
<!-- Header End -->
