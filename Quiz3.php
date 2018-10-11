<?php
$t = "Temperature";
if ($t <= "20°C"){
    echo "It is really cold today";

}
elseif ($t > "20°C && < 30°C"){
    echo "The weather is just perfect";

}
elseif ($t >= "30°C && < 40°C"){
    echo "It is so hot today";
}
elseif ($t >= "40°C" ){
    echo " Am I in the Sahara Desert?";
}
else{

}