<?

$section = "gs";
$title = "Step 2: Register your caps | ";

?>

<?php require_once('includes/opener.php'); ?>


	<div class="row">
    	<div class="twelve columns text-center">
        <div class="alert-box">
                    <h4>You've sucessfully created your account!</h4>
                    <a href="" class="close">&times;</a>
                </div>
		<h6>Getting Started with GeckoCap</h6>
        <h2>Step 2: Register your caps</h2>
        
        </div>
    </div>

    	<div class="row">
            <div class="twelve columns text-center">
                
                
                <h4>Now let's register the GeckoCaps.</h4>
                You'll find your cap's ID numbers listed on the back of the sheet included in your package.<br><br>

                
            </div>
        </div>
        
    <div class="row">
    	<div class="four columns">
        	<img src="http://placehold.it/400&text=Where+to+find+IDs" alt="instructions" title="instructions" style="margin-top:10px;">
        </div>
        <div class="eight columns">
        	
            
            <form class="nice">
        		
                <div class="row">
                    <div class="one columns">
                        <img src="images/cap_blue.png" height="80">
                    </div>
                    <div class="eleven columns">
                        <label for="cap1">ID# Blue Cap (For normal usage)</label>
                        <input type="text" id="cap1" name="cap1" class="nice" placeholder="Example: GKCO-1234-4859">
                    </div>
                </div>
               <hr>
                <div class="row">
                    <div class="one columns">
                        <img src="images/cap_red.png" height="80">
                    </div>
                    <div class="eleven columns">
                        <label for="cap2">ID# Red Cap (For rescue usage)</label>
                        <input type="text" id="cap2" name="cap2" class="nice" placeholder="Example: GKCO-1234-4859">
                    </div>
                </div>
                <hr>
            
                
                <a href="gs_3.php" class="button nice medium round">Register my GeckoCaps</a>
            
        	</form>
        </div>
        
    </div>
    
<div id="splitter" class="twelve columns">
	~~ end content
</div>    
<?php require_once('includes/nav.php'); ?>
<?php require_once('includes/closer.php'); ?>
