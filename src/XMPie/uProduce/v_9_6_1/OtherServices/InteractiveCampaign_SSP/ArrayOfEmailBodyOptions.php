<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP;

class ArrayOfEmailBodyOptions implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmailBodyOptions[] $EmailBodyOptions
     */
    protected $EmailBodyOptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmailBodyOptions[]
     */
    public function getEmailBodyOptions()
    {
      return $this->EmailBodyOptions;
    }

    /**
     * @param EmailBodyOptions[] $EmailBodyOptions
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\ArrayOfEmailBodyOptions
     */
    public function setEmailBodyOptions(array $EmailBodyOptions = null)
    {
      $this->EmailBodyOptions = $EmailBodyOptions;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->EmailBodyOptions[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmailBodyOptions
     */
    public function offsetGet($offset)
    {
      return $this->EmailBodyOptions[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmailBodyOptions $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EmailBodyOptions[] = $value;
      } else {
        $this->EmailBodyOptions[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmailBodyOptions[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmailBodyOptions Return the current element
     */
    public function current()
    {
      return current($this->EmailBodyOptions);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmailBodyOptions);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmailBodyOptions);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->EmailBodyOptions);
    }

    /**
     * Countable implementation
     *
     * @return EmailBodyOptions Return count of elements
     */
    public function count()
    {
      return count($this->EmailBodyOptions);
    }

}
