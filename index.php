<?php 
if (!empty($_GET['location'])) {
   $maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $_GET['location'];
   $maps_json = file_get_contents($maps_url);
}
?>
