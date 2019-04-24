<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_06Cest
{
    /**
     * Verify if "Email Address or Username"  empty/null and password valid
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_06(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('', 'suduxx12');
    }
}
