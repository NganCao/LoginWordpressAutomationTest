<?php
use Step\Acceptance\Admin as LoginAdmin;

class LI_33Cest
{
    /**
     * If browser close and open it again
     * @param AcceptanceTester $I
     * @param $scenario
     * @throws Exception
     */

    public function LI_33(AcceptanceTester $I, $scenario)
    {
        $I = new LoginAdmin($scenario);
        $I->checkTheLoginStatus('sodumivo@linx.email', 'suduxx12');
    }
}
