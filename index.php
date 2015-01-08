<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        $students = array();
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $myself = new Student();
        $myself->surname = "Gonzales";
        $myself->first_name = "Manuel";
        $myself->add_email('home','manuel.gonzales@shaw.ca');
        $myself->add_email('school','mgonzalesaira@my.bcit.ca');
        $myself->add_grade(101);
        $myself->add_grade(100);
        $myself->add_grade(99);
        $students['mega'] = $myself;
        
        ksort($students);
        
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
