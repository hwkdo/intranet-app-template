<?php

declare(strict_types=1);

namespace Hwkdo\IntranetAppTemplate;

use Hwkdo\IntranetAppBase\Data\ManualDefinition;
use Hwkdo\IntranetAppBase\Data\NotificationTypeDefinition;
use Hwkdo\IntranetAppBase\Interfaces\IntranetAppInterface;
use Hwkdo\IntranetAppBase\Interfaces\ProvidesManualsInterface;
use Hwkdo\IntranetAppBase\Interfaces\ProvidesNotificationsInterface;
use Illuminate\Support\Collection;

class IntranetAppTemplate implements IntranetAppInterface, ProvidesManualsInterface, ProvidesNotificationsInterface
{
    public static function app_name(): string
    {
        return 'Template';
    }

    public static function app_icon(): string
    {
        return 'magnifying-glass';
    }

    public static function identifier(): string
    {
        return 'template';
    }

    public static function roles_admin(): Collection
    {
        return collect(config('intranet-app-template.roles.admin'));
    }

    public static function roles_user(): Collection
    {
        return collect(config('intranet-app-template.roles.user'));
    }

    public static function userSettingsClass(): ?string
    {
        return \Hwkdo\IntranetAppTemplate\Data\UserSettings::class;
    }

    public static function appSettingsClass(): ?string
    {
        return \Hwkdo\IntranetAppTemplate\Data\AppSettings::class;
    }

    public static function mcpServers(): array
    {
        return [];
    }

    /**
     * @return list<ManualDefinition>
     */
    public static function manuals(): array
    {
        return [];
    }

    /**
     * @return list<NotificationTypeDefinition>
     */
    public static function notificationTypes(): array
    {
        return [
            new NotificationTypeDefinition(
                key: 'template.example_event',
                label: 'Beispiel-Benachrichtigung',
                appIdentifier: self::identifier(),
                appName: self::app_name(),
                description: 'Demo-Typ für die Template-App – in echten Apps durch fachliche Events ersetzen.',
                mandatory: false,
                defaultEnabled: true,
                defaultChannels: ['inbox'],
            ),
        ];
    }
}
