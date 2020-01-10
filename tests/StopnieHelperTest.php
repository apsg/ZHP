<?php

namespace Apsg\ZHP\Tests;

use Apsg\ZHP\Stopnie\StopnieHelper;
use Orchestra\Testbench\TestCase;

class StopnieHelperTest extends TestCase
{
    /** @test */
    public function it_returns_full_name_if_no_gender_provided()
    {
        // given
        $id = 3;

        // when
        $name = StopnieHelper::name($id);

        // then
        $this->assertIsString($name);
        $this->assertEquals('Harcmistrzyni/Harcmistrz', $name);
    }

    /** @test */
    public function it_returns_single_name_if_gender_is_provided()
    {
        // given
        $id = 3;

        // when
        $maleName = StopnieHelper::name($id, StopnieHelper::GENDER_MALE);
        $femaleName = StopnieHelper::name($id, StopnieHelper::GENDER_FEMALE);

        // then
        $this->assertEquals('Harcmistrz', $maleName);
        $this->assertEquals('Harcmistrzyni', $femaleName);
    }

    /** @test */
    public function it_returns_no_gender_difference_for_none_option()
    {
        // given
        $none = 0;

        // when
        $maleName = StopnieHelper::name($none, StopnieHelper::GENDER_MALE);
        $femaleName = StopnieHelper::name($none, StopnieHelper::GENDER_FEMALE);

        // then
        $this->assertEquals('Brak', $maleName);
        $this->assertEquals('Brak', $femaleName);
    }
}
