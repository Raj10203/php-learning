<?php
namespace Bank;
trait ActionLog
{
    public function add_log($response)
    {
        $myfile = fopen("log.log", "a") or die("Unable to open file!");
        $txt = "UserName : " . $response['userName'] . ", Action : " . $response['action'] . ", Status : " . $response['status'] . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        echo $txt;
    }
}

?>