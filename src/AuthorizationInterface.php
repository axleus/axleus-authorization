<?php

declare(strict_types=1);

namespace Axleus\Authorization;

use Laminas\Permissions\Acl\Resource\ResourceInterface;
use Laminas\Permissions\Acl\Assertion\AssertionInterface;
use Mimmi20\Mezzio\GenericAuthorization\AuthorizationInterface as baseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface AuthorizationInterface extends baseInterface
{
    /**
     * Check if a role is granted for a resource
     *
     * @throws void
     */
    public function isGranted(
        string|null $role = null,
        ResourceInterface|string|null $resource = null,
        string|null $privilege = null,
        ServerRequestInterface|null $request = null,
        AssertionInterface|null $assertion = null
    ): bool;
}
