<div class="card shadow mb-4">
<div class="card-body">
    <form class="user" action="./src/server.php" method="post">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <p>Skill Sets</p>
                <input
                type="text"
                class="form-control form-control-user"
                id="skillset"
                name="skillset"
                placeholder="Enter Skill Sets"
                required
                />
            
            </div>
            <div class="col-sm-6">
                <label for="contactAdress" class="small"
                >Skill Set Description</label
                >
                <textarea
                class="form-control"
                id="skillDescription"
                name="skillDescription"
                rows="3"
                ></textarea>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <p>Roles</p>
                <input
                type="text"
                class="form-control form-control-user"
                id="skillset"
                name="skillset"
                placeholder="Skill Set"
                />
            </div>
            <div class="col-sm-6">
                <p>Tags</p>
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
            Save Skillsets
        </button>
    </form>
</div>
</div>