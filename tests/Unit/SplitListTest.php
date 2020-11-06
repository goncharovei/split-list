<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SplitListTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     * @param $source_list
     * @param $columns_amount
     * @param $expected
     */
    public function testResult($source_list, $columns_amount, $expected)
    {
        $this->assertEquals($expected, splitList($source_list, $columns_amount));
    }

    public function additionProvider()
    {
        return [
            'Example 1' => [
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                4,
                [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8],
                    [9, 10]
                ]
            ],
            'Example 2' => [
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                3,
                [
                    [1, 2, 3, 4],
                    [5, 6, 7],
                    [8, 9, 10]
                ]
            ],
            'Example 3' => [
                [1, 2, 3, 4],
                5,
                [
                    [1],
                    [2],
                    [3],
                    [4]
                ]
            ]
        ];
    }
}
