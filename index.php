<?php
require_once "vendor/autoload.php";

use cache_test\JsonRequest;

//print_r(JsonRequest::post('https://reqres.in/api/users',['name' => 'morpheus','job' => 'leader'],['name' => 'morpheus_3','job' => 'leader']));
print_r(JsonRequest::get('https://reqres.in/api/users',['page' => 2]));

