<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_09Cest
{
    /**
     * Check "Email Address or Username" that have special character
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_09(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('!@#$%^&*()', 'sudoxx12');
    }
}
