<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_15Cest
{
    /**
     * Check "Password" with the last character as a space
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_15(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', 'suduxx12 ');
    }
}
