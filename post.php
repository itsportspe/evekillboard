<?php include 'toptemplate.php'; ?>


<div class="container">
    <div class="row" id="getHeight01">
        <div class="col verticalLine">
            <h3 class="text-white">Post External Killmail Link (ESI)</h3>
            <form method="post" action="process.php">
                <div class="form-group">
                  <input type="url" class="form-control" id="" name="esikm" aria-describedby="Killmail" placeholder="Paste External Killmail Link here">
                </div>

                <button type="submit" class="btn btn-primary" value="submitesikm">Submit</button><br><br>
                <img src="images/postkm.png">
            </form>
        </div>



        <div class="col">
            <h3 class="text-white">Post Battle Report</h3>
            <p class="text-white">Requires Corp, or Alliance leadership to login first.</p>
        </div>
</div>

<script>
//$('changeHeight01').height() = $('#getHeight01').height();
</script>
<?php include 'bottomtemplate.php'; ?>
