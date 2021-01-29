<?php

namespace Terpomoj\Times;

use Closure;

class Times
{
    protected int $times;

    public function __construct(int $times)
    {
        $this->times = $times;
    }

    public static function of(int $times): self
    {
        return new self($times);
    }

    public function do(Closure $callback): self
    {
        for ($i = 0; $i < $this->times; $i++) {
            $callback($i);
        }

        return $this;
    }
}
