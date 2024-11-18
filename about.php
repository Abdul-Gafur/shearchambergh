<?php include('header.php') ?>
<main>

    <section class="about-header">
        <h4 class="section-title">About Ghana Shea Chamber</h4>
        <div class="about-hero">
            <!-- will be raplaced with a video -->
            <img src="./images/about-hero.png" alt="about-hero">
        </div>
    </section>

    <!-- About Section -->
  <section data-aos="fade-up" data-aos-delay="100">
    <?php
    $about_details = getWebsiteDetails();
    $about_title = $about_details['home_about_title'];
    $about_content = $about_details['home_about_content'];
    $about_img = $about_details['home_about_img'];
    ?>
    <div class="about-section">
      <div class="about-img">
        <img class="rounded-lg" src="./assets/uploads/<?php echo $about_img ?>" alt="<?php echo $about_title ?>">
      </div>
      <div class="about-text">
        <h3 class="about-header"><?php echo $about_title ?></h3>
        <p><?php echo $about_content ?></p>
      </div>
    </div>
  </section>

    <!-- Our goal -->
    <section class="our-goal">
        <h4 class="section-title text-3xl">Our goal and the future <br> we can grow</h4>
        <div class="our-goal__content">
            <div class="our-goal__text">
                <p><b>Vision Statement</b><br>
A catalyst for the sustainable growth and development of the shea industry in Ghana, contributing
to the empowerment of stakeholders and the socio-economic well-being of communities.<br><br>
<b>Mission Statement</b><br>
The mission of the Chamber is to promote, represent and advance the interests of all actors in the
Shea value chain. The Chamber aims to create an enabling environment that supports the growth,
competitiveness, and inclusivity of shea value chain actors while upholding sustainable practices
and benefiting local communities.<br><br>
<b>Objectives of the Chamber</b><br>
Overall, the Goal of the Chamber is geared towards promoting the growth and development of the
Shea industry in Ghana, improving the livelihoods of actors in the value chain, and contributing to
the socio-economic development of Ghana. <br><br>

To achieve the above goal, the following specific objectives have been set: <br><br>
<ol>
    <li>Promote the development and competitiveness of the Ghanaian Shea industry in local and
    international markets.</li>
    <li>Advocate for policies and represent the interests of Shea value chain actors.</li>
    <li>Provide a platform for coordination, collaboration, networking, training, and capacity
    building among actors in the Shea value chain.</li>
    <li>Promote sustainable practices, research and development, and awareness of the benefits of
    Shea products.</li>
    <li>Facilitate access to finance, technology, and other resources to support the growth and
    development of the Shea industry in Ghana.</li>
</ol></p>
            </div>

            <div class="our-goal__img">
                <img src="./images/our-goal-img.png" alt="">
            </div>
        </div>
    </section>

    <!-- Experience section-->

    <!-- <section>
        <div class="experience">
            <div>
                <p class="text-2xl">
                    <span class="text-3xl" data-target="5">3+</span> Years of Experience
                </p>
            </div>
            <div>
                <p class="text-2xl">
                    <span class="text-3xl count" data-target="25">100+</span> Events Organized
                </p>
            </div>
            <div>
                <p class="text-2xl">
                    <span class="text-3xl count" data-target="150">50+</span> Team Members
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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="team-header">
            <h4 class="section-title text-3xl">Meet our team</h4>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="team-wrapper">

                <?php
                $statement = $pdo->prepare("SELECT 
												
												t1.id,
												t1.name,
												t1.slug,
												t1.designation_id,
												t1.photo,
												t1.facebook,
												t1.twitter,
												t1.linkedin,
												t1.youtube,
												t1.google_plus,
												t1.instagram,
												t1.flickr,

												t2.designation_id,
												t2.designation_name

					                           FROM tbl_team_member t1
					                           JOIN tbl_designation t2
					                           ON t1.designation_id = t2.designation_id
					                           WHERE t1.status = ?
					                           ");
                $statement->execute(array('Active'));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $row) {
                ?>
                    <div class="member-wrapper">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="./assets/uploads/<?php echo $row['photo'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $row['name'] ?></h4>
                                    <span><?php echo $row['designation_name'] ?></span>
                                </div>
                                <div class="social">
                                    <?php if ($row['facebook'] != '') : ?>
                                        <a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['twitter'] != '') : ?>
                                        <a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['linkedin'] != '') : ?>
                                        <a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['youtube'] != '') : ?>
                                        <a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['google_plus'] != '') : ?>
                                        <a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fab fa-google-plus"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['instagram'] != '') : ?>
                                        <a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['flickr'] != '') : ?>
                                        <a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fab fa-flickr"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section><!-- End Team Section -->

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
</main>

<?php include('footer.php');
