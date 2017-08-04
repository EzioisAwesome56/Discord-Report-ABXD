<?php
// rewrite backend, step 1: reporting code
function ircReport($stuff)
{
	$data = array("content" => $stuff, "username" => Settings::pluginGet("username"), "avatar_url" => Settings::pluginGet("image"),);
    $curl = curl_init(Settings::pluginGet("webhook"));
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $fartz = curl_exec($curl);
}
// rewrite backend, step 2: rewrite function to only spit out what is required
function ircUserColor($name, $gender, $power) {
	return $name;
}
// rewrite backend, step 3: replace color related functions with dummy functions
function ircColor($c)
{
	return "";
}
