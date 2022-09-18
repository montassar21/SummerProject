<nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link active" href="/guest/modifier-profile">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    data-feather="cast"></span></span><span class="nav-link-text">Profile</span></div>
                    </a></li>
                    <li class="nav-item"><a class="nav-link active" href="/publier">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    data-feather="cast"></span></span><span class="nav-link-text">Publier une annonce</span></div>
                    </a></li>


            </ul>
        </div>
        <div class="navbar-vertical-footer">   <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100"
            onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
            href="!#"><span class="me-2" data-feather="log-out"></span>Deconnexion
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                class="d-none">
                @csrf
            </form>
        </a>
    </div></div>
    </div>
</nav>
