<nav class="navbar navbar-dark navbar-expand-lg" style="background: linear-gradient(180deg, #FFC2D9 0%, #FF99BE 100%); height: 90px;">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <img src="assets/images/logoo2.png" alt="Logo" style="width: 100px; height: auto;">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center gap-4" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'shop' ? 'active' : '' }}" href="/shop">Shop</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'contact' ? 'active' : '' }}" href="/contact">Contact
                        Us</a> 
                </li> --}}
            </ul>
        </div>
        <form class="d-flex" role="search" style="border-radius: 35px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="d-flex align-items-center ms-auto">
            @auth
                {{-- <div class="select" tabindex="0" role="button">
                    <div class="text-links">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="{{ asset('storage/user/' . Auth::user()->foto) }}" class="rounded-circle"
                                style="width: 50px;" alt="User Avatar">
                            <div class="d-flex flex-column text-white">
                                <p class="m-0" style="font-weight: 700; font-size:14px;">{{ Auth::user()->name }}</p>   
                                <p class="m-0" style="font-size:12px">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="links-login text-white" id="links-login">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link text-white text-decoration-none">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-link text-white text-decoration-none">Login</a> --}}
                {{-- <li class="nav-item">
                    <button type="button" class="btn" data-bs-toggle="modal " style="background-color: #c55492; color:#ffffff"
                        data-bs-target="#exampleModal">
                        Login | Register</button >
                </li> --}}
            @endauth
        </div>
    </div>
</nav>



<script>
    $(".text-links").click(function(e) {
        e.preventDefault();
        var $linksLogin = $("#links-login");
        if ($linksLogin.hasClass("activeLogin")) {
            $linksLogin.removeClass("activeLogin");
        } else {
            $linksLogin.addClass("activeLogin");
        }
    });
</script>