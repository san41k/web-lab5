<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Taste</title>
    <link rel=stylesheet href="./css/style.css">
</head>
<body>
<header class="header">
    <div class="wrapper">
        <div class="site_title">
            <div class="header_logo">
                <a href="{{url('/')}}" class="header_logo-link">
                    <img src="./img/svg/logo.svg" alt="Japan taste" class="header_logo-pic">
                </a>
            </div>
            <nav class="header_nav">
                <ul class="header_list">
                    <li class="header_menu">
                        <a href="{{url('/main')}}" @yield('main')>Головна</a>
                    </li>
                    <li class="header_menu">
                        <a href="{{url('/menu')}}" @yield('menu')>Меню</a>
                    </li>
                    <li class="header_menu">
                        <a href="{{url('/about')}}" @yield('about')>Про нас</a>
                    </li>
                </ul>
            </nav>
            <div class="header_basket">
                <a href="#!" class="header_basket_link">
                    <img src="./img/svg/backet.svg" alt="Basket" class="header_basket-pic">
                </a>
            </div>
            <div class="mobile-menu">
                <input type="checkbox" id="op"></input>
                <div class="lower">
                    <label class="lover" for="op"><img class="menu-ico" src="./img/png/menu.png"></img></label>
                </div>
                <div class="overlay overlay-hugeinc">
                    <label for="op"></label>
                    <nav>
                        <ul>
                            <li><a href="{{url('/main')}}">Головна</a></li>
                            <li><a href="{{url('/menu')}}">Меню</a></li>
                            <li><a href="{{url('/about')}}?page=about">Про нас</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('main_page')


<footer class="footer">
    <div class="wrapper">
        <h1 class="footer_title">Контакти<br>+380-96-189-39-11</h1>
        <div class="soc_media">
            <div class="telegram">
                <a href="https://web.telegram.org/" class="telegram-link">
                    <img src="./img/svg/telegram.svg" alt="Telegram icon" class="telegram-pic">
                </a>
            </div>
            <div class="instagram">
                <a href="https://www.instagram.com/" class="instagram-link">
                    <img src="./img/svg/instagram.svg" alt="Instagram icon" class="instagram-pic">
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
