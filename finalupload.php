<?php
    $con = mysqli_connect("localhost","root","","newemp_management");//It is advisable to use mysqli
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }else{
        echo("success");
    }

    $upload_dir = 'C:\xampp\htdocs\sih/';//Where you want to save the CSV file for future use.
    $upload_file = $upload_dir . $_FILES['fileToUpload']['name'];
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $upload_file)) {
        $i=0;
        $uploadMessage = "";
        $file = fopen($upload_file,"r");
        while(!feof($file))
        {
            $i++;
            $dataLine = fgets($file);
            $dataArray = explode(",",$dataLine);
            echo "work";

            //validate the CSV file.If number of columns in the csv file is not 3 then ignore the line.
              if(count($dataArray) == 12){    
                //Get each column data
                $col1 = $dataArray[0];
                $col2 = $dataArray[1];
                 $col3 = $dataArray[2];
                  $col4 = $dataArray[3];
                   $col5 = $dataArray[4];
                    $col6 = $dataArray[5];
                     $col7 = $dataArray[6];
                      $col8 = $dataArray[7];
                 $col9 = $dataArray[8];
                  $col10 = $dataArray[9];
                   $col11 = $dataArray[10];
                    $col12 = $dataArray[11];

                //Continue Like This(if number field is more) and User your Table Name and Column as per your DB table.
$sqlQuery = "INSERT INTO task_analysis(	sr_no,department, primary_key, task_id, status, time_rating, y_time, quality_rating, y_quality, team_rating, y_team, performance) values('$col1','$col2','$col3','$col4','$col5','$col6','$col7','$col8','$col9','$col10','$col11','$col12')"; 
              
                if(mysqli_query($con,$sqlQuery)){
                    $uploadMessage .= "<br/>Sucess, Row ".$i ." is inserted into DB successfully";
                }
    
                	else{
                    $uploadMessage .= "<br/> Erroe, Row ".$i ." is Not inserted into DB successfully" .mysqli_error();
                }
            }
            if(count($dataArray) == 4){    
                //Get each column data
                $col1 = $dataArray[0];
                $col2 = $dataArray[1];
                 $col3 = $dataArray[2];
                  $col4 = $dataArray[3];
                   
                  
                //Continue Like This(if number field is more) and User your Table Name and Column as per your DB table.
$sqlQuery = "INSERT INTO task_details(	task_id,  department, training, duration) values('$col1','$col2','$col3','$col4')"; 
              
                if(mysqli_query($con,$sqlQuery)){
                    $uploadMessage .= "<br/>Sucess, Row ".$i ." is inserted into DB successfully";
                }
    
                	else{
                    $uploadMessage .= "<br/> Erroe, Row ".$i ." is Not inserted into DB successfully" ;//.mysqli_error();
                }
            }

            //else{
              //  $uploadMessage .= "Line number ".$i ." Is Invalid format.";
             if(count($dataArray) == 8){    
                //Get each column data
                $col1 = $dataArray[0];
                $col2 = $dataArray[1];
                 $col3 = $dataArray[2];
                  $col4 = $dataArray[3];
                   $col5 = $dataArray[4];
                    $col6 = $dataArray[5];
                     $col7 = $dataArray[6];
                      $col8 = $dataArray[7];
                //Continue Like This(if number field is more) and User your Table Name and Column as per your DB table.
$sqlQuery = "INSERT INTO employ_details(primary_key,name,trainee_id,email,phone_no,user_type,department,password) values('$col1','$col2','$col3','$col4','$col5','$col6','$col7','$col8')"; 
              
                if(mysqli_query($con,$sqlQuery)){
                    $uploadMessage .= "<br/>Sucess, Row ".$i ." is inserted into DB successfully";
                }
    
                	else{
                    $uploadMessage .= "<br/> Erroe, Row ".$i ." is Not inserted into DB successfully" .mysqli_error();
                }
            }
           
            
    }    
        echo "File data Imported to DB with following message <br/>".$uploadMessage;
        fclose($file);

    }else{
        echo "File is not Uploaded Successfully";
    }   
?>