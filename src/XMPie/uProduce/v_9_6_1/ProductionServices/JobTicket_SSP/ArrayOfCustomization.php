<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class ArrayOfCustomization implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Customization[] $Customization
     */
    protected $Customization = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Customization[]
     */
    public function getCustomization()
    {
      return $this->Customization;
    }

    /**
     * @param Customization[] $Customization
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\ArrayOfCustomization
     */
    public function setCustomization(array $Customization = null)
    {
      $this->Customization = $Customization;
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
      return isset($this->Customization[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Customization
     */
    public function offsetGet($offset)
    {
      return $this->Customization[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Customization $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Customization[] = $value;
      } else {
        $this->Customization[$offset] = $value;
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
      unset($this->Customization[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Customization Return the current element
     */
    public function current()
    {
      return current($this->Customization);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Customization);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Customization);
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
      reset($this->Customization);
    }

    /**
     * Countable implementation
     *
     * @return Customization Return count of elements
     */
    public function count()
    {
      return count($this->Customization);
    }

}
