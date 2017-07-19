<?php
    $url = $_POST['url'];
    $title = getTitle($url);
    echo json_encode(['title' => $title]);

    function getTitle($url) {
        // Напиши здесь код для парса тайтла
        // Сейчас это просто заглушка
        return mt_rand(0,100);
    }