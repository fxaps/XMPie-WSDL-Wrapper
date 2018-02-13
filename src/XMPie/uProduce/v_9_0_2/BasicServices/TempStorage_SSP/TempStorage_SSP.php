<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\TempStorage_SSP;


/**
 * TempStorage Web Service.
 */
class TempStorage_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\CreateFile',
  'CreateFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\CreateFileResponse',
  'AppendFileBinaryStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\AppendFileBinaryStream',
  'AppendFileBinaryStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\AppendFileBinaryStreamResponse',
  'GetFilePath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFilePath',
  'GetFilePathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFilePathResponse',
  'GetFileBinaryStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFileBinaryStream',
  'GetFileBinaryStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFileBinaryStreamResponse',
  'GetFileBinaryStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFileBinaryStreamChunk',
  'GetFileBinaryStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFileBinaryStreamChunkResponse',
  'GetFileBinaryStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFileBinaryStreamSize',
  'GetFileBinaryStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFileBinaryStreamSizeResponse',
  'DeleteFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\DeleteFile',
  'DeleteFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\DeleteFileResponse',
  'CreateFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\CreateFolder',
  'CreateFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\CreateFolderResponse',
  'AddFileToFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\AddFileToFolder',
  'AddFileToFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\AddFileToFolderResponse',
  'DeleteFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\DeleteFolder',
  'DeleteFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\DeleteFolderResponse',
  'GetFolderFiles' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFolderFiles',
  'GetFolderFilesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\GetFolderFilesResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\ArrayOfString',
  'DeleteAll' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\DeleteAll',
  'DeleteAllResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\BasicServices\\TempStorage_SSP\\DeleteAllResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xmpiewsapi/TempStorage_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new temporary file (returns a file token).
     *
     * @param CreateFile $parameters
     * @return CreateFileResponse
     */
    public function CreateFile(CreateFile $parameters)
    {
      return $this->__soapCall('CreateFile', array($parameters));
    }

    /**
     * Append binary chunk data to a temporary file.
     *
     * @param AppendFileBinaryStream $parameters
     * @return AppendFileBinaryStreamResponse
     */
    public function AppendFileBinaryStream(AppendFileBinaryStream $parameters)
    {
      return $this->__soapCall('AppendFileBinaryStream', array($parameters));
    }

    /**
     * Returns the file path for the input file token
     *
     * @param GetFilePath $parameters
     * @return GetFilePathResponse
     */
    public function GetFilePath(GetFilePath $parameters)
    {
      return $this->__soapCall('GetFilePath', array($parameters));
    }

    /**
     * Get the entire content of a temporary file.
     *
     * @param GetFileBinaryStream $parameters
     * @return GetFileBinaryStreamResponse
     */
    public function GetFileBinaryStream(GetFileBinaryStream $parameters)
    {
      return $this->__soapCall('GetFileBinaryStream', array($parameters));
    }

    /**
     * Get a content chunk of a temporary file.
     *
     * @param GetFileBinaryStreamChunk $parameters
     * @return GetFileBinaryStreamChunkResponse
     */
    public function GetFileBinaryStreamChunk(GetFileBinaryStreamChunk $parameters)
    {
      return $this->__soapCall('GetFileBinaryStreamChunk', array($parameters));
    }

    /**
     * Get temporary file size.
     *
     * @param GetFileBinaryStreamSize $parameters
     * @return GetFileBinaryStreamSizeResponse
     */
    public function GetFileBinaryStreamSize(GetFileBinaryStreamSize $parameters)
    {
      return $this->__soapCall('GetFileBinaryStreamSize', array($parameters));
    }

    /**
     * Delete a temporary file.
     *
     * @param DeleteFile $parameters
     * @return DeleteFileResponse
     */
    public function DeleteFile(DeleteFile $parameters)
    {
      return $this->__soapCall('DeleteFile', array($parameters));
    }

    /**
     * Create new temporary folder (returns a folder token).
     *
     * @param CreateFolder $parameters
     * @return CreateFolderResponse
     */
    public function CreateFolder(CreateFolder $parameters)
    {
      return $this->__soapCall('CreateFolder', array($parameters));
    }

    /**
     * Add a temporary file to a temporary folder (returns a file token).
     *
     * @param AddFileToFolder $parameters
     * @return AddFileToFolderResponse
     */
    public function AddFileToFolder(AddFileToFolder $parameters)
    {
      return $this->__soapCall('AddFileToFolder', array($parameters));
    }

    /**
     * Delete a temporary folder (and all its content, if exist).
     *
     * @param DeleteFolder $parameters
     * @return DeleteFolderResponse
     */
    public function DeleteFolder(DeleteFolder $parameters)
    {
      return $this->__soapCall('DeleteFolder', array($parameters));
    }

    /**
     * Get a list of all temporary file tokens representing the files in the temporary folder.
     *
     * @param GetFolderFiles $parameters
     * @return GetFolderFilesResponse
     */
    public function GetFolderFiles(GetFolderFiles $parameters)
    {
      return $this->__soapCall('GetFolderFiles', array($parameters));
    }

    /**
     * delete all temporary content.
     *
     * @param DeleteAll $parameters
     * @return DeleteAllResponse
     */
    public function DeleteAll(DeleteAll $parameters)
    {
      return $this->__soapCall('DeleteAll', array($parameters));
    }

}
