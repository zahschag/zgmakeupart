<div id="decor"><p>Blog</p></div>
	<div id="main"><p>My view has been loaded</p>
		
		<?php foreach( $rows->result() as $row  ); ?>
		
		<div><?php echo $row->email_address; ?></div>
		
</div></div>
<div>
