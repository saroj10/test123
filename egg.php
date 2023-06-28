<?php
    /*try{
    $a=12;
    $b=-1;
    if($b==0)
    {
    throw new Exception("This is error code");
    }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    echo $a/$b;
    
    ?>*/

    class DividebyzeroException extends Exception{}
    try{
    $a=12;
    $b=0;
if($b==0){
    throw new DividebyzeroException("this is error code");
}
    $a/$b;
    
    }
    catch(DividebyzeroException $e){
        echo $e->getError();
    }
    
    ?>
