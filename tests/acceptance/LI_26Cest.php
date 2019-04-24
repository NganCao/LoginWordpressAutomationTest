<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_26Cest
{
    /**
     * Check "Continue with Google" button
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnContinueWithGG();
    }
}
