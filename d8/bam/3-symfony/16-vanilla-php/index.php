<?php

$input = isset($_GET['name']) ? $_GET['name'] : 'World';

header('Content-Type: text/html; charset=utf-8');
//header('Content-Type: text/html; charset=ISO-8859-1');

printf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'));
//printf('%s', htmlspecialchars('€', ENT_QUOTES, 'ISO-8859-1'));
