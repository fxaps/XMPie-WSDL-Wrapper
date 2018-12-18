<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentByRun
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
     * @var string $inRunGUID
     */
    protected $inRunGUID = null;

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
     * @param string $inRunGUID
     * @param string $inDocument
     * @param boolean $inIsHTML
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inRunGUID = null, $inDocument = null, $inIsHTML = null, $inRecipientID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inRunGUID = $inRunGUID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRun
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRunGUID()
    {
      return $this->inRunGUID;
    }

    /**
     * @param string $inRunGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRun
     */
    public function setInRunGUID($inRunGUID)
    {
      $this->inRunGUID = $inRunGUID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRun
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

}
