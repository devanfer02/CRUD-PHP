<?php
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Students</title>
</head>
<body>
    <h1>List Students</h1>
    <table class="table table-bordered" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">University</th>
                <th scope="col">NIM</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Major</th>
            </tr>
        </thead>';
        $i = 1;
        foreach($data['students'] as $student)
        {
            $html .= 
            '<tr>
                <td>'.$i++.'</td>
                <td style="text-align:center;"><img src="../public/img/uni_logos/' . $student['university'] . '.png" width="50" height="50" 
                style="vertical-align:middle;"></td>
                <td>'.$student["nim"].'</td>
                <td>'.$student["name"].'</td>
                <td>'.$student["email"].'</td>
                <td>'.$student["major"].'</td>
            </tr>';
        }
        
$html .= '</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->showImageErrors = true;
$mpdf->WriteHTML($html);
$mpdf->Output('ListStudent.pdf', \Mpdf\Output\Destination::INLINE);