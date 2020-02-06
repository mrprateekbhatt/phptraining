<?php
    $students=array(
        array("id" => 101, "name" => "Prateek", "dob" => '20/12/2010', "grade" => 12, "marks" => array("H" => 78, "E" => 77, "M" => 93)),
        array("id" => 102, "name" => "Mahak", "dob" => '20/12/2010', "grade" => 11, "marks" => array("H" => 72, "E" => 78, "M" => 10)),
        array("id" => 103, "name" => "Ankita", "dob" => '20/12/2010', "grade" => 10, "marks" => array("H" => 98, "E" => 64, "M" => 11)),
        array("id" => 104, "name" => "Ankit", "dob" => '20/12/2010', "grade" => 9, "marks" => array("H" => 83, "E" => 74, "M" => 45)),
        array("id" => 105, "name" => "Yogita", "dob" => '20/12/2010', "grade" => 9, "marks" => array("H" => 27, "E" => 83, "M" => 78)),
        array("id" => 106, "name" => "Kunal", "dob" => '20/12/2010', "grade" => 9, "marks" => array("H" => 83, "E" => 30, "M" => 39)),
        array("id" => 107, "name" => "Yash", "dob" => '20/12/2010', "grade" => 12, "marks" => array("H" => 77, "E" => 98, "M" => 68)),
        array("id" => 108, "name" => "Hemant", "dob" => '20/12/2010', "grade" => 11, "marks" => array("H" => 38, "E" => 64, "M" => 23)),
        array("id" => 109, "name" => "Ekansh", "dob" => '20/12/2010', "grade" => 11, "marks" => array("H" => 15, "E" => 44, "M" => 65)),
        array("id" => 110, "name" => "Basant", "dob" => '20/12/2010', "grade" => 10, "marks" => array("H" => 26, "E" => 22, "M" => 74)),
        array("id" => 111, "name" => "Sagar", "dob" => '20/12/2010', "grade" => 10, "marks" => array("H" => 33, "E" => 33, "M" => 83)),
    );

    $grade_subjects=array(
        "9" => array("H" => 36, "E" => 33, "M" => 66),
        "10" => array("H" => 36, "E" => 33, "M" => 66),
        "11" => array("H" => 36, "E" => 33, "M" => 66),
        "12" => array("H" => 36, "E" => 33, "M" => 66),
    );
?>
<html>
    <head>
        <title>Students Details</title>
        <style>
            table tr td
            {
                border-style:solid;
                border-width:2px;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="grade" placeholder="Enter Grade">
            <input type="text" name="student_id" placeholder="Enter Student Id">
            <input type="submit" value="Get Results">
        </form>
        <table>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $grade  = "";
                    $grade=$_POST['grade'];
                    $student_id=$_POST['student_id'];
                    if($grade != "")
                    {
                        echo "<h1>Subjects With Minimum marks</h1>";
                        echo "<th style='border-style:solid;border-width:2px;'>Subjects</th>";
                        echo "<th style='border-style:solid;border-width:2px;'>Minimum Marks</th>";
                    }
                    foreach( $grade_subjects as $class => $Subjects)
                    {
                        if($class == $grade)
                        {
                            foreach($Subjects as $subject_code => $minimum_marks)
                            {
                                echo "<tr style='border-style:solid;border-width:2px;'><td>".$subject_code."</td><td>".$minimum_marks."</td></tr>";
                            }
                        }
                    }
                }
            ?>
        </table>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $student_id = "";
                $student_id=$_POST['student_id'];
                if($student_id != "")
                {
                    echo "<h1>Student Detail of id $student_id</h1>";
                }
                foreach($students as $details)
                {
                    if($details["id"] == $student_id)
                    {
                        print_r($details["marks"]);
                    }
                }
            }
        ?>
        <table>
            <th>Name</th>
            <th>DOB</th>
            <th>Grade</th>
            <th>Subjects</th>
            <th>Result</th>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
                    $student_id = "";
                    $student_id=$_POST['student_id'];
                    if($student_id != "")
                    {
                        echo "<h1>Student FResult of id $student_id</h1>";
                    }
                    foreach($students as $details)
                    {
                        if($details["id"] == $student_id)
                        {
                            echo "
                                <tr>
                                    <td>".$details['name']."</td><td>".
                                    $details['dob']."</td><td>".
                                    $details['grade']."</td><td>(".
                                    $grade_subjects[$Subjects['grade']['H']]."|".$Subjects["marks"]['H'].")</td><td>".
                                    $result.
                                "</td></tr>";
                        }
                    }
                }
            ?>
        </table>
    </body>
</html>