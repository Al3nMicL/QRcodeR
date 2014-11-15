<?php include("incl/header.php"); ?>
    <?php include("incl/topnav.php"); ?>
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-sm-4">
          <h2 class="lead">Scan code</h2>
		<?php
			//determine defaults before rendering		 	
		 	function get_src(){
		 		$val = isset($_GET['input']) ? true : false;
				if($val){
					return 'incl/qrcode.php?'.'input='.$_GET['input'];
				} else {
					return "asset/img/default_qr.png";
				}
			}
			$qr_render = get_src();
		?>
          <img src="<?php echo $qr_render; ?>" alt="generated code" width="240px" height="240px"/>
          <p><a class="btn btn-xs btn-info" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-sm-8">
          <br />
          <div id="input" class="panel panel-default col-md-8">
      		 <div class="panel-heading" style="text-align: center"> 
      		   <b class="panel-title">Input parameters</b>
      		 </div>
      		  <div class="panel-body">	    		
		  		<form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
		  			<fieldset>
		  			<small>type text or url below, then click generate</small>
		  			<label for="input">
		  				<textarea style="resize: none" name="input" maxlength=140 rows="3" cols="40" required></textarea>
		  			</label>
		  			<br />
		  			
		  			</fieldset>
		  			<br />
		  			<div style="text-align: center">
		  				<input class="btn btn-sm btn-primary" type="submit" value="Generate" />
		  				<input class="btn btn-sm btn-default" type="reset" value="reset" />
		  			</div>
		  		</form>
		  	 </div> 	
          </div id="input">
        </div class="col-sm-8">
        
      </div>

      <hr>
<?php include("incl/footer.php"); ?>
