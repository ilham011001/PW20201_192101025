<html>
    <head>
        <title>UTS Pemrograman Web</title>
        <style>
            * {
                margin: 16px;
            }
        </style>
    </head>
    <body>
        <h1>UTS TYPE A (192101025)</h1>
        <br>
        <h4><u>Form Input</u></h4>
        <form method="post" action="output.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Kode Booking</td>
                    <td>:</td>
                    <td>
                        <select name="booking_code">
                            <option value="AL02102">AL02102</option>
                            <option value="BG03025">BG03025</option>
                            <option value="CR02111">CR02111</option>
                            <option value="KM03075">KM03075</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="number" name="quantity"></td>
                </tr>
                <tr>
                    <td>Lama</td>
                    <td>:</td>
                    <td><input type="number" name="long_time"></td>
                </tr>
                <tr>
                    <td>Jenis Pembayaran</td>
                    <td>:</td>
                    <td>
                        <select name="payment">
                            <option value="credit_card">Kartu Kredit</option>
                            <option value="debit">Debit</option>
                            <option value="cash">Cash</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" name="process">Proses</button>
                        <button type="reset">Hapus</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>