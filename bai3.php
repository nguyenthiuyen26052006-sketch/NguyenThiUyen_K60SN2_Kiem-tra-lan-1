<?php

function inHinhChuNhat($chieuRong, $chieuCao)
{
    for ($i = 1; $i <= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

inHinhChuNhat(5, 3);

?>