<?php
/**
 * Test that PHP Unit is working
 *
 * @package Arras\Tests\Unit
 * @author  Caspar Green <caspar@iCasparWebDevelopment.com>

 * @since 1.0.0
 */

namespace Arras\Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class TestPhpunit
 *
 * @package Arras\Tests\Unit
 *
 * @since 1.0.0
 */
class TestPhpunit extends TestCase
{
    /**
     * Test PHP Unit should work.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function testPhpUnitShouldWork(): void
    {
        $this->assertEquals(1, 1);
    }
}
