<?

$section = "gs";
$title = "Step 1: Create your account | ";

?>

<?php require_once('includes/opener.php'); ?>


	<div class="row">
    	<div class="twelve columns text-center">
        <h1>Getting Started with GeckoCap</h1>
        <h2>Step 1: Create your account</h2>
        
        </div>
    </div>
    
    <div class="row">
    	<div class="five columns centered">
        	<form class="nice">
        		
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="nice" placeholder="Email Address">
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="nice" placeholder="Password">
                
                <a href="gs_2.php" class="button nice medium round">Create my account</a>
            
        	</form>
        </div>
    </div>
    
<div id="splitter" class="twelve columns">
	~~ end content
</div>    
<?php require_once('includes/nav.php'); ?>
<?php require_once('includes/closer.php'); ?>
