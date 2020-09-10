<?php
       if(!empty($_POST['submit']))
       {
           $nam =$_POST['name'];
           $ag =$_POST['age'];
           $num =$_POST['number'];
           $cit =$_POST['city'];
           $tot =$_POST['total'];

            require("fpdf/fpdf.php");
            $pdf=new FPDF();
            $pdf->AddPage();

            $pdf->SetFont("Arial","B",16);
            $pdf-> Cell(10,10,"Total Bill",1,0,C);


            $pdf->output();
       }
    ?>  