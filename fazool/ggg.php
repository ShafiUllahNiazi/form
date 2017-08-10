<?php
require_once ('connection.inc.php');
        if(isset($_POST['submit']))
        {
          $v1=rand(1111,9999);
   $v2=rand(1111,9999);

   $v3=$v1.$v2;

   $v3=md5($v3);
$fncnic="NULL";
$mncnic="NULL";
$gncnic="NULL";

$fincm="NULL";
$mincm="NULL";
$gincm="NULL";

$fslry="NULL";
$mslry="NULL";
$gslry="NULL";

$ectrcty="NULL";
$gas="NULL";
$tlphn="NULL";
$watr="NULL";

$rentag="NULL";
$feesb="NULL";
$scrdoc="NULL";
$ppdoc="NULL";
$bnkst="NULL";
$uob=15026431;
if ($_FILES['fcnic']['size'] != 0)
{
    $fnm=$_FILES["fcnic"]["name"];
   $fncnic="files/".$v3.$fnm;
   move_uploaded_file($_FILES["fcnic"]["tmp_name"],$fncnic);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['mcnic']['size'] != 0)
{
    $fnm=$_FILES["mcnic"]["name"];
   $mncnic="files/".$v3.$fnm;
   move_uploaded_file($_FILES["mcnic"]["tmp_name"],$mncnic);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['gcnic']['size'] != 0)
{
    $fnm=$_FILES["gcnic"]["name"];
   $gncnic="files/".$v3.$fnm;
   move_uploaded_file($_FILES["gcnic"]["tmp_name"],$gncnic);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['incfcnic']['size'] != 0)
{
    $fnm=$_FILES["incfcnic"]["name"];
   $fincm="files/".$v3.$fnm;
   move_uploaded_file($_FILES["incfcnic"]["tmp_name"],$fincm);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['incmmcnic']['size'] != 0)
{
    $fnm=$_FILES["incmmcnic"]["name"];
   $mincm="files/".$v3.$fnm;
   move_uploaded_file($_FILES["incmmcnic"]["tmp_name"],$mincm);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['incmgcnic']['size'] != 0)
{
    $fnm=$_FILES["incmgcnic"]["name"];
   $gincm="files/".$v3.$fnm;
   move_uploaded_file($_FILES["incmgcnic"]["tmp_name"],$gincm);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['slryfcnic']['size'] != 0)
{
    $fnm=$_FILES["slryfcnic"]["name"];
   $fslry="files/".$v3.$fnm;
   move_uploaded_file($_FILES["slryfcnic"]["tmp_name"],$fslry);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['slrymcnic']['size'] != 0)
{
    $fnm=$_FILES["slrymcnic"]["name"];
   $mslry="files/".$v3.$fnm;
   move_uploaded_file($_FILES["slrymcnic"]["tmp_name"],$mslry);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['slrygcnic']['size'] != 0)
{
    $fnm=$_FILES["slrygcnic"]["name"];
   $gslry="files/".$v3.$fnm;
   move_uploaded_file($_FILES["slrygcnic"]["tmp_name"],$gslry);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['ectrcty']['size'] != 0)
{
    $fnm=$_FILES["ectrcty"]["name"];
   $ectrcty="files/".$v3.$fnm;
   move_uploaded_file($_FILES["ectrcty"]["tmp_name"],$ectrcty);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['gas']['size'] != 0)
{
    $fnm=$_FILES["gas"]["name"];
   $gas="files/".$v3.$fnm;
   move_uploaded_file($_FILES["gas"]["tmp_name"],$gas);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['tlphn']['size'] != 0)
{
    $fnm=$_FILES["tlphn"]["name"];
   $tlphn="files/".$v3.$fnm;
   move_uploaded_file($_FILES["tlphn"]["tmp_name"],$tlphn);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['wtr']['size'] != 0)
{
    $fnm=$_FILES["wtr"]["name"];
   $watr="files/".$v3.$fnm;
   move_uploaded_file($_FILES["wtr"]["tmp_name"],$watr);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['rentag']['size'] != 0)
{
    $fnm=$_FILES["rentag"]["name"];
   $rentag="files/".$v3.$fnm;
   move_uploaded_file($_FILES["rentag"]["tmp_name"],$rentag);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['feesb']['size'] != 0)
{
    $fnm=$_FILES["feesb"]["name"];
   $feesb="files/".$v3.$fnm;
   move_uploaded_file($_FILES["feesb"]["tmp_name"],$feesb);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['scrdoc']['size'] != 0)
{
    $fnm=$_FILES["scrdoc"]["name"];
   $scrdoc="files/".$v3.$fnm;
   move_uploaded_file($_FILES["scrdoc"]["tmp_name"],$scrdoc);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['ppdoc']['size'] != 0)
{
    $fnm=$_FILES["ppdoc"]["name"];
   $ppdoc="files/".$v3.$fnm;
   move_uploaded_file($_FILES["ppdoc"]["tmp_name"],$ppdoc);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}
if ($_FILES['bnkst']['size'] != 0)
{
    $fnm=$_FILES["bnkst"]["name"];
   $bnkst="files/".$v3.$fnm;
   move_uploaded_file($_FILES["bnkst"]["tmp_name"],$bnkst);
   $ext = pathinfo($fnm, PATHINFO_EXTENSION);
   

}



// $rentag="NULL";
// $feesb="NULL";
// $scrdoc="NULL";
// $ppdoc="NULL";
// $bnkst="NULL";
echo $ectrcty;
echo "<br>";
echo $gas;
echo "<br>";
echo $tlphn;
echo "<br>";
echo $watr;


   



$query="INSERT INTO `files`(`uob`, `fcnic`, `mcnic`,`gnic`, `ftax`, `mtax`, `gtax`, `fslry`, `mslry`, `gslry`,`etrctcty`, `gas`, `tlphn`, `wtr`, `rentag`, `feesb`, `scrdoc`, `ppdoc`, `bnkst`) VALUES('$uob','$fncnic','$mncnic','$gncnic','$$fincm','$mincm','$gincm','$fslry','$mslry','$gslry','$ectrcty','$gas','$tlphn','$watr', '$rentag', '$feesb', '$scrdoc', '$ppdoc', '$bnkst')";

$check=mysqli_query($mysqli,$query);
        }
?>
<!DOCTYPE html>
<html>
  <head>  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">

      $(document).ready(function() {

        $("#the_textcnicfather").live("change", function() {
          document.getElementById("Checkcnicfather").checked = true;
          
        })

      })
       $(document).ready(function() {

        $("#the_textcnicmother").live("change", function() {
          document.getElementById("Checkcnicmother").checked = true;
          
        })

      })
        $(document).ready(function() {

        $("#the_textcnicgaurdian").live("change", function() {
          document.getElementById("Checkcnicgrdian").checked = true;
          
        })

      })
        $(document).ready(function() {

        $("#the_textincmfather").live("change", function() {
          document.getElementById("Checkincmfather").checked = true;
          
        })

      })
        $(document).ready(function() {

        $("#the_textincmmother").live("change", function() {
          document.getElementById("Checkincmmother").checked = true;
          
        })

      })
        $(document).ready(function() {

        $("#the_textincmgaurdian").live("change", function() {
          document.getElementById("Checkincmgrdian").checked = true;
          
        })

      })
          $(document).ready(function() {

        $("#the_textslryfather").live("change", function() {
          document.getElementById("Checkslryfather").checked = true;
          
        })

      })
            $(document).ready(function() {

        $("#the_textslrymother").live("change", function() {
          document.getElementById("Checkslrymother").checked = true;
          
        })

      })
       $(document).ready(function() {

        $("#the_textslrygaurdian").live("change", function() {
          document.getElementById("Checkslrygrdian").checked = true;
          
        })

      })
        $(document).ready(function() {

        $("#the_texteclrcty").live("change", function() {
          document.getElementById("Checkecltrcty").checked = true;
          
        })

      })
         $(document).ready(function() {

        $("#the_textgas").live("change", function() {
          document.getElementById("Checkgas").checked = true;
          
        })

      })
         $(document).ready(function() {

        $("#the_texttlpn").live("change", function() {
          document.getElementById("Checktlphn").checked = true;
          
        })

      })
         $(document).ready(function() {

        $("#the_textwater").live("change", function() {
          document.getElementById("Checkwatr").checked = true;
          
        })

      })
          $(document).ready(function() {

        $("#the_rentag").live("change", function() {
          document.getElementById("Checkrentag").checked = true;
          
        })

      })
           $(document).ready(function() {

        $("#the_feesb").live("change", function() {
          document.getElementById("Checkfee").checked = true;
          
        })

      })
             $(document).ready(function() {

        $("#the_scrdoc").live("change", function() {
          document.getElementById("Checktsclrshp").checked = true;
          
        })

      })
             $(document).ready(function() {

        $("#the_ppdoc ").live("change", function() {
          document.getElementById("Checkppdoc").checked = true;
          
        })

      })
               $(document).ready(function() {

        $("#the_textbnk").live("change", function() {
          document.getElementById("Checkbnkst").checked = true;
          
        })

      })
         


     
    </script>
  </head>
  <body>
  <form method="POST" action="" enctype="multipart/form-data">
    <div class="container" >
	<h2>Application Form Check List</h2>
    <input type="checkbox" id="Checkcnicfather" value="">Copy of Father Cnic<br>
     <input type="checkbox" id="Checkcnicmother" value="">Copy of Mother Cnic<br>
       <input type="checkbox" id="Checkcnicgrdian" value="">Copy of Gaurdian Cnic<br>
       <!-- --><br><br>
       <input type="checkbox" id="Checkincmfather" value="">Copy of Income Tax (Father) <br>
     <input type="checkbox" id="Checkincmmother" value="">Copy of Income Tax (Mother)<br>
       <input type="checkbox" id="Checkincmgrdian" value="">Copy of Income Tax (Gaurdian)<br>
       <!--  --><br><br>
        <input type="checkbox" id="Checkslryfather" value="">Salary Certificate of (Father) <br>
     <input type="checkbox" id="Checkslrymother" value="">Salary Certificate of (Mother)<br>
       <input type="checkbox" id="Checkslrygrdian" value="">Salary Certificate of (Gaurdian)<br>
       <!--  --><br><br>
        <input type="checkbox" id="Checkecltrcty" value="">Copies of last six (06) months  (Electricity) <br>
     <input type="checkbox" id="Checkgas" value="">Copies of last six (06) months (Gas)<br>
       <input type="checkbox" id="Checktlphn" value="">Copies of last six (06) months  (Telephone)<br>
         <input type="checkbox" id="Checkwatr" value="">Copies of last six (06) months  (Water)<br>
       <!--  --><br><br>
        <input type="checkbox" id="Checkrentag" value="">Attested copy of House Rent Agreement (if applicable) <br>
     <input type="checkbox" id="Checkfee" value="">Copies of last & latest fee receipts of self and siblings <br>
       <input type="checkbox" id="Checktsclrshp" value="">Copies of previous scholarship(s) attained (if applicable)<br>
         <input type="checkbox" id="Checkppdoc" value="">Ownership Documents Land/Property (House, Shop, Land etc.)<br>
          <input type="checkbox" id="Checkbnkst" value="">Latest Bank Statement<br>
       <!--  --><br><br>


    Copy of Father Cnic<input type="file" name="fcnic" id="the_textcnicfather"><br> 
    Copy of Mother Cnic<input type="file" name="mcnic"  id="the_textcnicmother"><br>
     Copy of Gaurdian Cnic<input type="file" name="gcnic"  id="the_textcnicgaurdian"><br>
     <!--- income--><br><br>
     Copy of Income Tax (Father) <input type="file" name="incfcnic" id="the_textincmfather"><br> 
    Copy of Income Tax (Mother)<input type="file" name="incmmcnic"  id="the_textincmmother"><br>
     Copy of Income Tax (Gaurdian)<input type="file" name="incmgcnic"  id="the_textincmgaurdian"><br>
     <!-- -->
     <!--- income--><br><br>
    Salary Certificate of (Father) <input type="file" name="slryfcnic" id="the_textslryfather"><br> 
    Salary Certificate of(Mother)<input type="file" name="slrymcnic"  id="the_textslrymother"><br>
    Salary Certificate of (Gaurdian)<input type="file" name="slrygcnic"  id="the_textslrygaurdian"><br>
     <!-- -->
      <!--- income--><br><br>
    Copies of last six (06) months  (Electricity) <input type="file" name="ectrcty" id="the_texteclrcty"><br> 
    Copies of last six (06) months (Gas)<input type="file" name="gas"  id="the_textgas"><br>
   Copies of last six (06) months  (Telephone)<input type="file" name="tlphn"  id="the_texttlpn"><br>
     Copies of last six (06) months  (Water)<input type="file" name="wtr"  id="the_textwater"><br>
        <!--- income--><br><br>
    Attested copy of House Rent Agreement (if applicable) <input type="file" name="rentag" id="the_rentag"><br> 
    Copies of last & latest fee receipts of self and siblings<input type="file" name="feesb"  id="the_feesb"><br>
   Copies of previous scholarship(s) attained (if applicable)<input type="file" name="scrdoc"  id="the_scrdoc"><br>
     Ownership Documents Land/Property (House, Shop, Land etc.)<input type="file" name="ppdoc"  id="the_ppdoc"><br>
     Latest Bank Statement<input type="file" name="bnkst"  id="the_textbnk"><br>
     <!-- -->
     <input type="submit" value="Upload Image" name="submit">
	 </div>
   </form>
    
  </body>
</html>