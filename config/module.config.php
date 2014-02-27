<?php

return array(
	'admin' => array(
		'models' =>array(
		),
	),
	'asset_manager' => array(
		'resolver_configs' => array(
			'paths' => array(
				__DIR__ . '/../public',
			),
		),
	),
	'view_helpers' => array(
		'invokables' => array(
			'facebookLike' => 'ATPSocial\View\Helper\FacebookLike',
			'twitterFollow' => 'ATPSocial\View\Helper\TwitterFollow',
			'twitterFeed' => 'ATPSocial\View\Helper\TwitterFeed',
		),
	),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
	),
);
