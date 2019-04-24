<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_07Cest
{
    /**
     * Verify if a user login with a username incorrect and password valid
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_07(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('testting98', 'suduxx12');
    }
}
