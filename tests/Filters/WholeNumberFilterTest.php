<?php

namespace Tests\Filters;

use GUMP;
use Exception;
use Tests\BaseTestCase;

/**
 * Class WholeNumberFilterTest
 *
 * @package Tests
 */
class WholeNumberFilterTest extends BaseTestCase
{
    private const FILTER = 'whole_number';

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
            [1, 1],
            ['-1', '-1'],
            [4.2, 4],
            ['042', '42'],
        ];
    }
}