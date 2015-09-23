<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        session_start();
        // put your code here
        $p1=array(0,0,0,0);
        $p2=array(0,0,0,0);
        $p3=array(0,0,0,0);
        $p4=array(0,0,0,0);
        
        $index1=0;
        $index2=0;
        $index3=0;
        $index4=0;
        $option=$_POST['q1'];
        
        if(isset($_POST['q1']))
        {
            
            foreach($option as $op )
            {
                //echo $op."<br/>";
                if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }
           
            $p1[$index1++]=$val;
        }
        //unset($option);
        //unset($op);
        $option=$_POST['q2'];
        
        if(isset($_POST['q2']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }
            
            $p4[$index4++]=$val;
            
        }
        
        $option=$_POST['q3'];
        if(isset($_POST['q3']))
        {
            //echo "Selected option: ";
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=-2;
                else if($op=='yes')
                    $val=-1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=1;
                else $val=2;
            }
           
            $p2[$index2++]=$val;  
        }
        
        $option=$_POST['q4'];
        if(isset($_POST['q4']))
        {
            //echo "Selected option: ";
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=-2;
                else if($op=='yes')
                    $val=-1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=1;
                else $val=2;
            }
            
            $p3[$index3++]=$val;  
        }
        
        $option=$_POST['q5'];
        if(isset($_POST['q5']))
        {
            //echo "Selected option: ";
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=-2;
                else if($op=='yes')
                    $val=-1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=1;
                else $val=2;
            }
            
            $p1[$index1++]=$val;  
        }
        
        $option=$_POST['q6'];
        if(isset($_POST['q6']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }
            
            $p4[$index4++]=$val;  
        }
        
        $option=$_POST['q7'];
        if(isset($_POST['q7']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=-2;
                else if($op=='yes')
                    $val=-1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=1;
                else $val=2;
            }
            
            $p2[$index2++]=$val;  
        }
        
        $option=$_POST['q8'];
        if(isset($_POST['q8']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }
            
            $p3[$index3++]=$val;  
        }
        
       $option=$_POST['q9'];
        if(isset($_POST['q9']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }
            
            $p1[$index1++]=$val;  
        }
        
        $option=$_POST['q10'];
        if(isset($_POST['q10']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }    
            $p4[$index4++]=$val;  
        }
        
        $option=$_POST['q11'];
        if(isset($_POST['q11']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }    
            $p2[$index2++]=$val;  
        }
        
        $option=$_POST['q12'];
        if(isset($_POST['q12']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }    
            $p3[$index3++]=$val;  
        }
        
        $option=$_POST['q13'];
        if(isset($_POST['q13']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }    
            $p1[$index1++]=$val;  
        }
        
        $option=$_POST['q14'];
        if(isset($_POST['q14']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }    
            $p4[$index4++]=$val;  
        }
        $option=$_POST['q15'];
        if(isset($_POST['q15']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=-2;
                else if($op=='yes')
                    $val=-1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=1;
                else $val=2;
            }    
            $p2[$index2++]=$val;  
        }
        
        $option=$_POST['q16'];
        if(isset($_POST['q16']))
        {
            foreach($option as $op)
            {
                //echo $op."<br/>";
               if($op=='YES')
                    $val=2;
                else if($op=='yes')
                    $val=1;
                else if($op=='un')
                    $val=0;
                else if($op='no')
                    $val=-1;
                else $val=-2;
            }    
            //echo "Value assigned is: ".$val;
            $p3[$index3++]=$val;  
        }
        
        /*echo "First personality </br>";
        for($i=0;$i < $index1; $i++)
            echo $p1[$i]." ";
        
        echo "Second personality </br>";
        for($i=0;$i < $index2; $i++)
            echo $p2[$i]." ";
        
        echo "Third personality </br>";
        for($i=0;$i < $index3; $i++)
            echo $p3[$i]." ";
        
        echo "Fourth personality </br>";
        for($i=0;$i < $index4; $i++)
            echo $p4[$i]." ";*/
        
        
        
        /*echo "Fourth personality </br>";
        for($i=0;$i < $index4; $i++)
            echo $p4[$i]." ";*/
        $sum1=0;
        $sum2=0;
        $sum3=0;
        $sum4=0;
        $finalstr=null;
        
        for($i=0;$i<$index1;$i++)
            $sum1=$sum1+$p1[$i];
        
        
        for($i=0;$i<$index2;$i++)
            $sum2=$sum2+$p2[$i];
        
        for($i=0;$i<$index3;$i++)
            $sum3=$sum3+$p3[$i];
        
        for($i=0;$i<$index4;$i++)
            $sum4=$sum4+$p4[$i];

        /*echo "Sum1: ".$sum1;
        echo "Sum2: ".$sum2;
        echo "Sum3: ".$sum3;
        echo "Sum4: ".$sum4;*/
        
        //$finalstr="";
        
        if($sum4>0)
        {
            $finalstr=$finalstr.'E';
        }
        else if($sum4<0)
        {
            $finalstr=$finalstr.'I';
        }
        else
        {
            $val=rand(-10,-1)+rand(1,10);
            if($val>0)
                $finalstr=$finalstr.'E';
            else
                $finalstr=$finalstr.'I';
        }
        
        if($sum3>0)
        {
            $finalstr=$finalstr.'S';
        }
        else if($sum3<0)
        {
            $finalstr=$finalstr.'N';
        }
        else
        {
            $val=rand(-10,-1)+rand(1,10);
            if($val>0)
                $finalstr=$finalstr.'S';
            else
                $finalstr=$finalstr.'N';
        }
        
        if($sum2>0)
        {
            $finalstr=$finalstr.'T';
        }
        else if($sum2<0)
        {
            $finalstr=$finalstr.'F';
        }
        else
        {
            $val=rand(-10,-1)+rand(1,10);
            if($val>0)
                $finalstr=$finalstr.'T';
            else
                $finalstr=$finalstr.'F';
        }
        
        if($sum1>0)
        {
            $finalstr=$finalstr.'J';
        }
        else if($sum1<0)
        {
            $finalstr=$finalstr.'P';
        }
        else
        {
            $val=rand(-10,-1)+rand(1,10);
            if($val>0)
                $finalstr=$finalstr.'J';
            else
                $finalstr=$finalstr.'P';
        }
        
        
       
        //echo "You personality: ".$finalstr;
        $_SESSION['p']=$finalstr;
        header("location: finalpage.php");
        //echo $_SESSION['p'];
        ?>
        
    </body>
</html>
