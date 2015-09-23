<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
echo "Script working";
echo '<font size="40">'.$_SESSION['p']."</font>";

if(isset($_POST['back']))
{
    header("location : Welcome.html");
}
