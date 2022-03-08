<?php

use Codeception\Test\Unit;

class ExampleTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;

    // tests
    public function testExample()
    {
        // Arrange
        // setup seeds, migrations, and etc.

        // Act
        // do something
        // $version = Craft::$app->getVersion();

        // Assert
        // verify the outcome is what you expected
        // $this->assertNotEmpty($version, "expected the craft version to not be empty");
        $this->assertTrue(true);
    }
}
