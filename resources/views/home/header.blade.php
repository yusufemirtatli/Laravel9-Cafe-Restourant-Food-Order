<!-- Second Navigation -->
<nav class="nav-second navbar custom-navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contactf">Contact Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#service">Specilals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#faq">FAQ</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @auth()
                    <div class="dropdown d-inline-block" style="margin-right: 20px">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle fa fa-user text-uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                            <a class="dropdown-item " style="color: #0a0a0a" href="#">Profile</a>
                        </div>
                        <a href="/logoutuser" style="color: #FFFFFF;margin-left: 5px" class="text-uppercase">Logout</a>
                    </div>
                    @endauth
                </li>
                @guest
                <li class="nav-item">
                    <a href="{{route('loginuser')}}" class="btn btn-secondary btn-sm"> Login </a>
                    <a href="{{route('registeruser')}}" class="btn btn-secondary btn-sm">Register</a>
                </li>
                @endguest
                <li class="nav-item">
                    <a href="components.html" style="margin-left: 20px" class="btn btn-primary btn-sm">Shopcard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<!-- End Of Second Navigation -->
