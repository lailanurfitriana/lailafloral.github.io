<html>
    <head>
      <title>SHOP</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
      <style type="text/css">
            body{
                background-color: #48d1cc;
            }
            table{
                width: 600px;
                background: white;
                /*meletakkan form ke tengah*/
                margin: 80px auto;
                padding: 30px 20px;
            }
        </style>
    <body>
    	<div class="w3-content" style="max-width:1600px">

		    <!-- Header -->
		    <header class="w3-container w3-center w3-padding-48 w3-white">
		      <h1 class="w3-xxxlarge"><b>FLORAL SHOP</b></h1>
		      <h6>Welcome to the <span class="w3-tag">FLORAL's world</span></h6>
		    </header>
 		 </div>
        <div class="kotak">
            <form method="GET" action="daftar-proses.php">
                <table>
                    <tr>
                        <td align="center" colspan="5"><h3>.:TOTAL PEMBAYARAN:.</h3></td>
                    </tr>
                    <tr>
                        <td align="center">Nomor</td>
                        <td align="center">Nama Barang</td>
                        <td align="center">Harga</td>
                        <td align="center">Jumlah</td>
                    </tr>
                    <?php
                        $a = 1;
                        $jumlah = $_GET['jumlah'];
                        for($i=0; $i<$jumlah; $i++){
                    ?>
                    <tr>
                        <td align="center">
                        <?php echo $a++;?></td>
                        <td>
                            <input type="text" name="barang[<?php echo $i; ?>]">
                        </td>
                        <td>
                            <input type="text" name="harga[<?php echo $i; ?>]">
                        </td>
                        <td>
                            <input type="text" name="jumlah[<?php echo $i; ?>]">
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button align="right" type="submit">SUBMIT</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>