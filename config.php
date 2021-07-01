<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
	// 'baseUrl' => 'https://fire-security-matters-awards.netlify.app',
    'siteTitle' => 'FSM Awards',
    'awardsDate' => '28th April 2022',
    'awardsDeadline' => '30th November 2021',
    'registerURL' => '/assets/docs/fsm-awards-2022-booking-form.pdf',
    'openingDate' => '1st May 2021',
    'collections' => [  'awards',
                        'sponsors' => ['sort' => 'name'], 
    					'supporters' => ['sort' => 'name'] 
    				],
];
