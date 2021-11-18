<form class="user" action="./src/server.php" method="post">
    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <p>Course Name</p>
        <input
        type="text"
        class="form-control form-control-user"
        id="courseName"
        name="courseName"
        placeholder="Enter Course Name"
        required
        />
       
    </div>
    <div class="col-sm-6">
         <label for="contactAdress" class="small"
        >Course Description</label
        >
        <textarea
        class="form-control"
        id="contactAdress"
        name="contactAdress"
        rows="3"
        ></textarea>
    </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <p>course date</p>
            <input
            type="date"
            class="form-control form-control-user"
            id="dob"
            name="dob"
            placeholder="DOB"
            required
            />
        </div>
        <div class="col-sm-6">
            <label class="small" for="user-type">Max Test Attempts</label>
        <select
            class="form-control"
            id="user-type"
            name="user-type"
        >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <p>Course File</p>
        <input
        type="file"
        class="form-control form-control-user"
        id="village"
        name="village"
        placeholder="Village"
        required
        />
    </div>
    <div class="col-sm-6">
        <p>Course Video</p>
        <input
        type="file"
        class="form-control form-control-user"
        id="llg"
        name="llg"
        placeholder="LLG"
        required
        />
    </div>
    </div>
   
    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
       
    </div>
    <div class="col-sm-6">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0"></div>
    <div class="col-sm-6">
        
    </div>
    </div>
    
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <p>Skill Set</p>
            <input
            type="text"
            class="form-control form-control-user"
            id="skillset"
            name="skillset"
            placeholder="Skill Set"
            />
        </div>
        <div class="col-sm-6">
            <p>Course Pass Mark</p>
            <input
            type="text"
            class="form-control form-control-user"
            id="passMark"
            name="passMark"
            placeholder="Enter Pass Mark"
            />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="hidden" name="trainerId" value="">
        </div>
    </div>
    <button
        class="btn btn-primary btn-user btn-block"
        name="btn-register"
        id="btn-register"
    >
        Register Course
    </button>
</form>