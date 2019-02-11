<!doctype html>
<html>
 <head>
   <link href="viewtest.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">

    <?php
   include('Config.php');
    ?>


</head>
<body>
  <div class="one">

      <p class=time>Mon - Sat 8.00 - 18.00. Sunday CLOSED </p>
      <p class=call>Tel No. (+001) 123-456-789 </p>
    </div>
    <div class="two">
      <p class="uzu">Nir<font color="#29D1C6">ma</font>l</p>
    </div>
    <div class="display-one">
      <label class="welcome">Welcome</label>
    </div>

  <form method="post">


<label class="adm">Admission No :</label>
          <input type="text" class="admno" name="admno"  >

    <button type="submit" class="view" name="view"><p class="vi">view</p></button>


    </form>

    <label class="resultadmno">Admission Number</label>
    <label class="resulttransno">Transaction Number</label>
    <label class="resultamount">Amount </label>
    <label class="line1">_____________________________________________________________________________________________________</label>
    <label class="line2">_____________________________________________________________________________________________________</label>

    <div class="pop">
<?php


  if(isset($_POST['view'])){



               $enteredadmno=$_POST['admno'];



       $sql3="  SELECT * FROM TEST WHERE ADMNO='$enteredadmno'";
       $result = mysqli_query($db,$sql3);

       while($row = $result->fetch_assoc())
     {

       $totalamount=$row["totalamount"] ;
       $pendingamount=$row["pendingamount"];
        $amountpaid=$row["amountpaid"];
      }

echo "<p style='    position:absolute;
                    top: -450px;
                    left: 0px;
                    color: black;
                    font-size: 25px;
                    '>"."Total Amount  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  :". "&nbsp&nbsp&nbsp$totalamount"."</p>";

echo "<p style='   position:absolute;
                    top: -370px;
                    left: 0px;
                    color: black;
                    font-size: 25px;

                    '>"."Pending Amount  &nbsp&nbsp&nbsp :". "&nbsp&nbsp&nbsp$pendingamount"."</p>";


echo "<p style='   position:absolute;
                   top: -300px;
                   left: 0px;
                   color: black;
                   font-size: 25px;

                  '>" ."Amount Paid    &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp  :"." &nbsp&nbsp&nbsp$amountpaid"."</p>";



 $sql5="SELECT * FROM FEESDETAILS WHERE ADMNO ='$enteredadmno' ";
 $result5 = mysqli_query($db,$sql5);

 while($row2 = $result5->fetch_assoc())
 {
   $count=0;
   foreach ($row2 as $value )
   {
     echo " <label style='


                         font-size:30px;


                         '> $value</label>
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                         &nbsp&nbsp&nbsp

                           " ;
     $count=$count+1;
     if($count==3)
          {
       echo "</br></br>";

           }
   }

 }



 }



      ?>

</div>


</body>
</html>
