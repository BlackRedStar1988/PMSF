<?php
require_once 'config/config.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'discord-logout') {
        destroyCookiesAndSessions();
        header('Location: .');
        die();
    }
    if ($_GET['action'] == 'facebook-logout') {
        destroyCookiesAndSessions();
        header('Location: .');
        die();
    }
    if ($_GET['action'] == 'native-logout') {
        destroyCookiesAndSessions();
        header('Location: .');
        die();
    }
}
destroyCookiesAndSessions();
header('Location: .');
die;
