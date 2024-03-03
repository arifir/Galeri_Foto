
    @extends('layout.master_2')

    @section('content_2')

    @include('include.navbarLogin')

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/hero/anime_wallpaper.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Sign Up</h2>
                        <p>Welcome to the Fotoku</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <form action="/ProsesRegister" method="post">
                            @csrf

                            @if ($message = Session::get('error'))
                            <h4 class="text-warning">{{ $message }}</h4>
                            @endif

                            @if ($message = Session::get('success'))
                            <div class="alert alert-secondary bg-success col-lg-10 text-white" role="alert">
                                <i class="icon_check"></i>
                                {{ $message }}
                            </div>
                            @endif

                            <div class="input__item">
                                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                <span class="icon_mail"></span>
                                @error('email')
                                <p class="text-warning ms-1">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- <div class="input__item">
                                <input type="text" placeholder="Username">
                                <span class="icon_profile"></span>
                            </div> --}}
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Password">
                                <span class="icon_lock"></span>
                                @error('password')
                                <p class="text-warning ms-1">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- <div class="input__item">
                                <input type="varchar" placeholder="Address">
                                <span class="icon_house"></span>
                            </div> --}}
                            <div class="input__item">
                                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                                <span class="icon_pencil"></span>
                                @error('username')
                                <p class="text-warning ms-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Already Have Account?</h3>
                        <a href="/login" class="primary-btn">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->



      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    @include('include.footer')
    @endsection
