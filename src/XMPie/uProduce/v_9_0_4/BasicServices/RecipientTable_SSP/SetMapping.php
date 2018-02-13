<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP;

class SetMapping
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
     * @var FieldMappings $inFieldMapping
     */
    protected $inFieldMapping = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inRecipientTableID
     * @param FieldMappings $inFieldMapping
     */
    public function __construct($inUsername = null, $inPassword = null, $inRecipientTableID = null, $inFieldMapping = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inRecipientTableID = $inRecipientTableID;
      $this->inFieldMapping = $inFieldMapping;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP\SetMapping
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP\SetMapping
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP\SetMapping
     */
    public function setInRecipientTableID($inRecipientTableID)
    {
      $this->inRecipientTableID = $inRecipientTableID;
      return $this;
    }

    /**
     * @return FieldMappings
     */
    public function getInFieldMapping()
    {
      return $this->inFieldMapping;
    }

    /**
     * @param FieldMappings $inFieldMapping
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP\SetMapping
     */
    public function setInFieldMapping($inFieldMapping)
    {
      $this->inFieldMapping = $inFieldMapping;
      return $this;
    }

}
