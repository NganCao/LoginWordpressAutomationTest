<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_03Cest
{
    /**
     * Verify if "Email Address or Username" with a username correct and password valid
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_03(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('testting99', 'suduxx12');
    }
}
