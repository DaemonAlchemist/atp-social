<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 9/17/2016
 * Time: 10:57 AM
 */

namespace ATPSocial\View\Helper;

class FacebookLike extends \ATP\View\Helper
{
    public function __invoke($url)
    {
        return '
            <div
                class="fb-like"
		        data-href="' . $url . '"
		        data-layout="standard"
		        data-action="like"
		        data-show-faces="true">
	        </div>
	    ';
    }
}