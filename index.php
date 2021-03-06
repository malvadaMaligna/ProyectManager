<?php
	//TODO Start project doc
	//TODO Add a licence to the project
	//TODO Add controller mapping
	
	require_once './Model/DBManager.php';
	require_once './Controller/config.inc';
	
	//Getting DBManager instance
	$dbCon = DBManager::getInstance( $user, $passwd, $dataBase, $server);
	
	switch ( $_GET[ "control" ] ){
		case "login":
			require_once './Controller/LoginCtrl.php';
			$login = new LoginCtrl();
			$login -> run( $dbCon );
			break;
		case "index":
			require './Controller/IndexCtrl.php';
			$index = new IndexCtrl();
			$index -> run( $dbCon );
			break;
		case "blog":
			require_once './Controller/BlogCtrl.php';
			$blog = new BlogCtrl();
			$blog -> run( $dbCon );
			break;
		case "user":
			require_once './Controller/UserCtrl.php';
			$user = new UserCtrl();
			$user -> run( $dbCon );
			break;
		case "article":
			require_once './Controller/ArticleCtrl.php';
			$article = new ArticleCtrl();
			$article -> run( $dbCon );
			break;
		case "project":
			require_once './Controller/ProjectCtrl.php';
			$project = new ProjectCtrl();
			$project -> run( $dbCon );
			break;
		default:
			//Send to main page
	}
?>