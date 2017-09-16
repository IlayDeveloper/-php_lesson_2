<?php
header('content-type: text/html; charset=utf-8');
$template = file_get_contents('index.tpl');

//Массив для динамических данных
$data = array ('company' => '', 'title' => '', 'content' => '', 'year' => '', 'time' => '', 'today' => '', 'news' => '', 'tasks' => '');

//Массив шаблона
$place_holders = array('{{COMPANY}}', '{{TITLE}}', '{{CONTENT}}', '{{YEAR}}', '{{TIME}}', '{{TODAY}}', '{{NEWS}}', '{{TASKS}}');

//ДИНАМИЧЕСКИЕ ДАННЫЕ
$data['company'] = 'Пекарня PHP';  
$data['title'] = 'Best company of the world!';
$data['content'] = "Сегодня в наличи: 
  <ul>
   <li>Переменные</li>
   <li>Функции</li>
   <li>Рекурсия</li>
   <li>Бесконечные циклы</li>
   <li>Массивы</li>
  </ul>"; 
$data['news'] = 'Новый вкус каждый день!'; 
$data['year'] = date ('Y'); 
$data['time'] = date ('H : i');
//Домашнее задание
//Задача 1
$a = -1;
$b = 2;
if ($a >= 0 && $b>=0){
	$task_1 = $a - $b;
}else if ($a < 0 && $b<0){
	$task_1 = $a * $b;
}else {
	$task_1 = $a + $b;
}

//Задача 2
$a = 5;

switch ($a) {
	case 1:
	$task_2 = 1;
	case 2:
	$task_2 = $task_2 . ' ' . 2;
	case 3:
	$task_2 = $task_2 . ' ' . 3;
	case 4:
	$task_2 = $task_2 . ' ' . 4;
	case 5:
	$task_2 = $task_2 . ' ' . 5;
	case 6:
	$task_2 = $task_2 . ' ' . 6;
	case 7:
	$task_2 = $task_2 . ' ' . 7;
	case 8:
	$task_2 = $task_2 . ' ' . 8;
	case 9:
	$task_2 = $task_2 . ' ' . 9;
	case 10:
	$task_2 = $task_2 . ' ' . 10;
	case 11:
	$task_2 = $task_2 . ' ' . 11;
	case 12:
	$task_2 = $task_2 . ' ' . 12;
	case 13:
	$task_2 = $task_2 . ' ' . 13;
	case 14:
	$task_2 = $task_2 . ' ' . 14;
	case 15:
	$task_2 = $task_2 . ' ' . 15;
} 

$data['tasks'] = 'Задача 1:  ' ."$task_1" . '<br>' . 'Задача 2:  ' . "$task_2";
//Переводчик дня недели на русский
$today_is = date ('N');

switch ($today_is){
	case '1':
	$data['today'] = 'понедельник';
	break;
	case '2':
	$data['today'] = 'вторник';
	break;
	case '3':
	$data['today'] = 'среду';
	break;
	case '4':
	$data['today'] = 'четверг';
	break;
	case '5':
	$data['today'] = 'пятницу';
	break;
	case '6':
	$data['today'] = 'субботу';
	break;
	default:
	$data['today'] = 'воскресенье';
}

//Замена массива шаблона на массив динамических данных
$template = str_replace ($place_holders, $data, $template);


echo $template;


?>