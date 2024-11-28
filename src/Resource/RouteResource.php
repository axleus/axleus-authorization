<?php

declare(strict_types=1);

namespace Axleus\Authorization\Resource;

use Laminas\Permissions\Acl\Resource\ResourceInterface;
use Laminas\Permissions\Acl\ProprietaryInterface;

final class RouteResource implements ResourceInterface, ProprietaryInterface
{
    public function __construct(
        private ?string $resourceId,
        private string|int|null $ownerId
    ) {
        // nothing to see here
    }
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function getOwnerId(): int|string|null
    {
        return $this->ownerId;
    }
}
