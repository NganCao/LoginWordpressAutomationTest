<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_24Cest
{
    /**
     * Check the "Terms of Service" hyperlink
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_24(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnTermsOfService();
    }
}
