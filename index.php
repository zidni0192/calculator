<?php
  $angka = @$_GET['angka'];
  if ($angka == null || $angka == 0 || $angka == 1) {
    $angka = 2;
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <script type="text/javascript" src="jQuery\Content\Scripts\jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap\content\Content\bootstrap.css">
  <script type="text/javascript">
    function acts(evt){
      return window.location.href="index.php?angka="+evt.value;
    }
    function sum(){
      let jumlah = 0
      let huruf = []
      let kondisi = true
      for (let i = 1; i <= <?php echo $angka ?>; i++) {
        if(isNaN(Number(document.getElementById('angka'+i).value)) || document.getElementById('angka'+i).value === ''){
          alert('angka harus di isi dengan benar')
          kondisi = false
          break;
        }else{
          kondisi = true
          huruf.push(Number(document.getElementById('angka'+i).value))
          jumlah += Number(document.getElementById('angka'+i).value)
        }
      }
      if(kondisi){
        document.getElementsByClassName('hasil')[0].value +=`\nHasil Dari ${huruf.join(' + ')} = ${jumlah}`        
      }
    }
    function perkalian(){
      let jumlah = 0
      let huruf = []
      let kondisi = true
      for (let i = 1; i <= <?php echo $angka ?>; i++) {
        if(isNaN(Number(document.getElementById('angka'+i).value)) || document.getElementById('angka'+i).value === ''){
          alert('angka harus di isi dengan benar')
          kondisi = false
          break;
        }else{
          if(i === 1){
            jumlah = Number(document.getElementById('angka'+i).value)
          }else{
            jumlah = Number(document.getElementById('angka'+i).value) * jumlah
          }
          kondisi = true
          huruf.push(Number(document.getElementById('angka'+i).value))
        }
      }
      if(kondisi){
        document.getElementsByClassName('hasil')[0].value +=`\nHasil Dari ${huruf.join(' X ')} = ${jumlah}`        
      }
    }
    function pembagian(){
      let jumlah = 0
      let huruf = []
      let kondisi = true
      for (let i = 1; i <= <?php echo $angka ?>; i++) {
        if(isNaN(Number(document.getElementById('angka'+i).value)) || document.getElementById('angka'+i).value === ''){
          alert('angka harus di isi dengan benar')
          kondisi = false
          break;
        }else{
          if(i === 1){
            jumlah = Number(document.getElementById('angka'+i).value)
          }else{
            jumlah = jumlah / Number(document.getElementById('angka'+i).value) 
          }
          kondisi = true
          huruf.push(Number(document.getElementById('angka'+i).value))
        }
      }
      if(kondisi){
        document.getElementsByClassName('hasil')[0].value +=`\nHasil Dari ${huruf.join(' / ')} = ${jumlah}`        
      }
    }
    function pengurangan(){
      let jumlah = 0
      let huruf = []
      let kondisi = true
      for (let i = 1; i <= <?php echo $angka ?>; i++) {
        if(isNaN(Number(document.getElementById('angka'+i).value)) || document.getElementById('angka'+i).value === ''){
          alert('angka harus di isi dengan benar')
          kondisi = false
          break;
        }else{
          if(i === 1){
            jumlah = Number(document.getElementById('angka'+i).value)
          }else{
            jumlah = jumlah - Number(document.getElementById('angka'+i).value) 
          }
          kondisi = true
          huruf.push(Number(document.getElementById('angka'+i).value))
        }
      }
      if(kondisi){
        document.getElementsByClassName('hasil')[0].value +=`\nHasil Dari ${huruf.join(' - ')} = ${jumlah}`        
      }
    }
  </script>
  <body>
    <div class="container" style="margin-bottom: 40px;">
      <div class="col-lg-8 col-md-8 col-xs-8" style="float: unset;margin: auto;">
        <h1 style="margin: auto;padding: 30px 0px; text-align: center;">Calculator Sederhana</h1>
        <form action="index.html" method="GET" onsubmit="(evt)=>evt.preventDefault()">
          <input type="hidden" name="" value="<?php echo $angka; ?>">
          <select name="angka" onchange="acts(this)" class="form-control">
            <option value="">Pilih Banyaknya angka untuk di eksekusi</option>
            <?php
              for ($in=0; $in <$angka+100 ; $in++) {
                if($angka == $in){
                  ?>
                    <option value="<?php echo "$in"; ?>" selected><?php echo "$in"; ?></option>
                  <?php
                }else{
            ?>
            <option value="<?php echo "$in"; ?>"><?php echo "$in"; ?></option>
            <?php
                }
              }
            ?>
          </select>
          <div class="angka col-lg-12 col-md-12 col-xs-12" style="overflow: hidden; padding: 30px 5px;">
            <?php
              for($o = 1;$o<=$angka;$o++) {
            ?>
            <div class="input-group col-lg-6 col-md-6 col-xs-6" style="margin: 20px 0px;">          
              <span class="input-group-addon">Angka Ke - <?php echo $o; ?></span>
              <input type="text" class="form-control angka<?php echo $o;?>" id="angka<?php echo $o; ?>" value="">
            </div>
            <?php
              }
            ?>
          </div>
          <div class="button col-lg-10 col-md-10 col-xs-10" style="float:unset; overflow: hidden; margin: auto; padding: 30px 5px;">
            <input type="button" name="tambah" class="btn btn-default btn-lg col-lg-5 col-md-5 col-xs-5 tambah" value="Tambah" style="margin:5px 10px;" onclick="sum()">
            <input type="button" name="kurang" class="btn btn-default btn-lg col-lg-5 col-md-5 col-xs-5 kurang" value="Kurang" style="margin:5px 10px;" onclick="pengurangan()">
            <input type="button" name="bagi" class="btn btn-default btn-lg col-lg-5 col-md-5 col-xs-5 bagi" value="Bagi" style="margin:5px 10px;" onclick="pembagian()">
            <input type="button" name="kali" class="btn btn-default btn-lg col-lg-5 col-md-5 col-xs-5 kali" value="Kali" style="margin:5px 10px;" onclick="perkalian()">
          </div>
        </form>
        <textarea class="form-control col-lg-12 col-md-12 col-xs-12 hasil"  disabled style="resize: vertical; cursor:default; min-height: 300px;padding: 10px 30px;">
        </textarea>
      </div>
    </div>
  </body>
</html>
