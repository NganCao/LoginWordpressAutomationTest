<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_11Cest
{
    /**
     * Check "Email Address or Username" starts with a space
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_11(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin(' sodumivo@linx.email', 'suduxx12');
    }
}
