<!-- file upload -->
<div class="modal fade" id="createTestQustn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="./src/server.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Exam Question </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="test_question">Enter Question</label>
                            <textarea class="form-control form-control-user" id="test_question" name="test_question" rows="2"></textarea>
                        </div>  
                        <div class="form-group">
                           <p>Upload Media</p> <input type="file" class="form-control-user" id="testMedia" placeholder="Enter Option A">
                        </div>
                        <div class="form-group">
                           Option A <input type="text" class="form-control form-control-user" id="testOptionA" placeholder="Enter Option A">
                        </div>
                          
                        <div class="form-group">
                           Option B <input type="text" class="form-control form-control-user" id="testOptionB" placeholder="Enter Option B">
                        </div>
                          
                        <div class="form-group">
                           Option C <input type="text" class="form-control form-control-user" id="testOptionC" placeholder="Enter Option C">
                        </div>
                          
                        <div class="form-group">
                           Option D <input type="text" class="form-control form-control-user" id="testOptionD" placeholder="Enter Option C">
                        </div>
                          
                        <div class="form-group">
                           Correct Option<input type="text" class="form-control form-control-user" id="correctOption" placeholder="Enter Correct Option">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" value="Create" id="create-test-btn" name="create-question-btn" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
</div>

                      