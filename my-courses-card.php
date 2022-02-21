<?php
    $id = $_SESSION['UserID'];
    require 'src/db-connection.php';
    // 
    // SELECT * FROM `Courses`,`enrollment`,`users` WHERE `Courses`.`CourseID`=`enrollment`.`courseID` AND `users`.`UserID`=`enrollment`.`studentId` AND `enrollment`.`studentId`=$id AND `courses`.`approved`='true';
    // $query = mysqli_query($db, "SELECT * FROM `Courses`,`enrollment`,`users`,`skillsets` WHERE `Courses`.`CourseID`=`enrollment`.`courseID` AND `users`.`UserID`=`enrollment`.`studentId` AND `enrollment`.`studentId`=$id AND `courses`.`approved`='true' AND `courses`.`Skillsets_SkillID`=`skillsets`.`SkillID`;") or die(mysqli_error($db));
    $query = mysqli_query($db, "SELECT * FROM `courses`,`enrollment`,`users`,`skillsets` WHERE `courses`.`CourseID`=`enrollment`.`courseID` AND `users`.`UserID`=`enrollment`.`studentId` AND `enrollment`.`studentId`=$id AND `courses`.`approved`='true' AND `courses`.`Skillsets_SkillID`=`skillsets`.`SkillID`;") or die(mysqli_error($db));

    // $fetch = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) == 0){
        echo "<h1 style='text-align:center;'>You have not enrolled to any courses yet.</h1>";
    }

    // echo print_r($fetch);

    while($fetch = mysqli_fetch_array($query)){
?>
<div class="col-sm-4">
    <a style="text-decoration:none;color:inherit" href="./src/server.php?mycourse=<?php echo $fetch['CourseID'];?>&name=<?php echo $fetch['CourseName']?>">
        <div class="card shadow mb-4">
            <div class="card-body border-left-success shadow h-100 py-2">
            
            <h5 class="card-title"><?php echo $fetch['CourseName']?></h5>
            <p class="card-text"><?php echo $fetch['Course_description']?></p>
            <p>
                <!-- Name of Trainer: <br> -->
                Pass Mark: <?php echo $fetch['PassMark']?>%<br> 
                Tags: <span style="color:white;" variant="warning" class="mb-1 badge rounded-pill bg-primary"><?php echo $fetch['Tag']?></span><br>
                Skill sets: <?php echo $fetch['SkillName']?><br>
                Max Attempts: <?php echo $fetch['MaxAttempts']?> <br/>
            </p>
            <!-- <a href="#" class="btn btn-success"></a> -->
            
            </div>
        </div>
    </a>
</div>
<?php } ?>