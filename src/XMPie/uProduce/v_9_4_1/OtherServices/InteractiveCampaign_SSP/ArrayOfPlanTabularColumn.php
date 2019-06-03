<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP;

class ArrayOfPlanTabularColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanTabularColumn[] $PlanTabularColumn
     */
    protected $PlanTabularColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanTabularColumn[]
     */
    public function getPlanTabularColumn()
    {
      return $this->PlanTabularColumn;
    }

    /**
     * @param PlanTabularColumn[] $PlanTabularColumn
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\ArrayOfPlanTabularColumn
     */
    public function setPlanTabularColumn(array $PlanTabularColumn = null)
    {
      $this->PlanTabularColumn = $PlanTabularColumn;
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
      return isset($this->PlanTabularColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanTabularColumn
     */
    public function offsetGet($offset)
    {
      return $this->PlanTabularColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanTabularColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PlanTabularColumn[] = $value;
      } else {
        $this->PlanTabularColumn[$offset] = $value;
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
      unset($this->PlanTabularColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanTabularColumn Return the current element
     */
    public function current()
    {
      return current($this->PlanTabularColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PlanTabularColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PlanTabularColumn);
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
      reset($this->PlanTabularColumn);
    }

    /**
     * Countable implementation
     *
     * @return PlanTabularColumn Return count of elements
     */
    public function count()
    {
      return count($this->PlanTabularColumn);
    }

}
