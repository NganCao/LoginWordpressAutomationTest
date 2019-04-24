<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_10Cest
{
    /**
     * Check "Email Address or Username" with the beginning of 'http://'
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_10(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('http://sodumivo@linx.email', 'suduxx12');
    }
}
