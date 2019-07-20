<?php

/**
 * Задание #1
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
}

/**
 * Задание #2 Вариант 1
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
 * @param int $rows
 * @param int $cols
 * @return null
 */

function task3($rows, $cols)
{
//    if (is_int($rows) && is_int($cols) && $rows > 0 && $cols > 0) {
    if ($rows < 1 || $cols < 1) {
        echo 'Неверный формат исходных данных! Введите два целых положительных числа в качестве аргументов.';
        return null;
    }

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
    task3(--$rows, --$cols);
}

/**
 * Задание #4
 * Вариант 1
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
 *
 * @param string $searchDate
 */

function task4_2(string $searchDate)
{
    echo 'Этой дате соответствует Unixtime: ' . strtotime($searchDate) . PHP_EOL;
}

/**
 * Задание #5
 *
 * @param string $search
 * @param string $replace
 * @param string $string
 * @return string
 */

function task5($search, $replace, $string)
{
    return str_replace($search, $replace, $string);
}


/**
 * Задание #6
 * Часть 1
 *
 * @param string $fileName
 * @param string $content Текст для записи в файл
 * @return null
 */

function task6_1(string $fileName, string $content)
{
    if (file_exists($fileName)) {
        echo 'Файл с таким именем уже существует!';
        return null;
    }
    // Создаем файл и открываем его
    $handle = fopen($fileName, 'wb');

    if ($handle === false) {
        echo 'Не удалось создать файл ' . $fileName;
        return null;
    }

    echo 'Файл ' . $fileName . ' успешно создан';

    // Записываем $content в открытый файл.
    if (!fwrite($handle, $content)) {
        echo "Не могу произвести запись в файл.";
        return null;
    }
    echo 'Запись в файл прошла успешно';
    fclose($handle);
}

/**
 * Задание #6
 * Часть 2
 *
 * @param string $fileName
 *
 */

function task6_2($fileName)
{
    if (!file_exists($fileName)) {
        echo 'Файл с таким именем не найден!';
        return null;
    }
    echo file_get_contents ($fileName);
}
