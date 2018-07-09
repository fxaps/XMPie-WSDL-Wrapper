<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class ArrayOfEmailProviderParameter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmailProviderParameter[] $EmailProviderParameter
     */
    protected $EmailProviderParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmailProviderParameter[]
     */
    public function getEmailProviderParameter()
    {
      return $this->EmailProviderParameter;
    }

    /**
     * @param EmailProviderParameter[] $EmailProviderParameter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\ArrayOfEmailProviderParameter
     */
    public function setEmailProviderParameter(array $EmailProviderParameter = null)
    {
      $this->EmailProviderParameter = $EmailProviderParameter;
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
      return isset($this->EmailProviderParameter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmailProviderParameter
     */
    public function offsetGet($offset)
    {
      return $this->EmailProviderParameter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmailProviderParameter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EmailProviderParameter[] = $value;
      } else {
        $this->EmailProviderParameter[$offset] = $value;
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
      unset($this->EmailProviderParameter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmailProviderParameter Return the current element
     */
    public function current()
    {
      return current($this->EmailProviderParameter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmailProviderParameter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmailProviderParameter);
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
      reset($this->EmailProviderParameter);
    }

    /**
     * Countable implementation
     *
     * @return EmailProviderParameter Return count of elements
     */
    public function count()
    {
      return count($this->EmailProviderParameter);
    }

}
