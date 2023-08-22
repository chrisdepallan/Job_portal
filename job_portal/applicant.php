<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php 
    require "conn_db.php";
    $fetch_jobs = "SELECT * FROM `jobs` where `status`='0'";
    $fetch_jobs_r = mysqli_query($conn,$fetch_jobs);
?>
    </body>

    <div class="container mt-5">
            <h2>Job Listings</h2>
            <div class="row">
             <?php while($jb_row = mysqli_fetch_array($fetch_jobs_r)) {

$id1 = $_SESSION["id"];
$fetch_apps = "SELECT * FROM `applications` WHERE `userid` = $id1 AND `jobid` = {$jb_row['id']}";
$fetch_apps_r = mysqli_query($conn, $fetch_apps);

if (mysqli_num_rows($fetch_apps_r) > 0) {
    $str = "already applied";
} else {
    $str = "Apply for the job";
}
                ?>
                
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $jb_row['job_title'];?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $jb_row['company_name'];?></h6>
                            <p class="card-text"><?php echo $jb_row['location'];?></p>
                            <p class="card-text"><?php echo $jb_row['job_description'];?></p>
                            <p class="card-text"><strong>Job Type: <?php echo $jb_row['job_type'];?></strong></p>
                            <p class="card-text"><strong>Deadline:</strong><?php echo $jb_row['application_deadline'];?></p>
                        </div>
                        <button class='form-control'><a style='text-decoration:none' href='applyjob.php?id=<?php echo $jb_row['id'];?>'>
                        <?php echo $str;?>
                        </a></button>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
</html>
