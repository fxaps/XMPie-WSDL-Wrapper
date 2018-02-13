<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class ArrayOfRecipientsInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RecipientsInfo[] $RecipientsInfo
     */
    protected $RecipientsInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecipientsInfo[]
     */
    public function getRecipientsInfo()
    {
      return $this->RecipientsInfo;
    }

    /**
     * @param RecipientsInfo[] $RecipientsInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\ArrayOfRecipientsInfo
     */
    public function setRecipientsInfo(array $RecipientsInfo = null)
    {
      $this->RecipientsInfo = $RecipientsInfo;
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
      return isset($this->RecipientsInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RecipientsInfo
     */
    public function offsetGet($offset)
    {
      return $this->RecipientsInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RecipientsInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RecipientsInfo[] = $value;
      } else {
        $this->RecipientsInfo[$offset] = $value;
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
      unset($this->RecipientsInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RecipientsInfo Return the current element
     */
    public function current()
    {
      return current($this->RecipientsInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RecipientsInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RecipientsInfo);
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
      reset($this->RecipientsInfo);
    }

    /**
     * Countable implementation
     *
     * @return RecipientsInfo Return count of elements
     */
    public function count()
    {
      return count($this->RecipientsInfo);
    }

}
