<?php
$app->group('/home', function() {
    $this->get('/index', 'App\Controllers\Home:index');
    $this->get('/showuser', 'App\Controllers\Home:showUser');
    $this->get('/showuser/{id}', 'App\Controllers\Home:showUserByid');
    $this->post('/showuser', 'App\Controllers\Home:findUserByname');
});
?>