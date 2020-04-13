<?php
namespace RandomCodes;
class RandomCodes{
    public function generateCode(){
        return rand(10000,99999);
    }
}