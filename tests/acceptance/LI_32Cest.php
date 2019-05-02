<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_32Cest
{
    /**
     * value not found
     * Check "Vietnamese" hyperlink
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_32(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnVietnamese();
    }
}
