<?php

namespace ClawRock\BugHerd\Block;

use Magento\Framework\View\Element\Template;

class Script extends Template
{
    private $config;

    /**
     * Script constructor.
     * @param Template\Context $context
     * @param \ClawRock\BugHerd\Helper\Config $config
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \ClawRock\BugHerd\Helper\Config $config,
        array $data = []
    ) {
        parent::__construct($context, $data);

        $this->config = $config;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->config->getApiKey();
    }
}
