<?php
/**
 * Created by PhpStorm.
 * User: Matteo
 * Date: 18/04/17
 * Time: 15:47
 */

$f =fopen("db.txt", "r");
i=0;
while (!feof($f))
    while(fgets($f)!=':')
        users[i] = fgets($f);
