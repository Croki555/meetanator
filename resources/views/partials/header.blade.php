<header class="sticky-top">
    <div class="container-xxl py-2 d-flex align-items-center justify-content-evenly">
        <a class="navbar-brand fs-3" href="{{ route('home') }}#main">Meetanator</a>
        <nav class="nav nav-masthead">
            <ul class="nav gap-3">
                <li class="nav-item">
                    <a class="nav-link fw-bold py-1 px-0 active" href="{{ route('home') }}#main">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('home') }}#about-us">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('home') }}#about-system">О системе</a>
                </li>
            </ul>
        </nav>
    </div>
    <script>
        const navLink = document.querySelectorAll('.nav-link');
        navLink.forEach(function (el, idx) {
            el.addEventListener('click', function (ev) {
                navLink.forEach(function (el, idx) {
                    el.classList.remove('active')
                })
                ev.target.classList.add('active')
            })
        })
    </script>
</header>
