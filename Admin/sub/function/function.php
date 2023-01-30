<?php
    $db = mysqli_connect("localhost", "root", "", "himti");


    function baca($query) {
        global $db;

        $hasil = mysqli_query($db, $query);

        // membuat variabel wadah

        $wadah = [];
        while ( $baris = mysqli_fetch_assoc($hasil) ) {
            $wadah[] = $baris;
        }

        return $wadah;
    }

    function tambahProject($data) {
        global $db;

        $judul = htmlspecialchars($_POST["judul"]);
        $desc = htmlspecialchars($_POST["desc"]);

        // upload gambar

        $gambar = upload();
        if( !$gambar ) {
            return false;
        }

        $data = "INSERT INTO project VALUES('', '$judul', '$desc', '$gambar')";

        mysqli_query($db, $data);

        return mysqli_affected_rows($db);
    }

    function upload() {
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        // cek error gambar yang tidak ter-upload

        if( $error === 4 ) {
            echo 
            "<script>
                alert('Pilih gambar');
            </script>";
            return false;
        }

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        // cek apakah file yang di upload merupakan gambar 

        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo 
            "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
            return false;
        }

        // cek apakah size gambar sesuai dengan persyaratan

        if($ukuranFile > 1000000) {
            echo 
            "<script>
                alert('Gambar anda melebihi batas ukuran');
            </script>";
            return false;
        }

        // lolos pengecekan, gambar dipindahkan ke direktori
        // generate nama file baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, '../project/img-project' . $namaFileBaru);

        return $namaFileBaru;

    }

    function hapusProject($id) {

            global $db;

            $id = $_GET["id"];
            $query = "DELETE FROM project WHERE id_project = $id";

            mysqli_query($db, $query);

            return mysqli_affected_rows($db);
        }

    function ubahProject($data) {
        global $db;

        $id = htmlspecialchars($_GET["id_project"]);
        $judul = htmlspecialchars($data["judul_project"]);
        $desc = htmlspecialchars($data["desc_project"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah gambar diubah

        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        $data = "UPDATE project SET
                judul_project = '$judul',
                desc_project = '$desc',
                gambar = '$gambar' WHERE id = $id";

        mysqli_query($db, $data);

        return mysqli_affected_rows($db);
    }

    function registrasi($data) {
        global $db;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($db, $data["password"]);
        $password2 = mysqli_real_escape_string($db, $data["password2"]);
        

        // cek username sudah ada atau belum
        $hasil = mysqli_query($db, "SELECT username FROM `admin` WHERE username = '$username'");

        if(mysqli_fetch_assoc($hasil)) {
            echo 
            "<script>
                alert('Username sudah terdaftar')
            </script>";
            return false;
        }

        // cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
                alert('Password konfirmasi tidak sesuai')
            </script>";

            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan userbaru ke database
        mysqli_query($db, "INSERT INTO `admin` VALUES('', '$username', '$password')");

        return mysqli_affected_rows($db);

    }
?>