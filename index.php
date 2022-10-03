<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title></title>
</head>
<style>
    body {
        background: aqua;
    }
</style>

<body>
    <form method="POST" action="save.php">
        <h3>Profil Dari</h3>
        <table>
            <tr>
                <td>Masukkan NIM Anda</td>
                <td>: <input type="number" name="NIM" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Nama Anda</td>
                <td>: <input type="text" name="Nama" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Gender</td>
                <td>: <input type="radio" name="Gender" id=""> Laki-Laki
                    <input type="radio" name="" id=""> Perempuan
                </td>
            </tr>
            <tr>
                <td>Masukkan Status</td>
                <td>:
                    <select name="status" id="" inputmode="">
                        <option value="Menikah">Menikah</option>
                        <option value="Lajang">Lajang</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Masukkan No HP</td>
                <td>: <input type="number" name="No_HP" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Alamat</td>
                <td>: <input type="text" name="Alamat" id="" rows="5"></td>
            </tr>
        </table>
        <div class="button">
            <input type="submit" value="save">
        </div>
    </form>
</body>

</html>