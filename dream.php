<?php
// Часовой пояс для времени формирования страницы.
date_default_timezone_set('Europe/Moscow');
// Один момент времени используется и для подвала, и для выбора фотографии.
$generatedAt = time();
$page = 'dream';
$title = 'Хоркина Варвара Андреевна · 251-361 · Лабораторная работа №3 · Моя мечта';
// Содержимое списка хранится в массиве.
$items = [
    'Погулять по Риму и увидеть город своими глазами.',
    'Посмотреть на Колизей.',
    'Увидеть фонтан Треви.',
    'Попробовать итальянскую кухню.',
    'Привезти из поездки свои фотографии и воспоминания.',
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

    <section id="dream">
        <div class="container">
            <h1>Моя мечта — путешествовать</h1>
            <p>Очень хочу путешествовать по миру. Больше всего пока мечтаю об Италии. Хочется погулять по Риму и увидеть места, которые сейчас рассматриваю на фотографиях. Надеюсь, однажды у меня появятся свои снимки оттуда!</p>
            <p>Мне интересна сама возможность оказаться в новом месте: услышать другую речь, пройти по незнакомой улице и увидеть, как проходит обычный день в другом городе. Такие впечатления трудно получить только через экран.</p>
        </div>
    </section>
    <section class="blue-section" id="italy">
        <div class="container">
            <h2>Почему именно Италия</h2>
            <p>В Италии меня привлекают архитектура, атмосфера городов и кухня. Пока это мечта, поэтому знакомство начинается с фотографий и рассказов. Особенно хочется увидеть Рим — не только известные достопримечательности, но и обычные улицы между ними.</p>
            <p>Колизей и фонтан Треви — два места, которые я хотела бы включить в будущую прогулку. Сейчас здесь фотографии для вдохновения, а со временем хочется заменить их собственными.</p>
            <div class="gallery travel-gallery">
                <figure><img src="images/colosseum.jpg" alt="Колизей в Риме" width="736" height="491"><figcaption>Колизей, Рим</figcaption></figure>
                <figure><img src="images/trevi.jpg" alt="Фонтан Треви в Риме" width="736" height="497" loading="lazy"><figcaption>Фонтан Треви, Рим</figcaption></figure>
            </div>
        </div>
    </section>
    <section class="coffee-section" id="plans">
        <div class="container">
            <h2>Что хочется сделать в поездке</h2>
            <p>Не хочется превращать путешествие только в список обязательных точек. Было бы здорово оставить время на неспешные прогулки, небольшие остановки и фотографии, которые захочется пересматривать после возвращения.</p>
            <p>Но несколько желаний уже есть:</p>
            <ul>
                <?php
                // foreach по очереди выводит все элементы массива как пункты списка.
                foreach ($items as $item) {
                    echo '<li>' . htmlspecialchars($item, ENT_QUOTES, 'UTF-8') . '</li>';
                }
                ?>
            </ul>
            <p class="after-list">Для меня такая поездка — возможность получить новые впечатления и увидеть больше, чем привычный маршрут между домом, учёбой и работой. Пока собираю идеи и представляю, какой могла бы быть первая прогулка по Риму.</p>
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
