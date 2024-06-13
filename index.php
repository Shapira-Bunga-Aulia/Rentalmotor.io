<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
       body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        td {
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ddd;
        }
        input[type="text"], select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: #fff;
            padding: 15px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
    <div class="container">
        <h2>Rental Motor</h2>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>  
                <tr>
                    <td>Lama Waktu Rental (per hari)</td>
                    <td>:</td>
                    <td><input type="text" name="lamaRental" required></td>
                </tr>
                <tr>
                    <td>Jenis Motor</td>
                    <td>:</td>
                    <td>
                        <select name="jenis" required>
                            <option value="Scooter">Scooter</option>
                            <option value="Sport">Motor Sport</option>
                            <option value="SportTouring">Motor Sport Touring</option>
                            <option value="Cross">Motocross</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Submit" name="submit" required></td>
                </tr>
            </form>  
        </div>
        </table>
        <br>
        <div style="border: 1px solid #ccc; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; width: 500px; margin: 0 auto;">
        <?php
            require 'logic.php';
            $logic = new Rental;
            $logic->setHarga(70000, 85000, 75000, 95000);
            if(isset($_POST['submit'])) {
               $logic->member = $_POST['nama'];
               $logic->waktu = $_POST['lamaRental'];
               $logic->jenis = $_POST['jenis'];
               $logic->hargaRental();
               $logic->pembayaran();
            }
         ?>     
         </div>
</body>
</html>