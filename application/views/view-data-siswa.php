<html>

<head>
    <title></title>
</head>

<body>
    <center>
        <div class="kotakoutput" >
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>
        <tr>
        <td>Tempat Lahir</td>
            <td>:</td>
            <td>
                <?= $tempat_lahir; ?>
            </td>
        </tr>
        <tr>
        <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <?= $tanggal_lahir; ?>
            </td>
        </tr>
        <tr>
        <td>Jenis kelamin</td>
            <td>:</td>
            <td>
                <?= $jk; ?>
            </td>
        </tr>
        <tr>
        <td>Agama</td>
            <td>:</td>
            <td>
                <?= $agama; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <br>
                <a href="<?= base_url('sekolah/form');?>">Kembali</a>
            </td>

            </tr>
        </table>
    </center>
    </div>
</body>

</html>

<style>
body{
	font-family: sans-serif;
	background: mediumturquoise;
}

h1{
	text-align: center;
	font-weight: 300;
    text-transform: uppercase;
}

th {
    font-size: 30px;
}

.kotakoutput{
	width: 350px;
	background: aquamarine;
	margin: 100px auto;
	padding: 50px 20px;
    border-radius: 10px;
}


a {
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 10px;
	padding: 5px 20px;
    text-decoration: none;
}

</style>