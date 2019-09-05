<?php
/*
Plugin Name: Heure
Description:heure en temps réel
Author: DevWeb
Version: 0.0.1
*/

function getheure(){
	$heure = date("G:i:s");
	// echo $heure;
	$return = <<< LHEURE
	<span id='lheure'>$heure</span>
	<script>
	setinterval(function(){
		  let d= new Date();document.getElementById("lheure").innerHTML = d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();}, 1000);
		  let D= new Date
	set times(function(){

		})
		  let wakt = d.getMinutes().val;
		  let wakti = d.getSeconds().val;
		  </script>
LHEURE;
echo "<b style='font-size:38px'>".$return."</b>";		  
}
add_action("admin_notices", "getheure");