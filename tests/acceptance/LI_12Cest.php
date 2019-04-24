<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_12Cest
{
    /**
     * Check "Password" starts with a space
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_12(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', ' suduxx12');
    }
}
