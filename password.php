<?php
function password($length=8){
    
    $chaine = 'AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn1234567890?!#+*';
    $result='';
    for($i=0; $i<$length; $i++){
        $wordLetter=rand(0, strlen($chaine)-1);
        $result.=$chaine[$wordLetter];
    }
    return $result;
}
echo password(15);