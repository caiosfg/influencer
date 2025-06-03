
<?php
use PHPUnit\Framework\TestCase;
use App\PrimeFactors;

class PrimeFactorsTest extends TestCase {

    /** @test */
    public function testGeneratesPrimeFactorsFor1() {
        $factors = new PrimeFactors();

        $this->assertEquals([], $factors->generate(1));
    }

    /** @test */
    public function testGeneratesPrimeFactorsFor2() {
        $factors = new PrimeFactors();

        $this->assertEquals([2], $factors->generate(2));
    }
}