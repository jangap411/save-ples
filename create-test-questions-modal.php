<!-- file upload -->
<div class="modal fade" id="createTestQustn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="./src/server.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <?php
                            $exam_id = $_SESSION['exam_id'];
                            $count_quests = 'COUNT(*)';
                            $sql = "SELECT COUNT(*) FROM `questions_table` WHERE `exam_id`=$exam_id;";
                        ?>
                        <h5 class="modal-title" id="exampleModalLabel">Add Exam Question 
                            <?php echo getTotalNumbers($sql,$count_quests);?>/<?php echo $_SESSION['total_qustns'];?>
                         </h5>

                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="course_id" value="<?php echo $_SESSION['course_id']; ?>">
                            <input type="hidden" name="exam_id" name="exam_id" value="<?php echo $_SESSION['exam_id']; ?>">
                            <?php 
                                if(getTotalNumbers($sql,$count_quests) == 0){
                                    $question_no = 1;
                                }else{
                                    $question_no = getTotalNumbers($sql,$count_quests) + 1;
                                }
                            ?>
                            <input type="hidden" value="<?php echo $question_no;?>" name="question_no" id="question_no">
                            <label for="test_question">Enter Question</label>
                            <textarea class="form-control form-control-user" id="test_question" name="test_question" rows="2"></textarea>
                        </div>  
                        <div class="form-group">
                           <p>Upload Media</p> <input type="file" class="form-control-user" name="testMedia" id="testMedia" placeholder="Enter Option A">
                        </div>
                        <div class="form-group">
                           Option A <input type="text" class="form-control form-control-user" name="testOptionA" id="testOptionA" placeholder="Enter Option A">
                        </div>
                          
                        <div class="form-group">
                           Option B <input type="text" class="form-control form-control-user" name="testOptionB" id="testOptionB" placeholder="Enter Option B">
                        </div>
                          
                        <div class="form-group">
                           Option C <input type="text" class="form-control form-control-user" name="testOptionC" id="testOptionC" placeholder="Enter Option C">
                        </div>
                          
                        <div class="form-group">
                           Option D <input type="text" class="form-control form-control-user" name="testOptionD" id="testOptionD" placeholder="Enter Option C">
                        </div>
                          
                        <div class="form-group">
                           <!-- <input type="text" class="form-control form-control-user" name="correctOption" id="correctOption" placeholder="Enter Correct Option"> -->
                           <label class="mb-0" for="correctOption">Select Correct Option</label>
                           <select class="form-control" id="correctOption" name="correctOption">
                               <option value="0">--Select Option--</option>
                               <option value="A">Option A</option>
                               <option value="B">Option B</option>
                               <option value="C">Option C</option>
                               <option value="D">Option D</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <?php 
                            $count = getTotalNumbers($sql,$count_quests);
                            $qstn = (int)$count;
                            $total = (int)$_SESSION['total_qustns']; 
                            if($qstn == $total){
                                echo '<input type="submit" value="Total Reached" id="create-question-btn" name="create-question-btn" class="btn btn-primary" disabled>';
                            }else{
                                echo '<input type="submit" value="Create" id="create-question-btn" name="create-question-btn" class="btn btn-primary">';
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
</div>

                      