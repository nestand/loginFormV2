<?php
require_once 'core/init.php';

//if i have access it should print number of my host
echo Config::get('mysql/host'); // 127.0.0.1