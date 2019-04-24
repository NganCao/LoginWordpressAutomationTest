<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_27Cest
{
    /**
     * Check "Create a new account" hyperlink
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_27(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnCreateANewAccount();
    }
}
