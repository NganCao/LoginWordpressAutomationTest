<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_28Cest
{
    /**
     * Check "Sign Up" button
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_28(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnSigupHyperlink();
    }
}
