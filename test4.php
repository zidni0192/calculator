<html>
<head>
<title>Form Dinamis</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jQuery\Content\Scripts\jquery.js"></script>
<script language="javascript">
   var id = document.getElementById("id").value;
   function tambahUkuran() {
     var inputbaru;
     inputbaru= "<div id='req"+id+"'>"+
     "<select name='ukuran"+id+"'>"+
     "<option value='0' selected disabled>Pilih Ukuran</option>"+
     "<option value='s'>s</option>"+
     "<option value='m'>m</option>"+
     "<option value='l'>l</option>"+
     "<option value='xl'>XL</option>"+
     "<option value='xxl'>XXL</option>"+
     "<option value='xxxl'>XXXL</option>"+
     "</select>"+
     "<input type='text' name='jumlah"+id+"'>"+
     "</div>"+
     "<input class='delete' onclick='delet(#req"+id+")' type='button' value='delete'>";
     $("#pemain").append(inputbaru);
     id = (id-1) + 2;
     document.getElementById("id").value = id;
   }
   function delet(it){
    $(it).remove();
   }
</script>
</head>
<body>
<div id="container">
<h1>Contoh Form Dinamis menggunakan Jquery</h1>
<form method="post">
   <input id="id" value="1" type="hidden" />
   <button type="button" onclick="tambahUkuran(); return false;">Tambah Ukuran</button>
    <div id="pemain"></div>
  </form>
</div>
</body>
</html>