@extends('layout')


@section('main')
    class="header_link"
@endsection
@section('menu')
    class="header_link"
@endsection
@section('about')
    class="header_active_link"
@endsection

@section('main_page')
    <main class="main">
        <section class="site_background">
            <div class="wrapper">
                <div class="first_about_menu">
                    <h1 class="title_about">Про нас</h1>
                    <p class="first_about_subtitle">Japan taste - постачальник незабутніх на смак суші та чудового настрою. Дотримання багатовікових традицій приготування страв японської та паназіатської кухні допомагає нам прокладати шлях до вашого серця крізь мільйони рецепторів та отримати нескінченну насолоду.</p>
                </div>
            </div>
        </section>
        <section class="site_background">
            <div class="wrapper">
                <div class="second_about_menu">
                    <div class="container_of_text">
                        <p class="second_about_subtitle">Одного разу отримавши задоволення, кожен прагне повторити його знову. Але коли ти бачиш, що доставив задоволення іншій людині, ти розумієш, що живеш не дарма та вже не знаєш, як можна жити по-іншому. Запрошуємо завітати до нас та на власні очі подивитися, як сушисти створюють паназійську смакоту. Або наш кур'єр з радістю доставить вам насолоду прямо додому, до офісу чи навіть у парк.</p>
                    </div>
                    <div class="button_of_order">
                        <a href="{{url('/menu')}}" class="button_of_order-link">
                            <img src="./img/svg/order.svg" alt="Button of order" class="button_of_order-pic">
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
