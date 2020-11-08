<?php

    function cost_springbed($quantity)
    {
        if ($quantity == 1) return 0;

        return $quantity * 75000;
    }

    function additional_cost($payment, $long_time, $price, $cost_springbed)
    {
        $total_price = $long_time * $price + $cost_springbed;

        if ($payment == 'credit_card') return (2 / 100) * $total_price;
        else if ($payment == 'debit') return (1.5 / 100) * $total_price;

        return 0;
    }

    function calculate_total_price($payment, $long_time, $price, $cost_springbed, $additional_price)
    {
        if ($payment == 'credit_card') return $long_time * $price + $cost_springbed + $additional_price;
        else if ($payment == 'debit') return $long_time * $price + $cost_springbed - $additional_price;

        return $long_time * $price + $cost_springbed;
    }

    function change_to_rupiah($value)
    {
        $hasil_rupiah = "Rp " . number_format($value,2,',','.');
        return $hasil_rupiah;

    }

?>