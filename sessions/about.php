<?php session_start();
echo $_SESSION['username'];
session_destroy();
echo $_SESSION['username'];
