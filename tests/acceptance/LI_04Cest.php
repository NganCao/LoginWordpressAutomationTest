<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_04Cest
{
    /**
     * Check "Password" that distinguish between uppercase and lowercase?
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_04(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', 'Suduxx12');
    }
}
