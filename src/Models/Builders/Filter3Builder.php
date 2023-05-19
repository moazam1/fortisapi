<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Filter3;

/**
 * Builder for model Filter3
 *
 * @see Filter3
 */
class Filter3Builder
{
    /**
     * @var Filter3
     */
    private $instance;

    private function __construct(Filter3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new filter 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new Filter3());
    }

    /**
     * Sets id field.
     */
    public function id(?array $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     */
    public function createdTs($value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     */
    public function modifiedTs($value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?array $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?array $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets branding domain id field.
     */
    public function brandingDomainId(?array $value): self
    {
        $this->instance->setBrandingDomainId($value);
        return $this;
    }

    /**
     * Sets contact email trx receipt default field.
     */
    public function contactEmailTrxReceiptDefault(?array $value): self
    {
        $this->instance->setContactEmailTrxReceiptDefault($value);
        return $this;
    }

    /**
     * Sets default ach field.
     */
    public function defaultAch(?array $value): self
    {
        $this->instance->setDefaultAch($value);
        return $this;
    }

    /**
     * Sets default cc field.
     */
    public function defaultCc(?array $value): self
    {
        $this->instance->setDefaultCc($value);
        return $this;
    }

    /**
     * Sets email reply to field.
     */
    public function emailReplyTo(?array $value): self
    {
        $this->instance->setEmailReplyTo($value);
        return $this;
    }

    /**
     * Sets fax field.
     */
    public function fax(?array $value): self
    {
        $this->instance->setFax($value);
        return $this;
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?array $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Sets location api key field.
     */
    public function locationApiKey(?array $value): self
    {
        $this->instance->setLocationApiKey($value);
        return $this;
    }

    /**
     * Sets location c 1 field.
     */
    public function locationC1(?array $value): self
    {
        $this->instance->setLocationC1($value);
        return $this;
    }

    /**
     * Sets location c 2 field.
     */
    public function locationC2(?array $value): self
    {
        $this->instance->setLocationC2($value);
        return $this;
    }

    /**
     * Sets location c 3 field.
     */
    public function locationC3(?array $value): self
    {
        $this->instance->setLocationC3($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?array $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets office phone field.
     */
    public function officePhone(?array $value): self
    {
        $this->instance->setOfficePhone($value);
        return $this;
    }

    /**
     * Sets office ext phone field.
     */
    public function officeExtPhone(?array $value): self
    {
        $this->instance->setOfficeExtPhone($value);
        return $this;
    }

    /**
     * Sets tz field.
     */
    public function tz(?array $value): self
    {
        $this->instance->setTz($value);
        return $this;
    }

    /**
     * Sets parent id field.
     */
    public function parentId(?array $value): self
    {
        $this->instance->setParentId($value);
        return $this;
    }

    /**
     * Sets show contact notes field.
     */
    public function showContactNotes(?array $value): self
    {
        $this->instance->setShowContactNotes($value);
        return $this;
    }

    /**
     * Sets show contact files field.
     */
    public function showContactFiles(?array $value): self
    {
        $this->instance->setShowContactFiles($value);
        return $this;
    }

    /**
     * Sets relationship field.
     */
    public function relationship(?array $value): self
    {
        $this->instance->setRelationship($value);
        return $this;
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
     * Initializes a new filter 3 object.
     */
    public function build(): Filter3
    {
        return CoreHelper::clone($this->instance);
    }
}