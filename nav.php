<?php
	echo "
		<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
			<div class='navigation'>
				<div class='container'>					
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='.navbar-collapse.collapse'>
							<span class='sr-only'>Toggle navigation</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
						<div class='navbar-brand'>
							<a href='index.php'><h1><span>Find</span>Scholar</h1></a>
						</div>
					</div>
					
					<div class='navbar-collapse collapse'>							
						<div class='menu'>
							<ul class='nav nav-tabs' role='tablist'>
								<li role='presentation'><a href='index.php'>Home</a></li>							
								<li role='presentation'><a href='scholarship.php'>Scholarships</a></li>
								
								<li class='dropdown'>
								   <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Login<span class='caret'></span></a>
										 <ul class='dropdown-menu'>
										<li class='dropdown-header'>Login As</li>
										<li role='separator' class='divider'></li>
												<li role='presentation'><a href='login.php'>Student</a></li>
												<li role='presentation'><a href='login2.php'>Sponsor</a></li>
										 </ul>
								</li>
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>	
	";
?>