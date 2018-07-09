<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\RecipientTable_SSP;

class GetProperty
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
     * @var string $PropertyName
     */
    protected $PropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inRecipientTableID
     * @param string $PropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inRecipientTableID = null, $PropertyName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inRecipientTableID = $inRecipientTableID;
      $this->PropertyName = $PropertyName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\RecipientTable_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\RecipientTable_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\RecipientTable_SSP\GetProperty
     */
    public function setInRecipientTableID($inRecipientTableID)
    {
      $this->inRecipientTableID = $inRecipientTableID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
      return $this->PropertyName;
    }

    /**
     * @param string $PropertyName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\RecipientTable_SSP\GetProperty
     */
    public function setPropertyName($PropertyName)
    {
      $this->PropertyName = $PropertyName;
      return $this;
    }

}
