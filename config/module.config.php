<?php

return array(
	'modules' => array(
		'ATPSocial' => array(
			'version' => '1.0',
		),
	),
	'admin' => array(
		'models' =>array(
		),
		'parameters' => array(
			'social-patreon-name' => array(
				'identifier' => 'Patreon Name',
				'group' => 'Social',
				'type' => 'Text',
				'default' => '&lt;Patreon Name Goes Here&gt;',
			),
			'social-twc-site-id' => array(
				'identifier' => 'Top Webcomics Site Id',
				'group' => 'Social',
				'type' => 'Text',
				'default' => '&lt;TWC Site Id Goes Here&gt;',
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
);
