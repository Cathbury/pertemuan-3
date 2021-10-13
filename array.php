<?php

# membuat array
$animals = ['kucing', 'ikan', 'burung'];

# mengakses array
echo $animals[2];

# echo array_search('ikan', $animals);

for ($i = 0; $i < count($animals); $i++) {
    if ('kucing' == $animals[$i]) {
        echo $i;
    }
}