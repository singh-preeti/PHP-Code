<?php  
class a  
    {  
        function fun1()  
        {  
            echo "java script";  
        }  
        function fun2()
        {  
            echo "SSSIT";  
        } 
    }  
    class b extends a  
    {  
        function fun3()  
        {  
            echo "PHp and Yii";  
        }  
    }  
    $hello= new b();  
    $hello->fun1(); 
    $hello->fun1(10); 
    $hello->fun3();
?>  