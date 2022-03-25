<?php
class Lingkaran {  
    private $jari;
    const PHI = 3.14;
    function_construct( $r )
    {
        $this->jari = $r;
    }
    function getLuas()
    {
        return self::PHI * $this-> * $this->jari;
    }
    function grtKeliling()
    return 2 * self::PHI * $this->jari;
}

?>