<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_16Cest
{
    /**
     * Check "Password" with the middle character as a space
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_16(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', 'suduxx 12');
    }
}
