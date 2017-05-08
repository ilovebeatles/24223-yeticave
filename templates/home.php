<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <li class="promo__item promo__item--boards">
            <a class="promo__link" href="all-lots.html">Доски и лыжи</a>
        </li>
        <li class="promo__item promo__item--attachment">
            <a class="promo__link" href="all-lots.html">Крепления</a>
        </li>
        <li class="promo__item promo__item--boots">
            <a class="promo__link" href="all-lots.html">Ботинки</a>
        </li>
        <li class="promo__item promo__item--clothing">
            <a class="promo__link" href="all-lots.html">Одежда</a>
        </li>
        <li class="promo__item promo__item--tools">
            <a class="promo__link" href="all-lots.html">Инструменты</a>
        </li>
        <li class="promo__item promo__item--other">
            <a class="promo__link" href="all-lots.html">Разное</a>
        </li>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
        <?php
            $categoriesNames = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
            $lotsData = [
                [
                    'name' => '2014 Rossignol District Snowboard',
                    'category' => $categoriesNames[0],
                    'price' => 10999,
                    'imageSrc' => 'img/lot-1.jpg'
                ],
                [
                    'name' => 'DC Ply Mens 2016/2017 Snowboard',
                    'category' => $categoriesNames[0],
                    'price' => 159999,
                    'imageSrc' => 'img/lot-2.jpg'
                ],
                [
                    'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
                    'category' => $categoriesNames[1],
                    'price' => 8000,
                    'imageSrc' => 'img/lot-3.jpg'
                ],
                [
                    'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
                    'category' => $categoriesNames[2],
                    'price' => 10999,
                    'imageSrc' => 'img/lot-4.jpg'
                ],
                [
                    'name' => 'Куртка для сноуборда DC Mutiny Charocal',
                    'category' => $categoriesNames[3],
                    'price' => 7500,
                    'imageSrc' => 'img/lot-5.jpg'
                ],
                [
                    'name' => 'Маска Oakley Canopy',
                    'category' => $categoriesNames[5],
                    'price' => 5400,
                    'imageSrc' => 'img/lot-6.jpg'
                ],
            ];
        ?>
        <select class="lots__select">
            <option>Все категории</option>
            <?php foreach ($categoriesNames as $category) : ?>
                <option><?= $category ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <ul class="lots__list">
        <?php foreach ($lotsData as $lot) : ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $lot["imageSrc"] ?>" width="350" height="260" alt="<?= $lot["name"] ?>">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $lot["category"] ?></span>
                    <h3 class="lot__title"><a class="text-link" href=""><?= $lot["name"] ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= $lot["price"] ?><b class="rub">р</b></span>
                        </div>
                        <div class="lot__timer timer">
                            <?= $params['lot_time_remaining']; ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>