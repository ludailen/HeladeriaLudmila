<?php
include_once "header.php";

session_start( );
session_destroy( );

header("Location: index.php");
include_once "footer.php";

?>