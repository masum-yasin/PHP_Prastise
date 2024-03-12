<?php
// Custom error handler function
function customErrorHandler($errorLevel, $errorMessage, $errorFile, $errorLine) {
    // Log the error to a file
    error_log("Error: [$errorLevel] $errorMessage in $errorFile on line $errorLine", 3, "/path/to/error.log");
 
    // Display a custom error message to the user
    echo "An error occurred. Please try again later.";
 
    // You can also choose to terminate the script execution if desired
    // exit();
}
 
// Set custom error handler
set_error_handler('customErrorHandler');
 
// Trigger an error to test the custom error handler
echo $undefinedVariable;
?>