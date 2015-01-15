<?php 

function get_latestNewsItems($val = 2){
	$ci = get_instance();
	return $ci->frontend_model->get_latestNewsItems($val);
}
