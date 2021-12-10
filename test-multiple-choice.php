
<div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Multiple Choice
        </h6>
    </div>
    <div class="card-body">
        <form action="" method="post" name="form" id="form">
         <?php 
            $exam_id = $_SESSION['exam_id'];
            $questions = [];

            $query = mysqli_query($db, "SELECT * FROM `questions_table` WHERE `exam_id`=$exam_id;") or die(mysqli_error($db));
            while($fetch = mysqli_fetch_array($query)){
                array_push($questions,$fetch['question_no']);

        ?>
        <p>
            <h5>Question <span class="float-right"><?php echo $fetch['question_no']; ?></span></h2>
            <P class="mb-0"><?php echo $fetch['question_title']; ?></P>
            <div class="row">
                <div class="p-3 w-50">
                    <div class="form-check mb-2">
                        <input onClick="radioBtnClick(this.value,<?php echo $fetch['question_no']; ?>)" class="form-check-input" type="radio" name="q<?php echo $fetch['question_no']; ?>answer" id="answer" value="A">
                         <strong>A.</strong>
                        <label class="form-check-label" for="q<?php echo$fetch['question_no']; ?>answer">
                            <?php echo $fetch['optionA']; ?>
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input onClick="radioBtnClick(this.value,<?php echo $fetch['question_no']; ?>)" class="form-check-input mr-5" type="radio" name="q<?php echo$fetch['question_no']; ?>answer" value="B" id="answer">
                        <strong>B.</strong>
                        <label class="form-check-label" for="q<?php echo$fetch['question_no']; ?>answer">
                            <?php echo $fetch['optionB']; ?>
                        </label>
                        
                    </div>
                </div>
                <div class="p-3">
                    <div class="form-check mb-2">
                        <input onClick="radioBtnClick(this.value,<?php echo $fetch['question_no']; ?>)" class="form-check-input" type="radio" name="q<?php echo$fetch['question_no']; ?>answer" value="C" id="answer">
                        <strong>C.</strong>
                        <label class="form-check-label" for="q<?php echo$fetch['question_no']; ?>answer">
                            <?php echo $fetch['optionC']; ?>
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input onClick="radioBtnClick(this.value,<?php echo $fetch['question_no']; ?>)" class="form-check-input" type="radio" name="q<?php echo$fetch['question_no']; ?>answer" value="D" id="answer">
                        <strong>D.</strong>
                        <label class="form-check-label float-right" for="q<?php echo$fetch['question_no']; ?>answer">
                            <?php echo $fetch['optionD']; ?>
                        </label>
                    </div>
                </div>
            </div>
        
        </p>
        
        <?php } ?>
        <input type="submit" value="Submit Answers" class="btn btn-primary float-right" name='answer-btn'>
        </form>
        <p class="mb-0">
            </p>
        </div>
    </div>

<script>

    let form = document.querySelector("#form");
    let total_number_of_qstns = <?php echo json_encode($questions);?>;

    let answers =[];
    let options = {};
    
    console.log(total_number_of_qstns);

 

    form.addEventListener('submit',(e)=>{
        e.preventDefault();
        let count = 0;
        
       for(let a in answers){
           count++;

           if(count == answers.length){
                alert('Answers submitted');
                window.location = 'index-student.php';
           }

           let xhr = new XMLHttpRequest();
           xhr.open('GET',`./src/server.php?exam=<?php echo $exam_id; ?>&qstn=${answers[a].question}&std=<?php echo $_SESSION['UserID'];?>&ans=${answers[a].answer}`,true);
    
           xhr.onload = () =>{
               console.log(this.responseText);
           }
    
           xhr.send();
       }


    });



    // radio btn click
    const radioBtnClick = (radioValue, questionNumber) =>{
        
        
        let answer = radioValue;
        let question = questionNumber;

        options = {
            question,
            answer
        }
        
               
        if(answers.length>0){
            for(i=0; i<= answers.length; i++){
                
                const isPresent = answers.some(ans => ans.question == questionNumber);
                
                if(isPresent){
                    answers.forEach((part,index, arr)=>{
                        if(arr[index].question == questionNumber){
                            arr[index].answer = answer;
                        }
                    })
                }else{
                    answers.push(options);
                }
    
            }
        }else{
            answers.push(options);
        }
        

    }
</script>