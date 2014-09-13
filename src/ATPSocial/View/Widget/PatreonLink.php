<?php

namespace ATPSocial\View\Widget;

class PatreonLink extends \ATPCore\View\Widget
{
	protected $_template = "atp-social/widget/patreon-link.phtml";
	
	public function __construct($patreonName)
	{
		parent::__construct();
		$this->patreonName = $patreonName;
	}
}
