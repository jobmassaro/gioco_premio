<?php

include('../include/mysql.inc.php');

if($_SERVER['REQUEST_METHOD'])
{
    if(isset($_GET['id']))
    {
        if($_GET['id']== 1)
        {
              $rnd = mt_rand(1,25);
              $sql ="SELECT A{$rnd}  FROM ".DB_NAME.".".TABELLONE ." WHERE A{$rnd}=0";
              $rs=mysqli_query($dbc,$sql);

              $arr= array();
               
                
                    
                    if (mysqli_num_rows($rs) > 0) 
                    {
                        
                        while ($r = mysqli_fetch_array($rs, MYSQLI_ASSOC))
                        {
                            if($r['A'.$rnd] ==0)
                            {
                                $update = "UPDATE ".DB_NAME.".".TABELLONE ." SET A{$rnd}=1 WHERE id =1";
                                mysqli_query($dbc,$update);
                                $arr['a']= $rnd;
                                echo json_encode($arr);
                                //echo json_encode($rnd);	
                                
                                
                                
                            }else{
                              echo "false";
                            
                            }
                        }
                    }
                    

                
                
    

          
            
        }
        if($_GET['id']== 2)
        {

            $arr=[];
            $c = 26;
            for($i=1;$i<=25;$i++)
            {
                $arr[$i] = $c;
                ++$c;
            }
            
            $rnd = mt_rand(26,50);
            $sql ="SELECT B{$rnd}  FROM ".DB_NAME.".".TABELLONE ." WHERE B{$rnd}=0";
            $rs=mysqli_query($dbc,$sql);

             $array= array();

            if (mysqli_num_rows($rs) > 0) 
            {
                while ($r = mysqli_fetch_array($rs, MYSQLI_ASSOC))
                {
                    if($r['B'.$rnd] ==0)
                    {
                        $update = "UPDATE ".DB_NAME.".".TABELLONE ." SET B{$rnd}=1 WHERE id =1";
                        mysqli_query($dbc,$update);
                        $array['a']=  array_search($rnd,$arr);
                        echo json_encode($array);
                    }else{
                        echo "false";
                    }
                }
            }else{
                return;
            }
            
        }

        if($_GET['id']== 3)
        {
            $arr=[];
            $c = 51;
            
            for($i=1;$i<=25;$i++)
            {
                $arr[$i] = $c;
                ++$c;
            }

            $rnd = mt_rand(51,75);
            $sql ="SELECT C{$rnd}  FROM ".DB_NAME.".".TABELLONE ." WHERE C{$rnd}=0";
            $rs=mysqli_query($dbc,$sql);

             $array= array();

            if (mysqli_num_rows($rs) > 0) 
            {
                while ($r = mysqli_fetch_array($rs, MYSQLI_ASSOC))
                {
                    if($r['C'.$rnd] ==0)
                    {
                        $update = "UPDATE ".DB_NAME.".".TABELLONE ." SET C{$rnd}=1 WHERE id =1";
                        mysqli_query($dbc,$update);
                        $array['a']=  array_search($rnd,$arr);
                        echo json_encode($array);
                        
                    }else{
                        echo "false";
                    }
                }
            }else{
                return;
            }
            
        }

        if($_GET['id']== 4)
        {

            $arr=[];
            $c = 76;
            for($i=1;$i<=25;$i++)
            {
                $arr[$i] = $c;
                ++$c;
            }

            $rnd = mt_rand(76,100);
            $sql ="SELECT D{$rnd}  FROM ".DB_NAME.".".TABELLONE ." WHERE D{$rnd}=0";
            $rs=mysqli_query($dbc,$sql);

             $array= array();

            if (mysqli_num_rows($rs) > 0) 
            {
                while ($r = mysqli_fetch_array($rs, MYSQLI_ASSOC))
                {
                    if($r['D'.$rnd] ==0)
                    {
                        $update = "UPDATE ".DB_NAME.".".TABELLONE ." SET D{$rnd}=1 WHERE id =1";
                        mysqli_query($dbc,$update);
                        $array['a']=  array_search($rnd,$arr);
                        echo json_encode($array);

                    }else{
                        echo "false";
                    }
                }
            }else{
                return;
            }
            
        }
    }
    
}






