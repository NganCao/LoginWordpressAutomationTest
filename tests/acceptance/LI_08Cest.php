<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_08Cest
{
    /**
     * Verify if "Email Address or Username"  valid and "Password" empty/null
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_08(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', '');
    }
}
