<style>
    .draggable {
  cursor: move;
}
</style>

<div class="row">
    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Questions</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">
               Question  <span class="float-right">1</span>
            </h4>
            <p>What planet is nearest to the sun?</p>
            <div class="mb-4 drop">
                <span class="text-gray-500">place answer card here</span>
            </div>
            
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">
               Question  <span class="float-right">2</span>
            </h4>
            <p>What planet is nearest to the sun?</p>
            <div class="mb-4 drop">
                <span class="text-gray-500">place answer card here</span>
            </div>
            
        </div>
    </div>
       
    </div>

    <div class="col-lg-6 mb-4">
        <!-- Answer Cards -->
        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Answers 
                </h6>
            </div>
            <!-- answer card -->
            <div class="card-body">
                <div class="card draggable shadow" draggable="true">
                    <div class="card-body">
                        <!-- <h5 class="card-title">1 Card title</h5> -->
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
              <div class="card-body">
                <div class="card draggable shadow" draggable="true">
                    <div class="card-body">
                        <!-- <h5 class="card-title">1 Card title</h5> -->
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card draggable shadow" draggable="true">
                    <div class="card-body">
                        <!-- <h5 class="card-title">1 Card title</h5> -->
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <!-- end answer card -->
        </div>
    
    </div>
</div>
<script src="js/drag-cards.js"></script>