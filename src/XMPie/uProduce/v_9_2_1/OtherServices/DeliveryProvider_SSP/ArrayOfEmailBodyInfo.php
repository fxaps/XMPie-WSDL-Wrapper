<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\DeliveryProvider_SSP;

class ArrayOfEmailBodyInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmailBodyInfo[] $EmailBodyInfo
     */
    protected $EmailBodyInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmailBodyInfo[]
     */
    public function getEmailBodyInfo()
    {
      return $this->EmailBodyInfo;
    }

    /**
     * @param EmailBodyInfo[] $EmailBodyInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\DeliveryProvider_SSP\ArrayOfEmailBodyInfo
     */
    public function setEmailBodyInfo(array $EmailBodyInfo = null)
    {
      $this->EmailBodyInfo = $EmailBodyInfo;
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
      return isset($this->EmailBodyInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmailBodyInfo
     */
    public function offsetGet($offset)
    {
      return $this->EmailBodyInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmailBodyInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EmailBodyInfo[] = $value;
      } else {
        $this->EmailBodyInfo[$offset] = $value;
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
      unset($this->EmailBodyInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmailBodyInfo Return the current element
     */
    public function current()
    {
      return current($this->EmailBodyInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmailBodyInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmailBodyInfo);
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
      reset($this->EmailBodyInfo);
    }

    /**
     * Countable implementation
     *
     * @return EmailBodyInfo Return count of elements
     */
    public function count()
    {
      return count($this->EmailBodyInfo);
    }

}
