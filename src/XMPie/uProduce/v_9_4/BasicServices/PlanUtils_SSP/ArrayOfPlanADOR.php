<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP;

class ArrayOfPlanADOR implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanADOR[] $PlanADOR
     */
    protected $PlanADOR = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanADOR[]
     */
    public function getPlanADOR()
    {
      return $this->PlanADOR;
    }

    /**
     * @param PlanADOR[] $PlanADOR
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\ArrayOfPlanADOR
     */
    public function setPlanADOR(array $PlanADOR = null)
    {
      $this->PlanADOR = $PlanADOR;
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
      return isset($this->PlanADOR[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanADOR
     */
    public function offsetGet($offset)
    {
      return $this->PlanADOR[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanADOR $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanADOR[] = $value;
      } else {
        $this->PlanADOR[$offset] = $value;
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
      unset($this->PlanADOR[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanADOR Return the current element
     */
    public function current()
    {
      return current($this->PlanADOR);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanADOR);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanADOR);
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
      reset($this->PlanADOR);
    }

    /**
     * Countable implementation
     *
     * @return PlanADOR Return count of elements
     */
    public function count()
    {
      return count($this->PlanADOR);
    }

}
