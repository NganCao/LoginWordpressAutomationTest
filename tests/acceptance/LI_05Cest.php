<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_05Cest
{
    /**
     * Verify if "Email Address or Username"  invalid and password valid
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_05(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo', 'suduxx12');
    }
}
