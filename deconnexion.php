<?php

session_start();

unset($_SESSION['user']);

echo '<h1>Vous êtes déconnécté</h1>'; 