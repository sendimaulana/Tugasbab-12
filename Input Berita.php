?>21<html>
<head><title>Input Berita</title>
<linkrel="stylesheet"href="style.css">
</head>
<body
 <ahref="index.php">HalamanDepan</a>|
 <ahref="arsip_berita.php">ArsipBerita</a>|
 <ahref="input_berita.php">InputBerita</a>
 <br><br>30    <FORMACTION=""METHOD="POST"NAME="input">
 <tablecellpadding="0"cellspacing="0"border="0"width="700">
 <tr>
 <tdcolspan="2"><h2>InputBerita</h2></td>
 </tr>
 <tr>
 <tdwidth="200">JudulBerita</td>
 <td>:<inputtype="text"name="judul"size="30"></td>
 </tr>
 <tr>
 <td>Kategori</td>
 <td>:
 <selectname="kategori">
 <?
 $query="SELECTid_kategori,nm_kategoriFROMkategoriORDERBYnm_kategori";
 $sql=mysql_query($query);
 while($hasil=mysql_fetch_array($sql)){echo"<optionvalue='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
 }
 ?>
 </select></td>
 </tr>
 <tr>
 <td>HeadlineBerita</td>
 <td>:<textareaname="headline"cols="50"rows="4"></textarea></td>
 </tr>           <tr>
 <td>IsiBerita</td>
 <td>:<textareaname="isi"cols="50"rows="10"></textarea></td>           </tr>
 <tr>
 <td>Pengirim</td>
 <td>:<inputtype="text"name="pengirim"size="20"></td>           </tr>
 <tr>
 <td>&nbsp;</td><td>&nbsp;&nbsp;<inputtype="submit"name="Input"value="InputBerita">&nbsp;
 <inputtype="reset"name="reset"value="Cancel"></td>
 </tr>
 </table>
 </FORM>
 </body>
 </html>