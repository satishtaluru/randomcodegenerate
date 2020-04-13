<?php
namespace Randomcodes;
class Randomcodes{
    public function generateCode(){
        return rand(10000,99999);
    }
}