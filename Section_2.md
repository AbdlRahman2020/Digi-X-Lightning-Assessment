# The following PHP code is solution for the questions in section 2: 


# Question 1: 

<?php
for (int i = 0; i <= 100; i++) {
  if ( i % 3 == 0 || i % 5 == 0) { 
    System.out.print(i + ", ");
  }
}

for ($x = 0; $x <= 100; $x++) {
  if ($x % 3 == 0 || $x % 5 == 0) {
      echo $x , ", ";
    }
}
?>

#-----------------------------------------

# Question 2: 

<?php
// Function returns the HCF of two numbers
function hcf($num1, $num2) 
{ 
    if ($num1 == 0) 
        return $num2; 
    return hcf($num2 % $num1, $num1); 
} 
  
// Function to find the hcf in an array of numbers 
function findHCF($n, $arr) 
{ 
    $answer = $arr[sizeof($arr) - $n];   //answer is the first +ve integer in arr
  
    for ($i = sizeof($arr) - $n + 1; $i < sizeof($arr); $i++){ 
        
        $answer = hcf($arr[$i], $answer); 
  
        if($answer == 1) 
        { 
           return 1; 
        } 
    } 
    return $answer; 
} 

// Testing output
echo (findHCF(5, [2, 4, 6, 8, 10])), ", ";
echo (findHCF(5, [2, 3, 4, 5, 6])), ", "; 
echo (findHCF(3, [1, 3, 21])), ", ";
echo (findHCF(4, [-1, 4, 48, 12, 8])), ", "; 
echo (findHCF(1, [-1, -2, -3, -4, 21]));
?>

#-----------------------------------------

# Question 3: 

<?php 

// check for Palindrome string recursively in PHP   
function palindromeCheck($string){ 
    strtolower($string);  //converting string to lower case
    // Base codition 
    if ((strlen($string) == 1) || (strlen($string) == 0)){ 
        echo "true"; 
    } 
  
    else{    
        // First character is compared with the last one 
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)){ 
    
            // Checked letters are discarded and passed for next call 
            return palindromeCheck(substr($string,1,strlen($string) -2)); 
        } 
        else{  
            echo "false"; } 
    } 
} 
  
 
echo (palindromeCheck('tacocat')), ", ";
echo (palindromeCheck('racecar')), ", ";
echo (palindromeCheck('beanbag')), ", ";
echo (palindromeCheck('hannah'));
?>
