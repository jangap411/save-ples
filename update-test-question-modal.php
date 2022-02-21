<!-- file upload -->
<div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Multiple Choice | Edit Test Question
        </h6>
    </div>
    <div class="card-body">
    <form action="./src/server.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <?php
                              $qstn_id = $_SESSION['qstn_id_update'];
                              $query = mysqli_query($db, "SELECT * FROM `questions_table` WHERE `question_id`= $qstn_id") or die(mysqli_error($db));
                              while($fetch = mysqli_fetch_array($query)){
                        ?>
                        <h5 class="modal-title">
                              Edit Test Question #<?php echo $fetch['question_no']; ?>
                         </h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="course_id" value="<?php echo $_SESSION['course_id']; ?>">
                            <input type="hidden" name="exam_id" name="exam_id" value="<?php echo $_SESSION['exam_id']; ?>">
                            <input type="hidden" id="qstn_id_update" name="qstn_id_update" value="<?php echo $qstn_id; ?>">
                           
                            <input type="hidden" value="<?php echo $question_no;?>" name="question_no" id="question_no">
                            <label for="test_question">Enter Question </label>
                            <textarea class="form-control form-control-user" id="test_question" name="test_question" rows="2"><?php echo $fetch['question_title']; ?></textarea>
                        </div>  
                        <div class="form-group">
                           <p>Upload Media</p> <input type="file" class="form-control-user" name="testMedia" id="testMedia" placeholder="Enter Option A">
                        </div>
                        <div class="form-group">
                           Option A <input type="text" class="form-control form-control-user" name="testOptionA" id="testOptionA" placeholder="Enter Option A" value="<?php echo $fetch['optionA']; ?>" >
                        </div>
                          
                        <div class="form-group">
                           Option B <input type="text" class="form-control form-control-user" name="testOptionB" id="testOptionB" value="<?php echo $fetch['optionB']; ?>" placeholder="Enter Option B">
                        </div>
                          
                        <div class="form-group">
                           Option C <input type="text" class="form-control form-control-user" name="testOptionC" id="testOptionC" value="<?php echo $fetch['optionC']; ?>" placeholder="Enter Option C">
                        </div>
                          
                        <div class="form-group">
                           Option D <input type="text" class="form-control form-control-user" name="testOptionD" id="testOptionD" value="<?php echo $fetch['optionD']; ?>" placeholder="Enter Option C">
                        </div>
                          
                        <div class="form-group">
                           <!-- <input type="text" class="form-control form-control-user" name="correctOption" id="correctOption" value="" placeholder="Enter Correct Option"> -->
                           <div class="form-group">
                          Current Answer <input readonly type="text" class="form-control form-control-user" name="" id="" value="<?php echo $fetch['correct_opt']; ?>" placeholder="Current option">
                        </div>
                           <label class="mb-0" for="correctOption">Select New Correct Option</label>
                           <select class="form-control" id="correctOption" name="correctOption" required>
                               <option value="0">--Select Option--</option>
                               <option value="A">Option A</option>
                               <option value="B">Option B</option>
                               <option value="C">Option C</option>
                               <option value="D">Option D</option>
                            </select>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" value="Update" id="update-qstn-btn" name="update-qstn-btn" class="btn btn-primary">
                        
                    </div>
                </form>
      <p class="mb-0">
            </p>
        </div>
    </div>