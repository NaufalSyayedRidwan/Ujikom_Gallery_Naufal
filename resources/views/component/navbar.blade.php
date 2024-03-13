<style>
    .main__menu {
        position: relative;
        right: 0;
        padding-top: 25px;
        text-align: center;
    }

    @media (max-width: 576px) {
        .main__menu .nav__menu {
            display: none;
        }
    }

    .main__menu .nav__menu>li {
        display: inline-block;
        position: relative;
    }

    .main__menu .nav__menu>li:last-child a {
        margin-right: 0;
    }

    .main__menu .nav__menu>li>a {
        position: relative;
        font-size: 16px;
        color: #7E858B;
        font-weight: 700;
        padding: 5px 2px;
        margin-right: 40px;
        text-transform: uppercase;
    }

    @media only screen and (min-width: 576px) and (max-width: 767px) {
        .main__menu .nav__menu>li>a {
            margin-right: 20px;
        }
    }

    .main__menu .nav__menu>li>a:after {
        position: absolute;
        content: "";
        width: 0;
        height: 6px;
        left: 0;
        bottom: 8px;
        background: #000000;
        z-index: -1;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    .main__menu .nav__menu>li>a.menu--active {
        color: #222222;
    }

    .main__menu .nav__menu>li>a.menu--active:after {
        width: 100%;
    }

    .main__menu .nav__menu>li:hover a {
        color: #222222;
    }

    .main__menu .nav__menu>li:hover a:after {
        width: 100%;
    }

    .main__menu .nav__menu>li:hover .sub__menu {
        top: 100%;
        opacity: 1;
        visibility: visible;
        margin-top: 15px;
    }

    .main__menu .nav__menu>li .sub__menu {
        position: absolute;
        text-align: left;
        padding: 10px 0;
        width: 170px;
        left: 0;
        top: 100%;
        margin-top: 50px;
        -webkit-box-shadow: 0 9px 50px rgba(0, 0, 0, 0.1);
        box-shadow: 0 9px 50px rgba(0, 0, 0, 0.1);
        background: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 99;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }

    .main__menu .nav__menu>li .sub__menu:after {
        position: absolute;
        content: "";
        width: 100%;
        height: 25px;
        left: 0;
        top: -25px;
    }

    .main__menu .nav__menu>li .sub__menu>li {
        display: block;
    }

    .main__menu .nav__menu>li .sub__menu>li>a {
        display: block;
        display: block;
        padding: 5px 15px;
        color: #7E858B;
        text-transform: none;
        margin: 0;
        font-size: 14px;
        font-weight: 700;
    }

    .main__menu .nav__menu>li .sub__menu>li>a:hover {
        color: #222222;
    }

    .main__menu .nav__menu>li .sub__menu>li>a:after {
        display: none;
    }

    .slicknav_menu {
        background: #f7f7f7;
        padding: 0;
        margin-bottom: 30px;
        text-align: left;
        display: none;
    }

    @media (max-width: 576px) {
        .slicknav_menu {
            display: block;
        }
    }

    .slicknav_btn {
        display: none;
    }

    .slicknav_nav ul {
        margin: 0;
    }

    .slicknav_nav .slicknav_row:hover {
        border-radius: 0;
        background: transparent;
        color: #222222;
    }

    .slicknav_nav a:hover {
        border-radius: 0;
        background: transparent;
        color: #222222;
    }

    .slicknav_nav .slicknav_row,
    .slicknav_nav a {
        padding: 11px 25px;
        margin: 0;
        color: #222222;
        font-size: 16px;
        font-weight: 700;
        border-bottom: 1px solid #e9e9e9;
    }

    .slicknav_nav .slicknav_item a {
        border-bottom: none;
    }
</style>

<header class="header">
        <nav class="main__menu">
            <ul class="nav__menu">
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('galleryid', ['id'  => Auth::user()->id]) }}">Gallery</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
        </nav>
</header>
