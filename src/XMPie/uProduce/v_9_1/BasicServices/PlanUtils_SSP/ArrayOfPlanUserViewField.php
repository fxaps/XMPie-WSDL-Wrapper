<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class ArrayOfPlanUserViewField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanUserViewField[] $PlanUserViewField
     */
    protected $PlanUserViewField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanUserViewField[]
     */
    public function getPlanUserViewField()
    {
      return $this->PlanUserViewField;
    }

    /**
     * @param PlanUserViewField[] $PlanUserViewField
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\ArrayOfPlanUserViewField
     */
    public function setPlanUserViewField(array $PlanUserViewField = null)
    {
      $this->PlanUserViewField = $PlanUserViewField;
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
      return isset($this->PlanUserViewField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanUserViewField
     */
    public function offsetGet($offset)
    {
      return $this->PlanUserViewField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanUserViewField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanUserViewField[] = $value;
      } else {
        $this->PlanUserViewField[$offset] = $value;
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
      unset($this->PlanUserViewField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanUserViewField Return the current element
     */
    public function current()
    {
      return current($this->PlanUserViewField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanUserViewField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanUserViewField);
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
      reset($this->PlanUserViewField);
    }

    /**
     * Countable implementation
     *
     * @return PlanUserViewField Return count of elements
     */
    public function count()
    {
      return count($this->PlanUserViewField);
    }

}
