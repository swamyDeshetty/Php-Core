<?php




function divide($dividend,$divident){

    if($divident==0){

        throw new exception('zero divison by error');
    }
     return $dividend/$divident."<br>";
}

try{

    echo divide(5,5);
}catch (exception $e){
    echo "zero dont use as divident <br>";
}finally{
    echo"process is completed";
}


?>