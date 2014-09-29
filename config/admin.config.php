<?php

return array(
	'admin' => array(
		'models' =>array(
		),
		'parameters' => array(
			'social-patreon-name' => array(
				'displayName' => 'Patreon Name',
				'group' => 'Social',
				'type' => 'Text',
				'default' => '&lt;Patreon Name Goes Here&gt;',
			),
			'patreon-link-image' => array(
				'displayName' => 'Patreon Link Image',
				'group' => 'Social',
				'type' => 'ModelSelect',
				'default' => '',
				'options' => array(
					'className' => 'ATPCms\Model\Image',
				),
			),
			'social-twc-site-id' => array(
				'displayName' => 'Top Webcomics Site Id',
				'group' => 'Social',
				'type' => 'Text',
				'default' => '&lt;TWC Site Id Goes Here&gt;',
			),
			'social-twc-incentive-date' => array(
				'displayName' => 'Last TWC Incentive Update',
				'group' => 'Social',
				'type' => 'Date',
				'default' => '',
			),
		),
	),
);
