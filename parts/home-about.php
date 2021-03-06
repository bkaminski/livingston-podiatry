<div class="about-livingston">
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col-md-4">
				<figure>
					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/2020/11/dr-michael-livingston-podiatrist.png' ) . '" class="img-fluid pb-5" alt="Dr. Michael Livingston Podiatry">';?>
				
				</figure>

				<a data-toggle="modal" data-target="#videoModal" class="btn btn-lg btn-light btn-block pr-5 pl-5 text-uppercase font-weight-bold mb-4"><i class="fas fa-video"></i> Watch Video</a>
			</div>
			<div class="col-md-8">
				<h2 class="text-white font-weight-bold" style="text-shadow: 1px 2px #000;">Why Choose Livingston Podiatry?</h2>
				<p class="font-weight-bold">Dr. Michael Livingston is one of the most highly trained podiatrists in the state of New York.</p>
				<p>Board certified in both <strong>foot surgery</strong> and <strong>reconstructive rear-foot and ankle surgery</strong>, Dr. Livingston is one of an elite few podiatrists that have been granted the privilege to <strong>treat all conditions of the foot, ankle and leg in New York State.</strong> In addition to his private practice, <strong>Dr. Livingston is the Chairman of the Divison of Podiatry</strong> at Northwell Health at Syosset, as well as their on-site residency director for Advanced Foot and Ankle Surgery</p>
				<p>Fellowship trained in diabetic limb salvage and reconstructive plastic surgery of the foot and leg from Georgetown University Medical Center, <strong>Dr. Livingston is a leader in the use of advanced technology and biologics to improve patient outcomes.</strong></p>
				<p>Dr Livingston has been in private practice and has maintained academic positions for the last <strong>25 years.</strong> His practice, <strong>Livingston Podiatry Associates</strong>, is the preeminent podiatric practice in Nassau County. <strong>As a respected member of the health care community</strong>, he and the team members of Livingston Podiatry Associates work in conjunction with many of the <strong>best doctors in the area</strong> to provide a multidisciplinary team approach to patient care. <strong>This aides greatly in producing the best possible outcomes for our patients.</strong></p>
				<div class="pt-3 text-center">
					<a href="<?php echo get_home_url(); ?>/about-us" class="btn btn-lg btn-light pr-5 pl-5 text-uppercase font-weight-bold">About</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('parts/page', 'video'); ?>