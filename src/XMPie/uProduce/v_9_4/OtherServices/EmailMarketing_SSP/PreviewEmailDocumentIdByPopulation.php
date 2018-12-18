<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentIdByPopulation
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
     * @var string $inPopulationGUID
     */
    protected $inPopulationGUID = null;

    /**
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var boolean $inIsHTML
     */
    protected $inIsHTML = null;

    /**
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPopulationGUID
     * @param string $inDocumentID
     * @param boolean $inIsHTML
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationGUID = null, $inDocumentID = null, $inIsHTML = null, $inRecipientID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPopulationGUID = $inPopulationGUID;
      $this->inDocumentID = $inDocumentID;
      $this->inIsHTML = $inIsHTML;
      $this->inRecipientID = $inRecipientID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulation
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPopulationGUID()
    {
      return $this->inPopulationGUID;
    }

    /**
     * @param string $inPopulationGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulation
     */
    public function setInPopulationGUID($inPopulationGUID)
    {
      $this->inPopulationGUID = $inPopulationGUID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
      return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulation
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsHTML()
    {
      return $this->inIsHTML;
    }

    /**
     * @param boolean $inIsHTML
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulation
     */
    public function setInIsHTML($inIsHTML)
    {
      $this->inIsHTML = $inIsHTML;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
      return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulation
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

}
