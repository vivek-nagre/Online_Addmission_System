<?php
session_start();
if(!isset($_SESSION['U_ID'])){
	
  ?>
 <script> 
    window.open('login.php','_self');
    </script> 
   <?php 
  }


?>
<?php
if (!isset($_SESSION['ADHAR'])) {

  ?>
 <script> 
     alert(" INSERT YOUR PRRSONAL INFORMACTION !!");
    window.open('admission.php','_self');
    </script> 
   <?php 
  
}
?>



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
     <link rel="stylesheet" href="css/style.css" >

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plg.js"></script>
    <script type="text/javascript" src="js/cycle.js"></script>



    <title>Online addmision </title>
  </head>
  <body>
   <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['U_ID']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Update</a>
        </li>
      </ul>
        
      <a href="logout.php">
       <button type="button" class="btn btn-info">Log out</button></a>
      </div>
  </nav>
</header>
<br><br>
<table class="table table-sm table-success"  >
  <form action="adifodeta.php" method="post"  enctype="multipart/form-data">
     <tr align="center">
        <th align="center" colspan="4">
        <h3>Admission Informaction</h3> 
        </th>
    <tr>
  
    <tr>
	<th>
		Adhar No.
	</th>
	<th>
		
		<input type="text" name="ADHAR" value="<?php echo $_SESSION['ADHAR']; ?>" size="20">
	</th>
	<th>
		Mobaile No.
	 </th>
	 <th>
	  
	    <input type="text" name="MOB" size="20">
     <th>
       </tr>
      <tr>
        <th align="center" colspan="4">Cource :- 
          <select name="COURCE">
            <option placeholder="select">
              <option>BCS</option>
              <option>Bsc</option>
              <option>B.A</option>
              <option>B.COM</option>
            
            </option>
          </select>
        </th>
      </tr>
     <tr>
			<th colspan="4">
			Select /Opted Paper Section : (Write papers codes only in the boxes) 
		</th>
	</tr>
<tr>
	<th>
		1.
		<input type="text" name="SUB1" size="20">
	</th>
	<th>
		3.
		<input type="text" name="SUB3" size="20">
	</th>
	<th>
		5.
		<input type="text" name="SUB5" size="20">
	 </th>
	 <th>
	    7.
	    <input type="text" name="SUB7" size="20">
     <th>
  </tr>
<tr>
    <th>
    	2.
    	<input type="text" name="SUB2" size="20">
    </th>
    <th>
    	4.
    	<input type="text" name="SUB4" size="20">
    </th>
    <th>
    	6.
        <input type="text" name="SUB6" size="20">
    </th>
    <th>
    	8.
      	<input type="text" name="SUB8" size="20">
    </th> 	
</th>
</tr>
<tr>
	<th>
		Photo
	</th>
	<th>
		
		<input type="file" name="PHOTO" size="20">
	</th>
	<th>
		Signiture
	 </th>
	 <th>
	  
	    <input type="file" name="SIG" size="20">
     <th>
       </tr>
<tr>
<th colspan="4">
Attached Documents And Certificates Section :
<th>
</tr>
<tr>
<th>Sr No</th>
<th>Name Of Document Certificate </th>
<th>Original/Attested </th>
<th>Attached (Yes/No)</th
</tr>
<tr>
<th>1</th>
<td>Passing Certificate Of std 10<sup>th</sup></td>
<td>Attached True Copy (mandatory) </td>
<td>
<input type="file" name="STD10">
</td>

<tr>
<th>2</th>
<td>Passing Certificate Of 12<sup >th</s> <sup>th</sup></td>
<td> Attached True Copy </td>
<td>
<input type="file" name="STD12">
</td>
</tr>
<tr>
<th>3</th>
<td> Leaving Certificate </td>
<td> Original </td>
<td>
<input type="file" name="TC">
</td>
</tr>
<tr>
<th>4</th>
<td> Certificate Of Caste With Category </td>
<td>  Attached True Copy </td>
<td>
<input type="file" name="CAST">
</td>
</tr>
<tr>
<th>5</th>
<td> Non Criminy Layer Status </td>
<td>  Attached True Copy </td>
<td>
<input type="file" name="NC">
</td>
</tr>
<tr>
<th> 6</th>
<td> Affidavit For Changed Name Marriage Certificate </td>
<td>  Attached True Copy </td>
<td>
<input type="file" name="MC">
</td>
</tr>
<tr>
<th>7</th>
<td> Domicile Certificate </td>
<td>  Attached True Copy </td>
<td>
<input type="file" name="DC">
</td>
</tr>
<tr>
<th>8</th>
 <td>Certificate For Fhysially Challenged </td>
 <td>  Attached True Copy </td>
<td>
<input type="file" name="FC">
</td>
</tr>
<tr>
<th>9</th>
<td>Adhar Card</td>
<td>  Attached True Copy </td>
<td>
<input type="file" name="ADHARI">
</td>
</tr>
<tr>
<th align="center" colspan="4">
        <center><input type="submit" name="submit" class="btn btn-success"> </center>
        </form>
     </th>
</tr>
</table>

</body>
</html>