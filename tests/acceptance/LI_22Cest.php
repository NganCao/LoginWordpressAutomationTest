<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_22Cest
{
    /**
     * Check the form with the enter key
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_22(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->keyEnter('sodumivo@linx.email', 'suduxx12');
    }
}
