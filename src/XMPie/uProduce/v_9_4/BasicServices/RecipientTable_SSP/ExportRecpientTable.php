<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP;

class ExportRecpientTable
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inRecipientTableID
     */
    protected $inRecipientTableID = null;

    /**
     * @var string $inFilter
     */
    protected $inFilter = null;

    /**
     * @var ArrayOfDataParameter $inParamArray
     */
    protected $inParamArray = null;

    /**
     * @var string $inOutputType
     */
    protected $inOutputType = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inRecipientTableID
     * @param string $inFilter
     * @param ArrayOfDataParameter $inParamArray
     * @param string $inOutputType
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inRecipientTableID = null, $inFilter = null, $inParamArray = null, $inOutputType = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inRecipientTableID = $inRecipientTableID;
      $this->inFilter = $inFilter;
      $this->inParamArray = $inParamArray;
      $this->inOutputType = $inOutputType;
      $this->inProps = $inProps;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\ExportRecpientTable
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\ExportRecpientTable
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientTableID()
    {
      return $this->inRecipientTableID;
    }

    /**
     * @param string $inRecipientTableID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\ExportRecpientTable
     */
    public function setInRecipientTableID($inRecipientTableID)
    {
      $this->inRecipientTableID = $inRecipientTableID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFilter()
    {
      return $this->inFilter;
    }

    /**
     * @param string $inFilter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\ExportRecpientTable
     */
    public function setInFilter($inFilter)
    {
      $this->inFilter = $inFilter;
      return $this;
    }

    /**
     * @return ArrayOfDataParameter
     */
    public function getInParamArray()
    {
      return $this->inParamArray;
    }

    /**
     * @param ArrayOfDataParameter $inParamArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\ExportRecpientTable
     */
    public function setInParamArray($inParamArray)
    {
      $this->inParamArray = $inParamArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOutputType()
    {
      return $this->inOutputType;
    }

    /**
     * @param string $inOutputType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\ExportRecpientTable
     */
    public function setInOutputType($inOutputType)
    {
      $this->inOutputType = $inOutputType;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\ExportRecpientTable
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
