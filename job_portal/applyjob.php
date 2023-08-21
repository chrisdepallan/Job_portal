<?php
session_start();

require "conn_db.php";
$id1=$_SESSION["id"];
$id2=$_GET["id"];
$fetch_jobs = "INSERT INTO `applications` (`status`, `jobid`, `userid`) VALUES ('0', '$id2', '$id1')";
$fetch_jobs_r = mysqli_query($conn,$fetch_jobs);
header("location:applicant.php");
?>