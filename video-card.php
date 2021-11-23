
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Resources</h6>
    </div>
    <div class="card-body">
        <div class="text-center">
            <?php
                $id = $_SESSION['fileId'];
    			require 'src/db-connection.php';
     
    			$query = mysqli_query($db, "SELECT * FROM `course_files` WHERE `fileID`=$id") or die(mysqli_error());
    			while($fetch = mysqli_fetch_array($query)){
    		?>

            <?php if($fetch['fileType'] == 'video') { ?>

            <h5>You're watching: <span class="text-primary"><?php echo $fetch['fileName']?></span></h5>
            <video width="100%" height="240" controls>
                <source src="saveples/<?php echo $fetch['location']?>">
            </video>
            <a href="saveples/<?php echo $fetch['location']?>" class="mb-3 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> 
                Download Video
            </a>
            <?php }else { ?>
            <h5>File Name: <span class="text-primary"><?php echo $fetch['fileName']?></span></h5>
                <a href="saveples/<?php echo $fetch['location']?>" class="mb-3 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> 
                Download File
            </a>
        <?php } ?>
        </div>
        <?php } ?>
        
        <!-- <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
            constantly updated collection of beautiful svg images that you can use
            completely free and without attribution!</p>
        <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
            unDraw →</a> -->
    </div>
</div>