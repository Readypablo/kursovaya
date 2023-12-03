<?php 
include("bd_connect/auth_session.php");
include("bd_connect/db.php");
include("header.php");
?>





<div class="main-content"><!--фулл контент -->

        <div class="main-info">


                    <div class="profile-sect">

                        <div class="img-prof">
                        <img src="../img/userfoto.png" alt="" id="img-profil">
                        </div>
                        
                        <div class="info-prof">  
                           <p> Имя: <?php echo  $_SESSION['user_name_us'];?>  </p>
                            <p> Фамилия:  <?php echo  $_SESSION['user_name_last'];?></p>
                            <p> Год рождения:  <?php echo  $_SESSION['user_birthday'];?></p>
                            <a href="bd_connect/logout.php"><input type="button" value="Выход" class="logaut-btn-profil"></a>
                          
            
                        </div>

                                
                                  
                                        
                                            <div class="column-work">
   
                        <?php 
                                            
                                            $sql = "SELECT * FROM `workout`";
                                            $result = $con ->query($sql);
                                            for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row)
                                            {

                                            }
                                            $i=0;
                                            foreach($data as $elem)
                                            {
                                                    if($_SESSION['user_name_last'] ==$elem['last_name'] ){
                                                                  $i++;          
                                                                  $id= $elem['id']           
                                             ?>
                                           
                                                        <div class="flex-work">
                                                       
                                                                <div class="name-column">
                                                                    <span class="date-work">Тренировка</span>
                                                                    <span class="time-work">Хоккей</span>
                                                                    
                                                                </div>
                                                                <div class="name-column">
                                                                    <span class="date-work">Дата</span>
                                                                    <span class="time-work"><?php echo $elem['date'] ;?></span>
                                                                </div>
                                                            
                                                                <div class="info-workaut">
                                                                    <span class="date-work">Время</span>
                                                                    <span class="time-work">19:30</span> <form  method="post">
                                                                    <?php  $id= $elem['id']  ;echo '<input type="submit" value="отказаться" class="btn-del" name='.$id.'>';  
                                                                     if(isset($_POST["$id"])){
                                                                        $query="DELETE FROM `workout` WHERE id=$id";
                                                                        mysqli_query($con , $query) or die ;
                                                                       }
                                                                       ?></form> 
                                                                </div>
                                                        </div>
                                                        
                                           
                                            <?php  }
                                        
                                      
                                        }  if($i==0){

                                            echo ' <h1>Тренировок нет</h1>';
                                            $l =   date('Y/m/d',strtotime("-1 days"));
                                            $z = date('Y/m/d',strtotime("-1 days"));
                                          
                                        } ?>      

                                            </div>  
                                       
                                    

          
                    </div>


       
        </div>

</div>
