<?php
    include 'Room.php';
    include 'OrderService.php';

    if (isset($_POST['process'])) {
        $name = $_POST['name'];
        $booking_code = $_POST['booking_code'];
        $quantity = $_POST['quantity'];
        $long_time = $_POST['long_time'];
        $payment = $_POST['payment'];

        $room = new Room($booking_code);
        $cost_springbed = cost_springbed($quantity);
        $additional_cost = additional_cost($payment, $long_time, $room->get_price(), $cost_springbed);
        $total_price = calculate_total_price($payment, $long_time, $room->get_price(), $cost_springbed, $additional_cost);
    } else {
        header('Location:index.php');
    }
?>

<html>
    <head>
        <title>Output</title>
        <style>
            * {
                margin: 16px;
            }
        </style>
    </head>
    <body>
        <h4><u>Output</u></h4>
        <br>
        <table>
            <tr>
                <td valign="top">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $name ?></td>
                        </tr>
                        <tr>
                            <td>Nama Kamar</td>
                            <td>:</td>
                            <td><?= $room->get_name() ?></td>
                        </tr>
                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td><?= $room->get_number() ?></td>
                        </tr>
                        <tr>
                            <td>Lama</td>
                            <td>:</td>
                            <td><?= $long_time ?></td>
                        </tr>
                        <tr>
                            <td>Potongan/Tambahan</td>
                            <td>:</td>
                            <td><?= change_to_rupiah($additional_cost) ?></td>
                        </tr>
                        <tr>
                            <td>Total Biaya Seluruhnya</td>
                            <td>:</td>
                            <td><?= change_to_rupiah($total_price) ?></td>
                        </tr>
                    </table>
                </td>

                <td valign="top">
                    <table>
                        <tr>
                            <td>Kode Booking</td>
                            <td>:</td>
                            <td><?= $booking_code ?></td>
                        </tr>
                        <tr>
                            <td>Lantai</td>
                            <td>:</td>
                            <td><?= $room->get_floor() ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td><?= $quantity ?> Orang</td>
                        </tr>
                        <tr>
                            <td>Jenis Pembayaran</td>
                            <td>:</td>
                            <td>
                                <?php
                                    if ($payment == 'credit_card') echo "Kartu Kredit";
                                    else if ($payment == 'debit') echo "Debit";
                                    else if ($payment == 'cash') echo "Cash";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Biaya Spring Bed Tambahan</td>
                            <td>:</td>
                            <td><?= change_to_rupiah($cost_springbed) ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>