<?php
namespace Step\Acceptance;
use Page\Admin as LoginAdmin;

/**
 * Class Admin
 * @package Step\Acceptance.
 */
class Admin extends \AcceptanceTester
{
    /**
     * @param $name
     * @param $password
     * @throws \Exception
     */
    public function loginAsAdmin($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->fillField(LoginAdmin::$usernameField, $name);
        $I->click(LoginAdmin::$continueButton);
        $I->waitForElementVisible(LoginAdmin::$passwordField, 5);
        $I->fillField(LoginAdmin::$passwordField, $password);
        $I->click(LoginAdmin::$loginButton);
        $I->comment("Login Succes!");
    }

    /**
     * @throws \Exception
     */
    public function clickOnBackWordpressHyperlink()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->click(LoginAdmin::$backWordpress);
        $I->comment("Click success!!");
    }

    /**
     * test for Change Email Hyperlink
     * @throws \Exception
     */
    public function clickOnchangeEmailHyperlink($name)
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->fillField(LoginAdmin::$usernameField, $name);
        $I->click(LoginAdmin::$continueButton);
        $I->waitForElementVisible(LoginAdmin::$changeEmail, 5);
        $I->click(LoginAdmin::$changeEmail);
        $I->comment("Click success!!");
    }

    /**
     * test for Continue with Google button
     * @throws \Exception
     */
    public function clickOnContinueWithGG()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->click(LoginAdmin::$continueWithGG);
        $I->comment("Click success!!");
    }

    /**
     * test for Create a new account hyperlink
     * @throws \Exception
     */
    public function clickOnCreateANewAccount()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->click(LoginAdmin::$createANewAccount);
        $I->comment("Click success!!");
    }

    /**
     * test for eyeicon to change password type
     * @throws \Exception
     */
    public function clickOnChangePassType($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->fillField(LoginAdmin::$usernameField, $name);
        $I->click(LoginAdmin::$continueButton);
        $I->waitForElementVisible(LoginAdmin::$passwordField, 5);
        $I->fillField(LoginAdmin::$passwordField, $password);
        $I->click(LoginAdmin::$eyeIcon);
        $I->waitForElement(LoginAdmin::$loginButton,2);
        $I->comment("Click success!!");
    }

    /**
     * test for Lost your pass hyperlink
     * @throws \Exception
     */
    public function clickOnLostYourPass()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->click(LoginAdmin::$lostYourPass);
        $I->comment("Click success!!");
    }

    /**
     * test for Email me a login link
     * @throws \Exception
     */
    public function clickOnSendEmail()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->click(LoginAdmin::$sendEmail);
        $I->comment("Click success!!");
    }

    /**
     * test for Sign up hyperlink
     * @throws \Exception
     */
    public function clickOnSigupHyperlink()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->click(LoginAdmin::$signup);
        $I->comment("Click success!!");
    }

    /**
     * test for Terms of service hyperlink
     * @throws \Exception
     */
    public function clickOnTermsOfService()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->click(LoginAdmin::$termsOfService);
        $I->comment("Click success!!");
    }

    /**
     * value không tồn tại trong testing browser
     * test for Vietnamese hyperlink
     * @throws \Exception
     */
    public function clickOnVietnamese()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->pauseExecution();
        $I->click(LoginAdmin::$translate);
        $I->comment("Click success!!");
    }

    /**
     * Check the form with the enter key
     * @param $name
     * @param $password
     * @throws \Exception
     */
    public function keyEnter($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->fillField(LoginAdmin::$usernameField, $name);
        $I->pressKey(LoginAdmin::$continueButton, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForElementVisible(LoginAdmin::$passwordField, 5);
        $I->fillField(LoginAdmin::$passwordField, $password);
        $I->pressKey(LoginAdmin::$loginButton,\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->comment("login pass!");
    }

    /**
     * Check the form with the tab key
     * @param $name
     * @param $password
     * @throws \Exception
     */
    public function keyTab($name)
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->fillField(LoginAdmin::$usernameField, $name);
        $I->pressKey(LoginAdmin::$termsOfService, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(LoginAdmin::$continueButton, \Facebook\WebDriver\WebDriverKeys::TAB);
        $I->pressKey(LoginAdmin::$continueButton, \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForElementVisible(LoginAdmin::$passwordField, 3);
        $I->comment("TAB KEY SUCCESS");
    }

    /**
     * @throws \Exception
     */
    public function checkTheLoginStatus($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->fillField(LoginAdmin::$usernameField, $name);
        $I->click(LoginAdmin::$continueButton);
        $I->waitForElementVisible(LoginAdmin::$passwordField, 5);
        $I->fillField(LoginAdmin::$passwordField, $password);
        $I->click(LoginAdmin::$loginButton);
        $I->openNewTab();
        $I->amOnPage(LoginAdmin::$URL);
        $I->waitForElement(LoginAdmin::$myLifeHyperlink,2);
        $I->closeTab();
        $I->comment('Login still logged!');
    }

    /**
     * check content trên url
     */
    public function checkURL()
    {
        $I = $this;
        $I->amOnPage(LoginAdmin::$URL);
        $I->seeInCurrentUrl(LoginAdmin::$URL);
    }
}