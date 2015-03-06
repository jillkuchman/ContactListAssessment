<?php

	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/contacts.php";

	session_start();
	if (empty($_SESSION['list_of_contacts']))
	{
		$_SESSION['list_of_contacts'] = array();
	}

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array(

		'twig.path' => __DIR__.'/../views'

	));

	$app->get("/", function() use($app)
	{

		return $app['twig']->render('addressbook.twig', array ('contacts' => Contact::getAll()));

	});

	$app->post('/create_contact', function() use($app)
	{

		$newContact = new Contact($_POST['name'], $_POST['number'], $_POST['address']);
		$newContact->save();
		return $app['twig']->render('newcontact.twig', array('newcontact'=>$newContact));

	});

	$app->post('/delete_contacts', function() use($app)
	{

		Contact::deleteAll();
		return $app['twig']->render('clearcontacts.twig');

	});


	return $app;

?>
