<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsConversationItem1Purpose extends \ArrayObject
{
    /**
     * @var string
     */
    protected $creator;
    /**
     * @var int
     */
    protected $lastSet;
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return int
     */
    public function getLastSet(): ?int
    {
        return $this->lastSet;
    }

    /**
     * @param int $lastSet
     *
     * @return self
     */
    public function setLastSet(?int $lastSet): self
    {
        $this->lastSet = $lastSet;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
