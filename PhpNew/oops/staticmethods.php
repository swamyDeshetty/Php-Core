<?php

// no need to create the instance for the class when we use the static methods...

class greeting{


    public static function greet(){

        return "swamy is the python and php developer <br>";
    }
    public static function sayhello(){
        return "Say hello to the people";
    }

    
}

echo greeting::greet();
echo greeting::sayhello();