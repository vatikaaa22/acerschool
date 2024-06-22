<?php
    include "../../../helper/connection.php";
    session_start();

    $title = $_POST["title"];
    $description = $_POST["description"];
    $information_date = date('Y-m-d');

    // Nama file temporary yang akan disimpan di server 
    $lokasifile = $_FILES['image']['tmp_name'];

    // Membaca nama file yang akan diupload 
    $namafile = $_FILES['image']['name'];

    // Folder penyimpanan berkas/file 
    $uploaddir = "../uploads/";

    // Periksa apakah direktori ada, jika tidak, buat
    if (!file_exists($uploaddir) && !is_dir($uploaddir)) {
        mkdir($uploaddir, 0777, true);
    }

    // Menggabungkan nama folder dan nama file 
    $uploadfile = $uploaddir . $namafile;

    // Jika file berhasil di upload 
    if (move_uploaded_file($lokasifile, $uploadfile)) { 
        echo "Nama File <b>$namafile</b> sukses di upload";

        // Masukkan informasi file ke dalam database 
        $sql = "INSERT INTO informations(title, image, information_date, description) 
                VALUES('$title', '$namafile', '$information_date', '$description')"; 
        $hasil = mysqli_query($connection, $sql);
        
        if ($hasil) {
            $_SESSION['alert'] = [
                'type' => 'success',
                'message' => 'Information has been successfully created!'
            ];

            header('Location: ../information.php');
            exit();
        } else {
            $_SESSION['alert'] = [
                'type' => 'error',
                'message' => 'Error: ' . mysqli_error($connection)
            ];
            
            header('Location: ../information.php');
            exit();
        }
    } else {
        $_SESSION['alert'] = [
            'type' => 'error',
            'message' => 'File upload failed. Error: ' . $_FILES['image']['error']
        ];
        header('Location: ../information.php');
        exit();
    }
?>