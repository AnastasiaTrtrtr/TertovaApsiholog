<?php
$to_email = "tertova80@mail.ru";
$site_name = "Сайт педагога-психолога";

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(['success' => false, 'message' => 'Неверный метод запроса']);
    exit;
}

$name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$phone = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
$email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
$service = isset($_POST['service']) ? trim(strip_tags($_POST['service'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

if (empty($name) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Заполните имя и телефон']);
    exit;
}

$service_map = [
    'consult' => 'Консультация для родителей',
    'diagnostics' => 'Диагностика развития',
    'correction' => 'Коррекционные занятия',
    'sand' => 'Песочная терапия',
    'school' => 'Подготовка к школе',
    'group' => 'Групповые занятия',
    'other' => 'Другое'
];
$service_name = isset($service_map[$service]) ? $service_map[$service] : $service;

$subject = "=?UTF-8?B?" . base64_encode("Новая заявка с сайта психолога") . "?=";

$email_content = "
<html>
<head><title>Новая заявка</title></head>
<body style='font-family: Arial, sans-serif;'>
<h2>Новая заявка на консультацию</h2>
<p><strong>Имя:</strong> $name</p>
<p><strong>Телефон:</strong> $phone</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Услуга:</strong> $service_name</p>
" . (!empty($message) ? "<p><strong>Сообщение:</strong><br>" . nl2br($message) . "</p>" : "") . "
<hr><small>Отправлено с сайта $site_name</small>
</body>
</html>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: =?UTF-8?B?" . base64_encode($site_name) . "?= <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";

$send_status = mail($to_email, $subject, $email_content, $headers);

echo json_encode(['success' => $send_status, 'message' => $send_status ? 'Отправлено' : 'Ошибка отправки']);
?>