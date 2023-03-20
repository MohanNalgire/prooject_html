<?php
echo 'Submitted form successfully<pre>';
print_r($_REQUEST);
echo '</pre>';
/*
echo '<pre>';
print_r(apache_request_headers());
echo '</pre>';
*/
/*
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
*/
/*
 1.   Check for 
    
    $_SERVER['SERVER_NAME']
    $_SERVER['REQUEST_METHOD']
    $_SERVER['QUERY_STRING']
    $_SERVER['REQUEST_URI']
    $_SERVER['SCRIPT_NAME']
    $_SERVER['PHP_SELF']
 */
/*
    if ( 'get' === strtolower($_SERVER['REQUEST_METHOD'])) {
        $table =<<<TABLE
        <table border=1>
TABLE;
        foreach ($_GET as $key => $value) {
 $table .=<<<TABLE
 <tr>
    <td>{$key}</td>
    <td>${value}</td>
</tr>
TABLE;

        }
 $table .=<<<TABLE
 </table>
 TABLE;

 echo $table;
}
*/
?>