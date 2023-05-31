<?php

namespace Symfony\Config\LeagueOauth2Server\Persistence;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DoctrineConfig 
{
    private $entityManager;
    private $_usedProperties = [];

    /**
     * Name of the entity manager that you wish to use for managing clients and tokens.
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function entityManager($value): static
    {
        $this->_usedProperties['entityManager'] = true;
        $this->entityManager = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('entity_manager', $value)) {
            $this->_usedProperties['entityManager'] = true;
            $this->entityManager = $value['entity_manager'];
            unset($value['entity_manager']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['entityManager'])) {
            $output['entity_manager'] = $this->entityManager;
        }

        return $output;
    }

}
