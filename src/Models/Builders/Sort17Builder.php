<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Sort17;

/**
 * Builder for model Sort17
 *
 * @see Sort17
 */
class Sort17Builder
{
    /**
     * @var Sort17
     */
    private $instance;

    private function __construct(Sort17 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sort 17 Builder object.
     */
    public static function init(): self
    {
        return new self(new Sort17());
    }

    /**
     * Sets location id field.
     */
    public function locationId(?array $value): self
    {
        $this->instance->setLocationId($value);
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
     * Sets contact api id field.
     */
    public function contactApiId(?array $value): self
    {
        $this->instance->setContactApiId($value);
        return $this;
    }

    /**
     * Sets first name field.
     */
    public function firstName(?array $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     */
    public function lastName(?array $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets cell phone field.
     */
    public function cellPhone(?array $value): self
    {
        $this->instance->setCellPhone($value);
        return $this;
    }

    /**
     * Sets balance field.
     */
    public function balance(?array $value): self
    {
        $this->instance->setBalance($value);
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
     * Sets company name field.
     */
    public function companyName(?array $value): self
    {
        $this->instance->setCompanyName($value);
        return $this;
    }

    /**
     * Sets header message field.
     */
    public function headerMessage(?array $value): self
    {
        $this->instance->setHeaderMessage($value);
        return $this;
    }

    /**
     * Sets date of birth field.
     */
    public function dateOfBirth(?array $value): self
    {
        $this->instance->setDateOfBirth($value);
        return $this;
    }

    /**
     * Sets email trx receipt field.
     */
    public function emailTrxReceipt(?array $value): self
    {
        $this->instance->setEmailTrxReceipt($value);
        return $this;
    }

    /**
     * Sets home phone field.
     */
    public function homePhone(?array $value): self
    {
        $this->instance->setHomePhone($value);
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
     * Sets office phone ext field.
     */
    public function officePhoneExt(?array $value): self
    {
        $this->instance->setOfficePhoneExt($value);
        return $this;
    }

    /**
     * Sets header message type field.
     */
    public function headerMessageType(?array $value): self
    {
        $this->instance->setHeaderMessageType($value);
        return $this;
    }

    /**
     * Sets update if exists field.
     */
    public function updateIfExists(?array $value): self
    {
        $this->instance->setUpdateIfExists($value);
        return $this;
    }

    /**
     * Sets contact c 1 field.
     */
    public function contactC1(?array $value): self
    {
        $this->instance->setContactC1($value);
        return $this;
    }

    /**
     * Sets contact c 2 field.
     */
    public function contactC2(?array $value): self
    {
        $this->instance->setContactC2($value);
        return $this;
    }

    /**
     * Sets contact c 3 field.
     */
    public function contactC3(?array $value): self
    {
        $this->instance->setContactC3($value);
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
     * Sets email field.
     */
    public function email(?array $value): self
    {
        $this->instance->setEmail($value);
        return $this;
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
    public function createdTs(?array $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     */
    public function modifiedTs(?array $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets active field.
     */
    public function active(?array $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets received emails field.
     */
    public function receivedEmails(?array $value): self
    {
        $this->instance->setReceivedEmails($value);
        return $this;
    }

    /**
     * Sets is deletable field.
     */
    public function isDeletable(?array $value): self
    {
        $this->instance->setIsDeletable($value);
        return $this;
    }

    /**
     * Sets location field.
     */
    public function location(?array $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets user field.
     */
    public function user(?array $value): self
    {
        $this->instance->setUser($value);
        return $this;
    }

    /**
     * Sets recurrings field.
     */
    public function recurrings(?array $value): self
    {
        $this->instance->setRecurrings($value);
        return $this;
    }

    /**
     * Sets email blacklist field.
     */
    public function emailBlacklist(?array $value): self
    {
        $this->instance->setEmailBlacklist($value);
        return $this;
    }

    /**
     * Sets sms blacklist field.
     */
    public function smsBlacklist(?array $value): self
    {
        $this->instance->setSmsBlacklist($value);
        return $this;
    }

    /**
     * Sets changelogs field.
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
        return $this;
    }

    /**
     * Sets postback logs field.
     */
    public function postbackLogs(?array $value): self
    {
        $this->instance->setPostbackLogs($value);
        return $this;
    }

    /**
     * Sets created user field.
     */
    public function createdUser(?array $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets parent field.
     */
    public function parent(?array $value): self
    {
        $this->instance->setParent($value);
        return $this;
    }

    /**
     * Sets children field.
     */
    public function children(?array $value): self
    {
        $this->instance->setChildren($value);
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
     * Initializes a new sort 17 object.
     */
    public function build(): Sort17
    {
        return CoreHelper::clone($this->instance);
    }
}
