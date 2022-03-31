<div class="container d-flex align-items-center">

	<a href="<?= base_url() ?>" class="logo mr-1"><img src="assets/img/abls/2.png" class="img-fluid">
		<h1 class="logo mr-auto"><a href="<?= base_url() ?>"><span>AB</span>LS</a></h1>

		<nav class="nav-menu d-none d-lg-block">
			<ul>
				<li <?php if ($this->uri->segment(1) == '') echo "class='active'"; ?>><a href="<?= base_url() ?>">Home</a></li>
				<li class="drop-down"><a href="">About</a>
					<ul>
						<li <?php if ($this->uri->segment(1) == 'about') echo "class='active'"; ?>><a href="<?= base_url('about') ?>">Director's Preface</a></li>
						<li <?php if ($this->uri->segment(1) == 'division') echo "class='active'"; ?>><a href="<?= base_url('division') ?>">Divisions</a></li>
						<li <?php if ($this->uri->segment(1) == 'contact') echo "class='active'"; ?>><a href="<?= base_url('contact') ?>">Contact Us</a></li>
					</ul>
				</li>
				<li <?php if ($this->uri->segment(1) == 'achievement') echo "class='active'"; ?>><a href="<?= base_url('achievement') ?>">Achievement</a></li>
				<li <?php if ($this->uri->segment(1) == 'project') echo "class='active'"; ?>><a href="<?= base_url('project') ?>">Project & Events</a></li>
				<!-- <li <?php if ($this->uri->segment(1) == 'legal') echo "class='active'"; ?>><a href="<?= base_url('legal') ?>">ABLS Legal Review</a></li> -->
			</ul>
		</nav>

		<div class="header-social-links">
			<!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a> -->
			<!-- <a href="#" class="facebook"><i class="icofont-facebook"></i></a> -->
			<a href="https://www.instagram.com/atmajayabls" class="instagram"><i class="icofont-instagram"></i></a>
			<a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
		</div>

</div>
