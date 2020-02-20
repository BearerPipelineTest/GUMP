<?php

namespace Tests\Filters;

use GUMP;
use Exception;
use Tests\BaseTestCase;

/**
 * Class LowerFilterTest
 *
 * @package Tests
 */
class LowerFilterTest extends BaseTestCase
{
    private const FILTER = 'lower_case';

    /**
     * @dataProvider successProvider
     */
    public function testSuccess($input, $expected)
    {
        $result = $this->filter(self::FILTER, $input);
        $this->assertEquals($result, $expected);
    }

    public function successProvider()
    {
        return [
            ['Hello', 'hello']
        ];
    }
}