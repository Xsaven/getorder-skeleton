<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withSkipPath(__DIR__ . '/bootstrap/cache')
    ->withPhpSets(php82: true)
    ->withRules([
        \Rector\CodeQuality\Rector\If_\ExplicitBoolCompareRector::class,
        \Rector\Php81\Rector\Array_\FirstClassCallableRector::class,
    ])
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0);
