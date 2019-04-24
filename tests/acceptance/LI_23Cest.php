<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_23Cest
{
    /**
     * Check the "Change Email Address" hyperlink
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_23(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnchangeEmailHyperlink('sodumivo@linx.email');
    }
}
