<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Links;
use FortisAPILib\Models\Pagination;
use FortisAPILib\Models\ResponseLocationInfosCollection;
use FortisAPILib\Models\Sort;

/**
 * Builder for model ResponseLocationInfosCollection
 *
 * @see ResponseLocationInfosCollection
 */
class ResponseLocationInfosCollectionBuilder
{
    /**
     * @var ResponseLocationInfosCollection
     */
    private $instance;

    private function __construct(ResponseLocationInfosCollection $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response location infos collection Builder object.
     */
    public static function init(array $list): self
    {
        return new self(new ResponseLocationInfosCollection($list));
    }

    /**
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets pagination field.
     */
    public function pagination(?Pagination $value): self
    {
        $this->instance->setPagination($value);
        return $this;
    }

    /**
     * Sets sort field.
     */
    public function sort(?Sort $value): self
    {
        $this->instance->setSort($value);
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
     * Initializes a new response location infos collection object.
     */
    public function build(): ResponseLocationInfosCollection
    {
        return CoreHelper::clone($this->instance);
    }
}
