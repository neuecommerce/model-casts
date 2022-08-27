<?php

declare(strict_types = 1);

namespace NeueCommerce\ModelCasts\Tests;

use NeueCommerce\ModelCasts\LowercaseCast;
use NeueCommerce\Core\Tests\TestCase;

class LowercaseCastTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_get_the_value_properly()
    {
        $cast = new LowercaseCast();

        $this->assertSame('one', $cast->get('', '', 'One', []));
        $this->assertSame('one', $cast->get('', '', 'ONE', []));
    }

    /**
     * @test
     */
    public function it_can_set_the_value_properly()
    {
        $cast = new LowercaseCast();

        $this->assertSame('one', $cast->set('', '', 'One', []));
        $this->assertSame('one', $cast->set('', '', 'ONE', []));
    }
}
