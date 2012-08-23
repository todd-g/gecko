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
        <h2>Step 3: Enter your child & usage information</h2>
        
        </div>
    </div>
    
    	<div class="row">
            <div class="twelve columns text-center">
                
                
                <h4>Let's set up your child's basic usage information</h4>
                This information is secure and private.  GeckoCap uses this information to ensure accurate data and instructions.<br><br>

                
            </div>
        </div>   
    <div class="row">
    	<div class="seven columns centered">
        	<form class="custom">
        		
                <h5>Who will be using these caps?</h5>
                <label for="name">Name (just for you to see)</label>
                <input type="text" class="nice" id="name" name="name" placeholder="ex. John, Mary Smith, Bobby">
                
                <label for="dob">Date of Birth</label>
                <input type="text" id="dob" name="dob" class="nice" placeholder="ex. 04/28/2001">
                <hr>
                <h5>Prescriptions</h5>
                <div class="row">
                    <div class="two columns">
                        <img src="images/cap_blue.png" height="80">
                    </div>
                    <div class="ten columns">
                        <h6>Blue Cap (GCKO-3849-4773)</h6>
						
                          <div class="row">
                            <div class="three mobile-one columns">
                              <label class="right inline">Prescription:</label>
                            </div>
                            <div class="nine mobile-three columns">
                              <input type="text" placeholder="Start typing prescription name" /> 
                            </div>
                          </div>
                        <div class="row">
                            <div class="three mobile-one columns">
                              <label for="customDropdown" class="right inline">Usage:</label>
                            </div>
                            <div class="nine mobile-three columns">
                              	
                                <select style="display:none;" id="customDropdown">
                                  <option>Choose an option</option>
                                  <option>Morning</option>
                                  <option>Afternoon</option>
                                  <option>As needed</option>
                                </select> 
                            </div>
                          </div>
                        
                    </div>
                </div>
               <hr>
                <div class="row">
                    <div class="two columns">
                        <img src="images/cap_red.png" height="80">
                    </div>
                    <div class="ten columns">
                        <h6>Red Cap (GCKO-0049-4233)</h6>
						
                          <div class="row">
                            <div class="three mobile-one columns">
                              <label class="right inline">Prescription:</label>
                            </div>
                            <div class="nine mobile-three columns">
                              <input type="text" placeholder="Start typing prescription name" /> 
                            </div>
                          </div>
                        <div class="row">
                            <div class="three mobile-one columns">
                              <label for="customDropdown" class="right inline">Usage:</label>
                            </div>
                            <div class="nine mobile-three columns">
                              	
                                <select style="display:none;" id="customDropdown">
                                  <option>Choose an option</option>
                                  <option>Morning</option>
                                  <option>Afternoon</option>
                                  <option>As needed</option>
                                </select> 
                            </div>
                          </div>
                        
                    </div>
                </div>
                
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