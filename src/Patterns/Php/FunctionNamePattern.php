<?php

declare(strict_types=1);

namespace Tempest\Highlight\Patterns\Php;

use Tempest\Highlight\Pattern;
use Tempest\Highlight\Patterns\IsPattern;
use Tempest\Highlight\Tokens\TokenType;

final readonly class FunctionNamePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return 'function (?<match>[\w]+)';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::PROPERTY;
    }
}