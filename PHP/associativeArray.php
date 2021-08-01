<html>
   <body>
      
      <?php
         
         $salaries = array("preeti" => 2000, "Rahul" => 1000, "Aman" => 500);
         
         echo "Salary of preeti is ". $salaries['preeti'] . "<br />";
         echo "Salary of Rahul is ".  $salaries['Rahul']. "<br />";
         echo "Salary of Aman is ".  $salaries['Aman']. "<br />";
         
        
         $salaries['preeti'] = "high";
         $salaries['Rahul'] = "medium";
         $salaries['zara'] = "low";
         
         echo "Salary of preeti is ". $salaries['preeti'] . "<br />";
         echo "Salary of Rahul is ".  $salaries['Rahul']. "<br />";
         echo "Salary of Aman is ".  $salaries['Aman']. "<br />";
      ?>
   
   </body>
</html>