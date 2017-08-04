<?php
	$settings = array(
		"username" => array(
			"type" => "text",
			"default" => "ABXDReport",
			"name" => "Webhook username",
		),
		"webhook" => array(
			"type" => "text",
			"default" => "",
			"name" => "Discord webhook link",
		),
		"image" => array(
			"type" => "text",
			"default" => "https://maxcdn.icons8.com/Share/icon/Logos//discord_logo1600.png",
			"name" => "Webhook profile picture",
		),
		"reportPassMatches" => array(
			"type" => "boolean",
			"default" => "0",
			"name" => "Report number of password matches",
		),
		"reportIPMatches" => array(
			"type" => "boolean",
			"default" => "0",
			"name" => "Report number of IP matches",
		),
	);
?>
