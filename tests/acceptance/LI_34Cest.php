<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_34Cest
{
    /**
     * Check URL correct
     * @param AcceptanceTester $I
     * @param $scenario
     */

    public function LI_34(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->checkURL();
    }
}
