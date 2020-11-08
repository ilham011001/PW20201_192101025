<?php

    class Room
    {
        private $name;
        private $price;
        private $booking_code;

        public function __construct($booking_code)
        {
            $this->booking_code = $booking_code;

            $code = substr($this->booking_code, 0, 2);
            if ($code == 'AL') {
                $this->name = 'Alamanda';
                $this->price = 450000;
            } else if ($code == 'BG') {
                $this->name = 'Bougenvile';
                $this->price = 350000;
            } else if ($code == 'CR') {
                $this->name = 'Crysan';
                $this->price = 375000;
            } else if ($code == 'KM') {
                $this->name = 'Kemuning';
                $this->price = 425000;
            }
        }

        public function get_name()
        {
            return $this->name;
        }

        public function get_price()
        {
            return $this->price;
        }

        public function get_floor()
        {
            return (int) substr($this->booking_code, 2, 2);
        }

        public function get_number()
        {
            return substr($this->booking_code, 4);
        }
    }

?>