<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_17Cest
{
    /**
     * Verify if Email address blocked or deleted
     * @param AcceptanceTester $I
     * @param $scenario
     */

    // tests
    public function LI_17(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->loginAsAdmin('hule@dreamcatcher.email', 'hule123');
    }
}
