<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

use PHPUnit\Framework\TestCase;

class FuzzyWuzzyTest extends TestCase
{

    public function testGetNumbers(): void 
    {
        $fuzzyWuzzy1 = new FuzzyWuzzy();
        $this->assertEquals(
            "12Fuzzy4WuzzyFuzzyFuzzyWuzzy8FuzzyWuzzy11Fuzzy13FuzzyWuzzyWuzzyWuzzy1617Fuzzy19WuzzyWuzzyFuzzyWuzzy2223FuzzyWuzzy26FuzzyFuzzyWuzzy29WuzzyWuzzy3132Fuzzy34FuzzyWuzzyWuzzyFuzzy3738FuzzyWuzzy41WuzzyFuzzyWuzzy4344WuzzyWuzzy4647FuzzyFuzzyWuzzyWuzzyFuzzy5253FuzzyWuzzyFuzzyWuzzyFuzzy5859WuzzyWuzzy6162WuzzyFuzzyWuzzy64WuzzyFuzzy6768FuzzyFuzzyWuzzyWuzzy71Fuzzy7374WuzzyWuzzy76FuzzyWuzzyFuzzy79WuzzyFuzzy8283WuzzyFuzzyWuzzyWuzzy86Fuzzy8889WuzzyWuzzyFuzzyWuzzy92Fuzzy94WuzzyFuzzy97FuzzyWuzzyFuzzyWuzzy101Fuzzy103104WuzzyFuzzyFuzzyWuzzy",
            $fuzzyWuzzy1->getNumbers(range(1, 105))
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