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


              // $qsl = "SELECT COUNT(*) FROM workout WHERE date = $Monday";
            
              // if($qsl=1){
             
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Monday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));
            //   }else{

            //     echo '<div id="content-blocker">
            //     <div class=err_block>Заного незя
            //     <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
            //     </div>
            //   </div>'; 
            // }
            }
            //tue
            if(isset($_POST["Tuesday"])){
              $Tuesday = date( 'Y-m-d', strtotime( 'Tuesday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Tuesday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));
            }
            //wen
            if(isset($_POST["Wednesday"])){
              $Wednesday = date( 'Y-m-d', strtotime( 'Wednesday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Wednesday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));
            }
            //thu
            if(isset($_POST["Thursday"])){
              $Thursday = date( 'Y-m-d', strtotime( 'Thursday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Thursday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));
            }
            //fri
            if(isset($_POST["Friday"])){
              $Friday = date( 'Y-m-d', strtotime( 'Friday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Friday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));
            }
            //sat
            if(isset($_POST["Saturday"])){
              $Saturday = date( 'Y-m-d', strtotime( 'Saturday this week' ) );
              $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Saturday')";
              mysqli_query($con, $sql) or die(mysqli_error($con));
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

<footer>
   
    <div class="footer-column">
        <a href="..\index.html" class="silk-footer">О нас</a>
        <a href="Dokument.html" class="silk-footer">Документы</a>
        <a href="Kollektiv.html" class="silk-footer">Директор</a>
        <a href="Kollektiv.html" class="silk-footer">Руководство</a>
    </div>
    <div class="footer-column">
         <a href="GTO.html" class="silk-footer">ГТО</a>
        <a href="Section.html" class="silk-footer">Секции</a>
        <a href="Section.html" class="silk-footer">Хоккей с мячом</a>
        <a href="Section.html" class="silk-footer">Расписание игр</a>
    </div>
    <div class="footer-column">
            <div class="tel-icon">
              <img src="..\img\tel-50.png" width="20px" height="20px"><p>8 (35164) 3-29-71 (Центр Досуга)<br> 8 (35164) 3-29-70 (Стадион)</p>
            </div>
             <div class="tel-icon">
              <a href="https://vk.com/mbusotsnikelshchik">
              <img src="..\img\vk-50.png" width="25px" height="25px"></a>
              <a href="https://vk.com/away.php?to=https%3A%2F%2Finstagram.com%2Fsots_nikelshchik%3Fr%3Dnametag">
              <img src="..\img\inst-50.png" width="25px" height="25px"></a>
            </div>
            <div class="tel-icon">
              <p>Mail:socnikel@mail.ru</p>
            </div>
            <div class="tel-icon"> 
              <p>г. Верхний Уфалей, улица Островского, 2/1</p>
            </div>
    </div>
</footer>
             



<script >
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}



</script>
<script src="../js/script.js"></script>
</body>
</html>