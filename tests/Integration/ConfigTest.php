<?php

namespace Spatie\Fractal\Test\Integration;

use Spatie\Fractal\ArraySerializer;

class ConfigTest extends TestCase
{
    public function setUp()
    {
        parent::setup('\Spatie\Fractal\ArraySerializer');
    }

    /**
     * @test
     */
    public function it_uses_the_default_transformer_when_it_is_specified()
    {
        $array = $this->fractal
            ->item($this->testBooks[0])
            ->transformWith(new TestTransformer())
            ->toArray();

        $expectedArray = ['id' => 1, 'author' => 'Philip K Dick'];

        $this->assertEquals($expectedArray, $array);
    }
}
