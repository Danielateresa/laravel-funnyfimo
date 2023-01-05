<header>
    <div class="bg_header py-3 px-5 d-flex">
        <a class="text_pink fw-bold ms-auto pe-4">Log in</a>
        <a class="text_pink fw-bold">Sign up</a>
    </div>
    <!-- bg_header-->

    <nav class="navbar navbar-expand-sm bg-white bg-light">
        <div class="container">

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'earrings.index' ? 'active' : ''}}"
                            href="{{route('earrings.index')}}" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{Route::currentRouteName() === 'earringsDB' || Route::currentRouteName() === 'ringsDB' ? 'active' : ''}}"
                            href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <span class="ps-3 text-uppercase">Categories</span>
                            <a class="dropdown-item {{Route::currentRouteName() === 'earringsDB' ? 'text_pink' : ''}}"
                                href="{{route('earringsDB')}}">Earrings</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'ringsDB' ? 'text_pink' : ''}}"
                                href="{{route('ringsDB')}}">Rings</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'necklacesDB' ? 'text_pink' : ''}}"
                                href="#">Necklaces</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'braceletsDB' ? 'text_pink' : ''}}"
                                href="#">Bracelets</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'gadgetsDB' ? 'text_pink' : ''}}"
                                href="#">Gadgets</a>
                        </div>
                    </li>
                    <!-- SHOP dropdown -->
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : ''}}"
                            href="{{route('about')}}">About me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{Route::currentRouteName() === 'earringsDB' || Route::currentRouteName() === 'ringsDB' ? 'active' : ''}}"
                            href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Creations DB</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item {{Route::currentRouteName() === 'earringsDB' ? 'text_pink' : ''}}"
                                href="{{route('earringsDB')}}">Earrings</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'ringsDB' ? 'text_pink' : ''}}"
                                href="{{route('ringsDB')}}">Rings</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'necklacesDB' ? 'text_pink' : ''}}"
                                href="#">Necklaces</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'braceletsDB' ? 'text_pink' : ''}}"
                                href="#">Bracelets</a>
                            <a class="dropdown-item {{Route::currentRouteName() === 'gadgetsDB' ? 'text_pink' : ''}}"
                                href="#">Gadgets</a>
                        </div>
                    </li>
                    <!-- DATABASE dropdown -->
                </ul>
                <!-- nav links -->
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <!-- searchbar -->
            </div>
        </div>
    </nav>
    <!-- nav -->


</header>