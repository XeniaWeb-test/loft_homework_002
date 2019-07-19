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
 * Задание #2 Вариант 1
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

function task2_1($operator, ...$items)
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
            echo 'Неизвестное действие: результат не определен.';
            $result = null;
    }
    if ($result) {
        echo 'результат = ' . $result . PHP_EOL;
    }
    return $result;
}
/**
 * Задание #2 Вариант 2
 * Функция должна принимать переменное число аргументов.
 * Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие,
 * которое необходимо выполнить со всеми передаваемыми аргументами.
 * Остальные аргументы это целые и/или вещественные числа.
 * Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
 * Результат: 1 + 2 + 3 + 5.2 = 11.2
 *
 * @param string $operator
 * @return int|float
 */

function task2($operator)
{
    $result = 0;
    $items = func_get_args();
    switch ($operator) {
        case '+':
            echo 'Сложение: ';
            for ($i = 1; $i < count($items); $i++) {
                $result += $items[$i];
            }
            break;
        case '-':
            echo 'Вычитание: ';
            for ($i = 1; $i < count($items); $i++) {
                $result -= $items[$i];
            }
            break;

        case '*':
            echo 'Умножение: ';
            $result = 1;
            for ($i = 1; $i < count($items); $i++) {
                $result *= $items[$i];
            }
            break;
        case '/':
            echo 'Деление: ';
            $result = 1;
            for ($i = 1; $i < count($items); $i++) {
                $result /= $items[$i];
            }
            break;
        default:
            echo 'Неизвестное действие: результат не определен.';
            $result = null;
    }
    if ($result) {
        echo 'результат = ' . $result . PHP_EOL;
    }
    return $result;
}

/**
 * Задание #3 (Использование рекурсии не обязательно)
 *
 * Функция должна принимать два параметра – целые числа.
 * Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения
 * размером со значения параметров, переданных в функцию.
 * (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8).
 * Таблица должна быть выполнена с использованием тега <table>
 * В остальных случаях выдавать корректную ошибку.
 * @param int $rows
 * @param int $cols
 */

function task3($rows, $cols)
{
//    if (is_int($rows) && is_int($cols) && $rows > 0 && $cols > 0) {
    if ($rows > 0 && $cols > 0) {
        $tableStyle = 'table{border:3px double darkred;border-collapse:collapse;}';
        $cellStyle = ' td{padding:8px;border:1px solid darkred;text-align: center}';
        $style = "<style>" . $tableStyle . $cellStyle . "</style>";
        $caption = '<caption style="text-align:right;color:darkred;">Таблица умножения</caption>';

        echo '<table>' . $style;

        for ($tr = 1; $tr <= $rows; $tr++) {
            echo '<tr>';
            for ($td = 1; $td <= $cols; $td++) {
                echo '<td>' . $tr * $td . '</td>';
            }
            echo '</tr>';
        }
        echo $caption . '</table>';
    } else {
        echo 'Неверный формат исходных данных! Введите два целых положительных числа в качестве аргументов.';
    }
}

/**
 * Задание #4 (выполняется после вебинара “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
 * Вариант 1
 * Выведите информацию о текущей дате в формате 31.12.2016 23:59
 *
 * @param string $format
 */

function task4_1(string $format)
{
    echo 'Текущая дата: ' . date($format) . PHP_EOL;
}

/**
 * Задание #4
 * Вариант 2
 * Выведите unixtime время соответствующее 24.02.2016 00:00:00.
 *
 * @param string $searchDate
 */

function task4_2(string $searchDate)
{
    echo 'Этой дате соответствует Unixtime: ' . strtotime($searchDate) . PHP_EOL;
}

/**
 * Задание #5 (выполняется после вебинара “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
 *
 * Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
 * Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию дополнить задание.
 *
 * @param string $search
 * @param string $replace
 * @param string $string
 * @return string
 */

function task5($search, $replace, $string)
{
    return str_replace($search, $replace, $string);
};

/**
 * Задание #6 (выполняется после вебинара “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
 * Часть 1
 * Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
 *
 * @param string $fileName Имя создаваемого файла
 * @param string $content Текст для записи в файл
 */

function task6_1(string $fileName, string $content)
{
    // Проверяем существование файла с таким именем
    if (file_exists($fileName)) {
        echo 'Файл с таким именем уже существует!';
        exit;
    } else {
        // Создаем файл и открываем его
        $handle = fopen($fileName, 'wb');
    }
    if ($handle) {
        echo 'Файл ' . $fileName . ' успешно создан';
        // Записываем $content в открытый файл.
        if (fwrite($handle, $content) === false) {
            echo "Не могу произвести запись в файл.";
            exit;
        }
        echo 'Запись в файл прошла успешно';
        //Закрываем файл
        fclose($handle);
    } else {
        echo 'Не удалось создать файл ' . $fileName;
    }
}

/**
 * Задание #6
 * Часть 2
 *
 * Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
 *
 *       (Другой способ чтения содержимого файла - сначала открыть, потом читать.
 *       Файл закрывается автоматически функцией fpassthru() после чтения.
 *       $handle = fopen($fileName, 'r');
 *       echo fpassthru($handle);)
 *
 * @param string $fileName
 */

function task6_2($fileName)
{
    if (file_exists($fileName)) {
        echo readfile($fileName);
    } else {
        echo 'Файл с таким именем не найден!';
    }
}
