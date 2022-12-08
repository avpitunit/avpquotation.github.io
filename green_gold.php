<?php
if($_POST){
    require('fpdf/fpdf.php');
    $fname = $_POST['fname'];
    $iname = $_POST['iname'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $ben = $_POST['ben'];
    $title = 'QUOTATION';
    $heading = 'AGRO VENTURES PLANTATIONS LTD';
    $headadd = 'Level 26, East Tower, World Trade Center, Echelon Square, Colombo';
    $headtel = 'Tel: +94 11-743-0250 / 0761436072';
    $headweb = 'Web: www.agroventuresplantations.com';
    $headmail = 'Email: info@agroventuresplantations.com';
    $product = 'Product: Green Gold Harvest Plan';
    $inves = 'Rs.843,750/-';
    $invesw='(Rupees Eight hundred foty three thousand & seven hundred fifty Only)';
    $monpay='Monthly Payment - Rs.23,437/- X 36 Months';
    //$invesw1 = '(Two Million Five Hundred Thousand Rupees Only)';
    //$invesw2 = '(Five Million Rupees Only)';
    //$invesw3 = '(Seven Million Five Hundred Thousand Rupees Only)';
    //$invesw4 = '(Ten Million Rupees Only)';
    //$invesw5 = '(Twenty Million Rupees Only)';
    $term = '6 Years';
    $payterm = '3 Years';
    $paymode = 'Monthly';
    $gm1 = 'Rs.2,109,375/-';
    $gm1w1 = '(Rupees Two Million One Hundred Nine Thousand Three Hundred Seventy Five)';
    //$gm2 = 'Rs.145,832/- X 60 Months';
    //$gm2w2 = '(One Hundred Forty Five Thousand Eight Hundred thirty two X 60 Months)';
    //$gm3 = 'Rs.218,750/- X 60 Months';
    //$gm3w3 = '(Two Hundred Eighteen Thousand Seven Hundred Fifty X 60 Months)';
    //$gm4 = 'Rs.291,666/- X 60 Months';
    //$gm4w4 = '(Two Hundred Ninty One Thousand Six Hundred Sixty Six X 60 Months)';
    //$gm5 = 'Rs.583,333/- X 60 Months';
    //$gm5w5 = '(Five Hundred Eighty Three Thousand Three Hundred Thirty Three)';
    //$gm1w2 = ')';
    $illm1 = 'Rs.4,000,000/- (Four Million rupees Only)';
    //$illm2 = 'Rs.5,000,000/-';
    //$illm3 = 'Rs.7,500,000/-';
    //$illm4 = 'Rs.10,000,000/-';
    //$illm5 = 'Rs.20,000,000/-';
    //$illm1w = 'Two Million & five hundred thousand rupees Only';
    //$illm2 = 'Rs.5,000,000/-'
   // $fgben1 = '(Rupees Eight hundred forty three thousand & seven hundred fifty Only)';
   // $fgbenpes = '(100% of Invested Amount)';
   // $ben3 = 'Rs.2,109,375/-';
   // $ben31 = '(Rupees Two million one hundred nine thousand seven hundred & Fifty Only)';
   // $ben3pec = '(50% Annual Benifit)';
    $exland = '10 Perch (security)';
    //$exland2 = '20 Perch (security)';
    //$exland3 = '40 Perch (security)';
    //$exland4 = '60 Perch (security)';
    //$exland5 = '80 Perch (security)';
    $vanplantnum = '100';
    //$vanplantnum2 = '400';
    //$vanplantnum3 = '600';
    //$vanplantnum4 = '800';
    //$vanplantnum5 = '1000';
    $security = '"Land as security will be transferred to the purchaser at the ';
    $security2 = 'end/ completion of the pay agreement term"';
    $lra = 'Rs.337,500/-';
    //$lra2 = 'Rs.2,000,000/- (Two Million rupees Only)';
    //$lra3 = 'Rs.3,000,000/- (Three Million rupees Only)';
    //$lra4 = 'Rs.4,000,000/- (Four Million rupees Only)';
    //$lra5 = 'Rs.5,000,000/- (Five Million rupees Only)';
    
    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf -> SetTitle($title);


    

    // adding Palatino Linotype Font
    $pdf -> AddFont('Palatino Linotype','','palab.php');
    $pdf -> SetFont('Palatino Linotype', '', 20);
    $w = $pdf -> GetStringWidth($title) + 6;
    $pdf -> SetX((210-$w)/2);

    // Image (file name, x position, y position, width and height)

    $pdf ->image('logo.png', 10, 5,100);

    // Agro Ventures Heading
   
    //$pdf -> Cell($w,9, $heading, 0, 0, 'C');
    $pdf->Ln(10);

    // Address in heading
    $pdf -> SetX(35);
    $pdf -> SetFontSize(7);
    $w = $pdf -> GetStringWidth($headadd)+6;
    $pdf -> Cell(80,10, $headadd, 0, 0, 'L');
    $pdf->Ln(3);

    // Tel Num in Heading 
    $pdf -> SetX(35);
    $pdf -> SetFontSize(7);
    $w = $pdf -> GetStringWidth($headtel)+6;
    $pdf -> Cell(80,10, $headtel, 0, 0, 'L');
    $pdf->Ln(3);

    // Web address
    $pdf -> SetX(35);
    $pdf -> SetFontSize(7);
    $w = $pdf -> GetStringWidth($headweb)+6;
    $pdf -> Cell(80,10, $headweb, 0, 0, 'L');
    $pdf->Ln(3);

    // Email
    $pdf -> SetX(35);
    $pdf -> SetFontSize(7);
    $w = $pdf -> GetStringWidth($headmail)+6;
    $pdf -> Cell(80,10, $headmail, 0, 0, 'L');
    $pdf->Ln(15);

    // Title "QUOTATION"

    $pdf -> SetFontSize(15);
    $pdf -> Cell(0,10, $title, 0, 0, 'C');
    
    // line break
    $pdf->Ln(10);

    // Product Type
    $pdf -> SetX(20);
    $pdf -> SetFontSize(10);
    $w = $pdf -> GetStringWidth($product)+6;
    $pdf -> Cell(74,10, $product, 0, 0, 'C');
    $pdf -> SetX(150);
    // ------------- Date -------- date("Y/m/d") ------------
    $pdf -> Cell(25,10,'Date    :',0,0,'L');
    $pdf -> SetX(170);
    $pdf -> Cell (30,10,date("Y/m/d"),0,0,'L');
    $pdf -> Ln(2);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);
    
    // Full Name
    
    $pdf -> SetFontSize(10);
    $w = $pdf -> GetStringWidth($fname)+6;
    
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Full Name                                      :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(100,10, $fname, 0, 0, 'L');
    $pdf -> Ln(2);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(10);

    // Name with initials

    $pdf -> SetFontSize(10);
    $w = $pdf -> GetStringWidth($iname)+6;
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Name With Initials                      :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(100,10, $iname, 0, 0, 'L');
    $pdf -> Ln(2);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(10);
    
    // Address

    $pdf -> SetFontSize(10);
    $w = $pdf -> GetStringWidth($address)+6;
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Address                                          :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(100,10, $address, 0, 0, 'L');
    $pdf -> Ln(2);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(10);

    // NIC Number

    $pdf -> SetFontSize(10);
    $w = $pdf -> GetStringWidth($nic)+6;
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'NIC No                                           :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(100,10, $nic, 0, 0, 'L');
    $pdf -> Ln(2);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(10);

    // Beneficiary
    $pdf -> SetFontSize(10);
    $w = $pdf -> GetStringWidth($ben)+6;
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Name Of Beneficiary                   :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(100,10, $ben, 0, 0, 'L');
    $pdf -> Ln(2);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Total Investment

    

    $pdf -> SetFontSize(10);
    $w = $pdf -> GetStringWidth($inves)+6;
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Total Investment                          :', 0, 0, 'L');

    $pdf -> SetX(90);
    $pdf -> Cell(65,10, $inves, 0, 0, 'L');
    $pdf ->Ln(2);
    //$pdf -> SetFontSize(8);
    $pdf -> SetX(90);
    $pdf -> SetFontSize(8);
    $pdf -> Cell(100,15, $invesw,0,0,'L');
    $pdf -> SetX(90);
    $pdf -> SetFontSize(8);
    $pdf -> Cell(100,22, $monpay,0,0,'L');
    $pdf ->Ln(1);
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(100,15, $invesw,0,0,'L');
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(100,22, $inves2,0,0,'L');
    $pdf -> SetFontSize(10);
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);
    
    // Term

    $pdf -> SetFontSize(10);
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Term                                               :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(50,10, $term, 0, 0, 'L');
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Paying Term

    $pdf -> SetFontSize(10);
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Paying term                                   :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(50,10, $payterm, 0, 0, 'L');
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Mode of payment

    $pdf -> SetFontSize(10);
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Mode of Payment                             :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> Cell(50,10, $paymode, 0, 0, 'L');
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Guaranteed Maturity

    $pdf -> SetFontSize(10);
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Guaranteed Maturity                       :', 0, 0, 'L');

        $pdf -> SetX(90);
        $pdf -> Cell(100,10, $gm1, 0, 0, 'L');
        $pdf -> Ln(3);
        $pdf -> SetFontSize(8);
        $pdf -> SetX(90);
        $pdf -> Cell(100,10, $gm1w1, 0, 0, 'L');
        

    //$pdf -> SetX(90);
   // $pdf -> Cell(100,10, $monben, 0, 0, 'L');
    // $pdf ->Ln(1);
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(100,15, $monben1,0,0,'L');
   // $pdf ->Ln(1);
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(100,20, $benpec1,0,0,'L');
    $pdf -> SetFontSize(10);
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Illustrated Maturity

    $pdf -> SetFontSize(10);
    $pdf -> SetX(25);
    $pdf -> Cell(65,10, 'Illustrated Maturity                         :', 0, 0, 'L');

    $pdf -> SetX(90);
    $pdf -> Cell(65,10, $illm1, 0, 0, 'L');
    $pdf ->Ln(4);
    //$pdf -> SetFontSize(8);
   
   // $pdf ->Ln(1);
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(100,15, $invesw,0,0,'L');
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(100,22, $inves2,0,0,'L');
   // $pdf -> SetFontSize(10); 

   // $pdf ->Ln(1);
   // $pdf -> SetX(50);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(30,15, $ben2, 0, 0, 'L');
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(10);
  //  $pdf -> Cell(100,8, $fgben, 0, 0, 'L');
  //  $pdf -> SetX(90);
  //  $pdf -> SetFontSize(8);
  //  $pdf -> Cell(100,15, $fgben1,0,0,'L');
   // $pdf ->Ln(1);
   // $pdf -> SetX(90);
   // $pdf -> SetFontSize(8);
   // $pdf -> Cell(100,20, $fgbenpes,0,0,'L');
    $pdf -> SetFontSize(10);
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Extent of the land
    $pdf -> SetX(25);
    $pdf -> SetFontSize(10);
    $pdf -> Cell(65,10, 'Extent of the land                             :', 0, 0, 'L');
    $pdf -> SetX(90);

        $pdf -> SetX(90);
        $pdf -> Cell(100,10, $exland, 0, 0, 'L');
        

  //  $pdf -> Cell(100,10, $ben3, 0, 0, 'L');
   // $pdf -> SetFontSize(8);
   // $pdf -> Ln(1);
   // $pdf -> SetX(90);
  //  $pdf -> Cell(100,15, $ben31,0,0,'L');
  //  $pdf -> Ln(1);
  //  $pdf -> SetX(90);
  //  $pdf -> SetFontSize(8);
  //  $pdf -> Cell(100,20, $ben3pec,0,0,'L');
    $pdf -> SetFontSize(10);
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Num of Vanilla Plants
    $pdf -> SetX(25);
    $pdf -> SetFontSize(10);
    $pdf -> Cell(65,10, 'No. of Vanilla Plants allocated      :', 0, 0, 'L');
    $pdf -> SetX(90);

    

        $pdf -> SetX(90);
        $pdf -> Cell(100,10, $vanplantnum, 0, 0, 'L');
        

  //  $pdf -> Cell(50,10, $vanplantnum, 0, 0, 'L');
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(8);

    // Security
    $pdf -> SetX(25);
    $pdf -> SetFontSize(10);
    $pdf -> Cell(65,10, 'Security                                               :', 0, 0, 'L');
    $pdf -> SetX(90);
    $pdf -> SetFontSize(8);
    $pdf -> Cell(100,10, $security, 0, 0, 'L');
    $pdf ->Ln(1);
    $pdf -> SetX(90);
    $pdf -> Cell(100,15, $security2, 0, 0, 'L');

   // $pdf -> Cell(100,10, $security, 0, 0, 'L');
    //$pdf ->Ln(1);
   // $pdf -> SetX(90);
   // $pdf -> Cell(100,15, $security2, 0, 0, 'L');
    $pdf -> SetFontSize(10);
    $pdf -> Ln(5);
    $pdf -> Cell(190,10, '________________________________________________________________________________________________', 0, 0, 'C');
    $pdf->Ln(6);

    // -------------------SECOND PAGE-----------------SECOND PAGE-------------------SECOND PAGE--------------------SECOND PAGE---------------------------------------

    // SECOND PAGE--------------SECOND PAGE---------------------SECOND PAGE-------------SECOND PAGE------------------------SECOND PAGE--------------------

    // --------------SECOND PAGE--------------------SECOND PAGE-----------------SECOND PAGE-----------------SECOND PAGE----------------------------------------------

    $pdf -> AddPage();
    $pdf -> SetFontSize(9);

    $pdf -> SetX(20);
    $pdf -> Cell(15,10, 'Year', 1, 1, 'C');
    $pdf -> SetY(10);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, 'Yearly Premium', 1, 1, 'C');
    $pdf -> SetY(10);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, 'Total Premium', 1, 1, 'C');
    $pdf -> SetY(10);
    $pdf -> SetX(115);
    $pdf -> Cell(40,10, 'Guaranteed Return', 1, 1, 'C');
   // $pdf -> SetY(10);
   // $pdf -> SetX(100);
   // $pdf -> Cell(30,35, 'Monthly Benefit', 1, 1, 'C');
   // $pdf -> SetY(13);
   // $pdf -> SetX(100);
   // $pdf -> Cell(30,36, '25% Monthly', 0, 0, 'C');
    $pdf -> SetY(10);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Illustrated Return', 1, 1, 'C');
   // $pdf -> SetY(10);
   // $pdf -> SetX(130);
   // $pdf -> Cell(30,35, 'Final Guaranteed', 1, 1, 'C');
   // $pdf -> SetY(13);
   // $pdf -> SetX(130);
  //  $pdf -> Cell(30,36, 'Benefit', 0, 0, 'C');
  //  $pdf -> SetY(18);
  //  $pdf -> SetX(130);
  //  $pdf -> Cell(30,35, '[Invested Amount]', 0, 1, 'C');
 //  $pdf -> SetY(5);
  //  $pdf -> SetX(160);
  //  $pdf -> Cell(30,35, '(3rd Benefit)', 0, 1, 'C');
   // $pdf -> SetY(10);
   // $pdf -> SetX(160);
   // $pdf -> Cell(30,35, 'Final Return', 1, 1, 'C');
   // $pdf -> SetY(13);
   // $pdf -> SetX(160);
   // $pdf -> Cell(30,36, 'at the end of', 0, 0, 'C');
  // $pdf -> SetY(16);
   // $pdf -> SetX(160);
   // $pdf -> Cell(30,37, 'Term', 0, 0, 'C');
   // $pdf -> SetY(19);
    //$pdf -> SetX(160);
   // $pdf -> Cell(30,38, '50% Annual', 0, 0, 'C');
    
    
    //$pdf -> Ln(1);
    $pdf -> SetX(20);
    $pdf -> Cell(15,10, '1', 1, 1, 'C');

    

    $pdf -> SetY(20);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, 'Rs. 281,244/-', 1, 1, 'C');
    $pdf -> SetY(20);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, 'Rs. 281,244/-', 1, 1, 'C');
    $pdf -> SetY(20);
    $pdf -> SetX(115);
    $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
    $pdf -> SetY(20);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
   
    $pdf -> SetX(20);
    $pdf -> Cell(15,10, '2', 1, 1, 'C');
    $pdf -> SetY(30);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, 'Rs. 281,244/-', 1, 1, 'C');
    $pdf -> SetY(30);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, 'Rs. 562,488/-', 1, 1, 'C');

    $pdf -> SetY(30);
    $pdf -> SetX(115);
    $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
    $pdf -> SetY(30);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
   

    $pdf -> SetX(20);
    $pdf -> Cell(15,10, '3', 1, 1, 'C');
    $pdf -> SetY(40);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, 'Rs. 281,244/-', 1, 1, 'C');
    $pdf -> SetY(40);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, 'Rs. 843,732/-', 1, 1, 'C');

        $pdf -> SetY(40);
        $pdf -> SetX(115);
        $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
   
    $pdf -> SetY(40);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
    

    $pdf -> SetX(20);
    $pdf -> Cell(15,10, '4', 1, 1, 'C');
    $pdf -> SetY(50);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, '', 1, 1, 'C');
    $pdf -> SetY(50);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, '', 1, 1, 'C');

        $pdf -> SetY(50);
        $pdf -> SetX(115);
        $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
        
    $pdf -> SetY(50);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Nil', 1, 1, 'C');
    

    $pdf -> SetX(20);
    $pdf -> Cell(15,10, '5', 1, 1, 'C');
    $pdf -> SetY(60);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, '', 1, 1, 'C');
    $pdf -> SetY(60);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, '', 1, 1, 'C');
    $pdf -> SetY(60);
    $pdf -> SetX(115);
    

        $pdf -> SetY(60);
        $pdf -> SetX(115);
        $pdf -> Cell(40,10, 'Rs. 1,476,562.50', 1, 1, 'C');
       
    $pdf -> SetY(60);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Rs. 2,800,000', 1, 1, 'C');
    

    $pdf -> SetX(20);
    $pdf -> Cell(15,10, '6', 1, 1, 'C');
    $pdf -> SetY(70);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, '', 1, 1, 'C');
    $pdf -> SetY(70);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, '', 1, 1, 'C');
    $pdf -> SetY(70);
    $pdf -> SetX(115);
    $pdf -> Cell(40,10, 'Rs. 1,687,500', 1, 1, 'C');


    
    $pdf -> SetY(70);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Rs.3,200,000/-', 1, 1, 'C');


    $pdf -> SetX(20);
    $pdf -> Cell(15,10, '7', 1, 1, 'C');
    $pdf -> SetY(80);
    $pdf -> SetX(35);
    $pdf -> Cell(40,10, '', 1, 1, 'C');
    $pdf -> SetY(80);
    $pdf -> SetX(75);
    $pdf -> Cell(40,10, '', 1, 1, 'C');
    $pdf -> SetY(80);
    $pdf -> SetX(115);
    $pdf -> Cell(40,10, 'Rs. 2,109,375', 1, 1, 'C');
    $pdf -> SetY(80);
    $pdf -> SetX(155);
    $pdf -> Cell(40,10, 'Rs.4,000,000/-', 1, 1, 'C');

    

    $pdf -> Ln(10);
    $pdf -> SetFontSize(8);
    $pdf -> Cell(185,10, 'Note: This is a computer generated "Quotation".This is valid for 30 days from the date of issue', 0, 0, 'C');

    
   
    $pdf->Output();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGH QUOTATION</title>
    <Style>
     body{
    background-color: #ddd;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
a{
    color: #4545fd;
}

.main-block{
    display: table;
    margin: 100px auto 0;
    background-color: #fff;
    width: 100%;
    max-width: 450px;
    border-radius: 5px;
}

.main-block > .header{
    background: #ffffff  center center no-repeat;
        width: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: Palatino Linotype;
    font-size: 22px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    padding: 40px 0;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    color: rgb(148, 74, 142);
}

.main-block > .body{
    padding: 40px 20px;
}
.main-block > .footer{
    border-top: 1px solid #ddd;
}

.main-block > .footer p{
    padding: 10px;
    margin: 0;
    text-align: center;
    font-size: 12px;
}

input[type="text"] {
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 2px;
    color: #333;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    display: block;
    float: none;
    font-size: 16px;
    border: 1px solid #ccc;
    padding: 6px 10px;
    height: 38px;
    width: 100%;
    line-height: 1.3;
    margin: 0 0 5px;
}
.form-control{
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 2px;
    color: #333;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    display: block;
    float: none;
    font-size: 16px;
    border: 1px solid #ccc;
    padding: 6px 10px;
    height: 38px;
    width: 100%;
    line-height: 1.3;
    margin: 0 0 5px;
}

input[type="submit"]{
    background-color: #0a9e00;
    color: #fff;
    padding: 5px 10px;
    border: 0;
    font-size: 15px;
    border-radius: 2px;
    cursor: pointer;
}
input[type="submit"]:hover{
    background-color: #098e00;
}



    </Style>
</head>
<body>
<div class="main-block">
        <div class="header">
            <img src="logo.png"><br>
            Green Gold Harvest Plan QUOTATION
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="fname" placeholder="Full Name" required>
                <input type="text" name="iname" placeholder="Name with Inisials" required>
                <input type="text" name="address" placeholder="Address" required>
                <input type="text" name="nic" placeholder="NIC No" required>
                <input type="text" name="ben" placeholder="Name of Beneficiary" required>
                <input type="submit" value="Create Quotation">
            </form><br>
                <a href="index.php"><button type="button" class="btn btn-primary btn-lg">Back</button></a>
        </div>
        <div class="footer">
            <p><a href="https://agroventuresplantations.com">Agro Ventures Plantations LTD</a></p>
        </div>
    </div>
        <div class="footer">
            
            <p><a href="https://agroventuresplantations.com">Agro Ventures Plantations LTD</a></p>
        </div>
    </div>

</body>
</html>