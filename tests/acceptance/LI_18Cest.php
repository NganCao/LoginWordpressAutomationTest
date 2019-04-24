<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_18Cest
{
    /**
     * Check "Password" old
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_18(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', 'sodumivo123');
    }
}
