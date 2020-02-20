<?php

namespace Tests\Filters;

use GUMP;
use Exception;
use Tests\BaseTestCase;

/**
 * Class SlugFilterTest
 *
 * @package Tests
 */
class SlugFilterTest extends BaseTestCase
{
    private const FILTER = 'slug';

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
            ['test spaceñ', 'test-spacen'],
            ['test space', 'test-space'],
            ['test', 'test'],
        ];
    }
}