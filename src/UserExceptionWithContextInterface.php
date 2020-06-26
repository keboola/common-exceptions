<?php

declare(strict_types=1);

namespace Keboola\CommonExceptions;

interface UserExceptionWithContextInterface extends UserExceptionInterface
{
    public function getContext(): array;
}
