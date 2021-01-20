<?php
// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
// hyphen(-) at the starting and ending position.
// Expected Output: 1-2-3-4-5-6-7-8-9-10 

for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}


// 2. Create a script using a for loop to add all the integers between 0 and 30 and
// display the total.
// Expected Output = total as a number
$sum = 0;
for($x=1; $x<=25; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 25 is $sum"."\n";



// 3c. Create a script to construct the following pattern, using nested for loop.
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E






// 3b. Create a script to construct the following pattern, using nested for loop.
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5





// 4. Create a script to construct the following pattern, using a nested for loop.
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5








// 5. Write a program to calculate and print the factorial of a number using a for
// loop. The factorial of a number is the product of all integers up to and including
// that number, so the factorial of 5 is 5*4*3*2*1= 120.
$Z = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "$Z = $x"."\n";




// 6. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two
// numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
// so on.



// 7. Write a program which will count the "c" characters in the text
// "OrangeAcademy".




// 8. Write a PHP script that creates the following table using for loops. Add
// cellpadding="3px" and cellspacing="0px" to the table tag.
echo "<table border =\"1\" style='border-collapse: collapse'>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }

  echo "</table>";   


// 9. Write a PHP script using nested for loop that creates a chess board as shown
// below.
// Use table width="270px" and take 30px as cell height and width.
echo "<table border =\"1\" style='border-collapse: collapse'>";
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
    echo "</table>";      


//   10. Write a PHP script that creates the following table (use for loops).

echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
        echo "</table>";
        
        // 11. Write a PHP program which iterates the integers from 1 to 50. For multiples of
        // three print "Fizz" instead of the number and for the multiples of five print "Buzz".
        // For numbers which are multiples of both three and five print "FizzBuzz".      
        for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }

//  12. Write a PHP program to generate and display the first n lines of a Floyd
// triangle. (use n=5 and n=11 rows)
$n = 5; 
echo "n = " . $n . "\n";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
    echo "\n";
    

    // 13. Write a PHP program to print alphabet pattern 'A'.
    for ($row=0; $row<=7; $row++)
    {
      for ($column=0; $column<=7; $column++)
        {
            if ((($column == 1 or $column == 5) and $row != 0) or (($row == 0 or $row == 3) and ($column > 1 and $column < 5)))
                echo "*";    
            else  
                echo " ";     
        }        
      echo "\n";
    }

    
    //14. Write a PHP program to print alphabet pattern 'B'.
    for ($row=0; $row<7; $row++)
    {
      for ($column=0; $column<=7; $column++)
        {
          if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
                echo "*";    
            else  
                echo " ";     
        }        
      echo "\n"


      //15. Write a PHP program to print alphabet pattern 'C'
      for ($row=0; $row<7; $row++)
      {
        for ($column=0; $column<=7; $column++)
          {
           if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
                  echo "*";    
              else  
                  echo " ";     
          }        
        echo "\n";
      }


      //16.Write a PHP program to print alphabet pattern.





        ?>
