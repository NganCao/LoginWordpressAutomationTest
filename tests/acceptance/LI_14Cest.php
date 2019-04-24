<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_14Cest
{
    /**
     * Check "Email Address or Username" with the middle character as a space
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_14(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo @linx.email', 'suduxx12');
    }
}
