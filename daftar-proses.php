<html>
    <head>
        <style type="text/css">
            body{
                background-color: #48d1cc;
            }
            table{
                width: 500px;
                background: white;
                /*meletakkan form ke tengah*/
                margin: 80px auto;
                padding: 30px 20px;
            }
        </style>
    </head>
    <body>
        <div class="kotak">
            <table>
                <tr>
                    <td align="center" colspan="5"><h3>.:STEP#3 TOTAL PEMBAYARAN:.</h3></td>
                </tr>
                <tr>
                    <td align="center">Nomor</td>
                    <td align="center">Nama Barang</td>
                    <td align="center">Harga</td>
                    <td align="center">Jumlah</td>
                    <td align="center">Total</td>
                </tr>
                <?php
                    $barang = $_GET['barang'];
                    $harga = $_GET['harga'];
                    $jumlah = $_GET['jumlah'];
                    $a = 1;
                    $gtotal = 0;
                    foreach ($barang as $key => $value) {
           
                ?>
                <tr>
                    <td align="center">
                        <?php echo $a++;?>
                    </td>
                    <td align="center">
                        <?php echo $barang[$key]; ?>
                    </td>
                    <td align="center">
                        <?php echo $harga[$key]; ?>
                    </td>
                    <td align="center">
                        <?php echo $jumlah[$key]; ?>
                    </td>
                    <td align="center">
                        <?php echo $total = $harga[$key] * $jumlah[$key]; ?>
                    </td>
                </tr>
                <?php
 
                        $gtotal += $total;
                    }
                ?>
                <tr>
                    <td colspan="4" align="center">Total</td>
                    <td align="center"><?php echo $gtotal; ?></td>
                </tr>
               
            </table>   
        </div>
        <center>
        <a type="button" class="btn btn-danger" class="link" href="index.php">kembali</a>
		</center>
    </body>
</html>