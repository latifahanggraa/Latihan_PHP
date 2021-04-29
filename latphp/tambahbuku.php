<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <center>
    <h1>Tambah Buku</h1>
    <form method="post" action="prosestambahbuku.php">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" placeholder="Masukkan judul buku"/></td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" placeholder="Masukkan nama pengarang"/> </td>
            </tr>

            <tr>
                <td>Tahun Terbit</td>
                <td> <input type="number" name="tahun" placeholder="Masukkan tahun terbit"/></td>
            </tr>

            <tr>
                <td>Kategori</td>
                <td> <input type="text" name="kategori" placeholder="Masukkan kategori"/></td>
            </tr>

            <tr>
                <td> </td>
                <td> <input type="submit" value="Tambah Data"/></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>