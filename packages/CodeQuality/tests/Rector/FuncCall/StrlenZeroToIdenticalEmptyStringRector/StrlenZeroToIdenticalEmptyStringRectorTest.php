<?php declare(strict_types=1);

namespace Rector\CodeQuality\Tests\Rector\FuncCall\StrlenZeroToIdenticalEmptyStringRector;

use Rector\CodeQuality\Rector\FuncCall\StrlenZeroToIdenticalEmptyStringRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class StrlenZeroToIdenticalEmptyStringRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([__DIR__ . '/Fixture/fixture.php.inc']);
    }

    protected function getRectorClass(): string
    {
        return StrlenZeroToIdenticalEmptyStringRector::class;
    }
}