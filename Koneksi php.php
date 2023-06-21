<?php2
include"koneksi.php";
//prosesinputberita
if(isset($_POST['Input'])){
$judul=addslashes(strip_tags($_POST['judul']));
$kategori=$_POST['kategori'];
$headline=addslashes(strip_tags($_POST['headline']));
$isi_berita=addslashes(strip_tags($_POST['isi']));
$pengirim=addslashes(strip_tags($_POST['pengirim']));
//insertketabel
$query="INSERTINTOberita VALUES('','$kategori','$judul','$headline','$isi_berita','$pengirim', now())";
$sql=mysql_query($query);
if($sql){
echo"<h2><fontcolor=blue>Beritatelahberhasilditambahkan</font></h2>";
}else{
echo"<h2><fontcolor=red>Beritagagalditambahkan</font></h2>"
;}
}
?>21<html>
<head><title>Input Berita</title>
<linkrel="stylesheet"href="style.css">
</head>
<body