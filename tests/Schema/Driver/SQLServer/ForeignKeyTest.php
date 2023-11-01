<?php

declare(strict_types=1);

namespace Cycle\Schema\Tests\Driver\SQLServer;

use Cycle\Schema\Tests\Generator\ForeignKeysTest as BaseTest;

final class ForeignKeyTest extends BaseTest
{
    public const DRIVER = 'sqlserver';
}
