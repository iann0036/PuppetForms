<?php
    function reverse_fn_fast($job) {
        return strrev($job->workload());
    }

    $gmworker = new GearmanWorker();
    $gmworker->addServer();
    $gmworker->addFunction("reverse", "reverse_fn_fast");

    while($gmworker->work()) {
        if ($gmworker->returnCode() != GEARMAN_SUCCESS) {
            echo "return_code: " . $gmworker->returnCode() . "\n";
            break;
        }
    }
