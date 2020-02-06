<?php
$service_url = "https://ir-revamp-dev.innoraft-sites.com/jsonapi/node/services";
$contents = file_get_contents($service_url);
$json=json_decode($contents);
for ($i=0;$i<8;$i++)
{
	echo "<h1>" . $json->data[$i]->attributes->title . "</h1>";
	print_r($json->data[$i]->attributes->body->processed);
	print_r($json->data[$i]->attributes->field_services->processed);
	$img = $json->data[$i]->relationships->field_image->links->related->href;
	$imgapi = file_get_contents($img);
	$imgjson = json_decode($imgapi);
	$service_url = $imgjson->data->attributes->uri->url;
	if (isset($service_url))
	{
		echo '<img src="https://ir-revamp-dev.innoraft-sites.com'.$service_url.'"height = "300px" width = "300px"><br>';
	}
}
?>