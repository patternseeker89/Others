<?php

declare(strict_types=1);

namespace Others;

use Others\Persistence\StringHistory;

require_once 'vendor/autoload.php';

$string = new StringHistory();

$string->setValue('Функция не возвращает значения после выполнения.');
$string->setValue('SplDoublyLinkedList::next — Перемещает итератор к следующему элементу');
$string->setValue('Record 3');
$string->setValue('SplDoublyLinkedList::next2 — Перемещает итератор к следующему элементу');

echo $string->getHistoryCount() . "\n";

echo $string->getValue() . "\n";

$list = $string->getHistoryList();
print_r($list);

foreach ($list as $value) {
    echo $value . '->';
}

echo "\n";
