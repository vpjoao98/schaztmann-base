<?php
/**
 * @copyright Copyright © 2021 - Schatzmann. All rights reserved.
 * @author João Victor Pereira <vpjoao98@gmail.com>
 * @package Base
 */

namespace Schatzmann\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class EnabledExtensionsHelper
 * @package Base
 */
class EnabledExtensionsHelper extends AbstractHelper
{
    /**
     *  Path to Schatzmann_Base module configurations
     */
    const XML_PATH = 'base/general/enable';

    /**
     * @return bool
     */
    public function isExtensionsEnabled(): bool
    {
        return $this->scopeConfig->getValue(self::XML_PATH, ScopeInterface::SCOPE_STORE);
    }
}
