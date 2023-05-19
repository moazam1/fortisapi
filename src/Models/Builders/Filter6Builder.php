<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Filter6;

/**
 * Builder for model Filter6
 *
 * @see Filter6
 */
class Filter6Builder
{
    /**
     * @var Filter6
     */
    private $instance;

    private function __construct(Filter6 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new filter 6 Builder object.
     */
    public static function init(): self
    {
        return new self(new Filter6());
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
     * Sets title field.
     */
    public function title(?array $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets cc product transaction id field.
     */
    public function ccProductTransactionId(?array $value): self
    {
        $this->instance->setCcProductTransactionId($value);
        return $this;
    }

    /**
     * Sets ach product transaction id field.
     */
    public function achProductTransactionId(?array $value): self
    {
        $this->instance->setAchProductTransactionId($value);
        return $this;
    }

    /**
     * Sets due date field.
     */
    public function dueDate(?array $value): self
    {
        $this->instance->setDueDate($value);
        return $this;
    }

    /**
     * Sets item list field.
     */
    public function itemList(?array $value): self
    {
        $this->instance->setItemList($value);
        return $this;
    }

    /**
     * Sets allow overpayment field.
     */
    public function allowOverpayment(?array $value): self
    {
        $this->instance->setAllowOverpayment($value);
        return $this;
    }

    /**
     * Sets bank funded only override field.
     */
    public function bankFundedOnlyOverride(?array $value): self
    {
        $this->instance->setBankFundedOnlyOverride($value);
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
     * Sets contact id field.
     */
    public function contactId(?array $value): self
    {
        $this->instance->setContactId($value);
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
     * Sets quick invoice api id field.
     */
    public function quickInvoiceApiId(?array $value): self
    {
        $this->instance->setQuickInvoiceApiId($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?array $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets expire date field.
     */
    public function expireDate(?array $value): self
    {
        $this->instance->setExpireDate($value);
        return $this;
    }

    /**
     * Sets allow partial pay field.
     */
    public function allowPartialPay(?array $value): self
    {
        $this->instance->setAllowPartialPay($value);
        return $this;
    }

    /**
     * Sets attach files to email field.
     */
    public function attachFilesToEmail(?array $value): self
    {
        $this->instance->setAttachFilesToEmail($value);
        return $this;
    }

    /**
     * Sets send email field.
     */
    public function sendEmail(?array $value): self
    {
        $this->instance->setSendEmail($value);
        return $this;
    }

    /**
     * Sets invoice number field.
     */
    public function invoiceNumber(?array $value): self
    {
        $this->instance->setInvoiceNumber($value);
        return $this;
    }

    /**
     * Sets item header field.
     */
    public function itemHeader(?array $value): self
    {
        $this->instance->setItemHeader($value);
        return $this;
    }

    /**
     * Sets item footer field.
     */
    public function itemFooter(?array $value): self
    {
        $this->instance->setItemFooter($value);
        return $this;
    }

    /**
     * Sets amount due field.
     */
    public function amountDue(?array $value): self
    {
        $this->instance->setAmountDue($value);
        return $this;
    }

    /**
     * Sets notification email field.
     */
    public function notificationEmail(?array $value): self
    {
        $this->instance->setNotificationEmail($value);
        return $this;
    }

    /**
     * Sets status id field.
     */
    public function statusId(?array $value): self
    {
        $this->instance->setStatusId($value);
        return $this;
    }

    /**
     * Sets status code field.
     */
    public function statusCode(?array $value): self
    {
        $this->instance->setStatusCode($value);
        return $this;
    }

    /**
     * Sets note field.
     */
    public function note(?array $value): self
    {
        $this->instance->setNote($value);
        return $this;
    }

    /**
     * Sets notification days before due date field.
     */
    public function notificationDaysBeforeDueDate(?array $value): self
    {
        $this->instance->setNotificationDaysBeforeDueDate($value);
        return $this;
    }

    /**
     * Sets notification days after due date field.
     */
    public function notificationDaysAfterDueDate(?array $value): self
    {
        $this->instance->setNotificationDaysAfterDueDate($value);
        return $this;
    }

    /**
     * Sets notification on due date field.
     */
    public function notificationOnDueDate(?array $value): self
    {
        $this->instance->setNotificationOnDueDate($value);
        return $this;
    }

    /**
     * Sets send text to pay field.
     */
    public function sendTextToPay(?array $value): self
    {
        $this->instance->setSendTextToPay($value);
        return $this;
    }

    /**
     * Sets files field.
     */
    public function files(?array $value): self
    {
        $this->instance->setFiles($value);
        return $this;
    }

    /**
     * Sets remaining balance field.
     */
    public function remainingBalance(?array $value): self
    {
        $this->instance->setRemainingBalance($value);
        return $this;
    }

    /**
     * Sets single payment min amount field.
     */
    public function singlePaymentMinAmount(?array $value): self
    {
        $this->instance->setSinglePaymentMinAmount($value);
        return $this;
    }

    /**
     * Sets single payment max amount field.
     */
    public function singlePaymentMaxAmount(?array $value): self
    {
        $this->instance->setSinglePaymentMaxAmount($value);
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
     * Sets created user id field.
     */
    public function createdUserId(?array $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Sets modified user id field.
     */
    public function modifiedUserId(?array $value): self
    {
        $this->instance->setModifiedUserId($value);
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
     * Sets payment status id field.
     */
    public function paymentStatusId(?array $value): self
    {
        $this->instance->setPaymentStatusId($value);
        return $this;
    }

    /**
     * Sets is active field.
     */
    public function isActive(?array $value): self
    {
        $this->instance->setIsActive($value);
        return $this;
    }

    /**
     * Sets quick invoice setting field.
     */
    public function quickInvoiceSetting(?array $value): self
    {
        $this->instance->setQuickInvoiceSetting($value);
        return $this;
    }

    /**
     * Sets tags field.
     */
    public function tags(?array $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Sets quick invoice views field.
     */
    public function quickInvoiceViews(?array $value): self
    {
        $this->instance->setQuickInvoiceViews($value);
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
     * Sets created user field.
     */
    public function createdUser(?array $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets modified user field.
     */
    public function modifiedUser(?array $value): self
    {
        $this->instance->setModifiedUser($value);
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
     * Sets contact field.
     */
    public function contact(?array $value): self
    {
        $this->instance->setContact($value);
        return $this;
    }

    /**
     * Sets log emails field.
     */
    public function logEmails(?array $value): self
    {
        $this->instance->setLogEmails($value);
        return $this;
    }

    /**
     * Sets log sms field.
     */
    public function logSms(?array $value): self
    {
        $this->instance->setLogSms($value);
        return $this;
    }

    /**
     * Sets transactions field.
     */
    public function transactions(?array $value): self
    {
        $this->instance->setTransactions($value);
        return $this;
    }

    /**
     * Sets cc product transaction field.
     */
    public function ccProductTransaction(?array $value): self
    {
        $this->instance->setCcProductTransaction($value);
        return $this;
    }

    /**
     * Sets ach product transaction field.
     */
    public function achProductTransaction(?array $value): self
    {
        $this->instance->setAchProductTransaction($value);
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
     * Sets payment url field.
     */
    public function paymentUrl(?array $value): self
    {
        $this->instance->setPaymentUrl($value);
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
     * Initializes a new filter 6 object.
     */
    public function build(): Filter6
    {
        return CoreHelper::clone($this->instance);
    }
}
