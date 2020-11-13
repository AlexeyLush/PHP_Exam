<?php
$film = $film ?? null;
?>
@extends('layouts.admin')

@section('content')

    <h1>{{$title}}</h1>
    <form class="form__admin" enctype="multipart/form-data" action="{{ $film ? route('admin.films.update', $film) : route('admin.films.store') }}" method="post">
        @csrf
        @if($film) @method('put') @endif

        <div>
            <label for="title">Название</label>
        </div>

        <div>
            <input class="input__text" name="title" id="title"
                   value="{{ old('title', $film->title ?? null) }}">
        </div>

        <div>
            <label for="year">Год</label>
        </div>

        <div>
            <input type="number" min="1900" max="2099" step="1" class="input__text" name="year" id="year"
                   value="{{ old('year', $film->year ?? null) }}">
        </div>

        <div>
            <label for="country">Страна</label>
        </div>

        <div>
            <select id="country" name="country"
                    autofocus="{{ old('country', $film->country ?? null) }}">
                <option value="Австралия">Австралия</option>
                <option value="Австрия">Австрия</option>
                <option value="Азербайджан">Азербайджан</option>
                <option value="Албания">Албания</option>
                <option value="Алжир">Алжир</option>
                <option value="Американское Самоа">Американское Самоа</option>
                <option value="Ангилья">Ангилья</option>
                <option value="Ангола">Ангола</option>
                <option value="Андорра">Андорра</option>
                <option value="Антигуа и Барбуда">Антигуа и Барбуда</option>
                <option value="Аргентина">Аргентина</option>
                <option value="Армения">Армения</option>
                <option value="Аруба">Аруба</option>
                <option value="Афганистан">Афганистан</option>
                <option value="Багамы">Багамы</option>
                <option value="Бангладеш">Бангладеш</option>
                <option value="Барбадос">Барбадос</option>
                <option value="Бахрейн">Бахрейн</option>
                <option value="Беларусь">Беларусь</option>
                <option value="Белиз">Белиз</option>
                <option value="Бельгия">Бельгия</option>
                <option value="Бенин">Бенин</option>
                <option value="Бермуды">Бермуды</option>
                <option value="Болгария">Болгария</option>
                <option value="Боливия">Боливия</option>
                <option value="Бонайре, Синт-Эстатиус и Саба">Бонайре, Синт-Эстатиус и Саба</option>
                <option value="Босния и Герцеговина">Босния и Герцеговина</option>
                <option value="Ботсвана">Ботсвана</option>
                <option value="Бразилия">Бразилия</option>
                <option value="Бруней-Даруссалам">Бруней-Даруссалам</option>
                <option value="Буркина-Фасо">Буркина-Фасо</option>
                <option value="Бурунди">Бурунди</option>
                <option value="Бутан">Бутан</option>
                <option value="Вануату">Вануату</option>
                <option value="Ватикан">Ватикан</option>
                <option value="Великобритания">Великобритания</option>
                <option value="Венгрия">Венгрия</option>
                <option value="Венесуэла">Венесуэла</option>
                <option value="Виргинские острова, Британские">Виргинские острова, Британские</option>
                <option value="Виргинские острова, США">Виргинские острова, США</option>
                <option value="Восточный Тимор">Восточный Тимор</option>
                <option value="Вьетнам">Вьетнам</option>
                <option value="Габон">Габон</option>
                <option value="Гаити">Гаити</option>
                <option value="Гайана">Гайана</option>
                <option value="Гамбия">Гамбия</option>
                <option value="Гана">Гана</option>
                <option value="Гваделупа">Гваделупа</option>
                <option value="Гватемала">Гватемала</option>
                <option value="Гвинея">Гвинея</option>
                <option value="Гвинея-Бисау">Гвинея-Бисау</option>
                <option value="Германия">Германия</option>
                <option value="Гибралтар">Гибралтар</option>
                <option value="Гондурас">Гондурас</option>
                <option value="Гонконг">Гонконг</option>
                <option value="Гренада">Гренада</option>
                <option value="Гренландия">Гренландия</option>
                <option value="Греция">Греция</option>
                <option value="Грузия">Грузия</option>
                <option value="Гуам">Гуам</option>
                <option value="Дания">Дания</option>
                <option value="Джибути">Джибути</option>
                <option value="Доминика">Доминика</option>
                <option value="Доминиканская Республика">Доминиканская Республика</option>
                <option value="Египет">Египет</option>
                <option value="Замбия">Замбия</option>
                <option value="Западная Сахара">Западная Сахара</option>
                <option value="Зимбабве">Зимбабве</option>
                <option value="Израиль">Израиль</option>
                <option value="Индия">Индия</option>
                <option value="Индонезия">Индонезия</option>
                <option value="Иордания">Иордания</option>
                <option value="Ирак">Ирак</option>
                <option value="Иран">Иран</option>
                <option value="Ирландия">Ирландия</option>
                <option value="Исландия">Исландия</option>
                <option value="Испания">Испания</option>
                <option value="Италия">Италия</option>
                <option value="Йемен">Йемен</option>
                <option value="Кабо-Верде">Кабо-Верде</option>
                <option value="Казахстан">Казахстан</option>
                <option value="Камбоджа">Камбоджа</option>
                <option value="Камерун">Камерун</option>
                <option value="Канада">Канада</option>
                <option value="Катар">Катар</option>
                <option value="Кения">Кения</option>
                <option value="Кипр">Кипр</option>
                <option value="Кирибати">Кирибати</option>
                <option value="Китай">Китай</option>
                <option value="Колумбия">Колумбия</option>
                <option value="Коморы">Коморы</option>
                <option value="Конго">Конго</option>
                <option value="Конго, демократическая республика">Конго, демократическая республика</option>
                <option value="Коста-Рика">Коста-Рика</option>
                <option value="Кот д`Ивуар">Кот д`Ивуар</option>
                <option value="Куба">Куба</option>
                <option value="Кувейт">Кувейт</option>
                <option value="Кыргызстан">Кыргызстан</option>
                <option value="Кюрасао">Кюрасао</option>
                <option value="Лаос">Лаос</option>
                <option value="Латвия">Латвия</option>
                <option value="Лесото">Лесото</option>
                <option value="Либерия">Либерия</option>
                <option value="Ливан">Ливан</option>
                <option value="Ливия">Ливия</option>
                <option value="Литва">Литва</option>
                <option value="Лихтенштейн">Лихтенштейн</option>
                <option value="Люксембург">Люксембург</option>
                <option value="Маврикий">Маврикий</option>
                <option value="Мавритания">Мавритания</option>
                <option value="Мадагаскар">Мадагаскар</option>
                <option value="Макао">Макао</option>
                <option value="Македония">Македония</option>
                <option value="Малави">Малави</option>
                <option value="Малайзия">Малайзия</option>
                <option value="Мали">Мали</option>
                <option value="Мальдивы">Мальдивы</option>
                <option value="Мальта">Мальта</option>
                <option value="Марокко">Марокко</option>
                <option value="Мартиника">Мартиника</option>
                <option value="Маршалловы Острова">Маршалловы Острова</option>
                <option value="Мексика">Мексика</option>
                <option value="Микронезия, федеративные штаты">Микронезия, федеративные штаты</option>
                <option value="Мозамбик">Мозамбик</option>
                <option value="Молдова">Молдова</option>
                <option value="Монако">Монако</option>
                <option value="Монголия">Монголия</option>
                <option value="Монтсеррат">Монтсеррат</option>
                <option value="Мьянма">Мьянма</option>
                <option value="Намибия">Намибия</option>
                <option value="Науру">Науру</option>
                <option value="Непал">Непал</option>
                <option value="Нигер">Нигер</option>
                <option value="Нигерия">Нигерия</option>
                <option value="Нидерланды">Нидерланды</option>
                <option value="Никарагуа">Никарагуа</option>
                <option value="Ниуэ">Ниуэ</option>
                <option value="Новая Зеландия">Новая Зеландия</option>
                <option value="Новая Каледония">Новая Каледония</option>
                <option value="Норвегия">Норвегия</option>
                <option value="Объединенные Арабские Эмираты">Объединенные Арабские Эмираты</option>
                <option value="Оман">Оман</option>
                <option value="Остров Мэн">Остров Мэн</option>
                <option value="Остров Норфолк">Остров Норфолк</option>
                <option value="Острова Кайман">Острова Кайман</option>
                <option value="Острова Кука">Острова Кука</option>
                <option value="Острова Теркс и Кайкос">Острова Теркс и Кайкос</option>
                <option value="Пакистан">Пакистан</option>
                <option value="Палау">Палау</option>
                <option value="Палестинская автономия">Палестинская автономия</option>
                <option value="Панама">Панама</option>
                <option value="Папуа - Новая Гвинея">Папуа - Новая Гвинея</option>
                <option value="Парагвай">Парагвай</option>
                <option value="Перу">Перу</option>
                <option value="Питкерн">Питкерн</option>
                <option value="Польша">Польша</option>
                <option value="Португалия">Португалия</option>
                <option value="Пуэрто-Рико">Пуэрто-Рико</option>
                <option value="Реюньон">Реюньон</option>
                <option value="Россия">Россия</option>
                <option value="Руанда">Руанда</option>
                <option value="Румыния">Румыния</option>
                <option value="США">США</option>
                <option value="Сальвадор">Сальвадор</option>
                <option value="Самоа">Самоа</option>
                <option value="Сан-Марино">Сан-Марино</option>
                <option value="Сан-Томе и Принсипи">Сан-Томе и Принсипи</option>
                <option value="Саудовская Аравия">Саудовская Аравия</option>
                <option value="Свазиленд">Свазиленд</option>
                <option value="Святая Елена">Святая Елена</option>
                <option value="Северная Корея">Северная Корея</option>
                <option value="Северные Марианские острова">Северные Марианские острова</option>
                <option value="Сейшелы">Сейшелы</option>
                <option value="Сенегал">Сенегал</option>
                <option value="Сент-Винсент">Сент-Винсент</option>
                <option value="Сент-Китс и Невис">Сент-Китс и Невис</option>
                <option value="Сент-Люсия">Сент-Люсия</option>
                <option value="Сент-Пьер и Микелон">Сент-Пьер и Микелон</option>
                <option value="Сербия">Сербия</option>
                <option value="Сингапур">Сингапур</option>
                <option value="Синт-Мартен">Синт-Мартен</option>
                <option value="Сирийская Арабская Республика">Сирийская Арабская Республика</option>
                <option value="Словакия">Словакия</option>
                <option value="Словения">Словения</option>
                <option value="Соломоновы Острова">Соломоновы Острова</option>
                <option value="Сомали">Сомали</option>
                <option value="Судан">Судан</option>
                <option value="Суринам">Суринам</option>
                <option value="Сьерра-Леоне">Сьерра-Леоне</option>
                <option value="Таджикистан">Таджикистан</option>
                <option value="Таиланд">Таиланд</option>
                <option value="Тайвань">Тайвань</option>
                <option value="Танзания">Танзания</option>
                <option value="Того">Того</option>
                <option value="Токелау">Токелау</option>
                <option value="Тонга">Тонга</option>
                <option value="Тринидад и Тобаго">Тринидад и Тобаго</option>
                <option value="Тувалу">Тувалу</option>
                <option value="Тунис">Тунис</option>
                <option value="Туркменистан">Туркменистан</option>
                <option value="Турция">Турция</option>
                <option value="Уганда">Уганда</option>
                <option value="Узбекистан">Узбекистан</option>
                <option value="Украина">Украина</option>
                <option value="Уоллис и Футуна">Уоллис и Футуна</option>
                <option value="Уругвай">Уругвай</option>
                <option value="Фарерские острова">Фарерские острова</option>
                <option value="Фиджи">Фиджи</option>
                <option value="Филиппины">Филиппины</option>
                <option value="Финляндия">Финляндия</option>
                <option value="Фолклендские острова">Фолклендские острова</option>
                <option value="Франция">Франция</option>
                <option value="Французская Гвиана">Французская Гвиана</option>
                <option value="Французская Полинезия">Французская Полинезия</option>
                <option value="Хорватия">Хорватия</option>
                <option value="Центрально-Африканская Республика">Центрально-Африканская Республика</option>
                <option value="Чад">Чад</option>
                <option value="Черногория">Черногория</option>
                <option value="Чехия">Чехия</option>
                <option value="Чили">Чили</option>
                <option value="Швейцария">Швейцария</option>
                <option value="Швеция">Швеция</option>
                <option value="Шпицберген и Ян Майен">Шпицберген и Ян Майен</option>
                <option value="Шри-Ланка">Шри-Ланка</option>
                <option value="Эквадор">Эквадор</option>
                <option value="Экваториальная Гвинея">Экваториальная Гвинея</option>
                <option value="Эритрея">Эритрея</option>
                <option value="Эстония">Эстония</option>
                <option value="Эфиопия">Эфиопия</option>
                <option value="Южная Корея">Южная Корея</option>
                <option value="Южно-Африканская Республика">Южно-Африканская Республика</option>
                <option value="Южный Судан">Южный Судан</option>
                <option value="Ямайка">Ямайка</option>
                <option value="Япония">Япония</option>
            </select>
        </div>

        <div>
            <label for="company">Компания</label>
        </div>

        <div>
            <input class="input__text" name="company" id="company"
                   value="{{ old('company', $film->company ?? null) }}">
        </div>


        <div>
            <label for="genre">Жанр</label>
        </div>

        <div>
            <select id="genre" name="genre"
                    autofocus="{{ old('genre', $film->genre ?? null) }}">
                <option value="Аниме">Аниме</option>
                <option value="Биографический">Биографический</option>
                <option value="Вестерн">Вестерн</option>
                <option value="Военный">Военный</option>
                <option value="Детектив">Детектив</option>
                <option value="Детский">Детский</option>
                <option value="Документальный">Документальный</option>
                <option value="Драма">Драма</option>
                <option value="Исторический">Исторический</option>
                <option value="Киномикс">Кинокомикс</option>
                <option value="Комедия">Комедия</option>
                <option value="Концерт">Концерт</option>
                <option value="Короткометражный">Короткометражный</option>
                <option value="Криминал">Криминал</option>
                <option value="Мелодрама">Мелодрама</option>
                <option value="Мелодрама">Мистика</option>
                <option value="Музыка">Музыка</option>
                <option value="Мультфильм">Мультфильм</option>
                <option value="Мюзикл">Мюзикл</option>
                <option value="Научный">Научный</option>
                <option value="Нуар">Нуар</option>
                <option value="Приключение">Приключение</option>
                <option value="Реалити-шоу">Реалити-шоу</option>
                <option value="Семейный">Семейный</option>
                <option value="Спорт">Спорт</option>
                <option value="Ток-шоу">Ток-шоу</option>
                <option value="Триллер">Триллер</option>
                <option value="Ужасы">Ужасы</option>
                <option value="Фантастика">Фантастика</option>
                <option value="Фэнтези">Фэнтези</option>
            </select>
        </div>


        <div>
            <label for="director">Режиссёр</label>
        </div>

        <div>
            <input class="input__text" name="director" id="director"
                   value="{{ old('director', $film->director ?? null) }}">
        </div>

        <div>
            <label for="producer">Продюсер</label>
        </div>

        <div>
            <input class="input__text" name="producer" id="producer"
                   value="{{ old('producer', $film->producer ?? null) }}">
        </div>


        <div>
            <label for="screenwriter">Сценарист</label>
        </div>

        <div>
            <input class="input__text" name="screenwriter" id="screenwriter"
                   value="{{ old('screenwriter', $film->screenwriter ?? null) }}">
        </div>


        <div>
            <label for="budget">Бюджет (млн в $)</label>
        </div>

        <div>
            <input type="number" min="1" class="input__text" name="budget" id="budget"
                   value="{{ old('budget', $film->budget ?? null) }}">
        </div>


        <div>
            <label for="fees">Сборы (млн в $)</label>
        </div>

        <div>
            <input type="number" min="1" class="input__text" name="fees" id="fees"
                   value="{{ old('fees', $film->fees ?? null) }}">
        </div>

        <div>
            <label for="rating">Рейтинг (от 1 - 10)</label>
        </div>

        <div>
            <input type="number" min="1" max="10" class="input__text" name="rating" id="rating"
                   value="{{ old('rating', $film->rating ?? null) }}">
        </div>

        <div>
            <label for="description">Описание</label>
        </div>

        <div>
            <textarea id="description" name="description">{{ old('description', $film->description ?? null) }}</textarea>
        </div>

        <div>
            <label for="image_path">Изображение</label>
        </div>

        <div>
            <input class="input__file" type="file" name="image_path" id="image_path" accept="image/*" />
        </div>

        <button>Добавить фильм</button>

    </form>
@endsection
