<?php

function run_test()
{
    $book1 = new Book("Путь Студента", array("Алексей Цыганов"), "АЛЬФА-Book", 2019);
    $bookslist = new BooksList();
    $bookslist->add($book1);
    $bookslist->store('Books.txt');
    $book2 = new Book("Искусство дизайна", array("Артур Пирожков", "Артем Лебедев", "Чип Дейл"), "ДМБ -Издательство", 2021);
    $book3 = new Book("Теория игр", array("Том Круз"), "Просвещение", 2018);
    $bookslist->add($book2);
    $bookslist->add($book3);
    echo "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: Путь Студента" . PHP_EOL .
        "Автор 1: Алексей Цыганов" . PHP_EOL .
        "Издательство: АЛЬФА-Book" . PHP_EOL .
        "Год: 2019" . PHP_EOL .
        "Id: 2" . PHP_EOL .
        "Название: Искусство дизайна" . PHP_EOL .
        "Автор 1: Артур Пирожков" . PHP_EOL .
        "Автор 2: Артем Лебедевн" . PHP_EOL .
        "Автор 2: Чип Дейл" . PHP_EOL .
        "Издательство: ДМБ -Издательство" . PHP_EOL .
        "Год: 2021" . PHP_EOL .
        "Id: 3" . PHP_EOL .
        "Название: Теория игр" . PHP_EOL .
        "Автор 1: Том Круз" . PHP_EOL .
        "Издательство: Просвещение" . PHP_EOL .
        "Год: 2018" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
    $bookslist->load('Books.txt');
    echo PHP_EOL . "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: Путь Студента" . PHP_EOL .
        "Автор 1: Алексей Цыганов" . PHP_EOL .
        "Издательство: АЛЬФА-Book" . PHP_EOL .
        "Год: 2019" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
}
