<?php
require 'functions.php';
require 'config/koneksi.php';

$siswa = query("SELECT * FROM siswa");
//tombol cari ditekan
if(isset($_POST["cari"]) )
{
  $siswa = cari($_POST["keyword"],$_POST["type"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head link>
	<meta charset="utf-8">
	<title>Halaman Siswa</title>
	<link rel="icon" href="https://smkwikrama.sch.id/assets/images/construct/logo-wk.png" type="image/gif">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style>
                    h1{
                        color : white;
                        size : 1rem;
                        text-align : center;
                    }
                    form
                    {
                        background-color: white;
                        color: black;
                        font-family: sans-serif;
                        text-align: center;
                        width: 45%;
                        margin:auto;
                        padding: 20px;
                    }
                    table
                    {
                        background-color: white;
                        color: black;
                        font-family: sans-serif;
                        text-align: center;
                        width: 45%;
                        margin:auto;
                        padding: 20px;
                        border: 1px solid #ddeeee;
			border-collapse: collapse;
			border-spacing: 0;
			width: 70%;
			margin: 10px auto 10px auto;
                    }
                    td {
			border: 1px solid black;
			padding: 20px;
			text-align: left;
		}
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
           }

        li {
            float: left;
         }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
         }
        li a:hover {
            background-color: grey;
        }
        .active {
        background-color: #04AA6D;
        }
        .pasif{
            background-color: black;   
        }
        .pasif:hover{
            background-color: red;   
        }
        th{
            color: white;
            border: 1px solid black;
			padding: 20px;
			text-align: left;
            list-style-type: none;
            overflow: hidden;
            background-color: #2196F3;
           }
        .btn {
            border: none; 
            color: white; 
            padding: 14px 28px;
            cursor: pointer; 
             }
        .buton {
            background-color: #2196F3;
            } 
        .buton:hover {
            background-color: #0b7dda;
        }
            
        body
         {
             background-image: url('background.jpg');
            background-repeat: no-repeat;
            background-size:cover;
                      
                    }

                </style>

	<h1>Data Siswa</h1>
    <form action="" method="post">
    <label class="form-check-label" for="flexRadioDefault2">
    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="nis">
    NIS
    </label>
    <label class="form-check-label" for="flexRadioDefault2">
    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="nama">
    Nama
    </label>
    <label class="form-check-label" for="flexRadioDefault2">
    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="tempatlahir">
    Tempat Lahir
    </label>
    <label class="form-check-label" for="flexRadioDefault2">
    <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="semua">
    Semua
    </label>
    <br>
    <br>
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
        </tr>
    <?php $i = 1; ?>
    <?php foreach ( $siswa as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nis"] ; ?></td>
            <td><?= $row["nama"] ; ?></td>
            <td><?= $row["tempatlahir"] ; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
	

</body>
</html>