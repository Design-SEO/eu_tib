<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>">

  <head>
    <?php generateMetaTags($pageSlug); ?>
        <?php generateHreflangTags(); ?>
        <?php generateJsonLd($pageSlug); ?>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/animate.compat.css" />
    <link rel="stylesheet" href="/assets/css/simple-line-icons.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="/assets/css/pnotify.custom.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="/assets/css/select2.css" />
    <link rel="stylesheet" href="/assets/css/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/theme.css" />
    <link rel="stylesheet" href="/assets/css/theme-elements.css" />
    <link rel="stylesheet" href="/assets/css/theme-blog.css" />
    <link rel="stylesheet" href="/assets/css/theme-shop.css" />
    <link rel="stylesheet" href="/assets/css/skin-corporate-5.css" />
    <link rel="stylesheet" href="/assets/css/custom.css" />

    <link rel="stylesheet" href="/assets/css/index.css" />
    <link rel="stylesheet" href="/assets/css/hover.css" />
    <style>
      #launcher-frame {
        left: -40px;
      }
    </style>
  </head>

  <body class="dark" data-plugin-page-transition="">
    <div id="preloader">
      <div id="preloader-content">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400"
          xml:space="preserve">
          <filter id="dropshadow" height="130%">
            <feGaussianBlur in="SourceAlpha" stdDeviation="5"></feGaussianBlur>
            <feOffset dx="0" dy="0" result="offsetblur"></feOffset>
            <feFlood flood-color="red"></feFlood>
            <feComposite in2="offsetblur" operator="in"></feComposite>
            <feMerge>
              <feMergeNode></feMergeNode>
              <feMergeNode in="SourceGraphic"></feMergeNode>
            </feMerge>
          </filter>
          <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                                            c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                                            l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                                            c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                                            c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                                            l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                                            C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                                            C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                                            C327.767,212.14,389.234,221.02,379.302,260.846z"></path>
        </svg>
      </div>
    </div>
    <div class="body">
      <header id="header" class="header-dark header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0">
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column">
                <div class="header-row">
                  <div class="header-logo">
                    <a href="<?php echo getHref('') ?>">
                      <img alt="CapitureX sàrl" width="150" height="72" data-sticky-width="82" data-sticky-height="40" src="/assets/images/logo.webp" class="img-fluid opacity-8" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="header-column justify-content-end">
                <div class="header-row">
                  <div class="header-nav header-nav-stripe order-2 order-lg-1">
                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                      <nav class="collapse">
                        <ul class="nav nav-pills" id="mainNav">
                          <li class="dropdown">
                            <a class="dropdown-item mx-1 " href="<?php echo getHref('') ?>">
                              <i class="fa fa-home mx-1"> </i><?php echo getLang('menu_home') ?></a>
                          </li>

                          <li class="dropdown">
                            <a class="dropdown-item mx-1" href="<?php echo getHref('about') ?>">
                              <i class="fa fa-handshake mx-1"> </i><?php echo getLang('menu_about') ?></a>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-item mx-1" href="<?php echo getHref('login') ?>">
                              <i class="fa fa-envelope mx-1"> </i><?php echo getLang('menu_contact') ?></a>
                          </li>
                          <li style="align-items: center;">
                            <div class="lang-select-desktop lang-select menu-call" data-open="false">
                              <?php generateLanguageSelector() ?>
                            </div>
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                      <i class="fas fa-bars"> </i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="section border-0 p-relative box-shadow-7 mt-0">
        <div class="particles-wrapper z-index-1">
          <div id="particles-4"></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col py-4">
              <div class="text-center appear-animation mt-4 mb-4" data-appear-animation="fadeInLeftShorter">
                <h2 class="title-head text-uppercase font-weight-bold text-primary text-14">
                  <?php echo getLang('terms__title'); ?>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div role="main" class="main">
        <section>
          <div class="container shadow-lg p-5">
            <div class="row">
              <div class="col-12 features-row text-justify">
                <h1 class="text-primary font-weight-bold text-10 text-uppercase mb-0">
                  <?php echo getLang('terms__scope_title') ?>
                </h1>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__scope_text') ?>
                </p>

                <h1 class="text-primary font-weight-bold text-10 text-uppercase mb-0">
                  <?php echo getLang('terms__aml_title') ?>
                </h1>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__aml_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__kyc_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__kyc_text') ?>
                </p>

                <h1 class="text-primary font-weight-bold text-10 text-uppercase mb-0">
                  <?php echo getLang('terms__general_title') ?>
                </h1>
                <p class="text-justify p-2"></p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__services_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__services_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__offer_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__offer_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__prices_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__prices_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__payment_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__payment_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__fees_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__fees_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__verification_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__verification_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__timeframe_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__timeframe_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__paper_wallet_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__paper_wallet_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__sale_case_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__sale_case_text') ?>
                </p>

                <h1 class="text-primary font-weight-bold text-10 text-uppercase mb-0">
                  <?php echo getLang('terms__atm_title') ?>
                </h1>
                <p class="text-justify p-2"></p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__atm_id_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__atm_id_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__atm_commit_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__atm_commit_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__atm_complaints_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__atm_complaints_text') ?>
                </p>

                <h1 class="text-primary font-weight-bold text-10 text-uppercase mb-0">
                  <?php echo getLang('terms__pos_title') ?>
                </h1>
                <p class="text-justify p-2"></p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__pos_id_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__pos_id_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__pos_commit_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__pos_commit_text') ?>
                </p>

                <h1 class="text-primary font-weight-bold text-10 text-uppercase mb-0">
                  <?php echo getLang('terms__otc_broker_title') ?>
                </h1>
                <p class="text-justify p-2"></p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__transfers_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__transfers_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__broker_init_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__broker_init_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__otc_trading_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__otc_trading_text') ?>
                </p>

                <h2 class="text-primary font-weight-bold text-6 text-uppercase mb-0">
                  <?php echo getLang('terms__personal_wallet_title') ?>
                </h2>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__personal_wallet_text') ?>
                </p>

                <h1 class="text-primary font-weight-bold text-10 text-uppercase mb-0">
                  <?php echo getLang('terms__contact_title') ?>
                </h1>
                <p class="text-justify p-2">
                  <?php echo getLang('terms__contact_text') ?>
                </p>
                <a href="<?php echo getHref('login') ?>"><?php echo getLang('terms__contact_email_label') ?></a><br />
              </div>
            </div>
          </div>
        </section>
      </div>
      <hr />
      <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mb-8 mb-lg-0">
              <a href="<?php echo getHref('') ?>" class="logo pe-0 pe-lg-3">
                <img alt="CapitureX sàrl" src="/assets/images/logo.webp" class="opacity-7 bottom-4" height="64" />
              </a>
              <br />
              <div class="mt-2 mb-0">
                <strong class="text-primary"><?php echo getLang('footer_title'); ?></strong>
                <br />
                <blockquote class="p-1 pb-0 mb-2 text-justify blockquote-dark text-1">
                  <?php echo getLang('footer_text'); ?>
                </blockquote>
                <a href="<?php echo getHref('login') ?>" title="Read More about ARIF" class="mt-0 pt-0 mx-2 text-hover-primary"><?php echo getLang('footer_btn'); ?>
                  <span class="fa fa-caret-right"> </span>
                </a>
              </div>
            </div>
            <div class="col-md-2 mt-4">
              <h5 class="text-3 mb-1"><?php echo getLang('footer_links_title'); ?></h5>
              <ul class="list list-icons list-icons-sm">
                <li>
                  <i class="fas fa-angle-right"> </i>
                  <a href="<?php echo getHref('about') ?>" class="link-hover-style-1 ms-1">
                    <?php echo getLang('menu_about'); ?></a>
                </li>

                <li>
                  <i class="fas fa-angle-right"> </i>
                  <a href="<?php echo getHref('login') ?>" class="link-hover-style-1 ms-1">
                    <?php echo getLang('menu_contact'); ?></a>
                </li>

                <li>
                  <i class="fas fa-angle-right"> </i>
                  <a href="<?php echo getHref('terms') ?>" class="link-hover-style-1 ms-1">
                    <?php echo getLang('menu_terms'); ?>
                  </a>
                </li>
                <li>
                  <i class="fas fa-angle-right"> </i>
                  <a href="<?php echo getHref('privacy') ?>" class="link-hover-style-1 ms-1">
                    <?php echo getLang('menu_privacy'); ?>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright footer-copyright-style-2 mt-2">
          <div class="container py-2">
            <div class="row py-2">
              <div class="col d-flex align-items-center justify-content-center">
                <p>
                  <?php echo getLang('footer_copyright'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="/form_crypto_hyper/includes/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/select2.min.js"></script>
    <script src="/assets/js/pnotify.custom.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/theme.init.js"></script>
    <script src="/assets/js/menu.js"></script>
  </body>

</html>