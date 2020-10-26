<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW DATA</title>
</head>
<body>
    
<?php require('headnav.php');?>
<br>




    <br>
<h1 style="font-family:TH Sarabun New; font-weight-bold New;  color:#003333"  align = "center">
<b>ข้อมูลผู้ลงทะบียน</b></h1>
<br>


<div class="form-group"align = "center" >
    <div class="card w-75 " style="border-color:#708090" >
        <div class="card-body " style="background-color:#F0F8FF">
            <div class="container">
<br>

<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button type="button" class="btn btn-secondary"> 
    <a href="" style="color:#FFFFFF"><b>ค้นหา</b></a></button>
    

<br>
            <table class="table">
  <thead class="thead" style="background-color: #2F4F4F ; color :white">
    <tr>
      <th scope="col"><h3 style="font-family:TH Sarabun New;">รหัสนักศึกษา</h3></th>
      <th scope="col"><h3 style="font-family:TH Sarabun New;">ชื่อ</h3></th>
      <th scope="col"><h3 style="font-family:TH Sarabun New;">นามสกุล</h3></th>
      <th scope="col"><h3 style="font-family:TH Sarabun New;"></h3></th>
    </tr>
  </thead>
  <?php
              include('condb.php');
              $showPersonal = $conn->prepare("SELECT * FROM `pessonal_tb` ");
              
			        $showPersonal->execute();
                    $result = $showPersonal->fetchAll();

                    foreach ($result as $row) {  
                ?>
  <tbody class="tbody" style="background-color: #8FBC8F ; ">
    <tr>
      <td><h3 style="font-family:TH Sarabun New;"><?php echo $row['STD_ID']?></h3></td>
      <td><h3 style="font-family:TH Sarabun New;"><?php echo $row['name']?></h3></td>
      <td><h3 style="font-family:TH Sarabun New;"><?php echo $row['lastname']?></h3></td>
      <td><h2 style="font-family:TH Sarabun New;">
      <button type="button" class="btn btn-secondary" >
      <a role="button" class="bt" href="showdata.php?STD_ID=<?php echo $result["STD_ID"]; ?>" style="color:#FFFFFF">
      <b><?php echo "ดูรายละเอียด"; ?></b></a>
      </button>
    </h2>  </td>
    </tr>
    <?php 
      };
    ?>
  </tbody>
</table>
</form>


            </div>
        </div>
    </div>
</div>



</body>
</html>