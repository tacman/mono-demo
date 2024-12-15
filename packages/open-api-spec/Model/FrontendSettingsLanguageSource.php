<?php
/**
 * FrontendSettingsLanguageSource
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * LibreTranslate
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.3.11
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the FrontendSettingsLanguageSource model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */

class FrontendSettingsLanguageSource 
{
        /**
     * Language code
     *
     * @var string|null
     * @SerializedName("code")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $code = null;

    /**
     * Human-readable language name (in English)
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected string|null $name = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->code = $data['code'] ?? null;
        $this->name = $data['name'] ?? null;
    }

    /**
     * Gets code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets code.
     *
     * @param string|null $code  Language code
     *
     * @return $this
     */
    public function setCode(?string $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name  Human-readable language name (in English)
     *
     * @return $this
     */
    public function setName(string|null $name = null): self
    {
        $this->name = $name;

        return $this;
    }
}


