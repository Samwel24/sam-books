<?php

require 'layouts/header.php';
session_destroy();
header('Location: index');