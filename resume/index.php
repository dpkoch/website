<?php
  $page_title='Resume';
  $page_heading='Resume';
  $header_css='/styles/resume.css';
  include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php');
?>

<section>
	<h3>Education</h3>

	<article class="resume-position">
		<div class="resume-position-header">
			<figure class="resume-logo"><a href="http://www.byu.edu/"><img src="byu_logo.svg"></a></figure>
			<!--img src="byu_logo.svg"-->
			<div class="resume-position-details">
				<h4>M.S. Mechanical Engineering</h4>
				<span class="resume-institution">Brigham Young University</span>
				<span class="resume-location">Provo, Utah</span>
				<span class="resume-dates">April 2016</span>
			</div>
		</div>
		<div class="resume-position-points">
			<ul>
				<li>4.00 GPA</li>
				<li>Emphasis in unmanned air vehicles, controls, robotics</li>
				<li>Coursework: Linear System Theory, Robotic Vision, Dynamics of Mechanical Systems, Math of Signals and Systems, Stochastic Processes</li>
			</ul>
		</div>
	</article>

	<article class="resume-position">
		<div class="resume-position-header">
			<figure class="resume-logo"><a href="http://www.byu.edu/"><img src="byu_logo.svg"></a></figure>
			<div class="resume-position-details">
				<h4>B.S. Mechanical Engineering</h4>
				<span class="resume-institution">Brigham Young University</span>
				<span class="resume-location">Provo, Utah</span>
				<span class="resume-dates">April 2014</span>
			</div>
		</div>
		<div class="resume-position-points">
			<ul>
				<li>Summa Cum Laude (4.00 GPA)</li>
				<li>Minor in Computer Science</li>
				<li>Elective Courses: Flight Dynamics and Control, Mechatronics, Design of Control Systems, Optimization Techniques, Neuromechanics of Movement</li>
			</ul>
		</div>
	</article>

</section>

<section>
	<h3>Work Experience</h3>

	<article class="resume-position">
		<div class="resume-position-header">
			<figure class="resume-logo"><a href="http://magicc.byu.edu/"><img src="magicc_logo.svg"></a></figure>
			<div class="resume-position-details">
				<h4>Research Assistant</h4>
				<span class="resume-institution">BYU MAGICC Lab</span>
				<span class="resume-location">Provo, Utah</span>
				<span class="resume-dates">November 2012 &ndash; Present</span>
			</div>
		</div>
		<div class="resume-position-points">
			<ul>
			<li>Research guidance and control of small UAVs in environments with degraded GPS</li>
      		<li>Coauthored and presented conference paper on robust vision-based motion estimation</li>
			</ul>
		</div>
	</article>

	<article class="resume-position">
		<div class="resume-position-header">
			<figure class="resume-logo"><a href="http://www.eglin.af.mil/units/afrlmunitionsdirectorate/"><img src="afrl_logo.svg"></a></figure>
			<div class="resume-position-details">
				<h4>Researcher</h4>
				<span class="resume-institution">Air Force Research Laboratory</span>
				<span class="resume-location">Fort Walton Beach, Florida</span>
				<span class="resume-dates">May 2014 &ndash; August 2014</span>
			</div>
		</div>
		<div class="resume-position-points">
			<ul>
				<li>Implemented multirotor estimator and controller for Pixhawk autopilot (PX4 flight stack)</li>
				<li>Developed hardware and software capabilities for collaborative multirotor research test platform</li>
			</ul>
		</div>
	</article>

	<article class="resume-position">
		<div class="resume-position-header">
			<figure class="resume-logo"><a href="http://www.daimler-trucksnorthamerica.com/"><img src="dtna_logo.svg"></a></figure>
			<div class="resume-position-details">
				<h4>Intern</h4>
				<span class="resume-institution">Daimler Trucks North America</span>
				<span class="resume-location">Portland, Oregon</span>
				<span class="resume-dates">May 2012 &ndash; August 2012</span>
			</div>
		</div>
		<div class="resume-position-points">
			<ul>
				<li>Developed methodology for dynamic and kinematic modeling and analysis of heavy truck hood mounting system</li>
				<li>Implemented new software and helped establish expanded engineering analysis capabilities</li>
			</ul>
		</div>
	</article>

	<article class="resume-position">
		<div class="resume-position-header">
			<figure class="resume-logo"><a href="http://materials.byu.edu/"><img src="byu_logo.svg"></a></figure>
			<div class="resume-position-details">
				<h4>Researcher</h4>
				<span class="resume-institution">BYU Microstructure Research Lab</span>
				<span class="resume-location">Provo, Utah</span>
				<span class="resume-dates">October 2010 &ndash; April 2012</span>
			</div>
		</div>
		<div class="resume-position-points">
			<ul>
				<li>Researched continuum mechanical models of dislocation stress fields near a free surface</li>
				<li>Coauthor on paper accepted into <em>Ultramicroscopy</em> journal</li>
			</ul>
		</div>
	</article>

	<article class="resume-position">
		<div class="resume-position-header">
			<figure class="resume-logo"><a href="http://www.lanl.gov/"><img src="lanl_logo.svg"></a></figure>
			<div class="resume-position-details">
				<h4>Researcher</h4>
				<span class="resume-institution">Los Alamos National Laboratory</span>
				<span class="resume-location">Los Alamos, New Mexico</span>
				<span class="resume-dates">May 2011 &ndash; August 2011</span>
			</div>
		</div>
		<div class="resume-position-points">
			<ul>
				<li>Produced original work on mathematical models for effects of dislocations in solids</li>
			</ul>
		</div>
	</article>

</section>

<section>
	<h3>Skills</h3>
	<ul>
		<li>Coding</li>
		<li>Life</li>
	</ul>
</section>

<section>
	<h3>Awards</h3>
	<ul>
		<li>Coding</li>
		<li>Life</li>
	</ul>
</section>

<?php include ($_SERVER['DOCUMENT_ROOT'] . '/include/footer.php');
