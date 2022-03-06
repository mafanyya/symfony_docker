<?php

namespace Symfony\Config\Framework;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ProfilerConfig 
{
    private $enabled;
    private $collect;
    private $collectParameter;
    private $onlyExceptions;
    private $onlyMainRequests;
    private $dsn;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function collect($value): static
    {
        $this->collect = $value;
    
        return $this;
    }
    
    /**
     * The name of the parameter to use to enable or disable collection on a per request basis
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function collectParameter($value): static
    {
        $this->collectParameter = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function onlyExceptions($value): static
    {
        $this->onlyExceptions = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function onlyMainRequests($value): static
    {
        $this->onlyMainRequests = $value;
    
        return $this;
    }
    
    /**
     * @default 'file:%kernel.cache_dir%/profiler'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dsn($value): static
    {
        $this->dsn = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['collect'])) {
            $this->collect = $value['collect'];
            unset($value['collect']);
        }
    
        if (isset($value['collect_parameter'])) {
            $this->collectParameter = $value['collect_parameter'];
            unset($value['collect_parameter']);
        }
    
        if (isset($value['only_exceptions'])) {
            $this->onlyExceptions = $value['only_exceptions'];
            unset($value['only_exceptions']);
        }
    
        if (isset($value['only_main_requests'])) {
            $this->onlyMainRequests = $value['only_main_requests'];
            unset($value['only_main_requests']);
        }
    
        if (isset($value['dsn'])) {
            $this->dsn = $value['dsn'];
            unset($value['dsn']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->collect) {
            $output['collect'] = $this->collect;
        }
        if (null !== $this->collectParameter) {
            $output['collect_parameter'] = $this->collectParameter;
        }
        if (null !== $this->onlyExceptions) {
            $output['only_exceptions'] = $this->onlyExceptions;
        }
        if (null !== $this->onlyMainRequests) {
            $output['only_main_requests'] = $this->onlyMainRequests;
        }
        if (null !== $this->dsn) {
            $output['dsn'] = $this->dsn;
        }
    
        return $output;
    }

}