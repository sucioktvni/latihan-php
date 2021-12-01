<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Syarat Daftar TNI/Polri</legend>
        <form action="tni.php" method="post">
            <table>
                <tr>
                    <th style="text-align:left">Nama Lengkap</th>
                    <td>:</td>
                    <td> <input type="text" name="nama" size="50"> </td>
                </tr>

                <tr>
                    <th style="text-align: left">Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki"> L
                        <input type="radio" name="jk" value="Perempuan"> P
                    </td>
                </tr>

                <tr>
                    <th style="text-align: left">Tingi Badan dan Berat Badan</th>
                    <td>:</td>
                    <td><input type="number" name="bb" min="1" max="90" placeholder="Berat Badan">
                    <input type="number" name="tb" min="150" max="200" placeholder="Tinngi Badan">
                
                </td>
                </tr>

                <tr>
                    <th>
                        <button type="submit" name="simpan">Daftar</button>
                        <button type="reset">Bersihkan Formulir</button>
                    </th>

            </table>
        </form>

    </fieldset>
</body>
</html>