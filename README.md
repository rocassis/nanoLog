# nanolog

Basic Lib for generate logs of system manually or from exception and errors.

You can custom the path and the name of the log file, eg:

  $logFileName = 'log_' . date('d_m_Y') . '.txt';
  $nanoLog = new NanoLog($logFileName);

Has functions to log exceptions, custom logs, eg: 
  $nanoLog->log_exception($e);
  $nanoLog->manual_log($e->getMessage(), 'Exception', $e->getFile(), $e->getLine(), $e->getCode(), $e->getTrace());
  $nanoLog->log('Custom log message', ['code' => $e->getCode(), 'file' =>$e->getFile(), 'line' => $e->getLine(), 'trace' => $e->getTrace()]);
  
Have functions to handle erros e exceptions and automatic logs theses.
