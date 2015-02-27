<?php

$array[] = $_POST['email'];
$array[] = $_POST['username'];
$array[] = $_POST['password'];
$array[] = $_POST['number'];
$array[] = $_POST['phone'];


print_r($array);

foreach ($array as $a) {

	if ($_POST['email'] != '') {
		$a = $array[0];
		$type = 'email'
		$v = $vf->getValidator($type);
		if ($v->isValid($a)) {
			//green box
			// $a = back in input
		} else {
			//red box
		}
	} elseif ($_POST['username'] != '') {
		$a = $array[1];
		$type = 'username';
		$v = $vf->getValidator($type);
		if ($v->isValid($a)) {
			//green box
			//$a back in box
		} else {
			//red box
			//error
		}
	} elseif ($_POST['password'] != '') {
		$a = $array[2];
		$type = 'password';
		$v = $vf->getValidator($type);
		if ($v->isValid($a)) {
			//green box
			//$a back in box
		} else {
			//red box
			//error
		}
	} elseif ($_POST['number'] != '') {
		$a = $array[3];
		$type = 'number';
		$v = $vf->getValidator($type);
		if ($v->isValid($a)) {
			//green box
			//$a back in box
		} else {
			//red box
			//error
		}
	} elseif ($_POST['phone'] != '') {
		$a = $array[4];
		$type = 'phone';
		$v = $vf->getValidator($type);
		if ($v->isValid($a)) {
			//green box
			//$a back in box
		} else {
			//red box
			//error
		}
	} else {
		echo "Please fill in all boxes";
	}

}








$vf = new ValidatorFactory();

	





?>