<?php

session_start();

if (!isset($_SESSION['check']))
{
	header('Location: http://localhost:83/medt/ue10_session/index.php');
}		

?>