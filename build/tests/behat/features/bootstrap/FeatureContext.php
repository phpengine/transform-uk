<?php

use Behat\Behat\Context\ContextInterface;
use Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;

/**
 * Behat context class.
 */
class FeatureContext extends MinkContext implements ContextInterface
{

    protected $session ;

    /**
     * Initializes context. Every scenario gets it's own context object.
     *
     * @param array $parameters Suite parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
    }

    /**
     * @Given /^I start a new session$/
     */
    public function iStartANewSession()
    {
        $driver = new \Behat\Mink\Driver\Selenium2Driver('firefox');
        $this->session = new \Behat\Mink\Session($driver);
        $this->session->start();
    }

    /**
     * @Given /^I am on the transform uk home page$/
     */
    public function iAmOnTheTransformUkHomePage()
    {
        $this->session->visit('http://www.transformuk.com');
    }

    /**
     * @Then /^I should see the transform uk logo$/
     */
    public function iShouldSeeTheTransformUkLogo()
    {
        $page = $this->session->getPage() ;
        $page->find('css', 'html body header.main div.inner a h1.logo');
    }

    /**
     * @Then /^I should see the managing director$/
     */
    public function iShouldSeeTheManagingDirector()
    {
        $page = $this->session->getPage() ;
        $page->find('css', 'html body header.main div.inner a h1.logo');
    }

    /**
     * @Given /^I end the session$/
     */
    public function iEndTheSession()
    {
        $this->session->stop() ;
    }

}