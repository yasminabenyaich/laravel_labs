<header class="header-section">
    <div class="logo">
        <img src={{ asset('img/logo.png') }} alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{ request()->routeIs("home") ? 'active' : ' '  }}"><a href={{ route('home') }}>Home</a></li>
            <li class="{{ request()->routeIs("service") ? 'active' : ' ' }}"><a href={{ route('service') }}>Services</a></li>
            <li class="{{ request()->routeIs("blog") ? 'active' : ' '  }}"><a href={{ route('blog') }}>Blog</a></li>
            <li class="{{ request()->routeIs("contact") ? 'active' : ' '  }}"><a href={{ route('contact') }}>Contact</a></li>
            <li class="{{ request()->routeIs("element") ? 'active' : ' '  }}"><a href={{ route('element') }}>Elements</a></li>
            <li>
                <a href={{ route('dashboard') }}><button type="button" class="btn btn-dark">Dashboard</button></a>
            </li>
        </ul>
    </nav>
</header>