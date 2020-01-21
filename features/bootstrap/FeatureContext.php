<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use conquerorsoft\bdd\StringTransformation;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $stringTransformation;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->stringTransformation = new StringTransformation();
    }

    /**
     * @Given that a plain :arg1 string is provided
     */
    public function thatAPlainStringIsProvided($arg1)
    {
        $this->stringTransformation->setPlainString($arg1);
    }

    /**
     * @When the user requires to encode it
     */
    public function theUserRequiresToEncodeIt()
    {
        $this->stringTransformation->encode();
    }

    /**
     * @Then the encoded string will be: :arg1
     */
    public function theEncodedStringWillBe($arg1)
    {
        $encodedString = $this->stringTransformation->getEncodedString();
        PHPUnit\Framework\Assert::assertEquals($arg1, $encodedString);
    }

    /**
     * @Given that an encoded :arg1 string is provided
     */
    public function thatAnEncodedStringIsProvided($arg1)
    {
        $this->stringTransformation->setEncodedString($arg1);
    }

    /**
     * @When the user requires to decode it
     */
    public function theUserRequiresToDecodeIt()
    {
        $this->stringTransformation->decode();
    }

    /**
     * @Then the plain string will be: :arg1
     */
    public function thePlainStringWillBe($arg1)
    {
        $plainString = $this->stringTransformation->getPlainString();
        PHPUnit\Framework\Assert::assertEquals($arg1, $plainString);
    }
}
