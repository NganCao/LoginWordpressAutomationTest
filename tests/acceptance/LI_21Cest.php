<?php 
use Step\Acceptance\Admin as LoginAdmin;

class LI_21Cest
{
    /**
     *Check the form with the tab key
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->keyTab('sodumivo@linx.email');
    }
}
