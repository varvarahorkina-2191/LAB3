<?php
// Часовой пояс для времени формирования страницы.
date_default_timezone_set('Europe/Moscow');
// Один момент времени используется и для подвала, и для выбора фотографии.
$generatedAt = time();
$page = 'about';
$title = 'Хоркина Варвара Андреевна · 251-361 · Лабораторная работа №3 · Обо мне';
// Содержимое списка хранится в массиве.
$items = [
    'Учёба в Московском Политехе.',
    'Работа в SMM и создание контента.',
    'Мода, фильмы, спорт и кулинария.',
    'Планы на путешествия и новые впечатления.',
];

// Алгоритм: получаем секунду, проверяем её чётность, выбираем файл.
$second = (int) date('s', $generatedAt);
if ($second % 2 === 0) {
    $photo = 'images/evening.jpg';
    $photoAlt = 'Моя вечерняя фотография у воды';
} else {
    $photo = 'images/portrait-night.jpg';
    $photoAlt = 'Моя фотография на вечерней набережной на фоне города';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="icon" type="image/jpeg" href="images/favicon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&amp;family=Manrope:wght@400;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body id="top">
    <header>
        <div class="container">
            <p class="name">Варвара Хоркина</p>
            <nav aria-label="Основная навигация">
                <a href="<?php
                    // Первое включение: задаём параметры пункта и выводим адрес.
                    $name = 'Обо мне';
                    $link = 'index.php';
                    $current_page = ($page === 'about');
                    echo $link;
                ?>"<?php
                    // Второе включение: выводим класс активного пункта и текст.
                    if ($current_page) {
                        echo ' class="selected_menu" aria-current="page"';
                    }
                    echo '>' . $name;
                ?></a>
                <a href="<?php
                    // Первое включение: задаём параметры пункта и выводим адрес.
                    $name = 'Мои интересы';
                    $link = 'interests.php';
                    $current_page = ($page === 'interests');
                    echo $link;
                ?>"<?php
                    // Второе включение: выводим класс активного пункта и текст.
                    if ($current_page) {
                        echo ' class="selected_menu" aria-current="page"';
                    }
                    echo '>' . $name;
                ?></a>
                <a href="<?php
                    // Первое включение: задаём параметры пункта и выводим адрес.
                    $name = 'Моя мечта';
                    $link = 'dream.php';
                    $current_page = ($page === 'dream');
                    echo $link;
                ?>"<?php
                    // Второе включение: выводим класс активного пункта и текст.
                    if ($current_page) {
                        echo ' class="selected_menu" aria-current="page"';
                    }
                    echo '>' . $name;
                ?></a>
            </nav>
        </div>
    </header>
    <main>

    <section id="about">
        <div class="container intro">
            <div class="intro-text">
                <h1>Привет! Я Варя</h1>
                <p>Я из Твери. Здесь я хочу немного рассказать о себе, своих увлечениях и планах. Мне нравится, когда личная страница похожа на небольшое знакомство: можно узнать, чем человек занимается и что ему интересно.</p>
                <p>Сейчас я учусь в Московском Политехе на направлении «Прикладная информатика». Мой профиль — «Разработка и интеграция бизнес-приложений». Параллельно работаю в SMM.</p>
                <p>На этом сайте собрала несколько фактов о себе, фотографии своих образов и мысли о путешествиях. Между разделами можно переходить через меню в шапке.</p>
            </div>
            <img class="portrait" src="<?php echo $photo; ?>"
                 alt="<?php echo $photoAlt; ?>" width="240" height="320">
        </div>
    </section>
    <section class="blue-section" id="study">
        <div class="container">
            <h2>Учёба и работа</h2>
            <p>Учёба связана с программированием и бизнес-приложениями, а работа — с текстами, изображениями и общением с аудиторией. Мне интересно пробовать себя в разных задачах и постепенно понимать, что получается лучше всего.</p>
            <p>Личный сайт — один из способов применить знания на практике. Здесь можно поработать со структурой страницы, подобрать цвета и фотографии, а затем посмотреть, как всё выглядит вместе.</p>
            <p>В моей жизни есть место разным занятиям:</p>
            <ul>
                <?php
                // foreach по очереди выводит все элементы массива как пункты списка.
                foreach ($items as $item) {
                    echo '<li>' . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . '</li>';
                }
                ?>
            </ul>
        </div>
    </section>
    <section class="coffee-section" id="facts">
        <div class="container">
            <h2>Несколько фактов обо мне</h2>
            <p>Не всё можно рассказать через учёбу и работу. Любимые книги, еда и занятия тоже помогают познакомиться с человеком. Поэтому оставила здесь небольшую таблицу.</p>
            <div class="table-wrapper" tabindex="0" role="region" aria-label="Факты обо мне">
                <table>
                    <caption>Мои занятия и любимые вещи</caption>
                    <thead><tr><th scope="col">Обо мне</th><th scope="col">Подробности</th></tr></thead>
                    <tbody>
                        <tr><th scope="row">Чем занималась раньше</th><td>Иностранные языки, плавание и музыкальная школа</td></tr>
                        <tr><th scope="row">Любимая кухня</th><td>Итальянская и азиатская</td></tr>
                        <tr><th scope="row">Мой питомец</th><td>У меня есть собака породы ши-тцу по кличке Джеймс</td></tr>
                        <tr><th scope="row">Любимые цвета</th><td>Тёмно-синий и коричневый</td></tr>
                        <tr><th scope="row">Любимый фильм</th><td>«Бойцовский клуб»</td></tr>
                        <tr><th scope="row">Любимая книга</th><td>«Маленькие женщины»</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    </main>
    <footer>
        <div class="container">
            <p>© 2026 Варвара Хоркина</p>
            <p>Сформировано <time datetime="<?php echo date('c', $generatedAt); ?>"><?php echo date('d.m.Y', $generatedAt) . ' в ' . date('H-i:s', $generatedAt); ?></time></p>
            <a href="#top">Вернуться к началу</a>
        </div>
    </footer>
</body>
</html>
