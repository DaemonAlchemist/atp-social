<?php

return array(
	'layout' => array(
		'global' => array(
			'blocks' => array(
				'patreonLink' => array(
					'options' => array(
						'patreonName' => array('siteParam', 'social-patreon-name'),
					),
				),
				'twcVoteButton' => array(
					'options' => array(
						'siteId' => array('siteParam', 'social-twc-site-id'),
					),
				),
			),
		),
		'byRoute' => array(
		),
		'blocks' => array(
			'patreonLink' => 'ATPSocial\View\Widget\PatreonLink',
			'twcVoteButton' => 'ATPSocial\View\Widget\TWCVoteButton',
		),
	),
);
