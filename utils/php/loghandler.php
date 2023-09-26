
      <?php
      
      class Logger{
        private  $filename ; 
      function __construct($filename) 
      { 
          $this->filename=$filename; 
          $log_file = __PATH__LOGGER_FILE__; 
          ini_set("log_errors", TRUE);  
          ini_set('error_log', $log_file); 
      } 
      function printLog($error_message){ 
          error_log ($this->filename."	::	".$error_message); 
      } 
      function printLogInfunction($error_message,$functionname){ 
          error_log ($this->filename."	::	". $functionname."	::	". $error_message); 
      } 
      function printLogInClassfunction($error_message,$functionname,$classname){ 
          error_log ($this->filename."	::	".$classname."	::	". $functionname."	::	". $error_message); 
      } 
      }
      ?>