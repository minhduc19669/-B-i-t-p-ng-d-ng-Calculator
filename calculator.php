<?php


    class Caculator{
        public function cong($numberone,$numbertwo){
            if ($numberone / 2 + $numbertwo / 2 >= PHP_INT_MAX/2){
                throw new Exception("Số nhập vào quá lớn");
            }
            return $numberone+$numbertwo;
        }
        public function tru($numberone,$numbertwo){
            if ($numberone / 2 - $numbertwo / 2 <=PHP_INT_MAX/1){
                throw new Exception("Số nhập vào quá nhỏ");
            }
            return $numberone-$numbertwo;
        }
        public function nhan($numberone,$numbertwo){
            if ($numberone/2+$numbertwo/2>=PHP_INT_MAX/2){
                throw new Exception("Số nhập vào quá lớn");
            }
            return $numberone*$numbertwo;
        }
        public function chia($numberone,$numbertwo){
            if ($numbertwo==0){
                throw new Exception("Số bị chia không thể bằng 0");
            }
            return $numberone/$numbertwo;
        }
    }

?>