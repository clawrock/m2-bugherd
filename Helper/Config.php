<?php

namespace ClawRock\BugHerd\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{
    const CONFIG_ENABLED = 'clawrock_bugherd/script/active';
    const CONFIG_API_KEY = 'clawrock_bugherd/script/api_key';

    /**
     * @param null $store
     * @return bool
     */
    public function isEnabled($store = null)
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_ENABLED, ScopeInterface::SCOPE_STORE, $store);
    }

    /**
     * @param null $store
     * @return string
     */
    public function getApiKey($store = null)
    {
        return (string)$this->scopeConfig->getValue(self::CONFIG_API_KEY, ScopeInterface::SCOPE_STORE, $store);
    }
}
