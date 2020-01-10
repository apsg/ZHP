<?php
namespace Apsg\ZHP\Tests;

use Apsg\ZHP\Choragwie\ChoragiewRule;
use Orchestra\Testbench\TestCase;

class ChoragiewRuleTest extends TestCase
{
    /**
     * @var ChoragiewRule
     */
    protected $rule;

    protected function setUp() : void
    {
        parent::setUp();

        $this->rule = new ChoragiewRule();
    }

    /**
     * @test
     * @dataProvider data
     */
    public function it_tests_the_rule_with_provided_data($value, $expectedResult)
    {
        // given value

        // when
        $result = $this->rule->passes('choragiew', $value);

        // then
        $this->assertSame($expectedResult, $result);
    }

    public function data()
    {
        return [
            [rand(0, 17), true],
            [rand(0, 17), true],
            [rand(0, 17), true],
            [rand(0, 17), true],
            [-1, false],
            ['abc', false],
            [null, false],
            ['1', true],
        ];
    }
}
