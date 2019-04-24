<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_02Cest
{
    /**
     * Check "Email Address or Username" that distinguish between uppercase and lowercase?
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_02(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('Sodumivo@linx.email', 'suduxx12');
    }
}
