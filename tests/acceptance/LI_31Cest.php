<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_31Cest
{
    /**
     * Check "Back to WordPress.com" hyperlink
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_31(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->clickOnBackWordpressHyperlink();
    }
}
