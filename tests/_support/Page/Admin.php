<?php
namespace Page;

class Admin
{
    // include url of current page
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    /**
     * @var string
     */
    public static $usernameField = '//input[@id="usernameOrEmail"]';
    /**
     * @var string
     */
    public static $passwordField = '//input[@id="password"]';
    /**
     * @var string
     */
    public static $loginButton = '//button[@class="button form-button is-primary"]';
    /**
     * @var string
     */
    public static $continueButton = '//div[@class="login__form-action"]/button';
    /**
     * @var string
     */
    public static $changePassButton = '//a[@class="login__form-change-username"]';
    /**
     * @var string
     */
    public static $changeEmail = '//a[@class="login__form-change-username"]';
    /**
     * @var string
     */
    public static $termsOfService ='//p[@class="login__form-terms"]/a';
    /**
     * @var string
     */
    public static $continueWithGG ='//div[@class="social-buttons__button-container"]/button';
    /**
     * @var string
     */
    public static $createANewAccount ='(//div[@class="wp-login__links"])/a[1]';
    /**
     * @var string
     */
    public static $sendEmail ='(//div[@class="wp-login__links"])/a[2]';
    /**
     * @var string
     */
    public static $lostYourPass ='(//div[@class="wp-login__links"])/a[3]';
    /**
     * @var string
     */
    public static $backWordpress ='(//div[@class="wp-login__links"])/a[4]';
    /**
     * @var string
     */
    public static $translate ='(//div[@class="translator-invite__content"])/a';
    /**
     * @var string
     */
    public static $signup ='//a[@class="masterbar__item"]';
    /**
     * @var string
     */
    public static $eyeIcon = '//span[@class="form-password-input__toggle form-password-input__toggle-visibility"]';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
}
