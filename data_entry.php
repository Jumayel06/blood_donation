<?php
		$connection = mysql_connect('localhost','root','') or die(mysql_error());
        $database = mysql_select_db("blood_donation",$connection);
       
    	mysql_query("insert into patient(bank_id,patient_name,patient_govt_id,patient_blood_group,patient_disease,patient_contact_no,patient_address,patient_city) 
    		values (8,'Saikat Shafiq',800811,'A+','Accident','0172222123','201/A Kamlapur,Dhaka','Dhaka')");

    	mysql_query("insert into patient(bank_id,patient_name,patient_govt_id,patient_blood_group,patient_disease,patient_contact_no,patient_address,patient_city) 
    		values (8,'Awonuzzaman',800812,'A-','Accident','01764442123','12/A Agargaon,Faridpur','Faridpur')");

    	mysql_query("insert into patient(bank_id,patient_name,patient_govt_id,patient_blood_group,patient_disease,patient_contact_no,patient_address,patient_city) 
    		values (8,'Asaduzzaman',800813,'AB+','Accident','01765632123','145/F Uttara,Dhaka','Dhaka')");

    	mysql_query("insert into patient(bank_id,patient_name,patient_govt_id,patient_blood_group,patient_disease,patient_contact_no,patient_address,patient_city) 
    		values (6,'Badhon Kabir',700709,'A+','Accident','01756432123','12/25 TetulTola,Bagherhat','Bagherhat')");

    	mysql_query("insert into patient(bank_id,patient_name,patient_govt_id,patient_blood_group,patient_disease,patient_contact_no,patient_address,patient_city) 
    		values (6,'Fahim Firoz',700710,'A-','Accident','01765765123','42, Jigira,Jessore','Jessore')");

    	mysql_query("insert into patient(bank_id,patient_name,patient_govt_id,patient_blood_group,patient_disease,patient_contact_no,patient_address,patient_city) 
    		values (6,'Murad Sarkar',700711,'A-','Accident','01987432123','233 Kalibari,Jessore','Jessore')");

?>
