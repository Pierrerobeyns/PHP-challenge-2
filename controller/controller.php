<?php

    require_once 'model/selectData.php';

   $test = selectCompany();

   echo '<pre>';
   var_dump($test);
   echo '</pre>';

   echo $test[0]['companyName'];

