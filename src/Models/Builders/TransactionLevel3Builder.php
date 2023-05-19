<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Level3Data;
use FortisAPILib\Models\TransactionLevel3;

/**
 * Builder for model TransactionLevel3
 *
 * @see TransactionLevel3
 */
class TransactionLevel3Builder
{
    /**
     * @var TransactionLevel3
     */
    private $instance;

    private function __construct(TransactionLevel3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction level 3 Builder object.
     */
    public static function init(string $id, string $transactionId, Level3Data $level3Data): self
    {
        return new self(new TransactionLevel3($id, $transactionId, $level3Data));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new transaction level 3 object.
     */
    public function build(): TransactionLevel3
    {
        return CoreHelper::clone($this->instance);
    }
}