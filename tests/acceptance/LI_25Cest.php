<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_25Cest
{
    /**
     * Check the eye icon button that changes the format of the password
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_25(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnChangePassType('sodumivo@linx.email', 'suduxx123');
    }
}
