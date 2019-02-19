<!doctype html>
<html>
 <head>
   <link href="style.css" rel="stylesheet">

 <link href="tes.css" rel="stylesheet">

    <title>test</title>

    <?php
   include('Config.php');
    ?>

</head>
<body>


<?php
$admno="admno";
$image="image name";
if(isset($_POST['view'])){
$admno=$_POST['admno'];
$sql = "select * from images where id=$admno";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
$admno=$row['id'];
$image = $row['name'];
}
if(isset($_POST['save'])){
$admnou=$_POST['admnou'];
$nameu=$_POST['nameu'];
$query = "update images set id='".$admnou."',name='".$nameu."' where id=$admnou";
mysqli_query($db,$query);
}
?>



  <div class="one">

      <p class=time>Mon - Sat 8.00 - 18.00. Sunday CLOSED </p>
      <p class=call>Tel No. (+001) 123-456-789 </p>
    </div>
    <div class="two">
      <p class="uzu">Nir<font color="#29D1C6">ma</font>l</p>
    </div>


     <div class="sa1">

    <form method="post">
      <label class="update-adm">Admission No :</label>
                <input type="text" class=" student vieww-admno" name="admno"  >

          <button type="submit" class=" button view-submit" name="view"><p class="vi">view</p></button>


	<label class="smname"> Student details:</label>
    <label class="sname"> Name:</label>
    <input type="text" class="student name" value="<?php echo $image; ?>" name="name">

    <label class="ssname">Surname :</label>
    <input type="text" class="student student-surname"  name="surname">

	<label class="sgender">Gender</label>
  <label class="smale">Male</label>
  <label class="sfemale">Female</label>
	<input type="radio" value="Male" name="gender" class=" student student-gender1" >
  <input type="radio" value="Female" name="gender" class=" student student-gender2" >


<label class="dob">Date of birth</label>
<input type="numbers" maxlength="2" name="dd" class="student dd" placeholder="DD">
<input type="numbers" maxlength="2"  name="mm" class="student mm" placeholder="MM">
<input type="numbers" maxlength="4"  name="yy" class="student yy" placeholder="YYYY">



      <label class=saddress>Address&nbsp: </label>
      <input type="text" name="address" class=" student student-address" placeholder="    H.NO  /  Street" >
      <label class =svillage>&nbspVillage&nbsp:</label>
      <select name="village" class="student student-village">
      <option value="rajanna sircilla" >rajanna sircilla</option>
      <option value="vemulawada">vemulawada</option>
      <option value="karimnagar">karimnagar</option>
      </select>

     <label class =smandal>Mandal&nbsp: </label>
     <input type="text" name="mandal" class="student student-mandal" >

     <label class=sdistrict>District&nbsp: </label>

     <input type=" text" name="district" class="student student-district" >


     <label class =sstate>State : </label>
     <input type="text" name="state" class="student student-state" >
     <label class =spincode>Pincode : </label>
     <input type="text" name="pincode" class="student student-pincode" >
     <label class =scountry>Country : </label>
     <input type="text" name="country" class="student student-country" >
     <label class =scschool>Curent school: </label>
     <input type="text" name="cschool" class="student student-cschool" >
<p class=start2>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>


      <label class =fmname>Parents&nbspdetails&nbsp:</label>



 <label class =fname>Father&nbspName&nbsp:</label>
 <input type=" text" name="fathername" class="parent fathername" >
 <label class =fsname>Surname&nbsp:</label>
 <input type="text" name="fathersurname" class="parent father-surname" >


 <label class =fno>Mobile&nbspNo&nbsp:</label>
 <input type=" text" name="fatherphone" class="parent father-phone" >
<label class =fno2>Alternate&nbspNo&nbsp:</label>
<input type=" text" name="fatherphone2" class="parent father-phone2" >


 <label class =eml>Email&nbspid&nbsp:</label>
 <input type=" text" name="fatheremail" class="parent father-email" >


 <label class =mname>Mother&nbspName&nbsp:</label>
  <input type=" text" name="mothername" class="parent mothername" >
 <label class =msname>Surname&nbsp:</label>
 <input type="text" name="mothersurname" class="parent mother-surname" >


 <label class =mno>Mobile&nbspNo&nbsp:</label>
 <input type=" text" name="motherphone" class="parent mother-phone" >
<label class =mno2>Alternate&nbspNo&nbsp:</label>
 <input type=" text" name="motherphone2" class="parent mother-phone2" >


 <label class =meml>Email&nbspid&nbsp:</label>
  <input type=" text" name="motheremail" class="parent mother-email" >

  <label class=start3>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>



    <label class=sib Sibling&nbspDetails&nbsp:></label>


   <label class =siblingname>Sibling&nbspName&nbsp:</label>
   <input type=" text" name="siblingname" class="parent sibling-name" >

   <label class =sgrade>Curent&nbsppersuing&nbspgrade&nbsp:</label>
   <input type=" text" name="siblinggrade" class="parent sibling-grade" >


     <label class =sscl>Name&nbspof&nbspthe&nbspschool&nbsp:</label>
      <input type=" text" name="siblingschool" class="parent sibling-school" >



     <label class =sss>Sibling&nbspdeatils&nbsp:</label>




  <label class=start4>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</label>



          <label class =health>Health&nbsp:</label>



          <label class =hlth>Details&nbsp:</label>
          <input type=" text" name="height" class="parent height" placeholder="height">
          <input type="text" name="weight" class="parent weight" placeholder="weight">
        <input type="text" name="blood" class="parent blood" placeholder="blood group">


          <label class =today>Todays&nbspDate&nbsp:</label>
           <input type="number" name="ddd" maxlength="2" class="parent ddd" placeholder="DD">
          <input type="number" name="mmm" maxlength="2" class="parent mmm" placeholder="MM">
        <input type="number" name="yyy" maxlength="4" class="parent yyy" placeholder="YYYY">


       <input type="checkbox" class="parent box"


      <b><u><label class=terms>Terms and policy :</u></label> </b>

    <label class=policy>Admission form must be filled in with due care by parents/guardian.Any change in residential address,mobile numbers,etc.should be informed to the school in writing duly signed by parents/guardian(changes would not be accepted over phone,SMS).Orginal transfer certificate from previous school and proof of education of the child(photocopy of mark sheet/report card)should be submitted before the academic year begins.</label>


     <label class=upload >Upload&nbspthe&nbspphotocopy&nbspof&nbspstudent&nbsp&nbsp&nbsp:</label> <input type=button class="pic" value="Choose File:">

    <button type="submit" class="submit" name="save">save</button>

    </form>
	</div>



</body>
</html>
