<?php

$me = array (
	'name' => 'Saeys',
	'surname' => 'Nicolas',
	'age' => '23',
	'height' => '190',
	'hobbies' => array (
		'tuning' , 'pétanque' , 'bagnoles' , 'ninjutsu')
);
	


$soulmate = array (
	'name' => 'Titus',
	'surname' => 'Barbara',
	'age' => '45',
	'height' => '112',
	'hobbies' => array (
		'snooker' , 'metal' , 'cosplay', 'ninjutsu')
);



$fusion = array_merge($me['hobbies'],
					  $soulmate['hobbies']);


                      $web_dev = array (
                        'frontend' => array (),
                        'backend' => array ()
                    );
                    
$web_dev['frontend'][] = 'xhtml';
$web_dev['frontend'][] = 'css';
$web_dev['frontend'][] = 'flash';
$web_dev['backend'][] = 'javascript';
$web_dev['backend'][] = 'ruby';


print_r($web_dev['frontend']);

                

