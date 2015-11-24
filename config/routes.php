<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/index', function() {
  echo "成功！";
});

Macaw::get('/hello', 'HomeController@home');

Macaw::get('/mail', 'HomeController@mail');

Macaw::get('/redis', 'HomeController@redistest');


// Macaw::get('(:all)', function($fu) {
//   echo '未匹配到路由<br>'.$fu;
// });

// Macaw::error(function() {
//   echo '404 :: Not Found';
// });

Macaw::$error_callback = function() {

  throw new Exception("路由无匹配项 404 Not Found");

};

Macaw::dispatch();