<?php

require_once 'functions/functions.php';
unset($_SESSION['email']);
unset($_SESSION['pseudo']);
unset($_SESSION['nom']);
unset($_SESSION['email']);
unset($_SESSION['admin']);
unset($_SESSION['image']); ?>

//header("Location:/"); ?>
<script>document.location.replace("/admin/login")</script>
