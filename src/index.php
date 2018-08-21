<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

phpinfo();

echo __FILE__;

echo time();
echo "jk0802";
if($_GET['debug']) {
    print_r( get_included_files() );
}
echo time() +1;



echo "bugfix_51";

echo time() +1;

