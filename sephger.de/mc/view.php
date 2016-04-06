<?php
	use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;

	// Edit this ->
	define( 'MQ_SERVER_ADDR', 'localhost' );
	define( 'MQ_SERVER_PORT', 25565 );
	define( 'MQ_TIMEOUT', 1 );
	// Edit this <-

	// Display everything in browser, because some people can't look in logs for errors
	Error_Reporting( E_ALL | E_STRICT );
	Ini_Set( 'display_errors', true );

	require __DIR__ . '/src/MinecraftQuery.php';
	require __DIR__ . '/src/MinecraftQueryException.php';

	$Timer = MicroTime( true );

	$Query = new MinecraftQuery( );

	try
	{
		$Query->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
	}

	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );
if( ( $Info = $Query->GetInfo( ) ) !== false ):
$status="Online";
$color="#1f9b23";
if( ( $players = $Query->GetPlayers( ) ) !== false ):
$players=count($players);
else:
$players=0;
endif;
else:
$status="Offline";
$color="#a10000";
endif;

