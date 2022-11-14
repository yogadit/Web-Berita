<?php

include '..\include\db_connect.php';

$news_id = $_POST['news_id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];
$konten = $_POST['konten'];

include '..\model\news_img_fetch.php';

$target_dir = "../assets/news/";
$target_file = $target_dir . basename($_FILES['gambar']['name']);
$check = false;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($_FILES['gambar']['name'] == ''){ //kalo pake gambar lama
    if($news_id != '' && $judul != '' && $kategori != '' && $penulis != '' && $tanggal != '' && $konten != ''){
        include '..\model\news_edit_non_img.php';
        header("location: $base_url/view/admin.php");
    }
    else{
        $_SESSION['error_edit_message'] = "All fields must not be left empty!";
        header("location: $base_url/view/edit.php?News_id=$news_id");
    }
}
else{ //kalo gambar di upload baru
    if($news_id != '' && $judul != '' && $kategori != '' && $penulis != '' && $tanggal != '' && $konten != ''){
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check){
            if(file_exists($target_file)){
                $_SESSION['error_edit_message'] = "File Name has already been Taken, Please Rename your File!";
                header("location: $base_url/view/edit.php?News_id=$news_id");
            }
            else{
                unlink("../assets/news/" . $newsImg['gambar']);

                move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
            
                include '..\model\news_edit.php';
        
                header("location: $base_url/view/admin.php");
            }
        } 
        else{
            $_SESSION['error_edit_message'] = "Your Image can't be Read!";
            header("location: $base_url/view/edit.php?News_id=$news_id");
        }
    }
    else{
        $_SESSION['error_edit_message'] = "All fields must not be left empty!";
        header("location: $base_url/view/edit.php?News_id=$news_id");
    }
}
?>