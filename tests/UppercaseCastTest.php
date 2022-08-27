<?php

declare(strict_types = 1);

namespace NeueCommerce\ModelCasts\Tests;

use NeueCommerce\ModelCasts\UppercaseCast;
use NeueCommerce\Core\Tests\TestCase;

class UppercaseCastTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_get_the_value_properly()
    {
        $cast = new UppercaseCast();

        $this->assertSame('ONE', $cast->get('', '', 'one', []));
        $this->assertSame('ONE', $cast->get('', '', 'One', []));
    }

    /**
     * @test
     */
    public function it_can_set_the_value_properly()
    {
        $cast = new UppercaseCast();

        $this->assertSame('ONE', $cast->set('', '', 'one', []));
        $this->assertSame('ONE', $cast->set('', '', 'One', []));
    }
}
