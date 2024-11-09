<?php
include('header.php')
?>
<main>

  <!-- Hero Header -->
  <section class="hero-section">
    <div class="hero-header">
      <div class="dark-bg">
        <div class="hero-banner" data-aos="fade-right" data-aos-delay="100">
          <h4 class="hero-title">
            <?php
            $hero_title = getWebsiteDetails();
            echo $hero_title['meta_title_home'];
            ?>
          </h4>
          <div class="hero-b">
            <svg class="h-16" width="17" height="86" viewBox="0 0 17 86" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.5 70C4.08172 70 0.499997 73.5817 0.499997 78C0.499996 82.4183 4.08172 86 8.5 86C12.9183 86 16.5 82.4183 16.5 78C16.5 73.5817 12.9183 70 8.5 70ZM7 -6.55671e-08L7 78L10 78L10 6.55671e-08L7 -6.55671e-08Z" fill="#F6F6F6" />
            </svg>
            <p class="scroll-down">Scroll Down For More</p>
          </div>
        </div>
      </div>

      <div class="img-bg" data-aos="fade-up" data-aos-delay="100">
        <div class="hero-para">
          <p class="hero-text">
            <?php
            $hero_text = getWebsiteDetails();
            echo $hero_text['meta_description_home'];
            ?>
          </p>
        </div>
        <img class="bg-img" src="./images/women-shea.jpeg" alt="">
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section>
    <?php
    $about_details = getWebsiteDetails();
    $about_title = $about_details['home_about_title'];
    $about_content = $about_details['home_about_content'];
    $about_img = $about_details['home_about_img'];
    ?>
    <div class="about-section" data-aos="fade-up" data-aos-delay="100">
      <div class="about-img">
        <img class="rounded-lg" src="./assets/uploads/<?php echo $about_img ?>" alt="<?php echo $about_title ?>">
      </div>
      <div class="about-text">
        <h3 class="about-header"><?php echo $about_title ?></h3>
        <p><?php echo $about_content ?></p>
      </div>
    </div>
  </section>

  <!-- Experience section-->

  <!-- <section>
    <?php
    $counter = getWebsiteDetails();
    $experience_count = $counter['counter_1_value'];
    $events_count = $counter['counter_2_value'];
    $members_count = $counter['counter_3_value'];
    ?>
    <div class="experience" data-aos="fade-up" data-aos-delay="100">
      <div>
        <p class="text-2xl">
          <span class="text-3xl" data-target="5"><?php echo $experience_count ?>+</span> Years of Experience
        </p>
      </div>
      <div>
        <p class="text-2xl">
          <span class="text-3xl count" data-target="25"><?php echo $events_count ?>+</span> Events Organized
        </p>
      </div>
      <div>
        <p class="text-2xl">
          <span class="text-3xl count" data-target="150"><?php echo $members_count ?>+</span> Team Members
        </p>
      </div>
    </div>
  </section> -->

  <!-- Specialization section -->
  <section>
    <div>
      <h4 class="section-title text-3xl">WHAT WE OFFER</h4>
      <div class="flex">
        <div class="bg-primary-clr" data-aos="fade-up" data-aos-delay="100">
          <h4 class="text-2xl service-title">Capacity Building and Training</h4>
          <p>We play a vital role in building the capacity of shea value chain actors. It organizes
            training programs, workshops, and seminars on various aspects of shea processing, quality control,
            product diversification, marketing, and entrepreneurship. </p>
        </div>
        <div class="bg-dark" data-aos="fade-up" data-aos-delay="100">
          <h4 class="text-2xl service-title">Market Development</h4>
          <p>We actively works towards expanding market opportunities for shea products both
            domestically and internationally. It conducts market research, identifies potential buyers and
            partners, and promotes Ghanaian shea products through trade fairs, exhibitions, and other
            marketing initiatives. </p>
        </div>
        <div class="bg-dark-800" data-aos="fade-up" data-aos-delay="100">
          <h4 class="text-2xl service-title">Socioeconomic Development</h4>
          <p>The shea industry is a significant source of livelihood for rural communities in Ghana, particularly
            for women who are primarily involved in shea nut collection and processing. We
            actively works towards improving the socioeconomic conditions of shea value chain actors.</p>
        </div>
      </div>
      <div class="flex padding-top-20">
        <div class="bg-primary-clr" data-aos="fade-up" data-aos-delay="100">
          <h4 class="text-2xl service-title">Representation and Advocacy</h4>
          <p>We provides a unified voice for all stakeholders involved in the shea value chain,
            including shea nut collectors, processors, traders, exporters, and other actors. It represents their
            interests, concerns, and challenges at various levels of government and policymaking bodies. </p>
        </div>
        
        <div class="bg-dark-800" data-aos="fade-up" data-aos-delay="100">
          <h4 class="text-2xl service-title">Collaboration and Networking</h4>
          <p>We serve as a platform for fostering collaboration and networking among different
            actors in the shea value chain. It brings together shea nut collectors, processors, traders, and
            exporters, facilitating knowledge exchange, sharing best practices, and promoting innovation.</p>
        </div>
        <div class="bg-dark" data-aos="fade-up" data-aos-delay="100">
          <h4 class="text-2xl service-title">Quality Assurance and Standards</h4>
          <p>We plays a crucial role in maintaining and promoting quality standards within the shea
            industry. It collaborates with relevant agencies and bodies to develop and enforce quality control
            measures, grading standards, and certifications.</p>
        </div>
      </div>
    </div>

  </section>

  <!-- Events Section -->
  <section class="event-section">
    <h4 class="section-title text-3xl">Upcoming Trainings</h4>
    <?php getUpcomingEvents() ?>

    <div class="flex-btn">
      <a href="events.php" class="view-all">View
        All <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75">
          </path>
        </svg></a>
    </div>
  </section>

  <!-- Recent photos -->
  <section data-aos="fade-up" data-aos-delay="100">
    <div id="gallery">
      <h4 class="section-title text-3xl">Recent Photos</h4>
      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php getGallerySlider() ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>

  <!-- Blog Section -->
  <section data-aos="fade-up" data-aos-delay="100">
    <?php
    ?>
    <h4 class="section-title text-3xl">Blog</h4>
    <div class="blog-section">
      <?php getBlogs() ?>
    </div>
  </section>


  <!-- Contact Section -->
  <section class="contact-section" data-aos="fade-up" data-aos-delay="100">
    <div class="contact-content">
      <div class="contact-text">
        <h4>Contact Us: Partner with Us for a Thriving Shea Industry</h4>
        <p>We welcome your inquiries and collaboration! If you have questions, ideas, or would like to connect with the Ghana Shea Chamber, please reach out or complete our online contact form on our website.</p>
      </div>

      <div class="form">
        <div class="contact-form">
          <form action="" class="form">
            <div class="form-group">
              <label for="name" class="text-slate-100">Name</label>
              <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
              <label for="email" class="text-slate-100">Email</label>
              <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
              <label for="message" class="text-slate-100">Message</label>
              <textarea name="message" id="message" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
              <button type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php') ?>