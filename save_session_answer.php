<?php
 session_start();

//  onclick=radioclick(this.value)

 $value = $_GET['value'];
 $question_no = $_GET['qstnno'];

 $_SESSION['answer'][$question_no] = $value;

 print_r($_SESSION['answer'][$question_no] = $value);


?>