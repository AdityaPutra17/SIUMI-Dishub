<nav class="navbar navbar-expand-lg bg-main-color px-5">
    <div class="container-fluid">
        <a class="navbar-brand text-light fw-bold" href="/home"><img src="/assets/image/SIUMI.png" alt=""
                width="120px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="nav-link bg-danger border-0 rounded text-light" type="submit">Logout</button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
