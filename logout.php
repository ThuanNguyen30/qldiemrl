<?php

session_start();

unset($_SESSION['login']); /* Matando sessão login */
unset($_SESSION['usuario']); /* Matando sessão usuário */

header('location:index.php');