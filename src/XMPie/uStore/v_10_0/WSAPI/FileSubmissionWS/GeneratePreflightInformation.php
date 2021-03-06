<?php

namespace XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\FileSubmissionWS;

class GeneratePreflightInformation
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $pdfFilePath
     */
    protected $pdfFilePath = null;

    /**
     * @var string $xmlFilePath
     */
    protected $xmlFilePath = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $pdfFilePath
     * @param string $xmlFilePath
     */
    public function __construct($username = null, $password = null, $pdfFilePath = null, $xmlFilePath = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->pdfFilePath = $pdfFilePath;
      $this->xmlFilePath = $xmlFilePath;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPdfFilePath()
    {
      return $this->pdfFilePath;
    }

    /**
     * @param string $pdfFilePath
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation
     */
    public function setPdfFilePath($pdfFilePath)
    {
      $this->pdfFilePath = $pdfFilePath;
      return $this;
    }

    /**
     * @return string
     */
    public function getXmlFilePath()
    {
      return $this->xmlFilePath;
    }

    /**
     * @param string $xmlFilePath
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation
     */
    public function setXmlFilePath($xmlFilePath)
    {
      $this->xmlFilePath = $xmlFilePath;
      return $this;
    }

}
