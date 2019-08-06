<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\SystemManager_SSP;

class ArrayOfCloudSubscription implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CloudSubscription[] $CloudSubscription
     */
    protected $CloudSubscription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CloudSubscription[]
     */
    public function getCloudSubscription()
    {
      return $this->CloudSubscription;
    }

    /**
     * @param CloudSubscription[] $CloudSubscription
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\SystemManager_SSP\ArrayOfCloudSubscription
     */
    public function setCloudSubscription(array $CloudSubscription = null)
    {
      $this->CloudSubscription = $CloudSubscription;
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
      return isset($this->CloudSubscription[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CloudSubscription
     */
    public function offsetGet($offset)
    {
      return $this->CloudSubscription[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CloudSubscription $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CloudSubscription[] = $value;
      } else {
        $this->CloudSubscription[$offset] = $value;
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
      unset($this->CloudSubscription[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CloudSubscription Return the current element
     */
    public function current()
    {
      return current($this->CloudSubscription);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CloudSubscription);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CloudSubscription);
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
      reset($this->CloudSubscription);
    }

    /**
     * Countable implementation
     *
     * @return CloudSubscription Return count of elements
     */
    public function count()
    {
      return count($this->CloudSubscription);
    }

}
