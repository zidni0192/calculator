<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript" src="jQuery\Content\Scripts\jquery.js"></script>
<script type="text/javascript">
	var total = document.getElemetntByClassName("total").value;
	var jumlah = document.getElemetntByClassName("jumlah").value;
	jumlah = parseDouble(jumlah);
	total = parseDouble(total);
	var output;
	var out = document.getElemetntByClassName("out");
	function funct() {
		output = total - jumlah;
		out.append("Total tinggal"+output);
	}
</script>
<form>
	<input type="text" class="total" onchange="funct();"></input>
	<input type="text" class="ukuran"></input>
	<input type="text" class="jumlah" onchange="funct();"></input>
	<div class="out">
		
	</div>
</form>
</body>
</html>