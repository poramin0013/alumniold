<?php session_start();
include('condb.php'); ?>
<html>
<head>
</head>
<body>
<br><br><br>
    <div class="container">
        <div class="card">
            <!-- Default form register -->
            <form class="text-center  border-dark p-5" action="sql/enroll.php" method="POST" align="center">

                <h1>ลงทะเบียน</h1>
                <br>

                <?php
                include('sql/connect.php');
                $sql = "SELECT * FROM `study_tb`,`pessonal_tb`,`address_tb`,`contact_tb`,`contact_tb`
                    WHERE study_tb.STD_ID = '" . $_GET['STD_ID'] . "' 
                    and pessonal_tb.STD_ID = study_tb.STD_ID             
                    and address_tb.STD_ID = study_tb.STD_ID
                    and contact_tb.STD_ID=study_tb.STD_ID
                    and address_tb.STD_ID= study_tb.STD_ID ";

                $stmt = $conn->query($sql);


                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลการศึกษา</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row ">

                            <div class="col">
                                <!-- E-mail -->
                                <label> รหัสนักศึกษา </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['STD_ID']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> ปีที่จบการศึกษา </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['YEARCON']; ?>
                            </div>
                        </div>
                        <p></p>
                    </div>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลส่วนตัว</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> คำนำหน้า </label>&emsp;&emsp;
                                <?php echo  $result['title']; ?>
                            </div>
                            <div class="col">
                                <!-- E-mail -->
                                <label> ชื่อ</label>&emsp;&emsp;
                                <?php echo  $result['name']; ?>
                                &emsp;&emsp;&emsp;
                                <!-- password -->
                                <label> นามสกุล</label>&emsp;&emsp;
                                <?php echo  $result['lastname']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col">
                                <label>เพศ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['gender']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label>เลขประจำประชาชน</label>&emsp;&emsp;
                                <?php echo  $result['C_ID']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col-6">
                                <!-- E-mail -->
                                <label>วัน / เดือน / ปีเกิด</label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['BD']; ?>
                            </div>

                        </div>
                        <p></p>
                        <br>

                        <u>
                            <h5 align="left">ที่อยู่ตามทะเบียนบ้าน</h5>
                        </u>
                        <br>

                        <div class="form-row">
                            <div class="col ">
                                <!-- E-mail -->
                                <label> บ้านเลขที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['HOME_N']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> หมู่ที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['MOO']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> แขวง/ตำบล </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['KT']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> เขต/อำเภอ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['KA']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col-6">
                                <!-- E-mail -->
                                <label> จังหวัด </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['CH']; ?>
                            </div>
                            <div class="col-6">
                                <!-- E-mail -->
                                <label> รหัสไปรษณีย์ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['HOME_P']; ?>
                            </div>
                        </div>
                    </div>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลการติดต่อ</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> E-mail </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['email']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> เบอร์โทรศัพท์ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['tel']; ?>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> Facebook </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['facebook']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> ID Line </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['line']; ?>
                            </div>
                        </div>
                        <p></p>

                    </div>
                    <p></p>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลการทำงาน</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row">
                            <div class="col">
                                <label> ตำแหน่งการทำงาน </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['POS']; ?>
                            </div>
                            <div class="col">
                                <label> สถานที่ทำงาน </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['W_N']; ?>
                            </div>

                        </div>
                        <p></p>
                        <br>
                        <u>
                            <h5 align="left">ที่ติดต่อที่ทำงาน</h5>
                        </u>
                        <br>

                        <div class="form-row">
                            <div class="col ">
                                <!-- E-mail -->
                                <label> บ้านเลขที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['W_P']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> หมู่ที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['W_MOO']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> ตำบล </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['W_KT']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> อำเภอ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['W_KA']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col-6">
                                <!-- E-mail -->
                                <label style="font-family:TH Sarabun New; color:#FF6600"> จังหวัด </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['W_CH']; ?>
                            </div>
                            <div class="col-6">
                                <!-- E-mail -->
                                <label style="font-family:TH Sarabun New; color:#FF6600"> รหัสไปรษณีย์ </label>&emsp;&emsp;&emsp;
                                <?php echo  $result['W_C']; ?>
                            </div>

                        </div>
                        <p></p>

                    </div>
                    <br><br><br><br><br>


                    <div class="b1" align="right">

                        <a href="update.php"><button type="button" class="btn btn-color:#FF6600">อัปเดทข้อมูล</button></a>

                        <!-- Sign up button -->
                        <a href="index.php"><button type="button" class="btn btn-color:#FF6600">ตกลง</button></a>

                    </div>

                <?php
                }
                ?>
            </form>
            <!-- Default form register -->
        </div>
    </div>
    </div>
    <br><br><br><br>
</body>
</html>