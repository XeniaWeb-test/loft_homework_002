<?php
require_once('src/functions.php');

$list = [
    'утро',
    'вечер',
    'ночь'
];

task1($list);
task1($list, true);

task2_1('/', 1, 7, 3, 5, 2.354, 20);
task2('*', 1, 54, 3, 5, 11, 20);

task3(10, 14);

task4_1('d.m.Y H.i');
task4_2('24.02.2016 00:00:00');

task5('К', '', 'Карл у Клары украл Кораллы');
task5('Две', 'Три', 'Две бутылки лимонада');

task6_1('test.txt', 'Hello again!');
task6_2('test.txt');
