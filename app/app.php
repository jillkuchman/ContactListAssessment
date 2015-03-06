<?php

	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/contacts.php";

	session_start();
	if (empty($_SESSION['contact_list']))
	{
		$_SESSION['contact_list'] = array();
	}

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array(

		'twig.path' => __DIR__.'/../views'

	));

	$app->get("/", function() use($app)
	{

		return $app['twig']->render('addressbook.php', array ('contacts' => Contact::getAll()));

	});

	$app->post('/newcontact', function() use($app)
	{

		$newContact = new Contact($_POST['name'], $_POST['number'], $_POST['address']);
		$newContact->save();
		return $app['twig']->render('newcontact.php', array('newcontact'=>$newContact));

	});

	$app->post('/clear_contacts', function() use($app)
	{

		Contact::deleteAll();
		return $app['twig']->render('clearcontacts.php');

	});


	return $app;

?>
