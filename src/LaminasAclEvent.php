<?php

declare(strict_types=1);

namespace Axleus\Authorization;

use Laminas\EventManager\Event;

final class LaminasAclEvent extends Event implements AuthorizationEventInterface
{
    use AuthorizationEventTrait;

    public const EVENT_AUTHORIZE_ACL = 'acl.authorize';
}
