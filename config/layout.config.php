<?php

return array(
	'layout' => array(
		'global' => array(
			'blocks' => array(
				'patreonLink' => array(
					'options' => array(
						'patreonName' => array('siteParam', 'Patreon Name'),
					),
				),
				'twcVoteButton' => array(
					'options' => array(
						'siteId' => array('siteParam', 'Top Webcomics Site Id'),
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
