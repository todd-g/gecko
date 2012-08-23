<?

$section = "gs";
$title = "Step 3: Enter your child's information | ";

?>

<?php require_once('includes/opener.php'); ?>

	<div class="row">
    	<div class="twelve columns text-center">
        <div class="alert-box">
                    <h4>Your GeckoCaps were successfully registered and tested</h4>
                    <a href="" class="close">&times;</a>
        </div>
        <h6>Getting Started with GeckoCap</h6>
        <h2>Step 3: Enter your child's information</h2>
        
        </div>
    </div>
    
    	<div class="row">
            <div class="twelve columns text-center">
                
                
                <h4>Let's set up your child's basic information</h4>
                This information is secure and private.  GeckoCap uses this information to ensure accurate data and instructions.<br><br>

                
            </div>
        </div>   
    <div class="row">
    	<div class="seven columns centered">
        	<form class="nice">
        		
                <h6>Basics</h6>
                <label for="name">Name (just for you to see)</label>
                <input type="text" class="nice" id="name" name="name" placeholder="ex. John, Mary Smith, Bobby">
                
                <label for="dob">Date of Birth</label>
                <input type="text" id="dob" name="dob" class="nice" placeholder="ex. 04/28/2001">
                <hr>
                <h6>Prescriptions</h6>
                <label for="scrip">Prescription Name #1</label>
                <input type="text" class="nice" id="scrip" name="scrip" placeholder="Start typing prescription name">                
                
                <label for="scrip">Prescription #1 Frequency</label>
                <input type="text" class="nice" id="scrip" name="scrip" placeholder="Number, per day">   
                
                <label for="scrip">Prescription Name #2</label>
                <input type="text" class="nice" id="scrip" name="scrip" placeholder="Start typing prescription name">                
                
                <label for="scrip">Prescription #2 Frequency</label>
                <input type="text" class="nice" id="scrip" name="scrip" placeholder="Number, per day">                             
                
                
                <hr>
                <a href="gs_5.php" class="button nice medium round">Save Info & Finish</a>
            
        	</form>
        </div>
    </div>
    

<div id="splitter" class="twelve columns">
	~~ end content
</div>    
<?php require_once('includes/nav.php'); ?>
<?php require_once('includes/closer.php'); ?>