<?php

/*
 * @copyright   2019 Mautic, Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\IntegrationsBundle\Integration\Interfaces;

interface ConfigFormAuthorizeButtonInterface
{
    public const CONFIG_KEY_AUTHORIZATION_URL = 'authorization_url';

    /**
     * @return string
     */
    public function getAuthorizationUrl(): string;
}