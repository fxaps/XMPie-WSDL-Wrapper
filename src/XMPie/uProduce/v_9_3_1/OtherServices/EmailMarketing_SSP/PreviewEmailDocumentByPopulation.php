<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentByPopulation
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
     * @var string $inDocument
     */
    protected $inDocument = null;

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
     * @param string $inDocument
     * @param boolean $inIsHTML
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationGUID = null, $inDocument = null, $inIsHTML = null, $inRecipientID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPopulationGUID = $inPopulationGUID;
      $this->inDocument = $inDocument;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulation
     */
    public function setInPopulationGUID($inPopulationGUID)
    {
      $this->inPopulationGUID = $inPopulationGUID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocument()
    {
      return $this->inDocument;
    }

    /**
     * @param string $inDocument
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulation
     */
    public function setInDocument($inDocument)
    {
      $this->inDocument = $inDocument;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulation
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

}
