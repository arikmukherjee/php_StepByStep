<?php
/*syntax to set cookies:
setcookie(name, value, expire, path, domain, secure, httponly);
*/

setcookie("user", "Alex Porter", time()+3600, "/","", 0);
//"user"    : name of the cookie
echo "Cookie set successfully";

//To delete a cookie, set its expiration time to a past value
//setcookie("user", "", time()-3600);
//echo "Cookie deleted";

//to check if the cookie is set or not, go to inspect->application->cookies->localhost
//or use isset() function

print_r($_COOKIE); // to check if the cookie is set or not.

if(isset($_COOKIE['user'])){
    echo "Cookie is set";
}else{
    echo "Cookie is not set";
}
?>