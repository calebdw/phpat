<?php

namespace PHPat\Rule\Assertion\MustNotImplement;

use PHPat\Rule\Assertion\Assertion;
use PHPat\Statement\Builder\StatementBuilderFactory;
use PHPStan\Reflection\ReflectionProvider;

abstract class MustNotImplement extends Assertion
{
    public function __construct(StatementBuilderFactory $statementBuilderFactory, ReflectionProvider $reflectionProvider)
    {
        parent::__construct(__CLASS__, $statementBuilderFactory, $reflectionProvider);
    }

    protected function getMessage(string $subject, string $target): string
    {
        return sprintf('%s must not implement %s', $subject, $target);
    }
}
