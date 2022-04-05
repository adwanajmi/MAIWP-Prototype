
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
  <title>
    MAIWP | Daftar Akaun
  </title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, soft ui dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, soft design, soft dashboard bootstrap 5 dashboard">
  <meta name="description" content="Soft UI Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Soft UI Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Soft UI Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/487/thumb/opt_sdp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Soft UI Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/487/thumb/opt_sdp_thumbnail.jpg" />
  <meta property="og:description" content="Soft UI Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.min.css?v=1.0.7" rel="stylesheet" />
  <!-- Anti-flicker snippet (recommended)  -->
  <style>
    .async-hide {
      opacity: 0 !important
    }
  </style>
  <script>
    (function(a, s, y, n, c, h, i, d, e) {
      s.className += ' ' + y;
      h.start = 1 * new Date;
      h.end = i = function() {
        s.className = s.className.replace(RegExp(' ?' + y), '')
      };
      (a[n] = a[n] || []).hide = h;
      setTimeout(function() {
        i();
        h.end = null
      }, c);
      h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
      'GTM-K9BGS8K': true
    });
  </script>
  <!-- Analytics-Optimize Snippet -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-46172202-22', 'auto', {
      allowLinker: true
    });
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
  </script>
  <!-- end Analytics-Optimize Snippet -->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                  <h4 class="font-weight-bolder">Daftar Akaun</h4>
                  <p class="mb-0">Masukan Emel dan Kata Laluan untuk daftar</p>
                </div>
                <div class="card-body pb-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" id="name" type="name" name="name" :value="old('name')" required autofocus />
                          </div>
                        <div class="mb-3">
                          <label class="form-label" for="email">Emel</label>
                          <input class="form-control" id="email" type="email" name="email" :value="old('email')" required />
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Kata Laluan</label>
                          </div>
                          <input class="form-control" id="password" type="password" name="password"  required autocomplete="current-password"/>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                              <label class="form-label" for="password_confirmation">Sahkan Kata Laluan</label>
                            </div>
                            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" />
                          </div>

                        <div class="mb-3">
                          <button class="btn btn-danger d-block w-100 mt-3" type="submit" name="submit">Daftar Akaun</button>
                        </div>
                      </form>
                </div>
                <div class="card-footer text-center pt-0 px-sm-4 px-1">
                  <p class="mb-4 mx-auto">
                    Mempunyai akaun?
                    <a href="{{ route('login') }}" class="text-danger text-gradient font-weight-bold">Log masuk </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-danger h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                <img src="../../../assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                <div class="position-relative">
                  <img class="max-width-300 w-100 position-relative z-index-2" src="../../../assets/img/MAIWPLogoo.png" alt="rocket">
                </div>
                <h4 class="mt-5 text-white font-weight-bolder">SISTEM PENGURUSAN SUMBER</h4>
                <p class="text-white">Majlis Agama Islam Wilayah Persekutuan,</p>
                    <p class="text-white">Aras 1,7,9-11, Bangunan PERKIM No. 150, Jalan Ipoh 51200 Kuala Lumpur,</p>
                    <p class="text-white">No. Tel : 03- 4047 9444 No. Faks : 03- 4044 9444</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../../../assets/js/core/popper.min.js"></script>
  <script src="../../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
