<?php

use src\NanoLog;

$logFileName = 'log_' . date('d_m_Y') . '.txt';
$nanoLog = new NanoLog($logFileName);

try {
  throw new Exception('Custom exception to generate logs for tests.', 25874);
} catch (\Exception $e) {
  $nanoLog->log_exception($e);
  $nanoLog->manual_log($e->getMessage(), 'Exception', $e->getFile(), $e->getLine(), $e->getCode(), $e->getTrace());
  $nanoLog->log('Custom log message', ['code' => $e->getCode(), 'file' =>$e->getFile(), 'line' => $e->getLine(), 'trace' => $e->getTrace()]);
  echo 'Ocurred an erro, check the logs files in system folder!';
}
