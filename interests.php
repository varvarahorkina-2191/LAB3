<?php
// Часовой пояс для времени формирования страницы.
date_default_timezone_set('Europe/Moscow');
// Один момент времени используется и для подвала, и для выбора фотографии.
$generatedAt = time();
$page = 'interests';
$title = 'Хоркина Варвара Андреевна · 251-361 · Лабораторная работа №3 · Мои интересы';
// Содержимое списка хранится в массиве.
$items = [
    'Мода и сочетания вещей.',
    'Фильмы и сериалы для свободного вечера.',
    'Занятия в спортзале.',
    'Кулинария и любимые блюда.',
];
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

    <section id="interests">
        <div class="container">
            <h1>Мои интересы</h1>
            <p>Мне нравится, что свободное время можно проводить по-разному. Иногда хочется придумать новый образ или посмотреть фильм, а иногда — сходить в спортзал и переключиться после учёбы.</p>
            <p>На этой странице собрала занятия, которые мне близки. У них разное настроение, но каждое по-своему помогает отдохнуть и получить новые впечатления.</p>
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
    <section class="blue-section" id="fashion">
        <div class="container">
            <h2>Мода и мои образы</h2>
            <p>Мне очень нравится мода. Люблю смотреть, как другие сочетают вещи, и самой придумывать образы. Особенно интересно подобрать к одной вещи что-то разное и посмотреть, как она будет выглядеть.</p>
            <p>В одежде можно менять не только цвет, но и настроение всего образа. Один жакет смотрится по-разному с разными юбками, обувью и аксессуарами. Мне нравится замечать такие детали и сравнивать сочетания.</p>
            <div class="gallery">
                <figure><img src="images/avatar.jpg" alt="Мой образ с леопардовым жакетом и бордовой юбкой" width="1152" height="1536"><figcaption>Леопардовый жакет и бордовая юбка</figcaption></figure>
                <figure><img src="images/style-green.jpg" alt="Мой образ с зелёным жакетом и цветочной юбкой" width="1152" height="1536" loading="lazy"><figcaption>Зелёный жакет и цветочная юбка</figcaption></figure>
                <figure><img src="images/style-grey.jpg" alt="Мой образ с серым жакетом и юбкой с принтом" width="1152" height="1536" loading="lazy"><figcaption>Серый жакет и юбка с принтом</figcaption></figure>
            </div>
        </div>
    </section>
    <section class="coffee-section" id="leisure">
        <div class="container">
            <h2>Чем ещё люблю заниматься</h2>
            <p>Ещё люблю фильмы и сериалы — могу просто провести вечер за просмотром. Среди любимых фильмов — «Бойцовский клуб». В такие вечера приятно ненадолго отложить дела и погрузиться в другую историю.</p>
            <p>Но не всё свободное время провожу дома: мне также нравится ходить в спортзал. После занятий за компьютером особенно хочется движения и смены обстановки.</p>
            <p>И, конечно, я люблю готовить. Для меня это не только повседневное дело, но и занятие в удовольствие. Больше всего мне близки итальянская и азиатская кухни: в них много разных вкусов и сочетаний.</p>
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
