<html>
<head>
<title>Form Dinamis</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jQuery\Content\Scripts\jquery.js"></script>
<script language="javascript">
   function tambahHobi() {
     var idf = document.getElementById("idf").value;
     var stre;
     stre="<p id='srow" + idf + "'><input type='text' size='40' name='rincian_hobi[]' placeholder='Masukkan Hobi' /> <a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" + idf + "\"); return false;'>Hapus</a></p>";
     $("#divHobi").append(stre);
     idf = (idf-1) + 2;
     document.getElementById("idf").value = idf;
   }
   function hapusElemen(idf) {
     $(idf).remove();
   }
</script>
</head>
<body>
<div id="container">
<h2>Contoh Form Dinamis</h2>
<form method="post" action="proses.php">
   <input id="idf" value="1" type="hidden" />
   <p> Nama : <input name="nama" type="text" id="nama" size="40"> </p>
   <button type="button" onclick="tambahHobi(); return false;">Tambah Rincian Hobi</button>
   <div id="divHobi"></div>
   <button type="submit">Simpan</button>
  </form>
</div>
</body>
</html>