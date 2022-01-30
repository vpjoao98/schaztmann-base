<?php
/**
 * @copyright Copyright © 2021 - Schatzmann. All rights reserved.
 * @author João Victor Pereira <vpjoao98@gmail.com>
 * @package Base
 */

declare(strict_types=1);

namespace Schatzmann\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class SchatzmannBaseHelper
 * @package Base
 */
class SchatzmannBaseHelper extends AbstractHelper
{
    /**
     *  Configuration path for schatzmann_base_general_enable field.
     */
    const SCHATZMANN_BASE_GENERAL_ENABLE = 'schatzmann_base/general/enable';

    /**
     * @return bool
     */
    public function isExtensionsEnabled(): bool
    {
        return (bool) $this->scopeConfig->getValue(self::SCHATZMANN_BASE_GENERAL_ENABLE, ScopeInterface::SCOPE_STORE);
    }
}
