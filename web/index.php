<?php
if(file_exists('../lib/tmsKernel.php')){
    require_once '../lib/tmsKernel.php';
    tmsKernel::getInstance()->process();
}
