<?php $page = basename($_SERVER['SCRIPT_NAME']); ?><!-- Begin Navigation --><div id="navigation">    <ul id="navigation-items">    <li<?php if ($page == 'about.php' || $page == 'about-mission.php' || $page == 'about-process.php' || $page == 'about-team.php' ) { print ' class="main-on"'; } ?>><a href="about.php">About</a></li>    <li<?php if ($page == 'services.php' || $page == 'services-design.php' || $page == 'services-development.php' || $page == 'services-strategy.php' ) { print ' class="main-on"'; } ?>><a href="services.php">Services</a></li>    <li<?php if ($page == 'work.php' || $page == 'work-logos.php' || $page == 'work-print.php' || $page == 'work-web.php' ) { print ' class="main-on"'; } ?>><a href="work.php">Work</a></li>    <li<?php if ($page == 'blog.php') { print ' class="main-on"'; } ?>><a href="blog.php">Blog</a></li>    <li<?php if ($page == 'contact.php') { print ' class="main-on"'; } ?>><a href="contact.php">Contact</a></li>    </ul></div><!-- End Navigation -->