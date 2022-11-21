<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

class FuzzyWuzzy
{
    
    public function getNumbers($numbers): array
    {
        foreach ($numbers as &$value) {
            echo say($value);
        }
    }

    public function say(int $number): string
    {        
        if ($number % 3 === 0 && $number % 5 === 0 && $number % 7 === 0) {
            return 'WuzzyFuzzyFuzzyWuzzy';
        }

        elseif ($number % 3 === 0 && $number % 5 === 0) {
            return 'WuzzyWuzzy';
        }
        
        elseif ($number % 3 === 0 && $number % 7 === 0) {
            return 'WuzzyFuzzyWuzzy';
        }

        elseif ($number % 5 === 0 && $number % 7 === 0) {
            return 'FuzzyWuzzyWuzzy';
        }

        elseif ($number % 3 === 0) {
            return 'Fuzzy';
        }

        elseif ($number % 5 === 0) {
            return 'Wuzzy';
        }

        elseif ($number % 7 === 0) {
            return 'FuzzyWuzzy';
        }

        else {
            return "{$number}";
        }
    }
}