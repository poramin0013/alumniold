<?php session_start();
include('condb.php'); ?>
<html>
<head>
</head>
<body>
<?php
                    include('condb.php');
                 echo   $sql = "SELECT * FROM `pessonal_tb`,`study_tb`
                    WHERE pessonal.STD_ID = study_tb.STD_ID";
                    $stmt = $conn->query($sql);


                    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr align="center">
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo  $result['STD_ID']; ?>
                                    </div>
                                </z>
                            </td>
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo  $result['name']; ?>
                                    </div>
                                </z>
                            </td>
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo  $result['lastname']; ?>
                                    </div>
                                </z>
                            </td>
                            
                            <td>
                                <z>
                                    <div align="center">
                                        <a role="button" class="btn btn-color:#FF6600" style="color:#FF6600" href="showdata.php?STD_ID=<?php echo $result["STD_ID"]; ?>">
                                            <?php echo "ดูรายละเอียดข้อมูล"; ?>
                                        </a>
                                    </div>
                                </z>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
</body>
</html>