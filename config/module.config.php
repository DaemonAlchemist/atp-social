<?php

return array(
	'admin' => array(
		'models' =>array(
		),
	),
	'view_helpers' => array(
		'invokables' => array(
			'facebookLike' => 'ATPSocial\View\Helper\FacebookLike',
			'twitterFollow' => 'ATPSocial\View\Helper\TwitterFollow',
			'twitterFeed' => 'ATPSocial\View\Helper\TwitterFeed',
		),
	),
);
