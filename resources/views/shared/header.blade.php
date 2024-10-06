<link rel="stylesheet" href={{ asset('style/style.css') }}>

@php
    $menu_variables = [
        'Главная'=>'/home',
        'Проекты'=>'/projects',
        'О нас'=>'/about',
        'Портфолио'=>'/portfolio',
        'Услуги'=>'/services',
        'Статьи'=>'#'
]
@endphp

<header class="header__wrapper ">
    <div class="header__searchbar flex-inline">
        <form action="/search">
            <input type="text" placeholder="Найти">
        </form>
    </div>
    <div class="header flex-inline">
    @foreach($menu_variables as $menu_item=>$menu_link)
        <div class="header__item-wrapper">
            <a href="{{$menu_link}}">{{ $menu_item  }}</a>
        </div>
    @endforeach
    </div>
</header>
