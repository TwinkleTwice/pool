@extends('layouts.main')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<section id="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Строительство бассейнов</h1>
            <p class="text">
                <span>Полный спект работ:</span> от проектирования и сдачи “под ключ” до обслуживания <br>
                или реконструкции вашего бассейна, а также большой выбор товаров
            </p>
            <button type="submit" class="btn">Оставить заявку</button>
        </div>
    </div>
</section>
<section id="works">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Наши работы</h1>
            <img src="/i/icons/wave-line.png" class="wave-line" alt="">
            <div class="works-slider">
                <div class="slick-slide">
                    <img src="/i/pool.png" alt="">
                </div>
                <div class="slick-slide">
                    <img src="/i/hero-bg.png" alt="">
                </div>
                <div class="slick-slide">
                    <img src="/i/pool.png" alt="">
                </div>
                <div class="slick-slide">
                    <img src="/i/hero-bg.png" alt="">
                </div>
                <div class="slick-slide">
                    <img src="/i/pool.png" alt="">
                </div>
                <div class="slick-slide">
                    <img src="/i/hero-bg.png" alt="">
                </div>
            </div>
            <div class="nav">
                <div class="prev-arrow"></div>
                <div class="next-arrow"></div>
            </div>
        </div>
    </div>
</section>

<section id="price">
    <div class="container">
        <h1 class="title">Сколько будет стоить бассейн?</h1>
        <img src="/i/icons/wave-line.png" class="wave-line" alt="">
        <p class="text">Ответьте на несколько вопросов и наши специалисты отправят вам смету <br>
            в течении <span>1 рабочего дня</span>
        </p>
        <div class="content">
            <div class="wrap">
                <form action="" class="form">
                    @csrf
                    <div class="form-group">
                        <label for="bowl-finish">Отделка чаши:</label>
                        <select id="bowl-finish" name="bowl-finish" form="">
                            <option value="polypropylene">Полипропилен</option>
                            <option value="paint">Покраска</option>
                            <option value="rubber coating">Напыление резиной</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="water-heating">Нагрев воды:</label>
                        <select id="water-heating" name="water-heating" form="">
                            <option value="yes">Да</option>
                            <option value="no">Нет</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Размер <br> бассейна:</label>
                        <div class="slidecontainer">
                            <input type="range" min="1" max="10" value="7" class="slider" id="myRange">
                            <span id="demo"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn">Оставить заявку</button>
                </form>
            </div>
            <img src="/i/swimming-pool.png" class="pool" alt="">
        </div>
    </div>
    <img src="/i/price-wave-bottom.png" class="bottom-wave" alt="">
</section>

<section id="products">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Товары для бассейна</h1>
            <img src="/i/icons/wave-line.png" class="wave-line" alt="">
            <div class="nav">
                <a href="#">Все</a>
                <a href="#">Насосы</a>
                <a href="#">Нагреватели</a>
            </div>
            <div class="slider">
                <div class="products-slider">
                    <div class="slide">
                        <img src="/i/filter.png" alt="">
                        <p class="text">Фильтровальная установка Bestway</p>
                    </div>
                    <div class="slide">
                        <img src="/i/spotlight.png" alt="">
                        <p class="text">Прожектор под плитку с оправой из ABS-пластика</p>
                    </div>
                    <div class="slide">
                        <img src="/i/filter.png" alt="">
                        <p class="text">Фильтровальная установка Bestway</p>
                    </div>
                    <div class="slide">
                        <img src="/i/spotlight.png" alt="">
                        <p class="text">Прожектор под плитку с оправой из ABS-пластика</p>
                    </div>
                    <div class="slide">
                        <img src="/i/filter.png" alt="">
                        <p class="text">Фильтровальная установка Bestway</p>
                    </div>
                    <div class="slide">
                        <img src="/i/spotlight.png" alt="">
                        <p class="text">Прожектор под плитку с оправой из ABS-пластика</p>
                    </div>
                </div>
                <div class="arrows">
                    <div class="left-arrow"></div>
                    <div class="right-arrow"></div>
                </div>
            </div>
            <button type="submit" class="btn">Смотреть все</button>
        </div>
    </div>
</section>

<section id="benefit">
    <div class="container">
        <div class="wrap">
            <h1 class="title">Что вы получаете?</h1>
            <img src="/i/icons/white-wave-line.png" class="wave-line" alt="">
            <img src="/i/leaves.png" class="leaves-img" alt="">
            <div class="benefit-list">
                <div class="benefit-item">
                    <img src="/i/icons/research.png" alt="">
                    <p class="text">Индивидуальное <br> предложение</p>
                </div>
                <div class="benefit-item">
                    <img src="/i/icons/time.png" alt="">
                    <p class="text">Комплексная <br> поддержка</p>
                </div>
                <div class="benefit-item">
                    <img src="/i/icons/hand.png" alt="">
                    <p class="text">Качественные <br> материалы</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-wave"></div>
</section>
<section id="form">
    <div class="container">
        <h1 class="title">Остались вопросы?</h1>
        <img src="/i/icons/wave-line.png" class="wave-line" alt="">
        <p class="text">Оставьте заявку и наши специалисты свяжутся <br> с вами в ближайшее время</p>
        <img src="/i/man.png" class="man-img" alt="">

        <form action="" class="form" method="">
            @csrf
            <div class="row">
                <div class="form-group">
                    <input type="text" name="name" minlength="3" required placeholder="Имя" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" required placeholder="Телефон">
                </div>
            </div>
            <button type="submit" class="btn">Отправить</button>
        </form>

    </div>
</section>
@endsection

@section('footer')
    @include('partials.footer')

    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acb46e68f61614cb2caa10daaf1856899f3a7dd89ebe180d4446fd8fb8a669293&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
@endsection
