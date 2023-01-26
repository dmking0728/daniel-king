<?php get_header(); ?>

<div class="hero dark-blue-bg align-items-center d-flex">
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row align-items-center flex-lg-row g-5 py-5">
      <div class="col-12 col-sm-10">
        <div class="hero-content">
          <h1 class="lh-1">Front-end Developer</h1>
          <p class="">Creating websites for all screen types since 2018.</p>
        </div>
      </div>

      <div class="col-12 col-sm-2">
        <img class="hero-image" src="<?php echo get_template_directory_uri(); ?>/public/images/html-mint-green.svg" alt="html symbols in green"/>
      </div>
    </div>
  </div>
</div>

<div id="about" class="container col-xxl-8 px-4 py-5 intro">
  <div class="row align-items-center flex-lg-row g-5 py-5">
    <div class="col-12 col-md-6">
      <img class="intro-image" src="<?php echo get_template_directory_uri(); ?>/public/images/me-portfolio.jpg" alt="image of Daniel King"/>
    </div>

    <div class="col-12 col-md-6">
      <h2 class="circle">Hello, there</h2>
      <p>My name is Daniel King and I currently live in Chicago, IL. My main focus is on front-end web development but I enjoy dabbling in all things web related. When I'm not on my computer you can find me traveling, thrifting, gaming, or working out. This portoflio site was hand-coded and designed by yours truly. Reach out to me if you'd like to connect on a project.</p>
    </div>
  </div>
</div>

<div id="skills" class="row skills">
    <div class="col-12 col-md-6 dark-blue-bg">
      <div class="container py-5">
        <h2 class="my-4 is-centered circle">Development Skills</h2>
        <ul class="dev-skills mb-4">
          <li>HTML</li>
          <li>CSS</li>
          <li>PHP</li>
          <li>JavaScript</li>
          <li>jQuery</li>
          <li>Sass</li>
          <li>NPM</li>
          <li>Webpack</li>
          <li>Tailwind</li>
          <li>Bootstrap</li>
          <li>Pantheon WebOps</li>
          <li>Version Control (git)</li>
          <li>WCAG Compliance</li>
          <li>Cross Browser Testing</li>
          <li>WordPress CMS</li>
          <li>Advanced Custom Fields</li>
          <li>Custom Plugin Development</li>
        </ul>
      </div>
    </div>

    <div class="col-12 col-md-6 off-white-bg">
      <div class="container py-5">
        <h2 class="my-4 is-centered circle">Design Skills</h2>
        <ul class="design-skills mb-4">
          <li>Adobe XD</li>
          <li>Adobe Photoshop</li>
          <li>Adobe Illustrator</li>
          <li>Figma</li>
          <li>InVision</li>
        </ul>
      </div>
    </div>
  </div>

  <?php the_content(); ?>

  


<?php get_footer(); ?>