<?php

declare(strict_types=1);

namespace Rector\BetterPhpDocParser\PhpDocNode\Doctrine\Property_;

use Rector\BetterPhpDocParser\PhpDocNode\Doctrine\AbstractDoctrineTagValueNode;
use Rector\PhpAttribute\Contract\PhpAttributableTagNodeInterface;
use Rector\PhpAttribute\PhpDocNode\PhpAttributePhpDocNodePrintTrait;

/**
 * @see \Rector\BetterPhpDocParser\Tests\PhpDocParser\TagValueNodeReprint\TagValueNodeReprintTest
 */
final class GeneratedValueTagValueNode extends AbstractDoctrineTagValueNode implements PhpAttributableTagNodeInterface
{
    use PhpAttributePhpDocNodePrintTrait;

    /**
     * @var string
     */
    private $strategy;

    public function __construct(string $strategy, ?string $annotationContent = null)
    {
        $this->strategy = $strategy;

        if ($annotationContent !== null) {
            $this->resolveOriginalContentSpacingAndOrder($annotationContent, 'strategy');
        }
    }

    public function __toString(): string
    {
        $items['strategy'] = $this->printValueWithOptionalQuotes('strategy', $this->strategy);

        return $this->printContentItems($items);
    }

    public function getShortName(): string
    {
        return '@ORM\GeneratedValue';
    }

    public function toAttributeString(): string
    {
        return $this->printAttributeContent();
    }
}
