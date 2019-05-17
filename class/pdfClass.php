<?php 

/**
 * 
 */
require('../includes/fpdf.php');
class PDF extends FPDF
{	
	
	public  function addCandidateReport($candName,$text,$exp,$expComm,$tech,$techComm,$analyze,$analyzeComm,$planning,$planningComm,$flexibility,$flexibilityComm,$curiosity,$curiosityComm,$interest,$interestComm,$auth,$authComm,$resp,$respComm,$spirit,$spiritComm,$interpersonal,$interpersonalComm,$attitude,$attitudeComm,$express,$expressComm,$overall)
	{
		// $this = new FPDF('P','mm','A4');
		$header = array('', 'CRITERIA', 'COMMENTS', 'Excellent','Very Good','Good','POOR','Very Poor');
		

		$this->AddPage();
		$this->ReportTable($header,$candName,$exp,$expComm,$tech,$techComm,$analyze,$analyzeComm,$planning,$planningComm,$flexibility,$flexibilityComm,$curiosity,$curiosityComm,$interest,$interestComm,$auth,$authComm,$resp,$respComm,$spirit,$spiritComm,$interpersonal,$interpersonalComm,$attitude,$attitudeComm,$express,$expressComm,$overall);
		$this->SetFont('Arial','B',9);
		// $this->Cell(200,50,$text,1);	
		if (file_exists("../reports/".$candName.'Interview.pdf')) {
        unlink("../reports/".$candName.'Interview.pdf');
    }
		$this->Output("../reports/".$candName.'Interview.pdf','F');
	}
	public function addEvaluation($candName,$job,$recName,$recPos,$exp,$expComm,$tech,$techComm,$analyze,$analyzeComm,$planning,$planningComm,$flexibility,$flexibilityComm,$curiosity,$interest,$interestComm,$auth,$authComm,$resp,$respComm,$spirit,$spiritComm,$interpersonal,$interpersonalComm,$attitude,$attitudeComm,$express,$expressComm,$overall,$fileName)
	{
		// $this = new FPDF('P','mm','A4');
		// PDF::Header();
		$header = array('', 'CRITERIA', 'COMMENTS', 'Excellent','Very Good','Good','POOR','Very Poor');
		$this->AddPage();
		$this->SetFont('Arial','B',16);
		$this->Cell(200,50,$text,1);	
		if (file_exists("reports/".$fileName.'.pdf')) {
        unlink("reports/".$fileName.'.pdf');
    }
		$this->Output('F',"reports/".$fileName.'.pdf');
	}
	 function Header()
{
    // Logo
   	
    // Title
    $this->SetFont('Arial','B',12);
    $this->Cell(90,10,'SamsocialInternational Egypte',1,0,'C');
    // Line break
    $this->Ln(20);
}
function TextWithDirection($x, $y, $txt, $direction='R')
{
    if ($direction=='R')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',1,0,0,1,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    elseif ($direction=='L')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',-1,0,0,-1,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    elseif ($direction=='U')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',0,1,-1,0,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    elseif ($direction=='D')
        $s=sprintf('BT %.2F %.2F %.2F %.2F %.2F %.2F Tm (%s) Tj ET',0,-1,1,0,$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    else
        $s=sprintf('BT %.2F %.2F Td (%s) Tj ET',$x*$this->k,($this->h-$y)*$this->k,$this->_escape($txt));
    if ($this->ColorFlag)
        $s='q '.$this->TextColor.' '.$s.' Q';
    $this->_out($s);
}

function ReportTable($header,$candName, $exp,$expComm,$tech,$techComm,$analyze,$analyzeComm,$planning,$planningComm,$flexibility,$flexibilityComm,$curiosity,$curiosityComm,$interest,$interestComm,$auth,$authComm,$resp,$respComm,$spirit,$spiritComm,$interpersonal,$interpersonalComm,$attitude,$attitudeComm,$express,$expressComm,$overall)
{
    // Header
    $w=[30,30,80,10,10,10,10,10];
    // foreach( $w as $index => $width ) {
    //     $this->Cell($width,30,$header[$index],1);
    // }

    $this->Cell($w[0],30,$header[0],1);
    $this->Cell($w[1],30,$header[1],1);
    $this->Cell($w[2],30,$header[2],1);
    $this->Cell($w[3],30,$this->TextWithDirection(155,60,$header[3],'U')	,1);
    $this->Cell($w[4],30,$this->TextWithDirection(165,60,$header[4],'U')	,1);
    $this->Cell($w[5],30,$this->TextWithDirection(175,60,$header[5],'U')	,1);
    $this->Cell($w[6],30,$this->TextWithDirection(185,60,$header[6],'U')	,1);
    $this->Cell($w[7],30,$this->TextWithDirection(195,60,$header[7],'U')	,1);
    
    $this->Ln();

     $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Technical Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[1],30,'Experience',1);
    $this->Cell($w[2],30,$expComm,1);
    $Arr=['','','','',''];
    $Arr[$exp-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Technical Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[1],30,'Technicality',1);
    $this->Cell($w[2],30,$techComm,1);
    $Arr=['','','','',''];
    $Arr[$tech-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Intellectual Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
 $this->multiCell($w[1],15,'Analyze/   Summarize',1);
    $push_right+=$w[1];   
    $this->setXY($x+$push_right,$y);
     $this->Cell($w[2],30,$analyzeComm,1);
     $Arr=['','','','',''];
    $Arr[$analyze-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Intellectual Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
 $this->multiCell($w[1],15,'Systematic Thinking',1);
    $push_right+=$w[1];   
$this->setXY($x+$push_right,$y);
     $this->Cell($w[2],30,$planningComm,1);
     $Arr=['','','','',''];
    $Arr[$planning-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Intellectual Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
     $this->multiCell($w[1],15,'Flexibility/  Adaptability',1);
    $push_right+=$w[1];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[2],30,$techComm,1);
    $Arr=['','','','',''];
    $Arr[$tech-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Intellectual Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
        $this->multiCell($w[1],10,'Curiosity/   open-mindedness',1);
    $push_right+=$w[1];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[2],30,$curiosityComm,1);
    $Arr=['','','','',''];
    $Arr[$curiosity-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],30,'Motivation',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    $this->multiCell($w[1],30,'Interest in job',1);
    $push_right+=$w[1];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[2],30,$interestComm,1);
    $Arr=['','','','',''];
    $Arr[$interest-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
	    $this->Ln();
	    $this->addPage();
 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Leadership Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[1],30,'Authority',1);
    $Arr=['','','','',''];
    $Arr[$auth-1]='*';
    $this->Cell($w[2],30,$authComm,1);
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();


     $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Leadership Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    

    // $this->Cell($w[0],30,$this->Write(5,$leadership),1);
    $this->multiCell($w[1],10,'Ability to Deal with responsibility',1);
    $push_right+=$w[1];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[2],30,$respComm,1);
    $Arr=['','','','',''];
    $Arr[$resp-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();
 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Leadership Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[1],30,'Spirit initiative',1);
    $Arr=['','','','',''];
    $Arr[$spirit-1]='*';
    $this->Cell($w[2],30,$spiritComm,1);
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

 $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Generalities Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
$this->multiCell($w[1],15,'Interpersonal Skills',1);
    $push_right+=$w[1];
    $this->setXY($x+$push_right,$y);
        $this->Cell($w[2],30,$interpersonalComm,1);
        $Arr=['','','','',''];
    $Arr[$interpersonal-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

     $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Generalities Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    $this->Cell($w[1],30,'Attitude',1);
    $this->Cell($w[2],30,$attitudeComm,1);
    $Arr=['','','','',''];
    $Arr[$attitude-1]='*';
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();

    $x = $this->x;
	$y = $this->y;
	$push_right = 0;
    $this->multiCell($w[0],15,'Generalities Skills',1);
    $push_right+=$w[0];
    $this->setXY($x+$push_right,$y);
    

    // $this->Cell($w[0],30,$this->Write(5,$leadership),1);
    $this->multiCell($w[1],10,'Able to express/handle himself',1);
    $push_right+=$w[1];
    $this->setXY($x+$push_right,$y);
    $Arr=['','','','',''];
    $Arr[$express-1]='*';
    $this->Cell($w[2],30,$expressComm,1);
    $this->Cell($w[3],30,$Arr[0]	,1);
    $this->Cell($w[4],30,$Arr[1]	,1);
    $this->Cell($w[5],30,$Arr[2]	,1);
    $this->Cell($w[6],30,$Arr[3]	,1);
    $this->Cell($w[7],30,$Arr[4]	,1);
    $this->Ln();
    // $this->Cell($w[0],30,,1);
    
    // Data
    // foreach($data as $row)
    // {
    //     foreach($row as $col)
    //         $this->Cell(40,6,$col,1);
    //     $this->Ln();
    // }
}
function WordWrap($text, $maxwidth)
{
    $text = trim($text);
    if ($text==='')
        return 0;
    $space = $this->GetStringWidth(' ');
    $lines = explode("\n", $text);
    $text = '';
    $count = 0;

    foreach ($lines as $line)
    {
        $words = preg_split('/ +/', $line);
        $width = 0;

        foreach ($words as $word)
        {
            $wordwidth = $this->GetStringWidth($word);
            if ($wordwidth > $maxwidth)
            {
                // Word is too long, we cut it
                for($i=0; $i<strlen($word); $i++)
                {
                    $wordwidth = $this->GetStringWidth(substr($word, $i, 1));
                    if($width + $wordwidth <= $maxwidth)
                    {
                        $width += $wordwidth;
                        $text .= substr($word, $i, 1);
                    }
                    else
                    {
                        $width = $wordwidth;
                        $text = rtrim($text)."\n".substr($word, $i, 1);
                        $count++;
                    }
                }
            }
            elseif($width + $wordwidth <= $maxwidth)
            {
                $width += $wordwidth + $space;
                $text .= $word.' ';
            }
            else
            {
                $width = $wordwidth + $space;
                $text = rtrim($text)."\n".$word.' ';
                $count++;
            }
        }
        $text = rtrim($text)."\n";
        $count++;
    }
    $text = rtrim($text);
    return $text;
}
}

 ?>