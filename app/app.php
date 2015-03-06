<? php

	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/contacts.php";

	session_start();
	if (empty($_SESSION['contact_list']))
	{
		$_SESSION['contact_list'] = array();
	}

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array(

		'twig.path' => __DIR__.'/../views';

	))

	return $app;

?>