<?php
//connection php with database
$conn = new mysqli('localhost', 'root', '', 'company');
//check connection. if connection failed, show a error message
if (!$conn) {
	die('Connection failed!');
}