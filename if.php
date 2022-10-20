<?php
// if
echo "Your child score on the end year exams is ";
$score = 78;
if ($score >= 80) {
    echo "A";
}
elseif($score >= 70 and $score <=79)
{
    echo "B";
}
elseif($score >= 60 and $score <=69)
{
    echo "C";
}
elseif($score >= 50 and $score <=59)
{
    echo "D";
}
else{
    echo"Fail";
}