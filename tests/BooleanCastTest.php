<?php

declare(strict_types = 1);

namespace NeueCommerce\ModelCasts\Tests;

use NeueCommerce\ModelCasts\BooleanCast;
use NeueCommerce\Core\Tests\TestCase;

class BooleanCastTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_get_the_value_properly()
    {
        $cast = new BooleanCast();

        $this->assertTrue($cast->get('', '', 1, []));
        $this->assertTrue($cast->get('', '', '1', []));
        $this->assertTrue($cast->get('', '', true, []));

        $this->assertFalse($cast->get('', '', 0, []));
        $this->assertFalse($cast->get('', '', 0, []));
        $this->assertFalse($cast->get('', '', false, []));
    }

    /**
     * @test
     */
    public function it_can_set_the_value_properly()
    {
        $cast = new BooleanCast();

        $this->assertTrue($cast->set('', '', 1, []));
        $this->assertTrue($cast->set('', '', '1', []));
        $this->assertTrue($cast->set('', '', true, []));

        $this->assertFalse($cast->set('', '', 0, []));
        $this->assertFalse($cast->set('', '', 0, []));
        $this->assertFalse($cast->set('', '', false, []));
    }
}
