<?php
session_start();

require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];

if (padam($id) > 0) {
    echo "
            <script>
                alert('Data berjaya dipadamkan!');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dipadamkan!');
                document.location.href = 'index.php';
            </script>
        ";
}
