<?php
namespace Apsg\ZHP\Tests;

use Apsg\ZHP\Stopnie\StopnieRule;
use Orchestra\Testbench\TestCase;

class StopnieRuleTest extends TestCase
{
    /**
     * @var ChoragiewRule
     */
    protected $rule;

    protected function setUp() : void
    {
        parent::setUp();

        $this->rule = new StopnieRule();
    }

    /**
     * @test
     * @dataProvider data
     */
    public function it_tests_the_rule_with_provided_data($value, $expectedResult)
    {
        // given value

        // when
        $result = $this->rule->passes('test', $value);

        // then
        $this->assertSame($expectedResult, $result);
    }

    public function data()
    {
        return [
            [1, true],
            [2, true],
            [3, true],
            [0, true],
            [-1, false],
            ['abc', false],
            [null, false],
            ['1', true],
        ];
    }
}
