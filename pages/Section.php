<?php 
include("bd_connect/auth_session.php");
include("bd_connect/db.php");
include("header.php");
?>



<div class="main-content"><!--фулл контент -->
        <div class="main-info">


     
      <div class="text-info">
      <h1>Расписание тренировок на неделю</h1></div>
    

 
       <?php





// $this_monday = new DateTime('Monday this week');
// $next_monday = new DateTime('Monday next week');
// $interval    = new DateInterval('P1D');
// $datePeriod  = new DatePeriod($this_monday, $interval, $next_monday);
// foreach($datePeriod as $day) {
//     printf("%s | %s<br>\n", $day->format('l'), $day->format('d-m-Y'));
// }

?> 
        <div class="weekend">
        <?php
           
            $first_name=  $_SESSION['user_name_us'];
            $last_name = $_SESSION['user_name_last'];

            $sqlo =  "SELECT * FROM `workout` where last_name='$last_name'";
            $result = $con ->query($sqlo);
     
            $i = 0;
            for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row)
            {
              $i++;
            }
   
          
        
            if($i <3){

          
            $sql =  "SELECT * FROM `workout`";
            //mon
          
            if(isset($_POST["Monday"])){
                $Monday = date( 'Y-m-d', strtotime( 'Monday this week' ) );
                $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Monday')";
                mysqli_query($con, $sql) or die(mysqli_error($con));
             
                echo '<div id="content-blocker">
                <div class=err_block>Вы записались на тренировку
                <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
                </div>
                </div>'; 
            }


            //tue
            if(isset($_POST["Tuesday"])){
              $Tuesday = date( 'Y-m-d', strtotime( 'Tuesday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Tuesday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));

              echo '<div id="content-blocker">
              <div class=err_block>Вы записались на тренировку
              <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
              </div>
              </div>'; 
            }
            //wen
            if(isset($_POST["Wednesday"])){
              $Wednesday = date( 'Y-m-d', strtotime( 'Wednesday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Wednesday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));

              echo '<div id="content-blocker">
              <div class=err_block>Вы записались на тренировку
              <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
              </div>
              </div>'; 
            }
            //thu
            if(isset($_POST["Thursday"])){
              $Thursday = date( 'Y-m-d', strtotime( 'Thursday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Thursday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));

              echo '<div id="content-blocker">
              <div class=err_block>Вы записались на тренировку
              <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
              </div>
              </div>'; 
            }
            //fri
            if(isset($_POST["Friday"])){
              $Friday = date( 'Y-m-d', strtotime( 'Friday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Friday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));

              echo '<div id="content-blocker">
              <div class=err_block>Вы записались на тренировку
              <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
              </div>
              </div>'; 
            }
            //sat
            if(isset($_POST["Saturday"])){
              $Saturday = date( 'Y-m-d', strtotime( 'Saturday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Saturday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));

              echo '<div id="content-blocker">
              <div class=err_block>Вы записались на тренировку
              <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
              </div>
              </div>'; 
            }
          }
          else{
            echo '<div id="content-blocker">
                  <div class=err_block>Нельзя записаться больше 3х раз
                  <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
                  </div>
                </div>'; 
          }



            
              $this_monday = new DateTime('Monday this week');
              $next_monday = new DateTime('Monday next week');
              $interval    = new DateInterval('P1D');
              $datePeriod  = new DatePeriod($this_monday, $interval, $next_monday);
              foreach($datePeriod as $day) {

          

              echo ' <div class="daysweek">
              <section class="namedate">'. $day->format('l').' | '.$day->format('d-m').'</section>
              <section >Время начала</section>
              <section class="statussection">19:30</section>
              <section >Тренер</section>
              <section class="instruktorname">Хафисов Ю.Г.</section>
              <form method="post" class="zapisform">
              <input type="submit" value="Записаться" name='.$day->format('l').' class="trenirovkazps">
              </form>
              </div>'
              ;


              
              }
              
        ?>

        
              <!-- <div class="daysweek">
              <section class="namedate">Понедельник</section>
              <section >Время начала</section>
              <section class="statussection">19:30</section>
              <section >Тренер</section>
              <section class="instruktorname">Хафисов Ю.Г.</section>
              <form action="" class="zapisform">
              <input type="submit" value="Записаться" name="submit" class="trenirovkazps">
              </form>
              </div> -->

              
              

        </div>


      </div>
</div><!--фулл контент -->

<?php  include('footer.php');  ?>
             



<script >
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}



</script>
<script src="../js/script.js"></script>
</body>
</html>