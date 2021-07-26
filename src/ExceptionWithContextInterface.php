<?php

declare(strict_types=1);

namespace Keboola\CommonExceptions;

use Throwable;

interface ExceptionWithContextInterface extends Throwable
{
    /**
     * @return array<mixed>
     */
    public function getContext(): array;
}
