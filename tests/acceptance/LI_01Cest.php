<?php 
use Step\Acceptance\Admin as LoginAdmin;

class LI_01Cest
{
    /**
     * email and pass valid -> login success
     * @param AcceptanceTester $I
     */

    // tests
    public function LI_01(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', 'suduxx12');
    }
}
