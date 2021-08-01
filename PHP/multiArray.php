<html>
   <body>
      
      <?php
         $marks = array( 
            "preeti" => array (
               "physics" => 35,
               "maths" => 30,	
               "biology" => 39 
            ),
            
            "vikas" => array (
               "physics" => 30,
               "maths" => 32,
               "Chemistry" => 29
            ),
            
            
            "rahul" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            ),
            "preeti" => array (
               "physics" => 45,
               "maths" => 40,	
               "chemistry" => 39
            ),
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for preeti in biology : " ;
         echo $marks['preeti']['biology'] . "<br />"; 
         
         echo "Marks for vikas in maths : ";
         echo $marks['vikas']['maths'] . "<br />"; 
         
         echo "Marks for Rahul in chemistry : " ;
         echo $marks['rahul']['chemistry'] . "<br />"; 
         
         echo "Marks for preeti in chemistry : " ;
         echo $marks['preeti']['chemistry'] . "<br />"; 
      ?>
   
   </body>
</html>