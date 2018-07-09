<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class ArrayOfPlanDataField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanDataField[] $PlanDataField
     */
    protected $PlanDataField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanDataField[]
     */
    public function getPlanDataField()
    {
      return $this->PlanDataField;
    }

    /**
     * @param PlanDataField[] $PlanDataField
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\ArrayOfPlanDataField
     */
    public function setPlanDataField(array $PlanDataField = null)
    {
      $this->PlanDataField = $PlanDataField;
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
      return isset($this->PlanDataField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanDataField
     */
    public function offsetGet($offset)
    {
      return $this->PlanDataField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanDataField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanDataField[] = $value;
      } else {
        $this->PlanDataField[$offset] = $value;
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
      unset($this->PlanDataField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanDataField Return the current element
     */
    public function current()
    {
      return current($this->PlanDataField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanDataField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanDataField);
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
      reset($this->PlanDataField);
    }

    /**
     * Countable implementation
     *
     * @return PlanDataField Return count of elements
     */
    public function count()
    {
      return count($this->PlanDataField);
    }

}
