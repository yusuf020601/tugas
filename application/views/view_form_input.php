<html>
    <head>
        <title>Form Input Mahasiswa</title>
    </head>
    <body>
    <div class="content">
        <center>
            <form action="<?= base_url('sekolah/cetak'); ?>" method="post">
            <Table>
                    <tr>
                        <th colspan="3">
                            <h1> Form Input Data Siswa </h1>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama"  class="forminput" id="nama">
                        </td>
                    </tr>
                    <tr>
                        <th>NIS</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nis" class="forminput" id="nis">
                        </td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="kelas" class="forminput" id="kelas">
                        </td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="tempat_lahir" class="forminput" id="tempat_lahir">
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggal_lahir" class="forminput" id="tanggal_lahir">
                        </td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" class="forminput" id="alamat">
                        </td>
                    </tr>
                    <tr>
                        <th>Jenis kelamin</th>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" value="laki-laki">Laki-laki
                            <input type="radio" name="jk" value="perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td>:</td>
                        <td>
                            <select name="agama" class="forminput" id="agama">
                                <option value="">Pilih Agama</option>
                                <option value="2">Islam</option>
                                <option value="3">Kristen</option>
                                <option value="4">Katolik</option>
                                <option value="4">Budha</option>
                                <option value="4">Hindu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" class="tombolsubmit" value="submit"><br>
                            <button type="reset" class="tombolreset" value="reset">Hapus</button>
                            <a href="<?= base_url("sekolah/index"); ?>">Kembali</a>
                        </td>
                    </tr>
                </Table>
            </form>
        </center>
        </div>
    </body>
</html>

<style>
    body{
        font-family: sans-serif;
        background-color: mediumturquoise;  
    }

    .h1{
        text-align: center;
        font-weight: 300;
        text-transform: uppercase;
    }

    .content{
        width: 500px;
        padding: 50px 20px;
        margin: 100px auto;
        border-radius: 10px;
        background-color:aquamarine
    }

    th{
        font-size: 15pt;
        font-style: italic;
        text-align: left;
    }

    .forminput{
        box-sizing: border-box;
        width: 100%;
        padding: 5px;
        font-size: 11pt;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .tombolsubmit{
        background: #46de4b;
	    color: white;
	    font-size: 15pt;
	    width: 100%;
	    border: none;
	    border-radius: 10px;
	    padding: 10px 20px;
        margin: 10px auto;
    }
    .tombolreset{
        background: red;
	    color: white;
	    font-size: 15pt;
	    width: 100%;
	    border: none;
	    border-radius: 10px;
	    padding: 10px 20px;
        margin: 10px auto;
    }

    a{
        text-decoration: none;
        background: red;
	    color: white;
	    font-size: 15pt;
	    width: 50%;
	    border: none;
	    border-radius: 10px;
	    padding: 0px 100px;
        margin: 40px auto;
    }
</style>