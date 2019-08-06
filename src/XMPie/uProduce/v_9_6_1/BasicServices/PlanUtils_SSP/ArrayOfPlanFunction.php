<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP;

class ArrayOfPlanFunction implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanFunction[] $PlanFunction
     */
    protected $PlanFunction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanFunction[]
     */
    public function getPlanFunction()
    {
      return $this->PlanFunction;
    }

    /**
     * @param PlanFunction[] $PlanFunction
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\ArrayOfPlanFunction
     */
    public function setPlanFunction(array $PlanFunction = null)
    {
      $this->PlanFunction = $PlanFunction;
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
      return isset($this->PlanFunction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanFunction
     */
    public function offsetGet($offset)
    {
      return $this->PlanFunction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanFunction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanFunction[] = $value;
      } else {
        $this->PlanFunction[$offset] = $value;
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
      unset($this->PlanFunction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanFunction Return the current element
     */
    public function current()
    {
      return current($this->PlanFunction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanFunction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanFunction);
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
      reset($this->PlanFunction);
    }

    /**
     * Countable implementation
     *
     * @return PlanFunction Return count of elements
     */
    public function count()
    {
      return count($this->PlanFunction);
    }

}
