        <!-- navbar -->
        <div class="container">
            <div class="nav row navbar navbar-expand-lg navbar-light bg-white">
                <a href="#" class="navbar-brand">
                    <img src="{{url('frontend/images/logo.png')}}" alt="logo nomads">
                </a>
                <!-- toggle mobile -->
                <button class="navbar-toggler navbar-toggler-right"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navb">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navb">
                    <ul class="navbar-nav ml-auto mr-3">
                        <li class="nav-item mx-md-2">
                            <a href="#" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="#" class="nav-link">Paket Travel</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                                Services
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Link 1</a>
                                <a href="#" class="dropdown-item">Link 2</a>
                                <a href="#" class="dropdown-item">Link 3</a>
                            </div>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="#" class="nav-link">Testimonial</a>
                        </li>

                        <!-- Mobile Button -->
                        <form action="" class="form-inline d-sm-block d-md-none">
                            <button class="btn btn-login my-2 my-sm-0">
                                Masuk
                            </button>
                        </form>
                        <!-- Desktop Button -->
                        <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                                Masuk
                            </button>
                        </form>
                    </ul>
                </div>
                </div>
            </div>
        </div>
