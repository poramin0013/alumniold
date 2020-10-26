<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    
<?php require('headnav.php');?>

<div class="form-group"align = "center" >
    <div class="card w-75 " style="border-color:#708090" >
        <div class="card-body " style="background-color:#F0F8FF">
 

<div class="container">
        <!-- Default form register -->
        <form class="text-center  border-dark p-5" action="insert.php" method="POST">

            <h1 style="font-family:TH Sarabun New; color:#145139" ><b>ลงทะเบียน</b></h1>
            <br>

            <br>
            
                <h2 align="left" style="font-family:TH Sarabun New; color:#009058" ><b>ข้อมูลการศึกษา</b></h2>
            
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">

                    <div class="col">
                        <!-- E-mail -->
                        <label style="font-family:Courier New; color:#003333" > รหัสนักศึกษา </label>
                        <input type="text" class="form-control" name="STD_ID" id="STD_ID" required>
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label style="font-family:Courier New; color:#003333" > ปีที่จบการศึกษา </label>
                        <input type="text" class="form-control" name="YEARCON" id="YEARCON">
                    </div>
                </div>
                <p></p>
            </div>

            <br>
            
                <h2 align="left" style="font-family:TH Sarabun New; color:#145139"><b>ข้อมูลส่วนตัว</b></h2>
            
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">
                    <div class="col">   
                        <label style="font-family:Courier New; color:#003333" > คำนำหน้านาม </label>
                        <select  name ="title" id="title" class="custom-select" required>
                            <option selected disabled>...</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>


                    <div class="col">
                    <label style="font-family:Courier New; color:#003333" > ชื่อ </label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="" required >
                    </div>


                    <div class="col">
                        


                        <label style="font-family:Courier New; color:#003333" > นามสกุล </label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="" required >
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                        <label style="font-family:Courier New; color:#003333">เพศ </label>
                        <input type="text" class="form-control" name="gender" id="gender">
                    </div>
                    <div class="col">
                        


                        <label style="font-family:Courier New; color:#003333">เลขประจำประชาชน</label>
                        <input type="text" id="C_ID" name="C_ID" class="form-control" placeholder="" required>
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        


                        <label style="font-family:Courier New; color:#003333">วัน / เดือน / ปีเกิด</label>
                        <input type="date" id="BD" name="BD" class="form-control" placeholder="" required >
                    </div>

                </div>
                <p></p>
                <br>
                
                    <h2 align="left" style="font-family:TH Sarabun New; color:#145139"><b>ที่อยู่ตามทะเบียนบ้าน</b></h2>
                
                <br>

                <div class="form-row mb-4">
                    <div class="col ">
                       


                        <label style="font-family:Courier New; color:#003333"> บ้านเลขที่ </label>
                        <input type="text" id="HOME_N" name="HOME_N" class="form-control" placeholder="" required >
                    </div>
                    <div class="col">
                        


                        <label style="font-family:Courier New; color:#003333"> หมู่ที่ </label>
                        <input type="text" id="MOO" name="MOO" class="form-control" placeholder="" required>
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                        


                        <label style="font-family:Courier New; color:#003333"> แขวง/ตำบล </label>
                        <input type="text" id="KT" name="KT" class="form-control" placeholder="" required>
                    </div>
                    <div class="col">
                        


                        <label style="font-family:Courier New; color:#003333"> เขต/อำเภอ </label>
                        <input type="text" id="KA" name="KA" class="form-control" placeholder="" required>
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        


                        <label style="font-family:Courier New; color:#003333"> จังหวัด </label>
                        <input type="text" class="form-control" name="CH" id="CH" placeholder="" required >
                    </div>
                    <div class="col-6">
                        


                        <label style="font-family:Courier New; color:#003333"> รหัสไปรษณีย์ </label>
                        <input type="text" id="HOME_P" name="HOME_P" class="form-control" placeholder="" required >
                    </div>
                </div>



            </div>

            <br>
            
                <h2 align="left" style="font-family:TH Sarabun New; color:#145139"><b>ข้อมูลการติดต่อ</b></h2>
            
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">
                    <div class="col">
                      


                        <label style="font-family:Courier New; color:#003333"> E-mail </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="" required>
                    </div>
                    <div class="col">
        


                        <label style="font-family:Courier New; color:#003333"> เบอร์โทรศัพท์ </label>
                        <input type="text" name="tel" id="tel" class="form-control" placeholder="">
                    </div>
                </div>
                <p></p>
                <div class="form-row mb-4">
                    <div class="col">
                        


                        <label style="font-family:Courier New; color:#003333"> Facebook </label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="" required>
                    </div>
                    <div class="col">
                      


                        <label style="font-family:Courier New; color:#003333"> ID Line </label>
                        <input type="text" name="line" id="line" class="form-control" placeholder="" required>
                    </div>
                </div>
                <p></p>


            </div>
            <p></p>

            <br>
            
                <h2 align="left" style="font-family:TH Sarabun New; color:#145139"><b>ข้อมูลการทำงาน</b></h2>
            
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">
                    <div class="col">
                        <label style="font-family:Courier New; color:#003333"> ตำแหน่งการทำงาน </label>
                        <input type="text" id="POS" name="POS" class="form-control" placeholder="" required>
                    </div>
                    <div class="col">
                        <label style="font-family:Courier New; color:#003333"> สถานที่ทำงาน </label>
                        <input type="text" id="W_N" name="W_N" class="form-control" placeholder="" required>
                    </div>

                </div>
                <p></p>
                <br>
                
                    <h2 align="left" style="font-family:TH Sarabun New; color:#145139"><b>ที่ติดต่อที่ทำงาน</b></h2>
                
                <br>

                <div class="form-row mb-4">
                    <div class="col ">
                        

                        
                        <label style="font-family:Courier New; color:#003333"> บ้านเลขที่ </label>
                        <input type="text" id="W_P" name="W_P" class="form-control" placeholder="" required>
                    </div>
                    <div class="col">
                        


                        <label style="font-family:Courier New; color:#003333"> หมู่ที่ </label>
                        <input type="text" id="W_MOO" name="W_MOO" class="form-control" placeholder="" required>
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                       


                        <label style="font-family:Courier New; color:#003333"> แขวง/ตำบล </label>
                        <input type="text" id="W_KT" name="W_KT" class="form-control" placeholder="" required>
                    </div>
                    <div class="col">
                        


                    <label style="font-family:Courier New; color:#003333"> เขต/อำเภอ </label>
                        <input type="text" id="W_KA" name="W_KA" class="form-control" placeholder="" required >
                    </div>  
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        


                        <label style="font-family:Courier New; color:#003333"> จังหวัด </label>
                        <input type="text" class="form-control" name="W_CH" id="W_CH" placeholder="" required >
                    </div>
                    <div class="col-6">
                        


                        <label style="font-family:Courier New; color:#003333">  รหัสไปรษณีย์ </label>
                        <input type="text" id="W_C" name="W_C" class="form-control" placeholder="" required >
                    </div>

                </div>
                <p></p>
            </div>
            <br><br>

            <div class="b1" align="rightcenter">
                


                <button type="submit" name="submit" class="btn btn-color:#003333"  style="font-family:Courier New; color:#FFFFFF; background-color:#003333" >ตกลง</button>
            </div>
            <br>
            <div>
                

                
                
            </div>
            
            
            


            

           
            

        </form>
        

        <br>
        <br>
    </div>


        </div>
    </div>
</div>
</body>
</html>