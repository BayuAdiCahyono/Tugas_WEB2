<?php
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Gender = $_POST['Gender'];
$status = $_POST['status'];
$No_HP = $_POST['No_HP'];
$Alamat = $_POST['Alamat'];
?>

<html>
<head>
    <title> Hasil Form </title>
</head>

<table border="1" cellpadding="7" width>
        <thead>
            <tr>
                <th colspan = "7">Tabel Biodata</th>
            </tr>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Status</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?= $NIM;?></td>
            <td><?= $Nama;?></td>
            <td><?= $Gender;?></td>
            <td><?= $status;?></td>
            <td> <?= $No_HP;?></td>
            <td> <?= $Alamat;?> </td>
            </tr>
         </tbody>
</table>
<br>
<p>Nim yang Anda Masukan Adalah <b><?= $NIM;?></b></p>
<p>Nama yang Anda Masukan Adalah <b><?= $Nama;?></b></p>
<p>Gender yang Anda Masukan Adalah <b><?= $Gender;?></b></p>
<p>Status yang Anda Masukan Adalah <b><?= $status;?></b></p>
<p>Nomor HP yang Anda Masukan Adalah <b><?= $No_HP;?></b></p>
<p>Alamat yang Anda Masukan Adalah <b><?= $Alamat;?></b></p>