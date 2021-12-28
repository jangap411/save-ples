<div class="row">

    <div class="col-lg-6">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Question(s) for: <?php echo $_SESSION['exam_name']; ?></h6>
            </div>
            <div class="card-body">
                <p>Use Font Awesome Icons (<?php echo $_SESSION['exam_name']; ?>) along with the circle
                    buttons as shown in the examples below!</p>
                <!-- Circle Buttons (Default) -->
                <div class="mb-2">
                    
                </div>
                <!-- Add questions button -->
                <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#createTestQustn">
                    <span class="icon text-white-50">
                        <i class="fas fa-file-pdf"></i>
                    </span>
                    <span class="text">Add Questions</span>
                 </a>
                 <!-- Approve button -->
                 <?php $approve = "";?>
                  <a href="./src/server.php?examApproveId=<?php echo $_SESSION['exam_id'];?>&examApproveVal=<?php if($_SESSION['isAppovedExam'] == "0"){$approve = "1"; echo $approve;}else{$approve = "0";echo $approve;};?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-file-pdf"></i>
                    </span>
                    <span class="text">
                        <?php 
                            if($approve == "0"){
                                echo "Disapprove Test";
                            }else{
                                echo "Approve Test";
                            }
                        ?>
                    </span>
                 </a>
                <div class="my-2">
                    
                </div>
            </div>
        </div>
    </div>
        
    <?php 
        if($_SESSION['exam_type'] == 1){
            include 'test-multiple-choice.php';
        }else if($_SESSION['exam_type'] == 2){
            include 'matching-test.php';
        }else{
            echo "<h2>True or False Questions</h2>";
        }
    ?>

</div>


<!-- modals here -->
<!-- file upload -->
