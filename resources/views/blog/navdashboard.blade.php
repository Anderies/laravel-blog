                {{-- NAVBAR COMPONENT --}}
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent my-rounded-bottom mt-3">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav d-flex justify-content-center w-100">
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="/">Home</a>
                                </li>
                                {{-- @dd(Request::is('login')) --}}
                                @if (Request::is('login'))
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="/blog">
                                            Blog
                                        </a>
                                    </li>
                                @elseif(Request::is('dashboard*'))
                                    <li class="nav-item">
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="border-0 nav-link text-dark" style="background-color: transparent;">
                                                Logout
                                            </button>
                                        </form>
             
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="/login">
                                            Login
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>

                @if (session()->has('successRegis'))
                    <div class="alert border border-dark alert-dismissible fade show alert-dismissible fade show"
                        role="alert" style="font-weight: 500; margin-top: 3%;">
                        {{ session('successRegis') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @elseif (session()->has('loginError'))
                    <div class="alert border border-danger alert-dismissible fade show" role="alert">
                        <p style="font-weight: 500;margin:0;">{{ session('loginError') }}</p>
                        <button type="button" class="btn-close btn-dark" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                {{-- END NAVBAR COMPONENT --}}
