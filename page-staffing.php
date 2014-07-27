<?php

/*
   Template Name: Staffing Homepage
*/

?>

<?php get_header('staffing'); ?>

	<header class="headerStaffing">
		<div class="headerTextContainer">
			<h1>Redhook Staffing Solutions</h1>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
			<div class="searchBar"><?php get_search_form(); ?></div>
		</div><!--/.headerTextContainer -->
	</header><!--/.headerHome -->

	<section class="bodyMain">

		<section class="bodyMain_left">

			<div class="bodyMain_left_top">
				<h1><i class="fa fa-users"></i>Staffing Solutions</h1>

				<ul>
					<li>RedHook procures mission-critical personnel to supplement your technology, financial, and other operational organizations. We help balance staffing needs within budget limitations while still meeting business and project expectations.</li>

					<li>RedHook provides personnel on a contract, contract-to-hire, pay-roll*, or on a permanent basis, which-ever solution best fits the needs of our customers.</li>

					<li>Pay-rolled employees are individuals who are brought to us by our customers who need those individuals to work for a period of time on a contract basis.  These individuals can be converted to perm at ANY time with NO conversion fee.  This is a service provided by RedHook for the benefit of our customers.</li>

					<li>With 20+ years of experience sourcing and identifying candidates, RedHook ensures high-quality consultants are engaged on every assignment!</li>

				</ul>

			</div><!--/.bodyMain_left_top -->

			<div class="bodyMain_left_bottom bodyMain_li">
				
				<section class="panel-group" id="accordion">

				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				          Contract and Contract to Hire
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in">
				      <div class="panel-body">
				        <p>Whether you need an individual (or team of individuals) to help supplement your staff – RedHook will identify, screen, conduct the appropriate background and reference checks to insure that we procure the highest level of talent to augment your team.  These individuals can remain on contract for whatever period of time is appropriate to ultimately meet your needs.</p>

						<p>In many cases, we have found that over the years bringing someone on board on a Contract-to-Hire basis is the perfect solution for both our customer and for the individual who is being evaluated before a decision to go permanent is reached.</p>

						<ul>
							<li>We have often used the term “Try before you buy” - for Contract-to-Hire engagements.  Both the individual and the company can assess whether the job is truly a good match long-term before making the position “permanent”.</li>

							<li>Another advantage for the customer is that if the person is truly not working out for whatever reason – the contract can simply be ended and a new individual can be brought on board to try before they are converted to a permanent status.</li>
						</ul>

						<table class="employmentTable">
							<tr class="employmentTable_header">
							  <td>Length of Employment</td>
							  <td>% of Fee Refunded</td> 
							</tr>
							<tr>
							  <td>0-30 days</td>
							  <td>100%</td> 
							</tr>
							<tr>
							  <td>31-60 days</td>
							  <td>67%</td> 
							</tr>
							<tr>
							  <td>61-90 days</td>
							  <td>33%</td> 
							</tr>
							<tr>
							  <td>90 days</td>
							  <td>>90 days</td> 
							</tr>
							</table>

				      </div>
				    </div>
				  </div><!-- ############ .panel1  ############ -->

				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				          Payroll Solutions
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse">
				      <div class="panel-body">
				        There are times that a customer has no choice but to bring an individual on-board on a contract basis (due to any number of factors –  i.e. the company has an on-going budget freeze for new hires, but needs the headcount to reach project goals).</br></br>

						Any individual that RedHook  pay-rolls for a customer can be converted to perm at ANY time with NO conversion fee.  This is a service provided by RedHook for the benefit of our customers.
				      </div>
				    </div>
				  </div><!-- ############ .panel2  ############ -->

				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				          Perm Hires
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse">
				      <div class="panel-body">
				        There are times that a customer has no choice but to bring an individual on-board on a contract basis (due to any number of factors –  i.e. the company has an on-going budget freeze for new hires, but needs the headcount to reach project goals).</br></br>

						Any individual that RedHook  pay-rolls for a customer can be converted to perm at ANY time with NO conversion fee.  This is a service provided by RedHook for the benefit of our customers.</br></br>

						RedHook sources candidates for permanent positions.</br></br>

						In the case of direct-hire placements, we have a 90-day guarantee that works as follows: all direct-hire placements are billed immediately, and invoices are due upon receipt. If the candidate leaves voluntarily or is discharged for any reason within 90 days from his/her start date, the client is refunded fees as follows:*

				      </div>
				    </div>
				  </div><!-- ############ .panel3  ############ -->

				</section><!--/.panel-group -->

			</div><!--/.bodyMain_left_bottom -->

		</section><!--/.bodyMain_left -->

		<aside class="bodyMain_right">
			<article>
				<h3>Browse Our Latest Jobs</h3>
				<div><?php get_sidebar(); ?></div>
			</article>
		</aside><!--/.bodyMain_right -->

	</section><!--/.bodyMain -->

<?php get_footer(); ?>
