<?php

namespace Spatie\Fractal\Test\Integration;

use Spatie\Fractal\Exceptions\NoTransformerSpecified;
use Spatie\Fractal\Fractal;

class ExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function it_throws_an_exception_if_item_or_collection_was_not_called()
    {
        $this->setExpectedException('\Spatie\Fractal\Exceptions\NoTransformerSpecified');

        $this->fractal->toJson();
    }
    /**
     * @test
     */
    public function it_throws_an_exception_if_no_transformer_was_specified()
    {
        $this->setExpectedException('\Spatie\Fractal\Exceptions\NoTransformerSpecified');

        $this->fractal->collection($this->testBooks)->toJson();
    }
}
