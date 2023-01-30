<?php

require '../function/function.php';

$id = $_GET["id"];

if (hapusProject($id) > 0) {
    echo "
            <script>
                alert('Project berhasil dihapus');
                document.location.href = '../project.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Project gagal dihapus');
                document.location.href = '../project.php';
            </script>
        ";
}