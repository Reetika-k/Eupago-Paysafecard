<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Eupago\Paysafecard\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;
use Eupago\Paysafecard\Gateway\Http\Client\Client;

/**
 * Class ConfigProvider
 */
final class ConfigProvider implements ConfigProviderInterface
{
    const CODE = 'eupago_paysafecard';

    /**
     * Retrieve assoc array of checkout configuration
     *
     * @return array
     */
    public function getConfig()
    {

        return [
            'payment' => [
                self::CODE => [
                    'phoneNumber' => '926866058'
                ]
            ]
        ];
    }
}
