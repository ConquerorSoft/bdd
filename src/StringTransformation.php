<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace conquerorsoft\bdd;

/**
 * Description of StringTransformation
 *
 * @author gabriel
 */
class StringTransformation
{
    protected $plainString;
    protected $encodedString;
    
    protected const ALPHA_DECODED = "abcdefghijklmnopqrstuvwxyz ";
    protected const ENCODED = ['å','Å','ç','ı','´','ƒ','©','˙','ˆ','Ç','˚','¬','µ','˜','ø','π','œ','®','ß','Î','¨','¡','Ï','Ó','¥','Ω','  '];
    
    
    public function setPlainString($plainString)
    {
        $this->plainString = $plainString;
    }
    
    public function encode()
    {
        $string_to_return = "";
        for ($i = 0; $i < strlen($this->plainString); $i++) {
            $pos = strpos(self::ALPHA_DECODED, $this->plainString[$i]);
            $string_to_return .= self::ENCODED[$pos];
        }
        $this->setEncodedString($string_to_return);
    }
    
    public function setEncodedString($encodedString)
    {
        $this->encodedString = $encodedString;
    }
    
    public function getEncodedString()
    {
        return $this->encodedString;
    }
    
    public function getPlainString()
    {
        return $this->plainString;
    }
    
    public function decode()
    {
        $string_to_return = "";
        for ($i = 0; $i < strlen($this->encodedString); $i += 2) {
            $pos = array_search(substr($this->encodedString, $i, 2), self::ENCODED);
            $string_to_return .= self::ALPHA_DECODED[$pos];
        }
        $this->setPlainString($string_to_return);
    }
}
