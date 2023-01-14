<? ?>
<form action="" method="post">
    <input type="text" name="studentGrade" id="" value="" placeholder="Enter your Grade Here">
    <input type="submit" value="Submit">

</form>

<?php
define('MAX_GRADE', 100);
$studentGrade = $_POST['studentGrade'];
echo "<input type='text' name='' id='' value='$studentGrade'>";
switch ($studentGrade) {
    case $studentGrade > MAX_GRADE:
    case $studentGrade < 0:
        echo "Please enter vaild value";
        break;

    case $studentGrade >= MAX_GRADE/2    :
        echo "He Passed the exam";
        break;

    case $studentGrade >= 0:
        echo "He failed in the exam";
        break;

}















?>