<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

use PHPUnit\Framework\TestCase;

class FuzzyWuzzyTest extends TestCase
{

    public function testGetNumbers(): void 
    {
        $fuzzyWuzzy = new FuzzyWuzzy();
        $this->assertEquals(
            [
                '1',
                '2',
                'Fuzzy',
                '4',
                'Wuzzy',
                'Fuzzy',
                'FuzzyWuzzy',
                '8',
                'Fuzzy',
                'Wuzzy',
                '11',
                'Fuzzy',
                '13',
                'FuzzyWuzzy',
                'WuzzyWuzzy',
                '16',
                '17',
                'Fuzzy',
                '19',
                'Wuzzy',
                'Fuzzy',
                'FuzzyWuzzy',
                '23',
                'Fuzzy',
                'Wuzzy',
                '26',
                'Fuzzy',
                '28',
                'FuzzyWuzzy',
                '31',
                '32',
                'Fuzzy',
                '34',
                'Wuzzy',
                'Fuzzy',
                'FuzzyWuzzy',
                '38',
                'Fuzzy',
                'Wuzzy',
                '41',
                'Fuzzy',
                '43',
                'FuzzyWuzzy',
                'WuzzyWuzzy',
                '46',
                '47',
                'Fuzzy',
                '49',
                'Wuzzy',
                'Fuzzy',
                'FuzzyWuzzy',
                '53',
                'Fuzzy',
                'Wuzzy',
                '56',
                'Fuzzy',
                '58',
                'FuzzyWuzzy',
                '61',
                '62',
                'Fuzzy',
                '64',
                'Wuzzy',
                'Fuzzy',
                'FuzzyWuzzy',
                '68',
                'Fuzzy',
                'Wuzzy',
                '71',
                'Fuzzy',
                '73',
                'FuzzyWuzzy',
                'WuzzyWuzzy',
                '76',
                '77',
                'Fuzzy',
                '79',
                'Wuzzy',
                'Fuzzy',
                'FuzzyWuzzy',
                '83',
                'Fuzzy',
                'Wuzzy',
                '86',
                'Fuzzy',
                '88',
                'FuzzyWuzzy',
                '91',
                '92',
                'Fuzzy',
                '94',
                'Wuzzy',
                'Fuzzy',
                'FuzzyWuzzy',
                '98',
                'Fuzzy',
                'Wuzzy',
                'WuzzyFuzzyFuzzyWuzzy',
            ],
            $fuzzyWuzzy->getNumbers([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105])
        );

    }

    public function testSay(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        for ($x = 0; $x <= 105; $x++) {

            if ($x % 3 === 0 && $x % 5 === 0 && $x % 7 === 0) {
                $this->assertSame('WuzzyFuzzyFuzzyWuzzy', $fuzzyWuzzy->say($x));
            }
    
            elseif ($x % 3 === 0 && $x % 5 === 0) {
                $this->assertSame('WuzzyWuzzy', $fuzzyWuzzy->say($x));
            }
            
            elseif ($x % 3 === 0 && $x % 7 === 0) {
                $this->assertSame('WuzzyFuzzyWuzzy', $fuzzyWuzzy->say($x));
            }
    
            elseif ($x % 5 === 0 && $x % 7 === 0) {
                $this->assertSame('FuzzyWuzzyWuzzy', $fuzzyWuzzy->say($x));
            }
    
            elseif ($x % 3 === 0) {
                $this->assertSame('Fuzzy', $fuzzyWuzzy->say($x));
            }
    
            elseif ($x % 5 === 0) {
                $this->assertSame('Wuzzy', $fuzzyWuzzy->say($x));
            }
    
            elseif ($x % 7 === 0) {
                $this->assertSame('FuzzyWuzzy', $fuzzyWuzzy->say($x));
            }
    
            else {
                $this->assertSame("{$x}", $fuzzyWuzzy->say($x));
          }
     }
    }
}