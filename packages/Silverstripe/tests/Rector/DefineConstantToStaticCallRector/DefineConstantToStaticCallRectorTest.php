<?php

declare(strict_types=1);

namespace Rector\Silverstripe\Tests\Rector\DefineConstantToStaticCallRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Silverstripe\Rector\DefineConstantToStaticCallRector;

final class DefineConstantToStaticCallRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return DefineConstantToStaticCallRector::class;
    }
}
