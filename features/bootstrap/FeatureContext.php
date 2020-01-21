<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given that a plain :arg1 string is provided
     */
    public function thatAPlainStringIsProvided($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When the user requires to encode it
     */
    public function theUserRequiresToEncodeIt()
    {
        throw new PendingException();
    }

    /**
     * @Then the encoded string will be: :arg1
     */
    public function theEncodedStringWillBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given that an encoded :arg1 string is provided
     */
    public function thatAnEncodedStringIsProvided($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When the user requires to decode it
     */
    public function theUserRequiresToDecodeIt()
    {
        throw new PendingException();
    }

    /**
     * @Then the plain string will be: :arg1
     */
    public function thePlainStringWillBe($arg1)
    {
        throw new PendingException();
    }
}
