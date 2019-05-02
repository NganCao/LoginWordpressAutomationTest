<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_19Cest
{
    /**
     * Check enter "Password" that type of password change *
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_19(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('sodumivo@linx.email', 'suduxx12');
    }
}
