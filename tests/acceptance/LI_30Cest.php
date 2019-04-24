<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_30Cest
{
    /**
     * Check "Lost your password?" hyperlink
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_30(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnLostYourPass();
    }
}
