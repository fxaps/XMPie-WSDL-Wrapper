<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\CreateFile;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\CreateFileResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\AppendFileBinaryStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\AppendFileBinaryStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFilePath;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFilePathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFileBinaryStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFileBinaryStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFileBinaryStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFileBinaryStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFile;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFileResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\CreateFolder;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\CreateFolderResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\AddFileToFolder;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\AddFileToFolderResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFolder;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFolderResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFolderFiles;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\GetFolderFilesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteAll;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteAllResponse;


class FabricateTempStorage_SSP
{
    private $paramAutoSet;
    
    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateFile
    */
    public function CreateFile($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFile = new CreateFile();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFile, $methodName)) {
                $CreateFile->$methodName($paramValue);
            }
        }
        return $CreateFile;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateFileResponse
    */
    public function CreateFileResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFileResponse = new CreateFileResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFileResponse, $methodName)) {
                $CreateFileResponse->$methodName($paramValue);
            }
        }
        return $CreateFileResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AppendFileBinaryStream
    */
    public function AppendFileBinaryStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AppendFileBinaryStream = new AppendFileBinaryStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AppendFileBinaryStream, $methodName)) {
                $AppendFileBinaryStream->$methodName($paramValue);
            }
        }
        return $AppendFileBinaryStream;
    }


   /**
    * @param array $paramAutoSet
    * @return AppendFileBinaryStreamResponse
    */
    public function AppendFileBinaryStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AppendFileBinaryStreamResponse = new AppendFileBinaryStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AppendFileBinaryStreamResponse, $methodName)) {
                $AppendFileBinaryStreamResponse->$methodName($paramValue);
            }
        }
        return $AppendFileBinaryStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFilePath
    */
    public function GetFilePath($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFilePath = new GetFilePath();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFilePath, $methodName)) {
                $GetFilePath->$methodName($paramValue);
            }
        }
        return $GetFilePath;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFilePathResponse
    */
    public function GetFilePathResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFilePathResponse = new GetFilePathResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFilePathResponse, $methodName)) {
                $GetFilePathResponse->$methodName($paramValue);
            }
        }
        return $GetFilePathResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFileBinaryStream
    */
    public function GetFileBinaryStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileBinaryStream = new GetFileBinaryStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileBinaryStream, $methodName)) {
                $GetFileBinaryStream->$methodName($paramValue);
            }
        }
        return $GetFileBinaryStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFileBinaryStreamResponse
    */
    public function GetFileBinaryStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileBinaryStreamResponse = new GetFileBinaryStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileBinaryStreamResponse, $methodName)) {
                $GetFileBinaryStreamResponse->$methodName($paramValue);
            }
        }
        return $GetFileBinaryStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFileBinaryStreamChunk
    */
    public function GetFileBinaryStreamChunk($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileBinaryStreamChunk = new GetFileBinaryStreamChunk();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileBinaryStreamChunk, $methodName)) {
                $GetFileBinaryStreamChunk->$methodName($paramValue);
            }
        }
        return $GetFileBinaryStreamChunk;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFileBinaryStreamChunkResponse
    */
    public function GetFileBinaryStreamChunkResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileBinaryStreamChunkResponse = new GetFileBinaryStreamChunkResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileBinaryStreamChunkResponse, $methodName)) {
                $GetFileBinaryStreamChunkResponse->$methodName($paramValue);
            }
        }
        return $GetFileBinaryStreamChunkResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFileBinaryStreamSize
    */
    public function GetFileBinaryStreamSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileBinaryStreamSize = new GetFileBinaryStreamSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileBinaryStreamSize, $methodName)) {
                $GetFileBinaryStreamSize->$methodName($paramValue);
            }
        }
        return $GetFileBinaryStreamSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFileBinaryStreamSizeResponse
    */
    public function GetFileBinaryStreamSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileBinaryStreamSizeResponse = new GetFileBinaryStreamSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileBinaryStreamSizeResponse, $methodName)) {
                $GetFileBinaryStreamSizeResponse->$methodName($paramValue);
            }
        }
        return $GetFileBinaryStreamSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFile
    */
    public function DeleteFile($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFile = new DeleteFile();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFile, $methodName)) {
                $DeleteFile->$methodName($paramValue);
            }
        }
        return $DeleteFile;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFileResponse
    */
    public function DeleteFileResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFileResponse = new DeleteFileResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFileResponse, $methodName)) {
                $DeleteFileResponse->$methodName($paramValue);
            }
        }
        return $DeleteFileResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateFolder
    */
    public function CreateFolder($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFolder = new CreateFolder();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFolder, $methodName)) {
                $CreateFolder->$methodName($paramValue);
            }
        }
        return $CreateFolder;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateFolderResponse
    */
    public function CreateFolderResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFolderResponse = new CreateFolderResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFolderResponse, $methodName)) {
                $CreateFolderResponse->$methodName($paramValue);
            }
        }
        return $CreateFolderResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AddFileToFolder
    */
    public function AddFileToFolder($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddFileToFolder = new AddFileToFolder();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddFileToFolder, $methodName)) {
                $AddFileToFolder->$methodName($paramValue);
            }
        }
        return $AddFileToFolder;
    }


   /**
    * @param array $paramAutoSet
    * @return AddFileToFolderResponse
    */
    public function AddFileToFolderResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddFileToFolderResponse = new AddFileToFolderResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddFileToFolderResponse, $methodName)) {
                $AddFileToFolderResponse->$methodName($paramValue);
            }
        }
        return $AddFileToFolderResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFolder
    */
    public function DeleteFolder($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFolder = new DeleteFolder();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFolder, $methodName)) {
                $DeleteFolder->$methodName($paramValue);
            }
        }
        return $DeleteFolder;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFolderResponse
    */
    public function DeleteFolderResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFolderResponse = new DeleteFolderResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFolderResponse, $methodName)) {
                $DeleteFolderResponse->$methodName($paramValue);
            }
        }
        return $DeleteFolderResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFolderFiles
    */
    public function GetFolderFiles($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFolderFiles = new GetFolderFiles();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFolderFiles, $methodName)) {
                $GetFolderFiles->$methodName($paramValue);
            }
        }
        return $GetFolderFiles;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFolderFilesResponse
    */
    public function GetFolderFilesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFolderFilesResponse = new GetFolderFilesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFolderFilesResponse, $methodName)) {
                $GetFolderFilesResponse->$methodName($paramValue);
            }
        }
        return $GetFolderFilesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfString
    */
    public function ArrayOfString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfString = new ArrayOfString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfString, $methodName)) {
                $ArrayOfString->$methodName($paramValue);
            }
        }
        return $ArrayOfString;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAll
    */
    public function DeleteAll($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAll = new DeleteAll();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAll, $methodName)) {
                $DeleteAll->$methodName($paramValue);
            }
        }
        return $DeleteAll;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllResponse
    */
    public function DeleteAllResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllResponse = new DeleteAllResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllResponse, $methodName)) {
                $DeleteAllResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllResponse;
    }



}

?>
