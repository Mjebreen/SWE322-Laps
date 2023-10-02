

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr.APlus {
            background-color: cyan;
        }
    </style>
</head>
<body>
    
<?php
 class Courses {
    public $courseCode;
    public $courseName;
    public $courseDescription;
    public $grade;

    public function setCourseCode($courseCode) {
        $this->courseCode = $courseCode;
    }

    public function getCourseCode() {
        return $this->courseCode;
    }

    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    public function getCourseName() {
        return $this->courseName;
    }

    public function setCourseDescription($courseDescription) {
        $this->courseDescription = $courseDescription;
    }

    public function getCourseDescription() {
        return $this->courseDescription;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function isGradeAPlus() {
        return $this->grade == 'A+';
    }

    public function getCourseDetails() {
        return [
            'Course Code' => $this->courseCode,
            'Course Name' => $this->courseName,
            'Course Description' => $this->courseDescription,
            'Grade' => $this->grade
        ];
    }
}

$course1 = new Courses();
$course1->setCourseCode('SWE322');
$course1->setCourseName('Advanced Web Design.');
$course1->setCourseDescription('This course provides an introduction to PHP.');
$course1->setGrade('A+');

$course2 = new Courses();
$course2->setCourseCode('MTH101');
$course2->setCourseName('Calculus I');
$course2->setCourseDescription('Introduction to calculus.');
$course2->setGrade('C+');

$course3 = new Courses();
$course3->setCourseCode('CIS201');
$course3->setCourseName('Web Design');
$course3->setCourseDescription('Introduction to Web Design.');
$course3->setGrade('A+');

$course4 = new Courses();
$course4->setCourseCode('CIS202');
$course4->setCourseName('Data structures');
$course4->setCourseDescription('Introduction to arrays.');
$course4->setGrade('W');

$course5 = new Courses();
$course5->setCourseCode('CIS386');
$course5->setCourseName('Project Managment');
$course5->setCourseDescription('Introduction to Project Managment.');
$course5->setGrade('B');

$coursesArray = [$course1, $course2, $course3, $course4, $course5];

?>

<table>
    <tr>
        <th>Course Code</th>
        <th>Course Name</th>
        <th>Course Description</th>
        <th>Grade</th>
    </tr>
    <?php 
    for ($i = 0; $i < count($coursesArray); $i++) {
        $course = $coursesArray[$i];
        echo '<tr class="' . ($course->isGradeAPlus() ? 'APlus' : '') . '">';
        echo '<td>' . $course->getCourseCode() . '</td>';
        echo '<td>' . $course->getCourseName() . '</td>';
        echo '<td>' . $course->getCourseDescription() . '</td>';
        echo '<td>' . $course->getGrade() . '</td>';
        echo '</tr>';
    }
    ?>
</table>

</body>
</html