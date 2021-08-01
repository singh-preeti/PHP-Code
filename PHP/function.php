<html>
   
   <head>
      <title>Writing PHP Function</title>
   </head>
   
   <body>
      
      <?php
         /* Defining a PHP Function */
         function writeMessage() {
            
            echo "You are really a nice person, Have a nice time!";
         }
         function readMessage() {
            echo "You all are very smart!";
         }
         function sum(int $x,int $y)
         {
            $x=10;
            $y=20;
            $z= $x + $y;
         }

         /* Calling a PHP Function */
         writeMessage();
         readMessage();
         sum();
      ?>
      
   </body>
</html>