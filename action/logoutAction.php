<?php
session_start();
session_destroy();
header("location:../utils/login.php");