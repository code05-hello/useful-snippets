//Author : Kalim M Puthawala


// Base64, n times encode
   function be64($string,$loop){
        $final = $string;
        for($x=1;$x<=$loop;$x++){
            $final = base64_encode($final);
        }
        return $final;
    }


// Base64, n times decode
                                 
    function bd64($string,$loop){
        $final = $string;
        for($x=1;$x<=$loop;$x++){
            $final = base64_decode($final);
        }
        return $final;
    }


// usage 

$a_hidden_string = be64('hello',20);
$a_visible_string = bd64($a,20);



