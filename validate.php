<?php  
// define variables to empty values  
$nameErr = $emailErr = $pwdErr = "";  
$name = $email = $pwd = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    } 
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = input_data($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }


      if (empty($_POST["pwd"])) {  
        $pwdErr = "Password can't be left blank";  
   } else {  
       $pwd = input_data($_POST["pwd"]);  





}
}
    
    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
      }

    ?>