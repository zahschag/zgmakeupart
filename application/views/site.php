<div id="decor"><p>Welcome</p></div>
<!--Portfolio Previews Begins-->
<div id="main">
	
	<a class="placeholder fancybox" href="./assets/img/img2-large.jpg" title="Easter colors"><img alt="Easter Colors makeup" src="./assets/img/img2-small.jpg" /></a>
	<a class="placeholder fancybox"  href="./assets//img/img13-large.jpg" title="Easter colors"><img alt="Easter Colors makeup" src="./assets/img/img13-small.jpg" /></a>
	<a class="placeholder fancybox" href="./assets/img/img6-large.jpg" title="Easter colors"><img alt="Easter Colors makeup" src="./assets/img/img6-small.jpg" /></a>
	<a class="placeholder fancybox"  href="./assets/img/img10-large.jpg" title="Easter colors"><img alt="Easter Colors makeup" src="./assets/img/img10-small.jpg" /></a>
	<a class="placeholder fancybox"  href="./assets/img/img12-large.jpg" title="Easter colors"><img alt="Easter Colors makeup" src="./assets/img/img12-small.jpg" /></a>
	<div><button id="view-more-index" style="height:50px; width:200px;"><a href="portfolio">View More</button></a></div>
<!--About section Begins -->

	<div id="about">
		<h1>About Me</h1>
		<p>Hi! My name is Zahscha, I’m a Make up artist. Since 2008 I’m a self-thought, from the youtube guru’s from around the girl. I’m professional and very energetic. =)</p>
	</div>
<!--About section Ends-->


<!--Newsletter section begins-->
	<div id="newsletter">
		<h1>Newsletter</h1>
	

		<form action="" method="post">
			<label class="error" for="email" id="email_error" style="color=#fff;padding-top:20px; margin-left:10px">This field is required </label>
			<input style ='height:30px; width:250px; margin-left:50px;'name="email", id="email", type="text" size="40" value=""/>
			<input class="sub-btn"type="submit" name="submit" value="Signup"/>


</form>
<script type="text/javascript">
$(function() {  

	var error = $('.error');
	error.hide();

  $(".sub-btn").click(function() {  
    // validate and process form here
    	error.hide();
    		var email = $('#email').val();
    		if(email === ''){
    			error.show(); 
    			$('#email').focus();

    			return false;
    		}
  });

    $.ajax({
  	type:"POST",
  	url:"application/models/insert.php",
  	data: $('#email').serialize(),
  	success: function(){
  		$('#contact_form').html("<div id='message'></div>");
  		$('#message').html('<h2>Thank You for Signing up!</h2>')
  			.append('Stay tuned for videos, blog posts, and other surprises')
  			.hide();
  	}
  });
});  
</script>


	</div>
<!-- Newsletter section Ends-->
</div>
<!--Portfolio Previews Ends-->
