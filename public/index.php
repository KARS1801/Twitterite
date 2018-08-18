<?php 



	require_once __DIR__ ."/../vendor/autoload.php";
	ToroHook::add("404", function(){
		echo "404 its a Error";
		http_response_code(404);
	});
	Toro::serve(array(
			'/' => Links\Controllers\RegisterController::class,
			'/register' => Links\Controllers\RegisterController::class,
			'/login' => Links\Controllers\LoginController::class,
			'/dashboard' => Links\Controllers\DashboardController::class
			
		));

?>