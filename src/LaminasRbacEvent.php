<?php

declare(strict_types=1);

namespace Axleus\Authorization;

use Laminas\EventManager\Event;

final class LaminasRbacEvent extends Event implements AuthorizationEventInterface
{
    use AuthorizationEventTrait;

    public const EVENT_AUTHORIZE_RBAC = 'rbac.authorize';
}
