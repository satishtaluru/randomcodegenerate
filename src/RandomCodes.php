<?php
namespace RandomCodes;
class RandomCodes{
    public function generateCode(){
        return $randNo = mt_rand(1000, 9999) . mt_rand(10000000, 99999999);
    }

    public function generateAlphabets($length = 8, $isCapital = false) {

        $listAlpha = 'abcdefghijklmnopqrstuvwxyz';        
        $shortCode = str_shuffle(
                substr(str_shuffle($listAlpha), 0, $length)
        );
        if($isCapital){
            return strtoupper($shortCode);
        }
        return ($shortCode);
    }

    public function generateNumericCode($length = 8, $incZero = false) {
    
        if ($incZero) {
            $listAlpha = '0123456789';
        } else {
            $listAlpha = '123456789';
        }
        $shortCode = str_shuffle(
                substr(str_shuffle($listAlpha), 0, $length)
        );
        return ($shortCode);
    }


    public function generateAlphaNumeric($length = 8, $isCapital = false) {

        $listAlpha = 'abcdefghijklmnopqrstuvwxyz0123456789';        
        $shortCode = str_shuffle(
                substr(str_shuffle($listAlpha), 0, $length)
        );
        if($isCapital){
            return strtoupper($shortCode);
        }
        return ($shortCode);
    }   
}