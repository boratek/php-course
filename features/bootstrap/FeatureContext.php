<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{


    /**
     * @Given I am on :page
     */
    public function iAmOn($page)
    {
        $this->visitPath('/');
    }

    /**
     * @When I select :value from :selectName
     */
    public function iSelectFrom($value, $selectName)
    {
        $this->getSession()->getPage()->selectFieldOption($selectName, $value);
    }

    /**
     * @When I click :arg1
     */
    public function iClick($arg1)
    {
        $this->getSession()->getPage()->find('css', '.submit')->click();
    }

    /**
     * @Then I can should see :message
     */
    public function iCanShouldSee($message)
    {
        $output = $this->getSession()->getPage()->find('css', '.output');
        expect($output->getText())->toBe($message);
    }
}
