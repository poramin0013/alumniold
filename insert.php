<?php
    include("condb.php");
      // print_r($_POST);
      // print_r($_FILES);


      // ตาราง study_tb
      $STD_ID = $_POST["STD_ID"];
      $YEARCON = $_POST["YEARCON"];


      // ตาราง personal_tb
      $title = $_POST["title"];
      $name = $_POST["name"];
      $lastname = $_POST["lastname"];
      $gender = $_POST["gender"];
      $C_ID = $_POST["C_ID"];
      $BD = $_POST["BD"];


      //ตาราง address_tb
      $HOME_N = $_POST["HOME_N"];
      $MOO = $_POST["MOO"];
      $KT = $_POST["KT"];
      $KA = $_POST["KA"];
      $CH = $_POST["CH"];
      $HOME_P = $_POST["HOME_P"];


      // ตาราง contact_tb
      $email = $_POST["email"];
      $tel = $_POST["tel"];
      $facebook = $_POST["facebook"];
      $line = $_POST["line"];


      // ตาราง work_tb
       $POS= $_POST["POS"];
       $W_N= $_POST["W_N"];
       $W_P = $_POST["W_P"];
       $W_MOO = $_POST["W_MOO"];
       $W_KT = $_POST["W_KT"];
       $W_KA = $_POST["W_KA"];
       $W_CH = $_POST["W_CH"];
       $W_C = $_POST["W_C"];
      


      // ตาราง study_tb
      try{   
            $insert = $conn->prepare("INSERT INTO `study_tb`(`STD_ID`, `YEARCON`) VALUES 
            (:STD_ID,:YEARCON)");

            $insert->bindparam(":STD_ID",$STD_ID);
            $insert->bindparam(":YEARCON",$YEARCON);
            $insert->execute();
      }
      catch(PDOException $error){
            echo $sql . "<br>" . $error->getMessage();
      }

      
      
        // ตาราง personal_tb
      try{   
            $insert_personal = $conn->prepare("INSERT INTO `pessonal_tb`(`STD_ID`,`title`, `name`, `lastname`, `gender`, `C_ID`, `BD`) VALUES 
            (:STD_ID,:title,:name,:lastname,:gender,:C_ID,:BD )");
            $insert_personal->bindparam(":STD_ID",$STD_ID);
            $insert_personal->bindparam(":title",$title);
            $insert_personal->bindparam(":name",$name);
            $insert_personal->bindparam(":lastname",$lastname);
            $insert_personal->bindparam(":gender",$gender);
            $insert_personal->bindparam(":C_ID",$C_ID);
            $insert_personal->bindparam(":BD",$BD);
            $insert_personal->execute();
      }
      catch(PDOException $error){
            echo $sql . "<br>" . $error->getMessage();
      }

     
      
            //ตาราง address_tb
      try{   
            $insert_address = $conn->prepare("INSERT INTO `address_tb`(`STD_ID`,`HOME_N`, `MOO`, `KT`, `KA`, `CH`, `HOME_P`) VALUES (:STD_ID,:HOME_N,:MOO,:KT,:KA,:CH,:HOME_P)");
            $insert_address->bindparam(":STD_ID",$STD_ID);
            $insert_address->bindparam(":HOME_N",$HOME_N);
            $insert_address->bindparam(":MOO",$MOO);
            $insert_address->bindparam(":KT",$KT);
            $insert_address->bindparam(":KA",$KA);
            $insert_address->bindparam(":CH",$CH);
            $insert_address->bindparam(":HOME_P",$HOME_P);
            $insert_address->execute();
      }
      catch(PDOException $error){
            echo $sql . "<br>" . $error->getMessage();
      }
    


            // ตาราง contact_tb
      try{   
        $insert_contact = $conn->prepare("INSERT INTO `contact_tb`(`STD_ID`, `email`, `tel`, `facebook`, `line`) VALUES (:STD_ID,:email,:tel,:facebook,:line)");
        $insert_contact->bindparam(":STD_ID",$STD_ID);
        $insert_contact->bindparam(":email",$email);
        $insert_contact->bindparam(":tel",$tel);
        $insert_contact->bindparam(":facebook",$facebook);
        $insert_contact->bindparam(":line",$line);
        $insert_contact->execute();
  }
  catch(PDOException $error){
        echo $sql . "<br>" . $error->getMessage();
  }


    // ตาราง work_tb
    try{   
        $insert_work = $conn->prepare("INSERT INTO `work_tb`(`STD_ID`, `POS`, `W_N`, `W_P`, `W_MOO`, `W_KT`, `W_KA`, `W_CH`, `W_C`) VALUES (:STD_ID,:POS,:W_N,:W_P,:W_MOO,:W_KT,:W_KA,:W_CH,:W_C)");
        $insert_work->bindparam(":STD_ID",$STD_ID);
        $insert_work->bindparam(":POS",$POS);
        $insert_work->bindparam(":W_N",$W_N);
        $insert_work->bindparam(":W_P",$W_P);
        $insert_work->bindparam(":W_MOO",$W_MOO);
        $insert_work->bindparam(":W_KT",$W_KT);
        $insert_work->bindparam(":W_KA",$W_KA);
        $insert_work->bindparam(":W_CH",$W_CH);
        $insert_work->bindparam(":W_C",$W_C);
        $insert_work->execute();
  }
  catch(PDOException $error){
        echo $sql . "<br>" . $error->getMessage();
  }


  


      header("Location: index.php");


?>