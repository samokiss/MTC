<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/03/16
 * Time: 15:41
 */
class WebContext extends \Behat\MinkExtension\Context\MinkContext
{
    /**
     * @When I wait for :arg1 seconds
     */
    public function iWaitForSeconds($arg1)
    {
        $this->getSession()->wait($arg1 * 1000);
    }

}