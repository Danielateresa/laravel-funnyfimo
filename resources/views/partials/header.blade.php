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
                            href="{{route('earrings.index')}}" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : ''}}"
                            href="{{route('about')}}">About me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{Route::currentRouteName() === 'earringsDB' ? 'active' : ''}}"
                            href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Creations DB</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{route('earringsDB')}}">Earrings</a>
                            <a class="dropdown-item" href="#">Rings</a>
                            <a class="dropdown-item" href="#">Necklaces</a>
                            <a class="dropdown-item" href="#">Bracelets</a>
                            <a class="dropdown-item" href="#">Gadgets</a>
                        </div>
                    </li>
                    <!-- dropdown -->
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