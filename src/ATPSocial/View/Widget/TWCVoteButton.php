<?php

namespace ATPSocial\View\Widget;

class TWCVoteButton extends \ATPCore\View\Widget
{
	protected $_template = "atp-social/widget/twc-vote-button.phtml";
	
	public function __construct($siteId)
	{
		parent::__construct();
		$this->siteId = $siteId;
	}
}
