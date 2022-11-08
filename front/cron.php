<?php

/**
  *  Modificaco por marcos Moreno
 */ 

chdir(__DIR__);

define('DO_NOT_CHECK_HTTP_REFERER', 1);
include('../inc/includes.php');

if (!is_writable(GLPI_LOCK_DIR)) {
    echo "\t" . sprintf(__('ERROR: %s is not writable') . "\n", GLPI_LOCK_DIR);
    echo "\t" . __('run script as apache user') . "\n";
    exit(1);
}

if (!isCommandLine()) {
     $image = pack("H*", "47494638396118001800800000ffffff00000021f90401000000002c0000000" .
                        "018001800000216848fa9cbed0fa39cb4da8bb3debcfb0f86e248965301003b");
     header("Content-Type: image/gif");
     header("Content-Length: " . strlen($image));
     header("Cache-Control: no-cache,no-store");
     header("Pragma: no-cache");
     header("Connection: close");
     echo $image;
     flush();
     CronTask::launch(CronTask::MODE_INTERNAL);

} else if (isset($_SERVER['argc']) && ($_SERVER['argc'] > 1)) {

    $mode = CronTask::MODE_EXTERNAL;
    for ($i = 1; $i < $_SERVER['argc']; $i++) {
        if ($_SERVER['argv'][$i] == '--force') {
            $mode = -CronTask::MODE_EXTERNAL;
        } else if (is_numeric($_SERVER['argv'][$i])) {
            CronTask::launch(CronTask::MODE_EXTERNAL, intval($_SERVER['argv'][$i]));
            break;
        } else {
            CronTask::launch($mode, 1, $_SERVER['argv'][$i]);
        }
    }
} else {
   //var_dump(
	CronTask::launch(CronTask::MODE_EXTERNAL, $CFG_GLPI['cron_limit']);
   //);
  // var_dump($CFG_GLPI['cron_limit']);
   echo 'Correos enviados¡¡';
}
