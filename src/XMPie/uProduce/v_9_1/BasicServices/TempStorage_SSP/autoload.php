<?php


 function autoload_ad5b5ec88917db477cd590c7b9f74f7c($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\TempStorage_SSP' => __DIR__ .'/TempStorage_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\CreateFile' => __DIR__ .'/CreateFile.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\CreateFileResponse' => __DIR__ .'/CreateFileResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\AppendFileBinaryStream' => __DIR__ .'/AppendFileBinaryStream.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\AppendFileBinaryStreamResponse' => __DIR__ .'/AppendFileBinaryStreamResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFilePath' => __DIR__ .'/GetFilePath.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFilePathResponse' => __DIR__ .'/GetFilePathResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFileBinaryStream' => __DIR__ .'/GetFileBinaryStream.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFileBinaryStreamResponse' => __DIR__ .'/GetFileBinaryStreamResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunk' => __DIR__ .'/GetFileBinaryStreamChunk.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunkResponse' => __DIR__ .'/GetFileBinaryStreamChunkResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFileBinaryStreamSize' => __DIR__ .'/GetFileBinaryStreamSize.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFileBinaryStreamSizeResponse' => __DIR__ .'/GetFileBinaryStreamSizeResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\DeleteFile' => __DIR__ .'/DeleteFile.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\DeleteFileResponse' => __DIR__ .'/DeleteFileResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\CreateFolder' => __DIR__ .'/CreateFolder.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\CreateFolderResponse' => __DIR__ .'/CreateFolderResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\AddFileToFolder' => __DIR__ .'/AddFileToFolder.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\AddFileToFolderResponse' => __DIR__ .'/AddFileToFolderResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\DeleteFolder' => __DIR__ .'/DeleteFolder.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\DeleteFolderResponse' => __DIR__ .'/DeleteFolderResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFolderFiles' => __DIR__ .'/GetFolderFiles.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\GetFolderFilesResponse' => __DIR__ .'/GetFolderFilesResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\DeleteAll' => __DIR__ .'/DeleteAll.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\DeleteAllResponse' => __DIR__ .'/DeleteAllResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ad5b5ec88917db477cd590c7b9f74f7c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
