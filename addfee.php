<!doctype html>
<html>
 <head>
   <link href="fee.css" rel="stylesheet">
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
<div class="headpay"><p class="addfee-paypay"> Payment !</p></div>
<div class="payment">
<form method="post">


          <label class="addfee-adm">Admission No :</label>
          <input type="text"  class="addfee-admno" name="admno"  >
          <label class="addfee-amo">Amount &nbsp &nbsp &nbsp :</label>
          <input type="text" class="addfee-amount"name="amount"  >

    <button type="submit" class="addfee-pay" name="pay"><p class="addfee-pa">pay</p></button>

</form>
</div>

<?php


  if(isset($_POST['pay'])){

              $amount=$_POST['amount'];
              $enteredadmno=$_POST['admno'];


              $sql2 = " INSERT INTO  feesdetails (admno,amount) VALUES ('$enteredadmno','$amount') ";

               $result = mysqli_query($db,$sql2);

      $sql3="  SELECT * FROM TEST WHERE ADMNO='$enteredadmno'";
      $result = mysqli_query($db,$sql3);

      while($row = $result->fetch_assoc())
    {

      $totalamount=$row["totalamount"] ;
      $pendingamount=$row["pendingamount"];
       $amountpaid=$row["amountpaid"];
     }



       $previouspendingamount= $pendingamount;
       $previousamountpaid=$amountpaid;



         $amountpaid=$previousamountpaid+$amount;
          $pendingamount=$totalamount-$amountpaid;


$sql4="UPDATE TEST SET PENDINGAMOUNT ='$pendingamount',amountpaid='$amountpaid' WHERE ADMNO='$enteredadmno' ";
 $result5 = mysqli_query($db,$sql4);

 echo "<p style='    position:absolute;
                     top: 400px;
                     left: 50px;
                     color: black;
                     font-size: 25px;
                     '>"."Total Amount  &nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp
                       :". "&nbsp&nbsp&nbsp$totalamount"."</p>";

 echo "<p style='   position:absolute;
                     top: 600px;
                     left: 50px;
                     color: black;
                     font-size: 25px;

                     '>"."Pending Amount  &nbsp&nbsp&nbsp :".
                      "&nbsp&nbsp&nbsp&nbsp$pendingamount"."</p>";


 echo "<p style='   position:absolute;
                    top: 500px;
                    left: 50px;
                    color: black;
                    font-size: 25px;

                   '>" ."Amount Paid    &nbsp&nbsp&nbsp &nbsp&nbsp
                   &nbsp&nbsp   :"." &nbsp&nbsp&nbsp$amountpaid"."</p>";





}
      ?>
      <form method="post">


    <label class="addfee-adm-view">Admission No :</label>
              <input type="text" class="addfee-admno-view" name="admno"  >

        <button type="submit" class="addfee-view" name="view"><p class="addfee-vi">view</p></button>


        </form>



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
                        top: 400px;
                        left: 50px;
                        color: black;
                        font-size: 25px;
                        '>"."Total Amount  &nbsp&nbsp&nbsp
                         &nbsp&nbsp&nbsp&nbsp
                          :". "&nbsp&nbsp&nbsp$totalamount"."</p>";

    echo "<p style='   position:absolute;
                        top: 600px;
                        left: 50px;
                        color: black;
                        font-size: 25px;

                        '>"."Pending Amount  &nbsp&nbsp&nbsp :".
                         "&nbsp&nbsp&nbsp$pendingamount"."</p>";


    echo "<p style='   position:absolute;
                       top: 500px;
                       left: 50px;
                       color: black;
                       font-size: 25px;

                      '>" ."Amount Paid    &nbsp&nbsp&nbsp &nbsp&nbsp
                       &nbsp  :"." &nbsp&nbsp&nbsp$amountpaid"."</p>";







     }



          ?>

</body>
</html>
