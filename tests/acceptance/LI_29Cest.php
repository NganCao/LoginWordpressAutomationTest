<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_29Cest
{
    /**
     * Check "Email me a login link" hyperlink
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_29(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnSendEmail();
    }
}
