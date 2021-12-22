<?php 
$exam_name = '';
?>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <h1><?php echo $exam_name ?></h1>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- table head -->
                <thead>
                    <tr>
                        <th>Question No.</th>
                        <th>Question</th>
                        <th>Your Answer</th>
                        <th>Mark given</th>
                        <th>Correct Answer</th>
                    </tr>
                </thead>
                <!-- table footer -->
                <tfoot>
                    <tr>
                        <th>Question No.</th>
                        <th>Question</th>
                        <th>Your Answer</th>
                        <th>Mark given</th>
                        <th>Correct Answer</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- table body -->
                    <?php
                        require 'src/db-connection.php';
                        $_student_id = 1;
                        $exam_id = 7;
                        $results_sql = "SELECT * FROM `users`, `test_marks`, `questions_table`, `student_answer`, `exam_table` WHERE `users`.`UserID` = `test_marks`.`test_mark_std_id` AND `test_marks`.`test_mark_qstn_no` = `questions_table`.`question_no` AND `student_answer`.`student_id` = `test_marks`.`test_mark_std_id` AND `test_marks`.`test_mark_std_id` = 1 AND `test_marks`.`test_mark_exam_id` = 7 AND `student_answer`.`question_no` = `test_marks`.`test_mark_qstn_no` AND `exam_table`.`exam_id` = `test_marks`.`test_mark_exam_id`;"; 
                        $query = mysqli_query($db, $results_sql) or die(mysqli_error($db));
    			        while($fetch = mysqli_fetch_array($query)){
                        $exam_name = $fetch['title'];
                    ?>
                    <tr>
                        <td><?php echo $fetch['question_no']?> </td>
                        <td><?php echo $fetch['question_title']?></td>
                        <td>
                            <span title="<?php
                                if($fetch['answer'] == 'A'){
                                    echo $fetch['optionA'];
                                }else if($fetch['answer'] == 'B'){
                                    echo $fetch['optionB'];
                                }else if($fetch['answer'] == 'C'){
                                    echo $fetch['optionC'];
                                }else if($fetch['answer'] == 'D'){
                                    echo $fetch['optionD'];
                                }
                            ?>">
                                <?php echo $fetch['answer']?>
                            </span>
                        </td>
                        <td><?php echo $fetch['test_mark_std_makr']?></td>
                        <td>
                            <span title="<?php
                                if($fetch['correct_opt'] == 'A'){
                                    echo $fetch['optionA'];
                                }else if($fetch['correct_opt'] == 'B'){
                                    echo $fetch['optionB'];
                                }else if($fetch['correct_opt'] == 'C'){
                                    echo $fetch['optionC'];
                                }else if($fetch['correct_opt'] == 'D'){
                                    echo $fetch['optionD'];
                                }
                            ?>">
                                <?php echo $fetch['correct_opt']?>
                            </span>
                        </td>
                    </tr>
                    <?php
    			        }
    		        ?>
            </table>
        </div>
    </div>
</div>