<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Address1;
use FortisAPILib\Models\List4;

/**
 * Builder for model List4
 *
 * @see List4
 */
class List4Builder
{
    /**
     * @var List4
     */
    private $instance;

    private function __construct(List4 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list 4 Builder object.
     */
    public static function init(
        string $id,
        int $createdTs,
        int $modifiedTs,
        string $name,
        array $brandingDomain,
        array $productTransactions,
        array $productFile,
        array $productAccountvault,
        array $productRecurring,
        array $tags,
        array $terminals
    ): self {
        return new self(new List4(
            $id,
            $createdTs,
            $modifiedTs,
            $name,
            $brandingDomain,
            $productTransactions,
            $productFile,
            $productAccountvault,
            $productRecurring,
            $tags,
            $terminals
        ));
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?Address1 $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets branding domain id field.
     */
    public function brandingDomainId(?string $value): self
    {
        $this->instance->setBrandingDomainId($value);
        return $this;
    }

    /**
     * Unsets branding domain id field.
     */
    public function unsetBrandingDomainId(): self
    {
        $this->instance->unsetBrandingDomainId();
        return $this;
    }

    /**
     * Sets contact email trx receipt default field.
     */
    public function contactEmailTrxReceiptDefault(?bool $value): self
    {
        $this->instance->setContactEmailTrxReceiptDefault($value);
        return $this;
    }

    /**
     * Sets default ach field.
     */
    public function defaultAch(?string $value): self
    {
        $this->instance->setDefaultAch($value);
        return $this;
    }

    /**
     * Unsets default ach field.
     */
    public function unsetDefaultAch(): self
    {
        $this->instance->unsetDefaultAch();
        return $this;
    }

    /**
     * Sets default cc field.
     */
    public function defaultCc(?string $value): self
    {
        $this->instance->setDefaultCc($value);
        return $this;
    }

    /**
     * Unsets default cc field.
     */
    public function unsetDefaultCc(): self
    {
        $this->instance->unsetDefaultCc();
        return $this;
    }

    /**
     * Sets email reply to field.
     */
    public function emailReplyTo(?string $value): self
    {
        $this->instance->setEmailReplyTo($value);
        return $this;
    }

    /**
     * Unsets email reply to field.
     */
    public function unsetEmailReplyTo(): self
    {
        $this->instance->unsetEmailReplyTo();
        return $this;
    }

    /**
     * Sets fax field.
     */
    public function fax(?string $value): self
    {
        $this->instance->setFax($value);
        return $this;
    }

    /**
     * Unsets fax field.
     */
    public function unsetFax(): self
    {
        $this->instance->unsetFax();
        return $this;
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?string $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Unsets location api id field.
     */
    public function unsetLocationApiId(): self
    {
        $this->instance->unsetLocationApiId();
        return $this;
    }

    /**
     * Sets location api key field.
     */
    public function locationApiKey(?string $value): self
    {
        $this->instance->setLocationApiKey($value);
        return $this;
    }

    /**
     * Unsets location api key field.
     */
    public function unsetLocationApiKey(): self
    {
        $this->instance->unsetLocationApiKey();
        return $this;
    }

    /**
     * Sets location c 1 field.
     */
    public function locationC1(?string $value): self
    {
        $this->instance->setLocationC1($value);
        return $this;
    }

    /**
     * Unsets location c 1 field.
     */
    public function unsetLocationC1(): self
    {
        $this->instance->unsetLocationC1();
        return $this;
    }

    /**
     * Sets location c 2 field.
     */
    public function locationC2(?string $value): self
    {
        $this->instance->setLocationC2($value);
        return $this;
    }

    /**
     * Unsets location c 2 field.
     */
    public function unsetLocationC2(): self
    {
        $this->instance->unsetLocationC2();
        return $this;
    }

    /**
     * Sets location c 3 field.
     */
    public function locationC3(?string $value): self
    {
        $this->instance->setLocationC3($value);
        return $this;
    }

    /**
     * Unsets location c 3 field.
     */
    public function unsetLocationC3(): self
    {
        $this->instance->unsetLocationC3();
        return $this;
    }

    /**
     * Sets office phone field.
     */
    public function officePhone(?string $value): self
    {
        $this->instance->setOfficePhone($value);
        return $this;
    }

    /**
     * Unsets office phone field.
     */
    public function unsetOfficePhone(): self
    {
        $this->instance->unsetOfficePhone();
        return $this;
    }

    /**
     * Sets office ext phone field.
     */
    public function officeExtPhone(?string $value): self
    {
        $this->instance->setOfficeExtPhone($value);
        return $this;
    }

    /**
     * Unsets office ext phone field.
     */
    public function unsetOfficeExtPhone(): self
    {
        $this->instance->unsetOfficeExtPhone();
        return $this;
    }

    /**
     * Sets tz field.
     */
    public function tz(?string $value): self
    {
        $this->instance->setTz($value);
        return $this;
    }

    /**
     * Unsets tz field.
     */
    public function unsetTz(): self
    {
        $this->instance->unsetTz();
        return $this;
    }

    /**
     * Sets parent id field.
     */
    public function parentId(?string $value): self
    {
        $this->instance->setParentId($value);
        return $this;
    }

    /**
     * Unsets parent id field.
     */
    public function unsetParentId(): self
    {
        $this->instance->unsetParentId();
        return $this;
    }

    /**
     * Sets show contact notes field.
     */
    public function showContactNotes(?bool $value): self
    {
        $this->instance->setShowContactNotes($value);
        return $this;
    }

    /**
     * Sets show contact files field.
     */
    public function showContactFiles(?bool $value): self
    {
        $this->instance->setShowContactFiles($value);
        return $this;
    }

    /**
     * Sets branding domain url field.
     */
    public function brandingDomainUrl(?string $value): self
    {
        $this->instance->setBrandingDomainUrl($value);
        return $this;
    }

    /**
     * Unsets branding domain url field.
     */
    public function unsetBrandingDomainUrl(): self
    {
        $this->instance->unsetBrandingDomainUrl();
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
     * Initializes a new list 4 object.
     */
    public function build(): List4
    {
        return CoreHelper::clone($this->instance);
    }
}
