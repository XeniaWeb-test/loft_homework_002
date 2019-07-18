<?php
/**
 * Задание #1
 * Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
 * Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
 *
 * @param $arr array Массив строк
 * @param boolean $glue
 * @return string
 */
function task1(array $arr, $glue = false)
{
    if (!$glue) {
        foreach ($arr as $key => $text) {
            echo "<p>" . $text . "</p>";
        }
    } else {
        $result = implode(", ", $arr);
        return $result;
    }
    return "Все исполнено, Шеф: все строки раскидал по параграфам. :)";
};

/**
 * Задание #2
 * Функция должна принимать переменное число аргументов.
 * Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие,
 * которое необходимо выполнить со всеми передаваемыми аргументами.
 * Остальные аргументы это целые и/или вещественные числа.
 * Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
 * Результат: 1 + 2 + 3 + 5.2 = 11.2
 *
 * @param string $operator
 * @param int|float ...$items
 * @return int|float
 */

function task2($operator, ...$items)
{
    $result = 0;
    switch ($operator) {
        case '+':
            echo 'Сложение: ';
            foreach ($items as $key => $item) {
                $result += $item;
            }
            break;
        case '*':
            echo 'Умножение: ';
            $result = 1;
            foreach ($items as $key => $item) {
                $result *= $item;
            }
            break;
        case '/':
            echo 'Деление: ';
            $result = 1;
            foreach ($items as $key => $item) {
                $result /= $item;
            }
            break;
        case '-':
            echo 'Вычитание: ';
            foreach ($items as $key => $item) {
                $result -= $item;
            }
            break;
        default:
            echo 'Неизвестное действие: ';
            $result = null;
    }
    echo 'результат = ' . $result;
    return $result;
}

/**
 * Задание #5 (выполняется после вебинара “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
 *
 * Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
 * Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию дополнить задание.
 *
 * @param $search
 * @param $replace
 * @param $string
 * @return string
 */

function task5($search, $replace, $string)
{
    return str_replace($search, $replace, $string);
};
