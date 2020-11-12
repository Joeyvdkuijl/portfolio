<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
		'HOSTNAME' => 'localhost',
		'DATABASE' => 'u86711p81490_Joey',
		'USER'     => 'u86711p81490_Joeyvdkuijl',
		'PASSWORD' => 'le6hMGpB6'
	],
	'MAIL'	=> [
		'SMTP_HOST' 	=> 'localhost',
		'SMTP_USER' 	=> '',
		'SMTP_PASSWORD' => '',
		'SMTP_PORT' 	=> '25'
	],
	// 'BASE_URL' => '',  // Zet hier het pad naar de public map in, vanaf http://localhost, anders werken je routes niet!
	'BASE_URL' => '/leerjaar1/Proj/periode4.2/covid/public',  
	// 'BASE_HOST' => 'http://localhost',
	// 'BASE_HOST' => 'http://joeyvdkuijl',
	'ROOT'     => dirname( dirname( __DIR__ ) ),
	'PRIVATE'  => dirname( __DIR__ ),
	'WEBROOT'  => dirname( dirname( __DIR__ ) ) . '/public'
];

return $config;
	