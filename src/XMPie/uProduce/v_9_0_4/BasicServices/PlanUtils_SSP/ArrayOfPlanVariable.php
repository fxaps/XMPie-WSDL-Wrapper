<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\PlanUtils_SSP;

class ArrayOfPlanVariable implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanVariable[] $PlanVariable
     */
    protected $PlanVariable = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanVariable[]
     */
    public function getPlanVariable()
    {
      return $this->PlanVariable;
    }

    /**
     * @param PlanVariable[] $PlanVariable
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\PlanUtils_SSP\ArrayOfPlanVariable
     */
    public function setPlanVariable(array $PlanVariable = null)
    {
      $this->PlanVariable = $PlanVariable;
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
      return isset($this->PlanVariable[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanVariable
     */
    public function offsetGet($offset)
    {
      return $this->PlanVariable[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanVariable $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanVariable[] = $value;
      } else {
        $this->PlanVariable[$offset] = $value;
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
      unset($this->PlanVariable[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanVariable Return the current element
     */
    public function current()
    {
      return current($this->PlanVariable);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanVariable);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanVariable);
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
      reset($this->PlanVariable);
    }

    /**
     * Countable implementation
     *
     * @return PlanVariable Return count of elements
     */
    public function count()
    {
      return count($this->PlanVariable);
    }

}
