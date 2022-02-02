<?php
require 'functions.php';
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
