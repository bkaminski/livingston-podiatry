<?php 
/**
 * Template Name: FAQ Page
 *
 * @package WordPress
 * @subpackage Livingston Podiatry
 * 
 */
get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' );?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container-fluid pg-feat-img" style="background-image:url('<?php echo $backgroundImg[0]; ?>');"></div>
  <div class="container pt-5">
    <h1><?php the_title(); ?></h1>
  <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<div class="row">
  <div class="col-lg-9 pt-4">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Do you accept my insurance plan?
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Most likely we are affiliated with your healthcare carrier. For a complete listing pease see the insurance section of this website.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How many years have you been in practice?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            We have been providing quality care and service since 1995.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Do you accept credit cards?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            We accept American Express, Mastercard and Visa for payment at the time of visit.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Do you have payment plans for patients without insurance plans?
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            We try to accommodate all of our patients. If you do not have health care insurance we will try and arrange for a payment plan.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Where are you located?
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            We are conveniently located at 2307 Bellmore Avenue, Bellmore, NY 11710.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingSix">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              How long will I have to wait for an appointment?
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
            Most appointments can usually be made within that same week. If there is an emergency we can usually see the patient immediately provided the office is open.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading7">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
              Do you treat sports injuries?
            </button>
          </h2>
        </div>
        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
          <div class="card-body">
            Yes, we do treat sports injuries.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading8">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
              Do you accept worker's compensation patients?
            </button>
          </h2>
        </div>
        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
          <div class="card-body">
            Yes, we will treat worker's compensation patients.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading9">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
              How much is the initial office visit?
            </button>
          </h2>
        </div>
        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
          <div class="card-body">
            The cost of an intial visit with treatment varies depending on the type of care required. We are offering a FREE initial consultation, new patinets only, to discuss your condition.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading10">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
              Can X-RAYS be taken in the office?
            </button>
          </h2>
        </div>
        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
          <div class="card-body">
            Yes, they can. All of our offices are equipped with x-ray equipment.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading11">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
              Do you treat pediatric foot problems?
            </button>
          </h2>
        </div>
        <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
          <div class="card-body">
            We treat pediatric foot and ankle conditions varying from warts to flat feet. For a more complete listing of treatments and services we provide visit the services section.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading12">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
              Are custom orthoses available?
            </button>
          </h2>
        </div>
        <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
          <div class="card-body">
            Yes, they are. You can have custom molds taken of your feet for orthoses right in the office.

            For more information <a href="<?php echo get_home_url(); ?>/custom-made-foot-orthoses">Click Here</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading13">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
              Is full payment required at time of visit?
            </button>
          </h2>
        </div>
        <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
          <div class="card-body">
            We do require that payment be made in full at the time of the visit.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading14">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
              How do orthotics help correct foot problems?
            </button>
          </h2>
        </div>
        <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
          <div class="card-body">
            They help by stabilizing the foot and prevent improper motion. They allow the muscle and other soft tissue structures to function properly. For more information <a href="<?php echo get_home_url(); ?>/custom-made-foot-orthoses">Click Here</a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading15">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
              How long do orthotics last & will they continue to help me in the future?
            </button>
          </h2>
        </div>
        <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
          <div class="card-body">
            This is dependent upon the type of material used to fabricate the orthotic. Polypropylene orthoses usually lasts approximately 3-5 years. Graphite orthoses usually last greater than 5 years, and leather orthoses last about 3 years.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading16">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
              What is an ingrown toenail and what can be done to prevent them?
            </button>
          </h2>
        </div>
        <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
          <div class="card-body">
            An ingrown toenail is due to improper growth of the nail into the flesh surrounding the nail. Wearing wider width shoes and trying to cut your nails straight across can sometimes prevent them. Most ingrown nails have to be removed with a minor in office procedure.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading17">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
              Is there a possibility of recurrance after foot surgery?
            </button>
          </h2>
        </div>
        <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
          <div class="card-body">
            There is a chance of recurrence after foot surgery, but the recurrent rate is very low. The recurrence rate varies significantly from procedure to procedure.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading18">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
              How are bunions formed and what can be done to prevent formation?
            </button>
          </h2>
        </div>
        <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
          <div class="card-body">
            Bunions form due to abnormal alignment of the 1st metatarsal. The use of custom orthoses can slow down the progression of a bunion deformity, but little can be done to prevent the formation of a bunion.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading19">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
              Who is responsible for getting referrals?
            </button>
          </h2>
        </div>
        <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
          <div class="card-body">
            The patient is always responsible for getting their own referrals if one is required by your health care insurance.
          </div>
        </div>
      </div> 
    </div>
  </div>
  <div class="col-lg-3">
    <?php echo get_template_part('parts/page', 'quick-links'); ?>

  </div>
  <div class="col mt-5">
    <?php the_tags('<span class="badge badge-secondary"><i class="fas fa-tags"></i> Related:</span>  ', ', '); ?>
    
  </div>
</div>
</div>
<?php get_footer(); ?>
