<?php

/**
 * 将图片转为base64编码
 * @param string $strImgFilePath
 * @return string
 */
function imgToBase64($strImgFilePath){
    $arrImgInfo = getimagesize($strImgFilePath);
    $resImgContent = file_get_contents($strImgFilePath);
    if(false === $arrImgInfo || false === $resImgContent) {
	    return false;
    }
    $strImgBase64 = 'data:image/' . $arrImgInfo['mime'].';base64,' . base64_encode($resImgContent);
	return $strImgBase64;
}


