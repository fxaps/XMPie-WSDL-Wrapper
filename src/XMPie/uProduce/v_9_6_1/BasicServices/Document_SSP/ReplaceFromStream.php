<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP;

class ReplaceFromStream
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var string $inStream
     */
    protected $inStream = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param string $inStream
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inStream = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inStream = $inStream;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\ReplaceFromStream
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\ReplaceFromStream
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\ReplaceFromStream
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInStream()
    {
      return $this->inStream;
    }

    /**
     * @param string $inStream
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\ReplaceFromStream
     */
    public function setInStream($inStream)
    {
      $this->inStream = $inStream;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\ReplaceFromStream
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
