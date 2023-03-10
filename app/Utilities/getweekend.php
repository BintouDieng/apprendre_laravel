<?php

namespace App\Utilities;


class GetWeekend 
{
    public function getWeekend()
    {
        if( date('N') >= 6 ) {
         echo"C'est le weekend";
        }
        else 
        { echo "C'est pas le weekend" ; 
        
    }
}
    public function getmessageBienvenu(){
        echo "Bienvenu sur Dray Technologie";
    }
}