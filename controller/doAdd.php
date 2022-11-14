<?php
include '..\include\db_connect.php';
include '..\model\news_fetch.php';

$count = 1;
while(true){
  $duplicate = 0;
  foreach($beritas as $berita){
    if($berita['ID_post'] == $count){
      $duplicate = 1;
      break;
    }
  }
  if(!$duplicate){
    $news_id = $count;
    break;
  }
  else{
    $count = $count + 1;
  }
}

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];
$konten = $_POST['konten'];

$target_dir = "../assets/news/";
$target_file = $target_dir . basename($_FILES['gambar']['name']);
$check = false;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($news_id != '' && $judul != '' && $kategori != '' && $penulis != '' && $tanggal != '' && $konten != ''){
  $check = getimagesize($_FILES["gambar"]["tmp_name"]);
  if($check){
    if(file_exists($target_file)){
      $_SESSION['error_add_message'] = "File Name has already been Taken, Please Rename your File!";
      header("location: $base_url/view/add.php");
    }
    else{
      move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
  
      include '..\model\news_add.php';

      if($success){
        header("location: $base_url/view/admin.php");
      }
    }
  } 
  else {
      $_SESSION['error_add_message'] = "Your Image can't be Read!";
      header("location: $base_url/view/add.php");
  }
}
else{
  $_SESSION['error_add_message'] = "All fields must not be left empty!";
  header("location: $base_url/view/add.php");
}
