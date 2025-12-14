<!DOCTYPE html>
<!-- saved from url=(0050)https://demos.onepagelove.com/template/sphere.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SEO -->
<title>Sphere - One Page Portfolio Template</title>
<meta name="description" content="A short, clear description of your portfolio or service (max ~155 characters).">
<link rel="canonical" href="https://yourdomain.com/">
<meta name="robots" content="index,follow">

<!-- Favicon -->
<link rel="icon" href="https://demos.onepagelove.com/template/assets/img/global/favicon.ico" sizes="any">

<!-- Socials -->
<meta property="og:title" content="Portfolio — Your Name">
<meta property="og:description" content="Short, shareable summary.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://yourdomain.com">
<meta property="og:image" content="./assets/img/og-image.jpg">
<meta name="twitter:card" content="summary_large_image">

<!-- Styles + JS -->
<link rel="preload" href="./novap_files/styles.css" as="style">
<link rel="stylesheet" href="./novap_files/colors.css">
<link rel="stylesheet" href="./novap_files/styles.css">
<script defer="" src="./novap_files/siema.min.js.download"></script>
<script defer="" src="./novap_files/main.js.download"></script>

<script type="text/javascript" id="inject" src="chrome-extension://fchhipkldmfpfiocdoehmnnkcclmhbpg/src/scripts/inject.js"></script></head>
<body class="scheme-midnight">
<!-- Theme Switcher start -->
<div class="theme-switcher">
  <button class="theme-icon">☀︎</button>
  <div class="theme-options">
    <button class="theme-option theme-midnight" onclick="setScheme(&#39;midnight&#39;)" title="Midnight">☀︎ Dark</button>
    <button class="theme-option theme-daylight" onclick="setScheme(&#39;daylight&#39;)" title="Daylight">☀︎ Light</button>
    <button class="theme-option theme-ocean" onclick="setScheme(&#39;ocean&#39;)" title="Ocean">☀︎ Blue</button>
    <button class="theme-option theme-forest" onclick="setScheme(&#39;forest&#39;)" title="Forest">☀︎ Green</button>
  </div>
</div>

<style>
  .theme-switcher {
    position: fixed;
    top: 1rem;
    right: 1rem;
    z-index: 9999;
  }

.theme-switcher .theme-icon {
  background: #000;
  color: #fff;
  border: 1px solid #FFF;
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 50%; /* fully round */
  font-size: 0.875rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

  .theme-switcher .theme-options {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 100%;
    right: 0;
    opacity: 0;
    pointer-events: none;
    transform: translateY(0.5rem);
    transition: all 0.2s ease;
    background: #fff;
    padding: 0.25rem;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    min-width: 80px;
    border-radius: 4px;
  }

  .theme-switcher:hover .theme-options {
    opacity: 1;
    pointer-events: auto;
    transform: translateY(0);
  }

  .theme-switcher .theme-option {
    background: #fff;
    color: #000;
    border: none;
    padding: 0.5rem;
    margin-top: 0.25rem;
    font-size: 0.75rem;
    text-align: left;
    cursor: pointer;
    white-space: nowrap;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    border: 1px solid #FFFFF5;
  }

  .theme-switcher .theme-midnight {background-color: #1A1C20; color: #FFFFF5;}
  .theme-switcher .theme-daylight {background-color: #FFFFF5;}
  .theme-switcher .theme-ocean  {background-color: #0B1A37; color: #FFFFF5;}
  .theme-switcher .theme-forest {background-color: #0C3B2E; color: #FFFFF5;} /* Dark green */

</style>

<script>
  function setScheme(scheme) {
    const body = document.body;
    body.classList.remove('scheme-midnight', 'scheme-daylight', 'scheme-ocean', 'scheme-forest');
    body.classList.add('scheme-' + scheme);
  }
</script>
<!-- Theme Switcher end -->
<header class="top">
  <div class="top__left">
    <img class="top__avatar" src="./novap_files/avatar.jpg" alt="Name">
    <span class="top__brand">Sphere</span>
  </div>
  <nav class="top__right">
  	<div class="links">
	    <a href="https://demos.onepagelove.com/template/sphere.html#about" class="top__link">Info</a>
    </div>
    <a href="https://onepagelove.com/sphere" class="top__cta">Download <span class="arrow">→</span></a>
  </nav>
</header>
<section class="hero">
  <div class="boxed">
    <span class="eyebrow">Courtesy of One Page Love</span>
    <h1 class="overview">A minimal portfolio template to showcase your work in one page.</h1>
  </div>
</section>

<!-- Portfolio start -->
<section>
  <div class="boxed">

    <!-- Project start -->
    <div class="slider-group">
      <div class="siema-wrapper">
        <div class="siema" data-slider="sphere-1" style="overflow: hidden; direction: ltr; cursor: -webkit-grab;"><div style="width: 5100px; transition: 400ms ease-out; transform: translate3d(-1020px, 0px, 0px);"><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-01c.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-01.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-01b.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-01c.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-01.jpg" alt="Slide alt text"></div></div></div></div>
      </div>
      <span class="slider-controls">
        <button class="prev" aria-label="Previous slide">Prev</button>
        <button class="next" aria-label="Next slide">Next</button>
      </span>
    </div>
    <h2 class="slider-heading">Project one with slider</h2>
    <p>Explores the boundaries <a href="https://onepagelove.com/sphere">between light</a>, texture, and motion through a single, meticulously crafted 3D sphere. Designed in Cinema 4D and rendered with Octane, the sphere serves as both a study in photorealism and a playground for expression.</p>
   <blockquote><p>This could be a behind-the-scenes aside about the design process or event a customer testimonial.</p></blockquote>
    <p><a href="https://onepagelove.com/sphere" class="cta-project" title="Visit custom link">Link →</a></p>
    <hr>

    <!-- Project start -->
    <div class="slider-group">
      <div class="siema-wrapper">
        <div class="siema" data-slider="sphere-2" style="overflow: hidden; direction: ltr; cursor: -webkit-grab;"><div style="width: 5100px; transition: 400ms ease-out; transform: translate3d(-1020px, 0px, 0px);"><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-03c.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-03.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-03b.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-03c.jpg" alt="Slide alt text"></div></div><div style="float: left; width: 20%;"><div><img src="./novap_files/sphere-03.jpg" alt="Slide alt text"></div></div></div></div>
      </div>
      <span class="slider-controls">
        <button class="prev" aria-label="Previous slide">Prev</button>
        <button class="next" aria-label="Next slide">Next</button>
      </span>
    </div>
    <h2 class="slider-heading">Project two with slider</h2>
    <p>Explores the boundaries <a href="https://onepagelove.com/sphere">between light</a>, texture, and motion through a single, meticulously crafted 3D sphere. Designed in Cinema 4D and rendered with Octane, the sphere serves as both a study in photorealism and a playground for expression.</p>
    <p><a href="https://onepagelove.com/sphere" class="cta-project" title="Visit custom link">Link →</a></p>
    <hr>

    <!-- Project start -->
    <img src="./novap_files/sphere-02.jpg" alt="Image alt text">
    <h2>Project three with one image</h2>
    <p>Explores the boundaries <a href="https://onepagelove.com/sphere">between light</a>, texture, and motion through a single, meticulously crafted 3D sphere. Designed in Cinema 4D and rendered with Octane, the sphere serves as both a study in photorealism and a playground for expression.</p>
    <p><a href="https://onepagelove.com/sphere" class="cta-project" title="Visit custom link">Link →</a></p>
    <hr>

    <!-- Project start -->
    <img src="./novap_files/sphere-04.jpg" alt="Image alt text">
    <h2>Project four with one image</h2>
    <p>Explores the boundaries <a href="https://onepagelove.com/sphere">between light</a>, texture, and motion through a single, meticulously crafted 3D sphere. Designed in Cinema 4D and rendered with Octane, the sphere serves as both a study in photorealism and a playground for expression.</p>
    <p><a href="https://onepagelove.com/sphere" class="cta-project" title="Visit custom link">Link →</a></p>
    <hr>

  </div>
</section>
<!-- Portfolio end -->

<section class="bg-alt">
  <div class="bio-section">
      <div class="bio-image" id="about">
        <img src="./novap_files/author.jpg" alt="Author">
      </div>
      <div class="bio-text">
        <p>
          'Sphere' is licensed under CC BY 3.0 — free for personal and commercial use, as long as the footer link to One Page Love remains. Remove the credit with a Sphere Pro upgrade.
        </p>
        <div class="bio-links">
          <ul>
            <li><a href="https://onepagelove.com/go/sphere-upgrade">Upgrade</a></li>
            <li><a href="https://onepagelove.com/sphere">Download</a></li>
          </ul>
          <ul>
            <li><a href="https://onepagelove.com/sphere">LinkedIn</a></li>
            <li><a href="https://onepagelove.com/sphere">Email</a></li>
          </ul>
        </div>
      </div>
    </div>
</section>
<footer class="site-footer">
  <p class="footer-left">© 2025 Your Brand or Name</p>
  <p class="footer-right">
    <a href="https://onepagelove.com/sphere">Sphere Template</a> by One Page Love
  </p>
</footer>


</body></html>
