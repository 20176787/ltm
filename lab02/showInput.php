<?php
if (isset($_POST['submitPostData'])) {
    if (!empty($_POST['fname'])) {
        echo 'Name : '.$_POST['fname']."<br>";
    }
    if (!empty($_POST['lname'])) {
        echo 'Class : '.$_POST['lname']."<br>";
    }
    if (isset($_POST['hobby1'])) {
        echo 'Hobby 1: '.$_POST['hobby1']."<br>";
    }

    if (isset($_POST['hobby2'])) {
        echo 'Hobby 2: '.$_POST['hobby2']."<br>";
    }

    if (isset($_POST['hobby3'])) {
        echo  'Hobby 3: '.$_POST['hobby3']."<br>";
    }
    if (!empty($_POST['university'])) {

        echo 'University: '.$_POST['university'];
    }

}

?>