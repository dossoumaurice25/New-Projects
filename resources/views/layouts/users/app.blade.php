
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset('assets/images/2.png')}} " type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link href="{{ asset('css/charts.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/dashboard-charts.js')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link rel="icon" href="favicon.ico" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">    <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        /*===========================
            COMMON css
        ===========================*/
        @import url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");




        html {
          scroll-behavior: smooth;
        }

        body {
          font-family: "Plus Jakarta Sans", sans-serif !important;
          font-weight: normal;
          font-style: normal;
          color: #5d657b;
          overflow-x: hidden;
          background: #f1f5f9;
        }

        * {
          margin: 0;
          padding: 0;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
        }

        a:focus,
        input:focus,
        textarea:focus,
        button:focus,
        .btn:focus,
        .btn.focus,
        .btn:not(:disabled):not(.disabled).active,
        .btn:not(:disabled):not(.disabled):active {
          text-decoration: none;
          outline: none;
          -webkit-box-shadow: none;
          -moz-box-shadow: none;
          box-shadow: none;
        }

        a:hover {
          color: #9f23c2;
        }

        button,
        a {
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }

        a,
        a:focus,
        a:hover {
          text-decoration: none;
        }

        i,
        span,
        a {
          display: inline-block;
        }

        audio,
        canvas,
        iframe,
        img,
        svg,
        video {
          vertical-align: middle;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
          color: inherit;
        }

        ul,
        ol {
          margin: 0px;
          padding: 0px;
          list-style-type: none;
        }

        p {
          font-size: 16px;
          font-weight: 400;
          line-height: 25px;
          margin: 0px;
        }

        .img-bg {
          background-position: center center;
          background-size: cover;
          background-repeat: no-repeat;
          width: 100%;
          height: 100%;
        }

        .para-width-500 {
          max-width: 500px;
          width: 100%;
        }

        @media (max-width: 767px) {
          .container {
            padding: 0 30px;
          }
        }

        /* ========== cart style ========== */
        .card-style {
          background: #fff;
          box-sizing: border-box;
          padding: 25px 30px;
          position: relative;
          box-shadow: 0px 12px 24px -4px rgba(145, 158, 171, 0.12), 0px 0px 2px 0px rgba(145, 158, 171, 0.2);
          border-radius: 7px;
        }
        @media (max-width: 767px) {
          .card-style {
            padding: 20px;
          }
        }
        .card-style .jvm-zoom-btn {
          position: absolute;
          display: inline-flex;
          justify-content: center;
          align-items: center;
          width: 30px;
          height: 30px;
          border: 1px solid rgba(0, 0, 0, 0.1);
          right: 30px;
          bottom: 30px;
          cursor: pointer;
        }
        .card-style .jvm-zoom-btn.jvm-zoomin {
          bottom: 70px;
        }
        .card-style .dropdown-toggle {
          border: none;
          background: none;
        }
        .card-style .dropdown-toggle::after {
          display: none;
        }
        .card-style .dropdown-menu {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.07);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.07);
        }
        .card-style .dropdown-menu li:hover a {
          color: #9f23c2 !important;
        }
        .card-style .dropdown-menu li a {
          display: block;
          font-size: 14px;
        }

        .error-box {
          max-width: 330px;
          margin: 65px auto;
        }
        @media (max-width: 767px) {
          .error-box {
            margin: 25px auto;
          }
          .error-box img {
            max-width: 180px;
          }
          .error-box h1 {
            font-size: 28px;
          }
        }
        .error-box a {
          border-radius: 7px;
          padding: 7px 25px;
        }

        .max-w-350 {
          max-width: 350px;
        }

        .more-btn-wrapper .dropdown-menu {
          border: 0.5px solid #efefef;
          box-shadow: 0px 5px 10px rgba(26, 25, 85, 0.08);
          border-radius: 5px;
        }
        .more-btn-wrapper .dropdown-menu .dropdown-item:active, .more-btn-wrapper .dropdown-menu .dropdown-item:focus {
          background: none;
        }
        .more-btn-wrapper .dropdown-menu .dropdown-item a {
          width: 100%;
          border-radius: 4px;
          color: #1A2142;
        }
        .more-btn-wrapper .dropdown-menu .dropdown-item i {
          font-weight: 700;
        }

        /* ======= Border Radius ========= */
        .radius-4 {
          border-radius: 4px;
        }

        .radius-10 {
          border-radius: 10px;
        }

        .radius-30 {
          border-radius: 30px;
        }

        .radius-50 {
          border-radius: 50px;
        }

        .radius-full {
          border-radius: 50%;
        }

        .scroll-top {
          width: 45px;
          height: 45px;
          background: #9f23c2;
          display: none;
          justify-content: center;
          align-items: center;
          font-size: 18px;
          color: #fff;
          border-radius: 5px;
          position: fixed;
          bottom: 30px;
          right: 30px;
          z-index: 9;
          cursor: pointer;
          -webkit-transition: all 0.3s ease-out 0s; 
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .scroll-top:hover {
          color: #fff;
          background: #cf3cf8;
        }

        .form-control:focus {
          box-shadow: none;
        }

        .form-control.is-valid:focus,
        .was-validated .form-control:valid:focus,
        .form-control.is-invalid:focus,
        .was-validated .form-control:invalid:focus,
        .form-check-input.is-valid:focus,
        .was-validated .form-check-input:valid:focus,
        .form-check-input.is-invalid:focus,
        .was-validated .form-check-input:invalid:focus,
        .form-check-input:focus,
        .radio-style.radio-success .form-check-input:focus,
        .radio-style.radio-warning .form-check-input:focus,
        .radio-style.radio-danger .form-check-input:focus {
          box-shadow: none;
        }

        .hover-underline:hover {
          text-decoration: underline;
        }

        /* ============= typography css ============= */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
          color: #1A2142;
          margin: 0;
        }

        h1,
        .h1 {
          font-size: 32px;
          font-weight: 700;
        }

        h2,
        .h2 {
          font-size: 28px;
          font-weight: 600;
        }

        h3,
        .h3 {
          font-size: 24px;
          font-weight: 500;
        }

        h4,
        .h4 {
          font-size: 20px;
          font-weight: 600;
        }

        h5,
        .h5 {
          font-size: 16px;
          font-weight: 700;
        }

        h6,
        .h6 {
          font-size: 16px;
          font-weight: 600;
        }

        .text-bold {
          font-weight: 700;
        }

        .text-semi-bold {
          font-weight: 600;
        }

        .text-medium {
          font-weight: 500;
        }

        .text-regular {
          font-weight: 400;
        }

        .text-light {
          font-weight: 300;
        }

        .text-sm {
          font-size: 14px;
          line-height: 22px;
        }

        .text-xs {
          font-size: 12px;
        }

        /* ========== breadcrumb ============ */
        .title-wrapper .breadcrumb-wrapper,
        .title-wrapper .title {
          margin-bottom: 30px;
        }
        @media (max-width: 767px) {
          .title-wrapper .breadcrumb-wrapper,
          .title-wrapper .title {
            margin-bottom: 10px;
          }
        }

        .breadcrumb-wrapper {
          display: flex;
          justify-content: flex-end;
        }
        @media (max-width: 767px) {
          .breadcrumb-wrapper {
            justify-content: flex-start;
          }
        }
        .breadcrumb-wrapper .breadcrumb li {
          font-size: 14px;
          color: #9f23c2;
        }
        .breadcrumb-wrapper .breadcrumb li a {
          color: #5d657b;
        }
        .breadcrumb-wrapper .breadcrumb li a:hover {
          color: #9f23c2;
        }

        /* ========== Buttons css ========== */
        /* buttons base styles */
        .main-btn {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          text-align: center;
          white-space: nowrap;
          vertical-align: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
          padding: 15px 45px;
          font-weight: 500;
          font-size: 14px;
          line-height: 24px;
          border-radius: 3px;
          cursor: pointer;
          z-index: 5;
          transition: all 0.4s ease-in-out;
          border: 1px solid transparent;
          overflow: hidden;
        }
        .main-btn i {
          font-size: 17px;
        }
        .main-btn svg {
          fill: currentColor;
        }
        .main-btn:hover {
          color: inherit;
        }

        .group-btn {
          display: inline-flex;
          border: 1px solid #DFE5EF;
          border-radius: 3px;
        }
        .group-btn.square-btn .main-btn:first-child {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0;
        }
        .group-btn.square-btn .main-btn:last-child {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0;
        }
        .group-btn.rounded-full .main-btn:first-child {
          border-top-left-radius: 30px;
          border-bottom-left-radius: 30px;
        }
        .group-btn.rounded-full .main-btn:last-child {
          border-top-right-radius: 30px;
          border-bottom-right-radius: 30px;
        }
        .group-btn .main-btn {
          border-radius: 0;
        }
        .group-btn .main-btn:first-child {
          border-top-left-radius: 3px;
          border-bottom-left-radius: 3px;
        }
        .group-btn .main-btn:last-child {
          border-top-right-radius: 3px;
          border-bottom-right-radius: 3px;
        }
        .group-btn .main-btn:not(.group-btn .main-btn:last-child) {
          border-right: 1px solid #DFE5EF;
        }

        .btn-sm {
          padding: 10px 20px;
          font-weight: 400;
        }

        /* buttons hover effect */
        .btn-hover {
          position: relative;
          overflow: hidden;
        }
        .btn-hover::after {
          content: "";
          position: absolute;
          width: 0%;
          height: 0%;
          border-radius: 50%;
          background: rgba(255, 255, 255, 0.05);
          top: 50%;
          left: 50%;
          padding: 50%;
          z-index: -1;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
          -webkit-transform: translate3d(-50%, -50%, 0) scale(0);
          -moz-transform: translate3d(-50%, -50%, 0) scale(0);
          -ms-transform: translate3d(-50%, -50%, 0) scale(0);
          -o-transform: translate3d(-50%, -50%, 0) scale(0);
          transform: translate3d(-50%, -50%, 0) scale(0);
        }
        .btn-hover:hover::after {
          -webkit-transform: translate3d(-50%, -50%, 0) scale(1.3);
          -moz-transform: translate3d(-50%, -50%, 0) scale(1.3);
          -ms-transform: translate3d(-50%, -50%, 0) scale(1.3);
          -o-transform: translate3d(-50%, -50%, 0) scale(1.3);
          transform: translate3d(-50%, -50%, 0) scale(1.3);
        }

        /* Dropdown buttons */
        .base-dropdown-btn .main-btn {
          padding: 8px 15px;
        }
        .base-dropdown-btn .main-btn svg {
          fill: currentColor;
        }
        .base-dropdown-btn .dropdown-menu {
          box-shadow: 0px 12px 24px -4px rgba(145, 158, 171, 0.12), 0px 0px 2px 0px rgba(145, 158, 171, 0.2);
          border-radius: 3px;
          border: none;
        }
        .base-dropdown-btn .dropdown-item {
          padding: 8px 15px;
          color: #5d657b;
          font-weight: 500;
        }
        .base-dropdown-btn .dropdown-item:hover {
          color: #5d657b !important;
          background: #f5f8fc;
        }

        /* primary buttons */
        .primary-btn {
          background: #9f23c2;
          color: #fff;
        }
        .primary-btn:hover {
          color: #fff;
        }

        .primary-btn-outline {
          background: transparent;
          color: #9f23c2;
          border-color: #9f23c2;
        }
        .primary-btn-outline:hover {
          color: #fff;
          background: #9f23c2;
        }

        .primary-btn-light {
          background: rgba(54, 92, 245, 0.12);
          color: #9f23c2;
        }
        .primary-btn-light:hover {
          color: #9f23c2;
        }

        .primary-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #9f23c2;
        }
        .primary-btn-group.active, .primary-btn-group:hover {
          color: #fff;
          background: #9f23c2;
          border-color: #9f23c2 !important;
        }

        /* secondary buttons */
        .secondary-btn {
          background: #00c1f8;
          color: #fff;
        }
        .secondary-btn:hover {
          color: #fff;
        }

        .secondary-btn-outline {
          background: transparent;
          color: #00c1f8;
          border-color: #00c1f8;
        }
        .secondary-btn-outline:hover {
          color: #fff;
          background: #00c1f8;
        }

        .secondary-btn-light {
          background: rgba(0, 193, 248, 0.12);
          color: #00c1f8;
        }
        .secondary-btn-light:hover {
          color: #00c1f8;
        }

        .secondary-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #00c1f8;
        }
        .secondary-btn-group.active, .secondary-btn-group:hover {
          color: #fff;
          background: #00c1f8;
          border-color: #00c1f8 !important;
        }

        /* success buttons */
        .success-btn {
          background: #219653;
          color: #fff;
        }
        .success-btn:hover {
          color: #fff;
        }

        .success-btn-outline {
          background: transparent;
          color: #219653;
          border-color: #219653;
        }
        .success-btn-outline:hover {
          color: #fff;
          background: #219653;
        }

        .success-btn-light {
          background: rgba(33, 150, 83, 0.12);
          color: #219653;
        }
        .success-btn-light:hover {
          color: #219653;
        }

        .success-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #219653;
        }
        .success-btn-group.active, .success-btn-group:hover {
          color: #fff;
          background: #219653;
          border-color: #219653 !important;
        }

        /* danger buttons */
        .danger-btn {
          background: #d50100;
          color: #fff;
        }
        .danger-btn:hover {
          color: #fff;
        }

        .danger-btn-outline {
          background: transparent;
          color: #d50100;
          border-color: #d50100;
        }
        .danger-btn-outline:hover {
          color: #fff;
          background: #d50100;
        }

        .danger-btn-light {
          background: rgba(213, 1, 0, 0.12);
          color: #d50100;
        }
        .danger-btn-light:hover {
          color: #d50100;
        }

        .danger-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #d50100;
        }
        .danger-btn-group.active, .danger-btn-group:hover {
          color: #fff;
          background: #d50100;
          border-color: #d50100 !important;
        }

        /* warning buttons */
        .warning-btn {
          background: #f7c800;
          color: #fff;
        }
        .warning-btn:hover {
          color: #fff;
        }

        .warning-btn-outline {
          background: transparent;
          color: #f7c800;
          border-color: #f7c800;
        }
        .warning-btn-outline:hover {
          color: #fff;
          background: #f7c800;
        }

        .warning-btn-light {
          background: rgba(247, 200, 0, 0.12);
          color: #f7c800;
        }
        .warning-btn-light:hover {
          color: #f7c800;
        }

        .warning-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #f7c800;
        }
        .warning-btn-group.active, .warning-btn-group:hover {
          color: #fff;
          background: #f7c800;
          border-color: #f7c800 !important;
        }

        /* info buttons */
        .info-btn {
          background: #97ca31;
          color: #fff;
        }
        .info-btn:hover {
          color: #fff;
        }

        .info-btn-outline {
          background: transparent;
          color: #97ca31;
          border-color: #97ca31;
        }
        .info-btn-outline:hover {
          color: #fff;
          background: #97ca31;
        }

        .info-btn-light {
          background: rgba(151, 202, 49, 0.12);
          color: #97ca31;
        }
        .info-btn-light:hover {
          color: #97ca31;
        }

        .info-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #97ca31;
        }
        .info-btn-group.active, .info-btn-group:hover {
          color: #fff;
          background: #97ca31;
          border-color: #97ca31 !important;
        }

        /* dark buttons */
        .dark-btn {
          background: #1A2142;
          color: #fff;
        }
        .dark-btn:hover {
          color: #fff;
        }

        .dark-btn-outline {
          background: transparent;
          color: #1A2142;
          border-color: #1A2142;
        }
        .dark-btn-outline:hover {
          color: #fff;
          background: #1A2142;
        }

        .dark-btn-light {
          background: rgba(26, 33, 66, 0.12);
          color: #1A2142;
        }
        .dark-btn-light:hover {
          color: #1A2142;
        }

        .dark-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #1A2142;
        }
        .dark-btn-group.active, .dark-btn-group:hover {
          color: #fff;
          background: #1A2142;
          border-color: #1A2142 !important;
        }

        /* light buttons */
        .light-btn {
          background: #DFE5EF;
          color: #1A2142;
        }
        .light-btn:hover {
          color: #1A2142;
        }

        .light-btn-outline {
          background: transparent;
          color: #1A2142;
          border-color: #DFE5EF;
        }
        .light-btn-outline:hover {
          color: #1A2142;
          background: #DFE5EF;
        }

        .light-btn-light {
          background: rgba(223, 229, 239, 0.5);
          color: #1A2142;
        }
        .light-btn-light:hover {
          color: #1A2142;
        }

        .light-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #000;
        }
        .light-btn-group.active, .light-btn-group:hover {
          color: #000;
          background: #DFE5EF;
          border-color: #DFE5EF !important;
        }

        /* active buttons */
        .active-btn {
          background: #9f23c2;
          color: #fff;
        }
        .active-btn:hover {
          color: #fff;
        }

        .active-btn-outline {
          background: transparent;
          color: #9f23c2;
          border-color: #9f23c2;
        }
        .active-btn-outline:hover {
          color: #fff;
          background: #9f23c2;
        }

        .active-btn-light {
          background: rgba(54, 92, 245, 0.12);
          color: #9f23c2;
        }
        .active-btn-light:hover {
          color: #9f23c2;
        }

        .active-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #9f23c2;
        }
        .active-btn-group.active, .active-btn-group:hover {
          color: #fff;
          background: #9f23c2;
          border-color: #9f23c2 !important;
        }

        /* deactive buttons */
        .deactive-btn {
          background: #E9E9E9;
          color: #8F9AAD;
        }
        .deactive-btn:hover {
          color: #8F9AAD;
        }

        .deactive-btn-outline {
          background: transparent;
          color: #8F9AAD;
          border-color: #E9E9E9;
        }
        .deactive-btn-outline:hover {
          color: #8F9AAD;
          background: #E9E9E9;
        }

        .deactive-btn-light {
          background: #e9e9e9;
          color: #8F9AAD;
        }
        .deactive-btn-light:hover {
          color: #8F9AAD;
        }

        .deactive-btn-group {
          background: transparent;
          border: 1px solid transparent;
          color: #9AA4CA;
        }
        .deactive-btn-group.active, .deactive-btn-group:hover {
          color: #9AA4CA;
          background: #CBE1FF;
          border-color: #CBE1FF !important;
        }

        /* =========  square-btn ========= */
        .square-btn {
          border-radius: 0px;
        }

        /* =========  rounded-md ========= */
        .rounded-md {
          border-radius: 10px;
        }

        /* =========  rounded-full ========= */
        .rounded-full {
          border-radius: 30px;
        }

        /* ========== buttons group css ========= */
        .buttons-group {
          display: flex;
          flex-wrap: wrap;
          margin: 0 -10px;
        }
        .buttons-group li {
          margin: 10px;
        }

        /* ====== Status Button ====== */
        .status-btn {
          padding: 7px 15px;
          border-radius: 30px;
          font-size: 14px;
          font-weight: 400;
        }
        .status-btn.primary-btn {
          color: #fff;
          background: #9f23c2;
        }
        .status-btn.active-btn {
          color: #9f23c2;
          background: rgba(54, 92, 245, 0.1);
        }
        .status-btn.close-btn {
          color: #d50100;
          background: rgba(213, 1, 0, 0.1);
        }
        .status-btn.warning-btn {
          color: #f7c800;
          background: rgba(247, 200, 0, 0.1);
        }
        .status-btn.info-btn {
          color: #97ca31;
          background: rgba(151, 202, 49, 0.1);
        }
        .status-btn.success-btn {
          color: #219653;
          background: rgba(33, 150, 83, 0.1);
        }
        .status-btn.secondary-btn {
          color: #00c1f8;
          background: rgba(0, 193, 248, 0.1);
        }
        .status-btn.dark-btn {
          color: #1A2142;
          background: rgba(26, 33, 66, 0.1);
        }
        .status-btn.orange-btn {
          color: #f2994a;
          background: rgba(242, 153, 74, 0.1);
        }

        /* ============ alerts css ============ */
        .alert-box {
          display: flex;
          position: relative;
          margin-bottom: 20px;
        }
        @media (max-width: 767px) {
          .alert-box {
            padding-left: 0px !important;
          }
        }
        .alert-box .left {
          max-width: 75px;
          width: 100%;
          height: 100%;
          border-radius: 4px;
          background: #d50100;
          position: absolute;
          left: 0;
          top: 0;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        @media (max-width: 767px) {
          .alert-box .left {
            display: none;
          }
        }
        .alert-box .left h5 {
          -webkit-transform: rotate(-90deg);
          -moz-transform: rotate(-90deg);
          -ms-transform: rotate(-90deg);
          -o-transform: rotate(-90deg);
          transform: rotate(-90deg);
          color: #fff;
        }
        .alert-box .alert {
          margin-bottom: 0px;
          padding: 25px 40px;
        }
        @media (max-width: 767px) {
          .alert-box .alert {
            padding: 20px;
          }
        }

        /* Alert Primary */
        .primary-alert .left {
          background: #9f23c2;
        }
        .primary-alert .alert {
          color: #9f23c2;
          border: 1px solid #9f23c2;
          background: rgba(54, 92, 245, 0.2);
          width: 100%;
        }
        .primary-alert .alert .alert-heading {
          color: #9f23c2;
          margin-bottom: 15px;
        }

        /* Alert Danger */
        .danger-alert .left {
          background: #d50100;
        }
        .danger-alert .alert {
          color: #d50100;
          border: 1px solid #d50100;
          background: rgba(213, 1, 0, 0.2);
          width: 100%;
        }
        .danger-alert .alert .alert-heading {
          color: #d50100;
          margin-bottom: 15px;
        }

        /* Alert warning */
        .warning-alert .left {
          background: #f7c800;
        }
        .warning-alert .alert {
          color: #f7c800;
          border: 1px solid #f7c800;
          background: rgba(247, 200, 0, 0.2);
          width: 100%;
        }
        .warning-alert .alert .alert-heading {
          color: #f7c800;
          margin-bottom: 15px;
        }

        /* Alert warning */
        .warning-alert .left {
          background: #f7c800;
        }
        .warning-alert .alert {
          color: #f7c800;
          border: 1px solid #f7c800;
          background: rgba(247, 200, 0, 0.2);
          width: 100%;
        }
        .warning-alert .alert .alert-heading {
          color: #f7c800;
          margin-bottom: 15px;
        }

        /* Alert info */
        .info-alert .left {
          background: #97ca31;
        }
        .info-alert .alert {
          color: #97ca31;
          border: 1px solid #97ca31;
          background: rgba(151, 202, 49, 0.2);
          width: 100%;
        }
        .info-alert .alert .alert-heading {
          color: #97ca31;
          margin-bottom: 15px;
        }

        /* Alert success */
        .success-alert .left {
          background: #219653;
        }
        .success-alert .alert {
          color: #219653;
          border: 1px solid #219653;
          background: rgba(33, 150, 83, 0.2);
          width: 100%;
        }
        .success-alert .alert .alert-heading {
          color: #219653;
          margin-bottom: 15px;
        }

        /* Alert secondary */
        .secondary-alert .left {
          background: #00c1f8;
        }
        .secondary-alert .alert {
          color: #00c1f8;
          border: 1px solid #00c1f8;
          background: rgba(0, 193, 248, 0.2);
          width: 100%;
        }
        .secondary-alert .alert .alert-heading {
          color: #00c1f8;
          margin-bottom: 15px;
        }

        /* Alert gray */
        .gray-alert .left {
          background: #5d657b;
        }
        .gray-alert .alert {
          color: #5d657b;
          border: 1px solid #5d657b;
          background: rgba(93, 101, 123, 0.2);
          width: 100%;
        }
        .gray-alert .alert .alert-heading {
          color: #5d657b;
          margin-bottom: 15px;
        }

        /* Alert black */
        .black-alert .left {
          background: #000;
        }
        .black-alert .alert {
          color: #000;
          border: 1px solid #000;
          background: rgba(0, 0, 0, 0.2);
          width: 100%;
        }
        .black-alert .alert .alert-heading {
          color: #000;
          margin-bottom: 15px;
        }

        /* Alert orange */
        .orange-alert .left {
          background: #f2994a;
        }
        .orange-alert .alert {
          color: #f2994a;
          border: 1px solid #f2994a;
          background: rgba(242, 153, 74, 0.2);
          width: 100%;
        }
        .orange-alert .alert .alert-heading {
          color: #f2994a;
          margin-bottom: 15px;
        }

        /* ========== cards css =========== */
        /* card-style-1 */
        .card-style-1 {
          background: #fff;
          border: 1px solid #efefef;
          border-radius: 10px;
          padding: 25px 0;
          position: relative;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .card-style-1:hover {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .card-style-1 .card-meta {
          display: flex;
          align-items: center;
          margin-bottom: 15px;
          padding: 0 30px;
        }
        @media (max-width: 767px) {
          .card-style-1 .card-meta {
            padding: 0 20px;
          }
        }
        .card-style-1 .card-meta .image {
          max-width: 40px;
          width: 100%;
          border-radius: 50%;
          overflow: hidden;
          margin-right: 12px;
        }
        .card-style-1 .card-meta .image img {
          width: 100%;
        }
        .card-style-1 .card-meta .text p {
          color: #1A2142;
        }
        .card-style-1 .card-meta .text p a {
          color: inherit;
        }
        .card-style-1 .card-meta .text p a:hover {
          color: #9f23c2;
        }
        .card-style-1 .card-image {
          border-radius: 10px;
          margin-bottom: 25px;
          overflow: hidden;
        }
        .card-style-1 .card-image a {
          display: block;
        }
        .card-style-1 .card-image img {
          width: 100%;
        }
        .card-style-1 .card-content {
          padding: 0px 30px;
        }
        @media (max-width: 767px) {
          .card-style-1 .card-content {
            padding: 0px 20px;
          }
        }
        .card-style-1 .card-content h4 a {
          color: inherit;
          margin-bottom: 15px;
          display: block;
        }
        .card-style-1 .card-content h4 a:hover {
          color: #9f23c2;
        }

        /* card-style-2 */
        .card-style-2 {
          background: #fff;
          border: 1px solid #efefef;
          border-radius: 4px;
          padding: 20px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .card-style-2:hover {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .card-style-2 .card-image {
          border-radius: 4px;
          margin-bottom: 30px;
          overflow: hidden;
        }
        .card-style-2 .card-image a {
          display: block;
        }
        .card-style-2 .card-image img {
          width: 100%;
        }
        .card-style-2 .card-content {
          padding: 0px 10px;
        }
        @media (max-width: 767px) {
          .card-style-2 .card-content {
            padding: 0px;
          }
        }
        .card-style-2 .card-content h4 a {
          color: inherit;
          margin-bottom: 15px;
          display: block;
        }
        .card-style-2 .card-content h4 a:hover {
          color: #9f23c2;
        }

        /* card-style-3 */
        .card-style-3 {
          background: #fff;
          border: 1px solid #efefef;
          border-radius: 4px;
          padding: 25px 30px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .card-style-3:hover {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .card-style-3 .card-content h4 a {
          color: inherit;
          margin-bottom: 15px;
          display: block;
        }
        .card-style-3 .card-content h4 a:hover {
          color: #9f23c2;
        }
        .card-style-3 .card-content a.read-more {
          font-weight: 500;
          color: #1A2142;
          margin-top: 20px;
        }
        .card-style-3 .card-content a.read-more:hover {
          color: #9f23c2;
          letter-spacing: 2px;
        }

        /* card-style-4 */
        .card-style-4 {
          background: #fff;
          border: 1px solid #efefef;
          border-radius: 4px;
          padding: 20px 30px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .card-style-4:hover {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .card-style-4 .card-image {
          border-radius: 50%;
          margin: auto;
          margin-bottom: 30px;
          max-width: 250px;
          width: 100%;
          overflow: hidden;
        }
        .card-style-4 .card-image a {
          display: block;
        }
        .card-style-4 .card-image img {
          width: 100%;
        }
        .card-style-4 .card-content {
          margin-bottom: 10px;
        }
        .card-style-4 .card-content h4 a {
          color: inherit;
          margin-bottom: 15px;
          display: block;
        }
        .card-style-4 .card-content h4 a:hover {
          color: #9f23c2;
        }
        .card-style-4 .card-content a.read-more {
          font-weight: 500;
          color: #1A2142;
          margin-top: 20px;
        }
        .card-style-4 .card-content a.read-more:hover {
          color: #9f23c2;
          letter-spacing: 2px;
        }

        /* card-style-5 */
        .card-style-5 {
          background: #fff;
          border: 1px solid #efefef;
          border-radius: 4px;
          padding: 20px;
          display: flex;
          align-items: center;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .card-style-5:hover {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 767px) {
          .card-style-5 {
            display: block;
          }
        }
        @media only screen and (min-width: 550px) and (max-width: 767px) {
          .card-style-5 {
            display: flex;
          }
        }
        .card-style-5 .card-image {
          margin: auto;
          margin-right: 20px;
          border-radius: 4px;
          max-width: 180px;
          width: 100%;
          overflow: hidden;
        }
        @media (max-width: 767px) {
          .card-style-5 .card-image {
            margin-right: auto;
            margin-bottom: 20px;
            max-width: 100%;
          }
        }
        @media only screen and (min-width: 550px) and (max-width: 767px) {
          .card-style-5 .card-image {
            margin-right: 20px;
            margin-bottom: 0px;
            max-width: 180px;
          }
        }
        .card-style-5 .card-image a {
          display: block;
        }
        .card-style-5 .card-image img {
          width: 100%;
        }
        @media (max-width: 767px) {
          .card-style-5 .card-image img {
            width: 100%;
          }
        }
        .card-style-5 .card-content {
          margin-bottom: 10px;
        }
        .card-style-5 .card-content h4 a {
          color: inherit;
          margin-bottom: 15px;
          display: block;
        }
        .card-style-5 .card-content h4 a:hover {
          color: #9f23c2;
        }
        .card-style-5 .card-content .main-btn {
          margin-top: 20px;
        }

        /* ======= card-style-6 ======== */
        .card-style-6 {
          padding: 25px 30px;
          background: #fff;
          border: 1px solid #efefef;
          border-radius: 4px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .card-style-6:hover {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        @media only screen and (min-width: 1200px) and (max-width: 1399px), (max-width: 767px) {
          .card-style-6 {
            padding: 20px;
          }
        }
        .card-style-6 .card-image {
          border-radius: 4px;
          overflow: hidden;
          margin-bottom: 15px;
        }
        .card-style-6 .card-image a {
          display: block;
        }
        .card-style-6 .card-image a img {
          width: 100%;
        }
        .card-style-6 .card-action {
          display: flex;
        }
        .card-style-6 .card-action .action {
          display: flex;
          align-items: center;
        }
        .card-style-6 .card-action .action a {
          color: #5d657b;
          font-size: 14px;
        }
        .card-style-6 .card-action .action a:hover {
          text-decoration: underline;
        }
        .card-style-6 .card-action .action button {
          border: none;
          background: none;
          display: flex;
          color: #1A2142;
          margin-right: 10px;
          font-size: 16px;
        }
        .card-style-6 .card-action .action button:hover {
          color: #9f23c2;
        }

        /* ======= icon-card ======== */
        .icon-card {
          display: flex;
          align-items: center;
          background: #fff;
          padding: 30px 20px;
          box-shadow: 0px 12px 24px -4px rgba(145, 158, 171, 0.12), 0px 0px 2px 0px rgba(145, 158, 171, 0.2);
          border-radius: 7px;
        }
        .icon-card.icon-card-3 {
          display: block;
          padding: 0px;
        }
        .icon-card.icon-card-3 .card-content {
          display: flex;
          padding: 20px;
          padding-bottom: 0;
        }
        .icon-card.icon-card-4 {
          display: block;
          padding: 30px;
        }
        .icon-card.icon-card-4 .icon {
          max-width: 50px;
          height: 50px;
          border-radius: 5px;
          background: rgba(54, 92, 245, 0.08);
        }
        .icon-card.icon-card-4 .text-danger-2 i {
          -webkit-transform: rotate(90deg);
          -moz-transform: rotate(90deg);
          -ms-transform: rotate(90deg);
          -o-transform: rotate(90deg);
          transform: rotate(90deg);
        }
        .icon-card.icon-card-4 .card-content {
          margin-top: 18px;
        }
        @media only screen and (min-width: 1200px) and (max-width: 1399px) {
          .icon-card h6 {
            font-size: 15px;
          }
        }
        @media only screen and (min-width: 1200px) and (max-width: 1399px) {
          .icon-card h3 {
            font-size: 20px;
          }
        }
        .icon-card.icon-card-2 {
          display: block;
        }
        .icon-card.icon-card-2 .progress {
          height: 7px;
        }
        .icon-card.icon-card-2 .progress .progress-bar {
          border-radius: 4px;
        }
        .icon-card .icon {
          max-width: 46px;
          width: 100%;
          height: 46px;
          border-radius: 10px;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 24px;
          margin-right: 20px;
          background: rgba(54, 92, 245, 0.1);
          color: #9f23c2;
          font-weight: 700;
        }
        @media only screen and (min-width: 1200px) and (max-width: 1399px) {
          .icon-card .icon {
            margin-right: 10px;
          }
        }
        .icon-card .icon.purple {
          background: rgba(155, 81, 224, 0.1);
          color: #9b51e0;
        }
        .icon-card .icon.success {
          background: rgba(33, 150, 83, 0.1);
          color: #219653;
        }
        .icon-card .icon.primary {
          background: rgba(54, 92, 245, 0.1);
          color: #9f23c2;
        }
        .icon-card .icon.orange {
          background: rgba(242, 153, 74, 0.1);
          color: #f2994a;
        }
        .icon-card .icon.blue-light {
          background: rgba(73, 190, 255, 0.08);
          color: #49BEFF;
        }
        .icon-card .icon.opacity-100.purple {
          background: #9b51e0;
          color: #fff;
        }
        .icon-card .icon.opacity-100.success {
          background: #219653;
          color: #fff;
        }
        .icon-card .icon.opacity-100.primary {
          background: #9f23c2;
          color: #fff;
        }
        .icon-card .icon.opacity-100.orange {
          background: #f2994a;
          color: #fff;
        }
        .icon-card .icon.opacity-100.deep-blue {
          background: #345d9d;
          color: #fff;
        }

        .card-wrapper {
          display: flex;
          width: 100%;
          overflow-x: auto;
          padding: 25px 15px;
        }
        .card-wrapper .single-card-wrapper {
          padding: 0px 15px;
        }
        .card-wrapper .single-card {
          border-radius: 10px;
          position: relative;
          overflow: hidden;
          z-index: 1;
          padding: 30px;
          max-width: 330px;
          min-width: 330px;
          width: 100%;
        }
        .card-wrapper .single-card .bg-shape {
          position: absolute;
          bottom: 0;
          right: 0;
          top: 0;
          left: 0;
          z-index: -1;
        }
        .card-wrapper .single-card h3 {
          font-weight: bold;
          font-size: 24px;
          color: #fff;
          margin-bottom: 36px;
        }
        .card-wrapper .single-card .card-info {
          display: flex;
          align-items: center;
        }
        .card-wrapper .single-card .card-info span {
          font-weight: 500;
          font-size: 12px;
          color: rgba(255, 255, 255, 0.6);
        }
        .card-wrapper .single-card .card-info p {
          font-weight: 500;
          font-size: 12px;
          color: #fff;
        }

        /* =========== tables css =========== */
        .table {
          border-collapse: inherit;
          border-spacing: 0px;
        }
        .table > :not(caption) > * > * {
          padding: 15px 0;
          border-bottom-color: #efefef;
          vertical-align: middle;
        }
        .table > :not(:last-child) > :last-child > * {
          border-bottom-color: #efefef;
        }
        .table tbody tr:first-child > * {
          padding-top: 20px;
        }
        .table tbody tr:last-child > * {
          border-bottom-color: transparent;
          padding-bottom: 0px;
        }
        .table th h6 {
          font-weight: 500;
          color: #1A2142;
          font-size: 14px;
        }
        .table td.min-width {
          padding: 5px;
        }
        @media (max-width: 767px) {
          .table td.min-width {
            min-width: 150px;
          }
        }
        .table td p {
          font-size: 14px;
          line-height: 1.5;
          color: #5d657b;
        }
        .table td p a {
          color: inherit;
        }
        .table td p a:hover {
          color: #9f23c2;
        }
        .table .lead-info {
          min-width: 200px;
        }
        .table .lead-email {
          min-width: 150px;
          white-space: nowrap;
        }
        .table .lead-phone {
          min-width: 160px;
        }
        .table .lead-company {
          min-width: 180px;
        }
        .table .referrals-image {
          min-width: 150px;
        }
        .table .referrals-image .image {
          width: 55px;
          max-width: 100%;
          height: 55px;
          border-radius: 4px;
          overflow: hidden;
        }
        .table .referrals-image .image img {
          width: 100%;
        }
        .table .lead {
          display: flex;
          align-items: center;
        }
        .table .lead .lead-image {
          max-width: 50px;
          width: 100%;
          height: 50px;
          border-radius: 50%;
          overflow: hidden;
          margin-right: 15px;
        }
        .table .lead .lead-image img {
          width: 100%;
        }
        .table .lead .lead-text {
          width: 100%;
        }
        .table .employee-image {
          width: 50px;
          max-width: 100%;
          height: 50px;
          border-radius: 50%;
          overflow: hidden;
          margin-right: 15px;
        }
        .table .employee-image img {
          width: 100%;
        }
        .table .action {
          display: flex;
          align-items: center;
        }
        .table .action button {
          border: none;
          background: transparent;
          padding: 0px 6px;
          font-size: 18px;
        }
        .table .action button.edit:hover {
          color: #9f23c2;
        }
        .table .action button::after {
          display: none;
        }
        .table .action .dropdown-menu {
          -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.07);
          -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.07);
        }
        .table .action .dropdown-menu li:hover a {
          color: #9f23c2 !important;
        }
        .table .action .dropdown-menu li a {
          display: block;
        }

        .top-selling-table tr th,
        .top-selling-table tr td {
          vertical-align: middle;
          padding: 10px 5px;
        }
        .top-selling-table tr .min-width {
          min-width: 80px;
          white-space: nowrap;
        }
        .top-selling-table .form-check-input[type=checkbox] {
          margin-left: 5px;
        }
        .top-selling-table .form-check-input[type=checkbox]:checked {
          background-color: #9f23c2;
          border-color: #9f23c2;
        }
        .top-selling-table .product {
          display: flex;
          align-items: center;
          min-width: 150px;
        }
        .top-selling-table .product .image {
          border-radius: 4px;
          overflow: hidden;
          margin-right: 15px;
          max-width: 50px;
          width: 100%;
          height: 50px;
        }
        .top-selling-table .product .image img {
          width: 100%;
        }
        .top-selling-table .product p {
          width: 100%;
        }

        @media (max-width: 767px) {
          .referrals-table-card .title .right {
            width: 100%;
          }
        }
        @media only screen and (min-width: 550px) and (max-width: 767px) {
          .referrals-table-card .title .right {
            width: auto;
          }
        }
        .referrals-table-card .referrals-table td {
          padding: 10px;
        }

        /* ===== lead-table ===== */
        .lead-table th,
        .lead-table td {
          padding: 10px 5px;
        }
        .lead-table .name {
          min-width: 120px;
        }
        .lead-table .email {
          min-width: 130px;
        }
        .lead-table .project {
          min-width: 150px;
        }
        .lead-table .status {
          min-width: 120px;
          text-align: center;
        }
        .lead-table .action {
          min-width: 60px;
        }

        .clients-table-card .table .employee-info {
          min-width: 150px;
        }

        .clients-table th,
        .clients-table td {
          padding: 5px;
        }
        .clients-table th.min-width,
        .clients-table td.min-width {
          min-width: 150px;
        }
        .clients-table .employee-image {
          margin-right: 0px;
        }

        .table-pagination ul li a {
          width: 32px;
          height: 32px;
          background: #e5e5e5;
          border-radius: 4px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 14px;
          color: rgba(0, 0, 0, 0.7);
        }
        .table-pagination ul li a:hover, .table-pagination ul li a.active {
          background: #9f23c2;
          color: #fff;
        }

        .table-search form {
          max-width: 270px;
          position: relative;
        }
        .table-search form input {
          width: 100%;
          border: 1px solid #efefef;
          background: rgba(239, 239, 239, 0.5);
          border-radius: 4px;
          height: 46px;
          padding-left: 44px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .table-search form input:focus {
          border-color: #9f23c2;
        }
        .table-search form button {
          position: absolute;
          border: none;
          background: transparent;
          left: 16px;
          top: 0;
          height: 46px;
          color: #5d657b;
        }

        .striped-table td,
        .striped-table th {
          padding-left: 5px;
          padding-right: 5px;
        }

        .dataTable-pagination li:hover a,
        .dataTable-pagination .active a,
        .dataTable-pagination .active a:focus,
        .dataTable-pagination .active a:hover {
          background: #9f23c2;
          color: #fff;
          border-radius: 3px;
        }

        .dataTable-pagination .ellipsis:hover a {
          background: transparent;
          color: #333;
        }

        .dataTable-selector {
          border-radius: 5px;
          border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .dataTable-input {
          width: 100%;
          border: 1px solid #efefef;
          background: rgba(239, 239, 239, 0.5);
          border-radius: 4px;
          height: 46px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .dataTable-input:focus {
          border-color: #9f23c2;
        }

        .dataTable-input:focus {
          border-color: #9f23c2;
        }

        .dataTable-table > tbody > tr > td,
        .dataTable-table > tbody > tr > th,
        .dataTable-table > tfoot > tr > td,
        .dataTable-table > tfoot > tr > th,
        .dataTable-table > thead > tr > td,
        .dataTable-table > thead > tr > th {
          padding: 15px 10px;
        }

        @media (max-width: 767px) {
          .dataTable-top > div:last-child.dataTable-search {
            margin-top: 12px;
            float: left;
          }
        }

        @media (max-width: 767px) {
          .dataTable-pagination ul li {
            margin: 5px 0;
          }
        }
        .activity-card .button-group {
          display: flex;
          align-items: center;
          border-radius: 50px;
          border: 1px solid #efefef;
        }
        .activity-card .button-group a {
          font-weight: 500;
          font-size: 12px;
          padding: 4px 16px;
          display: inline-block;
          color: #2f3546;
          border-radius: 50px;
          margin: 3px;
        }
        .activity-card .button-group a.active, .activity-card .button-group a:hover {
          background: #9f23c2;
          color: #fff;
        }

        .activity-table td {
          min-width: 90px;
          padding: 10px;
          border: none;
        }
        .activity-table td.time {
          min-width: 110px;
        }
        .activity-table .icon {
          width: 24px;
          height: 24px;
          border-radius: 6px;
          display: flex;
          align-items: center;
          justify-content: center;
          position: relative;
        }
        .activity-table .icon .status {
          width: 8px;
          height: 8px;
          border: 1px solid #fff;
          border-radius: 50%;
          position: absolute;
          top: -1px;
          right: -1px;
        }
        .activity-table .status-btn {
          font-size: 12px;
          border-radius: 50px;
          border: 1px solid #efefef;
          padding: 4px 14px;
          color: #5d657b;
          min-width: 90px;
          text-align: center;
        }

        .sell-order-table th,
        .sell-order-table td {
          min-width: 60px;
          padding: 10px 5px;
          border: none;
        }

        /* =========== form elements css ========== */
        /* ===== input style ===== */
        .input-style-1 {
          position: relative;
          margin-bottom: 30px;
        }
        .input-style-1 label {
          font-size: 14px;
          font-weight: 500;
          color: #1A2142;
          display: block;
          margin-bottom: 10px;
        }
        .input-style-1 input,
        .input-style-1 textarea {
          width: 100%;
          background: rgba(239, 239, 239, 0.5);
          border: 1px solid #e5e5e5;
          border-radius: 4px;
          padding: 16px;
          color: #5d657b;
          resize: none;
          transition: all 0.3s;
        }
        @media (max-width: 767px) {
          .input-style-1 input,
          .input-style-1 textarea {
            font-size: 14px;
          }
        }
        .input-style-1 input:focus,
        .input-style-1 textarea:focus {
          border-color: #9f23c2;
          background: #fff;
        }
        .input-style-1 input[type=date], .input-style-1 input[type=time],
        .input-style-1 textarea[type=date],
        .input-style-1 textarea[type=time] {
          background: transparent;
        }
        .input-style-1 input.light-bg[type=date], .input-style-1 input.light-bg[type=time],
        .input-style-1 textarea.light-bg[type=date],
        .input-style-1 textarea.light-bg[type=time] {
          background: rgba(239, 239, 239, 0.5);
        }
        .input-style-1 input.light-bg[type=date]:focus, .input-style-1 input.light-bg[type=time]:focus,
        .input-style-1 textarea.light-bg[type=date]:focus,
        .input-style-1 textarea.light-bg[type=time]:focus {
          background: #fff;
        }

        .input-style-2 {
          position: relative;
          margin-bottom: 30px;
          z-index: 1;
        }
        .input-style-2 label {
          font-size: 14px;
          font-weight: 500;
          color: #1A2142;
          display: block;
          margin-bottom: 10px;
        }
        .input-style-2 input,
        .input-style-2 textarea {
          width: 100%;
          background: rgba(239, 239, 239, 0.5);
          border: 1px solid #e5e5e5;
          border-radius: 4px;
          padding: 16px;
          color: #5d657b;
          resize: none;
          transition: all 0.3s;
        }
        .input-style-2 input:focus,
        .input-style-2 textarea:focus {
          border-color: #9f23c2;
          background: #fff;
        }
        .input-style-2 input[type=date], .input-style-2 input[type=time],
        .input-style-2 textarea[type=date],
        .input-style-2 textarea[type=time] {
          background: transparent;
        }
        .input-style-2 input[type=date]::-webkit-inner-spin-button,
        .input-style-2 input[type=date]::-webkit-calendar-picker-indicator {
          opacity: 0;
        }
        .input-style-2 input[type=date] ~ .icon {
          z-index: -1;
        }
        .input-style-2 .icon {
          position: absolute;
          right: 0;
          bottom: 0;
          padding: 17px;
        }

        .input-style-3 {
          position: relative;
          margin-bottom: 30px;
        }
        .input-style-3 label {
          font-size: 14px;
          font-weight: 500;
          color: #1A2142;
          display: block;
          margin-bottom: 10px;
        }
        .input-style-3 input,
        .input-style-3 textarea {
          width: 100%;
          background: rgba(239, 239, 239, 0.5);
          border: 1px solid #e5e5e5;
          border-radius: 4px;
          padding: 16px;
          padding-left: 45px;
          color: #5d657b;
          resize: none;
          transition: all 0.3s;
        }
        .input-style-3 input:focus,
        .input-style-3 textarea:focus {
          border-color: #9f23c2;
          background: #fff;
        }
        .input-style-3 .icon {
          position: absolute;
          left: 0;
          top: 0;
          height: 100%;
          padding: 16px;
        }

        /* ========= select style ========== */
        .select-style-1 {
          margin-bottom: 30px;
        }
        .select-style-1 label {
          font-size: 14px;
          font-weight: 500;
          color: #1A2142;
          display: block;
          margin-bottom: 10px;
        }
        .select-style-1 .select-position {
          position: relative;
        }
        .select-style-1 .select-position::after {
          border-bottom: 2px solid #5d657b;
          border-right: 2px solid #5d657b;
          content: "";
          display: block;
          height: 10px;
          width: 10px;
          margin-top: -5px;
          pointer-events: none;
          position: absolute;
          right: 16px;
          top: 50%;
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          transform: rotate(45deg);
          -webkit-transition: all 0.15s ease-in-out;
          transition: all 0.15s ease-in-out;
        }
        .select-style-1 .select-position.select-sm::after {
          margin-top: -8px;
        }
        .select-style-1 .select-position.select-sm select {
          padding-top: 8px;
          padding-bottom: 8px;
          font-size: 14px;
        }
        .select-style-1 .select-position select {
          width: 100%;
          background: transparent;
          border: 1px solid #e5e5e5;
          border-radius: 10px;
          padding: 16px;
          padding-right: 38px;
          color: #5d657b;
          appearance: none;
          -webkit-appearance: none;
          -moz-appearance: none;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .select-style-1 .select-position select:focus {
          border-color: #9f23c2;
          outline: none;
        }
        .select-style-1 .select-position select.light-bg {
          background: rgba(239, 239, 239, 0.5);
        }
        .select-style-1 .select-position select.light-bg:focus {
          background: #fff;
        }
        .select-style-1 .select-position select.radius-30 {
          border-radius: 30px;
        }

        .select-style-2 {
          margin-bottom: 30px;
        }
        .select-style-2 .select-position {
          position: relative;
        }
        .select-style-2 .select-position.select-sm::after {
          margin-top: -8px;
        }
        .select-style-2 .select-position.select-sm::before {
          margin-top: 0;
        }
        .select-style-2 .select-position.select-sm select {
          padding-top: 8px;
          padding-bottom: 8px;
          font-size: 14px;
        }
        .select-style-2 .select-position::before, .select-style-2 .select-position::after {
          content: "";
          display: block;
          height: 8px;
          width: 8px;
          pointer-events: none;
          position: absolute;
          right: 16px;
          top: 50%;
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          transform: rotate(45deg);
          -webkit-transition: all 0.15s ease-in-out;
          transition: all 0.15s ease-in-out;
        }
        .select-style-2 .select-position::before {
          margin-top: 0px;
          border-bottom: 1px solid #5d657b;
          border-right: 1px solid #5d657b;
        }
        .select-style-2 .select-position::after {
          margin-top: -8px;
          border-top: 1px solid #5d657b;
          border-left: 1px solid #5d657b;
        }
        .select-style-2 .select-position select {
          width: 100%;
          background: transparent;
          border: 1px solid #e5e5e5;
          border-radius: 10px;
          padding: 16px;
          padding-right: 38px;
          color: #5d657b;
          appearance: none;
          -webkit-appearance: none;
          -moz-appearance: none;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .select-style-2 .select-position select:focus {
          border-color: #9f23c2;
          outline: none;
        }
        .select-style-2 .select-position select.light-bg {
          background: rgba(239, 239, 239, 0.5);
        }
        .select-style-2 .select-position select.light-bg:focus {
          background: #fff;
        }
        .select-style-2 .select-position select.select-sm {
          padding-top: 8px;
          padding-bottom: 8px;
          font-size: 14px;
        }

        .select-style-3 {
          margin-bottom: 30px;
        }
        .select-style-3 .select-position {
          position: relative;
        }
        .select-style-3 .select-position::after {
          border-bottom: 2px solid #5d657b;
          border-right: 2px solid #5d657b;
          content: "";
          display: block;
          height: 10px;
          width: 10px;
          margin-top: -7px;
          pointer-events: none;
          position: absolute;
          right: 0px;
          top: 50%;
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          transform: rotate(45deg);
          -webkit-transition: all 0.15s ease-in-out;
          transition: all 0.15s ease-in-out;
        }
        .select-style-3 .select-position.select-sm::after {
          margin-top: -8px;
        }
        .select-style-3 .select-position.select-sm select {
          padding-top: 8px;
          padding-bottom: 8px;
          font-size: 14px;
        }
        .select-style-3 .select-position select {
          width: 100%;
          background: transparent;
          border: transparent;
          border-radius: 10px;
          padding-right: 38px;
          color: #000;
          appearance: none;
          -webkit-appearance: none;
          -moz-appearance: none;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .select-style-3 .select-position select:focus {
          border-color: #9f23c2;
          outline: none;
        }
        .select-style-3 .select-position select.light-bg {
          background: rgba(239, 239, 239, 0.5);
        }

        .toggle-switch {
          padding-left: 60px;
          min-height: 30px;
        }
        .toggle-switch .form-check-input {
          width: 50px;
          height: 28px;
          margin-left: -60px;
          cursor: pointer;
        }
        .toggle-switch label {
          margin-top: 6px;
          font-size: 14px;
          color: #1A2142;
          cursor: pointer;
          user-select: none;
        }

        .checkbox-style {
          padding-left: 40px;
          min-height: 22px;
        }
        .checkbox-style .form-check-input {
          width: 22px;
          height: 22px;
          border-radius: 4px;
          margin-left: -40px;
          cursor: pointer;
          margin-top: 6px;
        }
        .checkbox-style .form-check-input:checked {
          background-color: #9f23c2;
          border-color: #9f23c2;
        }
        .checkbox-style .form-check-input:disabled {
          cursor: auto;
        }
        .checkbox-style .form-check-input:disabled ~ label {
          cursor: auto;
        }
        .checkbox-style label {
          margin-top: 6px;
          cursor: pointer;
          user-select: none;
        }
        .checkbox-style.checkbox-success .form-check-input:checked {
          background-color: #219653;
          border-color: #219653;
        }
        .checkbox-style.checkbox-warning .form-check-input:checked {
          background-color: #f7c800;
          border-color: #f7c800;
        }
        .checkbox-style.checkbox-danger .form-check-input:checked {
          background-color: #d50100;
          border-color: #d50100;
        }

        .radio-style {
          padding-left: 40px;
          min-height: 22px;
        }
        .radio-style .form-check-input {
          width: 22px;
          height: 22px;
          border-radius: 50%;
          margin-left: -40px;
          cursor: pointer;
          margin-top: 7px;
        }
        .radio-style .form-check-input:disabled {
          cursor: auto;
        }
        .radio-style .form-check-input:disabled ~ label {
          cursor: auto;
        }
        .radio-style label {
          margin-top: 6px;
          cursor: pointer;
          user-select: none;
        }
        .radio-style.radio-success .form-check-input:checked {
          background-color: #219653;
          border-color: #219653;
        }
        .radio-style.radio-warning .form-check-input:checked {
          background-color: #f7c800;
          border-color: #f7c800;
        }
        .radio-style.radio-danger .form-check-input:checked {
          background-color: #d50100;
          border-color: #d50100;
        }

        @media (max-width: 767px) {
          .button-group .main-btn {
            width: 100%;
          }
        }

        .buy-sell-form .input-group {
          display: flex;
        }
        .buy-sell-form .input-group input {
          width: 60%;
          background: transparent;
          border: 1px solid #e2e8f0;
          border-radius: 4px;
          padding: 8px 16px;
          font-size: 14px;
          color: #5d657b;
        }
        .buy-sell-form .input-group input:focus {
          border-color: #9f23c2;
        }
        .buy-sell-form .input-group .select-style-1 {
          width: 40%;
        }
        .buy-sell-form .input-group .select-style-1 .select-position::after {
          width: 8px;
          height: 8px;
        }
        .buy-sell-form .input-group select {
          border: 1px solid #e2e8f0;
          border-radius: 0px 4px 4px 0px;
          padding: 8px 16px;
          padding-right: 24px;
          font-size: 14px;
          color: #5d657b;
        }
        .buy-sell-form .buy-sell-btn .main-btn {
          display: block;
          width: 100%;
          font-weight: 500;
        }
        .buy-sell-form .buy-sell-btn .main-btn:hover {
          box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
        }
        .buy-sell-form .buy-sell-btn .main-btn.success-btn {
          background: #08c18d;
        }
        .buy-sell-form .buy-sell-btn .main-btn.danger-btn {
          background: #eb5757;
        }
        .buy-sell-form .field-group-2 label {
          font-size: 12px;
        }
        .buy-sell-form .field-group-2 .input-group input {
          font-size: 12px;
          width: 70%;
        }
        .buy-sell-form .field-group-2 .input-group span {
          font-size: 12px;
          padding: 8px 16px;
          width: 30%;
          background: #e2e8f0;
          text-align: center;
          border-radius: 0px 4px 4px 0px;
          border: 1px solid #e2e8f0;
        }
        .buy-sell-form .input-group-2 label {
          font-size: 12px;
          color: #5d657b;
          margin-bottom: 8px;
          display: block;
        }
        .buy-sell-form .input-group-2 .select-position::after {
          width: 8px;
          height: 8px;
        }
        .buy-sell-form .input-group-2 select {
          padding: 8px 12px;
          font-size: 12px;
          color: #5d657b;
          border: 1px solid #e2e8f0;
          border-radius: 4px;
          width: 100%;
        }

        /* ============= notification css ============= */
        .single-notification {
          display: flex;
          justify-content: space-between;
          align-items: flex-start;
          padding: 20px 0;
          border-bottom: 1px solid #efefef;
        }
        .single-notification.readed {
          opacity: 0.7;
        }
        .single-notification:first-child {
          padding-top: 0px;
        }
        .single-notification:last-child {
          padding-bottom: 0px;
          border-bottom: 0px;
        }
        .single-notification .checkbox {
          max-width: 50px;
          width: 100%;
          padding-top: 10px;
        }
        @media (max-width: 767px) {
          .single-notification .checkbox {
            display: none;
          }
        }
        .single-notification .checkbox input {
          background-color: #efefef;
          border-color: #e5e5e5;
        }
        .single-notification .checkbox input:checked {
          background-color: #9f23c2;
          border-color: #9f23c2;
        }
        .single-notification .notification {
          display: flex;
          width: 100%;
        }
        @media (max-width: 767px) {
          .single-notification .notification {
            flex-direction: column;
          }
        }
        .single-notification .notification .image {
          max-width: 50px;
          width: 100%;
          height: 50px;
          border-radius: 50%;
          overflow: hidden;
          color: #fff;
          display: flex;
          justify-content: center;
          align-items: center;
          font-weight: 600;
          margin-right: 15px;
        }
        @media (max-width: 767px) {
          .single-notification .notification .image {
            margin-bottom: 15px;
          }
        }
        .single-notification .notification .image img {
          width: 100%;
        }
        .single-notification .notification .content {
          display: block;
          max-width: 800px;
        }
        .single-notification .notification .content h6 {
          margin-bottom: 15px;
        }
        .single-notification .notification .content p {
          margin-bottom: 10px;
        }
        .single-notification .action {
          display: inline-flex;
          justify-content: flex-end;
          padding-top: 10px;
        }
        @media (max-width: 767px) {
          .single-notification .action {
            display: none;
          }
        }
        .single-notification .action button {
          border: none;
          background: transparent;
          color: #5d657b;
          margin-left: 20px;
          font-size: 18px;
        }
        .single-notification .action button.delete-btn:hover {
          color: #d50100;
        }
        .single-notification .action .dropdown-toggle::after {
          display: none;
        }

        /* ========== Theme Change Css ============== */
        .darkTheme .single-notification {
          border-color: #2f3546;
        }

        /* ========== header css ========== */
        .header {
          padding: 22px 0;
          background: #fff;
          position: sticky;
          top: 0;
          z-index: 99;
        }
        .header .header-left .menu-toggle-btn .main-btn {
          padding: 10px 16px;
          border-radius: 8px;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        .header .header-left .header-search form {
          max-width: 270px;
          position: relative;
        }
        .header .header-left .header-search form input {
          width: 100%;
          border: 1px solid #efefef;
          background: rgba(239, 239, 239, 0.5);
          border-radius: 8px;
          padding: 10px 10px 10px 44px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .header .header-left .header-search form input:focus {
          border-color: #9f23c2;
          background: #fff;
        }
        .header .header-left .header-search form button {
          position: absolute;
          border: none;
          background: transparent;
          left: 16px;
          top: 0;
          height: 46px;
          color: #5d657b;
          font-weight: 700;
        }
        .header .header-left .header-search form button i {
          margin-top: 7px;
        }
        .header .header-right {
          display: flex;
          justify-content: flex-end;
        }
        .header .header-right button {
          border: 1px solid #F6F6F6;
          background: #F6F6F6;
          border-radius: 50%;
          height: 46px;
          width: 46px;
          display: flex;
          justify-content: center;
          align-items: center;
          position: relative;
          color: #1A2142;
        }
        .header .header-right button svg {
          fill: currentColor;
        }
        .header .header-right button::after {
          display: none;
        }
        .header .header-right button span {
          position: absolute;
          width: 12px;
          height: 12px;
          background: #FF737E;
          border: 2px solid #fff;
          border-radius: 50%;
          display: flex;
          justify-content: center;
          align-items: center;
          top: 0;
          right: 0;
        }
        .header .header-right .dropdown-menu {
          width: 350px;
          border: 1px solid #efefef;
          padding: 10px 10px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
          top: 21px !important;
          right: 0;
          position: absolute;
          transform: translate3d(0px, 60px, 0px);
          border-radius: 10px;
        }
        .header .header-right .dropdown-menu li {
          padding: 3px 0px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
          border-bottom: 1px solid #efefef;
          position: relative;
          z-index: 2;
        }
        .header .header-right .dropdown-menu li:hover a {
          color: #9f23c2;
          background: #f3f3f3;
        }
        .header .header-right .dropdown-menu li:last-child {
          border-bottom: none;
        }
        .header .header-right .dropdown-menu li a {
          padding: 8px 12px;
          display: flex;
          color: rgba(0, 0, 0, 0.7);
          border-radius: 6px;
        }
        .header .header-right .dropdown-menu li a .image {
          max-width: 35px;
          width: 100%;
          height: 35px;
          border-radius: 50%;
          overflow: hidden;
          margin-right: 12px;
        }
        .header .header-right .dropdown-menu li a .image img {
          width: 100%;
        }
        .header .header-right .dropdown-menu li a .content {
          width: 100%;
        }
        .header .header-right .dropdown-menu li a .content h6 {
          font-size: 14px;
          margin-bottom: 5px;
          font-weight: 600;
          line-height: 1;
        }
        .header .header-right .dropdown-menu li a .content p {
          font-size: 14px;
          color: rgba(0, 0, 0, 0.7);
          margin-bottom: 0px;
          line-height: 1.4;
        }
        .header .header-right .dropdown-menu li a .content span {
          font-size: 12px;
          color: rgba(0, 0, 0, 0.5);
        }
        .header .header-right .dropdown-box {
          position: relative;
        }
        .header .header-right .notification-box,
        .header .header-right .header-message-box {
          position: relative;
        }
        .header .header-right .notification-box .dropdown-menu.dropdown-menu-end {
          transform: translate3d(0px, 60px, 0px);
        }
        .header .header-right .header-message-box .dropdown-menu.dropdown-menu-end {
          transform: translate3d(0px, 60px, 0px);
        }
        .header .header-right .profile-box {
          display: flex;
          position: relative;
        }
        .header .header-right .profile-box button {
          width: auto;
        }
        .header .header-right .profile-box .dropdown-menu {
          width: 10rem;
          min-width: 190px;
          border: none;
          border-radius: 4px;
          box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), 0 0 16px rgba(0, 0, 0, 0.1);
          padding: 8px;
        }
        .header .header-right .profile-box .dropdown-menu.dropdown-menu-end {
          transform: translate3d(0px, 60px, 0px);
        }
        .header .header-right .profile-box .dropdown-menu li {
          border-bottom: none;
          padding: 0;
        }
        .header .header-right .profile-box .dropdown-menu li a {
          font-size: 14px;
          display: flex;
          align-items: center;
          border-radius: 6px;
          padding: 10px 8px;
          color: rgba(26, 33, 66, 0.5);
        }
        .header .header-right .profile-box .dropdown-menu li a i {
          margin-right: 8px;
          font-weight: 700;
        }
        .header .header-right .profile-box .dropdown-menu li a:hover {
          color: #1a2142;
          background: #f3f3f3;
        }
        .header .header-right .profile-box .dropdown-menu li.divider {
          margin: 4px 0;
          height: 1px;
          display: block;
          background: rgba(28, 28, 28, 0.05);
        }
        .header .header-right .profile-box .dropdown-menu .author-info {
          display: flex;
          align-items: center;
          padding: 4px;
          border-radius: 6px;
          cursor: pointer;
        }
        .header .header-right .profile-box .dropdown-menu .author-info .image {
          flex: none;
        }
        .header .header-right .profile-box .dropdown-menu .author-info .image img {
          width: 28px;
          height: 28px;
          border-radius: 50%;
          object-fit: cover;
        }
        .header .header-right .profile-box .dropdown-menu .author-info .content {
          padding-left: 8px;
        }
        .header .header-right .profile-box .dropdown-menu .author-info .content h4 {
          font-size: 14px;
          line-height: 1;
          font-weight: 500;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .header .header-right .profile-box .dropdown-menu .author-info .content a {
          font-size: 12px;
          line-height: 1rem;
          color: rgba(26, 33, 66, 0.4);
          padding: 0;
          display: inline;
          background-color: initial;
        }
        .header .header-right .profile-box .dropdown-menu .author-info .content a:hover {
          background: initial;
        }
        .header .header-right .profile-box .dropdown-menu .author-info:hover {
          background: #f3f3f3;
        }
        .header .header-right .profile-box .dropdown-menu .author-info:hover a {
          color: #1a2142;
        }
        .header .header-right .profile-box .profile-info {
          margin: 0 5px;
        }
        .header .header-right .profile-box .profile-info .info {
          display: flex;
          align-items: center;
        }
        .header .header-right .profile-box .profile-info .info .image {
          border: 1px solid #DFE5EF;
          width: 46px;
          height: 46px;
          border-radius: 50%;
          margin-right: 14px;
          position: relative;
        }
        .header .header-right .profile-box .profile-info .info .image img {
          width: 100%;
          border-radius: 50%;
        }
        .header .header-right .profile-box .profile-info .info p {
          font-size: 12px;
          text-align: left;
        }

        /* ========== Dashboards css ================= */
        @media (max-width: 767px) {
          #doughnutChart1 {
            height: 250px !important;
          }
        }

        .legend3 li {
          margin-right: 25px;
        }
        .legend3 li div {
          white-space: nowrap;
        }
        .legend3 li .bg-color {
          position: relative;
          margin-left: 12px;
          border-radius: 50%;
        }
        .legend3 li .bg-color::after {
          content: "";
          position: absolute;
          width: 12px;
          height: 12px;
          border-radius: 50%;
          background: inherit;
          left: -12px;
          top: 5px;
        }
        .legend3 li .text {
          margin-left: 10px;
        }
        .legend3 li .text p {
          display: flex;
          align-items: center;
          width: 100%;
        }
        @media (max-width: 767px) {
          .legend3 h2 {
            font-size: 22px;
          }
        }

        .legend-marketing .icon {
          width: 44px;
          height: 44px;
          border-radius: 5px;
          background: #ECF2FF;
          display: flex;
          align-items: center;
          justify-content: center;
          margin-right: 15px;
        }
        .legend-marketing .bg-color {
          width: 8px;
          height: 8px;
          border-radius: 50%;
          margin-right: 12px;
          margin-top: 8px;
        }
        .legend-marketing .text h5 {
          font-size: 18px;
          margin-top: 5px;
        }

        .todo-list-wrapper ul li.todo-list-item {
          position: relative;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding-left: 20px;
          margin-bottom: 25px;
        }
        .todo-list-wrapper ul li.todo-list-item:last-child {
          margin-bottom: 0px;
        }
        .todo-list-wrapper ul li.todo-list-item::before {
          content: "";
          position: absolute;
          left: 0;
          top: 0;
          width: 4px;
          height: 100%;
        }
        @media (max-width: 767px) {
          .todo-list-wrapper ul li.todo-list-item {
            display: block;
          }
          .todo-list-wrapper ul li.todo-list-item .todo-status {
            margin-top: 20px;
          }
        }
        .todo-list-wrapper ul li.todo-list-item.success::before {
          background: #219653;
        }
        .todo-list-wrapper ul li.todo-list-item.primary::before {
          background: #9f23c2;
        }
        .todo-list-wrapper ul li.todo-list-item.orange::before {
          background: #f2994a;
        }
        .todo-list-wrapper ul li.todo-list-item.danger::before {
          background: #d50100;
        }

        .cards-title {
          font-size: 18px;
          line-height: 22px;
        }

        .external-link {
          display: flex;
          flex-direction: column;
          gap: 15px;
        }
        .external-link .link-item {
          padding: 10px 15px;
          border-radius: 7px;
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        .external-link .link-item:hover {
          background: rgba(223, 229, 239, 0.2);
        }
        .external-link .link-name {
          display: flex;
          align-items: center;
          gap: 18px;
          color: #1A2142;
        }

        .card-top-chanels .top-chanels-item {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          padding: 11px 0;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
          .card-top-chanels .top-chanels-item {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }
        }

        .featured-tab .nav {
          gap: 12px;
        }
        .featured-tab .nav button {
          background: transparent;
          border: none;
          font-weight: 500;
          font-size: 14px;
          color: #64748B;
          padding: 8px 16px;
          display: flex;
          align-items: center;
          gap: 10px;
        }
        .featured-tab .nav button:hover, .featured-tab .nav button.active {
          color: #1A2142;
          background: rgba(223, 229, 239, 0.3);
        }
        .featured-tab .status-badge {
          font-size: 12px;
          font-weight: 500;
          padding: 4px 10px;
          border-radius: 30px;
        }
        .featured-tab .status-badge.queue {
          background: rgba(240, 149, 12, 0.08);
          color: #F0950C;
        }
        .featured-tab .status-badge.sent {
          background: rgba(16, 185, 129, 0.08);
          color: #10B981;
        }
        .featured-tab .tab-item-title:hover {
          color: #9f23c2;
          cursor: pointer;
        }

        .card-click-rate .device-list {
          display: flex;
          align-items: center;
          gap: 10px;
        }
        .card-click-rate .device-list li {
          display: flex;
          align-items: center;
          gap: 6px;
          font-size: 12px;
        }
        .card-click-rate .device-list li span {
          width: 8px;
          height: 8px;
          border-radius: 50%;
        }
        .card-click-rate .device-list li:nth-child(1n) span {
          background: #9f23c2;
        }
        .card-click-rate .device-list li:nth-child(2n) span {
          background: #ECF2FF;
        }
        .card-click-rate .device-list li:nth-child(3n) span {
          background: #F9F9FD;
        }
        .card-click-rate .apexcharts-tooltip-series-group {
          padding-top: 4px;
        }
        .card-click-rate .apexcharts-tooltip-z-group,
        .card-click-rate .apexcharts-tooltip-goals-group {
          display: none;
        }

        /* ============ signin css ============= */
        .auth-row {
          background: #fff;
          border-radius: 4px;
          overflow: hidden;
        }

        .auth-cover-wrapper {
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 45px;
          position: relative;
          z-index: 1;
          height: 100%;
        }
        @media (max-width: 767px) {
          .auth-cover-wrapper {
            padding: 30px 20px;
          }
        }
        .auth-cover-wrapper .auth-cover .title {
          text-align: cover;
          margin-bottom: 40px;
        }
        @media (max-width: 767px) {
          .auth-cover-wrapper .auth-cover .title h1 {
            font-size: 24px;
          }
        }
        .auth-cover-wrapper .auth-cover .cover-image {
          max-width: 100%;
          margin: auto;
        }
        .auth-cover-wrapper .auth-cover .cover-image img {
          width: 100%;
        }
        .auth-cover-wrapper .auth-cover .shape-image {
          position: absolute;
          z-index: -1;
          right: 0;
          bottom: 5%;
        }

        .signin-wrapper {
          background: #fff;
          padding: 60px;
          min-height: 600px;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .signin-wrapper {
            padding: 40px;
          }
        }
        @media (max-width: 767px) {
          .signin-wrapper {
            padding: 30px;
          }
        }
        .signin-wrapper .form-wrapper {
          width: 100%;
        }
        .signin-wrapper .singin-option button {
          font-size: 16px;
          font-weight: 600;
        }
        @media only screen and (min-width: 1200px) and (max-width: 1399px) {
          .signin-wrapper .singin-option button {
            padding-left: 25px;
            padding-right: 25px;
          }
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .signin-wrapper .singin-option button {
            padding-left: 30px;
            padding-right: 30px;
          }
        }
        @media (max-width: 767px) {
          .signin-wrapper .singin-option button {
            width: 100%;
          }
        }
        @media only screen and (min-width: 550px) and (max-width: 767px) {
          .signin-wrapper .singin-option button {
            width: auto;
          }
        }
        .signin-wrapper .singin-option a:hover {
          text-decoration: underline;
        }

        /* ============ signup css ============= */
        .auth-row {
          background: #fff;
          border-radius: 4px;
          overflow: hidden;
        }

        .auth-cover-wrapper {
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 45px;
          position: relative;
          z-index: 1;
          height: 100%;
        }
        @media (max-width: 767px) {
          .auth-cover-wrapper {
            padding: 30px 20px;
          }
        }
        .auth-cover-wrapper .auth-cover .title {
          text-align: cover;
          margin-bottom: 40px;
        }
        @media (max-width: 767px) {
          .auth-cover-wrapper .auth-cover .title h1 {
            font-size: 24px;
          }
        }
        .auth-cover-wrapper .auth-cover .cover-image {
          max-width: 100%;
          margin: auto;
        }
        .auth-cover-wrapper .auth-cover .cover-image img {
          width: 100%;
        }
        .auth-cover-wrapper .auth-cover .shape-image {
          position: absolute;
          z-index: -1;
          right: 0;
          bottom: 5%;
        }

        .signup-wrapper {
          background: #fff;
          padding: 60px;
          min-height: 600px;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .signup-wrapper {
            padding: 40px;
          }
        }
        @media (max-width: 767px) {
          .signup-wrapper {
            padding: 30px;
          }
        }
        .signup-wrapper .form-wrapper {
          width: 100%;
        }
        .signup-wrapper .singup-option button {
          font-size: 16px;
          font-weight: 600;
        }
        @media only screen and (min-width: 1200px) and (max-width: 1399px) {
          .signup-wrapper .singup-option button {
            padding-left: 25px;
            padding-right: 25px;
          }
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .signup-wrapper .singup-option button {
            padding-left: 30px;
            padding-right: 30px;
          }
        }
        @media (max-width: 767px) {
          .signup-wrapper .singup-option button {
            width: 100%;
          }
        }
        @media only screen and (min-width: 550px) and (max-width: 767px) {
          .signup-wrapper .singup-option button {
            width: auto;
          }
        }
        .signup-wrapper .singup-option a:hover {
          text-decoration: underline;
        }

        /* =========== settings css ============== */
        .settings-card-1 .profile-info .profile-image {
          max-width: 75px;
          width: 100%;
          height: 75px;
          border-radius: 50%;
          margin-right: 20px;
          position: relative;
          z-index: 1;
        }
        .settings-card-1 .profile-info .profile-image img {
          width: 100%;
          border-radius: 50%;
        }
        .settings-card-1 .profile-info .profile-image .update-image {
          position: absolute;
          bottom: 0;
          right: 0;
          width: 30px;
          height: 30px;
          background: #efefef;
          border: 2px solid #fff;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 50%;
          cursor: pointer;
          z-index: 99;
        }
        .settings-card-1 .profile-info .profile-image .update-image:hover {
          opacity: 0.9;
        }
        .settings-card-1 .profile-info .profile-image .update-image input {
          opacity: 0;
          position: absolute;
          width: 100%;
          height: 100%;
          cursor: pointer;
          z-index: 99;
        }
        .settings-card-1 .profile-info .profile-image .update-image label {
          cursor: pointer;
          z-index: 99;
        }

        /* =========== Invoice Css ============= */
        .invoice-card .invoice-header {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          flex: 1;
          padding-bottom: 30px;
          border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 767px) {
          .invoice-card .invoice-header {
            flex-direction: column;
          }
        }
        .invoice-card .invoice-header .invoice-logo {
          width: 110px;
          height: 110px;
          border-radius: 50%;
          overflow: hidden;
        }
        @media (max-width: 767px) {
          .invoice-card .invoice-header .invoice-logo {
            order: -1;
            margin-bottom: 30px;
          }
        }
        .invoice-card .invoice-header .invoice-logo img {
          width: 100%;
        }
        @media (max-width: 767px) {
          .invoice-card .invoice-header .invoice-date {
            margin-top: 30px;
          }
        }
        .invoice-card .invoice-header .invoice-date p {
          font-size: 14px;
          font-weight: 400;
          margin-bottom: 10px;
        }
        .invoice-card .invoice-header .invoice-date p span {
          font-weight: 500;
        }
        .invoice-card .invoice-address {
          padding-top: 30px;
          display: flex;
          margin-bottom: 40px;
        }
        @media (max-width: 767px) {
          .invoice-card .invoice-address {
            display: block;
          }
        }
        .invoice-card .invoice-address .address-item {
          margin-right: 30px;
          min-width: 250px;
        }
        .invoice-card .invoice-address .address-item h5 {
          margin-bottom: 15px;
        }
        .invoice-card .invoice-address .address-item h1 {
          margin-bottom: 10px;
          font-size: 24px;
        }
        .invoice-card .invoice-address .address-item p {
          margin-bottom: 10px;
        }
        @media (max-width: 767px) {
          .invoice-card .invoice-action ul li {
            flex: 1;
          }
        }
        @media (max-width: 767px) {
          .invoice-card .invoice-action ul li a {
            width: 100%;
          }
        }

        .invoice-table th,
        .invoice-table td {
          padding: 10px 8px;
        }
        .invoice-table .service {
          min-width: 150px;
        }
        .invoice-table .desc {
          min-width: 150px;
        }
        .invoice-table .qty {
          min-width: 150px;
        }
        .invoice-table .amount {
          min-width: 100px;
        }

        /* ============== Icons Css ===========*/
        .icons-wrapper .icons,
        .icons-wrapper ul {
          display: flex;
          flex-wrap: wrap;
          margin: 0 -10px;
        }
        .icons-wrapper .icons > div,
        .icons-wrapper .icons li,
        .icons-wrapper ul > div,
        .icons-wrapper ul li {
          display: flex;
          align-items: center;
          margin: 10px;
          flex-basis: 215px;
        }
        @media (max-width: 400px) {
          .icons-wrapper .icons > div,
          .icons-wrapper .icons li,
          .icons-wrapper ul > div,
          .icons-wrapper ul li {
            flex-basis: 100%;
          }
        }
        .icons-wrapper .icons > div i,
        .icons-wrapper .icons li i,
        .icons-wrapper ul > div i,
        .icons-wrapper ul li i {
          max-width: 45px;
          width: 100%;
          height: 45px;
          display: flex;
          align-items: center;
          justify-content: center;
          border: 1px solid #efefef;
          border-radius: 4px;
          background: transparent;
          color: #1A2142;
          font-size: 20px;
          margin-right: 10px;
        }
        .icons-wrapper .icons > div span,
        .icons-wrapper .icons li span,
        .icons-wrapper ul > div span,
        .icons-wrapper ul li span {
          color: #1A2142;
          user-select: all;
        }

        /* ============ Calendar Css ============= */
        .calendar-card .fc {
          height: 395px;
        }
        .calendar-card .fc#calendar-full {
          height: 600px;
        }
        .calendar-card .fc table {
          border: none;
        }
        .calendar-card .fc .fc-toolbar-title {
          font-size: 16px;
          font-weight: 500;
        }
        .calendar-card .fc .fc-button {
          background: transparent;
          border: none;
          color: #5d657b;
          text-transform: capitalize;
        }
        .calendar-card .fc .fc-button:focus {
          -webkit-box-shadow: none;
          -moz-box-shadow: none;
          box-shadow: none;
          color: #9f23c2;
        }
        .calendar-card .fc th {
          text-align: left;
          border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
          border-right: 0px;
        }
        .calendar-card .fc th a {
          color: #5d657b;
          font-weight: 400;
        }
        .calendar-card .fc .fc-day {
          border-width: 4px;
          background: #fff;
        }
        .calendar-card .fc .fc-day.fc-day-today .fc-daygrid-day-frame {
          background: #9f23c2;
        }
        .calendar-card .fc .fc-day.fc-day-today .fc-daygrid-day-frame a {
          color: #fff;
        }
        .calendar-card .fc .fc-day .fc-daygrid-day-frame {
          display: flex;
          flex-direction: column;
          align-items: flex-end;
          background: #f9f9f9;
          border-radius: 6px;
        }
        .calendar-card .fc .fc-day .fc-daygrid-day-frame a {
          color: #5d657b;
        }
        .calendar-card .fc-theme-standard td,
        .calendar-card .fc-theme-standard th {
          border-color: transparent;
        }

        /* =========== Sidebar css =========== */
        .sidebar-nav-wrapper {
          background: #fff;
          width: 250px;
          padding: 20px 0px;
          height: 100vh;
          position: fixed;
          overflow-y: scroll;
          overflow-x: hidden;
          top: 0;
          left: 0;
          z-index: 999;
          box-shadow: 0px 0px 30px 0px rgba(200, 208, 216, 0.3);
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
          -webkit-transform: translateX(0);
          -moz-transform: translateX(0);
          -ms-transform: translateX(0);
          -o-transform: translateX(0);
          transform: translateX(0);
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
          .sidebar-nav-wrapper {
            -webkit-transform: translateX(-260px);
            -moz-transform: translateX(-260px);
            -ms-transform: translateX(-260px);
            -o-transform: translateX(-260px);
            transform: translateX(-260px);
          }
        }
        .sidebar-nav-wrapper.active {
          -webkit-transform: translateX(-260px);
          -moz-transform: translateX(-260px);
          -ms-transform: translateX(-260px);
          -o-transform: translateX(-260px);
          transform: translateX(-260px);
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
          .sidebar-nav-wrapper.active {
            -webkit-transform: translateX(0px);
            -moz-transform: translateX(0px);
            -ms-transform: translateX(0px);
            -o-transform: translateX(0px);
            transform: translateX(0px);
          }
        }
        .sidebar-nav-wrapper .navbar-logo {
          padding: 0 25px;
          margin-bottom: 30px;
          margin-top: 11px;
        }
        .sidebar-nav-wrapper .sidebar-nav .divider {
          padding: 5px 25px;
          width: 100%;
        }
        .sidebar-nav-wrapper .sidebar-nav .divider hr {
          height: 1px;
          background: #E9EEF1;
        }
        .sidebar-nav-wrapper .sidebar-nav ul.collapsing {
          transition: none;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item {
          position: relative;
          margin-bottom: 15px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children > a {
          color: #1A2142;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children > a:not(.collapsed) .icon {
          color: #9f23c2;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children > a::after {
          content: url("data:image/svg+xml,%3Csvg width='10' height='10' viewBox='0 0 10 10' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.34306 7.76387L9.02356 3.8071C9.32923 3.47851 9.11273 2.91666 8.68048 2.91666L1.31947 2.91666C0.887218 2.91666 0.670743 3.47851 0.976393 3.8071L4.6569 7.76387C4.8464 7.96758 5.15356 7.96758 5.34306 7.76387Z' fill='%239AA4CA'/%3E%3C/svg%3E%0A");
          position: absolute;
          right: 25px;
          top: 11px;
          font-size: 12px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
          -webkit-transform: rotate(180deg);
          -moz-transform: rotate(180deg);
          -ms-transform: rotate(180deg);
          -o-transform: rotate(180deg);
          transform: rotate(180deg);
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children > a.collapsed {
          color: #9AA4CA;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children > a.collapsed::before {
          opacity: 0;
          visibility: hidden;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children > a.collapsed::after {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -ms-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul {
          padding: 10px 24px 40px 57px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li {
          margin-bottom: 12px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li:last-child {
          margin-bottom: 0px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li a {
          font-size: 14px;
          font-weight: 500;
          padding: 0;
          display: flex;
          align-items: center;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li a.active, .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li a:hover {
          color: #1A2142;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li a i {
          font-size: 16px;
          margin-right: 20px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li a span.text {
          display: flex;
          align-items: center;
          justify-content: space-between;
          width: 100%;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.nav-item-has-children ul li a span.pro-badge {
          background: #9f23c2;
          color: #000;
          padding: 2.5px 7px;
          border-radius: 30px;
          font-size: 10px;
          line-height: 13px;
          font-weight: 600;
          margin-left: 10px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item a {
          display: flex;
          align-items: center;
          color: #9AA4CA;
          font-size: 14px;
          font-weight: 500;
          width: 100%;
          position: relative;
          z-index: 1;
          padding: 7px 25px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item a span.text {
          display: flex;
          color: #000;
          align-items: center;
          justify-content: space-between;
          width: 100%;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item a span.pro-badge {
          background: #9f23c2;
          color: #fff;
          padding: 2.5px 7px;
          border-radius: 30px;
          font-size: 10px;
          line-height: 13px;
          font-weight: 600;
          margin-left: 10px;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item a .icon {
          margin-right: 20px;
          margin-top: -4px;
          font-size: 18px;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item a .icon svg {
          fill: currentColor;
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.active > a, .sidebar-nav-wrapper .sidebar-nav ul .nav-item.active > a.collapsed, .sidebar-nav-wrapper .sidebar-nav ul .nav-item:hover > a, .sidebar-nav-wrapper .sidebar-nav ul .nav-item:hover > a.collapsed {
          color: #1A2142;
        }
        .sidebar-nav-wrapper .sidebar-nav ul .nav-item.active > a .icon, .sidebar-nav-wrapper .sidebar-nav ul .nav-item.active > a.collapsed .icon, .sidebar-nav-wrapper .sidebar-nav ul .nav-item:hover > a .icon, .sidebar-nav-wrapper .sidebar-nav ul .nav-item:hover > a.collapsed .icon {
          color: #9f23c2;
        }

        .sidebar-nav-wrapper.style-2 .sidebar-nav ul .nav-item.nav-item-has-children ul li a.active, .sidebar-nav-wrapper.style-2 .sidebar-nav ul .nav-item.nav-item-has-children ul li a:hover {
          color: #fff;
          border-color: #9f23c2;
          background: #9f23c2;
        }
        .sidebar-nav-wrapper.style-2 .sidebar-nav ul .nav-item.nav-item-has-children ul li a.active span.pro-badge, .sidebar-nav-wrapper.style-2 .sidebar-nav ul .nav-item.nav-item-has-children ul li a:hover span.pro-badge {
          background: #fff;
          color: #9f23c2;
        }

        .overlay {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.3);
          z-index: 11;
          -webkit-transform: translateX(-100%);
          -moz-transform: translateX(-100%);
          -ms-transform: translateX(-100%);
          -o-transform: translateX(-100%);
          transform: translateX(-100%);
          opacity: 0;
          visibility: hidden;
        }
        @media only screen and (min-width: 1400px), only screen and (min-width: 1200px) and (max-width: 1399px) {
          .overlay {
            display: none;
          }
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
          .overlay.active {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
          }
        }

        .main-wrapper {
          -webkit-transition: all 0.3s ease-out 0s;
          -moz-transition: all 0.3s ease-out 0s;
          -ms-transition: all 0.3s ease-out 0s;
          -o-transition: all 0.3s ease-out 0s;
          transition: all 0.3s ease-out 0s;
          margin-left: 250px;
          min-height: 100vh;
          padding-bottom: 85px;
          position: relative;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
          .main-wrapper {
            margin-left: 0;
          }
        }
        @media (max-width: 767px) {
          .main-wrapper {
            padding-bottom: 110px;
          }
        }
        .main-wrapper.active {
          margin-left: 0;
        }
        .main-wrapper .container-fluid {
          padding-left: 40px;
          padding-right: 40px;
        }
        @media (max-width: 767px) {
          .main-wrapper .container-fluid {
            padding-left: 20px;
            padding-right: 20px;
          }
        }
        .main-wrapper .footer {
          padding: 25px 0;
          justify-items: flex-end;
          position: absolute;
          bottom: 0;
          width: 100%;
        }
        .main-wrapper .footer .copyright p a {
          color: inherit;
        }
        .main-wrapper .footer .copyright p a:hover {
          color: #9f23c2;
        }
        @media (max-width: 767px) {
          .main-wrapper .footer .terms {
            margin-bottom: 10px;
            text-align: center;
          }
        }
        .main-wrapper .footer .terms a {
          color: #5d657b;
        }
        .main-wrapper .footer .terms a:hover {
          color: #9f23c2;
        }

        .promo-box {
          background: #F5F8FC;
          padding: 15px 18px;
          text-align: center;
          max-width: 210px;
          margin: 0 auto;
          margin-top: 200px;
          border-radius: 14px;
        }
        .promo-box .promo-icon {
          max-width: 82px;
          width: 100%;
          height: 82px;
          border-radius: 50%;
          margin: -58px auto 12px;
          border: 5px solid #fff;
        }
        .promo-box h3 {
          font-size: 14px;
          line-height: 22px;
          font-weight: 600;
          margin-bottom: 7px;
        }
        .promo-box p {
          font-size: 10px;
          font-weight: 500;
          line-height: 1.5;
          margin-bottom: 15px;
        }
        .promo-box .main-btn {
          border-radius: 43px;
          padding: 7px 12px;
          width: 100%;
          justify-content: center;
        }

        /* ========== DEFAULT CSS ======== */
        /* ======= Margin Top ======= */
        .mt-5 {
          margin-top: 5px;
        }

        .mt-10 {
          margin-top: 10px;
        }

        .mt-15 {
          margin-top: 15px;
        }

        .mt-20 {
          margin-top: 20px;
        }

        .mt-25 {
          margin-top: 25px;
        }

        .mt-30 {
          margin-top: 30px;
        }

        .mt-35 {
          margin-top: 35px;
        }

        .mt-40 {
          margin-top: 40px;
        }

        .mt-45 {
          margin-top: 45px;
        }

        .mt-50 {
          margin-top: 50px;
        }

        .mt-55 {
          margin-top: 55px;
        }

        .mt-60 {
          margin-top: 60px;
        }

        .mt-65 {
          margin-top: 65px;
        }

        .mt-70 {
          margin-top: 70px;
        }

        .mt-75 {
          margin-top: 75px;
        }

        .mt-80 {
          margin-top: 80px;
        }

        .mt-85 {
          margin-top: 85px;
        }

        .mt-90 {
          margin-top: 90px;
        }

        .mt-95 {
          margin-top: 95px;
        }

        .mt-100 {
          margin-top: 100px;
        }

        .mt-105 {
          margin-top: 105px;
        }

        .mt-110 {
          margin-top: 110px;
        }

        .mt-115 {
          margin-top: 115px;
        }

        .mt-120 {
          margin-top: 120px;
        }

        .mt-125 {
          margin-top: 125px;
        }

        .mt-130 {
          margin-top: 130px;
        }

        .mt-135 {
          margin-top: 135px;
        }

        .mt-140 {
          margin-top: 140px;
        }

        .mt-145 {
          margin-top: 145px;
        }

        .mt-150 {
          margin-top: 150px;
        }

        .mt-155 {
          margin-top: 155px;
        }

        .mt-160 {
          margin-top: 160px;
        }

        .mt-165 {
          margin-top: 165px;
        }

        .mt-170 {
          margin-top: 170px;
        }

        .mt-175 {
          margin-top: 175px;
        }

        .mt-180 {
          margin-top: 180px;
        }

        .mt-185 {
          margin-top: 185px;
        }

        .mt-190 {
          margin-top: 190px;
        }

        .mt-195 {
          margin-top: 195px;
        }

        .mt-200 {
          margin-top: 200px;
        }

        .mt-205 {
          margin-top: 205px;
        }

        .mt-210 {
          margin-top: 210px;
        }

        .mt-215 {
          margin-top: 215px;
        }

        .mt-220 {
          margin-top: 220px;
        }

        .mt-225 {
          margin-top: 225px;
        }

        /* ======= Margin Bottom ======= */
        .mb-5 {
          margin-bottom: 5px;
        }

        .mb-10 {
          margin-bottom: 10px;
        }

        .mb-15 {
          margin-bottom: 15px;
        }

        .mb-20 {
          margin-bottom: 20px;
        }

        .mb-25 {
          margin-bottom: 25px;
        }

        .mb-30 {
          margin-bottom: 30px;
        }

        .mb-35 {
          margin-bottom: 35px;
        }

        .mb-40 {
          margin-bottom: 40px;
        }

        .mb-45 {
          margin-bottom: 45px;
        }

        .mb-50 {
          margin-bottom: 50px;
        }

        .mb-55 {
          margin-bottom: 55px;
        }

        .mb-60 {
          margin-bottom: 60px;
        }

        .mb-65 {
          margin-bottom: 65px;
        }

        .mb-70 {
          margin-bottom: 70px;
        }

        .mb-75 {
          margin-bottom: 75px;
        }

        .mb-80 {
          margin-bottom: 80px;
        }

        .mb-85 {
          margin-bottom: 85px;
        }

        .mb-90 {
          margin-bottom: 90px;
        }

        .mb-95 {
          margin-bottom: 95px;
        }

        .mb-100 {
          margin-bottom: 100px;
        }

        .mb-105 {
          margin-bottom: 105px;
        }

        .mb-110 {
          margin-bottom: 110px;
        }

        .mb-115 {
          margin-bottom: 115px;
        }

        .mb-120 {
          margin-bottom: 120px;
        }

        .mb-125 {
          margin-bottom: 125px;
        }

        .mb-130 {
          margin-bottom: 130px;
        }

        .mb-135 {
          margin-bottom: 135px;
        }

        .mb-140 {
          margin-bottom: 140px;
        }

        .mb-145 {
          margin-bottom: 145px;
        }

        .mb-150 {
          margin-bottom: 150px;
        }

        .mb-155 {
          margin-bottom: 155px;
        }

        .mb-160 {
          margin-bottom: 160px;
        }

        .mb-165 {
          margin-bottom: 165px;
        }

        .mb-170 {
          margin-bottom: 170px;
        }

        .mb-175 {
          margin-bottom: 175px;
        }

        .mb-180 {
          margin-bottom: 180px;
        }

        .mb-185 {
          margin-bottom: 185px;
        }

        .mb-190 {
          margin-bottom: 190px;
        }

        .mb-195 {
          margin-bottom: 195px;
        }

        .mb-200 {
          margin-bottom: 200px;
        }

        .mb-205 {
          margin-bottom: 205px;
        }

        .mb-210 {
          margin-bottom: 210px;
        }

        .mb-215 {
          margin-bottom: 215px;
        }

        .mb-220 {
          margin-bottom: 220px;
        }

        .mb-225 {
          margin-bottom: 225px;
        }

        /* ======= Margin Left ======= */
        .ml-5 {
          margin-left: 5px;
        }

        .ml-10 {
          margin-left: 10px;
        }

        .ml-15 {
          margin-left: 15px;
        }

        .ml-20 {
          margin-left: 20px;
        }

        .ml-25 {
          margin-left: 25px;
        }

        .ml-30 {
          margin-left: 30px;
        }

        .ml-35 {
          margin-left: 35px;
        }

        .ml-40 {
          margin-left: 40px;
        }

        .ml-45 {
          margin-left: 45px;
        }

        .ml-50 {
          margin-left: 50px;
        }

        .ml-55 {
          margin-left: 55px;
        }

        .ml-60 {
          margin-left: 60px;
        }

        .ml-65 {
          margin-left: 65px;
        }

        .ml-70 {
          margin-left: 70px;
        }

        .ml-75 {
          margin-left: 75px;
        }

        .ml-80 {
          margin-left: 80px;
        }

        .ml-85 {
          margin-left: 85px;
        }

        .ml-90 {
          margin-left: 90px;
        }

        .ml-95 {
          margin-left: 95px;
        }

        .ml-100 {
          margin-left: 100px;
        }

        .ml-105 {
          margin-left: 105px;
        }

        .ml-110 {
          margin-left: 110px;
        }

        .ml-115 {
          margin-left: 115px;
        }

        .ml-120 {
          margin-left: 120px;
        }

        .ml-125 {
          margin-left: 125px;
        }

        .ml-130 {
          margin-left: 130px;
        }

        .ml-135 {
          margin-left: 135px;
        }

        .ml-140 {
          margin-left: 140px;
        }

        .ml-145 {
          margin-left: 145px;
        }

        .ml-150 {
          margin-left: 150px;
        }

        .ml-155 {
          margin-left: 155px;
        }

        .ml-160 {
          margin-left: 160px;
        }

        .ml-165 {
          margin-left: 165px;
        }

        .ml-170 {
          margin-left: 170px;
        }

        .ml-175 {
          margin-left: 175px;
        }

        .ml-180 {
          margin-left: 180px;
        }

        .ml-185 {
          margin-left: 185px;
        }

        .ml-190 {
          margin-left: 190px;
        }

        .ml-195 {
          margin-left: 195px;
        }

        .ml-200 {
          margin-left: 200px;
        }

        .ml-205 {
          margin-left: 205px;
        }

        .ml-210 {
          margin-left: 210px;
        }

        .ml-215 {
          margin-left: 215px;
        }

        .ml-220 {
          margin-left: 220px;
        }

        .ml-225 {
          margin-left: 225px;
        }

        /* ======= Margin Right ======= */
        .mr-5 {
          margin-right: 5px;
        }

        .mr-10 {
          margin-right: 10px;
        }

        .mr-15 {
          margin-right: 15px;
        }

        .mr-20 {
          margin-right: 20px;
        }

        .mr-25 {
          margin-right: 25px;
        }

        .mr-30 {
          margin-right: 30px;
        }

        .mr-35 {
          margin-right: 35px;
        }

        .mr-40 {
          margin-right: 40px;
        }

        .mr-45 {
          margin-right: 45px;
        }

        .mr-50 {
          margin-right: 50px;
        }

        .mr-55 {
          margin-right: 55px;
        }

        .mr-60 {
          margin-right: 60px;
        }

        .mr-65 {
          margin-right: 65px;
        }

        .mr-70 {
          margin-right: 70px;
        }

        .mr-75 {
          margin-right: 75px;
        }

        .mr-80 {
          margin-right: 80px;
        }

        .mr-85 {
          margin-right: 85px;
        }

        .mr-90 {
          margin-right: 90px;
        }

        .mr-95 {
          margin-right: 95px;
        }

        .mr-100 {
          margin-right: 100px;
        }

        .mr-105 {
          margin-right: 105px;
        }

        .mr-110 {
          margin-right: 110px;
        }

        .mr-115 {
          margin-right: 115px;
        }

        .mr-120 {
          margin-right: 120px;
        }

        .mr-125 {
          margin-right: 125px;
        }

        .mr-130 {
          margin-right: 130px;
        }

        .mr-135 {
          margin-right: 135px;
        }

        .mr-140 {
          margin-right: 140px;
        }

        .mr-145 {
          margin-right: 145px;
        }

        .mr-150 {
          margin-right: 150px;
        }

        .mr-155 {
          margin-right: 155px;
        }

        .mr-160 {
          margin-right: 160px;
        }

        .mr-165 {
          margin-right: 165px;
        }

        .mr-170 {
          margin-right: 170px;
        }

        .mr-175 {
          margin-right: 175px;
        }

        .mr-180 {
          margin-right: 180px;
        }

        .mr-185 {
          margin-right: 185px;
        }

        .mr-190 {
          margin-right: 190px;
        }

        .mr-195 {
          margin-right: 195px;
        }

        .mr-200 {
          margin-right: 200px;
        }

        .mr-205 {
          margin-right: 205px;
        }

        .mr-210 {
          margin-right: 210px;
        }

        .mr-215 {
          margin-right: 215px;
        }

        .mr-220 {
          margin-right: 220px;
        }

        .mr-225 {
          margin-right: 225px;
        }

        /* ======= Padding Top ======= */
        .pt-5 {
          padding-top: 5px;
        }

        .pt-10 {
          padding-top: 10px;
        }

        .pt-15 {
          padding-top: 15px;
        }

        .pt-20 {
          padding-top: 20px;
        }

        .pt-25 {
          padding-top: 25px;
        }

        .pt-30 {
          padding-top: 30px;
        }

        .pt-35 {
          padding-top: 35px;
        }

        .pt-40 {
          padding-top: 40px;
        }

        .pt-45 {
          padding-top: 45px;
        }

        .pt-50 {
          padding-top: 50px;
        }

        .pt-55 {
          padding-top: 55px;
        }

        .pt-60 {
          padding-top: 60px;
        }

        .pt-65 {
          padding-top: 65px;
        }

        .pt-70 {
          padding-top: 70px;
        }

        .pt-75 {
          padding-top: 75px;
        }

        .pt-80 {
          padding-top: 80px;
        }

        .pt-85 {
          padding-top: 85px;
        }

        .pt-90 {
          padding-top: 90px;
        }

        .pt-95 {
          padding-top: 95px;
        }

        .pt-100 {
          padding-top: 100px;
        }

        .pt-105 {
          padding-top: 105px;
        }

        .pt-110 {
          padding-top: 110px;
        }

        .pt-115 {
          padding-top: 115px;
        }

        .pt-120 {
          padding-top: 120px;
        }

        .pt-125 {
          padding-top: 125px;
        }

        .pt-130 {
          padding-top: 130px;
        }

        .pt-135 {
          padding-top: 135px;
        }

        .pt-140 {
          padding-top: 140px;
        }

        .pt-145 {
          padding-top: 145px;
        }

        .pt-150 {
          padding-top: 150px;
        }

        .pt-155 {
          padding-top: 155px;
        }

        .pt-160 {
          padding-top: 160px;
        }

        .pt-165 {
          padding-top: 165px;
        }

        .pt-170 {
          padding-top: 170px;
        }

        .pt-175 {
          padding-top: 175px;
        }

        .pt-180 {
          padding-top: 180px;
        }

        .pt-185 {
          padding-top: 185px;
        }

        .pt-190 {
          padding-top: 190px;
        }

        .pt-195 {
          padding-top: 195px;
        }

        .pt-200 {
          padding-top: 200px;
        }

        .pt-205 {
          padding-top: 205px;
        }

        .pt-210 {
          padding-top: 210px;
        }

        .pt-215 {
          padding-top: 215px;
        }

        .pt-220 {
          padding-top: 220px;
        }

        .pt-225 {
          padding-top: 225px;
        }

        /* ======= Padding Bottom ======= */
        .pb-5 {
          padding-bottom: 5px;
        }

        .pb-10 {
          padding-bottom: 10px;
        }

        .pb-15 {
          padding-bottom: 15px;
        }

        .pb-20 {
          padding-bottom: 20px;
        }

        .pb-25 {
          padding-bottom: 25px;
        }

        .pb-30 {
          padding-bottom: 30px;
        }

        .pb-35 {
          padding-bottom: 35px;
        }

        .pb-40 {
          padding-bottom: 40px;
        }

        .pb-45 {
          padding-bottom: 45px;
        }

        .pb-50 {
          padding-bottom: 50px;
        }

        .pb-55 {
          padding-bottom: 55px;
        }

        .pb-60 {
          padding-bottom: 60px;
        }

        .pb-65 {
          padding-bottom: 65px;
        }

        .pb-70 {
          padding-bottom: 70px;
        }

        .pb-75 {
          padding-bottom: 75px;
        }

        .pb-80 {
          padding-bottom: 80px;
        }

        .pb-85 {
          padding-bottom: 85px;
        }

        .pb-90 {
          padding-bottom: 90px;
        }

        .pb-95 {
          padding-bottom: 95px;
        }

        .pb-100 {
          padding-bottom: 100px;
        }

        .pb-105 {
          padding-bottom: 105px;
        }

        .pb-110 {
          padding-bottom: 110px;
        }

        .pb-115 {
          padding-bottom: 115px;
        }

        .pb-120 {
          padding-bottom: 120px;
        }

        .pb-125 {
          padding-bottom: 125px;
        }

        .pb-130 {
          padding-bottom: 130px;
        }

        .pb-135 {
          padding-bottom: 135px;
        }

        .pb-140 {
          padding-bottom: 140px;
        }

        .pb-145 {
          padding-bottom: 145px;
        }

        .pb-150 {
          padding-bottom: 150px;
        }

        .pb-155 {
          padding-bottom: 155px;
        }

        .pb-160 {
          padding-bottom: 160px;
        }

        .pb-165 {
          padding-bottom: 165px;
        }

        .pb-170 {
          padding-bottom: 170px;
        }

        .pb-175 {
          padding-bottom: 175px;
        }

        .pb-180 {
          padding-bottom: 180px;
        }

        .pb-185 {
          padding-bottom: 185px;
        }

        .pb-190 {
          padding-bottom: 190px;
        }

        .pb-195 {
          padding-bottom: 195px;
        }

        .pb-200 {
          padding-bottom: 200px;
        }

        .pb-205 {
          padding-bottom: 205px;
        }

        .pb-210 {
          padding-bottom: 210px;
        }

        .pb-215 {
          padding-bottom: 215px;
        }

        .pb-220 {
          padding-bottom: 220px;
        }

        .pb-225 {
          padding-bottom: 225px;
        }

        /* ======= Padding Left ======= */
        .pl-5 {
          padding-left: 5px;
        }

        .pl-10 {
          padding-left: 10px;
        }

        .pl-15 {
          padding-left: 15px;
        }

        .pl-20 {
          padding-left: 20px;
        }

        .pl-25 {
          padding-left: 25px;
        }

        .pl-30 {
          padding-left: 30px;
        }

        .pl-35 {
          padding-left: 35px;
        }

        .pl-40 {
          padding-left: 40px;
        }

        .pl-45 {
          padding-left: 45px;
        }

        .pl-50 {
          padding-left: 50px;
        }

        .pl-55 {
          padding-left: 55px;
        }

        .pl-60 {
          padding-left: 60px;
        }

        .pl-65 {
          padding-left: 65px;
        }

        .pl-70 {
          padding-left: 70px;
        }

        .pl-75 {
          padding-left: 75px;
        }

        .pl-80 {
          padding-left: 80px;
        }

        .pl-85 {
          padding-left: 85px;
        }

        .pl-90 {
          padding-left: 90px;
        }

        .pl-95 {
          padding-left: 95px;
        }

        .pl-100 {
          padding-left: 100px;
        }

        .pl-105 {
          padding-left: 105px;
        }

        .pl-110 {
          padding-left: 110px;
        }

        .pl-115 {
          padding-left: 115px;
        }

        .pl-120 {
          padding-left: 120px;
        }

        .pl-125 {
          padding-left: 125px;
        }

        .pl-130 {
          padding-left: 130px;
        }

        .pl-135 {
          padding-left: 135px;
        }

        .pl-140 {
          padding-left: 140px;
        }

        .pl-145 {
          padding-left: 145px;
        }

        .pl-150 {
          padding-left: 150px;
        }

        .pl-155 {
          padding-left: 155px;
        }

        .pl-160 {
          padding-left: 160px;
        }

        .pl-165 {
          padding-left: 165px;
        }

        .pl-170 {
          padding-left: 170px;
        }

        .pl-175 {
          padding-left: 175px;
        }

        .pl-180 {
          padding-left: 180px;
        }

        .pl-185 {
          padding-left: 185px;
        }

        .pl-190 {
          padding-left: 190px;
        }

        .pl-195 {
          padding-left: 195px;
        }

        .pl-200 {
          padding-left: 200px;
        }

        .pl-205 {
          padding-left: 205px;
        }

        .pl-210 {
          padding-left: 210px;
        }

        .pl-215 {
          padding-left: 215px;
        }

        .pl-220 {
          padding-left: 220px;
        }

        .pl-225 {
          padding-left: 225px;
        }

        /* ======= Padding Right ======= */
        .pr-5 {
          padding-right: 5px;
        }

        .pr-10 {
          padding-right: 10px;
        }

        .pr-15 {
          padding-right: 15px;
        }

        .pr-20 {
          padding-right: 20px;
        }

        .pr-25 {
          padding-right: 25px;
        }

        .pr-30 {
          padding-right: 30px;
        }

        .pr-35 {
          padding-right: 35px;
        }

        .pr-40 {
          padding-right: 40px;
        }

        .pr-45 {
          padding-right: 45px;
        }

        .pr-50 {
          padding-right: 50px;
        }

        .pr-55 {
          padding-right: 55px;
        }

        .pr-60 {
          padding-right: 60px;
        }

        .pr-65 {
          padding-right: 65px;
        }

        .pr-70 {
          padding-right: 70px;
        }

        .pr-75 {
          padding-right: 75px;
        }

        .pr-80 {
          padding-right: 80px;
        }

        .pr-85 {
          padding-right: 85px;
        }

        .pr-90 {
          padding-right: 90px;
        }

        .pr-95 {
          padding-right: 95px;
        }

        .pr-100 {
          padding-right: 100px;
        }

        .pr-105 {
          padding-right: 105px;
        }

        .pr-110 {
          padding-right: 110px;
        }

        .pr-115 {
          padding-right: 115px;
        }

        .pr-120 {
          padding-right: 120px;
        }

        .pr-125 {
          padding-right: 125px;
        }

        .pr-130 {
          padding-right: 130px;
        }

        .pr-135 {
          padding-right: 135px;
        }

        .pr-140 {
          padding-right: 140px;
        }

        .pr-145 {
          padding-right: 145px;
        }

        .pr-150 {
          padding-right: 150px;
        }

        .pr-155 {
          padding-right: 155px;
        }

        .pr-160 {
          padding-right: 160px;
        }

        .pr-165 {
          padding-right: 165px;
        }

        .pr-170 {
          padding-right: 170px;
        }

        .pr-175 {
          padding-right: 175px;
        }

        .pr-180 {
          padding-right: 180px;
        }

        .pr-185 {
          padding-right: 185px;
        }

        .pr-190 {
          padding-right: 190px;
        }

        .pr-195 {
          padding-right: 195px;
        }

        .pr-200 {
          padding-right: 200px;
        }

        .pr-205 {
          padding-right: 205px;
        }

        .pr-210 {
          padding-right: 210px;
        }

        .pr-215 {
          padding-right: 215px;
        }

        .pr-220 {
          padding-right: 220px;
        }

        .pr-225 {
          padding-right: 225px;
        }

        /* ======= bg-primary shades ========= */
        .bg-primary-100 {
          background: rgba(54, 92, 245, 0.1);
        }

        .bg-primary-200 {
          background: rgba(54, 92, 245, 0.2);
        }

        .bg-primary-300 {
          background: rgba(54, 92, 245, 0.3);
        }

        .bg-primary-400 {
          background: rgba(54, 92, 245, 0.4);
        }

        .bg-primary-500 {
          background: rgba(54, 92, 245, 0.5);
        }

        .bg-primary-600 {
          background: rgba(54, 92, 245, 0.6);
        }

        .bg-primary-700 {
          background: rgba(54, 92, 245, 0.7);
        }

        .bg-primary-800 {
          background: rgba(54, 92, 245, 0.8);
        }

        .bg-primary-900 {
          background: rgba(54, 92, 245, 0.9);
        }

        /* ======= bg-secondary shades ========= */
        .bg-secondary-100 {
          background: rgba(0, 193, 248, 0.1);
        }

        .bg-secondary-200 {
          background: rgba(0, 193, 248, 0.2);
        }

        .bg-secondary-300 {
          background: rgba(0, 193, 248, 0.3);
        }

        .bg-secondary-400 {
          background: rgba(0, 193, 248, 0.4);
        }

        .bg-secondary-500 {
          background: rgba(0, 193, 248, 0.5);
        }

        .bg-secondary-600 {
          background: rgba(0, 193, 248, 0.6);
        }

        .bg-secondary-700 {
          background: rgba(0, 193, 248, 0.7);
        }

        .bg-secondary-800 {
          background: rgba(0, 193, 248, 0.8);
        }

        .bg-secondary-900 {
          background: rgba(0, 193, 248, 0.9);
        }

        /* ======= bg-success shades ========= */
        .bg-success-100 {
          background: rgba(33, 150, 83, 0.1);
        }

        .bg-success-200 {
          background: rgba(33, 150, 83, 0.2);
        }

        .bg-success-300 {
          background: rgba(33, 150, 83, 0.3);
        }

        .bg-success-400 {
          background: rgba(33, 150, 83, 0.4);
        }

        .bg-success-500 {
          background: rgba(33, 150, 83, 0.5);
        }

        .bg-success-600 {
          background: rgba(33, 150, 83, 0.6);
        }

        .bg-success-700 {
          background: rgba(33, 150, 83, 0.7);
        }

        .bg-success-800 {
          background: rgba(33, 150, 83, 0.8);
        }

        .bg-success-900 {
          background: rgba(33, 150, 83, 0.9);
        }

        /* ======= bg-danger shades ========= */
        .bg-danger-100 {
          background: rgba(213, 1, 0, 0.1);
        }

        .bg-danger-200 {
          background: rgba(213, 1, 0, 0.2);
        }

        .bg-danger-300 {
          background: rgba(213, 1, 0, 0.3);
        }

        .bg-danger-400 {
          background: rgba(213, 1, 0, 0.4);
        }

        .bg-danger-500 {
          background: rgba(213, 1, 0, 0.5);
        }

        .bg-danger-600 {
          background: rgba(213, 1, 0, 0.6);
        }

        .bg-danger-700 {
          background: rgba(213, 1, 0, 0.7);
        }

        .bg-danger-800 {
          background: rgba(213, 1, 0, 0.8);
        }

        .bg-danger-900 {
          background: rgba(213, 1, 0, 0.9);
        }

        /* ======= bg-warning shades ========= */
        .bg-warning-100 {
          background: rgba(247, 200, 0, 0.1);
        }

        .bg-warning-200 {
          background: rgba(247, 200, 0, 0.2);
        }

        .bg-warning-300 {
          background: rgba(247, 200, 0, 0.3);
        }

        .bg-warning-400 {
          background: rgba(247, 200, 0, 0.4);
        }

        .bg-warning-500 {
          background: rgba(247, 200, 0, 0.5);
        }

        .bg-warning-600 {
          background: rgba(247, 200, 0, 0.6);
        }

        .bg-warning-700 {
          background: rgba(247, 200, 0, 0.7);
        }

        .bg-warning-800 {
          background: rgba(247, 200, 0, 0.8);
        }

        .bg-warning-900 {
          background: rgba(247, 200, 0, 0.9);
        }

        /* ======= bg-info shades ========= */
        .bg-info-100 {
          background: rgba(151, 202, 49, 0.1);
        }

        .bg-info-200 {
          background: rgba(151, 202, 49, 0.2);
        }

        .bg-info-300 {
          background: rgba(151, 202, 49, 0.3);
        }

        .bg-info-400 {
          background: rgba(151, 202, 49, 0.4);
        }

        .bg-info-500 {
          background: rgba(151, 202, 49, 0.5);
        }

        .bg-info-600 {
          background: rgba(151, 202, 49, 0.6);
        }

        .bg-info-700 {
          background: rgba(151, 202, 49, 0.7);
        }

        .bg-info-800 {
          background: rgba(151, 202, 49, 0.8);
        }

        .bg-info-900 {
          background: rgba(151, 202, 49, 0.9);
        }

        /* ======= bg-dark shades ========= */
        .bg-dark-100 {
          background: rgba(26, 33, 66, 0.1);
        }

        .bg-dark-200 {
          background: rgba(26, 33, 66, 0.2);
        }

        .bg-dark-300 {
          background: rgba(26, 33, 66, 0.3);
        }

        .bg-dark-400 {
          background: rgba(26, 33, 66, 0.4);
        }

        .bg-dark-500 {
          background: rgba(26, 33, 66, 0.5);
        }

        .bg-dark-600 {
          background: rgba(26, 33, 66, 0.6);
        }

        .bg-dark-700 {
          background: rgba(26, 33, 66, 0.7);
        }

        .bg-dark-800 {
          background: rgba(26, 33, 66, 0.8);
        }

        .bg-dark-900 {
          background: rgba(26, 33, 66, 0.9);
        }

        /* ======= bg-purple shades ========= */
        .bg-purple-100 {
          background: rgba(155, 81, 224, 0.1);
        }

        .bg-purple-200 {
          background: rgba(155, 81, 224, 0.2);
        }

        .bg-purple-300 {
          background: rgba(155, 81, 224, 0.3);
        }

        .bg-purple-400 {
          background: rgba(155, 81, 224, 0.4);
        }

        .bg-purple-500 {
          background: rgba(155, 81, 224, 0.5);
        }

        .bg-purple-600 {
          background: rgba(155, 81, 224, 0.6);
        }

        .bg-purple-700 {
          background: rgba(155, 81, 224, 0.7);
        }

        .bg-purple-800 {
          background: rgba(155, 81, 224, 0.8);
        }

        .bg-purple-900 {
          background: rgba(155, 81, 224, 0.9);
        }

        /* ======= bg-orange shades ========= */
        .bg-orange-100 {
          background: rgba(242, 153, 74, 0.1);
        }

        .bg-orange-200 {
          background: rgba(242, 153, 74, 0.2);
        }

        .bg-orange-300 {
          background: rgba(242, 153, 74, 0.3);
        }

        .bg-orange-400 {
          background: rgba(242, 153, 74, 0.4);
        }

        .bg-orange-500 {
          background: rgba(242, 153, 74, 0.5);
        }

        .bg-orange-600 {
          background: rgba(242, 153, 74, 0.6);
        }

        .bg-orange-700 {
          background: rgba(242, 153, 74, 0.7);
        }

        .bg-orange-800 {
          background: rgba(242, 153, 74, 0.8);
        }

        .bg-orange-900 {
          background: rgba(242, 153, 74, 0.9);
        }

        /* ======== Background Colors ========== */
        .primary-bg {
          background-color: #9f23c2;
        }

        .secondary-bg {
          background-color: #00c1f8;
        }

        .success-bg {
          background-color: #219653;
        }

        .danger-bg {
          background-color: #d50100;
        }

        .warning-bg {
          background-color: #f7c800;
        }

        .info-bg {
          background-color: #97ca31;
        }

        .dark-bg {
          background-color: #1A2142;
        }

        .light-bg {
          background-color: #efefef;
        }

        .blue-light-bg {
          background-color: #49BEFF;
        }

        .active-bg {
          background-color: #9f23c2;
        }

        .deactive-bg {
          background-color: #E9E9E9;
        }

        .deactive-bg {
          background-color: #E9E9E9;
        }

        .gray-bg {
          background-color: #5d657b;
        }

        .purple-bg {
          background-color: #9b51e0;
        }

        .orange-bg {
          background-color: #f2994a;
        }

        .deep-blue-bg {
          background-color: #345d9d;
        }

        .doc-bg {
          background-color: #f98db4;
        }

        .photo-bg {
          background-color: #93cfe2;
        }

        /* ======== Text Colors ========== */
        .text-primary {
          color: #9f23c2 !important;
        }

        .text-secondary {
          color: #00c1f8 !important;
        }

        .text-success {
          color: #219653 !important;
        }

        .text-success-2 {
          color: #10B981 !important;
        }

        .text-danger {
          color: #d50100 !important;
        }

        .text-danger-2 {
          color: #FB5454 !important;
        }

        .text-danger-light {
          color: #fa5a78 !important;
        }

        .text-warning {
          color: #f7c800 !important;
        }

        .text-info {
          color: #97ca31 !important;
        }

        .text-dark {
          color: #1A2142 !important;
        }

        .text-light {
          color: #efefef !important;
        }

        .text-active {
          color: #9f23c2 !important;
        }

        .text-deactive {
          color: #E9E9E9 !important;
        }

        .text-deactive {
          color: #E9E9E9 !important;
        }

        .text-gray {
          color: #5d657b !important;
        }

        .text-orange {
          color: #f2994a !important;
        }

        .text-purple {
          color: #9b51e0 !important;
        }

        .text-doc {
          color: #f98db4 !important;
        }

        .text-photo {
          color: #93cfe2 !important;
        }

        /* ========= Font Weight =========== */
        .fw-300 {
          font-weight: 300;
        }

        .fw-400 {
          font-weight: 400;
        }

        .fw-500 {
          font-weight: 500;
        }

        .fw-600 {
          font-weight: 600;
        }

        .fw-700 {
          font-weight: 700;
        }

        .fw-800 {
          font-weight: 800;
        }

        .fw-900 {
          font-weight: 900;
        }

        /* =========== Sidebar css =========== */
        #preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          background: #fff;
          z-index: 999999;
        }
        #preloader .spinner {
          width: 80px;
          height: 80px;
          border: 5px solid #9f23c2;
          border-top-color: transparent;
          border-radius: 50%;
          animation: spinner 0.9s linear infinite;
        }

        @keyframes spinner {
          from {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
          }
          to {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
    </style>

    <style>
      .fc-icon,.fc-unselectable{-moz-user-select:none;-ms-user-select:none}.fc .fc-button,.fc-icon{text-transform:none;font-weight:400}.fc-not-allowed,.fc-not-allowed .fc-event{cursor:not-allowed}.fc .fc-button:not(:disabled),.fc a[data-navlink],.fc-event.fc-event-draggable,.fc-event[href]{cursor:pointer}.fc-unselectable{-webkit-user-select:none;user-select:none;-webkit-touch-callout:none;-webkit-tap-highlight-color:transparent}.fc{display:flex;flex-direction:column;font-size:1em}.fc .fc-button,.fc-icon{display:inline-block;text-align:center}.fc,.fc *,.fc :after,.fc :before{box-sizing:border-box}.fc table{border-collapse:collapse;border-spacing:0;font-size:1em}.fc th{text-align:center}.fc td,.fc th{vertical-align:top;padding:0}.fc .fc-button,.fc .fc-button .fc-icon,.fc .fc-button-group,.fc .fc-timegrid-slot-label{vertical-align:middle}.fc a[data-navlink]:hover{text-decoration:underline}.fc .fc-button:hover,.fc .fc-list-event-title a,a.fc-event,a.fc-event:hover{text-decoration:none}.fc-direction-ltr{direction:ltr;text-align:left}.fc-direction-rtl{direction:rtl;text-align:right}.fc-theme-standard td,.fc-theme-standard th{border:1px solid #ddd;border:1px solid var(--fc-border-color,#ddd)}.fc-liquid-hack td,.fc-liquid-hack th{position:relative}@font-face{font-family:fcicons;src:url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBfAAAAC8AAAAYGNtYXAXVtKNAAABHAAAAFRnYXNwAAAAEAAAAXAAAAAIZ2x5ZgYydxIAAAF4AAAFNGhlYWQUJ7cIAAAGrAAAADZoaGVhB20DzAAABuQAAAAkaG10eCIABhQAAAcIAAAALGxvY2ED4AU6AAAHNAAAABhtYXhwAA8AjAAAB0wAAAAgbmFtZXsr690AAAdsAAABhnBvc3QAAwAAAAAI9AAAACAAAwPAAZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpBgPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAOAAAAAoACAACAAIAAQAg6Qb//f//AAAAAAAg6QD//f//AAH/4xcEAAMAAQAAAAAAAAAAAAAAAQAB//8ADwABAAAAAAAAAAAAAgAANzkBAAAAAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAWIAjQKeAskAEwAAJSc3NjQnJiIHAQYUFwEWMjc2NCcCnuLiDQ0MJAz/AA0NAQAMJAwNDcni4gwjDQwM/wANIwz/AA0NDCMNAAAAAQFiAI0CngLJABMAACUBNjQnASYiBwYUHwEHBhQXFjI3AZ4BAA0N/wAMJAwNDeLiDQ0MJAyNAQAMIw0BAAwMDSMM4uINIwwNDQAAAAIA4gC3Ax4CngATACcAACUnNzY0JyYiDwEGFB8BFjI3NjQnISc3NjQnJiIPAQYUHwEWMjc2NCcB87e3DQ0MIw3VDQ3VDSMMDQ0BK7e3DQ0MJAzVDQ3VDCQMDQ3zuLcMJAwNDdUNIwzWDAwNIwy4twwkDA0N1Q0jDNYMDA0jDAAAAgDiALcDHgKeABMAJwAAJTc2NC8BJiIHBhQfAQcGFBcWMjchNzY0LwEmIgcGFB8BBwYUFxYyNwJJ1Q0N1Q0jDA0Nt7cNDQwjDf7V1Q0N1QwkDA0Nt7cNDQwkDLfWDCMN1Q0NDCQMt7gMIw0MDNYMIw3VDQ0MJAy3uAwjDQwMAAADAFUAAAOrA1UAMwBoAHcAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMhMjY1NCYjISIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAAVYRGRkR/qoRGRkRA1UFBAUOCQkVDAsZDf2rDRkLDBUJCA4FBQUFBQUOCQgVDAsZDQJVDRkLDBUJCQ4FBAVVAgECBQMCBwQECAX9qwQJAwQHAwMFAQICAgIBBQMDBwQDCQQCVQUIBAQHAgMFAgEC/oAZEhEZGRESGQAAAAADAFUAAAOrA1UAMwBoAIkAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMzFRQWMzI2PQEzMjY1NCYrATU0JiMiBh0BIyIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAgBkSEhmAERkZEYAZEhIZgBEZGREDVQUEBQ4JCRUMCxkN/asNGQsMFQkIDgUFBQUFBQ4JCBUMCxkNAlUNGQsMFQkJDgUEBVUCAQIFAwIHBAQIBf2rBAkDBAcDAwUBAgICAgEFAwMHBAMJBAJVBQgEBAcCAwUCAQL+gIASGRkSgBkSERmAEhkZEoAZERIZAAABAOIAjQMeAskAIAAAExcHBhQXFjI/ARcWMjc2NC8BNzY0JyYiDwEnJiIHBhQX4uLiDQ0MJAzi4gwkDA0N4uINDQwkDOLiDCQMDQ0CjeLiDSMMDQ3h4Q0NDCMN4uIMIw0MDOLiDAwNIwwAAAABAAAAAQAAa5n0y18PPPUACwQAAAAAANivOVsAAAAA2K85WwAAAAADqwNVAAAACAACAAAAAAAAAAEAAAPA/8AAAAQAAAAAAAOrAAEAAAAAAAAAAAAAAAAAAAALBAAAAAAAAAAAAAAAAgAAAAQAAWIEAAFiBAAA4gQAAOIEAABVBAAAVQQAAOIAAAAAAAoAFAAeAEQAagCqAOoBngJkApoAAQAAAAsAigADAAAAAAACAAAAAAAAAAAAAAAAAAAAAAAAAA4ArgABAAAAAAABAAcAAAABAAAAAAACAAcAYAABAAAAAAADAAcANgABAAAAAAAEAAcAdQABAAAAAAAFAAsAFQABAAAAAAAGAAcASwABAAAAAAAKABoAigADAAEECQABAA4ABwADAAEECQACAA4AZwADAAEECQADAA4APQADAAEECQAEAA4AfAADAAEECQAFABYAIAADAAEECQAGAA4AUgADAAEECQAKADQApGZjaWNvbnMAZgBjAGkAYwBvAG4Ac1ZlcnNpb24gMS4wAFYAZQByAHMAaQBvAG4AIAAxAC4AMGZjaWNvbnMAZgBjAGkAYwBvAG4Ac2ZjaWNvbnMAZgBjAGkAYwBvAG4Ac1JlZ3VsYXIAUgBlAGcAdQBsAGEAcmZjaWNvbnMAZgBjAGkAYwBvAG4Ac0ZvbnQgZ2VuZXJhdGVkIGJ5IEljb01vb24uAEYAbwBuAHQAIABnAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4ALgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=") format('truetype');font-weight:400;font-style:normal}.fc-icon{width:1em;height:1em;-webkit-user-select:none;user-select:none;font-family:fcicons!important;speak:none;font-style:normal;font-variant:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fc-icon-chevron-left:before{content:"\e900"}.fc-icon-chevron-right:before{content:"\e901"}.fc-icon-chevrons-left:before{content:"\e902"}.fc-icon-chevrons-right:before{content:"\e903"}.fc-icon-minus-square:before{content:"\e904"}.fc-icon-plus-square:before{content:"\e905"}.fc-icon-x:before{content:"\e906"}.fc .fc-button{overflow:visible;text-transform:none;margin:0;font-family:inherit}.fc .fc-button::-moz-focus-inner{padding:0;border-style:none}.fc .fc-button{-webkit-appearance:button;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.4em .65em;font-size:1em;line-height:1.5;border-radius:.25em}.fc .fc-button:focus{outline:0;box-shadow:0 0 0 .2rem rgba(44,62,80,.25)}.fc .fc-button-primary:focus,.fc .fc-button-primary:not(:disabled).fc-button-active:focus,.fc .fc-button-primary:not(:disabled):active:focus{box-shadow:0 0 0 .2rem rgba(76,91,106,.5)}.fc .fc-button:disabled{opacity:.65}.fc .fc-button-primary{color:#fff;color:var(--fc-button-text-color,#fff);background-color:#2C3E50;background-color:var(--fc-button-bg-color,#2C3E50);border-color:#2C3E50;border-color:var(--fc-button-border-color,#2C3E50)}.fc .fc-button-primary:hover{color:#fff;color:var(--fc-button-text-color,#fff);background-color:#1e2b37;background-color:var(--fc-button-hover-bg-color,#1e2b37);border-color:#1a252f;border-color:var(--fc-button-hover-border-color,#1a252f)}.fc .fc-button-primary:disabled{color:#fff;color:var(--fc-button-text-color,#fff);background-color:#2C3E50;background-color:var(--fc-button-bg-color,#2C3E50);border-color:#2C3E50;border-color:var(--fc-button-border-color,#2C3E50)}.fc .fc-button-primary:not(:disabled).fc-button-active,.fc .fc-button-primary:not(:disabled):active{color:#fff;color:var(--fc-button-text-color,#fff);background-color:#1a252f;background-color:var(--fc-button-active-bg-color,#1a252f);border-color:#151e27;border-color:var(--fc-button-active-border-color,#151e27)}.fc .fc-button .fc-icon{font-size:1.5em}.fc .fc-button-group{position:relative;display:inline-flex}.fc .fc-button-group>.fc-button{position:relative;flex:1 1 auto}.fc .fc-button-group>.fc-button.fc-button-active,.fc .fc-button-group>.fc-button:active,.fc .fc-button-group>.fc-button:focus,.fc .fc-button-group>.fc-button:hover{z-index:1}.fc-direction-ltr .fc-button-group>.fc-button:not(:first-child){margin-left:-1px;border-top-left-radius:0;border-bottom-left-radius:0}.fc-direction-ltr .fc-button-group>.fc-button:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.fc-direction-rtl .fc-button-group>.fc-button:not(:first-child){margin-right:-1px;border-top-right-radius:0;border-bottom-right-radius:0}.fc-direction-rtl .fc-button-group>.fc-button:not(:last-child){border-top-left-radius:0;border-bottom-left-radius:0}.fc .fc-toolbar{display:flex;justify-content:space-between;align-items:center}.fc .fc-toolbar.fc-header-toolbar{margin-bottom:1.5em}.fc .fc-toolbar.fc-footer-toolbar{margin-top:1.5em}.fc .fc-toolbar-title{font-size:1.75em;margin:0}.fc-direction-ltr .fc-toolbar>*>:not(:first-child){margin-left:.75em}.fc-direction-rtl .fc-toolbar>*>:not(:first-child){margin-right:.75em}.fc-direction-rtl .fc-toolbar-ltr{flex-direction:row-reverse}.fc .fc-scroller{-webkit-overflow-scrolling:touch;position:relative}.fc .fc-scroller-liquid{height:100%}.fc .fc-scroller-liquid-absolute{position:absolute;top:0;right:0;left:0;bottom:0}.fc .fc-scroller-harness{position:relative;overflow:hidden;direction:ltr}.fc .fc-scroller-harness-liquid{height:100%}.fc-direction-rtl .fc-scroller-harness>.fc-scroller{direction:rtl}.fc-theme-standard .fc-scrollgrid{border:1px solid #ddd;border:1px solid var(--fc-border-color,#ddd)}.fc .fc-scrollgrid,.fc .fc-scrollgrid-section-footer>*,.fc .fc-scrollgrid-section-header>*{border-bottom-width:0}.fc .fc-scrollgrid,.fc .fc-scrollgrid table{width:100%;table-layout:fixed}.fc .fc-scrollgrid table{border-top-style:hidden;border-left-style:hidden;border-right-style:hidden}.fc .fc-scrollgrid{border-collapse:separate;border-right-width:0}.fc .fc-scrollgrid-liquid{height:100%}.fc .fc-scrollgrid-section,.fc .fc-scrollgrid-section table,.fc .fc-scrollgrid-section>td{height:1px}.fc .fc-scrollgrid-section-liquid>td{height:100%}.fc .fc-scrollgrid-section>*{border-top-width:0;border-left-width:0}.fc .fc-scrollgrid-section-body table,.fc .fc-scrollgrid-section-footer table{border-bottom-style:hidden}.fc .fc-scrollgrid-section-sticky>*{background:var(--fc-page-bg-color,#fff);position:sticky;z-index:3}.fc .fc-scrollgrid-section-header.fc-scrollgrid-section-sticky>*{top:0}.fc .fc-scrollgrid-section-footer.fc-scrollgrid-section-sticky>*{bottom:0}.fc .fc-scrollgrid-sticky-shim{height:1px;margin-bottom:-1px}.fc-sticky{position:sticky}.fc .fc-view-harness{flex-grow:1;position:relative}.fc .fc-bg-event,.fc .fc-highlight,.fc .fc-non-business,.fc .fc-view-harness-active>.fc-view{position:absolute;top:0;left:0;right:0;bottom:0}.fc .fc-col-header-cell-cushion{display:inline-block;padding:2px 4px}.fc .fc-non-business{background:rgba(215,215,215,.3);background:var(--fc-non-business-color,rgba(215,215,215,.3))}.fc .fc-bg-event{background:var(--fc-bg-event-color,#8fdf82);opacity:.3;opacity:var(--fc-bg-event-opacity,.3)}.fc .fc-bg-event .fc-event-title{margin:.5em;font-size:.85em;font-size:var(--fc-small-font-size,.85em);font-style:italic}.fc .fc-highlight{background:rgba(188,232,241,.3);background:var(--fc-highlight-color,rgba(188,232,241,.3))}.fc .fc-cell-shaded,.fc .fc-day-disabled{background:rgba(208,208,208,.3);background:var(--fc-neutral-bg-color,rgba(208,208,208,.3))}.fc-event .fc-event-main{position:relative;z-index:2}.fc-event-dragging:not(.fc-event-selected){opacity:.75}.fc-event-dragging.fc-event-selected{box-shadow:0 2px 7px rgba(0,0,0,.3)}.fc-event .fc-event-resizer{display:none;position:absolute;z-index:4}.fc-event-selected .fc-event-resizer,.fc-event:hover .fc-event-resizer,.fc-h-event,.fc-v-event{display:block}.fc-event-selected .fc-event-resizer{border-radius:4px;border-radius:calc(var(--fc-event-resizer-dot-total-width,8px)/ 2);border-width:1px;border-width:var(--fc-event-resizer-dot-border-width,1px);width:8px;width:var(--fc-event-resizer-dot-total-width,8px);height:8px;height:var(--fc-event-resizer-dot-total-width,8px);border-style:solid;border-color:inherit;background:var(--fc-page-bg-color,#fff)}.fc-event-selected .fc-event-resizer:before{content:'';position:absolute;top:-20px;left:-20px;right:-20px;bottom:-20px}.fc-event-selected,.fc-event:focus{box-shadow:0 2px 5px rgba(0,0,0,.2)}.fc-event-selected:before,.fc-event:focus:before{content:"";position:absolute;z-index:3;top:0;left:0;right:0;bottom:0}.fc-event-selected:after,.fc-event:focus:after{content:"";background:rgba(0,0,0,.25);background:var(--fc-event-selected-overlay-color,rgba(0,0,0,.25));position:absolute;z-index:1;top:-1px;left:-1px;right:-1px;bottom:-1px}.fc-h-event{border:1px solid #3788d8;border:1px solid var(--fc-event-border-color,#3788d8);background-color:#3788d8;background-color:var(--fc-event-bg-color,#3788d8)}.fc-h-event .fc-event-main{color:#fff;color:var(--fc-event-text-color,#fff)}.fc-h-event .fc-event-main-frame{display:flex}.fc-h-event .fc-event-time{max-width:100%;overflow:hidden}.fc-h-event .fc-event-title-container{flex-grow:1;flex-shrink:1;min-width:0}.fc-h-event .fc-event-title{display:inline-block;vertical-align:top;left:0;right:0;max-width:100%;overflow:hidden}.fc-h-event.fc-event-selected:before{top:-10px;bottom:-10px}.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-start),.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-end){border-top-left-radius:0;border-bottom-left-radius:0;border-left-width:0}.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-end),.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-start){border-top-right-radius:0;border-bottom-right-radius:0;border-right-width:0}.fc-h-event:not(.fc-event-selected) .fc-event-resizer{top:0;bottom:0;width:8px;width:var(--fc-event-resizer-thickness,8px)}.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start,.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end{cursor:w-resize;left:-4px;left:calc(-.5 * var(--fc-event-resizer-thickness,8px))}.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end,.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start{cursor:e-resize;right:-4px;right:calc(-.5 * var(--fc-event-resizer-thickness,8px))}.fc-h-event.fc-event-selected .fc-event-resizer{top:50%;margin-top:-4px;margin-top:calc(-.5 * var(--fc-event-resizer-dot-total-width,8px))}.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-start,.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-end{left:-4px;left:calc(-.5 * var(--fc-event-resizer-dot-total-width,8px))}.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-end,.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-start{right:-4px;right:calc(-.5 * var(--fc-event-resizer-dot-total-width,8px))}.fc .fc-popover{position:absolute;z-index:9999;box-shadow:0 2px 6px rgba(0,0,0,.15)}.fc .fc-popover-header{display:flex;flex-direction:row;justify-content:space-between;align-items:center;padding:3px 4px}.fc .fc-popover-title{margin:0 2px}.fc .fc-popover-close{cursor:pointer;opacity:.65;font-size:1.1em}.fc-theme-standard .fc-popover{border:1px solid #ddd;border:1px solid var(--fc-border-color,#ddd);background:var(--fc-page-bg-color,#fff)}.fc-theme-standard .fc-popover-header{background:rgba(208,208,208,.3);background:var(--fc-neutral-bg-color,rgba(208,208,208,.3))}:root{--fc-daygrid-event-dot-width:8px;--fc-list-event-dot-width:10px;--fc-list-event-hover-bg-color:#f5f5f5}.fc-daygrid-day-events:after,.fc-daygrid-day-events:before,.fc-daygrid-day-frame:after,.fc-daygrid-day-frame:before,.fc-daygrid-event-harness:after,.fc-daygrid-event-harness:before{content:"";clear:both;display:table}.fc .fc-daygrid-body{position:relative;z-index:1}.fc .fc-daygrid-day.fc-day-today{background-color:rgba(255,220,40,.15);background-color:var(--fc-today-bg-color,rgba(255,220,40,.15))}.fc .fc-daygrid-day-frame{position:relative;min-height:100%}.fc .fc-daygrid-day-top{display:flex;flex-direction:row-reverse}.fc .fc-day-other .fc-daygrid-day-top{opacity:.3}.fc .fc-daygrid-day-number{position:relative;z-index:4;padding:4px}.fc .fc-daygrid-day-events{margin-top:1px}.fc .fc-daygrid-body-balanced .fc-daygrid-day-events{position:absolute;left:0;right:0}.fc .fc-daygrid-body-unbalanced .fc-daygrid-day-events{position:relative;min-height:2em}.fc .fc-daygrid-body-natural .fc-daygrid-day-events{margin-bottom:1em}.fc .fc-daygrid-event-harness{position:relative}.fc .fc-daygrid-event-harness-abs{position:absolute;top:0;left:0;right:0}.fc .fc-daygrid-bg-harness{position:absolute;top:0;bottom:0}.fc .fc-daygrid-day-bg .fc-non-business{z-index:1}.fc .fc-daygrid-day-bg .fc-bg-event{z-index:2}.fc .fc-daygrid-day-bg .fc-highlight{z-index:3}.fc .fc-daygrid-event{z-index:6;margin-top:1px}.fc .fc-daygrid-event.fc-event-mirror{z-index:7}.fc .fc-daygrid-day-bottom{font-size:.85em;padding:2px 3px 0}.fc .fc-daygrid-day-bottom:before{content:"";clear:both;display:table}.fc .fc-daygrid-more-link{position:relative;z-index:4;cursor:pointer}.fc .fc-daygrid-week-number{position:absolute;z-index:5;top:0;padding:2px;min-width:1.5em;text-align:center;background-color:rgba(208,208,208,.3);background-color:var(--fc-neutral-bg-color,rgba(208,208,208,.3));color:grey;color:var(--fc-neutral-text-color,grey)}.fc .fc-more-popover .fc-popover-body{min-width:220px;padding:10px}.fc-direction-ltr .fc-daygrid-event.fc-event-start,.fc-direction-rtl .fc-daygrid-event.fc-event-end{margin-left:2px}.fc-direction-ltr .fc-daygrid-event.fc-event-end,.fc-direction-rtl .fc-daygrid-event.fc-event-start{margin-right:2px}.fc-direction-ltr .fc-daygrid-week-number{left:0;border-radius:0 0 3px}.fc-direction-rtl .fc-daygrid-week-number{right:0;border-radius:0 0 0 3px}.fc-liquid-hack .fc-daygrid-day-frame{position:static}.fc-daygrid-event{position:relative;white-space:nowrap;border-radius:3px;font-size:.85em;font-size:var(--fc-small-font-size,.85em)}.fc-daygrid-block-event .fc-event-time{font-weight:700}.fc-daygrid-block-event .fc-event-time,.fc-daygrid-block-event .fc-event-title{padding:1px}.fc-daygrid-dot-event{display:flex;align-items:center;padding:2px 0}.fc-daygrid-dot-event .fc-event-title{flex-grow:1;flex-shrink:1;min-width:0;overflow:hidden;font-weight:700}.fc-daygrid-dot-event.fc-event-mirror,.fc-daygrid-dot-event:hover{background:rgba(0,0,0,.1)}.fc-daygrid-dot-event.fc-event-selected:before{top:-10px;bottom:-10px}.fc-daygrid-event-dot{margin:0 4px;box-sizing:content-box;width:0;height:0;border:4px solid #3788d8;border:calc(var(--fc-daygrid-event-dot-width,8px)/ 2) solid var(--fc-event-border-color,#3788d8);border-radius:4px;border-radius:calc(var(--fc-daygrid-event-dot-width,8px)/ 2)}.fc-direction-ltr .fc-daygrid-event .fc-event-time{margin-right:3px}.fc-direction-rtl .fc-daygrid-event .fc-event-time{margin-left:3px}.fc-v-event{border:1px solid #3788d8;border:1px solid var(--fc-event-border-color,#3788d8);background-color:#3788d8;background-color:var(--fc-event-bg-color,#3788d8)}.fc-v-event .fc-event-main{color:#fff;color:var(--fc-event-text-color,#fff);height:100%}.fc-v-event .fc-event-main-frame{height:100%;display:flex;flex-direction:column}.fc-v-event .fc-event-time{flex-grow:0;flex-shrink:0;max-height:100%;overflow:hidden}.fc-v-event .fc-event-title-container{flex-grow:1;flex-shrink:1;min-height:0}.fc-v-event .fc-event-title{top:0;bottom:0;max-height:100%;overflow:hidden}.fc-v-event:not(.fc-event-start){border-top-width:0;border-top-left-radius:0;border-top-right-radius:0}.fc-v-event:not(.fc-event-end){border-bottom-width:0;border-bottom-left-radius:0;border-bottom-right-radius:0}.fc-v-event.fc-event-selected:before{left:-10px;right:-10px}.fc-v-event .fc-event-resizer-start{cursor:n-resize}.fc-v-event .fc-event-resizer-end{cursor:s-resize}.fc-v-event:not(.fc-event-selected) .fc-event-resizer{height:8px;height:var(--fc-event-resizer-thickness,8px);left:0;right:0}.fc-v-event:not(.fc-event-selected) .fc-event-resizer-start{top:-4px;top:calc(var(--fc-event-resizer-thickness,8px)/ -2)}.fc-v-event:not(.fc-event-selected) .fc-event-resizer-end{bottom:-4px;bottom:calc(var(--fc-event-resizer-thickness,8px)/ -2)}.fc-v-event.fc-event-selected .fc-event-resizer{left:50%;margin-left:-4px;margin-left:calc(var(--fc-event-resizer-dot-total-width,8px)/ -2)}.fc-v-event.fc-event-selected .fc-event-resizer-start{top:-4px;top:calc(var(--fc-event-resizer-dot-total-width,8px)/ -2)}.fc-v-event.fc-event-selected .fc-event-resizer-end{bottom:-4px;bottom:calc(var(--fc-event-resizer-dot-total-width,8px)/ -2)}.fc .fc-timegrid .fc-daygrid-body{z-index:2}.fc .fc-timegrid-axis-chunk>table,.fc .fc-timegrid-body,.fc .fc-timegrid-slots{position:relative;z-index:1}.fc .fc-timegrid-divider{padding:0 0 2px}.fc .fc-timegrid-body{min-height:100%}.fc .fc-timegrid-axis-chunk{position:relative}.fc .fc-timegrid-slot{height:1.5em;border-bottom:0}.fc .fc-timegrid-slot:empty:before{content:'\00a0'}.fc .fc-timegrid-slot-minor{border-top-style:dotted}.fc .fc-timegrid-slot-label-cushion{display:inline-block;white-space:nowrap}.fc .fc-timegrid-axis-cushion,.fc .fc-timegrid-slot-label-cushion{padding:0 4px}.fc .fc-timegrid-axis-frame-liquid{height:100%}.fc .fc-timegrid-axis-frame{overflow:hidden;display:flex;align-items:center;justify-content:flex-end}.fc .fc-timegrid-axis-cushion{max-width:60px;flex-shrink:0}.fc-direction-ltr .fc-timegrid-slot-label-frame{text-align:right}.fc-direction-rtl .fc-timegrid-slot-label-frame{text-align:left}.fc-liquid-hack .fc-timegrid-axis-frame-liquid{height:auto;position:absolute;top:0;right:0;bottom:0;left:0}.fc .fc-timegrid-col.fc-day-today{background-color:rgba(255,220,40,.15);background-color:var(--fc-today-bg-color,rgba(255,220,40,.15))}.fc .fc-timegrid-col-frame{min-height:100%;position:relative}.fc-media-screen.fc-liquid-hack .fc-timegrid-col-frame{height:auto;position:absolute;top:0;right:0;bottom:0;left:0}.fc-media-screen .fc-timegrid-cols{position:absolute;top:0;left:0;right:0;bottom:0}.fc-media-screen .fc-timegrid-cols>table{height:100%}.fc-media-screen .fc-timegrid-col-bg,.fc-media-screen .fc-timegrid-col-events,.fc-media-screen .fc-timegrid-now-indicator-container{position:absolute;top:0;left:0;right:0}.fc .fc-timegrid-col-bg{z-index:2}.fc .fc-timegrid-col-bg .fc-non-business{z-index:1}.fc .fc-timegrid-col-bg .fc-bg-event{z-index:2}.fc .fc-timegrid-col-bg .fc-highlight,.fc .fc-timegrid-col-events{z-index:3}.fc .fc-timegrid-bg-harness{position:absolute;left:0;right:0}.fc .fc-timegrid-now-indicator-container{bottom:0;overflow:hidden}.fc-direction-ltr .fc-timegrid-col-events{margin:0 2.5% 0 2px}.fc-direction-rtl .fc-timegrid-col-events{margin:0 2px 0 2.5%}.fc-timegrid-event-harness{position:absolute}.fc-timegrid-event-harness>.fc-timegrid-event{position:absolute;top:0;bottom:0;left:0;right:0}.fc-timegrid-event-harness-inset .fc-timegrid-event,.fc-timegrid-event.fc-event-mirror,.fc-timegrid-more-link{box-shadow:0 0 0 1px #fff;box-shadow:0 0 0 1px var(--fc-page-bg-color,#fff)}.fc-timegrid-event,.fc-timegrid-more-link{font-size:.85em;font-size:var(--fc-small-font-size,.85em);border-radius:3px}.fc-timegrid-event{margin-bottom:1px}.fc-timegrid-event .fc-event-main{padding:1px 1px 0}.fc-timegrid-event .fc-event-time{white-space:nowrap;font-size:.85em;font-size:var(--fc-small-font-size,.85em);margin-bottom:1px}.fc-timegrid-event-short .fc-event-main-frame{flex-direction:row;overflow:hidden}.fc-timegrid-event-short .fc-event-time:after{content:'\00a0-\00a0'}.fc-timegrid-event-short .fc-event-title{font-size:.85em;font-size:var(--fc-small-font-size,.85em)}.fc-timegrid-more-link{position:absolute;z-index:9999;color:inherit;color:var(--fc-more-link-text-color,inherit);background:var(--fc-more-link-bg-color,#d0d0d0);cursor:pointer;margin-bottom:1px}.fc-timegrid-more-link-inner{padding:3px 2px;top:0}.fc-direction-ltr .fc-timegrid-more-link{right:0}.fc-direction-rtl .fc-timegrid-more-link{left:0}.fc .fc-timegrid-now-indicator-line{position:absolute;z-index:4;left:0;right:0;border-style:solid;border-color:red;border-color:var(--fc-now-indicator-color,red);border-width:1px 0 0}.fc .fc-timegrid-now-indicator-arrow{position:absolute;z-index:4;margin-top:-5px;border-style:solid;border-color:red;border-color:var(--fc-now-indicator-color,red)}.fc-direction-ltr .fc-timegrid-now-indicator-arrow{left:0;border-width:5px 0 5px 6px;border-top-color:transparent;border-bottom-color:transparent}.fc-direction-rtl .fc-timegrid-now-indicator-arrow{right:0;border-width:5px 6px 5px 0;border-top-color:transparent;border-bottom-color:transparent}.fc-theme-standard .fc-list{border:1px solid #ddd;border:1px solid var(--fc-border-color,#ddd)}.fc .fc-list-empty{background-color:rgba(208,208,208,.3);background-color:var(--fc-neutral-bg-color,rgba(208,208,208,.3));height:100%;display:flex;justify-content:center;align-items:center}.fc .fc-list-empty-cushion{margin:5em 0}.fc .fc-list-table{width:100%;border-style:hidden}.fc .fc-list-table tr>*{border-left:0;border-right:0}.fc .fc-list-sticky .fc-list-day>*{position:sticky;top:0;background:var(--fc-page-bg-color,#fff)}.fc .fc-list-table thead{position:absolute;left:-10000px}.fc .fc-list-table tbody>tr:first-child th{border-top:0}.fc .fc-list-table th{padding:0}.fc .fc-list-day-cushion,.fc .fc-list-table td{padding:8px 14px}.fc .fc-list-day-cushion:after{content:"";clear:both;display:table}.fc-theme-standard .fc-list-day-cushion{background-color:rgba(208,208,208,.3);background-color:var(--fc-neutral-bg-color,rgba(208,208,208,.3))}.fc-direction-ltr .fc-list-day-text,.fc-direction-rtl .fc-list-day-side-text{float:left}.fc-direction-ltr .fc-list-day-side-text,.fc-direction-rtl .fc-list-day-text{float:right}.fc-direction-ltr .fc-list-table .fc-list-event-graphic{padding-right:0}.fc-direction-rtl .fc-list-table .fc-list-event-graphic{padding-left:0}.fc .fc-list-event.fc-event-forced-url{cursor:pointer}.fc .fc-list-event:hover td{background-color:#f5f5f5;background-color:var(--fc-list-event-hover-bg-color,#f5f5f5)}.fc .fc-list-event-graphic,.fc .fc-list-event-time{white-space:nowrap;width:1px}.fc .fc-list-event-dot{display:inline-block;box-sizing:content-box;width:0;height:0;border:5px solid #3788d8;border:calc(var(--fc-list-event-dot-width,10px)/ 2) solid var(--fc-event-border-color,#3788d8);border-radius:5px;border-radius:calc(var(--fc-list-event-dot-width,10px)/ 2)}.fc .fc-list-event-title a{color:inherit}.fc .fc-list-event.fc-event-forced-url:hover a{text-decoration:underline}.fc-theme-bootstrap a:not([href]){color:inherit}.fc-theme-bootstrap5 a:not([href]){color:inherit;text-decoration:inherit}.fc-theme-bootstrap5 .fc-list,.fc-theme-bootstrap5 .fc-scrollgrid,.fc-theme-bootstrap5 td,.fc-theme-bootstrap5 th{border:1px solid var(--bs-gray-400)}.fc-theme-bootstrap5 .fc-scrollgrid{border-right-width:0;border-bottom-width:0}.fc-theme-bootstrap5-shaded{background-color:var(--bs-gray-200)}
    </style>

    <style>
           

        .link-container {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .link-input {
            flex: 1;
            background: linear-gradient(135deg, #8b5cf6, #a855f7, #c084fc);
            border-radius: 50px;
            padding: 16px 24px;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 500;
            outline: none;
        }

        .link-input::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }

        .copy-btn {
            background: white;
            border: 2px solid #8b5cf6;
            border-radius: 12px;
            padding: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 48px;
            height: 48px;
        }

        .copy-btn:hover {
            background: #8b5cf6;
            transform: translateY(-1px);
        }

        .copy-btn:hover .copy-icon {
            stroke: white;
        }

        .copy-icon {
            width: 20px;
            height: 20px;
            stroke: #8b5cf6;
            transition: stroke 0.2s ease;
        }

        .content-area {
            padding: 32px;
        }

        .qr-section {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .qr-code {
            width: 200px;
            height: 200px;
            border: 4px solid #8b5cf6;
            border-radius: 16px;
            background: white;
            padding: 12px;
            flex-shrink: 0;
        }

        .qr-pattern {
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="white"/><rect x="0" y="0" width="20" height="20" fill="black"/><rect x="0" y="80" width="20" height="20" fill="black"/><rect x="80" y="0" width="20" height="20" fill="black"/><rect x="30" y="30" width="10" height="10" fill="black"/><rect x="50" y="30" width="10" height="10" fill="black"/><rect x="70" y="30" width="10" height="10" fill="black"/><rect x="10" y="50" width="10" height="10" fill="black"/><rect x="30" y="50" width="10" height="10" fill="black"/><rect x="50" y="50" width="10" height="10" fill="black"/><rect x="70" y="50" width="10" height="10" fill="black"/><rect x="90" y="50" width="10" height="10" fill="black"/><rect x="10" y="70" width="10" height="10" fill="black"/><rect x="30" y="70" width="10" height="10" fill="black"/><rect x="50" y="70" width="10" height="10" fill="black"/><rect x="70" y="70" width="10" height="10" fill="black"/><rect x="90" y="70" width="10" height="10" fill="black"/></svg>') no-repeat center;
            background-size: contain;
            border-radius: 8px;
        }

        .instruction-text {
            font-size: 18px;
            color: #6c757d;
            line-height: 1.6;
            max-width: 400px;
        }

        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 16px 16px;
            border-radius: 8px;
            font-weight: 500;
            transform: translateX(400px);
            transition: transform 5s ease;
            z-index: 1000;
        }

        .toast.show {
            transform: translateX(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .header {
                padding: 20px;
            }

            .title {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .content-area {
                padding: 20px;
            }

            .qr-section {
                flex-direction: column;
                gap: 24px;
                text-align: center;
            }

            .qr-code {
                width: 160px;
                height: 160px;
                margin: 0 auto;
            }

            .instruction-text {
                font-size: 16px;
                max-width: 100%;
            }

            .link-container {
                flex-direction: column;
                gap: 16px;
            }

            .copy-btn {
                width: 100%;
                height: 56px;
                border-radius: 50px;
                font-weight: 500;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .qr-section {
                gap: 30px;
            }

            .qr-code {
                width: 180px;
                height: 180px;
            }
        }
    </style>

    <style>
       /* Personnalisation du scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #a855f7 0%, #8b5cf6 100%);
        }

      </style>
    <link href="https://db.onlinewebfonts.com/c/88ec722aea6da3c9f67189591d5f3a6e?family=Batangas" rel="stylesheet">
    @yield('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
  </head>
  <body>

     <!-- ======== Preloader =========== -->
    
    <!-- ======== Preloader =========== -->

    @include('layouts.users.components.aside')

    
    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">

        @include('layouts.users.components.herder')



        @yield('content')


      @if (empty($hideFooter))
        @include('layouts.users.components.footer')
      @endif
      
    </main>
    <!-- ======== main-wrapper end =========== -->

     <!-- ========= All Javascript files linkup ======== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/Chart.min.js')}}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const copyBtn = document.querySelector('.copy-btn');
          const linkInput = document.querySelector('.link-input');
          const toast = document.querySelector('.toast');

          copyBtn.addEventListener('click', function() {
              navigator.clipboard.writeText(linkInput.value).then(function() {
                  toast.classList.add('show');
                  setTimeout(function() {
                      toast.classList.remove('show');
                  }, 5000);
              }).catch(function(err) {
                  console.error('Failed to copy: ', err);
              });
          });
      });(function() {
        var pieCharts = document.querySelectorAll('.pie-chart');
        
        Array.prototype.forEach.call(pieCharts, function(wrapperEl) {
          // Pull our variables out of our helper div
          var dataset = wrapperEl.dataset;
          var percentage = dataset.percentage ? parseInt(dataset.percentage, 10) : 0;
          var diameter = dataset.diameter ? parseInt(dataset.diameter, 10) : 150;
          var strokeWidth = dataset.strokeWidth ? parseInt(dataset.strokeWidth, 10) : 15;
          var fillColor = dataset.fillColor || '#f47b28'; // orange
          var bgColor = dataset.bgColor || '#fac5a1'; // light orange
          
          // Size our wrapper element and add our percentage
          wrapperEl.style.height = diameter + 'px';
          wrapperEl.style.width = diameter + 'px';
          var percentageEl = document.createElement('span');
          percentageEl.classList.add('pie-chart__percentage');
          percentageEl.style.color = fillColor;
          percentageEl.innerText = percentage + '%';
          wrapperEl.appendChild(percentageEl);
          
          // Setting up the values we're gonna use to draw our circles
          var center = diameter;
          var radius = center - (strokeWidth);
          var startAngle = degreesToRadians(-90);
          var fullCircle = degreesToRadians(365);
          var endAngle = startAngle + degreesToRadians(percentage / 100 * 365);
          
          // Draw our canvas! Note we're doubling our sizes so we look good on high res displays
          var canvas = document.createElement('canvas');
          canvas.classList.add('pie-chart__canvas');
          canvas.height = diameter * 2;
          canvas.width = diameter * 2;
          var ctx = canvas.getContext('2d');
          ctx.lineWidth = strokeWidth * 2;
          ctx.strokeStyle = bgColor;
          ctx.beginPath();
          ctx.arc(center, center, radius, startAngle, fullCircle);
          ctx.stroke();
          ctx.strokeStyle = fillColor;
          ctx.beginPath();
          ctx.arc(center, center, radius, startAngle, endAngle);
          ctx.stroke();

          wrapperEl.appendChild(canvas);
        });
        
        function degreesToRadians(degrees) {
          return (degrees / 360) * (2 * Math.PI);
        }
      })();

    </script>
    <script>
      !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.moment=t()}(this,function(){"use strict";var e,i;function f(){return e.apply(null,arguments)}function o(e){return e instanceof Array||"[object Array]"===Object.prototype.toString.call(e)}function u(e){return null!=e&&"[object Object]"===Object.prototype.toString.call(e)}function m(e,t){return Object.prototype.hasOwnProperty.call(e,t)}function l(e){if(Object.getOwnPropertyNames)return 0===Object.getOwnPropertyNames(e).length;for(var t in e)if(m(e,t))return;return 1}function r(e){return void 0===e}function h(e){return"number"==typeof e||"[object Number]"===Object.prototype.toString.call(e)}function a(e){return e instanceof Date||"[object Date]"===Object.prototype.toString.call(e)}function d(e,t){for(var n=[],s=0;s<e.length;++s)n.push(t(e[s],s));return n}function c(e,t){for(var n in t)m(t,n)&&(e[n]=t[n]);return m(t,"toString")&&(e.toString=t.toString),m(t,"valueOf")&&(e.valueOf=t.valueOf),e}function _(e,t,n,s){return xt(e,t,n,s,!0).utc()}function y(e){return null==e._pf&&(e._pf={empty:!1,unusedTokens:[],unusedInput:[],overflow:-2,charsLeftOver:0,nullInput:!1,invalidEra:null,invalidMonth:null,invalidFormat:!1,userInvalidated:!1,iso:!1,parsedDateParts:[],era:null,meridiem:null,rfc2822:!1,weekdayMismatch:!1}),e._pf}function g(e){if(null==e._isValid){var t=y(e),n=i.call(t.parsedDateParts,function(e){return null!=e}),s=!isNaN(e._d.getTime())&&t.overflow<0&&!t.empty&&!t.invalidEra&&!t.invalidMonth&&!t.invalidWeekday&&!t.weekdayMismatch&&!t.nullInput&&!t.invalidFormat&&!t.userInvalidated&&(!t.meridiem||t.meridiem&&n);if(e._strict&&(s=s&&0===t.charsLeftOver&&0===t.unusedTokens.length&&void 0===t.bigHour),null!=Object.isFrozen&&Object.isFrozen(e))return s;e._isValid=s}return e._isValid}function w(e){var t=_(NaN);return null!=e?c(y(t),e):y(t).userInvalidated=!0,t}i=Array.prototype.some?Array.prototype.some:function(e){for(var t=Object(this),n=t.length>>>0,s=0;s<n;s++)if(s in t&&e.call(this,t[s],s,t))return!0;return!1};var p=f.momentProperties=[],t=!1;function v(e,t){var n,s,i;if(r(t._isAMomentObject)||(e._isAMomentObject=t._isAMomentObject),r(t._i)||(e._i=t._i),r(t._f)||(e._f=t._f),r(t._l)||(e._l=t._l),r(t._strict)||(e._strict=t._strict),r(t._tzm)||(e._tzm=t._tzm),r(t._isUTC)||(e._isUTC=t._isUTC),r(t._offset)||(e._offset=t._offset),r(t._pf)||(e._pf=y(t)),r(t._locale)||(e._locale=t._locale),0<p.length)for(n=0;n<p.length;n++)r(i=t[s=p[n]])||(e[s]=i);return e}function k(e){v(this,e),this._d=new Date(null!=e._d?e._d.getTime():NaN),this.isValid()||(this._d=new Date(NaN)),!1===t&&(t=!0,f.updateOffset(this),t=!1)}function M(e){return e instanceof k||null!=e&&null!=e._isAMomentObject}function D(e){!1===f.suppressDeprecationWarnings&&"undefined"!=typeof console&&console.warn&&console.warn("Deprecation warning: "+e)}function n(i,r){var a=!0;return c(function(){if(null!=f.deprecationHandler&&f.deprecationHandler(null,i),a){for(var e,t,n=[],s=0;s<arguments.length;s++){if(e="","object"==typeof arguments[s]){for(t in e+="\n["+s+"] ",arguments[0])m(arguments[0],t)&&(e+=t+": "+arguments[0][t]+", ");e=e.slice(0,-2)}else e=arguments[s];n.push(e)}D(i+"\nArguments: "+Array.prototype.slice.call(n).join("")+"\n"+(new Error).stack),a=!1}return r.apply(this,arguments)},r)}var s,S={};function Y(e,t){null!=f.deprecationHandler&&f.deprecationHandler(e,t),S[e]||(D(t),S[e]=!0)}function O(e){return"undefined"!=typeof Function&&e instanceof Function||"[object Function]"===Object.prototype.toString.call(e)}function b(e,t){var n,s=c({},e);for(n in t)m(t,n)&&(u(e[n])&&u(t[n])?(s[n]={},c(s[n],e[n]),c(s[n],t[n])):null!=t[n]?s[n]=t[n]:delete s[n]);for(n in e)m(e,n)&&!m(t,n)&&u(e[n])&&(s[n]=c({},s[n]));return s}function x(e){null!=e&&this.set(e)}f.suppressDeprecationWarnings=!1,f.deprecationHandler=null,s=Object.keys?Object.keys:function(e){var t,n=[];for(t in e)m(e,t)&&n.push(t);return n};function T(e,t,n){var s=""+Math.abs(e),i=t-s.length;return(0<=e?n?"+":"":"-")+Math.pow(10,Math.max(0,i)).toString().substr(1)+s}var N=/(\[[^\[]*\])|(\\)?([Hh]mm(ss)?|Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Qo?|N{1,5}|YYYYYY|YYYYY|YYYY|YY|y{2,4}|yo?|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|kk?|mm?|ss?|S{1,9}|x|X|zz?|ZZ?|.)/g,P=/(\[[^\[]*\])|(\\)?(LTS|LT|LL?L?L?|l{1,4})/g,R={},W={};function C(e,t,n,s){var i="string"==typeof s?function(){return this[s]()}:s;e&&(W[e]=i),t&&(W[t[0]]=function(){return T(i.apply(this,arguments),t[1],t[2])}),n&&(W[n]=function(){return this.localeData().ordinal(i.apply(this,arguments),e)})}function U(e,t){return e.isValid()?(t=H(t,e.localeData()),R[t]=R[t]||function(s){for(var e,i=s.match(N),t=0,r=i.length;t<r;t++)W[i[t]]?i[t]=W[i[t]]:i[t]=(e=i[t]).match(/\[[\s\S]/)?e.replace(/^\[|\]$/g,""):e.replace(/\\/g,"");return function(e){for(var t="",n=0;n<r;n++)t+=O(i[n])?i[n].call(e,s):i[n];return t}}(t),R[t](e)):e.localeData().invalidDate()}function H(e,t){var n=5;function s(e){return t.longDateFormat(e)||e}for(P.lastIndex=0;0<=n&&P.test(e);)e=e.replace(P,s),P.lastIndex=0,--n;return e}var F={};function L(e,t){var n=e.toLowerCase();F[n]=F[n+"s"]=F[t]=e}function V(e){return"string"==typeof e?F[e]||F[e.toLowerCase()]:void 0}function G(e){var t,n,s={};for(n in e)m(e,n)&&(t=V(n))&&(s[t]=e[n]);return s}var E={};function A(e,t){E[e]=t}function j(e){return e%4==0&&e%100!=0||e%400==0}function I(e){return e<0?Math.ceil(e)||0:Math.floor(e)}function Z(e){var t=+e,n=0;return 0!=t&&isFinite(t)&&(n=I(t)),n}function z(t,n){return function(e){return null!=e?(q(this,t,e),f.updateOffset(this,n),this):$(this,t)}}function $(e,t){return e.isValid()?e._d["get"+(e._isUTC?"UTC":"")+t]():NaN}function q(e,t,n){e.isValid()&&!isNaN(n)&&("FullYear"===t&&j(e.year())&&1===e.month()&&29===e.date()?(n=Z(n),e._d["set"+(e._isUTC?"UTC":"")+t](n,e.month(),xe(n,e.month()))):e._d["set"+(e._isUTC?"UTC":"")+t](n))}var B,J=/\d/,Q=/\d\d/,X=/\d{3}/,K=/\d{4}/,ee=/[+-]?\d{6}/,te=/\d\d?/,ne=/\d\d\d\d?/,se=/\d\d\d\d\d\d?/,ie=/\d{1,3}/,re=/\d{1,4}/,ae=/[+-]?\d{1,6}/,oe=/\d+/,ue=/[+-]?\d+/,le=/Z|[+-]\d\d:?\d\d/gi,he=/Z|[+-]\d\d(?::?\d\d)?/gi,de=/[0-9]{0,256}['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFF07\uFF10-\uFFEF]{1,256}|[\u0600-\u06FF\/]{1,256}(\s*?[\u0600-\u06FF]{1,256}){1,2}/i;function ce(e,n,s){B[e]=O(n)?n:function(e,t){return e&&s?s:n}}function fe(e,t){return m(B,e)?B[e](t._strict,t._locale):new RegExp(me(e.replace("\\","").replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g,function(e,t,n,s,i){return t||n||s||i})))}function me(e){return e.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")}B={};var _e={};function ye(e,n){var t,s=n;for("string"==typeof e&&(e=[e]),h(n)&&(s=function(e,t){t[n]=Z(e)}),t=0;t<e.length;t++)_e[e[t]]=s}function ge(e,i){ye(e,function(e,t,n,s){n._w=n._w||{},i(e,n._w,n,s)})}var we,pe=0,ve=1,ke=2,Me=3,De=4,Se=5,Ye=6,Oe=7,be=8;function xe(e,t){if(isNaN(e)||isNaN(t))return NaN;var n,s=(t%(n=12)+n)%n;return e+=(t-s)/12,1==s?j(e)?29:28:31-s%7%2}we=Array.prototype.indexOf?Array.prototype.indexOf:function(e){for(var t=0;t<this.length;++t)if(this[t]===e)return t;return-1},C("M",["MM",2],"Mo",function(){return this.month()+1}),C("MMM",0,0,function(e){return this.localeData().monthsShort(this,e)}),C("MMMM",0,0,function(e){return this.localeData().months(this,e)}),L("month","M"),A("month",8),ce("M",te),ce("MM",te,Q),ce("MMM",function(e,t){return t.monthsShortRegex(e)}),ce("MMMM",function(e,t){return t.monthsRegex(e)}),ye(["M","MM"],function(e,t){t[ve]=Z(e)-1}),ye(["MMM","MMMM"],function(e,t,n,s){var i=n._locale.monthsParse(e,s,n._strict);null!=i?t[ve]=i:y(n).invalidMonth=e});var Te="January_February_March_April_May_June_July_August_September_October_November_December".split("_"),Ne="Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),Pe=/D[oD]?(\[[^\[\]]*\]|\s)+MMMM?/,Re=de,We=de;function Ce(e,t){var n;if(!e.isValid())return e;if("string"==typeof t)if(/^\d+$/.test(t))t=Z(t);else if(!h(t=e.localeData().monthsParse(t)))return e;return n=Math.min(e.date(),xe(e.year(),t)),e._d["set"+(e._isUTC?"UTC":"")+"Month"](t,n),e}function Ue(e){return null!=e?(Ce(this,e),f.updateOffset(this,!0),this):$(this,"Month")}function He(){function e(e,t){return t.length-e.length}for(var t,n=[],s=[],i=[],r=0;r<12;r++)t=_([2e3,r]),n.push(this.monthsShort(t,"")),s.push(this.months(t,"")),i.push(this.months(t,"")),i.push(this.monthsShort(t,""));for(n.sort(e),s.sort(e),i.sort(e),r=0;r<12;r++)n[r]=me(n[r]),s[r]=me(s[r]);for(r=0;r<24;r++)i[r]=me(i[r]);this._monthsRegex=new RegExp("^("+i.join("|")+")","i"),this._monthsShortRegex=this._monthsRegex,this._monthsStrictRegex=new RegExp("^("+s.join("|")+")","i"),this._monthsShortStrictRegex=new RegExp("^("+n.join("|")+")","i")}function Fe(e){return j(e)?366:365}C("Y",0,0,function(){var e=this.year();return e<=9999?T(e,4):"+"+e}),C(0,["YY",2],0,function(){return this.year()%100}),C(0,["YYYY",4],0,"year"),C(0,["YYYYY",5],0,"year"),C(0,["YYYYYY",6,!0],0,"year"),L("year","y"),A("year",1),ce("Y",ue),ce("YY",te,Q),ce("YYYY",re,K),ce("YYYYY",ae,ee),ce("YYYYYY",ae,ee),ye(["YYYYY","YYYYYY"],pe),ye("YYYY",function(e,t){t[pe]=2===e.length?f.parseTwoDigitYear(e):Z(e)}),ye("YY",function(e,t){t[pe]=f.parseTwoDigitYear(e)}),ye("Y",function(e,t){t[pe]=parseInt(e,10)}),f.parseTwoDigitYear=function(e){return Z(e)+(68<Z(e)?1900:2e3)};var Le=z("FullYear",!0);function Ve(e){var t,n;return e<100&&0<=e?((n=Array.prototype.slice.call(arguments))[0]=e+400,t=new Date(Date.UTC.apply(null,n)),isFinite(t.getUTCFullYear())&&t.setUTCFullYear(e)):t=new Date(Date.UTC.apply(null,arguments)),t}function Ge(e,t,n){var s=7+t-n;return s-(7+Ve(e,0,s).getUTCDay()-t)%7-1}function Ee(e,t,n,s,i){var r,a=1+7*(t-1)+(7+n-s)%7+Ge(e,s,i),o=a<=0?Fe(r=e-1)+a:a>Fe(e)?(r=e+1,a-Fe(e)):(r=e,a);return{year:r,dayOfYear:o}}function Ae(e,t,n){var s,i,r=Ge(e.year(),t,n),a=Math.floor((e.dayOfYear()-r-1)/7)+1;return a<1?s=a+je(i=e.year()-1,t,n):a>je(e.year(),t,n)?(s=a-je(e.year(),t,n),i=e.year()+1):(i=e.year(),s=a),{week:s,year:i}}function je(e,t,n){var s=Ge(e,t,n),i=Ge(e+1,t,n);return(Fe(e)-s+i)/7}C("w",["ww",2],"wo","week"),C("W",["WW",2],"Wo","isoWeek"),L("week","w"),L("isoWeek","W"),A("week",5),A("isoWeek",5),ce("w",te),ce("ww",te,Q),ce("W",te),ce("WW",te,Q),ge(["w","ww","W","WW"],function(e,t,n,s){t[s.substr(0,1)]=Z(e)});function Ie(e,t){return e.slice(t,7).concat(e.slice(0,t))}C("d",0,"do","day"),C("dd",0,0,function(e){return this.localeData().weekdaysMin(this,e)}),C("ddd",0,0,function(e){return this.localeData().weekdaysShort(this,e)}),C("dddd",0,0,function(e){return this.localeData().weekdays(this,e)}),C("e",0,0,"weekday"),C("E",0,0,"isoWeekday"),L("day","d"),L("weekday","e"),L("isoWeekday","E"),A("day",11),A("weekday",11),A("isoWeekday",11),ce("d",te),ce("e",te),ce("E",te),ce("dd",function(e,t){return t.weekdaysMinRegex(e)}),ce("ddd",function(e,t){return t.weekdaysShortRegex(e)}),ce("dddd",function(e,t){return t.weekdaysRegex(e)}),ge(["dd","ddd","dddd"],function(e,t,n,s){var i=n._locale.weekdaysParse(e,s,n._strict);null!=i?t.d=i:y(n).invalidWeekday=e}),ge(["d","e","E"],function(e,t,n,s){t[s]=Z(e)});var Ze="Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),ze="Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),$e="Su_Mo_Tu_We_Th_Fr_Sa".split("_"),qe=de,Be=de,Je=de;function Qe(){function e(e,t){return t.length-e.length}for(var t,n,s,i,r=[],a=[],o=[],u=[],l=0;l<7;l++)t=_([2e3,1]).day(l),n=me(this.weekdaysMin(t,"")),s=me(this.weekdaysShort(t,"")),i=me(this.weekdays(t,"")),r.push(n),a.push(s),o.push(i),u.push(n),u.push(s),u.push(i);r.sort(e),a.sort(e),o.sort(e),u.sort(e),this._weekdaysRegex=new RegExp("^("+u.join("|")+")","i"),this._weekdaysShortRegex=this._weekdaysRegex,this._weekdaysMinRegex=this._weekdaysRegex,this._weekdaysStrictRegex=new RegExp("^("+o.join("|")+")","i"),this._weekdaysShortStrictRegex=new RegExp("^("+a.join("|")+")","i"),this._weekdaysMinStrictRegex=new RegExp("^("+r.join("|")+")","i")}function Xe(){return this.hours()%12||12}function Ke(e,t){C(e,0,0,function(){return this.localeData().meridiem(this.hours(),this.minutes(),t)})}function et(e,t){return t._meridiemParse}C("H",["HH",2],0,"hour"),C("h",["hh",2],0,Xe),C("k",["kk",2],0,function(){return this.hours()||24}),C("hmm",0,0,function(){return""+Xe.apply(this)+T(this.minutes(),2)}),C("hmmss",0,0,function(){return""+Xe.apply(this)+T(this.minutes(),2)+T(this.seconds(),2)}),C("Hmm",0,0,function(){return""+this.hours()+T(this.minutes(),2)}),C("Hmmss",0,0,function(){return""+this.hours()+T(this.minutes(),2)+T(this.seconds(),2)}),Ke("a",!0),Ke("A",!1),L("hour","h"),A("hour",13),ce("a",et),ce("A",et),ce("H",te),ce("h",te),ce("k",te),ce("HH",te,Q),ce("hh",te,Q),ce("kk",te,Q),ce("hmm",ne),ce("hmmss",se),ce("Hmm",ne),ce("Hmmss",se),ye(["H","HH"],Me),ye(["k","kk"],function(e,t,n){var s=Z(e);t[Me]=24===s?0:s}),ye(["a","A"],function(e,t,n){n._isPm=n._locale.isPM(e),n._meridiem=e}),ye(["h","hh"],function(e,t,n){t[Me]=Z(e),y(n).bigHour=!0}),ye("hmm",function(e,t,n){var s=e.length-2;t[Me]=Z(e.substr(0,s)),t[De]=Z(e.substr(s)),y(n).bigHour=!0}),ye("hmmss",function(e,t,n){var s=e.length-4,i=e.length-2;t[Me]=Z(e.substr(0,s)),t[De]=Z(e.substr(s,2)),t[Se]=Z(e.substr(i)),y(n).bigHour=!0}),ye("Hmm",function(e,t,n){var s=e.length-2;t[Me]=Z(e.substr(0,s)),t[De]=Z(e.substr(s))}),ye("Hmmss",function(e,t,n){var s=e.length-4,i=e.length-2;t[Me]=Z(e.substr(0,s)),t[De]=Z(e.substr(s,2)),t[Se]=Z(e.substr(i))});var tt=z("Hours",!0);var nt,st={calendar:{sameDay:"[Today at] LT",nextDay:"[Tomorrow at] LT",nextWeek:"dddd [at] LT",lastDay:"[Yesterday at] LT",lastWeek:"[Last] dddd [at] LT",sameElse:"L"},longDateFormat:{LTS:"h:mm:ss A",LT:"h:mm A",L:"MM/DD/YYYY",LL:"MMMM D, YYYY",LLL:"MMMM D, YYYY h:mm A",LLLL:"dddd, MMMM D, YYYY h:mm A"},invalidDate:"Invalid date",ordinal:"%d",dayOfMonthOrdinalParse:/\d{1,2}/,relativeTime:{future:"in %s",past:"%s ago",s:"a few seconds",ss:"%d seconds",m:"a minute",mm:"%d minutes",h:"an hour",hh:"%d hours",d:"a day",dd:"%d days",w:"a week",ww:"%d weeks",M:"a month",MM:"%d months",y:"a year",yy:"%d years"},months:Te,monthsShort:Ne,week:{dow:0,doy:6},weekdays:Ze,weekdaysMin:$e,weekdaysShort:ze,meridiemParse:/[ap]\.?m?\.?/i},it={},rt={};function at(e){return e?e.toLowerCase().replace("_","-"):e}function ot(e){for(var t,n,s,i,r=0;r<e.length;){for(t=(i=at(e[r]).split("-")).length,n=(n=at(e[r+1]))?n.split("-"):null;0<t;){if(s=ut(i.slice(0,t).join("-")))return s;if(n&&n.length>=t&&function(e,t){for(var n=Math.min(e.length,t.length),s=0;s<n;s+=1)if(e[s]!==t[s])return s;return n}(i,n)>=t-1)break;t--}r++}return nt}function ut(t){var e;if(void 0===it[t]&&"undefined"!=typeof module&&module&&module.exports)try{e=nt._abbr,require("./locale/"+t),lt(e)}catch(e){it[t]=null}return it[t]}function lt(e,t){var n;return e&&((n=r(t)?dt(e):ht(e,t))?nt=n:"undefined"!=typeof console&&console.warn&&console.warn("Locale "+e+" not found. Did you forget to load it?")),nt._abbr}function ht(e,t){if(null===t)return delete it[e],null;var n,s=st;if(t.abbr=e,null!=it[e])Y("defineLocaleOverride","use moment.updateLocale(localeName, config) to change an existing locale. moment.defineLocale(localeName, config) should only be used for creating a new locale See http://momentjs.com/guides/#/warnings/define-locale/ for more info."),s=it[e]._config;else if(null!=t.parentLocale)if(null!=it[t.parentLocale])s=it[t.parentLocale]._config;else{if(null==(n=ut(t.parentLocale)))return rt[t.parentLocale]||(rt[t.parentLocale]=[]),rt[t.parentLocale].push({name:e,config:t}),null;s=n._config}return it[e]=new x(b(s,t)),rt[e]&&rt[e].forEach(function(e){ht(e.name,e.config)}),lt(e),it[e]}function dt(e){var t;if(e&&e._locale&&e._locale._abbr&&(e=e._locale._abbr),!e)return nt;if(!o(e)){if(t=ut(e))return t;e=[e]}return ot(e)}function ct(e){var t,n=e._a;return n&&-2===y(e).overflow&&(t=n[ve]<0||11<n[ve]?ve:n[ke]<1||n[ke]>xe(n[pe],n[ve])?ke:n[Me]<0||24<n[Me]||24===n[Me]&&(0!==n[De]||0!==n[Se]||0!==n[Ye])?Me:n[De]<0||59<n[De]?De:n[Se]<0||59<n[Se]?Se:n[Ye]<0||999<n[Ye]?Ye:-1,y(e)._overflowDayOfYear&&(t<pe||ke<t)&&(t=ke),y(e)._overflowWeeks&&-1===t&&(t=Oe),y(e)._overflowWeekday&&-1===t&&(t=be),y(e).overflow=t),e}var ft=/^\s*((?:[+-]\d{6}|\d{4})-(?:\d\d-\d\d|W\d\d-\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?::\d\d(?::\d\d(?:[.,]\d+)?)?)?)([+-]\d\d(?::?\d\d)?|\s*Z)?)?$/,mt=/^\s*((?:[+-]\d{6}|\d{4})(?:\d\d\d\d|W\d\d\d|W\d\d|\d\d\d|\d\d|))(?:(T| )(\d\d(?:\d\d(?:\d\d(?:[.,]\d+)?)?)?)([+-]\d\d(?::?\d\d)?|\s*Z)?)?$/,_t=/Z|[+-]\d\d(?::?\d\d)?/,yt=[["YYYYYY-MM-DD",/[+-]\d{6}-\d\d-\d\d/],["YYYY-MM-DD",/\d{4}-\d\d-\d\d/],["GGGG-[W]WW-E",/\d{4}-W\d\d-\d/],["GGGG-[W]WW",/\d{4}-W\d\d/,!1],["YYYY-DDD",/\d{4}-\d{3}/],["YYYY-MM",/\d{4}-\d\d/,!1],["YYYYYYMMDD",/[+-]\d{10}/],["YYYYMMDD",/\d{8}/],["GGGG[W]WWE",/\d{4}W\d{3}/],["GGGG[W]WW",/\d{4}W\d{2}/,!1],["YYYYDDD",/\d{7}/],["YYYYMM",/\d{6}/,!1],["YYYY",/\d{4}/,!1]],gt=[["HH:mm:ss.SSSS",/\d\d:\d\d:\d\d\.\d+/],["HH:mm:ss,SSSS",/\d\d:\d\d:\d\d,\d+/],["HH:mm:ss",/\d\d:\d\d:\d\d/],["HH:mm",/\d\d:\d\d/],["HHmmss.SSSS",/\d\d\d\d\d\d\.\d+/],["HHmmss,SSSS",/\d\d\d\d\d\d,\d+/],["HHmmss",/\d\d\d\d\d\d/],["HHmm",/\d\d\d\d/],["HH",/\d\d/]],wt=/^\/?Date\((-?\d+)/i,pt=/^(?:(Mon|Tue|Wed|Thu|Fri|Sat|Sun),?\s)?(\d{1,2})\s(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s(\d{2,4})\s(\d\d):(\d\d)(?::(\d\d))?\s(?:(UT|GMT|[ECMP][SD]T)|([Zz])|([+-]\d{4}))$/,vt={UT:0,GMT:0,EDT:-240,EST:-300,CDT:-300,CST:-360,MDT:-360,MST:-420,PDT:-420,PST:-480};function kt(e){var t,n,s,i,r,a,o=e._i,u=ft.exec(o)||mt.exec(o);if(u){for(y(e).iso=!0,t=0,n=yt.length;t<n;t++)if(yt[t][1].exec(u[1])){i=yt[t][0],s=!1!==yt[t][2];break}if(null==i)return void(e._isValid=!1);if(u[3]){for(t=0,n=gt.length;t<n;t++)if(gt[t][1].exec(u[3])){r=(u[2]||" ")+gt[t][0];break}if(null==r)return void(e._isValid=!1)}if(!s&&null!=r)return void(e._isValid=!1);if(u[4]){if(!_t.exec(u[4]))return void(e._isValid=!1);a="Z"}e._f=i+(r||"")+(a||""),Ot(e)}else e._isValid=!1}function Mt(e,t,n,s,i,r){var a=[function(e){var t=parseInt(e,10);{if(t<=49)return 2e3+t;if(t<=999)return 1900+t}return t}(e),Ne.indexOf(t),parseInt(n,10),parseInt(s,10),parseInt(i,10)];return r&&a.push(parseInt(r,10)),a}function Dt(e){var t,n,s,i,r=pt.exec(e._i.replace(/\([^)]*\)|[\n\t]/g," ").replace(/(\s\s+)/g," ").replace(/^\s\s*/,"").replace(/\s\s*$/,""));if(r){if(t=Mt(r[4],r[3],r[2],r[5],r[6],r[7]),n=r[1],s=t,i=e,n&&ze.indexOf(n)!==new Date(s[0],s[1],s[2]).getDay()&&(y(i).weekdayMismatch=!0,!void(i._isValid=!1)))return;e._a=t,e._tzm=function(e,t,n){if(e)return vt[e];if(t)return 0;var s=parseInt(n,10),i=s%100;return 60*((s-i)/100)+i}(r[8],r[9],r[10]),e._d=Ve.apply(null,e._a),e._d.setUTCMinutes(e._d.getUTCMinutes()-e._tzm),y(e).rfc2822=!0}else e._isValid=!1}function St(e,t,n){return null!=e?e:null!=t?t:n}function Yt(e){var t,n,s,i,r,a,o,u=[];if(!e._d){for(a=e,o=new Date(f.now()),s=a._useUTC?[o.getUTCFullYear(),o.getUTCMonth(),o.getUTCDate()]:[o.getFullYear(),o.getMonth(),o.getDate()],e._w&&null==e._a[ke]&&null==e._a[ve]&&function(e){var t,n,s,i,r,a,o,u,l;null!=(t=e._w).GG||null!=t.W||null!=t.E?(r=1,a=4,n=St(t.GG,e._a[pe],Ae(Tt(),1,4).year),s=St(t.W,1),((i=St(t.E,1))<1||7<i)&&(u=!0)):(r=e._locale._week.dow,a=e._locale._week.doy,l=Ae(Tt(),r,a),n=St(t.gg,e._a[pe],l.year),s=St(t.w,l.week),null!=t.d?((i=t.d)<0||6<i)&&(u=!0):null!=t.e?(i=t.e+r,(t.e<0||6<t.e)&&(u=!0)):i=r);s<1||s>je(n,r,a)?y(e)._overflowWeeks=!0:null!=u?y(e)._overflowWeekday=!0:(o=Ee(n,s,i,r,a),e._a[pe]=o.year,e._dayOfYear=o.dayOfYear)}(e),null!=e._dayOfYear&&(r=St(e._a[pe],s[pe]),(e._dayOfYear>Fe(r)||0===e._dayOfYear)&&(y(e)._overflowDayOfYear=!0),n=Ve(r,0,e._dayOfYear),e._a[ve]=n.getUTCMonth(),e._a[ke]=n.getUTCDate()),t=0;t<3&&null==e._a[t];++t)e._a[t]=u[t]=s[t];for(;t<7;t++)e._a[t]=u[t]=null==e._a[t]?2===t?1:0:e._a[t];24===e._a[Me]&&0===e._a[De]&&0===e._a[Se]&&0===e._a[Ye]&&(e._nextDay=!0,e._a[Me]=0),e._d=(e._useUTC?Ve:function(e,t,n,s,i,r,a){var o;return e<100&&0<=e?(o=new Date(e+400,t,n,s,i,r,a),isFinite(o.getFullYear())&&o.setFullYear(e)):o=new Date(e,t,n,s,i,r,a),o}).apply(null,u),i=e._useUTC?e._d.getUTCDay():e._d.getDay(),null!=e._tzm&&e._d.setUTCMinutes(e._d.getUTCMinutes()-e._tzm),e._nextDay&&(e._a[Me]=24),e._w&&void 0!==e._w.d&&e._w.d!==i&&(y(e).weekdayMismatch=!0)}}function Ot(e){if(e._f!==f.ISO_8601)if(e._f!==f.RFC_2822){e._a=[],y(e).empty=!0;for(var t,n,s,i,r,a,o,u=""+e._i,l=u.length,h=0,d=H(e._f,e._locale).match(N)||[],c=0;c<d.length;c++)n=d[c],(t=(u.match(fe(n,e))||[])[0])&&(0<(s=u.substr(0,u.indexOf(t))).length&&y(e).unusedInput.push(s),u=u.slice(u.indexOf(t)+t.length),h+=t.length),W[n]?(t?y(e).empty=!1:y(e).unusedTokens.push(n),r=n,o=e,null!=(a=t)&&m(_e,r)&&_e[r](a,o._a,o,r)):e._strict&&!t&&y(e).unusedTokens.push(n);y(e).charsLeftOver=l-h,0<u.length&&y(e).unusedInput.push(u),e._a[Me]<=12&&!0===y(e).bigHour&&0<e._a[Me]&&(y(e).bigHour=void 0),y(e).parsedDateParts=e._a.slice(0),y(e).meridiem=e._meridiem,e._a[Me]=function(e,t,n){var s;if(null==n)return t;return null!=e.meridiemHour?e.meridiemHour(t,n):(null!=e.isPM&&((s=e.isPM(n))&&t<12&&(t+=12),s||12!==t||(t=0)),t)}(e._locale,e._a[Me],e._meridiem),null!==(i=y(e).era)&&(e._a[pe]=e._locale.erasConvertYear(i,e._a[pe])),Yt(e),ct(e)}else Dt(e);else kt(e)}function bt(e){var t,n,s=e._i,i=e._f;return e._locale=e._locale||dt(e._l),null===s||void 0===i&&""===s?w({nullInput:!0}):("string"==typeof s&&(e._i=s=e._locale.preparse(s)),M(s)?new k(ct(s)):(a(s)?e._d=s:o(i)?function(e){var t,n,s,i,r,a,o=!1;if(0===e._f.length)return y(e).invalidFormat=!0,e._d=new Date(NaN);for(i=0;i<e._f.length;i++)r=0,a=!1,t=v({},e),null!=e._useUTC&&(t._useUTC=e._useUTC),t._f=e._f[i],Ot(t),g(t)&&(a=!0),r+=y(t).charsLeftOver,r+=10*y(t).unusedTokens.length,y(t).score=r,o?r<s&&(s=r,n=t):(null==s||r<s||a)&&(s=r,n=t,a&&(o=!0));c(e,n||t)}(e):i?Ot(e):r(n=(t=e)._i)?t._d=new Date(f.now()):a(n)?t._d=new Date(n.valueOf()):"string"==typeof n?function(e){var t=wt.exec(e._i);null===t?(kt(e),!1===e._isValid&&(delete e._isValid,Dt(e),!1===e._isValid&&(delete e._isValid,e._strict?e._isValid=!1:f.createFromInputFallback(e)))):e._d=new Date(+t[1])}(t):o(n)?(t._a=d(n.slice(0),function(e){return parseInt(e,10)}),Yt(t)):u(n)?function(e){var t,n;e._d||(n=void 0===(t=G(e._i)).day?t.date:t.day,e._a=d([t.year,t.month,n,t.hour,t.minute,t.second,t.millisecond],function(e){return e&&parseInt(e,10)}),Yt(e))}(t):h(n)?t._d=new Date(n):f.createFromInputFallback(t),g(e)||(e._d=null),e))}function xt(e,t,n,s,i){var r,a={};return!0!==t&&!1!==t||(s=t,t=void 0),!0!==n&&!1!==n||(s=n,n=void 0),(u(e)&&l(e)||o(e)&&0===e.length)&&(e=void 0),a._isAMomentObject=!0,a._useUTC=a._isUTC=i,a._l=n,a._i=e,a._f=t,a._strict=s,(r=new k(ct(bt(a))))._nextDay&&(r.add(1,"d"),r._nextDay=void 0),r}function Tt(e,t,n,s){return xt(e,t,n,s,!1)}f.createFromInputFallback=n("value provided is not in a recognized RFC2822 or ISO format. moment construction falls back to js Date(), which is not reliable across all browsers and versions. Non RFC2822/ISO date formats are discouraged and will be removed in an upcoming major release. Please refer to http://momentjs.com/guides/#/warnings/js-date/ for more info.",function(e){e._d=new Date(e._i+(e._useUTC?" UTC":""))}),f.ISO_8601=function(){},f.RFC_2822=function(){};var Nt=n("moment().min is deprecated, use moment.max instead. http://momentjs.com/guides/#/warnings/min-max/",function(){var e=Tt.apply(null,arguments);return this.isValid()&&e.isValid()?e<this?this:e:w()}),Pt=n("moment().max is deprecated, use moment.min instead. http://momentjs.com/guides/#/warnings/min-max/",function(){var e=Tt.apply(null,arguments);return this.isValid()&&e.isValid()?this<e?this:e:w()});function Rt(e,t){var n,s;if(1===t.length&&o(t[0])&&(t=t[0]),!t.length)return Tt();for(n=t[0],s=1;s<t.length;++s)t[s].isValid()&&!t[s][e](n)||(n=t[s]);return n}var Wt=["year","quarter","month","week","day","hour","minute","second","millisecond"];function Ct(e){var t=G(e),n=t.year||0,s=t.quarter||0,i=t.month||0,r=t.week||t.isoWeek||0,a=t.day||0,o=t.hour||0,u=t.minute||0,l=t.second||0,h=t.millisecond||0;this._isValid=function(e){var t,n,s=!1;for(t in e)if(m(e,t)&&(-1===we.call(Wt,t)||null!=e[t]&&isNaN(e[t])))return!1;for(n=0;n<Wt.length;++n)if(e[Wt[n]]){if(s)return!1;parseFloat(e[Wt[n]])!==Z(e[Wt[n]])&&(s=!0)}return!0}(t),this._milliseconds=+h+1e3*l+6e4*u+1e3*o*60*60,this._days=+a+7*r,this._months=+i+3*s+12*n,this._data={},this._locale=dt(),this._bubble()}function Ut(e){return e instanceof Ct}function Ht(e){return e<0?-1*Math.round(-1*e):Math.round(e)}function Ft(e,n){C(e,0,0,function(){var e=this.utcOffset(),t="+";return e<0&&(e=-e,t="-"),t+T(~~(e/60),2)+n+T(~~e%60,2)})}Ft("Z",":"),Ft("ZZ",""),ce("Z",he),ce("ZZ",he),ye(["Z","ZZ"],function(e,t,n){n._useUTC=!0,n._tzm=Vt(he,e)});var Lt=/([\+\-]|\d\d)/gi;function Vt(e,t){var n,s,i=(t||"").match(e);return null===i?null:0===(s=60*(n=((i[i.length-1]||[])+"").match(Lt)||["-",0,0])[1]+Z(n[2]))?0:"+"===n[0]?s:-s}function Gt(e,t){var n,s;return t._isUTC?(n=t.clone(),s=(M(e)||a(e)?e.valueOf():Tt(e).valueOf())-n.valueOf(),n._d.setTime(n._d.valueOf()+s),f.updateOffset(n,!1),n):Tt(e).local()}function Et(e){return-Math.round(e._d.getTimezoneOffset())}function At(){return!!this.isValid()&&(this._isUTC&&0===this._offset)}f.updateOffset=function(){};var jt=/^(-|\+)?(?:(\d*)[. ])?(\d+):(\d+)(?::(\d+)(\.\d*)?)?$/,It=/^(-|\+)?P(?:([-+]?[0-9,.]*)Y)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)W)?(?:([-+]?[0-9,.]*)D)?(?:T(?:([-+]?[0-9,.]*)H)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)S)?)?$/;function Zt(e,t){var n,s,i,r=e,a=null;return Ut(e)?r={ms:e._milliseconds,d:e._days,M:e._months}:h(e)||!isNaN(+e)?(r={},t?r[t]=+e:r.milliseconds=+e):(a=jt.exec(e))?(n="-"===a[1]?-1:1,r={y:0,d:Z(a[ke])*n,h:Z(a[Me])*n,m:Z(a[De])*n,s:Z(a[Se])*n,ms:Z(Ht(1e3*a[Ye]))*n}):(a=It.exec(e))?(n="-"===a[1]?-1:1,r={y:zt(a[2],n),M:zt(a[3],n),w:zt(a[4],n),d:zt(a[5],n),h:zt(a[6],n),m:zt(a[7],n),s:zt(a[8],n)}):null==r?r={}:"object"==typeof r&&("from"in r||"to"in r)&&(i=function(e,t){var n;if(!e.isValid()||!t.isValid())return{milliseconds:0,months:0};t=Gt(t,e),e.isBefore(t)?n=$t(e,t):((n=$t(t,e)).milliseconds=-n.milliseconds,n.months=-n.months);return n}(Tt(r.from),Tt(r.to)),(r={}).ms=i.milliseconds,r.M=i.months),s=new Ct(r),Ut(e)&&m(e,"_locale")&&(s._locale=e._locale),Ut(e)&&m(e,"_isValid")&&(s._isValid=e._isValid),s}function zt(e,t){var n=e&&parseFloat(e.replace(",","."));return(isNaN(n)?0:n)*t}function $t(e,t){var n={};return n.months=t.month()-e.month()+12*(t.year()-e.year()),e.clone().add(n.months,"M").isAfter(t)&&--n.months,n.milliseconds=t-e.clone().add(n.months,"M"),n}function qt(s,i){return function(e,t){var n;return null===t||isNaN(+t)||(Y(i,"moment()."+i+"(period, number) is deprecated. Please use moment()."+i+"(number, period). See http://momentjs.com/guides/#/warnings/add-inverted-param/ for more info."),n=e,e=t,t=n),Bt(this,Zt(e,t),s),this}}function Bt(e,t,n,s){var i=t._milliseconds,r=Ht(t._days),a=Ht(t._months);e.isValid()&&(s=null==s||s,a&&Ce(e,$(e,"Month")+a*n),r&&q(e,"Date",$(e,"Date")+r*n),i&&e._d.setTime(e._d.valueOf()+i*n),s&&f.updateOffset(e,r||a))}Zt.fn=Ct.prototype,Zt.invalid=function(){return Zt(NaN)};var Jt=qt(1,"add"),Qt=qt(-1,"subtract");function Xt(e){return"string"==typeof e||e instanceof String}function Kt(e){return M(e)||a(e)||Xt(e)||h(e)||function(t){var e=o(t),n=!1;e&&(n=0===t.filter(function(e){return!h(e)&&Xt(t)}).length);return e&&n}(e)||function(e){var t,n,s=u(e)&&!l(e),i=!1,r=["years","year","y","months","month","M","days","day","d","dates","date","D","hours","hour","h","minutes","minute","m","seconds","second","s","milliseconds","millisecond","ms"];for(t=0;t<r.length;t+=1)n=r[t],i=i||m(e,n);return s&&i}(e)||null==e}function en(e,t){if(e.date()<t.date())return-en(t,e);var n=12*(t.year()-e.year())+(t.month()-e.month()),s=e.clone().add(n,"months"),i=t-s<0?(t-s)/(s-e.clone().add(n-1,"months")):(t-s)/(e.clone().add(1+n,"months")-s);return-(n+i)||0}function tn(e){var t;return void 0===e?this._locale._abbr:(null!=(t=dt(e))&&(this._locale=t),this)}f.defaultFormat="YYYY-MM-DDTHH:mm:ssZ",f.defaultFormatUtc="YYYY-MM-DDTHH:mm:ss[Z]";var nn=n("moment().lang() is deprecated. Instead, use moment().localeData() to get the language configuration. Use moment().locale() to change languages.",function(e){return void 0===e?this.localeData():this.locale(e)});function sn(){return this._locale}var rn=126227808e5;function an(e,t){return(e%t+t)%t}function on(e,t,n){return e<100&&0<=e?new Date(e+400,t,n)-rn:new Date(e,t,n).valueOf()}function un(e,t,n){return e<100&&0<=e?Date.UTC(e+400,t,n)-rn:Date.UTC(e,t,n)}function ln(e,t){return t.erasAbbrRegex(e)}function hn(){for(var e=[],t=[],n=[],s=[],i=this.eras(),r=0,a=i.length;r<a;++r)t.push(me(i[r].name)),e.push(me(i[r].abbr)),n.push(me(i[r].narrow)),s.push(me(i[r].name)),s.push(me(i[r].abbr)),s.push(me(i[r].narrow));this._erasRegex=new RegExp("^("+s.join("|")+")","i"),this._erasNameRegex=new RegExp("^("+t.join("|")+")","i"),this._erasAbbrRegex=new RegExp("^("+e.join("|")+")","i"),this._erasNarrowRegex=new RegExp("^("+n.join("|")+")","i")}function dn(e,t){C(0,[e,e.length],0,t)}function cn(e,t,n,s,i){var r;return null==e?Ae(this,s,i).year:((r=je(e,s,i))<t&&(t=r),function(e,t,n,s,i){var r=Ee(e,t,n,s,i),a=Ve(r.year,0,r.dayOfYear);return this.year(a.getUTCFullYear()),this.month(a.getUTCMonth()),this.date(a.getUTCDate()),this}.call(this,e,t,n,s,i))}C("N",0,0,"eraAbbr"),C("NN",0,0,"eraAbbr"),C("NNN",0,0,"eraAbbr"),C("NNNN",0,0,"eraName"),C("NNNNN",0,0,"eraNarrow"),C("y",["y",1],"yo","eraYear"),C("y",["yy",2],0,"eraYear"),C("y",["yyy",3],0,"eraYear"),C("y",["yyyy",4],0,"eraYear"),ce("N",ln),ce("NN",ln),ce("NNN",ln),ce("NNNN",function(e,t){return t.erasNameRegex(e)}),ce("NNNNN",function(e,t){return t.erasNarrowRegex(e)}),ye(["N","NN","NNN","NNNN","NNNNN"],function(e,t,n,s){var i=n._locale.erasParse(e,s,n._strict);i?y(n).era=i:y(n).invalidEra=e}),ce("y",oe),ce("yy",oe),ce("yyy",oe),ce("yyyy",oe),ce("yo",function(e,t){return t._eraYearOrdinalRegex||oe}),ye(["y","yy","yyy","yyyy"],pe),ye(["yo"],function(e,t,n,s){var i;n._locale._eraYearOrdinalRegex&&(i=e.match(n._locale._eraYearOrdinalRegex)),n._locale.eraYearOrdinalParse?t[pe]=n._locale.eraYearOrdinalParse(e,i):t[pe]=parseInt(e,10)}),C(0,["gg",2],0,function(){return this.weekYear()%100}),C(0,["GG",2],0,function(){return this.isoWeekYear()%100}),dn("gggg","weekYear"),dn("ggggg","weekYear"),dn("GGGG","isoWeekYear"),dn("GGGGG","isoWeekYear"),L("weekYear","gg"),L("isoWeekYear","GG"),A("weekYear",1),A("isoWeekYear",1),ce("G",ue),ce("g",ue),ce("GG",te,Q),ce("gg",te,Q),ce("GGGG",re,K),ce("gggg",re,K),ce("GGGGG",ae,ee),ce("ggggg",ae,ee),ge(["gggg","ggggg","GGGG","GGGGG"],function(e,t,n,s){t[s.substr(0,2)]=Z(e)}),ge(["gg","GG"],function(e,t,n,s){t[s]=f.parseTwoDigitYear(e)}),C("Q",0,"Qo","quarter"),L("quarter","Q"),A("quarter",7),ce("Q",J),ye("Q",function(e,t){t[ve]=3*(Z(e)-1)}),C("D",["DD",2],"Do","date"),L("date","D"),A("date",9),ce("D",te),ce("DD",te,Q),ce("Do",function(e,t){return e?t._dayOfMonthOrdinalParse||t._ordinalParse:t._dayOfMonthOrdinalParseLenient}),ye(["D","DD"],ke),ye("Do",function(e,t){t[ke]=Z(e.match(te)[0])});var fn=z("Date",!0);C("DDD",["DDDD",3],"DDDo","dayOfYear"),L("dayOfYear","DDD"),A("dayOfYear",4),ce("DDD",ie),ce("DDDD",X),ye(["DDD","DDDD"],function(e,t,n){n._dayOfYear=Z(e)}),C("m",["mm",2],0,"minute"),L("minute","m"),A("minute",14),ce("m",te),ce("mm",te,Q),ye(["m","mm"],De);var mn=z("Minutes",!1);C("s",["ss",2],0,"second"),L("second","s"),A("second",15),ce("s",te),ce("ss",te,Q),ye(["s","ss"],Se);var _n,yn,gn=z("Seconds",!1);for(C("S",0,0,function(){return~~(this.millisecond()/100)}),C(0,["SS",2],0,function(){return~~(this.millisecond()/10)}),C(0,["SSS",3],0,"millisecond"),C(0,["SSSS",4],0,function(){return 10*this.millisecond()}),C(0,["SSSSS",5],0,function(){return 100*this.millisecond()}),C(0,["SSSSSS",6],0,function(){return 1e3*this.millisecond()}),C(0,["SSSSSSS",7],0,function(){return 1e4*this.millisecond()}),C(0,["SSSSSSSS",8],0,function(){return 1e5*this.millisecond()}),C(0,["SSSSSSSSS",9],0,function(){return 1e6*this.millisecond()}),L("millisecond","ms"),A("millisecond",16),ce("S",ie,J),ce("SS",ie,Q),ce("SSS",ie,X),_n="SSSS";_n.length<=9;_n+="S")ce(_n,oe);function wn(e,t){t[Ye]=Z(1e3*("0."+e))}for(_n="S";_n.length<=9;_n+="S")ye(_n,wn);yn=z("Milliseconds",!1),C("z",0,0,"zoneAbbr"),C("zz",0,0,"zoneName");var pn=k.prototype;function vn(e){return e}pn.add=Jt,pn.calendar=function(e,t){1===arguments.length&&(arguments[0]?Kt(arguments[0])?(e=arguments[0],t=void 0):function(e){for(var t=u(e)&&!l(e),n=!1,s=["sameDay","nextDay","lastDay","nextWeek","lastWeek","sameElse"],i=0;i<s.length;i+=1)n=n||m(e,s[i]);return t&&n}(arguments[0])&&(t=arguments[0],e=void 0):t=e=void 0);var n=e||Tt(),s=Gt(n,this).startOf("day"),i=f.calendarFormat(this,s)||"sameElse",r=t&&(O(t[i])?t[i].call(this,n):t[i]);return this.format(r||this.localeData().calendar(i,this,Tt(n)))},pn.clone=function(){return new k(this)},pn.diff=function(e,t,n){var s,i,r;if(!this.isValid())return NaN;if(!(s=Gt(e,this)).isValid())return NaN;switch(i=6e4*(s.utcOffset()-this.utcOffset()),t=V(t)){case"year":r=en(this,s)/12;break;case"month":r=en(this,s);break;case"quarter":r=en(this,s)/3;break;case"second":r=(this-s)/1e3;break;case"minute":r=(this-s)/6e4;break;case"hour":r=(this-s)/36e5;break;case"day":r=(this-s-i)/864e5;break;case"week":r=(this-s-i)/6048e5;break;default:r=this-s}return n?r:I(r)},pn.endOf=function(e){var t,n;if(void 0===(e=V(e))||"millisecond"===e||!this.isValid())return this;switch(n=this._isUTC?un:on,e){case"year":t=n(this.year()+1,0,1)-1;break;case"quarter":t=n(this.year(),this.month()-this.month()%3+3,1)-1;break;case"month":t=n(this.year(),this.month()+1,1)-1;break;case"week":t=n(this.year(),this.month(),this.date()-this.weekday()+7)-1;break;case"isoWeek":t=n(this.year(),this.month(),this.date()-(this.isoWeekday()-1)+7)-1;break;case"day":case"date":t=n(this.year(),this.month(),this.date()+1)-1;break;case"hour":t=this._d.valueOf(),t+=36e5-an(t+(this._isUTC?0:6e4*this.utcOffset()),36e5)-1;break;case"minute":t=this._d.valueOf(),t+=6e4-an(t,6e4)-1;break;case"second":t=this._d.valueOf(),t+=1e3-an(t,1e3)-1;break}return this._d.setTime(t),f.updateOffset(this,!0),this},pn.format=function(e){e=e||(this.isUtc()?f.defaultFormatUtc:f.defaultFormat);var t=U(this,e);return this.localeData().postformat(t)},pn.from=function(e,t){return this.isValid()&&(M(e)&&e.isValid()||Tt(e).isValid())?Zt({to:this,from:e}).locale(this.locale()).humanize(!t):this.localeData().invalidDate()},pn.fromNow=function(e){return this.from(Tt(),e)},pn.to=function(e,t){return this.isValid()&&(M(e)&&e.isValid()||Tt(e).isValid())?Zt({from:this,to:e}).locale(this.locale()).humanize(!t):this.localeData().invalidDate()},pn.toNow=function(e){return this.to(Tt(),e)},pn.get=function(e){return O(this[e=V(e)])?this[e]():this},pn.invalidAt=function(){return y(this).overflow},pn.isAfter=function(e,t){var n=M(e)?e:Tt(e);return!(!this.isValid()||!n.isValid())&&("millisecond"===(t=V(t)||"millisecond")?this.valueOf()>n.valueOf():n.valueOf()<this.clone().startOf(t).valueOf())},pn.isBefore=function(e,t){var n=M(e)?e:Tt(e);return!(!this.isValid()||!n.isValid())&&("millisecond"===(t=V(t)||"millisecond")?this.valueOf()<n.valueOf():this.clone().endOf(t).valueOf()<n.valueOf())},pn.isBetween=function(e,t,n,s){var i=M(e)?e:Tt(e),r=M(t)?t:Tt(t);return!!(this.isValid()&&i.isValid()&&r.isValid())&&(("("===(s=s||"()")[0]?this.isAfter(i,n):!this.isBefore(i,n))&&(")"===s[1]?this.isBefore(r,n):!this.isAfter(r,n)))},pn.isSame=function(e,t){var n,s=M(e)?e:Tt(e);return!(!this.isValid()||!s.isValid())&&("millisecond"===(t=V(t)||"millisecond")?this.valueOf()===s.valueOf():(n=s.valueOf(),this.clone().startOf(t).valueOf()<=n&&n<=this.clone().endOf(t).valueOf()))},pn.isSameOrAfter=function(e,t){return this.isSame(e,t)||this.isAfter(e,t)},pn.isSameOrBefore=function(e,t){return this.isSame(e,t)||this.isBefore(e,t)},pn.isValid=function(){return g(this)},pn.lang=nn,pn.locale=tn,pn.localeData=sn,pn.max=Pt,pn.min=Nt,pn.parsingFlags=function(){return c({},y(this))},pn.set=function(e,t){if("object"==typeof e)for(var n=function(e){var t,n=[];for(t in e)m(e,t)&&n.push({unit:t,priority:E[t]});return n.sort(function(e,t){return e.priority-t.priority}),n}(e=G(e)),s=0;s<n.length;s++)this[n[s].unit](e[n[s].unit]);else if(O(this[e=V(e)]))return this[e](t);return this},pn.startOf=function(e){var t,n;if(void 0===(e=V(e))||"millisecond"===e||!this.isValid())return this;switch(n=this._isUTC?un:on,e){case"year":t=n(this.year(),0,1);break;case"quarter":t=n(this.year(),this.month()-this.month()%3,1);break;case"month":t=n(this.year(),this.month(),1);break;case"week":t=n(this.year(),this.month(),this.date()-this.weekday());break;case"isoWeek":t=n(this.year(),this.month(),this.date()-(this.isoWeekday()-1));break;case"day":case"date":t=n(this.year(),this.month(),this.date());break;case"hour":t=this._d.valueOf(),t-=an(t+(this._isUTC?0:6e4*this.utcOffset()),36e5);break;case"minute":t=this._d.valueOf(),t-=an(t,6e4);break;case"second":t=this._d.valueOf(),t-=an(t,1e3);break}return this._d.setTime(t),f.updateOffset(this,!0),this},pn.subtract=Qt,pn.toArray=function(){var e=this;return[e.year(),e.month(),e.date(),e.hour(),e.minute(),e.second(),e.millisecond()]},pn.toObject=function(){var e=this;return{years:e.year(),months:e.month(),date:e.date(),hours:e.hours(),minutes:e.minutes(),seconds:e.seconds(),milliseconds:e.milliseconds()}},pn.toDate=function(){return new Date(this.valueOf())},pn.toISOString=function(e){if(!this.isValid())return null;var t=!0!==e,n=t?this.clone().utc():this;return n.year()<0||9999<n.year()?U(n,t?"YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]":"YYYYYY-MM-DD[T]HH:mm:ss.SSSZ"):O(Date.prototype.toISOString)?t?this.toDate().toISOString():new Date(this.valueOf()+60*this.utcOffset()*1e3).toISOString().replace("Z",U(n,"Z")):U(n,t?"YYYY-MM-DD[T]HH:mm:ss.SSS[Z]":"YYYY-MM-DD[T]HH:mm:ss.SSSZ")},pn.inspect=function(){if(!this.isValid())return"moment.invalid(/* "+this._i+" */)";var e,t,n,s="moment",i="";return this.isLocal()||(s=0===this.utcOffset()?"moment.utc":"moment.parseZone",i="Z"),e="["+s+'("]',t=0<=this.year()&&this.year()<=9999?"YYYY":"YYYYYY",n=i+'[")]',this.format(e+t+"-MM-DD[T]HH:mm:ss.SSS"+n)},"undefined"!=typeof Symbol&&null!=Symbol.for&&(pn[Symbol.for("nodejs.util.inspect.custom")]=function(){return"Moment<"+this.format()+">"}),pn.toJSON=function(){return this.isValid()?this.toISOString():null},pn.toString=function(){return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")},pn.unix=function(){return Math.floor(this.valueOf()/1e3)},pn.valueOf=function(){return this._d.valueOf()-6e4*(this._offset||0)},pn.creationData=function(){return{input:this._i,format:this._f,locale:this._locale,isUTC:this._isUTC,strict:this._strict}},pn.eraName=function(){for(var e,t=this.localeData().eras(),n=0,s=t.length;n<s;++n){if(e=this.clone().startOf("day").valueOf(),t[n].since<=e&&e<=t[n].until)return t[n].name;if(t[n].until<=e&&e<=t[n].since)return t[n].name}return""},pn.eraNarrow=function(){for(var e,t=this.localeData().eras(),n=0,s=t.length;n<s;++n){if(e=this.clone().startOf("day").valueOf(),t[n].since<=e&&e<=t[n].until)return t[n].narrow;if(t[n].until<=e&&e<=t[n].since)return t[n].narrow}return""},pn.eraAbbr=function(){for(var e,t=this.localeData().eras(),n=0,s=t.length;n<s;++n){if(e=this.clone().startOf("day").valueOf(),t[n].since<=e&&e<=t[n].until)return t[n].abbr;if(t[n].until<=e&&e<=t[n].since)return t[n].abbr}return""},pn.eraYear=function(){for(var e,t,n=this.localeData().eras(),s=0,i=n.length;s<i;++s)if(e=n[s].since<=n[s].until?1:-1,t=this.clone().startOf("day").valueOf(),n[s].since<=t&&t<=n[s].until||n[s].until<=t&&t<=n[s].since)return(this.year()-f(n[s].since).year())*e+n[s].offset;return this.year()},pn.year=Le,pn.isLeapYear=function(){return j(this.year())},pn.weekYear=function(e){return cn.call(this,e,this.week(),this.weekday(),this.localeData()._week.dow,this.localeData()._week.doy)},pn.isoWeekYear=function(e){return cn.call(this,e,this.isoWeek(),this.isoWeekday(),1,4)},pn.quarter=pn.quarters=function(e){return null==e?Math.ceil((this.month()+1)/3):this.month(3*(e-1)+this.month()%3)},pn.month=Ue,pn.daysInMonth=function(){return xe(this.year(),this.month())},pn.week=pn.weeks=function(e){var t=this.localeData().week(this);return null==e?t:this.add(7*(e-t),"d")},pn.isoWeek=pn.isoWeeks=function(e){var t=Ae(this,1,4).week;return null==e?t:this.add(7*(e-t),"d")},pn.weeksInYear=function(){var e=this.localeData()._week;return je(this.year(),e.dow,e.doy)},pn.weeksInWeekYear=function(){var e=this.localeData()._week;return je(this.weekYear(),e.dow,e.doy)},pn.isoWeeksInYear=function(){return je(this.year(),1,4)},pn.isoWeeksInISOWeekYear=function(){return je(this.isoWeekYear(),1,4)},pn.date=fn,pn.day=pn.days=function(e){if(!this.isValid())return null!=e?this:NaN;var t,n,s=this._isUTC?this._d.getUTCDay():this._d.getDay();return null!=e?(t=e,n=this.localeData(),e="string"!=typeof t?t:isNaN(t)?"number"==typeof(t=n.weekdaysParse(t))?t:null:parseInt(t,10),this.add(e-s,"d")):s},pn.weekday=function(e){if(!this.isValid())return null!=e?this:NaN;var t=(this.day()+7-this.localeData()._week.dow)%7;return null==e?t:this.add(e-t,"d")},pn.isoWeekday=function(e){if(!this.isValid())return null!=e?this:NaN;if(null==e)return this.day()||7;var t,n,s=(t=e,n=this.localeData(),"string"==typeof t?n.weekdaysParse(t)%7||7:isNaN(t)?null:t);return this.day(this.day()%7?s:s-7)},pn.dayOfYear=function(e){var t=Math.round((this.clone().startOf("day")-this.clone().startOf("year"))/864e5)+1;return null==e?t:this.add(e-t,"d")},pn.hour=pn.hours=tt,pn.minute=pn.minutes=mn,pn.second=pn.seconds=gn,pn.millisecond=pn.milliseconds=yn,pn.utcOffset=function(e,t,n){var s,i=this._offset||0;if(!this.isValid())return null!=e?this:NaN;if(null==e)return this._isUTC?i:Et(this);if("string"==typeof e){if(null===(e=Vt(he,e)))return this}else Math.abs(e)<16&&!n&&(e*=60);return!this._isUTC&&t&&(s=Et(this)),this._offset=e,this._isUTC=!0,null!=s&&this.add(s,"m"),i!==e&&(!t||this._changeInProgress?Bt(this,Zt(e-i,"m"),1,!1):this._changeInProgress||(this._changeInProgress=!0,f.updateOffset(this,!0),this._changeInProgress=null)),this},pn.utc=function(e){return this.utcOffset(0,e)},pn.local=function(e){return this._isUTC&&(this.utcOffset(0,e),this._isUTC=!1,e&&this.subtract(Et(this),"m")),this},pn.parseZone=function(){var e;return null!=this._tzm?this.utcOffset(this._tzm,!1,!0):"string"==typeof this._i&&(null!=(e=Vt(le,this._i))?this.utcOffset(e):this.utcOffset(0,!0)),this},pn.hasAlignedHourOffset=function(e){return!!this.isValid()&&(e=e?Tt(e).utcOffset():0,(this.utcOffset()-e)%60==0)},pn.isDST=function(){return this.utcOffset()>this.clone().month(0).utcOffset()||this.utcOffset()>this.clone().month(5).utcOffset()},pn.isLocal=function(){return!!this.isValid()&&!this._isUTC},pn.isUtcOffset=function(){return!!this.isValid()&&this._isUTC},pn.isUtc=At,pn.isUTC=At,pn.zoneAbbr=function(){return this._isUTC?"UTC":""},pn.zoneName=function(){return this._isUTC?"Coordinated Universal Time":""},pn.dates=n("dates accessor is deprecated. Use date instead.",fn),pn.months=n("months accessor is deprecated. Use month instead",Ue),pn.years=n("years accessor is deprecated. Use year instead",Le),pn.zone=n("moment().zone is deprecated, use moment().utcOffset instead. http://momentjs.com/guides/#/warnings/zone/",function(e,t){return null!=e?("string"!=typeof e&&(e=-e),this.utcOffset(e,t),this):-this.utcOffset()}),pn.isDSTShifted=n("isDSTShifted is deprecated. See http://momentjs.com/guides/#/warnings/dst-shifted/ for more information",function(){if(!r(this._isDSTShifted))return this._isDSTShifted;var e,t={};return v(t,this),(t=bt(t))._a?(e=(t._isUTC?_:Tt)(t._a),this._isDSTShifted=this.isValid()&&0<function(e,t,n){for(var s=Math.min(e.length,t.length),i=Math.abs(e.length-t.length),r=0,a=0;a<s;a++)(n&&e[a]!==t[a]||!n&&Z(e[a])!==Z(t[a]))&&r++;return r+i}(t._a,e.toArray())):this._isDSTShifted=!1,this._isDSTShifted});var kn=x.prototype;function Mn(e,t,n,s){var i=dt(),r=_().set(s,t);return i[n](r,e)}function Dn(e,t,n){if(h(e)&&(t=e,e=void 0),e=e||"",null!=t)return Mn(e,t,n,"month");for(var s=[],i=0;i<12;i++)s[i]=Mn(e,i,n,"month");return s}function Sn(e,t,n,s){t=("boolean"==typeof e?h(t)&&(n=t,t=void 0):(t=e,e=!1,h(n=t)&&(n=t,t=void 0)),t||"");var i,r=dt(),a=e?r._week.dow:0,o=[];if(null!=n)return Mn(t,(n+a)%7,s,"day");for(i=0;i<7;i++)o[i]=Mn(t,(i+a)%7,s,"day");return o}kn.calendar=function(e,t,n){var s=this._calendar[e]||this._calendar.sameElse;return O(s)?s.call(t,n):s},kn.longDateFormat=function(e){var t=this._longDateFormat[e],n=this._longDateFormat[e.toUpperCase()];return t||!n?t:(this._longDateFormat[e]=n.match(N).map(function(e){return"MMMM"===e||"MM"===e||"DD"===e||"dddd"===e?e.slice(1):e}).join(""),this._longDateFormat[e])},kn.invalidDate=function(){return this._invalidDate},kn.ordinal=function(e){return this._ordinal.replace("%d",e)},kn.preparse=vn,kn.postformat=vn,kn.relativeTime=function(e,t,n,s){var i=this._relativeTime[n];return O(i)?i(e,t,n,s):i.replace(/%d/i,e)},kn.pastFuture=function(e,t){var n=this._relativeTime[0<e?"future":"past"];return O(n)?n(t):n.replace(/%s/i,t)},kn.set=function(e){var t,n;for(n in e)m(e,n)&&(O(t=e[n])?this[n]=t:this["_"+n]=t);this._config=e,this._dayOfMonthOrdinalParseLenient=new RegExp((this._dayOfMonthOrdinalParse.source||this._ordinalParse.source)+"|"+/\d{1,2}/.source)},kn.eras=function(e,t){for(var n,s=this._eras||dt("en")._eras,i=0,r=s.length;i<r;++i){switch(typeof s[i].since){case"string":n=f(s[i].since).startOf("day"),s[i].since=n.valueOf();break}switch(typeof s[i].until){case"undefined":s[i].until=1/0;break;case"string":n=f(s[i].until).startOf("day").valueOf(),s[i].until=n.valueOf();break}}return s},kn.erasParse=function(e,t,n){var s,i,r,a,o,u=this.eras();for(e=e.toUpperCase(),s=0,i=u.length;s<i;++s)if(r=u[s].name.toUpperCase(),a=u[s].abbr.toUpperCase(),o=u[s].narrow.toUpperCase(),n)switch(t){case"N":case"NN":case"NNN":if(a===e)return u[s];break;case"NNNN":if(r===e)return u[s];break;case"NNNNN":if(o===e)return u[s];break}else if(0<=[r,a,o].indexOf(e))return u[s]},kn.erasConvertYear=function(e,t){var n=e.since<=e.until?1:-1;return void 0===t?f(e.since).year():f(e.since).year()+(t-e.offset)*n},kn.erasAbbrRegex=function(e){return m(this,"_erasAbbrRegex")||hn.call(this),e?this._erasAbbrRegex:this._erasRegex},kn.erasNameRegex=function(e){return m(this,"_erasNameRegex")||hn.call(this),e?this._erasNameRegex:this._erasRegex},kn.erasNarrowRegex=function(e){return m(this,"_erasNarrowRegex")||hn.call(this),e?this._erasNarrowRegex:this._erasRegex},kn.months=function(e,t){return e?o(this._months)?this._months[e.month()]:this._months[(this._months.isFormat||Pe).test(t)?"format":"standalone"][e.month()]:o(this._months)?this._months:this._months.standalone},kn.monthsShort=function(e,t){return e?o(this._monthsShort)?this._monthsShort[e.month()]:this._monthsShort[Pe.test(t)?"format":"standalone"][e.month()]:o(this._monthsShort)?this._monthsShort:this._monthsShort.standalone},kn.monthsParse=function(e,t,n){var s,i,r;if(this._monthsParseExact)return function(e,t,n){var s,i,r,a=e.toLocaleLowerCase();if(!this._monthsParse)for(this._monthsParse=[],this._longMonthsParse=[],this._shortMonthsParse=[],s=0;s<12;++s)r=_([2e3,s]),this._shortMonthsParse[s]=this.monthsShort(r,"").toLocaleLowerCase(),this._longMonthsParse[s]=this.months(r,"").toLocaleLowerCase();return n?"MMM"===t?-1!==(i=we.call(this._shortMonthsParse,a))?i:null:-1!==(i=we.call(this._longMonthsParse,a))?i:null:"MMM"===t?-1!==(i=we.call(this._shortMonthsParse,a))||-1!==(i=we.call(this._longMonthsParse,a))?i:null:-1!==(i=we.call(this._longMonthsParse,a))||-1!==(i=we.call(this._shortMonthsParse,a))?i:null}.call(this,e,t,n);for(this._monthsParse||(this._monthsParse=[],this._longMonthsParse=[],this._shortMonthsParse=[]),s=0;s<12;s++){if(i=_([2e3,s]),n&&!this._longMonthsParse[s]&&(this._longMonthsParse[s]=new RegExp("^"+this.months(i,"").replace(".","")+"$","i"),this._shortMonthsParse[s]=new RegExp("^"+this.monthsShort(i,"").replace(".","")+"$","i")),n||this._monthsParse[s]||(r="^"+this.months(i,"")+"|^"+this.monthsShort(i,""),this._monthsParse[s]=new RegExp(r.replace(".",""),"i")),n&&"MMMM"===t&&this._longMonthsParse[s].test(e))return s;if(n&&"MMM"===t&&this._shortMonthsParse[s].test(e))return s;if(!n&&this._monthsParse[s].test(e))return s}},kn.monthsRegex=function(e){return this._monthsParseExact?(m(this,"_monthsRegex")||He.call(this),e?this._monthsStrictRegex:this._monthsRegex):(m(this,"_monthsRegex")||(this._monthsRegex=We),this._monthsStrictRegex&&e?this._monthsStrictRegex:this._monthsRegex)},kn.monthsShortRegex=function(e){return this._monthsParseExact?(m(this,"_monthsRegex")||He.call(this),e?this._monthsShortStrictRegex:this._monthsShortRegex):(m(this,"_monthsShortRegex")||(this._monthsShortRegex=Re),this._monthsShortStrictRegex&&e?this._monthsShortStrictRegex:this._monthsShortRegex)},kn.week=function(e){return Ae(e,this._week.dow,this._week.doy).week},kn.firstDayOfYear=function(){return this._week.doy},kn.firstDayOfWeek=function(){return this._week.dow},kn.weekdays=function(e,t){var n=o(this._weekdays)?this._weekdays:this._weekdays[e&&!0!==e&&this._weekdays.isFormat.test(t)?"format":"standalone"];return!0===e?Ie(n,this._week.dow):e?n[e.day()]:n},kn.weekdaysMin=function(e){return!0===e?Ie(this._weekdaysMin,this._week.dow):e?this._weekdaysMin[e.day()]:this._weekdaysMin},kn.weekdaysShort=function(e){return!0===e?Ie(this._weekdaysShort,this._week.dow):e?this._weekdaysShort[e.day()]:this._weekdaysShort},kn.weekdaysParse=function(e,t,n){var s,i,r;if(this._weekdaysParseExact)return function(e,t,n){var s,i,r,a=e.toLocaleLowerCase();if(!this._weekdaysParse)for(this._weekdaysParse=[],this._shortWeekdaysParse=[],this._minWeekdaysParse=[],s=0;s<7;++s)r=_([2e3,1]).day(s),this._minWeekdaysParse[s]=this.weekdaysMin(r,"").toLocaleLowerCase(),this._shortWeekdaysParse[s]=this.weekdaysShort(r,"").toLocaleLowerCase(),this._weekdaysParse[s]=this.weekdays(r,"").toLocaleLowerCase();return n?"dddd"===t?-1!==(i=we.call(this._weekdaysParse,a))?i:null:"ddd"===t?-1!==(i=we.call(this._shortWeekdaysParse,a))?i:null:-1!==(i=we.call(this._minWeekdaysParse,a))?i:null:"dddd"===t?-1!==(i=we.call(this._weekdaysParse,a))||-1!==(i=we.call(this._shortWeekdaysParse,a))||-1!==(i=we.call(this._minWeekdaysParse,a))?i:null:"ddd"===t?-1!==(i=we.call(this._shortWeekdaysParse,a))||-1!==(i=we.call(this._weekdaysParse,a))||-1!==(i=we.call(this._minWeekdaysParse,a))?i:null:-1!==(i=we.call(this._minWeekdaysParse,a))||-1!==(i=we.call(this._weekdaysParse,a))||-1!==(i=we.call(this._shortWeekdaysParse,a))?i:null}.call(this,e,t,n);for(this._weekdaysParse||(this._weekdaysParse=[],this._minWeekdaysParse=[],this._shortWeekdaysParse=[],this._fullWeekdaysParse=[]),s=0;s<7;s++){if(i=_([2e3,1]).day(s),n&&!this._fullWeekdaysParse[s]&&(this._fullWeekdaysParse[s]=new RegExp("^"+this.weekdays(i,"").replace(".","\\.?")+"$","i"),this._shortWeekdaysParse[s]=new RegExp("^"+this.weekdaysShort(i,"").replace(".","\\.?")+"$","i"),this._minWeekdaysParse[s]=new RegExp("^"+this.weekdaysMin(i,"").replace(".","\\.?")+"$","i")),this._weekdaysParse[s]||(r="^"+this.weekdays(i,"")+"|^"+this.weekdaysShort(i,"")+"|^"+this.weekdaysMin(i,""),this._weekdaysParse[s]=new RegExp(r.replace(".",""),"i")),n&&"dddd"===t&&this._fullWeekdaysParse[s].test(e))return s;if(n&&"ddd"===t&&this._shortWeekdaysParse[s].test(e))return s;if(n&&"dd"===t&&this._minWeekdaysParse[s].test(e))return s;if(!n&&this._weekdaysParse[s].test(e))return s}},kn.weekdaysRegex=function(e){return this._weekdaysParseExact?(m(this,"_weekdaysRegex")||Qe.call(this),e?this._weekdaysStrictRegex:this._weekdaysRegex):(m(this,"_weekdaysRegex")||(this._weekdaysRegex=qe),this._weekdaysStrictRegex&&e?this._weekdaysStrictRegex:this._weekdaysRegex)},kn.weekdaysShortRegex=function(e){return this._weekdaysParseExact?(m(this,"_weekdaysRegex")||Qe.call(this),e?this._weekdaysShortStrictRegex:this._weekdaysShortRegex):(m(this,"_weekdaysShortRegex")||(this._weekdaysShortRegex=Be),this._weekdaysShortStrictRegex&&e?this._weekdaysShortStrictRegex:this._weekdaysShortRegex)},kn.weekdaysMinRegex=function(e){return this._weekdaysParseExact?(m(this,"_weekdaysRegex")||Qe.call(this),e?this._weekdaysMinStrictRegex:this._weekdaysMinRegex):(m(this,"_weekdaysMinRegex")||(this._weekdaysMinRegex=Je),this._weekdaysMinStrictRegex&&e?this._weekdaysMinStrictRegex:this._weekdaysMinRegex)},kn.isPM=function(e){return"p"===(e+"").toLowerCase().charAt(0)},kn.meridiem=function(e,t,n){return 11<e?n?"pm":"PM":n?"am":"AM"},lt("en",{eras:[{since:"0001-01-01",until:1/0,offset:1,name:"Anno Domini",narrow:"AD",abbr:"AD"},{since:"0000-12-31",until:-1/0,offset:1,name:"Before Christ",narrow:"BC",abbr:"BC"}],dayOfMonthOrdinalParse:/\d{1,2}(th|st|nd|rd)/,ordinal:function(e){var t=e%10;return e+(1===Z(e%100/10)?"th":1==t?"st":2==t?"nd":3==t?"rd":"th")}}),f.lang=n("moment.lang is deprecated. Use moment.locale instead.",lt),f.langData=n("moment.langData is deprecated. Use moment.localeData instead.",dt);var Yn=Math.abs;function On(e,t,n,s){var i=Zt(t,n);return e._milliseconds+=s*i._milliseconds,e._days+=s*i._days,e._months+=s*i._months,e._bubble()}function bn(e){return e<0?Math.floor(e):Math.ceil(e)}function xn(e){return 4800*e/146097}function Tn(e){return 146097*e/4800}function Nn(e){return function(){return this.as(e)}}var Pn=Nn("ms"),Rn=Nn("s"),Wn=Nn("m"),Cn=Nn("h"),Un=Nn("d"),Hn=Nn("w"),Fn=Nn("M"),Ln=Nn("Q"),Vn=Nn("y");function Gn(e){return function(){return this.isValid()?this._data[e]:NaN}}var En=Gn("milliseconds"),An=Gn("seconds"),jn=Gn("minutes"),In=Gn("hours"),Zn=Gn("days"),zn=Gn("months"),$n=Gn("years");var qn=Math.round,Bn={ss:44,s:45,m:45,h:22,d:26,w:null,M:11};function Jn(e,t,n,s){var i=Zt(e).abs(),r=qn(i.as("s")),a=qn(i.as("m")),o=qn(i.as("h")),u=qn(i.as("d")),l=qn(i.as("M")),h=qn(i.as("w")),d=qn(i.as("y")),c=(r<=n.ss?["s",r]:r<n.s&&["ss",r])||a<=1&&["m"]||a<n.m&&["mm",a]||o<=1&&["h"]||o<n.h&&["hh",o]||u<=1&&["d"]||u<n.d&&["dd",u];return null!=n.w&&(c=c||h<=1&&["w"]||h<n.w&&["ww",h]),(c=c||l<=1&&["M"]||l<n.M&&["MM",l]||d<=1&&["y"]||["yy",d])[2]=t,c[3]=0<+e,c[4]=s,function(e,t,n,s,i){return i.relativeTime(t||1,!!n,e,s)}.apply(null,c)}var Qn=Math.abs;function Xn(e){return(0<e)-(e<0)||+e}function Kn(){if(!this.isValid())return this.localeData().invalidDate();var e,t,n,s,i,r,a,o,u=Qn(this._milliseconds)/1e3,l=Qn(this._days),h=Qn(this._months),d=this.asSeconds();return d?(e=I(u/60),t=I(e/60),u%=60,e%=60,n=I(h/12),h%=12,s=u?u.toFixed(3).replace(/\.?0+$/,""):"",i=d<0?"-":"",r=Xn(this._months)!==Xn(d)?"-":"",a=Xn(this._days)!==Xn(d)?"-":"",o=Xn(this._milliseconds)!==Xn(d)?"-":"",i+"P"+(n?r+n+"Y":"")+(h?r+h+"M":"")+(l?a+l+"D":"")+(t||e||u?"T":"")+(t?o+t+"H":"")+(e?o+e+"M":"")+(u?o+s+"S":"")):"P0D"}var es=Ct.prototype;return es.isValid=function(){return this._isValid},es.abs=function(){var e=this._data;return this._milliseconds=Yn(this._milliseconds),this._days=Yn(this._days),this._months=Yn(this._months),e.milliseconds=Yn(e.milliseconds),e.seconds=Yn(e.seconds),e.minutes=Yn(e.minutes),e.hours=Yn(e.hours),e.months=Yn(e.months),e.years=Yn(e.years),this},es.add=function(e,t){return On(this,e,t,1)},es.subtract=function(e,t){return On(this,e,t,-1)},es.as=function(e){if(!this.isValid())return NaN;var t,n,s=this._milliseconds;if("month"===(e=V(e))||"quarter"===e||"year"===e)switch(t=this._days+s/864e5,n=this._months+xn(t),e){case"month":return n;case"quarter":return n/3;case"year":return n/12}else switch(t=this._days+Math.round(Tn(this._months)),e){case"week":return t/7+s/6048e5;case"day":return t+s/864e5;case"hour":return 24*t+s/36e5;case"minute":return 1440*t+s/6e4;case"second":return 86400*t+s/1e3;case"millisecond":return Math.floor(864e5*t)+s;default:throw new Error("Unknown unit "+e)}},es.asMilliseconds=Pn,es.asSeconds=Rn,es.asMinutes=Wn,es.asHours=Cn,es.asDays=Un,es.asWeeks=Hn,es.asMonths=Fn,es.asQuarters=Ln,es.asYears=Vn,es.valueOf=function(){return this.isValid()?this._milliseconds+864e5*this._days+this._months%12*2592e6+31536e6*Z(this._months/12):NaN},es._bubble=function(){var e,t,n,s,i,r=this._milliseconds,a=this._days,o=this._months,u=this._data;return 0<=r&&0<=a&&0<=o||r<=0&&a<=0&&o<=0||(r+=864e5*bn(Tn(o)+a),o=a=0),u.milliseconds=r%1e3,e=I(r/1e3),u.seconds=e%60,t=I(e/60),u.minutes=t%60,n=I(t/60),u.hours=n%24,a+=I(n/24),o+=i=I(xn(a)),a-=bn(Tn(i)),s=I(o/12),o%=12,u.days=a,u.months=o,u.years=s,this},es.clone=function(){return Zt(this)},es.get=function(e){return e=V(e),this.isValid()?this[e+"s"]():NaN},es.milliseconds=En,es.seconds=An,es.minutes=jn,es.hours=In,es.days=Zn,es.weeks=function(){return I(this.days()/7)},es.months=zn,es.years=$n,es.humanize=function(e,t){if(!this.isValid())return this.localeData().invalidDate();var n,s,i=!1,r=Bn;return"object"==typeof e&&(t=e,e=!1),"boolean"==typeof e&&(i=e),"object"==typeof t&&(r=Object.assign({},Bn,t),null!=t.s&&null==t.ss&&(r.ss=t.s-1)),n=this.localeData(),s=Jn(this,!i,r,n),i&&(s=n.pastFuture(+this,s)),n.postformat(s)},es.toISOString=Kn,es.toString=Kn,es.toJSON=Kn,es.locale=tn,es.localeData=sn,es.toIsoString=n("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)",Kn),es.lang=nn,C("X",0,0,"unix"),C("x",0,0,"valueOf"),ce("x",ue),ce("X",/[+-]?\d+(\.\d{1,3})?/),ye("X",function(e,t,n){n._d=new Date(1e3*parseFloat(e))}),ye("x",function(e,t,n){n._d=new Date(Z(e))}),f.version="2.29.0",e=Tt,f.fn=pn,f.min=function(){return Rt("isBefore",[].slice.call(arguments,0))},f.max=function(){return Rt("isAfter",[].slice.call(arguments,0))},f.now=function(){return Date.now?Date.now():+new Date},f.utc=_,f.unix=function(e){return Tt(1e3*e)},f.months=function(e,t){return Dn(e,t,"months")},f.isDate=a,f.locale=lt,f.invalid=w,f.duration=Zt,f.isMoment=M,f.weekdays=function(e,t,n){return Sn(e,t,n,"weekdays")},f.parseZone=function(){return Tt.apply(null,arguments).parseZone()},f.localeData=dt,f.isDuration=Ut,f.monthsShort=function(e,t){return Dn(e,t,"monthsShort")},f.weekdaysMin=function(e,t,n){return Sn(e,t,n,"weekdaysMin")},f.defineLocale=ht,f.updateLocale=function(e,t){var n,s,i;return null!=t?(i=st,null!=it[e]&&null!=it[e].parentLocale?it[e].set(b(it[e]._config,t)):(null!=(s=ut(e))&&(i=s._config),t=b(i,t),null==s&&(t.abbr=e),(n=new x(t)).parentLocale=it[e],it[e]=n),lt(e)):null!=it[e]&&(null!=it[e].parentLocale?(it[e]=it[e].parentLocale,e===lt()&&lt(e)):null!=it[e]&&delete it[e]),it[e]},f.locales=function(){return s(it)},f.weekdaysShort=function(e,t,n){return Sn(e,t,n,"weekdaysShort")},f.normalizeUnits=V,f.relativeTimeRounding=function(e){return void 0===e?qn:"function"==typeof e&&(qn=e,!0)},f.relativeTimeThreshold=function(e,t){return void 0!==Bn[e]&&(void 0===t?Bn[e]:(Bn[e]=t,"s"===e&&(Bn.ss=t-1),!0))},f.calendarFormat=function(e,t){var n=e.diff(t,"days",!0);return n<-6?"sameElse":n<-1?"lastWeek":n<0?"lastDay":n<1?"sameDay":n<2?"nextDay":n<7?"nextWeek":"sameElse"},f.prototype=pn,f.HTML5_FMT={DATETIME_LOCAL:"YYYY-MM-DDTHH:mm",DATETIME_LOCAL_SECONDS:"YYYY-MM-DDTHH:mm:ss",DATETIME_LOCAL_MS:"YYYY-MM-DDTHH:mm:ss.SSS",DATE:"YYYY-MM-DD",TIME:"HH:mm",TIME_SECONDS:"HH:mm:ss",TIME_MS:"HH:mm:ss.SSS",WEEK:"GGGG-[W]WW",MONTH:"YYYY-MM"},f});
      //# sourceMappingURL=moment.min.js.map
    </script>
    <script >
      /*!
      FullCalendar Standard Bundle v6.0.3
      Docs & License: https://fullcalendar.io/docs/initialize-globals
      (c) 2022 Adam Shaw
      */
      var FullCalendar=function(e){"use strict";var t,n,r,i,s,o,a,l={},c=[],d=/acit|ex(?:s|g|n|p|$)|rph|grid|ows|mnc|ntw|ine[ch]|zoo|^ord|itera/i;function u(e,t){for(var n in t)e[n]=t[n];return e}function h(e){var t=e.parentNode;t&&t.removeChild(e)}function f(e,n,r){var i,s,o,a={};for(o in n)"key"==o?i=n[o]:"ref"==o?s=n[o]:a[o]=n[o];if(arguments.length>2&&(a.children=arguments.length>3?t.call(arguments,2):r),"function"==typeof e&&null!=e.defaultProps)for(o in e.defaultProps)void 0===a[o]&&(a[o]=e.defaultProps[o]);return g(e,a,i,s,null)}function g(e,t,i,s,o){var a={type:e,props:t,key:i,ref:s,__k:null,__:null,__b:0,__e:null,__d:void 0,__c:null,__h:null,constructor:void 0,__v:null==o?++r:o};return null==o&&null!=n.vnode&&n.vnode(a),a}function p(e){return e.children}function m(e,t){this.props=e,this.context=t}function v(e,t){if(null==t)return e.__?v(e.__,e.__.__k.indexOf(e)+1):null;for(var n;t<e.__k.length;t++)if(null!=(n=e.__k[t])&&null!=n.__e)return n.__e;return"function"==typeof e.type?v(e):null}function b(e){var t,n;if(null!=(e=e.__)&&null!=e.__c){for(e.__e=e.__c.base=null,t=0;t<e.__k.length;t++)if(null!=(n=e.__k[t])&&null!=n.__e){e.__e=e.__c.base=n.__e;break}return b(e)}}function y(e){(!e.__d&&(e.__d=!0)&&s.push(e)&&!E.__r++||o!==n.debounceRendering)&&((o=n.debounceRendering)||setTimeout)(E)}function E(){for(var e;E.__r=s.length;)e=s.sort((function(e,t){return e.__v.__b-t.__v.__b})),s=[],e.some((function(e){var t,n,r,i,s,o;e.__d&&(s=(i=(t=e).__v).__e,(o=t.__P)&&(n=[],(r=u({},i)).__v=i.__v+1,T(o,i,r,t.__n,void 0!==o.ownerSVGElement,null!=i.__h?[s]:null,n,null==s?v(i):s,i.__h),k(n,i),i.__e!=s&&b(i)))}))}function A(e,t,n,r,i,s,o,a,d,u){var h,f,m,b,y,E,A,S=r&&r.__k||c,C=S.length;for(n.__k=[],h=0;h<t.length;h++)if(null!=(b=n.__k[h]=null==(b=t[h])||"boolean"==typeof b?null:"string"==typeof b||"number"==typeof b||"bigint"==typeof b?g(null,b,null,null,b):Array.isArray(b)?g(p,{children:b},null,null,null):b.__b>0?g(b.type,b.props,b.key,b.ref?b.ref:null,b.__v):b)){if(b.__=n,b.__b=n.__b+1,null===(m=S[h])||m&&b.key==m.key&&b.type===m.type)S[h]=void 0;else for(f=0;f<C;f++){if((m=S[f])&&b.key==m.key&&b.type===m.type){S[f]=void 0;break}m=null}T(e,b,m=m||l,i,s,o,a,d,u),y=b.__e,(f=b.ref)&&m.ref!=f&&(A||(A=[]),m.ref&&A.push(m.ref,null,b),A.push(f,b.__c||y,b)),null!=y?(null==E&&(E=y),"function"==typeof b.type&&b.__k===m.__k?b.__d=d=D(b,d,e):d=w(e,b,m,S,y,d),"function"==typeof n.type&&(n.__d=d)):d&&m.__e==d&&d.parentNode!=e&&(d=v(m))}for(n.__e=E,h=C;h--;)null!=S[h]&&O(S[h],S[h]);if(A)for(h=0;h<A.length;h++)I(A[h],A[++h],A[++h])}function D(e,t,n){for(var r,i=e.__k,s=0;i&&s<i.length;s++)(r=i[s])&&(r.__=e,t="function"==typeof r.type?D(r,t,n):w(n,r,r,i,r.__e,t));return t}function S(e,t){return t=t||[],null==e||"boolean"==typeof e||(Array.isArray(e)?e.some((function(e){S(e,t)})):t.push(e)),t}function w(e,t,n,r,i,s){var o,a,l;if(void 0!==t.__d)o=t.__d,t.__d=void 0;else if(null==n||i!=s||null==i.parentNode)e:if(null==s||s.parentNode!==e)e.appendChild(i),o=null;else{for(a=s,l=0;(a=a.nextSibling)&&l<r.length;l+=1)if(a==i)break e;e.insertBefore(i,s),o=s}return void 0!==o?o:i.nextSibling}function C(e,t,n){"-"===t[0]?e.setProperty(t,n):e[t]=null==n?"":"number"!=typeof n||d.test(t)?n:n+"px"}function R(e,t,n,r,i){var s;e:if("style"===t)if("string"==typeof n)e.style.cssText=n;else{if("string"==typeof r&&(e.style.cssText=r=""),r)for(t in r)n&&t in n||C(e.style,t,"");if(n)for(t in n)r&&n[t]===r[t]||C(e.style,t,n[t])}else if("o"===t[0]&&"n"===t[1])s=t!==(t=t.replace(/Capture$/,"")),t=t.toLowerCase()in e?t.toLowerCase().slice(2):t.slice(2),e.l||(e.l={}),e.l[t+s]=n,n?r||e.addEventListener(t,s?_:x,s):e.removeEventListener(t,s?_:x,s);else if("dangerouslySetInnerHTML"!==t){if(i)t=t.replace(/xlink(H|:h)/,"h").replace(/sName$/,"s");else if("href"!==t&&"list"!==t&&"form"!==t&&"tabIndex"!==t&&"download"!==t&&t in e)try{e[t]=null==n?"":n;break e}catch(e){}"function"==typeof n||(null==n||!1===n&&-1==t.indexOf("-")?e.removeAttribute(t):e.setAttribute(t,n))}}function x(e){this.l[e.type+!1](n.event?n.event(e):e)}function _(e){this.l[e.type+!0](n.event?n.event(e):e)}function T(e,t,r,i,s,o,a,l,c){var d,h,f,g,v,b,y,E,D,S,w,C,R,x,_,T=t.type;if(void 0!==t.constructor)return null;null!=r.__h&&(c=r.__h,l=t.__e=r.__e,t.__h=null,o=[l]),(d=n.__b)&&d(t);try{e:if("function"==typeof T){if(E=t.props,D=(d=T.contextType)&&i[d.__c],S=d?D?D.props.value:d.__:i,r.__c?y=(h=t.__c=r.__c).__=h.__E:("prototype"in T&&T.prototype.render?t.__c=h=new T(E,S):(t.__c=h=new m(E,S),h.constructor=T,h.render=N),D&&D.sub(h),h.props=E,h.state||(h.state={}),h.context=S,h.__n=i,f=h.__d=!0,h.__h=[],h._sb=[]),null==h.__s&&(h.__s=h.state),null!=T.getDerivedStateFromProps&&(h.__s==h.state&&(h.__s=u({},h.__s)),u(h.__s,T.getDerivedStateFromProps(E,h.__s))),g=h.props,v=h.state,f)null==T.getDerivedStateFromProps&&null!=h.componentWillMount&&h.componentWillMount(),null!=h.componentDidMount&&h.__h.push(h.componentDidMount);else{if(null==T.getDerivedStateFromProps&&E!==g&&null!=h.componentWillReceiveProps&&h.componentWillReceiveProps(E,S),!h.__e&&null!=h.shouldComponentUpdate&&!1===h.shouldComponentUpdate(E,h.__s,S)||t.__v===r.__v){for(h.props=E,h.state=h.__s,t.__v!==r.__v&&(h.__d=!1),h.__v=t,t.__e=r.__e,t.__k=r.__k,t.__k.forEach((function(e){e&&(e.__=t)})),w=0;w<h._sb.length;w++)h.__h.push(h._sb[w]);h._sb=[],h.__h.length&&a.push(h);break e}null!=h.componentWillUpdate&&h.componentWillUpdate(E,h.__s,S),null!=h.componentDidUpdate&&h.__h.push((function(){h.componentDidUpdate(g,v,b)}))}if(h.context=S,h.props=E,h.__v=t,h.__P=e,C=n.__r,R=0,"prototype"in T&&T.prototype.render){for(h.state=h.__s,h.__d=!1,C&&C(t),d=h.render(h.props,h.state,h.context),x=0;x<h._sb.length;x++)h.__h.push(h._sb[x]);h._sb=[]}else do{h.__d=!1,C&&C(t),d=h.render(h.props,h.state,h.context),h.state=h.__s}while(h.__d&&++R<25);h.state=h.__s,null!=h.getChildContext&&(i=u(u({},i),h.getChildContext())),f||null==h.getSnapshotBeforeUpdate||(b=h.getSnapshotBeforeUpdate(g,v)),_=null!=d&&d.type===p&&null==d.key?d.props.children:d,A(e,Array.isArray(_)?_:[_],t,r,i,s,o,a,l,c),h.base=t.__e,t.__h=null,h.__h.length&&a.push(h),y&&(h.__E=h.__=null),h.__e=!1}else null==o&&t.__v===r.__v?(t.__k=r.__k,t.__e=r.__e):t.__e=M(r.__e,t,r,i,s,o,a,c);(d=n.diffed)&&d(t)}catch(e){t.__v=null,(c||null!=o)&&(t.__e=l,t.__h=!!c,o[o.indexOf(l)]=null),n.__e(e,t,r)}}function k(e,t){n.__c&&n.__c(t,e),e.some((function(t){try{e=t.__h,t.__h=[],e.some((function(e){e.call(t)}))}catch(e){n.__e(e,t.__v)}}))}function M(e,n,r,i,s,o,a,c){var d,u,f,g=r.props,p=n.props,m=n.type,b=0;if("svg"===m&&(s=!0),null!=o)for(;b<o.length;b++)if((d=o[b])&&"setAttribute"in d==!!m&&(m?d.localName===m:3===d.nodeType)){e=d,o[b]=null;break}if(null==e){if(null===m)return document.createTextNode(p);e=s?document.createElementNS("http://www.w3.org/2000/svg",m):document.createElement(m,p.is&&p),o=null,c=!1}if(null===m)g===p||c&&e.data===p||(e.data=p);else{if(o=o&&t.call(e.childNodes),u=(g=r.props||l).dangerouslySetInnerHTML,f=p.dangerouslySetInnerHTML,!c){if(null!=o)for(g={},b=0;b<e.attributes.length;b++)g[e.attributes[b].name]=e.attributes[b].value;(f||u)&&(f&&(u&&f.__html==u.__html||f.__html===e.innerHTML)||(e.innerHTML=f&&f.__html||""))}if(function(e,t,n,r,i){var s;for(s in n)"children"===s||"key"===s||s in t||R(e,s,null,n[s],r);for(s in t)i&&"function"!=typeof t[s]||"children"===s||"key"===s||"value"===s||"checked"===s||n[s]===t[s]||R(e,s,t[s],n[s],r)}(e,p,g,s,c),f)n.__k=[];else if(b=n.props.children,A(e,Array.isArray(b)?b:[b],n,r,i,s&&"foreignObject"!==m,o,a,o?o[0]:r.__k&&v(r,0),c),null!=o)for(b=o.length;b--;)null!=o[b]&&h(o[b]);c||("value"in p&&void 0!==(b=p.value)&&(b!==e.value||"progress"===m&&!b||"option"===m&&b!==g.value)&&R(e,"value",b,g.value,!1),"checked"in p&&void 0!==(b=p.checked)&&b!==e.checked&&R(e,"checked",b,g.checked,!1))}return e}function I(e,t,r){try{"function"==typeof e?e(t):e.current=t}catch(e){n.__e(e,r)}}function O(e,t,r){var i,s;if(n.unmount&&n.unmount(e),(i=e.ref)&&(i.current&&i.current!==e.__e||I(i,null,t)),null!=(i=e.__c)){if(i.componentWillUnmount)try{i.componentWillUnmount()}catch(e){n.__e(e,t)}i.base=i.__P=null,e.__c=void 0}if(i=e.__k)for(s=0;s<i.length;s++)i[s]&&O(i[s],t,r||"function"!=typeof e.type);r||null==e.__e||h(e.__e),e.__=e.__e=e.__d=void 0}function N(e,t,n){return this.constructor(e,n)}function P(e,r,i){var s,o,a;n.__&&n.__(e,r),o=(s="function"==typeof i)?null:i&&i.__k||r.__k,a=[],T(r,e=(!s&&i||r).__k=f(p,null,[e]),o||l,l,void 0!==r.ownerSVGElement,!s&&i?[i]:o?null:r.firstChild?t.call(r.childNodes):null,a,!s&&i?i:o?o.__e:r.firstChild,s),k(a,e)}t=c.slice,n={__e:function(e,t,n,r){for(var i,s,o;t=t.__;)if((i=t.__c)&&!i.__)try{if((s=i.constructor)&&null!=s.getDerivedStateFromError&&(i.setState(s.getDerivedStateFromError(e)),o=i.__d),null!=i.componentDidCatch&&(i.componentDidCatch(e,r||{}),o=i.__d),o)return i.__E=i}catch(t){e=t}throw e}},r=0,i=function(e){return null!=e&&void 0===e.constructor},m.prototype.setState=function(e,t){var n;n=null!=this.__s&&this.__s!==this.state?this.__s:this.__s=u({},this.state),"function"==typeof e&&(e=e(u({},n),this.props)),e&&u(n,e),null!=e&&this.__v&&(t&&this._sb.push(t),y(this))},m.prototype.forceUpdate=function(e){this.__v&&(this.__e=!0,e&&this.__h.push(e),y(this))},m.prototype.render=p,s=[],E.__r=0,a=0;var H,B,j,z=[],U=[],L=n.__b,W=n.__r,F=n.diffed,V=n.__c,G=n.unmount;function Q(){for(var e;e=z.shift();)if(e.__P&&e.__H)try{e.__H.__h.forEach(Z),e.__H.__h.forEach(X),e.__H.__h=[]}catch(t){e.__H.__h=[],n.__e(t,e.__v)}}n.__b=function(e){H=null,L&&L(e)},n.__r=function(e){W&&W(e);var t=(H=e.__c).__H;t&&(B===H?(t.__h=[],H.__h=[],t.__.forEach((function(e){e.__N&&(e.__=e.__N),e.__V=U,e.__N=e.i=void 0}))):(t.__h.forEach(Z),t.__h.forEach(X),t.__h=[])),B=H},n.diffed=function(e){F&&F(e);var t=e.__c;t&&t.__H&&(t.__H.__h.length&&(1!==z.push(t)&&j===n.requestAnimationFrame||((j=n.requestAnimationFrame)||Y)(Q)),t.__H.__.forEach((function(e){e.i&&(e.__H=e.i),e.__V!==U&&(e.__=e.__V),e.i=void 0,e.__V=U}))),B=H=null},n.__c=function(e,t){t.some((function(e){try{e.__h.forEach(Z),e.__h=e.__h.filter((function(e){return!e.__||X(e)}))}catch(r){t.some((function(e){e.__h&&(e.__h=[])})),t=[],n.__e(r,e.__v)}})),V&&V(e,t)},n.unmount=function(e){G&&G(e);var t,r=e.__c;r&&r.__H&&(r.__H.__.forEach((function(e){try{Z(e)}catch(e){t=e}})),r.__H=void 0,t&&n.__e(t,r.__v))};var q="function"==typeof requestAnimationFrame;function Y(e){var t,n=function(){clearTimeout(r),q&&cancelAnimationFrame(t),setTimeout(e)},r=setTimeout(n,100);q&&(t=requestAnimationFrame(n))}function Z(e){var t=H,n=e.__c;"function"==typeof n&&(e.__c=void 0,n()),H=t}function X(e){var t=H;e.__c=e.__(),H=t}function J(e,t){for(var n in e)if("__source"!==n&&!(n in t))return!0;for(var r in t)if("__source"!==r&&e[r]!==t[r])return!0;return!1}function $(e){this.props=e}($.prototype=new m).isPureReactComponent=!0,$.prototype.shouldComponentUpdate=function(e,t){return J(this.props,e)||J(this.state,t)};var K=n.__b;n.__b=function(e){e.type&&e.type.__f&&e.ref&&(e.props.ref=e.ref,e.ref=null),K&&K(e)};var ee=n.__e;n.__e=function(e,t,n,r){if(e.then)for(var i,s=t;s=s.__;)if((i=s.__c)&&i.__c)return null==t.__e&&(t.__e=n.__e,t.__k=n.__k),i.__c(e,t);ee(e,t,n,r)};var te=n.unmount;function ne(){this.__u=0,this.t=null,this.__b=null}function re(e){var t=e.__.__c;return t&&t.__a&&t.__a(e)}function ie(){this.u=null,this.o=null}n.unmount=function(e){var t=e.__c;t&&t.__R&&t.__R(),t&&!0===e.__h&&(e.type=null),te&&te(e)},(ne.prototype=new m).__c=function(e,t){var n=t.__c,r=this;null==r.t&&(r.t=[]),r.t.push(n);var i=re(r.__v),s=!1,o=function(){s||(s=!0,n.__R=null,i?i(a):a())};n.__R=o;var a=function(){if(!--r.__u){if(r.state.__a){var e=r.state.__a;r.__v.__k[0]=function e(t,n,r){return t&&(t.__v=null,t.__k=t.__k&&t.__k.map((function(t){return e(t,n,r)})),t.__c&&t.__c.__P===n&&(t.__e&&r.insertBefore(t.__e,t.__d),t.__c.__e=!0,t.__c.__P=r)),t}(e,e.__c.__P,e.__c.__O)}var t;for(r.setState({__a:r.__b=null});t=r.t.pop();)t.forceUpdate()}},l=!0===t.__h;r.__u++||l||r.setState({__a:r.__b=r.__v.__k[0]}),e.then(o,o)},ne.prototype.componentWillUnmount=function(){this.t=[]},ne.prototype.render=function(e,t){if(this.__b){if(this.__v.__k){var n=document.createElement("div"),r=this.__v.__k[0].__c;this.__v.__k[0]=function e(t,n,r){return t&&(t.__c&&t.__c.__H&&(t.__c.__H.__.forEach((function(e){"function"==typeof e.__c&&e.__c()})),t.__c.__H=null),null!=(t=function(e,t){for(var n in t)e[n]=t[n];return e}({},t)).__c&&(t.__c.__P===r&&(t.__c.__P=n),t.__c=null),t.__k=t.__k&&t.__k.map((function(t){return e(t,n,r)}))),t}(this.__b,n,r.__O=r.__P)}this.__b=null}var i=t.__a&&f(p,null,e.fallback);return i&&(i.__h=null),[f(p,null,t.__a?null:e.children),i]};var se=function(e,t,n){if(++n[1]===n[0]&&e.o.delete(t),e.props.revealOrder&&("t"!==e.props.revealOrder[0]||!e.o.size))for(n=e.u;n;){for(;n.length>3;)n.pop()();if(n[1]<n[0])break;e.u=n=n[2]}};function oe(e){return this.getChildContext=function(){return e.context},e.children}function ae(e){var t=this,n=e.i;t.componentWillUnmount=function(){P(null,t.l),t.l=null,t.i=null},t.i&&t.i!==n&&t.componentWillUnmount(),e.__v?(t.l||(t.i=n,t.l={nodeType:1,parentNode:n,childNodes:[],appendChild:function(e){this.childNodes.push(e),t.i.appendChild(e)},insertBefore:function(e,n){this.childNodes.push(e),t.i.appendChild(e)},removeChild:function(e){this.childNodes.splice(this.childNodes.indexOf(e)>>>1,1),t.i.removeChild(e)}}),P(f(oe,{context:t.context},e.__v),t.l)):t.l&&t.componentWillUnmount()}(ie.prototype=new m).__a=function(e){var t=this,n=re(t.__v),r=t.o.get(e);return r[0]++,function(i){var s=function(){t.props.revealOrder?(r.push(i),se(t,e,r)):i()};n?n(s):s()}},ie.prototype.render=function(e){this.u=null,this.o=new Map;var t=S(e.children);e.revealOrder&&"b"===e.revealOrder[0]&&t.reverse();for(var n=t.length;n--;)this.o.set(t[n],this.u=[1,0,this.u]);return e.children},ie.prototype.componentDidUpdate=ie.prototype.componentDidMount=function(){var e=this;this.o.forEach((function(t,n){se(e,n,t)}))};var le="undefined"!=typeof Symbol&&Symbol.for&&Symbol.for("react.element")||60103,ce=/^(?:accent|alignment|arabic|baseline|cap|clip(?!PathU)|color|dominant|fill|flood|font|glyph(?!R)|horiz|image|letter|lighting|marker(?!H|W|U)|overline|paint|pointer|shape|stop|strikethrough|stroke|text(?!L)|transform|underline|unicode|units|v|vector|vert|word|writing|x(?!C))[A-Z]/,de="undefined"!=typeof document,ue=function(e){return("undefined"!=typeof Symbol&&"symbol"==typeof Symbol()?/fil|che|rad/i:/fil|che|ra/i).test(e)};m.prototype.isReactComponent={},["componentWillMount","componentWillReceiveProps","componentWillUpdate"].forEach((function(e){Object.defineProperty(m.prototype,e,{configurable:!0,get:function(){return this["UNSAFE_"+e]},set:function(t){Object.defineProperty(this,e,{configurable:!0,writable:!0,value:t})}})}));var he=n.event;function fe(){}function ge(){return this.cancelBubble}function pe(){return this.defaultPrevented}n.event=function(e){return he&&(e=he(e)),e.persist=fe,e.isPropagationStopped=ge,e.isDefaultPrevented=pe,e.nativeEvent=e};var me={configurable:!0,get:function(){return this.class}},ve=n.vnode;n.vnode=function(e){var t=e.type,n=e.props,r=n;if("string"==typeof t){var i=-1===t.indexOf("-");for(var s in r={},n){var o=n[s];de&&"children"===s&&"noscript"===t||"value"===s&&"defaultValue"in n&&null==o||("defaultValue"===s&&"value"in n&&null==n.value?s="value":"download"===s&&!0===o?o="":/ondoubleclick/i.test(s)?s="ondblclick":/^onchange(textarea|input)/i.test(s+t)&&!ue(n.type)?s="oninput":/^onfocus$/i.test(s)?s="onfocusin":/^onblur$/i.test(s)?s="onfocusout":/^on(Ani|Tra|Tou|BeforeInp|Compo)/.test(s)?s=s.toLowerCase():i&&ce.test(s)?s=s.replace(/[A-Z0-9]/g,"-$&").toLowerCase():null===o&&(o=void 0),/^oninput$/i.test(s)&&(s=s.toLowerCase(),r[s]&&(s="oninputCapture")),r[s]=o)}"select"==t&&r.multiple&&Array.isArray(r.value)&&(r.value=S(n.children).forEach((function(e){e.props.selected=-1!=r.value.indexOf(e.props.value)}))),"select"==t&&null!=r.defaultValue&&(r.value=S(n.children).forEach((function(e){e.props.selected=r.multiple?-1!=r.defaultValue.indexOf(e.props.value):r.defaultValue==e.props.value}))),e.props=r,n.class!=n.className&&(me.enumerable="className"in n,null!=n.className&&(r.class=n.className),Object.defineProperty(r,"className",me))}e.$$typeof=le,ve&&ve(e)};var be=n.__r;function ye(e){e.parentNode&&e.parentNode.removeChild(e)}function Ee(e,t){if(e.closest)return e.closest(t);if(!document.documentElement.contains(e))return null;do{if(Ae(e,t))return e;e=e.parentElement||e.parentNode}while(null!==e&&1===e.nodeType);return null}function Ae(e,t){return(e.matches||e.matchesSelector||e.msMatchesSelector).call(e,t)}function De(e,t){let n=e instanceof HTMLElement?[e]:e,r=[];for(let e=0;e<n.length;e+=1){let i=n[e].querySelectorAll(t);for(let e=0;e<i.length;e+=1)r.push(i[e])}return r}n.__r=function(e){be&&be(e),e.__c};const Se=/(top|left|right|bottom|width|height)$/i;function we(e,t){for(let n in t)Ce(e,n,t[n])}function Ce(e,t,n){null==n?e.style[t]="":"number"==typeof n&&Se.test(t)?e.style[t]=n+"px":e.style[t]=n}function Re(e){var t,n;return null!==(n=null===(t=e.composedPath)||void 0===t?void 0:t.call(e)[0])&&void 0!==n?n:e.target}function xe(e){return e.getRootNode?e.getRootNode():document}let _e=0;function Te(){return _e+=1,"fc-dom-"+_e}function ke(e){e.preventDefault()}function Me(e,t,n,r){let i=function(e,t){return n=>{let r=Ee(n.target,e);r&&t.call(r,n,r)}}(n,r);return e.addEventListener(t,i),()=>{e.removeEventListener(t,i)}}const Ie=["webkitTransitionEnd","otransitionend","oTransitionEnd","msTransitionEnd","transitionend"];function Oe(e,t){let n=r=>{t(r),Ie.forEach(t=>{e.removeEventListener(t,n)})};Ie.forEach(t=>{e.addEventListener(t,n)})}function Ne(e){return Object.assign({onClick:e},Pe(e))}function Pe(e){return{tabIndex:0,onKeyDown(t){"Enter"!==t.key&&" "!==t.key||(e(t),t.preventDefault())}}}let He=0;function Be(){return He+=1,String(He)}function je(){document.body.classList.add("fc-not-allowed")}function ze(){document.body.classList.remove("fc-not-allowed")}function Ue(e){e.classList.add("fc-unselectable"),e.addEventListener("selectstart",ke)}function Le(e){e.classList.remove("fc-unselectable"),e.removeEventListener("selectstart",ke)}function We(e){e.addEventListener("contextmenu",ke)}function Fe(e){e.removeEventListener("contextmenu",ke)}function Ve(e){let t,n,r=[],i=[];for("string"==typeof e?i=e.split(/\s*,\s*/):"function"==typeof e?i=[e]:Array.isArray(e)&&(i=e),t=0;t<i.length;t+=1)n=i[t],"string"==typeof n?r.push("-"===n.charAt(0)?{field:n.substring(1),order:-1}:{field:n,order:1}):"function"==typeof n&&r.push({func:n});return r}function Ge(e,t,n){let r,i;for(r=0;r<n.length;r+=1)if(i=Qe(e,t,n[r]),i)return i;return 0}function Qe(e,t,n){return n.func?n.func(e,t):qe(e[n.field],t[n.field])*(n.order||1)}function qe(e,t){return e||t?null==t?-1:null==e?1:"string"==typeof e||"string"==typeof t?String(e).localeCompare(String(t)):e-t:0}function Ye(e,t){let n=String(e);return"000".substr(0,t-n.length)+n}function Ze(e,t,n){return"function"==typeof e?e(...t):"string"==typeof e?t.reduce((e,t,n)=>e.replace("$"+n,t||""),e):n}function Xe(e,t){return e-t}function Je(e){return e%1==0}function $e(e){let t=e.querySelector(".fc-scrollgrid-shrink-frame"),n=e.querySelector(".fc-scrollgrid-shrink-cushion");if(!t)throw new Error("needs fc-scrollgrid-shrink-frame className");if(!n)throw new Error("needs fc-scrollgrid-shrink-cushion className");return e.getBoundingClientRect().width-t.getBoundingClientRect().width+n.getBoundingClientRect().width}const Ke=["years","months","days","milliseconds"],et=/^(-?)(?:(\d+)\.)?(\d+):(\d\d)(?::(\d\d)(?:\.(\d\d\d))?)?/;function tt(e,t){return"string"==typeof e?function(e){let t=et.exec(e);if(t){let e=t[1]?-1:1;return{years:0,months:0,days:e*(t[2]?parseInt(t[2],10):0),milliseconds:e*(60*(t[3]?parseInt(t[3],10):0)*60*1e3+60*(t[4]?parseInt(t[4],10):0)*1e3+1e3*(t[5]?parseInt(t[5],10):0)+(t[6]?parseInt(t[6],10):0))}}return null}(e):"object"==typeof e&&e?nt(e):"number"==typeof e?nt({[t||"milliseconds"]:e}):null}function nt(e){let t={years:e.years||e.year||0,months:e.months||e.month||0,days:e.days||e.day||0,milliseconds:60*(e.hours||e.hour||0)*60*1e3+60*(e.minutes||e.minute||0)*1e3+1e3*(e.seconds||e.second||0)+(e.milliseconds||e.millisecond||e.ms||0)},n=e.weeks||e.week;return n&&(t.days+=7*n,t.specifiedWeeks=!0),t}function rt(e,t){return{years:e.years+t.years,months:e.months+t.months,days:e.days+t.days,milliseconds:e.milliseconds+t.milliseconds}}function it(e,t){return{years:e.years*t,months:e.months*t,days:e.days*t,milliseconds:e.milliseconds*t}}function st(e){return ot(e)/864e5}function ot(e){return 31536e6*e.years+2592e6*e.months+864e5*e.days+e.milliseconds}function at(e,t){let n=null;for(let r=0;r<Ke.length;r+=1){let i=Ke[r];if(t[i]){let r=e[i]/t[i];if(!Je(r)||null!==n&&n!==r)return null;n=r}else if(e[i])return null}return n}function lt(e){let t=e.milliseconds;if(t){if(t%1e3!=0)return{unit:"millisecond",value:t};if(t%6e4!=0)return{unit:"second",value:t/1e3};if(t%36e5!=0)return{unit:"minute",value:t/6e4};if(t)return{unit:"hour",value:t/36e5}}return e.days?e.specifiedWeeks&&e.days%7==0?{unit:"week",value:e.days/7}:{unit:"day",value:e.days}:e.months?{unit:"month",value:e.months}:e.years?{unit:"year",value:e.years}:{unit:"millisecond",value:0}}const{hasOwnProperty:ct}=Object.prototype;function dt(e,t){let n={};if(t)for(let r in t){let t=[];for(let i=e.length-1;i>=0;i-=1){let s=e[i][r];if("object"==typeof s&&s)t.unshift(s);else if(void 0!==s){n[r]=s;break}}t.length&&(n[r]=dt(t))}for(let t=e.length-1;t>=0;t-=1){let r=e[t];for(let e in r)e in n||(n[e]=r[e])}return n}function ut(e,t){let n={};for(let r in e)t(e[r],r)&&(n[r]=e[r]);return n}function ht(e,t){let n={};for(let r in e)n[r]=t(e[r],r);return n}function ft(e){let t={};for(let n of e)t[n]=!0;return t}function gt(e){let t=[];for(let n in e)t.push(e[n]);return t}function pt(e,t){if(e===t)return!0;for(let n in e)if(ct.call(e,n)&&!(n in t))return!1;for(let n in t)if(ct.call(t,n)&&e[n]!==t[n])return!1;return!0}const mt=/^on[A-Z]/;function vt(e,t){let n=[];for(let r in e)ct.call(e,r)&&(r in t||n.push(r));for(let r in t)ct.call(t,r)&&e[r]!==t[r]&&n.push(r);return n}function bt(e,t,n={}){if(e===t)return!0;for(let r in t)if(!(r in e)||!yt(e[r],t[r],n[r]))return!1;for(let n in e)if(!(n in t))return!1;return!0}function yt(e,t,n){return e===t||!0===n||!!n&&n(e,t)}function Et(e,t=0,n,r=1){let i=[];null==n&&(n=Object.keys(e).length);for(let s=t;s<n;s+=r){let t=e[s];void 0!==t&&i.push(t)}return i}const At=["sun","mon","tue","wed","thu","fri","sat"];function Dt(e,t){let n=Pt(e);return n[2]+=7*t,Ht(n)}function St(e,t){let n=Pt(e);return n[2]+=t,Ht(n)}function wt(e,t){let n=Pt(e);return n[6]+=t,Ht(n)}function Ct(e,t){return Rt(e,t)/7}function Rt(e,t){return(t.valueOf()-e.valueOf())/864e5}function xt(e,t){let n=kt(e),r=kt(t);return{years:0,months:0,days:Math.round(Rt(n,r)),milliseconds:t.valueOf()-r.valueOf()-(e.valueOf()-n.valueOf())}}function _t(e,t){let n=Tt(e,t);return null!==n&&n%7==0?n/7:null}function Tt(e,t){return jt(e)===jt(t)?Math.round(Rt(e,t)):null}function kt(e){return Ht([e.getUTCFullYear(),e.getUTCMonth(),e.getUTCDate()])}function Mt(e,t,n,r){let i=Ht([t,0,1+It(t,n,r)]),s=kt(e),o=Math.round(Rt(i,s));return Math.floor(o/7)+1}function It(e,t,n){let r=7+t-n;return-((7+Ht([e,0,r]).getUTCDay()-t)%7)+r-1}function Ot(e){return[e.getFullYear(),e.getMonth(),e.getDate(),e.getHours(),e.getMinutes(),e.getSeconds(),e.getMilliseconds()]}function Nt(e){return new Date(e[0],e[1]||0,null==e[2]?1:e[2],e[3]||0,e[4]||0,e[5]||0)}function Pt(e){return[e.getUTCFullYear(),e.getUTCMonth(),e.getUTCDate(),e.getUTCHours(),e.getUTCMinutes(),e.getUTCSeconds(),e.getUTCMilliseconds()]}function Ht(e){return 1===e.length&&(e=e.concat([0])),new Date(Date.UTC(...e))}function Bt(e){return!isNaN(e.valueOf())}function jt(e){return 1e3*e.getUTCHours()*60*60+1e3*e.getUTCMinutes()*60+1e3*e.getUTCSeconds()+e.getUTCMilliseconds()}function zt(e,t,n=!1){let r=e.toISOString();return r=r.replace(".000",""),n&&(r=r.replace("T00:00:00Z","")),r.length>10&&(null==t?r=r.replace("Z",""):0!==t&&(r=r.replace("Z",Wt(t,!0)))),r}function Ut(e){return e.toISOString().replace(/T.*$/,"")}function Lt(e){return Ye(e.getUTCHours(),2)+":"+Ye(e.getUTCMinutes(),2)+":"+Ye(e.getUTCSeconds(),2)}function Wt(e,t=!1){let n=e<0?"-":"+",r=Math.abs(e),i=Math.floor(r/60),s=Math.round(r%60);return t?`${n+Ye(i,2)}:${Ye(s,2)}`:`GMT${n}${i}${s?":"+Ye(s,2):""}`}function Ft(e,t,n){if(e===t)return!0;let r,i=e.length;if(i!==t.length)return!1;for(r=0;r<i;r+=1)if(!(n?n(e[r],t[r]):e[r]===t[r]))return!1;return!0}function Vt(e,t,n){let r,i;return function(...s){if(r){if(!Ft(r,s)){n&&n(i);let r=e.apply(this,s);t&&t(r,i)||(i=r)}}else i=e.apply(this,s);return r=s,i}}function Gt(e,t,n){let r,i;return s=>{if(r){if(!pt(r,s)){n&&n(i);let r=e.call(this,s);t&&t(r,i)||(i=r)}}else i=e.call(this,s);return r=s,i}}const Qt={week:3,separator:0,omitZeroMinute:0,meridiem:0,omitCommas:0},qt={timeZoneName:7,era:6,year:5,month:4,day:2,weekday:2,hour:1,minute:1,second:1},Yt=/\s*([ap])\.?m\.?/i,Zt=/,/g,Xt=/\s+/g,Jt=/\u200e/g,$t=/UTC|GMT/;class Kt{constructor(e){let t={},n={},r=0;for(let i in e)i in Qt?(n[i]=e[i],r=Math.max(Qt[i],r)):(t[i]=e[i],i in qt&&(r=Math.max(qt[i],r)));this.standardDateProps=t,this.extendedSettings=n,this.severity=r,this.buildFormattingFunc=Vt(en)}format(e,t){return this.buildFormattingFunc(this.standardDateProps,this.extendedSettings,t)(e)}formatRange(e,t,n,r){let{standardDateProps:i,extendedSettings:s}=this,o=function(e,t,n){if(n.getMarkerYear(e)!==n.getMarkerYear(t))return 5;if(n.getMarkerMonth(e)!==n.getMarkerMonth(t))return 4;if(n.getMarkerDay(e)!==n.getMarkerDay(t))return 2;if(jt(e)!==jt(t))return 1;return 0}(e.marker,t.marker,n.calendarSystem);if(!o)return this.format(e,n);let a=o;!(a>1)||"numeric"!==i.year&&"2-digit"!==i.year||"numeric"!==i.month&&"2-digit"!==i.month||"numeric"!==i.day&&"2-digit"!==i.day||(a=1);let l=this.format(e,n),c=this.format(t,n);if(l===c)return l;let d=en(function(e,t){let n={};for(let r in e)(!(r in qt)||qt[r]<=t)&&(n[r]=e[r]);return n}(i,a),s,n),u=d(e),h=d(t),f=function(e,t,n,r){let i=0;for(;i<e.length;){let s=e.indexOf(t,i);if(-1===s)break;let o=e.substr(0,s);i=s+t.length;let a=e.substr(i),l=0;for(;l<n.length;){let e=n.indexOf(r,l);if(-1===e)break;let t=n.substr(0,e);l=e+r.length;let i=n.substr(l);if(o===t&&a===i)return{before:o,after:a}}}return null}(l,u,c,h),g=s.separator||r||n.defaultSeparator||"";return f?f.before+u+g+h+f.after:l+g+c}getLargestUnit(){switch(this.severity){case 7:case 6:case 5:return"year";case 4:return"month";case 3:return"week";case 2:return"day";default:return"time"}}}function en(e,t,n){let r=Object.keys(e).length;return 1===r&&"short"===e.timeZoneName?e=>Wt(e.timeZoneOffset):0===r&&t.week?e=>function(e,t,n,r,i){let s=[];"long"===i?s.push(n):"short"!==i&&"narrow"!==i||s.push(t);"long"!==i&&"short"!==i||s.push(" ");s.push(r.simpleNumberFormat.format(e)),"rtl"===r.options.direction&&s.reverse();return s.join("")}(n.computeWeekNumber(e.marker),n.weekText,n.weekTextLong,n.locale,t.week):function(e,t,n){e=Object.assign({},e),t=Object.assign({},t),function(e,t){e.timeZoneName&&(e.hour||(e.hour="2-digit"),e.minute||(e.minute="2-digit"));"long"===e.timeZoneName&&(e.timeZoneName="short");t.omitZeroMinute&&(e.second||e.millisecond)&&delete t.omitZeroMinute}(e,t),e.timeZone="UTC";let r,i=new Intl.DateTimeFormat(n.locale.codes,e);if(t.omitZeroMinute){let t=Object.assign({},e);delete t.minute,r=new Intl.DateTimeFormat(n.locale.codes,t)}return s=>{let o,{marker:a}=s;return o=r&&!a.getUTCMinutes()?r:i,function(e,t,n,r,i){e=e.replace(Jt,""),"short"===n.timeZoneName&&(e=function(e,t){let n=!1;e=e.replace($t,()=>(n=!0,t)),n||(e+=" "+t);return e}(e,"UTC"===i.timeZone||null==t.timeZoneOffset?"UTC":Wt(t.timeZoneOffset)));r.omitCommas&&(e=e.replace(Zt,"").trim());r.omitZeroMinute&&(e=e.replace(":00",""));!1===r.meridiem?e=e.replace(Yt,"").trim():"narrow"===r.meridiem?e=e.replace(Yt,(e,t)=>t.toLocaleLowerCase()):"short"===r.meridiem?e=e.replace(Yt,(e,t)=>t.toLocaleLowerCase()+"m"):"lowercase"===r.meridiem&&(e=e.replace(Yt,e=>e.toLocaleLowerCase()));return e=(e=e.replace(Xt," ")).trim()}(o.format(a),s,e,t,n)}}(e,t,n)}function tn(e,t){let n=t.markerToArray(e.marker);return{marker:e.marker,timeZoneOffset:e.timeZoneOffset,array:n,year:n[0],month:n[1],day:n[2],hour:n[3],minute:n[4],second:n[5],millisecond:n[6]}}function nn(e,t,n,r){let i=tn(e,n.calendarSystem);return{date:i,start:i,end:t?tn(t,n.calendarSystem):null,timeZone:n.timeZone,localeCodes:n.locale.codes,defaultSeparator:r||n.defaultSeparator}}class rn{constructor(e){this.cmdStr=e}format(e,t,n){return t.cmdFormatter(this.cmdStr,nn(e,null,t,n))}formatRange(e,t,n,r){return n.cmdFormatter(this.cmdStr,nn(e,t,n,r))}}class sn{constructor(e){this.func=e}format(e,t,n){return this.func(nn(e,null,t,n))}formatRange(e,t,n,r){return this.func(nn(e,t,n,r))}}function on(e){return"object"==typeof e&&e?new Kt(e):"string"==typeof e?new rn(e):"function"==typeof e?new sn(e):null}const an={navLinkDayClick:mn,navLinkWeekClick:mn,duration:tt,bootstrapFontAwesome:mn,buttonIcons:mn,customButtons:mn,defaultAllDayEventDuration:tt,defaultTimedEventDuration:tt,nextDayThreshold:tt,scrollTime:tt,scrollTimeReset:Boolean,slotMinTime:tt,slotMaxTime:tt,dayPopoverFormat:on,slotDuration:tt,snapDuration:tt,headerToolbar:mn,footerToolbar:mn,defaultRangeSeparator:String,titleRangeSeparator:String,forceEventDuration:Boolean,dayHeaders:Boolean,dayHeaderFormat:on,dayHeaderClassNames:mn,dayHeaderContent:mn,dayHeaderDidMount:mn,dayHeaderWillUnmount:mn,dayCellClassNames:mn,dayCellContent:mn,dayCellDidMount:mn,dayCellWillUnmount:mn,initialView:String,aspectRatio:Number,weekends:Boolean,weekNumberCalculation:mn,weekNumbers:Boolean,weekNumberClassNames:mn,weekNumberContent:mn,weekNumberDidMount:mn,weekNumberWillUnmount:mn,editable:Boolean,viewClassNames:mn,viewDidMount:mn,viewWillUnmount:mn,nowIndicator:Boolean,nowIndicatorClassNames:mn,nowIndicatorContent:mn,nowIndicatorDidMount:mn,nowIndicatorWillUnmount:mn,showNonCurrentDates:Boolean,lazyFetching:Boolean,startParam:String,endParam:String,timeZoneParam:String,timeZone:String,locales:mn,locale:mn,themeSystem:String,dragRevertDuration:Number,dragScroll:Boolean,allDayMaintainDuration:Boolean,unselectAuto:Boolean,dropAccept:mn,eventOrder:Ve,eventOrderStrict:Boolean,handleWindowResize:Boolean,windowResizeDelay:Number,longPressDelay:Number,eventDragMinDistance:Number,expandRows:Boolean,height:mn,contentHeight:mn,direction:String,weekNumberFormat:on,eventResizableFromStart:Boolean,displayEventTime:Boolean,displayEventEnd:Boolean,weekText:String,weekTextLong:String,progressiveEventRendering:Boolean,businessHours:mn,initialDate:mn,now:mn,eventDataTransform:mn,stickyHeaderDates:mn,stickyFooterScrollbar:mn,viewHeight:mn,defaultAllDay:Boolean,eventSourceFailure:mn,eventSourceSuccess:mn,eventDisplay:String,eventStartEditable:Boolean,eventDurationEditable:Boolean,eventOverlap:mn,eventConstraint:mn,eventAllow:mn,eventBackgroundColor:String,eventBorderColor:String,eventTextColor:String,eventColor:String,eventClassNames:mn,eventContent:mn,eventDidMount:mn,eventWillUnmount:mn,selectConstraint:mn,selectOverlap:mn,selectAllow:mn,droppable:Boolean,unselectCancel:String,slotLabelFormat:mn,slotLaneClassNames:mn,slotLaneContent:mn,slotLaneDidMount:mn,slotLaneWillUnmount:mn,slotLabelClassNames:mn,slotLabelContent:mn,slotLabelDidMount:mn,slotLabelWillUnmount:mn,dayMaxEvents:mn,dayMaxEventRows:mn,dayMinWidth:Number,slotLabelInterval:tt,allDayText:String,allDayClassNames:mn,allDayContent:mn,allDayDidMount:mn,allDayWillUnmount:mn,slotMinWidth:Number,navLinks:Boolean,eventTimeFormat:on,rerenderDelay:Number,moreLinkText:mn,moreLinkHint:mn,selectMinDistance:Number,selectable:Boolean,selectLongPressDelay:Number,eventLongPressDelay:Number,selectMirror:Boolean,eventMaxStack:Number,eventMinHeight:Number,eventMinWidth:Number,eventShortHeight:Number,slotEventOverlap:Boolean,plugins:mn,firstDay:Number,dayCount:Number,dateAlignment:String,dateIncrement:tt,hiddenDays:mn,monthMode:Boolean,fixedWeekCount:Boolean,validRange:mn,visibleRange:mn,titleFormat:mn,eventInteractive:Boolean,noEventsText:String,viewHint:mn,navLinkHint:mn,closeHint:String,timeHint:String,eventHint:String,moreLinkClick:mn,moreLinkClassNames:mn,moreLinkContent:mn,moreLinkDidMount:mn,moreLinkWillUnmount:mn,handleCustomRendering:mn,customRenderingMetaMap:mn,customRenderingReplacesEl:Boolean},ln={eventDisplay:"auto",defaultRangeSeparator:" - ",titleRangeSeparator:" – ",defaultTimedEventDuration:"01:00:00",defaultAllDayEventDuration:{day:1},forceEventDuration:!1,nextDayThreshold:"00:00:00",dayHeaders:!0,initialView:"",aspectRatio:1.35,headerToolbar:{start:"title",center:"",end:"today prev,next"},weekends:!0,weekNumbers:!1,weekNumberCalculation:"local",editable:!1,nowIndicator:!1,scrollTime:"06:00:00",scrollTimeReset:!0,slotMinTime:"00:00:00",slotMaxTime:"24:00:00",showNonCurrentDates:!0,lazyFetching:!0,startParam:"start",endParam:"end",timeZoneParam:"timeZone",timeZone:"local",locales:[],locale:"",themeSystem:"standard",dragRevertDuration:500,dragScroll:!0,allDayMaintainDuration:!1,unselectAuto:!0,dropAccept:"*",eventOrder:"start,-duration,allDay,title",dayPopoverFormat:{month:"long",day:"numeric",year:"numeric"},handleWindowResize:!0,windowResizeDelay:100,longPressDelay:1e3,eventDragMinDistance:5,expandRows:!1,navLinks:!1,selectable:!1,eventMinHeight:15,eventMinWidth:30,eventShortHeight:30},cn={datesSet:mn,eventsSet:mn,eventAdd:mn,eventChange:mn,eventRemove:mn,windowResize:mn,eventClick:mn,eventMouseEnter:mn,eventMouseLeave:mn,select:mn,unselect:mn,loading:mn,_unmount:mn,_beforeprint:mn,_afterprint:mn,_noEventDrop:mn,_noEventResize:mn,_resize:mn,_scrollRequest:mn},dn={buttonText:mn,buttonHints:mn,views:mn,plugins:mn,initialEvents:mn,events:mn,eventSources:mn},un={headerToolbar:hn,footerToolbar:hn,buttonText:hn,buttonHints:hn,buttonIcons:hn,dateIncrement:hn};function hn(e,t){return"object"==typeof e&&"object"==typeof t&&e&&t?pt(e,t):e===t}const fn={type:String,component:mn,buttonText:String,buttonTextKey:String,dateProfileGeneratorClass:mn,usesMinMaxTime:Boolean,classNames:mn,content:mn,didMount:mn,willUnmount:mn};function gn(e){return dt(e,un)}function pn(e,t){let n={},r={};for(let r in t)r in e&&(n[r]=t[r](e[r]));for(let n in e)n in t||(r[n]=e[n]);return{refined:n,extra:r}}function mn(e){return e}function vn(e,t,n,r){return{instanceId:Be(),defId:e,range:t,forcedStartTzo:null==n?null:n,forcedEndTzo:null==r?null:r}}function bn(e,t,n){let{dateEnv:r,pluginHooks:i,options:s}=n,{defs:o,instances:a}=e;a=ut(a,e=>!o[e.defId].recurringDef);for(let e in o){let n=o[e];if(n.recurringDef){let{duration:o}=n.recurringDef;o||(o=n.allDay?s.defaultAllDayEventDuration:s.defaultTimedEventDuration);let l=yn(n,o,t,r,i.recurringTypes);for(let t of l){let n=vn(e,{start:t,end:r.add(t,o)});a[n.instanceId]=n}}}return{defs:o,instances:a}}function yn(e,t,n,r,i){let s=i[e.recurringDef.typeId].expand(e.recurringDef.typeData,{start:r.subtract(n.start,t),end:n.end},r);return e.allDay&&(s=s.map(kt)),s}function En(e,t,n,r){let i={defs:{},instances:{}},s=Bn(n);for(let o of e){let e=Pn(o,t,n,r,s);e&&An(e,i)}return i}function An(e,t={defs:{},instances:{}}){return t.defs[e.def.defId]=e.def,e.instance&&(t.instances[e.instance.instanceId]=e.instance),t}function Dn(e,t){let n=e.instances[t];if(n){let t=e.defs[n.defId],r=Cn(e,e=>{return n=t,r=e,Boolean(n.groupId&&n.groupId===r.groupId);var n,r});return r.defs[t.defId]=t,r.instances[n.instanceId]=n,r}return{defs:{},instances:{}}}function Sn(){return{defs:{},instances:{}}}function wn(e,t){return{defs:Object.assign(Object.assign({},e.defs),t.defs),instances:Object.assign(Object.assign({},e.instances),t.instances)}}function Cn(e,t){let n=ut(e.defs,t),r=ut(e.instances,e=>n[e.defId]);return{defs:n,instances:r}}function Rn(e){return Array.isArray(e)?e:"string"==typeof e?e.split(/\s+/):[]}const xn={display:String,editable:Boolean,startEditable:Boolean,durationEditable:Boolean,constraint:mn,overlap:mn,allow:mn,className:Rn,classNames:Rn,color:String,backgroundColor:String,borderColor:String,textColor:String},_n={display:null,startEditable:null,durationEditable:null,constraints:[],overlap:null,allows:[],backgroundColor:"",borderColor:"",textColor:"",classNames:[]};function Tn(e,t){let n=function(e,t){return Array.isArray(e)?En(e,null,t,!0):"object"==typeof e&&e?En([e],null,t,!0):null!=e?String(e):null}(e.constraint,t);return{display:e.display||null,startEditable:null!=e.startEditable?e.startEditable:e.editable,durationEditable:null!=e.durationEditable?e.durationEditable:e.editable,constraints:null!=n?[n]:[],overlap:null!=e.overlap?e.overlap:null,allows:null!=e.allow?[e.allow]:[],backgroundColor:e.backgroundColor||e.color||"",borderColor:e.borderColor||e.color||"",textColor:e.textColor||"",classNames:(e.className||[]).concat(e.classNames||[])}}function kn(e){return e.reduce(Mn,_n)}function Mn(e,t){return{display:null!=t.display?t.display:e.display,startEditable:null!=t.startEditable?t.startEditable:e.startEditable,durationEditable:null!=t.durationEditable?t.durationEditable:e.durationEditable,constraints:e.constraints.concat(t.constraints),overlap:"boolean"==typeof t.overlap?t.overlap:e.overlap,allows:e.allows.concat(t.allows),backgroundColor:t.backgroundColor||e.backgroundColor,borderColor:t.borderColor||e.borderColor,textColor:t.textColor||e.textColor,classNames:e.classNames.concat(t.classNames)}}const In={id:String,groupId:String,title:String,url:String,interactive:Boolean},On={start:mn,end:mn,date:mn,allDay:Boolean},Nn=Object.assign(Object.assign(Object.assign({},In),On),{extendedProps:mn});function Pn(e,t,n,r,i=Bn(n)){let{refined:s,extra:o}=Hn(e,n,i),a=function(e,t){let n=null;e&&(n=e.defaultAllDay);null==n&&(n=t.options.defaultAllDay);return n}(t,n),l=function(e,t,n,r){for(let i=0;i<r.length;i+=1){let s=r[i].parse(e,n);if(s){let{allDay:n}=e;return null==n&&(n=t,null==n&&(n=s.allDayGuess,null==n&&(n=!1))),{allDay:n,duration:s.duration,typeData:s.typeData,typeId:i}}}return null}(s,a,n.dateEnv,n.pluginHooks.recurringTypes);if(l){let e=jn(s,o,t?t.sourceId:"",l.allDay,Boolean(l.duration),n);return e.recurringDef={typeId:l.typeId,typeData:l.typeData,duration:l.duration},{def:e,instance:null}}let c=function(e,t,n,r){let i,s,{allDay:o}=e,a=null,l=!1,c=null,d=null!=e.start?e.start:e.date;if(i=n.dateEnv.createMarkerMeta(d),i)a=i.marker;else if(!r)return null;null!=e.end&&(s=n.dateEnv.createMarkerMeta(e.end));null==o&&(o=null!=t?t:(!i||i.isTimeUnspecified)&&(!s||s.isTimeUnspecified));o&&a&&(a=kt(a));s&&(c=s.marker,o&&(c=kt(c)),a&&c<=a&&(c=null));c?l=!0:r||(l=n.options.forceEventDuration||!1,c=n.dateEnv.add(a,o?n.options.defaultAllDayEventDuration:n.options.defaultTimedEventDuration));return{allDay:o,hasEnd:l,range:{start:a,end:c},forcedStartTzo:i?i.forcedTzo:null,forcedEndTzo:s?s.forcedTzo:null}}(s,a,n,r);if(c){let e=jn(s,o,t?t.sourceId:"",c.allDay,c.hasEnd,n);return{def:e,instance:vn(e.defId,c.range,c.forcedStartTzo,c.forcedEndTzo)}}return null}function Hn(e,t,n=Bn(t)){return pn(e,n)}function Bn(e){return Object.assign(Object.assign(Object.assign({},xn),Nn),e.pluginHooks.eventRefiners)}function jn(e,t,n,r,i,s){let o={title:e.title||"",groupId:e.groupId||"",publicId:e.id||"",url:e.url||"",recurringDef:null,defId:Be(),sourceId:n,allDay:r,hasEnd:i,interactive:e.interactive,ui:Tn(e,s),extendedProps:Object.assign(Object.assign({},e.extendedProps||{}),t)};for(let t of s.pluginHooks.eventDefMemberAdders)Object.assign(o,t(e));return Object.freeze(o.ui.classNames),Object.freeze(o.extendedProps),o}const zn={startTime:"09:00",endTime:"17:00",daysOfWeek:[1,2,3,4,5],display:"inverse-background",classNames:"fc-non-business",groupId:"_businessHours"};function Un(e,t){return En(function(e){let t;t=!0===e?[{}]:Array.isArray(e)?e.filter(e=>e.daysOfWeek):"object"==typeof e&&e?[e]:[];return t=t.map(e=>Object.assign(Object.assign({},zn),e)),t}(e),null,t)}function Ln(e){let t=Math.floor(Rt(e.start,e.end))||1,n=kt(e.start);return{start:n,end:St(n,t)}}function Wn(e,t=tt(0)){let n=null,r=null;if(e.end){r=kt(e.end);let n=e.end.valueOf()-r.valueOf();n&&n>=ot(t)&&(r=St(r,1))}return e.start&&(n=kt(e.start),r&&r<=n&&(r=St(n,1))),{start:n,end:r}}function Fn(e){let t=Wn(e);return Rt(t.start,t.end)>1}function Vn(e,t,n,r){return"year"===r?tt(n.diffWholeYears(e,t),"year"):"month"===r?tt(n.diffWholeMonths(e,t),"month"):xt(e,t)}function Gn(e,t){return e.left>=t.left&&e.left<t.right&&e.top>=t.top&&e.top<t.bottom}function Qn(e,t){let n={left:Math.max(e.left,t.left),right:Math.min(e.right,t.right),top:Math.max(e.top,t.top),bottom:Math.min(e.bottom,t.bottom)};return n.left<n.right&&n.top<n.bottom&&n}function qn(e,t){return{left:Math.min(Math.max(e.left,t.left),t.right),top:Math.min(Math.max(e.top,t.top),t.bottom)}}function Yn(e){return{left:(e.left+e.right)/2,top:(e.top+e.bottom)/2}}function Zn(e,t){return{left:e.left-t.left,top:e.top-t.top}}let Xn;function Jn(){return null==Xn&&(Xn=function(){if("undefined"==typeof document)return!0;let e=document.createElement("div");e.style.position="absolute",e.style.top="0px",e.style.left="0px",e.innerHTML="<table><tr><td><div></div></td></tr></table>",e.querySelector("table").style.height="100px",e.querySelector("div").style.height="100%",document.body.appendChild(e);let t=e.querySelector("div").offsetHeight>0;return document.body.removeChild(e),t}()),Xn}const $n={defs:{},instances:{}};class Kn{constructor(){this.getKeysForEventDefs=Vt(this._getKeysForEventDefs),this.splitDateSelection=Vt(this._splitDateSpan),this.splitEventStore=Vt(this._splitEventStore),this.splitIndividualUi=Vt(this._splitIndividualUi),this.splitEventDrag=Vt(this._splitInteraction),this.splitEventResize=Vt(this._splitInteraction),this.eventUiBuilders={}}splitProps(e){let t=this.getKeyInfo(e),n=this.getKeysForEventDefs(e.eventStore),r=this.splitDateSelection(e.dateSelection),i=this.splitIndividualUi(e.eventUiBases,n),s=this.splitEventStore(e.eventStore,n),o=this.splitEventDrag(e.eventDrag),a=this.splitEventResize(e.eventResize),l={};this.eventUiBuilders=ht(t,(e,t)=>this.eventUiBuilders[t]||Vt(er));for(let n in t){let c=t[n],d=s[n]||$n,u=this.eventUiBuilders[n];l[n]={businessHours:c.businessHours||e.businessHours,dateSelection:r[n]||null,eventStore:d,eventUiBases:u(e.eventUiBases[""],c.ui,i[n]),eventSelection:d.instances[e.eventSelection]?e.eventSelection:"",eventDrag:o[n]||null,eventResize:a[n]||null}}return l}_splitDateSpan(e){let t={};if(e){let n=this.getKeysForDateSpan(e);for(let r of n)t[r]=e}return t}_getKeysForEventDefs(e){return ht(e.defs,e=>this.getKeysForEventDef(e))}_splitEventStore(e,t){let{defs:n,instances:r}=e,i={};for(let e in n)for(let r of t[e])i[r]||(i[r]={defs:{},instances:{}}),i[r].defs[e]=n[e];for(let e in r){let n=r[e];for(let r of t[n.defId])i[r]&&(i[r].instances[e]=n)}return i}_splitIndividualUi(e,t){let n={};for(let r in e)if(r)for(let i of t[r])n[i]||(n[i]={}),n[i][r]=e[r];return n}_splitInteraction(e){let t={};if(e){let n=this._splitEventStore(e.affectedEvents,this._getKeysForEventDefs(e.affectedEvents)),r=this._getKeysForEventDefs(e.mutatedEvents),i=this._splitEventStore(e.mutatedEvents,r),s=r=>{t[r]||(t[r]={affectedEvents:n[r]||$n,mutatedEvents:i[r]||$n,isEvent:e.isEvent})};for(let e in n)s(e);for(let e in i)s(e)}return t}}function er(e,t,n){let r=[];e&&r.push(e),t&&r.push(t);let i={"":kn(r)};return n&&Object.assign(i,n),i}function tr(e,t){let n,r,i=[],{start:s}=t;for(e.sort(nr),n=0;n<e.length;n+=1)r=e[n],r.start>s&&i.push({start:s,end:r.start}),r.end>s&&(s=r.end);return s<t.end&&i.push({start:s,end:t.end}),i}function nr(e,t){return e.start.valueOf()-t.start.valueOf()}function rr(e,t){let{start:n,end:r}=e,i=null;return null!==t.start&&(n=null===n?t.start:new Date(Math.max(n.valueOf(),t.start.valueOf()))),null!=t.end&&(r=null===r?t.end:new Date(Math.min(r.valueOf(),t.end.valueOf()))),(null===n||null===r||n<r)&&(i={start:n,end:r}),i}function ir(e,t){return(null===e.start?null:e.start.valueOf())===(null===t.start?null:t.start.valueOf())&&(null===e.end?null:e.end.valueOf())===(null===t.end?null:t.end.valueOf())}function sr(e,t){return(null===e.end||null===t.start||e.end>t.start)&&(null===e.start||null===t.end||e.start<t.end)}function or(e,t){return(null===e.start||null!==t.start&&t.start>=e.start)&&(null===e.end||null!==t.end&&t.end<=e.end)}function ar(e,t){return(null===e.start||t>=e.start)&&(null===e.end||t<e.end)}function lr(e,t,n,r){return{dow:e.getUTCDay(),isDisabled:Boolean(r&&!ar(r.activeRange,e)),isOther:Boolean(r&&!ar(r.currentRange,e)),isToday:Boolean(t&&ar(t,e)),isPast:Boolean(n?e<n:!!t&&e<t.start),isFuture:Boolean(n?e>n:!!t&&e>=t.end)}}function cr(e,t){let n=["fc-day","fc-day-"+At[e.dow]];return e.isDisabled?n.push("fc-day-disabled"):(e.isToday&&(n.push("fc-day-today"),n.push(t.getClass("today"))),e.isPast&&n.push("fc-day-past"),e.isFuture&&n.push("fc-day-future"),e.isOther&&n.push("fc-day-other")),n}const dr=on({year:"numeric",month:"long",day:"numeric"}),ur=on({week:"long"});function hr(e,t,n="day",r=!0){const{dateEnv:i,options:s,calendarApi:o}=e;let a=i.format(t,"week"===n?ur:dr);if(s.navLinks){let e=i.toDate(t);const l=e=>{let r="day"===n?s.navLinkDayClick:"week"===n?s.navLinkWeekClick:null;"function"==typeof r?r.call(o,i.toDate(t),e):("string"==typeof r&&(n=r),o.zoomTo(t,n))};return Object.assign({title:Ze(s.navLinkHint,[a,e],a),"data-navlink":""},r?Ne(l):{onClick:l})}return{"aria-label":a}}let fr,gr=null;function pr(){return null===gr&&(gr=function(){let e=document.createElement("div");we(e,{position:"absolute",top:-1e3,left:0,border:0,padding:0,overflow:"scroll",direction:"rtl"}),e.innerHTML="<div></div>",document.body.appendChild(e);let t=e.firstChild.getBoundingClientRect().left>e.getBoundingClientRect().left;return ye(e),t}()),gr}function mr(){return fr||(fr=function(){let e=document.createElement("div");e.style.overflow="scroll",e.style.position="absolute",e.style.top="-9999px",e.style.left="-9999px",document.body.appendChild(e);let t=vr(e);return document.body.removeChild(e),t}()),fr}function vr(e){return{x:e.offsetHeight-e.clientHeight,y:e.offsetWidth-e.clientWidth}}function br(e,t=!1){let n=window.getComputedStyle(e),r=parseInt(n.borderLeftWidth,10)||0,i=parseInt(n.borderRightWidth,10)||0,s=parseInt(n.borderTopWidth,10)||0,o=parseInt(n.borderBottomWidth,10)||0,a=vr(e),l=a.y-r-i,c={borderLeft:r,borderRight:i,borderTop:s,borderBottom:o,scrollbarBottom:a.x-s-o,scrollbarLeft:0,scrollbarRight:0};return pr()&&"rtl"===n.direction?c.scrollbarLeft=l:c.scrollbarRight=l,t&&(c.paddingLeft=parseInt(n.paddingLeft,10)||0,c.paddingRight=parseInt(n.paddingRight,10)||0,c.paddingTop=parseInt(n.paddingTop,10)||0,c.paddingBottom=parseInt(n.paddingBottom,10)||0),c}function yr(e,t=!1,n){let r=n?e.getBoundingClientRect():Er(e),i=br(e,t),s={left:r.left+i.borderLeft+i.scrollbarLeft,right:r.right-i.borderRight-i.scrollbarRight,top:r.top+i.borderTop,bottom:r.bottom-i.borderBottom-i.scrollbarBottom};return t&&(s.left+=i.paddingLeft,s.right-=i.paddingRight,s.top+=i.paddingTop,s.bottom-=i.paddingBottom),s}function Er(e){let t=e.getBoundingClientRect();return{left:t.left+window.pageXOffset,top:t.top+window.pageYOffset,right:t.right+window.pageXOffset,bottom:t.bottom+window.pageYOffset}}function Ar(e){let t=[];for(;e instanceof HTMLElement;){let n=window.getComputedStyle(e);if("fixed"===n.position)break;/(auto|scroll)/.test(n.overflow+n.overflowY+n.overflowX)&&t.push(e),e=e.parentNode}return t}function Dr(e,t,n){let r=!1,i=function(e){r||(r=!0,t(e))},s=function(e){r||(r=!0,n(e))},o=e(i,s);o&&"function"==typeof o.then&&o.then(i,s)}class Sr{constructor(){this.handlers={},this.thisContext=null}setThisContext(e){this.thisContext=e}setOptions(e){this.options=e}on(e,t){!function(e,t,n){(e[t]||(e[t]=[])).push(n)}(this.handlers,e,t)}off(e,t){!function(e,t,n){n?e[t]&&(e[t]=e[t].filter(e=>e!==n)):delete e[t]}(this.handlers,e,t)}trigger(e,...t){let n=this.handlers[e]||[],r=this.options&&this.options[e],i=[].concat(r||[],n);for(let e of i)e.apply(this.thisContext,t)}hasHandlers(e){return Boolean(this.handlers[e]&&this.handlers[e].length||this.options&&this.options[e])}}class wr{constructor(e,t,n,r){this.els=t;let i=this.originClientRect=e.getBoundingClientRect();n&&this.buildElHorizontals(i.left),r&&this.buildElVerticals(i.top)}buildElHorizontals(e){let t=[],n=[];for(let r of this.els){let i=r.getBoundingClientRect();t.push(i.left-e),n.push(i.right-e)}this.lefts=t,this.rights=n}buildElVerticals(e){let t=[],n=[];for(let r of this.els){let i=r.getBoundingClientRect();t.push(i.top-e),n.push(i.bottom-e)}this.tops=t,this.bottoms=n}leftToIndex(e){let t,{lefts:n,rights:r}=this,i=n.length;for(t=0;t<i;t+=1)if(e>=n[t]&&e<r[t])return t}topToIndex(e){let t,{tops:n,bottoms:r}=this,i=n.length;for(t=0;t<i;t+=1)if(e>=n[t]&&e<r[t])return t}getWidth(e){return this.rights[e]-this.lefts[e]}getHeight(e){return this.bottoms[e]-this.tops[e]}similarTo(e){return Cr(this.tops||[],e.tops||[])&&Cr(this.bottoms||[],e.bottoms||[])&&Cr(this.lefts||[],e.lefts||[])&&Cr(this.rights||[],e.rights||[])}}function Cr(e,t){const n=e.length;if(n!==t.length)return!1;for(let r=0;r<n;r++)if(Math.round(e[r])!==Math.round(t[r]))return!1;return!0}class Rr{getMaxScrollTop(){return this.getScrollHeight()-this.getClientHeight()}getMaxScrollLeft(){return this.getScrollWidth()-this.getClientWidth()}canScrollVertically(){return this.getMaxScrollTop()>0}canScrollHorizontally(){return this.getMaxScrollLeft()>0}canScrollUp(){return this.getScrollTop()>0}canScrollDown(){return this.getScrollTop()<this.getMaxScrollTop()}canScrollLeft(){return this.getScrollLeft()>0}canScrollRight(){return this.getScrollLeft()<this.getMaxScrollLeft()}}class xr extends Rr{constructor(e){super(),this.el=e}getScrollTop(){return this.el.scrollTop}getScrollLeft(){return this.el.scrollLeft}setScrollTop(e){this.el.scrollTop=e}setScrollLeft(e){this.el.scrollLeft=e}getScrollWidth(){return this.el.scrollWidth}getScrollHeight(){return this.el.scrollHeight}getClientHeight(){return this.el.clientHeight}getClientWidth(){return this.el.clientWidth}}class _r extends Rr{getScrollTop(){return window.pageYOffset}getScrollLeft(){return window.pageXOffset}setScrollTop(e){window.scroll(window.pageXOffset,e)}setScrollLeft(e){window.scroll(e,window.pageYOffset)}getScrollWidth(){return document.documentElement.scrollWidth}getScrollHeight(){return document.documentElement.scrollHeight}getClientHeight(){return document.documentElement.clientHeight}getClientWidth(){return document.documentElement.clientWidth}}class Tr{constructor(e){this.iconOverrideOption&&this.setIconOverride(e[this.iconOverrideOption])}setIconOverride(e){let t,n;if("object"==typeof e&&e){for(n in t=Object.assign({},this.iconClasses),e)t[n]=this.applyIconOverridePrefix(e[n]);this.iconClasses=t}else!1===e&&(this.iconClasses={})}applyIconOverridePrefix(e){let t=this.iconOverridePrefix;return t&&0!==e.indexOf(t)&&(e=t+e),e}getClass(e){return this.classes[e]||""}getIconClass(e,t){let n;return n=t&&this.rtlIconClasses&&this.rtlIconClasses[e]||this.iconClasses[e],n?`${this.baseIconClass} ${n}`:""}getCustomButtonIconClass(e){let t;return this.iconOverrideCustomButtonOption&&(t=e[this.iconOverrideCustomButtonOption],t)?`${this.baseIconClass} ${this.applyIconOverridePrefix(t)}`:""}}function kr(e){e();let t=n.debounceRendering,r=[];for(n.debounceRendering=function(e){r.push(e)},P(f(Mr,{}),document.createElement("div"));r.length;)r.shift()();n.debounceRendering=t}Tr.prototype.classes={},Tr.prototype.iconClasses={},Tr.prototype.baseIconClass="",Tr.prototype.iconOverridePrefix="";class Mr extends m{render(){return f("div",{})}componentDidMount(){this.setState({})}}function Ir(e){let t=function(e,t){var n={__c:t="__cC"+a++,__:e,Consumer:function(e,t){return e.children(t)},Provider:function(e){var n,r;return this.getChildContext||(n=[],(r={})[t]=this,this.getChildContext=function(){return r},this.shouldComponentUpdate=function(e){this.props.value!==e.value&&n.some(y)},this.sub=function(e){n.push(e);var t=e.componentWillUnmount;e.componentWillUnmount=function(){n.splice(n.indexOf(e),1),t&&t.call(e)}}),e.children}};return n.Provider.__=n.Consumer.contextType=n}(e),n=t.Provider;return t.Provider=function(){let e=!this.getChildContext,t=n.apply(this,arguments);if(e){let e=[];this.shouldComponentUpdate=t=>{this.props.value!==t.value&&e.forEach(e=>{e.context=t.value,e.forceUpdate()})},this.sub=t=>{e.push(t);let n=t.componentWillUnmount;t.componentWillUnmount=()=>{e.splice(e.indexOf(t),1),n&&n.call(t)}}}return t},t}class Or{constructor(e,t,n,r){this.execFunc=e,this.emitter=t,this.scrollTime=n,this.scrollTimeReset=r,this.handleScrollRequest=e=>{this.queuedRequest=Object.assign({},this.queuedRequest||{},e),this.drain()},t.on("_scrollRequest",this.handleScrollRequest),this.fireInitialScroll()}detach(){this.emitter.off("_scrollRequest",this.handleScrollRequest)}update(e){e&&this.scrollTimeReset?this.fireInitialScroll():this.drain()}fireInitialScroll(){this.handleScrollRequest({time:this.scrollTime})}drain(){this.queuedRequest&&this.execFunc(this.queuedRequest)&&(this.queuedRequest=null)}}const Nr=Ir({});function Pr(e,t,n,r,i,s,o,a,l,c,d,u,h){return{dateEnv:i,options:n,pluginHooks:o,emitter:c,dispatch:a,getCurrentData:l,calendarApi:d,viewSpec:e,viewApi:t,dateProfileGenerator:r,theme:s,isRtl:"rtl"===n.direction,addResizeHandler(e){c.on("_resize",e)},removeResizeHandler(e){c.off("_resize",e)},createScrollResponder:e=>new Or(e,c,tt(n.scrollTime),n.scrollTimeReset),registerInteractiveComponent:u,unregisterInteractiveComponent:h}}class Hr extends m{shouldComponentUpdate(e,t){return this.debug&&console.log(vt(e,this.props),vt(t,this.state)),!bt(this.props,e,this.propEquality)||!bt(this.state,t,this.stateEquality)}safeSetState(e){bt(this.state,Object.assign(Object.assign({},this.state),e),this.stateEquality)||this.setState(e)}}Hr.addPropsEquality=function(e){let t=Object.create(this.prototype.propEquality);Object.assign(t,e),this.prototype.propEquality=t},Hr.addStateEquality=function(e){let t=Object.create(this.prototype.stateEquality);Object.assign(t,e),this.prototype.stateEquality=t},Hr.contextType=Nr,Hr.prototype.propEquality={},Hr.prototype.stateEquality={};class Br extends Hr{}function jr(e,t){"function"==typeof e?e(t):e&&(e.current=t)}Br.contextType=Nr;class zr extends Br{constructor(){super(...arguments),this.uid=Be()}prepareHits(){}queryHit(e,t,n,r){return null}isValidSegDownEl(e){return!this.props.eventDrag&&!this.props.eventResize&&!Ee(e,".fc-event-mirror")}isValidDateDownEl(e){return!(Ee(e,".fc-event:not(.fc-bg-event)")||Ee(e,".fc-more-link")||Ee(e,"a[data-navlink]")||Ee(e,".fc-popover"))}}function Ur(e,t){return"function"==typeof e&&(e=e()),null==e?t.createNowMarker():t.createMarker(e)}class Lr{constructor(e){this.props=e,this.nowDate=Ur(e.nowInput,e.dateEnv),this.initHiddenDays()}buildPrev(e,t,n){let{dateEnv:r}=this.props,i=r.subtract(r.startOf(t,e.currentRangeUnit),e.dateIncrement);return this.build(i,-1,n)}buildNext(e,t,n){let{dateEnv:r}=this.props,i=r.add(r.startOf(t,e.currentRangeUnit),e.dateIncrement);return this.build(i,1,n)}build(e,t,n=!0){let r,i,s,o,a,l,{props:c}=this;var d,u;return r=this.buildValidRange(),r=this.trimHiddenDays(r),n&&(d=e,e=null!=(u=r).start&&d<u.start?u.start:null!=u.end&&d>=u.end?new Date(u.end.valueOf()-1):d),i=this.buildCurrentRangeInfo(e,t),s=/^(year|month|week|day)$/.test(i.unit),o=this.buildRenderRange(this.trimHiddenDays(i.range),i.unit,s),o=this.trimHiddenDays(o),a=o,c.showNonCurrentDates||(a=rr(a,i.range)),a=this.adjustActiveRange(a),a=rr(a,r),l=sr(i.range,r),{validRange:r,currentRange:i.range,currentRangeUnit:i.unit,isRangeAllDay:s,activeRange:a,renderRange:o,slotMinTime:c.slotMinTime,slotMaxTime:c.slotMaxTime,isValid:l,dateIncrement:this.buildDateIncrement(i.duration)}}buildValidRange(){let e=this.props.validRangeInput,t="function"==typeof e?e.call(this.props.calendarApi,this.nowDate):e;return this.refineRange(t)||{start:null,end:null}}buildCurrentRangeInfo(e,t){let n,{props:r}=this,i=null,s=null,o=null;return r.duration?(i=r.duration,s=r.durationUnit,o=this.buildRangeFromDuration(e,t,i,s)):(n=this.props.dayCount)?(s="day",o=this.buildRangeFromDayCount(e,t,n)):(o=this.buildCustomVisibleRange(e))?s=r.dateEnv.greatestWholeUnit(o.start,o.end).unit:(i=this.getFallbackDuration(),s=lt(i).unit,o=this.buildRangeFromDuration(e,t,i,s)),{duration:i,unit:s,range:o}}getFallbackDuration(){return tt({day:1})}adjustActiveRange(e){let{dateEnv:t,usesMinMaxTime:n,slotMinTime:r,slotMaxTime:i}=this.props,{start:s,end:o}=e;return n&&(st(r)<0&&(s=kt(s),s=t.add(s,r)),st(i)>1&&(o=kt(o),o=St(o,-1),o=t.add(o,i))),{start:s,end:o}}buildRangeFromDuration(e,t,n,r){let i,s,o,{dateEnv:a,dateAlignment:l}=this.props;if(!l){let{dateIncrement:e}=this.props;l=e&&ot(e)<ot(n)?lt(e).unit:r}function c(){i=a.startOf(e,l),s=a.add(i,n),o={start:i,end:s}}return st(n)<=1&&this.isHiddenDay(i)&&(i=this.skipHiddenDays(i,t),i=kt(i)),c(),this.trimHiddenDays(o)||(e=this.skipHiddenDays(e,t),c()),o}buildRangeFromDayCount(e,t,n){let r,{dateEnv:i,dateAlignment:s}=this.props,o=0,a=e;s&&(a=i.startOf(a,s)),a=kt(a),a=this.skipHiddenDays(a,t),r=a;do{r=St(r,1),this.isHiddenDay(r)||(o+=1)}while(o<n);return{start:a,end:r}}buildCustomVisibleRange(e){let{props:t}=this,n=t.visibleRangeInput,r="function"==typeof n?n.call(t.calendarApi,t.dateEnv.toDate(e)):n,i=this.refineRange(r);return!i||null!=i.start&&null!=i.end?i:null}buildRenderRange(e,t,n){return e}buildDateIncrement(e){let t,{dateIncrement:n}=this.props;return n||((t=this.props.dateAlignment)?tt(1,t):e||tt({days:1}))}refineRange(e){if(e){let t=function(e,t){let n=null,r=null;return e.start&&(n=t.createMarker(e.start)),e.end&&(r=t.createMarker(e.end)),n||r?n&&r&&r<n?null:{start:n,end:r}:null}(e,this.props.dateEnv);return t&&(t=Wn(t)),t}return null}initHiddenDays(){let e,t=this.props.hiddenDays||[],n=[],r=0;for(!1===this.props.weekends&&t.push(0,6),e=0;e<7;e+=1)(n[e]=-1!==t.indexOf(e))||(r+=1);if(!r)throw new Error("invalid hiddenDays");this.isHiddenDayHash=n}trimHiddenDays(e){let{start:t,end:n}=e;return t&&(t=this.skipHiddenDays(t)),n&&(n=this.skipHiddenDays(n,-1,!0)),null==t||null==n||t<n?{start:t,end:n}:null}isHiddenDay(e){return e instanceof Date&&(e=e.getUTCDay()),this.isHiddenDayHash[e]}skipHiddenDays(e,t=1,n=!1){for(;this.isHiddenDayHash[(e.getUTCDay()+(n?t:0)+7)%7];)e=St(e,t);return e}}function Wr(e,t,n){n.emitter.trigger("select",Object.assign(Object.assign({},Fr(e,n)),{jsEvent:t?t.origEvent:null,view:n.viewApi||n.calendarApi.view}))}function Fr(e,t){let n={};for(let r of t.pluginHooks.dateSpanTransforms)Object.assign(n,r(e,t));var r,i;return Object.assign(n,(r=e,i=t.dateEnv,Object.assign(Object.assign({},bi(r.range,i,r.allDay)),{allDay:r.allDay}))),n}function Vr(e,t,n){let{dateEnv:r,options:i}=n,s=t;return e?(s=kt(s),s=r.add(s,i.defaultAllDayEventDuration)):s=r.add(s,i.defaultTimedEventDuration),s}function Gr(e,t,n,r){let i=ni(e.defs,t),s={defs:{},instances:{}};for(let t in e.defs){let o=e.defs[t];s.defs[t]=Qr(o,i[t],n,r)}for(let t in e.instances){let o=e.instances[t],a=s.defs[o.defId];s.instances[t]=qr(o,a,i[o.defId],n,r)}return s}function Qr(e,t,n,r){let i=n.standardProps||{};null==i.hasEnd&&t.durationEditable&&(n.startDelta||n.endDelta)&&(i.hasEnd=!0);let s=Object.assign(Object.assign(Object.assign({},e),i),{ui:Object.assign(Object.assign({},e.ui),i.ui)});n.extendedProps&&(s.extendedProps=Object.assign(Object.assign({},s.extendedProps),n.extendedProps));for(let e of r.pluginHooks.eventDefMutationAppliers)e(s,n,r);return!s.hasEnd&&r.options.forceEventDuration&&(s.hasEnd=!0),s}function qr(e,t,n,r,i){let{dateEnv:s}=i,o=r.standardProps&&!0===r.standardProps.allDay,a=r.standardProps&&!1===r.standardProps.hasEnd,l=Object.assign({},e);return o&&(l.range=Ln(l.range)),r.datesDelta&&n.startEditable&&(l.range={start:s.add(l.range.start,r.datesDelta),end:s.add(l.range.end,r.datesDelta)}),r.startDelta&&n.durationEditable&&(l.range={start:s.add(l.range.start,r.startDelta),end:l.range.end}),r.endDelta&&n.durationEditable&&(l.range={start:l.range.start,end:s.add(l.range.end,r.endDelta)}),a&&(l.range={start:l.range.start,end:Vr(t.allDay,l.range.start,i)}),t.allDay&&(l.range={start:kt(l.range.start),end:kt(l.range.end)}),l.range.end<l.range.start&&(l.range.end=Vr(t.allDay,l.range.start,i)),l}class Yr{constructor(e,t){this.context=e,this.internalEventSource=t}remove(){this.context.dispatch({type:"REMOVE_EVENT_SOURCE",sourceId:this.internalEventSource.sourceId})}refetch(){this.context.dispatch({type:"FETCH_EVENT_SOURCES",sourceIds:[this.internalEventSource.sourceId],isRefetch:!0})}get id(){return this.internalEventSource.publicId}get url(){return this.internalEventSource.meta.url}get format(){return this.internalEventSource.meta.format}}class Zr{constructor(e,t,n){this._context=e,this._def=t,this._instance=n||null}setProp(e,t){if(e in On)console.warn("Could not set date-related prop 'name'. Use one of the date-related methods instead.");else if("id"===e)t=In[e](t),this.mutate({standardProps:{publicId:t}});else if(e in In)t=In[e](t),this.mutate({standardProps:{[e]:t}});else if(e in xn){let n=xn[e](t);n="color"===e?{backgroundColor:t,borderColor:t}:"editable"===e?{startEditable:t,durationEditable:t}:{[e]:t},this.mutate({standardProps:{ui:n}})}else console.warn(`Could not set prop '${e}'. Use setExtendedProp instead.`)}setExtendedProp(e,t){this.mutate({extendedProps:{[e]:t}})}setStart(e,t={}){let{dateEnv:n}=this._context,r=n.createMarker(e);if(r&&this._instance){let e=Vn(this._instance.range.start,r,n,t.granularity);t.maintainDuration?this.mutate({datesDelta:e}):this.mutate({startDelta:e})}}setEnd(e,t={}){let n,{dateEnv:r}=this._context;if((null==e||(n=r.createMarker(e),n))&&this._instance)if(n){let e=Vn(this._instance.range.end,n,r,t.granularity);this.mutate({endDelta:e})}else this.mutate({standardProps:{hasEnd:!1}})}setDates(e,t,n={}){let r,{dateEnv:i}=this._context,s={allDay:n.allDay},o=i.createMarker(e);var a,l;if(o&&((null==t||(r=i.createMarker(t),r))&&this._instance)){let e=this._instance.range;!0===n.allDay&&(e=Ln(e));let t=Vn(e.start,o,i,n.granularity);if(r){let o=Vn(e.end,r,i,n.granularity);l=o,(a=t).years===l.years&&a.months===l.months&&a.days===l.days&&a.milliseconds===l.milliseconds?this.mutate({datesDelta:t,standardProps:s}):this.mutate({startDelta:t,endDelta:o,standardProps:s})}else s.hasEnd=!1,this.mutate({datesDelta:t,standardProps:s})}}moveStart(e){let t=tt(e);t&&this.mutate({startDelta:t})}moveEnd(e){let t=tt(e);t&&this.mutate({endDelta:t})}moveDates(e){let t=tt(e);t&&this.mutate({datesDelta:t})}setAllDay(e,t={}){let n={allDay:e},{maintainDuration:r}=t;null==r&&(r=this._context.options.allDayMaintainDuration),this._def.allDay!==e&&(n.hasEnd=r),this.mutate({standardProps:n})}formatRange(e){let{dateEnv:t}=this._context,n=this._instance,r=on(e);return this._def.hasEnd?t.formatRange(n.range.start,n.range.end,r,{forcedStartTzo:n.forcedStartTzo,forcedEndTzo:n.forcedEndTzo}):t.format(n.range.start,r,{forcedTzo:n.forcedStartTzo})}mutate(e){let t=this._instance;if(t){let n=this._def,r=this._context,{eventStore:i}=r.getCurrentData(),s=Dn(i,t.instanceId);s=Gr(s,{"":{display:"",startEditable:!0,durationEditable:!0,constraints:[],overlap:null,allows:[],backgroundColor:"",borderColor:"",textColor:"",classNames:[]}},e,r);let o=new Zr(r,n,t);this._def=s.defs[n.defId],this._instance=s.instances[t.instanceId],r.dispatch({type:"MERGE_EVENTS",eventStore:s}),r.emitter.trigger("eventChange",{oldEvent:o,event:this,relatedEvents:Jr(s,r,t),revert(){r.dispatch({type:"RESET_EVENTS",eventStore:i})}})}}remove(){let e=this._context,t=Xr(this);e.dispatch({type:"REMOVE_EVENTS",eventStore:t}),e.emitter.trigger("eventRemove",{event:this,relatedEvents:[],revert(){e.dispatch({type:"MERGE_EVENTS",eventStore:t})}})}get source(){let{sourceId:e}=this._def;return e?new Yr(this._context,this._context.getCurrentData().eventSources[e]):null}get start(){return this._instance?this._context.dateEnv.toDate(this._instance.range.start):null}get end(){return this._instance&&this._def.hasEnd?this._context.dateEnv.toDate(this._instance.range.end):null}get startStr(){let e=this._instance;return e?this._context.dateEnv.formatIso(e.range.start,{omitTime:this._def.allDay,forcedTzo:e.forcedStartTzo}):""}get endStr(){let e=this._instance;return e&&this._def.hasEnd?this._context.dateEnv.formatIso(e.range.end,{omitTime:this._def.allDay,forcedTzo:e.forcedEndTzo}):""}get id(){return this._def.publicId}get groupId(){return this._def.groupId}get allDay(){return this._def.allDay}get title(){return this._def.title}get url(){return this._def.url}get display(){return this._def.ui.display||"auto"}get startEditable(){return this._def.ui.startEditable}get durationEditable(){return this._def.ui.durationEditable}get constraint(){return this._def.ui.constraints[0]||null}get overlap(){return this._def.ui.overlap}get allow(){return this._def.ui.allows[0]||null}get backgroundColor(){return this._def.ui.backgroundColor}get borderColor(){return this._def.ui.borderColor}get textColor(){return this._def.ui.textColor}get classNames(){return this._def.ui.classNames}get extendedProps(){return this._def.extendedProps}toPlainObject(e={}){let t=this._def,{ui:n}=t,{startStr:r,endStr:i}=this,s={};return t.title&&(s.title=t.title),r&&(s.start=r),i&&(s.end=i),t.publicId&&(s.id=t.publicId),t.groupId&&(s.groupId=t.groupId),t.url&&(s.url=t.url),n.display&&"auto"!==n.display&&(s.display=n.display),e.collapseColor&&n.backgroundColor&&n.backgroundColor===n.borderColor?s.color=n.backgroundColor:(n.backgroundColor&&(s.backgroundColor=n.backgroundColor),n.borderColor&&(s.borderColor=n.borderColor)),n.textColor&&(s.textColor=n.textColor),n.classNames.length&&(s.classNames=n.classNames),Object.keys(t.extendedProps).length&&(e.collapseExtendedProps?Object.assign(s,t.extendedProps):s.extendedProps=t.extendedProps),s}toJSON(){return this.toPlainObject()}}function Xr(e){let t=e._def,n=e._instance;return{defs:{[t.defId]:t},instances:n?{[n.instanceId]:n}:{}}}function Jr(e,t,n){let{defs:r,instances:i}=e,s=[],o=n?n.instanceId:"";for(let e in i){let n=i[e],a=r[n.defId];n.instanceId!==o&&s.push(new Zr(t,a,n))}return s}function $r(e,t,n,r){let i={},s={},o={},a=[],l=[],c=ni(e.defs,t);for(let t in e.defs){let n=e.defs[t];"inverse-background"===c[n.defId].display&&(n.groupId?(i[n.groupId]=[],o[n.groupId]||(o[n.groupId]=n)):s[t]=[])}for(let t in e.instances){let o=e.instances[t],d=e.defs[o.defId],u=c[d.defId],h=o.range,f=!d.allDay&&r?Wn(h,r):h,g=rr(f,n);g&&("inverse-background"===u.display?d.groupId?i[d.groupId].push(g):s[o.defId].push(g):"none"!==u.display&&("background"===u.display?a:l).push({def:d,ui:u,instance:o,range:g,isStart:f.start&&f.start.valueOf()===g.start.valueOf(),isEnd:f.end&&f.end.valueOf()===g.end.valueOf()}))}for(let e in i){let t=tr(i[e],n);for(let n of t){let t=o[e],r=c[t.defId];a.push({def:t,ui:r,instance:null,range:n,isStart:!1,isEnd:!1})}}for(let t in s){let r=tr(s[t],n);for(let n of r)a.push({def:e.defs[t],ui:c[t],instance:null,range:n,isStart:!1,isEnd:!1})}return{bg:a,fg:l}}function Kr(e){return"background"===e.ui.display||"inverse-background"===e.ui.display}function ei(e,t){e.fcSeg=t}function ti(e){return e.fcSeg||e.parentNode.fcSeg||null}function ni(e,t){return ht(e,e=>ri(e,t))}function ri(e,t){let n=[];return t[""]&&n.push(t[""]),t[e.defId]&&n.push(t[e.defId]),n.push(e.ui),kn(n)}function ii(e,t){let n=e.map(si);return n.sort((e,n)=>Ge(e,n,t)),n.map(e=>e._seg)}function si(e){let{eventRange:t}=e,n=t.def,r=t.instance?t.instance.range:t.range,i=r.start?r.start.valueOf():0,s=r.end?r.end.valueOf():0;return Object.assign(Object.assign(Object.assign({},n.extendedProps),n),{id:n.publicId,start:i,end:s,duration:s-i,allDay:Number(n.allDay),_seg:e})}function oi(e,t){let{pluginHooks:n}=t,r=n.isDraggableTransformers,{def:i,ui:s}=e.eventRange,o=s.startEditable;for(let e of r)o=e(o,i,s,t);return o}function ai(e,t){return e.isStart&&e.eventRange.ui.durationEditable&&t.options.eventResizableFromStart}function li(e,t){return e.isEnd&&e.eventRange.ui.durationEditable}function ci(e,t,n,r,i,s,o){let{dateEnv:a,options:l}=n,{displayEventTime:c,displayEventEnd:d}=l,u=e.eventRange.def,h=e.eventRange.instance;null==c&&(c=!1!==r),null==d&&(d=!1!==i);let f=h.range.start,g=h.range.end,p=s||e.start||e.eventRange.range.start,m=o||e.end||e.eventRange.range.end,v=kt(f).valueOf()===kt(p).valueOf(),b=kt(wt(g,-1)).valueOf()===kt(wt(m,-1)).valueOf();return c&&!u.allDay&&(v||b)?(p=v?f:p,m=b?g:m,d&&u.hasEnd?a.formatRange(p,m,t,{forcedStartTzo:s?null:h.forcedStartTzo,forcedEndTzo:o?null:h.forcedEndTzo}):a.format(p,t,{forcedTzo:s?null:h.forcedStartTzo})):""}function di(e,t,n){let r=e.eventRange.range;return{isPast:r.end<(n||t.start),isFuture:r.start>=(n||t.end),isToday:t&&ar(t,r.start)}}function ui(e){let t=["fc-event"];return e.isMirror&&t.push("fc-event-mirror"),e.isDraggable&&t.push("fc-event-draggable"),(e.isStartResizable||e.isEndResizable)&&t.push("fc-event-resizable"),e.isDragging&&t.push("fc-event-dragging"),e.isResizing&&t.push("fc-event-resizing"),e.isSelected&&t.push("fc-event-selected"),e.isStart&&t.push("fc-event-start"),e.isEnd&&t.push("fc-event-end"),e.isPast&&t.push("fc-event-past"),e.isToday&&t.push("fc-event-today"),e.isFuture&&t.push("fc-event-future"),t}function hi(e){return e.instance?e.instance.instanceId:`${e.def.defId}:${e.range.start.toISOString()}`}function fi(e,t){let{def:n,instance:r}=e.eventRange,{url:i}=n;if(i)return{href:i};let{emitter:s,options:o}=t,{eventInteractive:a}=o;return null==a&&(a=n.interactive,null==a&&(a=Boolean(s.hasHandlers("eventClick")))),a?Pe(e=>{s.trigger("eventClick",{el:e.target,event:new Zr(t,n,r),jsEvent:e,view:t.viewApi})}):{}}const gi={start:mn,end:mn,allDay:Boolean};function pi(e,t,n){let r=function(e,t){let{refined:n,extra:r}=pn(e,gi),i=n.start?t.createMarkerMeta(n.start):null,s=n.end?t.createMarkerMeta(n.end):null,{allDay:o}=n;null==o&&(o=i&&i.isTimeUnspecified&&(!s||s.isTimeUnspecified));return Object.assign({range:{start:i?i.marker:null,end:s?s.marker:null},allDay:o},r)}(e,t),{range:i}=r;if(!i.start)return null;if(!i.end){if(null==n)return null;i.end=t.add(i.start,n)}return r}function mi(e,t){return ir(e.range,t.range)&&e.allDay===t.allDay&&function(e,t){for(let n in t)if("range"!==n&&"allDay"!==n&&e[n]!==t[n])return!1;for(let n in e)if(!(n in t))return!1;return!0}(e,t)}function vi(e,t,n){return Object.assign(Object.assign({},bi(e,t,n)),{timeZone:t.timeZone})}function bi(e,t,n){return{start:t.toDate(e.start),end:t.toDate(e.end),startStr:t.formatIso(e.start,{omitTime:n}),endStr:t.formatIso(e.end,{omitTime:n})}}let yi={};var Ei,Ai;Ei="gregory",Ai=class{getMarkerYear(e){return e.getUTCFullYear()}getMarkerMonth(e){return e.getUTCMonth()}getMarkerDay(e){return e.getUTCDate()}arrayToMarker(e){return Ht(e)}markerToArray(e){return Pt(e)}},yi[Ei]=Ai;const Di=/^\s*(\d{4})(-?(\d{2})(-?(\d{2})([T ](\d{2}):?(\d{2})(:?(\d{2})(\.(\d+))?)?(Z|(([-+])(\d{2})(:?(\d{2}))?))?)?)?)?$/;function Si(e){let t=Di.exec(e);if(t){let e=new Date(Date.UTC(Number(t[1]),t[3]?Number(t[3])-1:0,Number(t[5]||1),Number(t[7]||0),Number(t[8]||0),Number(t[10]||0),t[12]?1e3*Number("0."+t[12]):0));if(Bt(e)){let n=null;return t[13]&&(n=("-"===t[15]?-1:1)*(60*Number(t[16]||0)+Number(t[18]||0))),{marker:e,isTimeUnspecified:!t[6],timeZoneOffset:n}}}return null}class wi{constructor(e){let t=this.timeZone=e.timeZone,n="local"!==t&&"UTC"!==t;e.namedTimeZoneImpl&&n&&(this.namedTimeZoneImpl=new e.namedTimeZoneImpl(t)),this.canComputeOffset=Boolean(!n||this.namedTimeZoneImpl),this.calendarSystem=function(e){return new yi[e]}(e.calendarSystem),this.locale=e.locale,this.weekDow=e.locale.week.dow,this.weekDoy=e.locale.week.doy,"ISO"===e.weekNumberCalculation&&(this.weekDow=1,this.weekDoy=4),"number"==typeof e.firstDay&&(this.weekDow=e.firstDay),"function"==typeof e.weekNumberCalculation&&(this.weekNumberFunc=e.weekNumberCalculation),this.weekText=null!=e.weekText?e.weekText:e.locale.options.weekText,this.weekTextLong=(null!=e.weekTextLong?e.weekTextLong:e.locale.options.weekTextLong)||this.weekText,this.cmdFormatter=e.cmdFormatter,this.defaultSeparator=e.defaultSeparator}createMarker(e){let t=this.createMarkerMeta(e);return null===t?null:t.marker}createNowMarker(){return this.canComputeOffset?this.timestampToMarker((new Date).valueOf()):Ht(Ot(new Date))}createMarkerMeta(e){if("string"==typeof e)return this.parse(e);let t=null;return"number"==typeof e?t=this.timestampToMarker(e):e instanceof Date?(e=e.valueOf(),isNaN(e)||(t=this.timestampToMarker(e))):Array.isArray(e)&&(t=Ht(e)),null!==t&&Bt(t)?{marker:t,isTimeUnspecified:!1,forcedTzo:null}:null}parse(e){let t=Si(e);if(null===t)return null;let{marker:n}=t,r=null;return null!==t.timeZoneOffset&&(this.canComputeOffset?n=this.timestampToMarker(n.valueOf()-60*t.timeZoneOffset*1e3):r=t.timeZoneOffset),{marker:n,isTimeUnspecified:t.isTimeUnspecified,forcedTzo:r}}getYear(e){return this.calendarSystem.getMarkerYear(e)}getMonth(e){return this.calendarSystem.getMarkerMonth(e)}add(e,t){let n=this.calendarSystem.markerToArray(e);return n[0]+=t.years,n[1]+=t.months,n[2]+=t.days,n[6]+=t.milliseconds,this.calendarSystem.arrayToMarker(n)}subtract(e,t){let n=this.calendarSystem.markerToArray(e);return n[0]-=t.years,n[1]-=t.months,n[2]-=t.days,n[6]-=t.milliseconds,this.calendarSystem.arrayToMarker(n)}addYears(e,t){let n=this.calendarSystem.markerToArray(e);return n[0]+=t,this.calendarSystem.arrayToMarker(n)}addMonths(e,t){let n=this.calendarSystem.markerToArray(e);return n[1]+=t,this.calendarSystem.arrayToMarker(n)}diffWholeYears(e,t){let{calendarSystem:n}=this;return jt(e)===jt(t)&&n.getMarkerDay(e)===n.getMarkerDay(t)&&n.getMarkerMonth(e)===n.getMarkerMonth(t)?n.getMarkerYear(t)-n.getMarkerYear(e):null}diffWholeMonths(e,t){let{calendarSystem:n}=this;return jt(e)===jt(t)&&n.getMarkerDay(e)===n.getMarkerDay(t)?n.getMarkerMonth(t)-n.getMarkerMonth(e)+12*(n.getMarkerYear(t)-n.getMarkerYear(e)):null}greatestWholeUnit(e,t){let n=this.diffWholeYears(e,t);return null!==n?{unit:"year",value:n}:(n=this.diffWholeMonths(e,t),null!==n?{unit:"month",value:n}:(n=_t(e,t),null!==n?{unit:"week",value:n}:(n=Tt(e,t),null!==n?{unit:"day",value:n}:(n=function(e,t){return(t.valueOf()-e.valueOf())/36e5}(e,t),Je(n)?{unit:"hour",value:n}:(n=function(e,t){return(t.valueOf()-e.valueOf())/6e4}(e,t),Je(n)?{unit:"minute",value:n}:(n=function(e,t){return(t.valueOf()-e.valueOf())/1e3}(e,t),Je(n)?{unit:"second",value:n}:{unit:"millisecond",value:t.valueOf()-e.valueOf()}))))))}countDurationsBetween(e,t,n){let r;return n.years&&(r=this.diffWholeYears(e,t),null!==r)?r/(st(n)/365):n.months&&(r=this.diffWholeMonths(e,t),null!==r)?r/function(e){return st(e)/30}(n):n.days&&(r=Tt(e,t),null!==r)?r/st(n):(t.valueOf()-e.valueOf())/ot(n)}startOf(e,t){return"year"===t?this.startOfYear(e):"month"===t?this.startOfMonth(e):"week"===t?this.startOfWeek(e):"day"===t?kt(e):"hour"===t?function(e){return Ht([e.getUTCFullYear(),e.getUTCMonth(),e.getUTCDate(),e.getUTCHours()])}(e):"minute"===t?function(e){return Ht([e.getUTCFullYear(),e.getUTCMonth(),e.getUTCDate(),e.getUTCHours(),e.getUTCMinutes()])}(e):"second"===t?function(e){return Ht([e.getUTCFullYear(),e.getUTCMonth(),e.getUTCDate(),e.getUTCHours(),e.getUTCMinutes(),e.getUTCSeconds()])}(e):null}startOfYear(e){return this.calendarSystem.arrayToMarker([this.calendarSystem.getMarkerYear(e)])}startOfMonth(e){return this.calendarSystem.arrayToMarker([this.calendarSystem.getMarkerYear(e),this.calendarSystem.getMarkerMonth(e)])}startOfWeek(e){return this.calendarSystem.arrayToMarker([this.calendarSystem.getMarkerYear(e),this.calendarSystem.getMarkerMonth(e),e.getUTCDate()-(e.getUTCDay()-this.weekDow+7)%7])}computeWeekNumber(e){return this.weekNumberFunc?this.weekNumberFunc(this.toDate(e)):function(e,t,n){let r=e.getUTCFullYear(),i=Mt(e,r,t,n);if(i<1)return Mt(e,r-1,t,n);let s=Mt(e,r+1,t,n);return s>=1?Math.min(i,s):i}(e,this.weekDow,this.weekDoy)}format(e,t,n={}){return t.format({marker:e,timeZoneOffset:null!=n.forcedTzo?n.forcedTzo:this.offsetForMarker(e)},this)}formatRange(e,t,n,r={}){return r.isEndExclusive&&(t=wt(t,-1)),n.formatRange({marker:e,timeZoneOffset:null!=r.forcedStartTzo?r.forcedStartTzo:this.offsetForMarker(e)},{marker:t,timeZoneOffset:null!=r.forcedEndTzo?r.forcedEndTzo:this.offsetForMarker(t)},this,r.defaultSeparator)}formatIso(e,t={}){let n=null;return t.omitTimeZoneOffset||(n=null!=t.forcedTzo?t.forcedTzo:this.offsetForMarker(e)),zt(e,n,t.omitTime)}timestampToMarker(e){return"local"===this.timeZone?Ht(Ot(new Date(e))):"UTC"!==this.timeZone&&this.namedTimeZoneImpl?Ht(this.namedTimeZoneImpl.timestampToArray(e)):new Date(e)}offsetForMarker(e){return"local"===this.timeZone?-Nt(Pt(e)).getTimezoneOffset():"UTC"===this.timeZone?0:this.namedTimeZoneImpl?this.namedTimeZoneImpl.offsetForArray(Pt(e)):null}toDate(e,t){return"local"===this.timeZone?Nt(Pt(e)):"UTC"===this.timeZone?new Date(e.valueOf()):this.namedTimeZoneImpl?new Date(e.valueOf()-1e3*this.namedTimeZoneImpl.offsetForArray(Pt(e))*60):new Date(e.valueOf()-(t||0))}}class Ci{constructor(){this.strictOrder=!1,this.allowReslicing=!1,this.maxCoord=-1,this.maxStackCnt=-1,this.levelCoords=[],this.entriesByLevel=[],this.stackCnts={}}addSegs(e){let t=[];for(let n of e)this.insertEntry(n,t);return t}insertEntry(e,t){let n=this.findInsertion(e);return this.isInsertionValid(n,e)?(this.insertEntryAt(e,n),1):this.handleInvalidInsertion(n,e,t)}isInsertionValid(e,t){return(-1===this.maxCoord||e.levelCoord+t.thickness<=this.maxCoord)&&(-1===this.maxStackCnt||e.stackCnt<this.maxStackCnt)}handleInvalidInsertion(e,t,n){return this.allowReslicing&&e.touchingEntry?this.splitEntry(t,e.touchingEntry,n):(n.push(t),0)}splitEntry(e,t,n){let r=0,i=[],s=e.span,o=t.span;return s.start<o.start&&(r+=this.insertEntry({index:e.index,thickness:e.thickness,span:{start:s.start,end:o.start}},i)),s.end>o.end&&(r+=this.insertEntry({index:e.index,thickness:e.thickness,span:{start:o.end,end:s.end}},i)),r?(n.push({index:e.index,thickness:e.thickness,span:Ti(o,s)},...i),r):(n.push(e),0)}insertEntryAt(e,t){let{entriesByLevel:n,levelCoords:r}=this;-1===t.lateral?(ki(r,t.level,t.levelCoord),ki(n,t.level,[e])):ki(n[t.level],t.lateral,e),this.stackCnts[xi(e)]=t.stackCnt}findInsertion(e){let{levelCoords:t,entriesByLevel:n,strictOrder:r,stackCnts:i}=this,s=t.length,o=0,a=-1,l=-1,c=null,d=0;for(let u=0;u<s;u+=1){let s=t[u];if(!r&&s>=o+e.thickness)break;let h,f=n[u],g=Mi(f,e.span.start,Ri),p=g[0]+g[1];for(;(h=f[p])&&h.span.start<e.span.end;){let e=s+h.thickness;e>o&&(o=e,c=h,a=u,l=p),e===o&&(d=Math.max(d,i[xi(h)]+1)),p+=1}}let u=0;if(c)for(u=a+1;u<s&&t[u]<o;)u+=1;let h=-1;return u<s&&t[u]===o&&(h=Mi(n[u],e.span.end,Ri)[0]),{touchingLevel:a,touchingLateral:l,touchingEntry:c,stackCnt:d,levelCoord:o,level:u,lateral:h}}toRects(){let{entriesByLevel:e,levelCoords:t}=this,n=e.length,r=[];for(let i=0;i<n;i+=1){let n=e[i],s=t[i];for(let e of n)r.push(Object.assign(Object.assign({},e),{levelCoord:s}))}return r}}function Ri(e){return e.span.end}function xi(e){return e.index+":"+e.span.start}function _i(e){let t=[];for(let i of e){let e=[],s={span:i.span,entries:[i]};for(let i of t)Ti(i.span,s.span)?s={entries:i.entries.concat(s.entries),span:(n=i.span,r=s.span,{start:Math.min(n.start,r.start),end:Math.max(n.end,r.end)})}:e.push(i);e.push(s),t=e}var n,r;return t}function Ti(e,t){let n=Math.max(e.start,t.start),r=Math.min(e.end,t.end);return n<r?{start:n,end:r}:null}function ki(e,t,n){e.splice(t,0,n)}function Mi(e,t,n){let r=0,i=e.length;if(!i||t<n(e[r]))return[0,0];if(t>n(e[i-1]))return[i,0];for(;r<i;){let s=Math.floor(r+(i-r)/2),o=n(e[s]);if(t<o)i=s;else{if(!(t>o))return[s,1];r=s+1}}return[r,0]}class Ii{constructor(e){this.component=e.component,this.isHitComboAllowed=e.isHitComboAllowed||null}destroy(){}}function Oi(e){return{[e.component.uid]:e}}const Ni={};class Pi{constructor(e,t){this.emitter=new Sr}destroy(){}setMirrorIsVisible(e){}setMirrorNeedsRevert(e){}setAutoScrollEnabled(e){}}const Hi={},Bi={startTime:tt,duration:tt,create:Boolean,sourceId:String};function ji(e){let{refined:t,extra:n}=pn(e,Bi);return{startTime:t.startTime||null,duration:t.duration||null,create:null==t.create||t.create,sourceId:t.sourceId,leftoverProps:n}}class zi extends Br{constructor(){super(...arguments),this.state={forPrint:!1},this.handleBeforePrint=()=>{this.setState({forPrint:!0})},this.handleAfterPrint=()=>{this.setState({forPrint:!1})}}render(){let{props:e}=this,{options:t}=e,{forPrint:n}=this.state,r=n||"auto"===t.height||"auto"===t.contentHeight,i=r||null==t.height?"":t.height,s=["fc",n?"fc-media-print":"fc-media-screen","fc-direction-"+t.direction,e.theme.getClass("root")];return Jn()||s.push("fc-liquid-hack"),e.children(s,i,r,n)}componentDidMount(){let{emitter:e}=this.props;e.on("_beforeprint",this.handleBeforePrint),e.on("_afterprint",this.handleAfterPrint)}componentWillUnmount(){let{emitter:e}=this.props;e.off("_beforeprint",this.handleBeforePrint),e.off("_afterprint",this.handleAfterPrint)}}function Ui(e,t){return on(!e||t>10?{weekday:"short"}:t>1?{weekday:"short",month:"numeric",day:"numeric",omitCommas:!0}:{weekday:"long"})}const Li="fc-col-header-cell";function Wi(e){return e.text}class Fi extends Br{constructor(){super(...arguments),this.id=Be(),this.currentDomNodes=[],this.queuedDomNodes=[],this.handleEl=e=>{this.props.elRef&&jr(this.props.elRef,e)}}render(){const{props:e,context:t}=this,{options:n}=t,{generator:r,renderProps:s}=e,o=Gi(e);let a,l=[];if(Vi(e.generatorName,n))n.customRenderingReplacesEl&&delete o.elRef;else{const e="function"==typeof r?r(s,f):r;"string"==typeof e||i(e)||Array.isArray(e)?a=e:"object"==typeof e&&("html"in e?o.dangerouslySetInnerHTML={__html:e.html}:"domNodes"in e&&(l=Array.prototype.slice.call(e.domNodes)))}return this.queuedDomNodes=l,f(e.elTag,o,a)}componentDidMount(){this.applyQueueudDomNodes(),this.triggerCustomRendering(!0)}componentDidUpdate(){this.applyQueueudDomNodes(),this.triggerCustomRendering(!0)}componentWillUnmount(){this.triggerCustomRendering(!1)}triggerCustomRendering(e){const{props:t,context:n}=this,{handleCustomRendering:r,customRenderingMetaMap:i}=n.options;if(r){const n=null==i?void 0:i[t.generatorName];n&&r(Object.assign({id:this.id,isActive:e,containerEl:this.base,reportNewContainerEl:this.handleEl,generatorMeta:n},t))}}applyQueueudDomNodes(){const{queuedDomNodes:e,currentDomNodes:t}=this,n=this.base;if(!Ft(e,t)){t.forEach(ye);for(let t of e)n.appendChild(t);this.currentDomNodes=e}}}function Vi(e,t){var n;return Boolean(t.handleCustomRendering&&e&&(null===(n=t.customRenderingMetaMap)||void 0===n?void 0:n[e]))}function Gi(e,t){const n=Object.assign(Object.assign({},e.elAttrs),{ref:e.elRef});return(e.elClasses||t)&&(n.className=(e.elClasses||[]).concat(t||[]).concat(n.className||[]).filter(Boolean).join(" ")),e.elStyle&&(n.style=e.elStyle),n}Fi.addPropsEquality({elClasses:Ft,elStyle:pt,elAttrs:function(e,t){const n=vt(e,t);for(let e of n)if(!mt.test(e))return!1;return!0},renderProps:pt});const Qi=Ir(0);class qi extends m{constructor(){super(...arguments),this.InnerContent=Yi.bind(void 0,this)}render(){const{props:e}=this,t=function(e,t){const n="function"==typeof e?e(t):e||[];return"string"==typeof n?[n]:n}(e.classNameGenerator,e.renderProps);if(e.children){const n=Gi(e,t),r=e.children(this.InnerContent,e.renderProps,n);return e.elTag?f(e.elTag,n,r):r}return f(Fi,Object.assign(Object.assign({},e),{elTag:e.elTag||"div",elClasses:(e.elClasses||[]).concat(t),renderId:this.context}))}componentDidMount(){var e,t;null===(t=(e=this.props).didMount)||void 0===t||t.call(e,Object.assign(Object.assign({},this.props.renderProps),{el:this.base}))}componentWillUnmount(){var e,t;null===(t=(e=this.props).willUnmount)||void 0===t||t.call(e,Object.assign(Object.assign({},this.props.renderProps),{el:this.base}))}}function Yi(e,t){const n=e.props;return f(Fi,Object.assign({renderProps:n.renderProps,generatorName:n.generatorName,generator:n.generator,renderId:e.context},t))}qi.contextType=Qi;class Zi extends Br{render(){let{dateEnv:e,options:t,theme:n,viewApi:r}=this.context,{props:i}=this,{date:s,dateProfile:o}=i,a=lr(s,i.todayRange,null,o),l=[Li].concat(cr(a,n)),c=e.format(s,i.dayHeaderFormat),d=!a.isDisabled&&i.colCnt>1?hr(this.context,s):{},u=Object.assign(Object.assign(Object.assign({date:e.toDate(s),view:r},i.extraRenderProps),{text:c}),a);return f(qi,{elTag:"th",elClasses:l,elAttrs:Object.assign({role:"columnheader",colSpan:i.colSpan,"data-date":a.isDisabled?void 0:Ut(s)},i.extraDataAttrs),renderProps:u,generatorName:"dayHeaderContent",generator:t.dayHeaderContent||Wi,classNameGenerator:t.dayHeaderClassNames,didMount:t.dayHeaderDidMount,willUnmount:t.dayHeaderWillUnmount},e=>f("div",{className:"fc-scrollgrid-sync-inner"},!a.isDisabled&&f(e,{elTag:"a",elAttrs:d,elClasses:["fc-col-header-cell-cushion",i.isSticky&&"fc-sticky"]})))}}const Xi=on({weekday:"long"});class Ji extends Br{render(){let{props:e}=this,{dateEnv:t,theme:n,viewApi:r,options:i}=this.context,s=St(new Date(2592e5),e.dow),o={dow:e.dow,isDisabled:!1,isFuture:!1,isPast:!1,isToday:!1,isOther:!1},a=t.format(s,e.dayHeaderFormat),l=Object.assign(Object.assign(Object.assign(Object.assign({date:s},o),{view:r}),e.extraRenderProps),{text:a});return f(qi,{elTag:"th",elClasses:[Li,...cr(o,n),...e.extraClassNames||[]],elAttrs:Object.assign({role:"columnheader",colSpan:e.colSpan},e.extraDataAttrs),renderProps:l,generatorName:"dayHeaderContent",generator:i.dayHeaderContent||Wi,classNameGenerator:i.dayHeaderClassNames,didMount:i.dayHeaderDidMount,willUnmount:i.dayHeaderWillUnmount},n=>f("div",{className:"fc-scrollgrid-sync-inner"},f(n,{elTag:"a",elClasses:["fc-col-header-cell-cushion",e.isSticky&&"fc-sticky"],elAttrs:{"aria-label":t.format(s,Xi)}})))}}class $i extends m{constructor(e,t){super(e,t),this.initialNowDate=Ur(t.options.now,t.dateEnv),this.initialNowQueriedMs=(new Date).valueOf(),this.state=this.computeTiming().currentState}render(){let{props:e,state:t}=this;return e.children(t.nowDate,t.todayRange)}componentDidMount(){this.setTimeout()}componentDidUpdate(e){e.unit!==this.props.unit&&(this.clearTimeout(),this.setTimeout())}componentWillUnmount(){this.clearTimeout()}computeTiming(){let{props:e,context:t}=this,n=wt(this.initialNowDate,(new Date).valueOf()-this.initialNowQueriedMs),r=t.dateEnv.startOf(n,e.unit),i=t.dateEnv.add(r,tt(1,e.unit)),s=i.valueOf()-n.valueOf();return s=Math.min(864e5,s),{currentState:{nowDate:r,todayRange:Ki(r)},nextState:{nowDate:i,todayRange:Ki(i)},waitMs:s}}setTimeout(){let{nextState:e,waitMs:t}=this.computeTiming();this.timeoutId=setTimeout(()=>{this.setState(e,()=>{this.setTimeout()})},t)}clearTimeout(){this.timeoutId&&clearTimeout(this.timeoutId)}}function Ki(e){let t=kt(e);return{start:t,end:St(t,1)}}$i.contextType=Nr;class es extends Br{constructor(){super(...arguments),this.createDayHeaderFormatter=Vt(ts)}render(){let{context:e}=this,{dates:t,dateProfile:n,datesRepDistinctDays:r,renderIntro:i}=this.props,s=this.createDayHeaderFormatter(e.options.dayHeaderFormat,r,t.length);return f($i,{unit:"day"},(e,o)=>f("tr",{role:"row"},i&&i("day"),t.map(e=>r?f(Zi,{key:e.toISOString(),date:e,dateProfile:n,todayRange:o,colCnt:t.length,dayHeaderFormat:s}):f(Ji,{key:e.getUTCDay(),dow:e.getUTCDay(),dayHeaderFormat:s}))))}}function ts(e,t,n){return e||Ui(t,n)}class ns{constructor(e,t){let n=e.start,{end:r}=e,i=[],s=[],o=-1;for(;n<r;)t.isHiddenDay(n)?i.push(o+.5):(o+=1,i.push(o),s.push(n)),n=St(n,1);this.dates=s,this.indices=i,this.cnt=s.length}sliceRange(e){let t=this.getDateDayIndex(e.start),n=this.getDateDayIndex(St(e.end,-1)),r=Math.max(0,t),i=Math.min(this.cnt-1,n);return r=Math.ceil(r),i=Math.floor(i),r<=i?{firstIndex:r,lastIndex:i,isStart:t===r,isEnd:n===i}:null}getDateDayIndex(e){let{indices:t}=this,n=Math.floor(Rt(this.dates[0],e));return n<0?t[0]-1:n>=t.length?t[t.length-1]+1:t[n]}}class rs{constructor(e,t){let n,r,i,{dates:s}=e;if(t){for(r=s[0].getUTCDay(),n=1;n<s.length&&s[n].getUTCDay()!==r;n+=1);i=Math.ceil(s.length/n)}else i=1,n=s.length;this.rowCnt=i,this.colCnt=n,this.daySeries=e,this.cells=this.buildCells(),this.headerDates=this.buildHeaderDates()}buildCells(){let e=[];for(let t=0;t<this.rowCnt;t+=1){let n=[];for(let e=0;e<this.colCnt;e+=1)n.push(this.buildCell(t,e));e.push(n)}return e}buildCell(e,t){let n=this.daySeries.dates[e*this.colCnt+t];return{key:n.toISOString(),date:n}}buildHeaderDates(){let e=[];for(let t=0;t<this.colCnt;t+=1)e.push(this.cells[0][t].date);return e}sliceRange(e){let{colCnt:t}=this,n=this.daySeries.sliceRange(e),r=[];if(n){let{firstIndex:e,lastIndex:i}=n,s=e;for(;s<=i;){let o=Math.floor(s/t),a=Math.min((o+1)*t,i+1);r.push({row:o,firstCol:s%t,lastCol:(a-1)%t,isStart:n.isStart&&s===e,isEnd:n.isEnd&&a-1===i}),s=a}}return r}}class is{constructor(){this.sliceBusinessHours=Vt(this._sliceBusinessHours),this.sliceDateSelection=Vt(this._sliceDateSpan),this.sliceEventStore=Vt(this._sliceEventStore),this.sliceEventDrag=Vt(this._sliceInteraction),this.sliceEventResize=Vt(this._sliceInteraction),this.forceDayIfListItem=!1}sliceProps(e,t,n,r,...i){let{eventUiBases:s}=e,o=this.sliceEventStore(e.eventStore,s,t,n,...i);return{dateSelectionSegs:this.sliceDateSelection(e.dateSelection,s,r,...i),businessHourSegs:this.sliceBusinessHours(e.businessHours,t,n,r,...i),fgEventSegs:o.fg,bgEventSegs:o.bg,eventDrag:this.sliceEventDrag(e.eventDrag,s,t,n,...i),eventResize:this.sliceEventResize(e.eventResize,s,t,n,...i),eventSelection:e.eventSelection}}sliceNowDate(e,t,...n){return this._sliceDateSpan({range:{start:e,end:wt(e,1)},allDay:!1},{},t,...n)}_sliceBusinessHours(e,t,n,r,...i){return e?this._sliceEventStore(bn(e,ss(t,Boolean(n)),r),{},t,n,...i).bg:[]}_sliceEventStore(e,t,n,r,...i){if(e){let s=$r(e,t,ss(n,Boolean(r)),r);return{bg:this.sliceEventRanges(s.bg,i),fg:this.sliceEventRanges(s.fg,i)}}return{bg:[],fg:[]}}_sliceInteraction(e,t,n,r,...i){if(!e)return null;let s=$r(e.mutatedEvents,t,ss(n,Boolean(r)),r);return{segs:this.sliceEventRanges(s.fg,i),affectedInstances:e.affectedEvents.instances,isEvent:e.isEvent}}_sliceDateSpan(e,t,n,...r){if(!e)return[];let i=function(e,t,n){let r=Hn({editable:!1},n),i=jn(r.refined,r.extra,"",e.allDay,!0,n);return{def:i,ui:ri(i,t),instance:vn(i.defId,e.range),range:e.range,isStart:!0,isEnd:!0}}(e,t,n),s=this.sliceRange(e.range,...r);for(let e of s)e.eventRange=i;return s}sliceEventRanges(e,t){let n=[];for(let r of e)n.push(...this.sliceEventRange(r,t));return n}sliceEventRange(e,t){let n=e.range;this.forceDayIfListItem&&"list-item"===e.ui.display&&(n={start:n.start,end:St(n.start,1)});let r=this.sliceRange(n,...t);for(let t of r)t.eventRange=e,t.isStart=e.isStart&&t.isStart,t.isEnd=e.isEnd&&t.isEnd;return r}}function ss(e,t){let n=e.activeRange;return t?n:{start:wt(n.start,e.slotMinTime.milliseconds),end:wt(n.end,e.slotMaxTime.milliseconds-864e5)}}function os(e,t,n,r,i){switch(t.type){case"RECEIVE_EVENTS":return function(e,t,n,r,i,s){if(t&&n===t.latestFetchId){let n=En(function(e,t,n){let r=n.options.eventDataTransform,i=t?t.eventDataTransform:null;i&&(e=as(e,i));r&&(e=as(e,r));return e}(i,t,s),t,s);return r&&(n=bn(n,r,s)),wn(ls(e,t.sourceId),n)}return e}(e,n[t.sourceId],t.fetchId,t.fetchRange,t.rawEvents,i);case"ADD_EVENTS":return function(e,t,n,r){n&&(t=bn(t,n,r));return wn(e,t)}(e,t.eventStore,r?r.activeRange:null,i);case"RESET_EVENTS":return t.eventStore;case"MERGE_EVENTS":return wn(e,t.eventStore);case"PREV":case"NEXT":case"CHANGE_DATE":case"CHANGE_VIEW_TYPE":return r?bn(e,r.activeRange,i):e;case"REMOVE_EVENTS":return function(e,t){let{defs:n,instances:r}=e,i={},s={};for(let e in n)t.defs[e]||(i[e]=n[e]);for(let e in r)!t.instances[e]&&i[r[e].defId]&&(s[e]=r[e]);return{defs:i,instances:s}}(e,t.eventStore);case"REMOVE_EVENT_SOURCE":return ls(e,t.sourceId);case"REMOVE_ALL_EVENT_SOURCES":return Cn(e,e=>!e.sourceId);case"REMOVE_ALL_EVENTS":return{defs:{},instances:{}};default:return e}}function as(e,t){let n;if(t){n=[];for(let r of e){let e=t(r);e?n.push(e):null==e&&n.push(r)}}else n=e;return n}function ls(e,t){return Cn(e,e=>e.sourceId!==t)}function cs(e,t,n){let{instances:r}=e.mutatedEvents;for(let e in r)if(!or(t.validRange,r[e].range))return!1;return us({eventDrag:e},n)}function ds(e,t,n){return!!or(t.validRange,e.range)&&us({dateSelection:e},n)}function us(e,t){let n=t.getCurrentData(),r=Object.assign({businessHours:n.businessHours,dateSelection:"",eventStore:n.eventStore,eventUiBases:n.eventUiBases,eventSelection:"",eventDrag:null,eventResize:null},e);return(t.pluginHooks.isPropsValid||hs)(r,t)}function hs(e,t,n={},r){return!(e.eventDrag&&!function(e,t,n,r){let i=t.getCurrentData(),s=e.eventDrag,o=s.mutatedEvents,a=o.defs,l=o.instances,c=ni(a,s.isEvent?e.eventUiBases:{"":i.selectionConfig});r&&(c=ht(c,r));let d=(g=e.eventStore,p=s.affectedEvents.instances,{defs:g.defs,instances:ut(g.instances,e=>!p[e.instanceId])}),u=d.defs,h=d.instances,f=ni(u,e.eventUiBases);var g,p;for(let r in l){let o=l[r],g=o.range,p=c[o.defId],m=a[o.defId];if(!fs(p.constraints,g,d,e.businessHours,t))return!1;let{eventOverlap:v}=t.options,b="function"==typeof v?v:null;for(let e in h){let n=h[e];if(sr(g,n.range)){if(!1===f[n.defId].overlap&&s.isEvent)return!1;if(!1===p.overlap)return!1;if(b&&!b(new Zr(t,u[n.defId],n),new Zr(t,m,o)))return!1}}let y=i.eventStore;for(let e of p.allows){let i,s=Object.assign(Object.assign({},n),{range:o.range,allDay:m.allDay}),a=y.defs[m.defId],l=y.instances[r];if(i=a?new Zr(t,a,l):new Zr(t,m),!e(Fr(s,t),i))return!1}}return!0}(e,t,n,r))&&!(e.dateSelection&&!function(e,t,n,r){let i=e.eventStore,s=i.defs,o=i.instances,a=e.dateSelection,l=a.range,{selectionConfig:c}=t.getCurrentData();r&&(c=r(c));if(!fs(c.constraints,l,i,e.businessHours,t))return!1;let{selectOverlap:d}=t.options,u="function"==typeof d?d:null;for(let e in o){let n=o[e];if(sr(l,n.range)){if(!1===c.overlap)return!1;if(u&&!u(new Zr(t,s[n.defId],n),null))return!1}}for(let e of c.allows){let r=Object.assign(Object.assign({},n),a);if(!e(Fr(r,t),null))return!1}return!0}(e,t,n,r))}function fs(e,t,n,r,i){for(let s of e)if(!ms(gs(s,t,n,r,i),t))return!1;return!0}function gs(e,t,n,r,i){return"businessHours"===e?ps(bn(r,t,i)):"string"==typeof e?ps(Cn(n,t=>t.groupId===e)):"object"==typeof e&&e?ps(bn(e,t,i)):[]}function ps(e){let{instances:t}=e,n=[];for(let e in t)n.push(t[e].range);return n}function ms(e,t){for(let n of e)if(or(n,t))return!0;return!1}class vs extends Error{constructor(e,t){super(e),this.response=t}}function bs(e,t,n){const r={method:e=e.toUpperCase()};return"GET"===e?t+=(-1===t.indexOf("?")?"?":"&")+new URLSearchParams(n):(r.body=new URLSearchParams(n),r.headers={"Content-Type":"application/x-www-form-urlencoded"}),fetch(t,r).then(e=>{if(e.ok)return e.json().then(t=>[t,e],()=>{throw new vs("Failure parsing JSON",e)});throw new vs("Request failed",e)})}class ys{constructor(e){this.drainedOption=e,this.isRunning=!1,this.isDirty=!1,this.pauseDepths={},this.timeoutId=0}request(e){this.isDirty=!0,this.isPaused()||(this.clearTimeout(),null==e?this.tryDrain():this.timeoutId=setTimeout(this.tryDrain.bind(this),e))}pause(e=""){let{pauseDepths:t}=this;t[e]=(t[e]||0)+1,this.clearTimeout()}resume(e="",t){let{pauseDepths:n}=this;if(e in n){if(t)delete n[e];else{n[e]-=1,n[e]<=0&&delete n[e]}this.tryDrain()}}isPaused(){return Object.keys(this.pauseDepths).length}tryDrain(){if(!this.isRunning&&!this.isPaused()){for(this.isRunning=!0;this.isDirty;)this.isDirty=!1,this.drained();this.isRunning=!1}}clear(){this.clearTimeout(),this.isDirty=!1,this.pauseDepths={}}clearTimeout(){this.timeoutId&&(clearTimeout(this.timeoutId),this.timeoutId=0)}drained(){this.drainedOption&&this.drainedOption()}}const Es=/^(visible|hidden)$/;class As extends Br{constructor(){super(...arguments),this.handleEl=e=>{this.el=e,jr(this.props.elRef,e)}}render(){let{props:e}=this,{liquid:t,liquidIsAbsolute:n}=e,r=t&&n,i=["fc-scroller"];return t&&(n?i.push("fc-scroller-liquid-absolute"):i.push("fc-scroller-liquid")),f("div",{ref:this.handleEl,className:i.join(" "),style:{overflowX:e.overflowX,overflowY:e.overflowY,left:r&&-(e.overcomeLeft||0)||"",right:r&&-(e.overcomeRight||0)||"",bottom:r&&-(e.overcomeBottom||0)||"",marginLeft:!r&&-(e.overcomeLeft||0)||"",marginRight:!r&&-(e.overcomeRight||0)||"",marginBottom:!r&&-(e.overcomeBottom||0)||"",maxHeight:e.maxHeight||""}},e.children)}needsXScrolling(){if(Es.test(this.props.overflowX))return!1;let{el:e}=this,t=this.el.getBoundingClientRect().width-this.getYScrollbarWidth(),{children:n}=e;for(let e=0;e<n.length;e+=1){if(n[e].getBoundingClientRect().width>t)return!0}return!1}needsYScrolling(){if(Es.test(this.props.overflowY))return!1;let{el:e}=this,t=this.el.getBoundingClientRect().height-this.getXScrollbarWidth(),{children:n}=e;for(let e=0;e<n.length;e+=1){if(n[e].getBoundingClientRect().height>t)return!0}return!1}getXScrollbarWidth(){return Es.test(this.props.overflowX)?0:this.el.offsetHeight-this.el.clientHeight}getYScrollbarWidth(){return Es.test(this.props.overflowY)?0:this.el.offsetWidth-this.el.clientWidth}}class Ds{constructor(e){this.masterCallback=e,this.currentMap={},this.depths={},this.callbackMap={},this.handleValue=(e,t)=>{let{depths:n,currentMap:r}=this,i=!1,s=!1;null!==e?(i=t in r,r[t]=e,n[t]=(n[t]||0)+1,s=!0):(n[t]-=1,n[t]||(delete r[t],delete this.callbackMap[t],i=!0)),this.masterCallback&&(i&&this.masterCallback(null,String(t)),s&&this.masterCallback(e,String(t)))}}createRef(e){let t=this.callbackMap[e];return t||(t=this.callbackMap[e]=t=>{this.handleValue(t,String(e))}),t}collect(e,t,n){return Et(this.currentMap,e,t,n)}getAll(){return gt(this.currentMap)}}function Ss(e){let t=De(e,".fc-scrollgrid-shrink"),n=0;for(let e of t)n=Math.max(n,$e(e));return Math.ceil(n)}function ws(e,t){return e.liquid&&t.liquid}function Cs(e,t){return null!=t.maxHeight||ws(e,t)}function Rs(e,t,n,r){let{expandRows:i}=n;return"function"==typeof t.content?t.content(n):f("table",{role:"presentation",className:[t.tableClassName,e.syncRowHeights?"fc-scrollgrid-sync-table":""].join(" "),style:{minWidth:n.tableMinWidth,width:n.clientWidth,height:i?n.clientHeight:""}},n.tableColGroupNode,f(r?"thead":"tbody",{role:"presentation"},"function"==typeof t.rowContent?t.rowContent(n):t.rowContent))}function xs(e,t){return Ft(e,t,pt)}function _s(e,t){let n=[];for(let r of e){let e=r.span||1;for(let i=0;i<e;i+=1)n.push(f("col",{style:{width:"shrink"===r.width?Ts(t):r.width||"",minWidth:r.minWidth||""}}))}return f("colgroup",{},...n)}function Ts(e){return null==e?4:e}function ks(e){for(let t of e)if("shrink"===t.width)return!0;return!1}function Ms(e,t){let n=["fc-scrollgrid",t.theme.getClass("table")];return e&&n.push("fc-scrollgrid-liquid"),n}function Is(e,t){let n=["fc-scrollgrid-section","fc-scrollgrid-section-"+e.type,e.className];return t&&e.liquid&&null==e.maxHeight&&n.push("fc-scrollgrid-section-liquid"),e.isSticky&&n.push("fc-scrollgrid-section-sticky"),n}function Os(e){return f("div",{className:"fc-scrollgrid-sticky-shim",style:{width:e.clientWidth,minWidth:e.tableMinWidth}})}function Ns(e){let{stickyHeaderDates:t}=e;return null!=t&&"auto"!==t||(t="auto"===e.height||"auto"===e.viewHeight),t}function Ps(e){let{stickyFooterScrollbar:t}=e;return null!=t&&"auto"!==t||(t="auto"===e.height||"auto"===e.viewHeight),t}class Hs extends Br{constructor(){super(...arguments),this.processCols=Vt(e=>e,xs),this.renderMicroColGroup=Vt(_s),this.scrollerRefs=new Ds,this.scrollerElRefs=new Ds(this._handleScrollerEl.bind(this)),this.state={shrinkWidth:null,forceYScrollbars:!1,scrollerClientWidths:{},scrollerClientHeights:{}},this.handleSizing=()=>{this.safeSetState(Object.assign({shrinkWidth:this.computeShrinkWidth()},this.computeScrollerDims()))}}render(){let{props:e,state:t,context:n}=this,r=e.sections||[],i=this.processCols(e.cols),s=this.renderMicroColGroup(i,t.shrinkWidth),o=Ms(e.liquid,n);e.collapsibleWidth&&o.push("fc-scrollgrid-collapsible");let a,l=r.length,c=0,d=[],u=[],h=[];for(;c<l&&"header"===(a=r[c]).type;)d.push(this.renderSection(a,s,!0)),c+=1;for(;c<l&&"body"===(a=r[c]).type;)u.push(this.renderSection(a,s,!1)),c+=1;for(;c<l&&"footer"===(a=r[c]).type;)h.push(this.renderSection(a,s,!0)),c+=1;let g=!Jn();const p={role:"rowgroup"};return f("table",{role:"grid",className:o.join(" "),style:{height:e.height}},Boolean(!g&&d.length)&&f("thead",p,...d),Boolean(!g&&u.length)&&f("tbody",p,...u),Boolean(!g&&h.length)&&f("tfoot",p,...h),g&&f("tbody",p,...d,...u,...h))}renderSection(e,t,n){return"outerContent"in e?f(p,{key:e.key},e.outerContent):f("tr",{key:e.key,role:"presentation",className:Is(e,this.props.liquid).join(" ")},this.renderChunkTd(e,t,e.chunk,n))}renderChunkTd(e,t,n,r){if("outerContent"in n)return n.outerContent;let{props:i}=this,{forceYScrollbars:s,scrollerClientWidths:o,scrollerClientHeights:a}=this.state,l=Cs(i,e),c=ws(i,e),d=i.liquid?s?"scroll":l?"auto":"hidden":"visible",u=e.key,h=Rs(e,n,{tableColGroupNode:t,tableMinWidth:"",clientWidth:i.collapsibleWidth||void 0===o[u]?null:o[u],clientHeight:void 0!==a[u]?a[u]:null,expandRows:e.expandRows,syncRowHeights:!1,rowSyncHeights:[],reportRowHeightChange:()=>{}},r);return f(r?"th":"td",{ref:n.elRef,role:"presentation"},f("div",{className:"fc-scroller-harness"+(c?" fc-scroller-harness-liquid":"")},f(As,{ref:this.scrollerRefs.createRef(u),elRef:this.scrollerElRefs.createRef(u),overflowY:d,overflowX:i.liquid?"hidden":"visible",maxHeight:e.maxHeight,liquid:c,liquidIsAbsolute:!0},h)))}_handleScrollerEl(e,t){let n=function(e,t){for(let n of e)if(n.key===t)return n;return null}(this.props.sections,t);n&&jr(n.chunk.scrollerElRef,e)}componentDidMount(){this.handleSizing(),this.context.addResizeHandler(this.handleSizing)}componentDidUpdate(){this.handleSizing()}componentWillUnmount(){this.context.removeResizeHandler(this.handleSizing)}computeShrinkWidth(){return ks(this.props.cols)?Ss(this.scrollerElRefs.getAll()):0}computeScrollerDims(){let e=mr(),{scrollerRefs:t,scrollerElRefs:n}=this,r=!1,i={},s={};for(let e in t.currentMap){let n=t.currentMap[e];if(n&&n.needsYScrolling()){r=!0;break}}for(let t of this.props.sections){let o=t.key,a=n.currentMap[o];if(a){let t=a.parentNode;i[o]=Math.floor(t.getBoundingClientRect().width-(r?e.y:0)),s[o]=Math.floor(t.getBoundingClientRect().height)}}return{forceYScrollbars:r,scrollerClientWidths:i,scrollerClientHeights:s}}}Hs.addStateEquality({scrollerClientWidths:pt,scrollerClientHeights:pt});class Bs extends Br{constructor(){super(...arguments),this.handleEl=e=>{this.el=e,e&&ei(e,this.props.seg)}}render(){const{props:e,context:t}=this,{options:n}=t,{seg:r}=e,{eventRange:i}=r,{ui:s}=i,o={event:new Zr(t,i.def,i.instance),view:t.viewApi,timeText:e.timeText,textColor:s.textColor,backgroundColor:s.backgroundColor,borderColor:s.borderColor,isDraggable:!e.disableDragging&&oi(r,t),isStartResizable:!e.disableResizing&&ai(r,t),isEndResizable:!e.disableResizing&&li(r),isMirror:Boolean(e.isDragging||e.isResizing||e.isDateSelecting),isStart:Boolean(r.isStart),isEnd:Boolean(r.isEnd),isPast:Boolean(e.isPast),isFuture:Boolean(e.isFuture),isToday:Boolean(e.isToday),isSelected:Boolean(e.isSelected),isDragging:Boolean(e.isDragging),isResizing:Boolean(e.isResizing)};return f(qi,Object.assign({},e,{elRef:this.handleEl,elClasses:[...ui(o),...r.eventRange.ui.classNames,...e.elClasses||[]],renderProps:o,generatorName:"eventContent",generator:n.eventContent||e.defaultGenerator,classNameGenerator:n.eventClassNames,didMount:n.eventDidMount,willUnmount:n.eventWillUnmount}))}componentDidUpdate(e){this.el&&this.props.seg!==e.seg&&ei(this.el,this.props.seg)}}class js extends Br{render(){let{props:e,context:t}=this,{options:n}=t,{seg:r}=e,{ui:i}=r.eventRange,s=ci(r,n.eventTimeFormat||e.defaultTimeFormat,t,e.defaultDisplayEventTime,e.defaultDisplayEventEnd);return f(Bs,Object.assign({},e,{elTag:"a",elStyle:{borderColor:i.borderColor,backgroundColor:i.backgroundColor},elAttrs:fi(r,t),defaultGenerator:zs,timeText:s}),(e,t)=>f(p,null,f(e,{elTag:"div",elClasses:["fc-event-main"],elStyle:{color:t.textColor}}),Boolean(t.isStartResizable)&&f("div",{className:"fc-event-resizer fc-event-resizer-start"}),Boolean(t.isEndResizable)&&f("div",{className:"fc-event-resizer fc-event-resizer-end"})))}}function zs(e){return f("div",{className:"fc-event-main-frame"},e.timeText&&f("div",{className:"fc-event-time"},e.timeText),f("div",{className:"fc-event-title-container"},f("div",{className:"fc-event-title fc-sticky"},e.event.title||f(p,null," "))))}const Us=e=>f(Nr.Consumer,null,t=>{let{options:n}=t,r={isAxis:e.isAxis,date:t.dateEnv.toDate(e.date),view:t.viewApi};return f(qi,Object.assign({},e,{elTag:e.elTag||"div",renderProps:r,generatorName:"nowIndicatorContent",generator:n.nowIndicatorContent,classNameGenerator:n.nowIndicatorClassNames,didMount:n.nowIndicatorDidMount,willUnmount:n.nowIndicatorWillUnmount}))}),Ls=on({day:"numeric"});class Ws extends Br{constructor(){super(...arguments),this.refineRenderProps=Gt(Vs)}render(){let{props:e,context:t}=this,{options:n}=t,r=this.refineRenderProps({date:e.date,dateProfile:e.dateProfile,todayRange:e.todayRange,showDayNumber:e.showDayNumber,extraRenderProps:e.extraRenderProps,viewApi:t.viewApi,dateEnv:t.dateEnv});return f(qi,Object.assign({},e,{elClasses:[...cr(r,t.theme),...e.elClasses||[]],elAttrs:Object.assign(Object.assign({},e.elAttrs),r.isDisabled?{}:{"data-date":Ut(e.date)}),renderProps:r,generatorName:"dayCellContent",generator:n.dayCellContent||e.defaultGenerator,classNameGenerator:r.isDisabled?void 0:n.dayCellClassNames,didMount:n.dayCellDidMount,willUnmount:n.dayCellWillUnmount}))}}function Fs(e){return Boolean(e.dayCellContent||Vi("dayCellContent",e))}function Vs(e){let{date:t,dateEnv:n}=e,r=lr(t,e.todayRange,null,e.dateProfile);return Object.assign(Object.assign(Object.assign({date:n.toDate(t),view:e.viewApi},r),{dayNumberText:e.showDayNumber?n.format(t,Ls):""}),e.extraRenderProps)}class Gs extends Br{render(){let{props:e}=this,{seg:t}=e;return f(Bs,{elTag:"div",elClasses:["fc-bg-event"],elStyle:{backgroundColor:t.eventRange.ui.backgroundColor},defaultGenerator:Qs,seg:t,timeText:"",isDragging:!1,isResizing:!1,isDateSelecting:!1,isSelected:!1,isPast:e.isPast,isFuture:e.isFuture,isToday:e.isToday,disableDragging:!0,disableResizing:!0})}}function Qs(e){let{title:t}=e.event;return t&&f("div",{className:"fc-event-title"},e.event.title)}function qs(e){return f("div",{className:"fc-"+e})}const Ys=e=>f(Nr.Consumer,null,t=>{let{dateEnv:n,options:r}=t,{date:i}=e,s=r.weekNumberFormat||e.defaultFormat,o={num:n.computeWeekNumber(i),text:n.format(i,s),date:i};return f(qi,Object.assign({},e,{renderProps:o,generatorName:"weekNumberContent",generator:r.weekNumberContent||Zs,classNameGenerator:r.weekNumberClassNames,didMount:r.weekNumberDidMount,willUnmount:r.weekNumberWillUnmount}))});function Zs(e){return e.text}class Xs extends Br{constructor(){super(...arguments),this.state={titleId:Te()},this.handleRootEl=e=>{this.rootEl=e,this.props.elRef&&jr(this.props.elRef,e)},this.handleDocumentMouseDown=e=>{const t=Re(e);this.rootEl.contains(t)||this.handleCloseClick()},this.handleDocumentKeyDown=e=>{"Escape"===e.key&&this.handleCloseClick()},this.handleCloseClick=()=>{let{onClose:e}=this.props;e&&e()}}render(){let{theme:e,options:t}=this.context,{props:n,state:r}=this,i=["fc-popover",e.getClass("popover")].concat(n.extraClassNames||[]);return function(e,t){var n=f(ae,{__v:e,i:t});return n.containerInfo=t,n}(f("div",Object.assign({},n.extraAttrs,{id:n.id,className:i.join(" "),"aria-labelledby":r.titleId,ref:this.handleRootEl}),f("div",{className:"fc-popover-header "+e.getClass("popoverHeader")},f("span",{className:"fc-popover-title",id:r.titleId},n.title),f("span",{className:"fc-popover-close "+e.getIconClass("close"),title:t.closeHint,onClick:this.handleCloseClick})),f("div",{className:"fc-popover-body "+e.getClass("popoverContent")},n.children)),n.parentEl)}componentDidMount(){document.addEventListener("mousedown",this.handleDocumentMouseDown),document.addEventListener("keydown",this.handleDocumentKeyDown),this.updateSize()}componentWillUnmount(){document.removeEventListener("mousedown",this.handleDocumentMouseDown),document.removeEventListener("keydown",this.handleDocumentKeyDown)}updateSize(){let{isRtl:e}=this.context,{alignmentEl:t,alignGridTop:n}=this.props,{rootEl:r}=this,i=function(e){let t=Ar(e),n=e.getBoundingClientRect();for(let e of t){let t=Qn(n,e.getBoundingClientRect());if(!t)return null;n=t}return n}(t);if(i){let s=r.getBoundingClientRect(),o=n?Ee(t,".fc-scrollgrid").getBoundingClientRect().top:i.top,a=e?i.right-s.width:i.left;o=Math.max(o,10),a=Math.min(a,document.documentElement.clientWidth-10-s.width),a=Math.max(a,10);let l=r.offsetParent.getBoundingClientRect();we(r,{top:o-l.top,left:a-l.left})}}}class Js extends zr{constructor(){super(...arguments),this.handleRootEl=e=>{this.rootEl=e,e?this.context.registerInteractiveComponent(this,{el:e,useEventCenter:!1}):this.context.unregisterInteractiveComponent(this)}}render(){let{options:e,dateEnv:t}=this.context,{props:n}=this,{startDate:r,todayRange:i,dateProfile:s}=n,o=t.format(r,e.dayPopoverFormat);return f(Ws,{elRef:this.handleRootEl,date:r,dateProfile:s,todayRange:i},(t,r,i)=>f(Xs,{elRef:i.ref,id:n.id,title:o,extraClassNames:["fc-more-popover"].concat(i.className||[]),extraAttrs:i,parentEl:n.parentEl,alignmentEl:n.alignmentEl,alignGridTop:n.alignGridTop,onClose:n.onClose},Fs(e)&&f(t,{elTag:"div",elClasses:["fc-more-popover-misc"]}),n.children))}queryHit(e,t,n,r){let{rootEl:i,props:s}=this;return e>=0&&e<n&&t>=0&&t<r?{dateProfile:s.dateProfile,dateSpan:Object.assign({allDay:!0,range:{start:s.startDate,end:s.endDate}},s.extraDateSpan),dayEl:i,rect:{left:0,top:0,right:n,bottom:r},layer:1}:null}}class $s extends Br{constructor(){super(...arguments),this.state={isPopoverOpen:!1,popoverId:Te()},this.handleLinkEl=e=>{this.linkEl=e,this.props.elRef&&jr(this.props.elRef,e)},this.handleClick=e=>{let{props:t,context:n}=this,{moreLinkClick:r}=n.options,i=eo(t).start;function s(e){let{def:t,instance:r,range:i}=e.eventRange;return{event:new Zr(n,t,r),start:n.dateEnv.toDate(i.start),end:n.dateEnv.toDate(i.end),isStart:e.isStart,isEnd:e.isEnd}}"function"==typeof r&&(r=r({date:i,allDay:Boolean(t.allDayDate),allSegs:t.allSegs.map(s),hiddenSegs:t.hiddenSegs.map(s),jsEvent:e,view:n.viewApi})),r&&"popover"!==r?"string"==typeof r&&n.calendarApi.zoomTo(i,r):this.setState({isPopoverOpen:!0})},this.handlePopoverClose=()=>{this.setState({isPopoverOpen:!1})}}render(){let{props:e,state:t}=this;return f(Nr.Consumer,null,n=>{let{viewApi:r,options:i,calendarApi:s}=n,{moreLinkText:o}=i,{moreCnt:a}=e,l=eo(e),c="function"==typeof o?o.call(s,a):`+${a} ${o}`,d=Ze(i.moreLinkHint,[a],c),u={num:a,shortText:"+"+a,text:c,view:r};return f(p,null,Boolean(e.moreCnt)&&f(qi,{elTag:e.elTag||"a",elRef:this.handleLinkEl,elClasses:[...e.elClasses||[],"fc-more-link"],elStyle:e.elStyle,elAttrs:Object.assign(Object.assign(Object.assign({},e.elAttrs),Ne(this.handleClick)),{title:d,"aria-expanded":t.isPopoverOpen,"aria-controls":t.isPopoverOpen?t.popoverId:""}),renderProps:u,generatorName:"moreLinkContent",generator:i.moreLinkContent||e.defaultGenerator||Ks,classNameGenerator:i.moreLinkClassNames,didMount:i.moreLinkDidMount,willUnmount:i.moreLinkWillUnmount},e.children),t.isPopoverOpen&&f(Js,{id:t.popoverId,startDate:l.start,endDate:l.end,dateProfile:e.dateProfile,todayRange:e.todayRange,extraDateSpan:e.extraDateSpan,parentEl:this.parentEl,alignmentEl:e.alignmentElRef?e.alignmentElRef.current:this.linkEl,alignGridTop:e.alignGridTop,onClose:this.handlePopoverClose},e.popoverContent()))})}componentDidMount(){this.updateParentEl()}componentDidUpdate(){this.updateParentEl()}updateParentEl(){this.linkEl&&(this.parentEl=Ee(this.linkEl,".fc-view-harness"))}}function Ks(e){return e.text}function eo(e){if(e.allDayDate)return{start:e.allDayDate,end:St(e.allDayDate,1)};let{hiddenSegs:t}=e;return{start:to(t),end:(n=t,n.reduce(ro).eventRange.range.end)};var n}function to(e){return e.reduce(no).eventRange.range.start}function no(e,t){return e.eventRange.range.start<t.eventRange.range.start?e:t}function ro(e,t){return e.eventRange.range.end>t.eventRange.range.end?e:t}class io extends Br{render(){let{props:e,context:t}=this,{options:n}=t,r={view:t.viewApi};return f(qi,Object.assign({},e,{elTag:e.elTag||"div",elClasses:[...so(e.viewSpec),...e.elClasses||[]],renderProps:r,classNameGenerator:n.viewClassNames,generatorName:void 0,generator:void 0,didMount:n.viewDidMount,willUnmount:n.viewWillUnmount}),()=>e.children)}}function so(e){return[`fc-${e.type}-view`,"fc-view"]}function oo(e){if(!e||"undefined"==typeof document)return;const t=document.head||document.getElementsByTagName("head")[0],n=document.createElement("style");n.type="text/css",t.appendChild(n),n.styleSheet?n.styleSheet.cssText=e:n.appendChild(document.createTextNode(e))}const ao={id:String,defaultAllDay:Boolean,url:String,format:String,events:mn,eventDataTransform:mn,success:mn,failure:mn};function lo(e,t,n=co(t)){let r;if("string"==typeof e?r={url:e}:"function"==typeof e||Array.isArray(e)?r={events:e}:"object"==typeof e&&e&&(r=e),r){let{refined:i,extra:s}=pn(r,n),o=function(e,t){let n=t.pluginHooks.eventSourceDefs;for(let t=n.length-1;t>=0;t-=1){let r=n[t].parseMeta(e);if(r)return{sourceDefId:t,meta:r}}return null}(i,t);if(o)return{_raw:e,isFetching:!1,latestFetchId:"",fetchRange:null,defaultAllDay:i.defaultAllDay,eventDataTransform:i.eventDataTransform,success:i.success,failure:i.failure,publicId:i.id||"",sourceId:Be(),sourceDefId:o.sourceDefId,meta:o.meta,ui:Tn(i,t),extendedProps:s}}return null}function co(e){return Object.assign(Object.assign(Object.assign({},xn),ao),e.pluginHooks.eventSourceRefiners)}class uo{getCurrentData(){return this.currentDataManager.getCurrentData()}dispatch(e){this.currentDataManager.dispatch(e)}get view(){return this.getCurrentData().viewApi}batchRendering(e){e()}updateSize(){this.trigger("_resize",!0)}setOption(e,t){this.dispatch({type:"SET_OPTION",optionName:e,rawOptionValue:t})}getOption(e){return this.currentDataManager.currentCalendarOptionsInput[e]}getAvailableLocaleCodes(){return Object.keys(this.getCurrentData().availableRawLocales)}on(e,t){let{currentDataManager:n}=this;n.currentCalendarOptionsRefiners[e]?n.emitter.on(e,t):console.warn(`Unknown listener name '${e}'`)}off(e,t){this.currentDataManager.emitter.off(e,t)}trigger(e,...t){this.currentDataManager.emitter.trigger(e,...t)}changeView(e,t){this.batchRendering(()=>{if(this.unselect(),t)if(t.start&&t.end)this.dispatch({type:"CHANGE_VIEW_TYPE",viewType:e}),this.dispatch({type:"SET_OPTION",optionName:"visibleRange",rawOptionValue:t});else{let{dateEnv:n}=this.getCurrentData();this.dispatch({type:"CHANGE_VIEW_TYPE",viewType:e,dateMarker:n.createMarker(t)})}else this.dispatch({type:"CHANGE_VIEW_TYPE",viewType:e})})}zoomTo(e,t){let n;t=t||"day",n=this.getCurrentData().viewSpecs[t]||this.getUnitViewSpec(t),this.unselect(),n?this.dispatch({type:"CHANGE_VIEW_TYPE",viewType:n.type,dateMarker:e}):this.dispatch({type:"CHANGE_DATE",dateMarker:e})}getUnitViewSpec(e){let t,n,{viewSpecs:r,toolbarConfig:i}=this.getCurrentData(),s=[].concat(i.header?i.header.viewsWithButtons:[],i.footer?i.footer.viewsWithButtons:[]);for(let e in r)s.push(e);for(t=0;t<s.length;t+=1)if(n=r[s[t]],n&&n.singleUnit===e)return n;return null}prev(){this.unselect(),this.dispatch({type:"PREV"})}next(){this.unselect(),this.dispatch({type:"NEXT"})}prevYear(){let e=this.getCurrentData();this.unselect(),this.dispatch({type:"CHANGE_DATE",dateMarker:e.dateEnv.addYears(e.currentDate,-1)})}nextYear(){let e=this.getCurrentData();this.unselect(),this.dispatch({type:"CHANGE_DATE",dateMarker:e.dateEnv.addYears(e.currentDate,1)})}today(){let e=this.getCurrentData();this.unselect(),this.dispatch({type:"CHANGE_DATE",dateMarker:Ur(e.calendarOptions.now,e.dateEnv)})}gotoDate(e){let t=this.getCurrentData();this.unselect(),this.dispatch({type:"CHANGE_DATE",dateMarker:t.dateEnv.createMarker(e)})}incrementDate(e){let t=this.getCurrentData(),n=tt(e);n&&(this.unselect(),this.dispatch({type:"CHANGE_DATE",dateMarker:t.dateEnv.add(t.currentDate,n)}))}getDate(){let e=this.getCurrentData();return e.dateEnv.toDate(e.currentDate)}formatDate(e,t){let{dateEnv:n}=this.getCurrentData();return n.format(n.createMarker(e),on(t))}formatRange(e,t,n){let{dateEnv:r}=this.getCurrentData();return r.formatRange(r.createMarker(e),r.createMarker(t),on(n),n)}formatIso(e,t){let{dateEnv:n}=this.getCurrentData();return n.formatIso(n.createMarker(e),{omitTime:t})}select(e,t){let n;n=null==t?null!=e.start?e:{start:e,end:null}:{start:e,end:t};let r=this.getCurrentData(),i=pi(n,r.dateEnv,tt({days:1}));i&&(this.dispatch({type:"SELECT_DATES",selection:i}),Wr(i,null,r))}unselect(e){let t=this.getCurrentData();t.dateSelection&&(this.dispatch({type:"UNSELECT_DATES"}),function(e,t){t.emitter.trigger("unselect",{jsEvent:e?e.origEvent:null,view:t.viewApi||t.calendarApi.view})}(e,t))}addEvent(e,t){if(e instanceof Zr){let t=e._def,n=e._instance;return this.getCurrentData().eventStore.defs[t.defId]||(this.dispatch({type:"ADD_EVENTS",eventStore:An({def:t,instance:n})}),this.triggerEventAdd(e)),e}let n,r=this.getCurrentData();if(t instanceof Yr)n=t.internalEventSource;else if("boolean"==typeof t)t&&([n]=gt(r.eventSources));else if(null!=t){let e=this.getEventSourceById(t);if(!e)return console.warn(`Could not find an event source with ID "${t}"`),null;n=e.internalEventSource}let i=Pn(e,n,r,!1);if(i){let e=new Zr(r,i.def,i.def.recurringDef?null:i.instance);return this.dispatch({type:"ADD_EVENTS",eventStore:An(i)}),this.triggerEventAdd(e),e}return null}triggerEventAdd(e){let{emitter:t}=this.getCurrentData();t.trigger("eventAdd",{event:e,relatedEvents:[],revert:()=>{this.dispatch({type:"REMOVE_EVENTS",eventStore:Xr(e)})}})}getEventById(e){let t=this.getCurrentData(),{defs:n,instances:r}=t.eventStore;e=String(e);for(let i in n){let s=n[i];if(s.publicId===e){if(s.recurringDef)return new Zr(t,s,null);for(let e in r){let n=r[e];if(n.defId===s.defId)return new Zr(t,s,n)}}}return null}getEvents(){let e=this.getCurrentData();return Jr(e.eventStore,e)}removeAllEvents(){this.dispatch({type:"REMOVE_ALL_EVENTS"})}getEventSources(){let e=this.getCurrentData(),t=e.eventSources,n=[];for(let r in t)n.push(new Yr(e,t[r]));return n}getEventSourceById(e){let t=this.getCurrentData(),n=t.eventSources;e=String(e);for(let r in n)if(n[r].publicId===e)return new Yr(t,n[r]);return null}addEventSource(e){let t=this.getCurrentData();if(e instanceof Yr)return t.eventSources[e.internalEventSource.sourceId]||this.dispatch({type:"ADD_EVENT_SOURCES",sources:[e.internalEventSource]}),e;let n=lo(e,t);return n?(this.dispatch({type:"ADD_EVENT_SOURCES",sources:[n]}),new Yr(t,n)):null}removeAllEventSources(){this.dispatch({type:"REMOVE_ALL_EVENT_SOURCES"})}refetchEvents(){this.dispatch({type:"FETCH_EVENT_SOURCES",isRefetch:!0})}scrollToTime(e){let t=tt(e);t&&this.trigger("_scrollRequest",{time:t})}}var ho={__proto__:null,BASE_OPTION_DEFAULTS:ln,BaseComponent:Br,BgEvent:Gs,CalendarImpl:uo,CalendarRoot:zi,ContentContainer:qi,CustomRenderingStore:class extends class{constructor(){this.handlers=[]}set(e){this.currentValue=e;for(let t of this.handlers)t(e)}subscribe(e){this.handlers.push(e),void 0!==this.currentValue&&e(this.currentValue)}}{constructor(){super(...arguments),this.map=new Map}handle(e){const{map:t}=this;let n=!1;e.isActive?(t.set(e.id,e),n=!0):t.has(e.id)&&(t.delete(e.id),n=!0),n&&this.set(t)}},DateComponent:zr,DateEnv:wi,DateProfileGenerator:Lr,DayCellContainer:Ws,DayHeader:es,DaySeriesModel:ns,DayTableModel:rs,DelayedRunner:ys,ElementDragging:Pi,ElementScrollController:xr,Emitter:Sr,EventContainer:Bs,EventImpl:Zr,Interaction:Ii,MoreLinkContainer:$s,NamedTimeZoneImpl:class{constructor(e){this.timeZoneName=e}},NowIndicatorContainer:Us,NowTimer:$i,PositionCache:wr,RefMap:Ds,ScrollController:Rr,ScrollResponder:Or,Scroller:As,SegHierarchy:Ci,SimpleScrollGrid:Hs,Slicer:is,Splitter:Kn,StandardEvent:js,TableDateCell:Zi,TableDowCell:Ji,Theme:Tr,ViewContainer:io,ViewContextType:Nr,WeekNumberContainer:Ys,WindowScrollController:_r,addDays:St,addDurations:rt,addMs:wt,addWeeks:Dt,allowContextMenu:Fe,allowSelection:Le,applyMutationToEventStore:Gr,applyStyle:we,asCleanDays:function(e){return e.years||e.months||e.milliseconds?0:e.days},asRoughMinutes:function(e){return ot(e)/6e4},asRoughMs:ot,asRoughSeconds:function(e){return ot(e)/1e3},binarySearch:Mi,buildElAttrs:Gi,buildEntryKey:xi,buildEventApis:Jr,buildEventRangeKey:hi,buildIsoString:zt,buildNavLinkAttrs:hr,buildSegTimeText:ci,collectFromHash:Et,combineEventUis:kn,compareByFieldSpecs:Ge,compareNumbers:Xe,compareObjs:bt,computeEarliestSegStart:to,computeEdges:br,computeFallbackHeaderFormat:Ui,computeInnerRect:yr,computeRect:Er,computeShrinkWidth:Ss,computeVisibleDayRange:Wn,config:Hi,constrainPoint:qn,createDuration:tt,createEmptyEventStore:Sn,createEventInstance:vn,createEventUi:Tn,createFormatter:on,diffDates:Vn,diffDayAndTime:xt,diffDays:Rt,diffPoints:Zn,diffWeeks:Ct,diffWholeDays:Tt,diffWholeWeeks:_t,disableCursor:je,elementClosest:Ee,elementMatches:Ae,enableCursor:ze,eventTupleToStore:An,filterHash:ut,findDirectChildren:function(e,t){let n=e instanceof HTMLElement?[e]:e,r=[];for(let e=0;e<n.length;e+=1){let i=n[e].children;for(let e=0;e<i.length;e+=1){let n=i[e];t&&!Ae(n,t)||r.push(n)}}return r},findElements:De,flexibleCompare:qe,formatDayString:Ut,formatIsoTimeString:Lt,getAllowYScrolling:Cs,getCanVGrowWithinCell:Jn,getClippingParents:Ar,getDateMeta:lr,getDayClassNames:cr,getDefaultEventEnd:Vr,getElRoot:xe,getElSeg:ti,getEntrySpanEnd:Ri,getEventTargetViaRoot:Re,getIsRtlScrollbarOnLeft:pr,getRectCenter:Yn,getRelevantEvents:Dn,getScrollGridClassNames:Ms,getScrollbarWidths:mr,getSectionClassNames:Is,getSectionHasLiquidHeight:ws,getSegAnchorAttrs:fi,getSegMeta:di,getSlotClassNames:function(e,t){let n=["fc-slot","fc-slot-"+At[e.dow]];return e.isDisabled?n.push("fc-slot-disabled"):(e.isToday&&(n.push("fc-slot-today"),n.push(t.getClass("today"))),e.isPast&&n.push("fc-slot-past"),e.isFuture&&n.push("fc-slot-future")),n},getStickyFooterScrollbar:Ps,getStickyHeaderDates:Ns,getUniqueDomId:Te,greatestDurationDenominator:lt,groupIntersectingEntries:_i,guid:Be,hasBgRendering:Kr,hasCustomDayCellContent:Fs,hasShrinkWidth:ks,identity:mn,injectStyles:oo,interactionSettingsStore:Ni,interactionSettingsToStore:Oi,intersectRanges:rr,intersectRects:Qn,intersectSpans:Ti,isArraysEqual:Ft,isColPropsEqual:xs,isDateSelectionValid:ds,isDateSpansEqual:mi,isInt:Je,isInteractionValid:cs,isMultiDayRange:Fn,isPropsEqual:pt,isPropsValid:hs,isValidDate:Bt,mapHash:ht,memoize:Vt,memoizeArraylike:function(e,t,n){let r=[],i=[];return s=>{let o=r.length,a=s.length,l=0;for(;l<o;l+=1)if(s[l]){if(!Ft(r[l],s[l])){n&&n(i[l]);let r=e.apply(this,s[l]);t&&t(r,i[l])||(i[l]=r)}}else n&&n(i[l]);for(;l<a;l+=1)i[l]=e.apply(this,s[l]);return r=s,i.splice(a),i}},memoizeHashlike:function(e,t,n){let r={},i={};return s=>{let o={};for(let a in s)if(i[a])if(Ft(r[a],s[a]))o[a]=i[a];else{n&&n(i[a]);let r=e.apply(this,s[a]);o[a]=t&&t(r,i[a])?i[a]:r}else o[a]=e.apply(this,s[a]);return r=s,i=o,o}},memoizeObjArg:Gt,mergeEventStores:wn,multiplyDuration:it,padStart:Ye,parseBusinessHours:Un,parseClassNames:Rn,parseDragMeta:ji,parseEventDef:jn,parseFieldSpecs:Ve,parseMarker:Si,pointInsideRect:Gn,preventContextMenu:We,preventDefault:ke,preventSelection:Ue,rangeContainsMarker:ar,rangeContainsRange:or,rangesEqual:ir,rangesIntersect:sr,refineEventDef:Hn,refineProps:pn,removeElement:ye,removeExact:function(e,t){let n=0,r=0;for(;r<e.length;)e[r]===t?(e.splice(r,1),n+=1):r+=1;return n},renderChunkContent:Rs,renderFill:qs,renderMicroColGroup:_s,renderScrollShim:Os,requestJson:bs,sanitizeShrinkWidth:Ts,setRef:jr,sliceEventStore:$r,sortEventSegs:ii,startOfDay:kt,translateRect:function(e,t,n){return{left:e.left+t,right:e.right+t,top:e.top+n,bottom:e.bottom+n}},triggerDateSelect:Wr,unpromisify:Dr,whenTransitionDone:Oe,wholeDivideDurations:at};oo(':root{--fc-small-font-size:.85em;--fc-page-bg-color:#fff;--fc-neutral-bg-color:hsla(0,0%,82%,.3);--fc-neutral-text-color:grey;--fc-border-color:#ddd;--fc-button-text-color:#fff;--fc-button-bg-color:#2c3e50;--fc-button-border-color:#2c3e50;--fc-button-hover-bg-color:#1e2b37;--fc-button-hover-border-color:#1a252f;--fc-button-active-bg-color:#1a252f;--fc-button-active-border-color:#151e27;--fc-event-bg-color:#3788d8;--fc-event-border-color:#3788d8;--fc-event-text-color:#fff;--fc-event-selected-overlay-color:rgba(0,0,0,.25);--fc-more-link-bg-color:#d0d0d0;--fc-more-link-text-color:inherit;--fc-event-resizer-thickness:8px;--fc-event-resizer-dot-total-width:8px;--fc-event-resizer-dot-border-width:1px;--fc-non-business-color:hsla(0,0%,84%,.3);--fc-bg-event-color:#8fdf82;--fc-bg-event-opacity:0.3;--fc-highlight-color:rgba(188,232,241,.3);--fc-today-bg-color:rgba(255,220,40,.15);--fc-now-indicator-color:red}.fc-not-allowed,.fc-not-allowed .fc-event{cursor:not-allowed}.fc-unselectable{-webkit-touch-callout:none;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-moz-user-select:none;user-select:none}.fc{display:flex;flex-direction:column;font-size:1em}.fc,.fc *,.fc :after,.fc :before{box-sizing:border-box}.fc table{border-collapse:collapse;border-spacing:0;font-size:1em}.fc th{text-align:center}.fc td,.fc th{padding:0;vertical-align:top}.fc a[data-navlink]{cursor:pointer}.fc a[data-navlink]:hover{text-decoration:underline}.fc-direction-ltr{direction:ltr;text-align:left}.fc-direction-rtl{direction:rtl;text-align:right}.fc-theme-standard td,.fc-theme-standard th{border:1px solid var(--fc-border-color)}.fc-liquid-hack td,.fc-liquid-hack th{position:relative}@font-face{font-family:fcicons;font-style:normal;font-weight:400;src:url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBfAAAAC8AAAAYGNtYXAXVtKNAAABHAAAAFRnYXNwAAAAEAAAAXAAAAAIZ2x5ZgYydxIAAAF4AAAFNGhlYWQUJ7cIAAAGrAAAADZoaGVhB20DzAAABuQAAAAkaG10eCIABhQAAAcIAAAALGxvY2ED4AU6AAAHNAAAABhtYXhwAA8AjAAAB0wAAAAgbmFtZXsr690AAAdsAAABhnBvc3QAAwAAAAAI9AAAACAAAwPAAZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpBgPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAOAAAAAoACAACAAIAAQAg6Qb//f//AAAAAAAg6QD//f//AAH/4xcEAAMAAQAAAAAAAAAAAAAAAQAB//8ADwABAAAAAAAAAAAAAgAANzkBAAAAAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAWIAjQKeAskAEwAAJSc3NjQnJiIHAQYUFwEWMjc2NCcCnuLiDQ0MJAz/AA0NAQAMJAwNDcni4gwjDQwM/wANIwz/AA0NDCMNAAAAAQFiAI0CngLJABMAACUBNjQnASYiBwYUHwEHBhQXFjI3AZ4BAA0N/wAMJAwNDeLiDQ0MJAyNAQAMIw0BAAwMDSMM4uINIwwNDQAAAAIA4gC3Ax4CngATACcAACUnNzY0JyYiDwEGFB8BFjI3NjQnISc3NjQnJiIPAQYUHwEWMjc2NCcB87e3DQ0MIw3VDQ3VDSMMDQ0BK7e3DQ0MJAzVDQ3VDCQMDQ3zuLcMJAwNDdUNIwzWDAwNIwy4twwkDA0N1Q0jDNYMDA0jDAAAAgDiALcDHgKeABMAJwAAJTc2NC8BJiIHBhQfAQcGFBcWMjchNzY0LwEmIgcGFB8BBwYUFxYyNwJJ1Q0N1Q0jDA0Nt7cNDQwjDf7V1Q0N1QwkDA0Nt7cNDQwkDLfWDCMN1Q0NDCQMt7gMIw0MDNYMIw3VDQ0MJAy3uAwjDQwMAAADAFUAAAOrA1UAMwBoAHcAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMhMjY1NCYjISIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAAVYRGRkR/qoRGRkRA1UFBAUOCQkVDAsZDf2rDRkLDBUJCA4FBQUFBQUOCQgVDAsZDQJVDRkLDBUJCQ4FBAVVAgECBQMCBwQECAX9qwQJAwQHAwMFAQICAgIBBQMDBwQDCQQCVQUIBAQHAgMFAgEC/oAZEhEZGRESGQAAAAADAFUAAAOrA1UAMwBoAIkAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMzFRQWMzI2PQEzMjY1NCYrATU0JiMiBh0BIyIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAgBkSEhmAERkZEYAZEhIZgBEZGREDVQUEBQ4JCRUMCxkN/asNGQsMFQkIDgUFBQUFBQ4JCBUMCxkNAlUNGQsMFQkJDgUEBVUCAQIFAwIHBAQIBf2rBAkDBAcDAwUBAgICAgEFAwMHBAMJBAJVBQgEBAcCAwUCAQL+gIASGRkSgBkSERmAEhkZEoAZERIZAAABAOIAjQMeAskAIAAAExcHBhQXFjI/ARcWMjc2NC8BNzY0JyYiDwEnJiIHBhQX4uLiDQ0MJAzi4gwkDA0N4uINDQwkDOLiDCQMDQ0CjeLiDSMMDQ3h4Q0NDCMN4uIMIw0MDOLiDAwNIwwAAAABAAAAAQAAa5n0y18PPPUACwQAAAAAANivOVsAAAAA2K85WwAAAAADqwNVAAAACAACAAAAAAAAAAEAAAPA/8AAAAQAAAAAAAOrAAEAAAAAAAAAAAAAAAAAAAALBAAAAAAAAAAAAAAAAgAAAAQAAWIEAAFiBAAA4gQAAOIEAABVBAAAVQQAAOIAAAAAAAoAFAAeAEQAagCqAOoBngJkApoAAQAAAAsAigADAAAAAAACAAAAAAAAAAAAAAAAAAAAAAAAAA4ArgABAAAAAAABAAcAAAABAAAAAAACAAcAYAABAAAAAAADAAcANgABAAAAAAAEAAcAdQABAAAAAAAFAAsAFQABAAAAAAAGAAcASwABAAAAAAAKABoAigADAAEECQABAA4ABwADAAEECQACAA4AZwADAAEECQADAA4APQADAAEECQAEAA4AfAADAAEECQAFABYAIAADAAEECQAGAA4AUgADAAEECQAKADQApGZjaWNvbnMAZgBjAGkAYwBvAG4Ac1ZlcnNpb24gMS4wAFYAZQByAHMAaQBvAG4AIAAxAC4AMGZjaWNvbnMAZgBjAGkAYwBvAG4Ac2ZjaWNvbnMAZgBjAGkAYwBvAG4Ac1JlZ3VsYXIAUgBlAGcAdQBsAGEAcmZjaWNvbnMAZgBjAGkAYwBvAG4Ac0ZvbnQgZ2VuZXJhdGVkIGJ5IEljb01vb24uAEYAbwBuAHQAIABnAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4ALgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=") format("truetype")}.fc-icon{speak:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;display:inline-block;font-family:fcicons!important;font-style:normal;font-variant:normal;font-weight:400;height:1em;line-height:1;text-align:center;text-transform:none;-webkit-user-select:none;-moz-user-select:none;user-select:none;width:1em}.fc-icon-chevron-left:before{content:"\\e900"}.fc-icon-chevron-right:before{content:"\\e901"}.fc-icon-chevrons-left:before{content:"\\e902"}.fc-icon-chevrons-right:before{content:"\\e903"}.fc-icon-minus-square:before{content:"\\e904"}.fc-icon-plus-square:before{content:"\\e905"}.fc-icon-x:before{content:"\\e906"}.fc .fc-button{border-radius:0;font-family:inherit;font-size:inherit;line-height:inherit;margin:0;overflow:visible;text-transform:none}.fc .fc-button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}.fc .fc-button{-webkit-appearance:button}.fc .fc-button:not(:disabled){cursor:pointer}.fc .fc-button::-moz-focus-inner{border-style:none;padding:0}.fc .fc-button{background-color:transparent;border:1px solid transparent;border-radius:.25em;display:inline-block;font-size:1em;font-weight:400;line-height:1.5;padding:.4em .65em;text-align:center;-webkit-user-select:none;-moz-user-select:none;user-select:none;vertical-align:middle}.fc .fc-button:hover{text-decoration:none}.fc .fc-button:focus{box-shadow:0 0 0 .2rem rgba(44,62,80,.25);outline:0}.fc .fc-button:disabled{opacity:.65}.fc .fc-button-primary{background-color:var(--fc-button-bg-color);border-color:var(--fc-button-border-color);color:var(--fc-button-text-color)}.fc .fc-button-primary:hover{background-color:var(--fc-button-hover-bg-color);border-color:var(--fc-button-hover-border-color);color:var(--fc-button-text-color)}.fc .fc-button-primary:disabled{background-color:var(--fc-button-bg-color);border-color:var(--fc-button-border-color);color:var(--fc-button-text-color)}.fc .fc-button-primary:focus{box-shadow:0 0 0 .2rem rgba(76,91,106,.5)}.fc .fc-button-primary:not(:disabled).fc-button-active,.fc .fc-button-primary:not(:disabled):active{background-color:var(--fc-button-active-bg-color);border-color:var(--fc-button-active-border-color);color:var(--fc-button-text-color)}.fc .fc-button-primary:not(:disabled).fc-button-active:focus,.fc .fc-button-primary:not(:disabled):active:focus{box-shadow:0 0 0 .2rem rgba(76,91,106,.5)}.fc .fc-button .fc-icon{font-size:1.5em;vertical-align:middle}.fc .fc-button-group{display:inline-flex;position:relative;vertical-align:middle}.fc .fc-button-group>.fc-button{flex:1 1 auto;position:relative}.fc .fc-button-group>.fc-button.fc-button-active,.fc .fc-button-group>.fc-button:active,.fc .fc-button-group>.fc-button:focus,.fc .fc-button-group>.fc-button:hover{z-index:1}.fc-direction-ltr .fc-button-group>.fc-button:not(:first-child){border-bottom-left-radius:0;border-top-left-radius:0;margin-left:-1px}.fc-direction-ltr .fc-button-group>.fc-button:not(:last-child){border-bottom-right-radius:0;border-top-right-radius:0}.fc-direction-rtl .fc-button-group>.fc-button:not(:first-child){border-bottom-right-radius:0;border-top-right-radius:0;margin-right:-1px}.fc-direction-rtl .fc-button-group>.fc-button:not(:last-child){border-bottom-left-radius:0;border-top-left-radius:0}.fc .fc-toolbar{align-items:center;display:flex;justify-content:space-between}.fc .fc-toolbar.fc-header-toolbar{margin-bottom:1.5em}.fc .fc-toolbar.fc-footer-toolbar{margin-top:1.5em}.fc .fc-toolbar-title{font-size:1.75em;margin:0}.fc-direction-ltr .fc-toolbar>*>:not(:first-child){margin-left:.75em}.fc-direction-rtl .fc-toolbar>*>:not(:first-child){margin-right:.75em}.fc-direction-rtl .fc-toolbar-ltr{flex-direction:row-reverse}.fc .fc-scroller{-webkit-overflow-scrolling:touch;position:relative}.fc .fc-scroller-liquid{height:100%}.fc .fc-scroller-liquid-absolute{bottom:0;left:0;position:absolute;right:0;top:0}.fc .fc-scroller-harness{direction:ltr;overflow:hidden;position:relative}.fc .fc-scroller-harness-liquid{height:100%}.fc-direction-rtl .fc-scroller-harness>.fc-scroller{direction:rtl}.fc-theme-standard .fc-scrollgrid{border:1px solid var(--fc-border-color)}.fc .fc-scrollgrid,.fc .fc-scrollgrid table{table-layout:fixed;width:100%}.fc .fc-scrollgrid table{border-left-style:hidden;border-right-style:hidden;border-top-style:hidden}.fc .fc-scrollgrid{border-bottom-width:0;border-collapse:separate;border-right-width:0}.fc .fc-scrollgrid-liquid{height:100%}.fc .fc-scrollgrid-section,.fc .fc-scrollgrid-section table,.fc .fc-scrollgrid-section>td{height:1px}.fc .fc-scrollgrid-section-liquid>td{height:100%}.fc .fc-scrollgrid-section>*{border-left-width:0;border-top-width:0}.fc .fc-scrollgrid-section-footer>*,.fc .fc-scrollgrid-section-header>*{border-bottom-width:0}.fc .fc-scrollgrid-section-body table,.fc .fc-scrollgrid-section-footer table{border-bottom-style:hidden}.fc .fc-scrollgrid-section-sticky>*{background:var(--fc-page-bg-color);position:sticky;z-index:3}.fc .fc-scrollgrid-section-header.fc-scrollgrid-section-sticky>*{top:0}.fc .fc-scrollgrid-section-footer.fc-scrollgrid-section-sticky>*{bottom:0}.fc .fc-scrollgrid-sticky-shim{height:1px;margin-bottom:-1px}.fc-sticky{position:sticky}.fc .fc-view-harness{flex-grow:1;position:relative}.fc .fc-view-harness-active>.fc-view{bottom:0;left:0;position:absolute;right:0;top:0}.fc .fc-col-header-cell-cushion{display:inline-block;padding:2px 4px}.fc .fc-bg-event,.fc .fc-highlight,.fc .fc-non-business{bottom:0;left:0;position:absolute;right:0;top:0}.fc .fc-non-business{background:var(--fc-non-business-color)}.fc .fc-bg-event{background:var(--fc-bg-event-color);opacity:var(--fc-bg-event-opacity)}.fc .fc-bg-event .fc-event-title{font-size:var(--fc-small-font-size);font-style:italic;margin:.5em}.fc .fc-highlight{background:var(--fc-highlight-color)}.fc .fc-cell-shaded,.fc .fc-day-disabled{background:var(--fc-neutral-bg-color)}a.fc-event,a.fc-event:hover{text-decoration:none}.fc-event.fc-event-draggable,.fc-event[href]{cursor:pointer}.fc-event .fc-event-main{position:relative;z-index:2}.fc-event-dragging:not(.fc-event-selected){opacity:.75}.fc-event-dragging.fc-event-selected{box-shadow:0 2px 7px rgba(0,0,0,.3)}.fc-event .fc-event-resizer{display:none;position:absolute;z-index:4}.fc-event-selected .fc-event-resizer,.fc-event:hover .fc-event-resizer{display:block}.fc-event-selected .fc-event-resizer{background:var(--fc-page-bg-color);border-color:inherit;border-radius:calc(var(--fc-event-resizer-dot-total-width)/2);border-style:solid;border-width:var(--fc-event-resizer-dot-border-width);height:var(--fc-event-resizer-dot-total-width);width:var(--fc-event-resizer-dot-total-width)}.fc-event-selected .fc-event-resizer:before{bottom:-20px;content:"";left:-20px;position:absolute;right:-20px;top:-20px}.fc-event-selected,.fc-event:focus{box-shadow:0 2px 5px rgba(0,0,0,.2)}.fc-event-selected:before,.fc-event:focus:before{bottom:0;content:"";left:0;position:absolute;right:0;top:0;z-index:3}.fc-event-selected:after,.fc-event:focus:after{background:var(--fc-event-selected-overlay-color);bottom:-1px;content:"";left:-1px;position:absolute;right:-1px;top:-1px;z-index:1}.fc-h-event{background-color:var(--fc-event-bg-color);border:1px solid var(--fc-event-border-color);display:block}.fc-h-event .fc-event-main{color:var(--fc-event-text-color)}.fc-h-event .fc-event-main-frame{display:flex}.fc-h-event .fc-event-time{max-width:100%;overflow:hidden}.fc-h-event .fc-event-title-container{flex-grow:1;flex-shrink:1;min-width:0}.fc-h-event .fc-event-title{display:inline-block;left:0;max-width:100%;overflow:hidden;right:0;vertical-align:top}.fc-h-event.fc-event-selected:before{bottom:-10px;top:-10px}.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-start),.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-end){border-bottom-left-radius:0;border-left-width:0;border-top-left-radius:0}.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-end),.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-start){border-bottom-right-radius:0;border-right-width:0;border-top-right-radius:0}.fc-h-event:not(.fc-event-selected) .fc-event-resizer{bottom:0;top:0;width:var(--fc-event-resizer-thickness)}.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start,.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end{cursor:w-resize;left:calc(var(--fc-event-resizer-thickness)*-.5)}.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end,.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start{cursor:e-resize;right:calc(var(--fc-event-resizer-thickness)*-.5)}.fc-h-event.fc-event-selected .fc-event-resizer{margin-top:calc(var(--fc-event-resizer-dot-total-width)*-.5);top:50%}.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-start,.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-end{left:calc(var(--fc-event-resizer-dot-total-width)*-.5)}.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-end,.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-start{right:calc(var(--fc-event-resizer-dot-total-width)*-.5)}.fc .fc-popover{box-shadow:0 2px 6px rgba(0,0,0,.15);position:absolute;z-index:9999}.fc .fc-popover-header{align-items:center;display:flex;flex-direction:row;justify-content:space-between;padding:3px 4px}.fc .fc-popover-title{margin:0 2px}.fc .fc-popover-close{cursor:pointer;font-size:1.1em;opacity:.65}.fc-theme-standard .fc-popover{background:var(--fc-page-bg-color);border:1px solid var(--fc-border-color)}.fc-theme-standard .fc-popover-header{background:var(--fc-neutral-bg-color)}');const fo=[],go={code:"en",week:{dow:0,doy:4},direction:"ltr",buttonText:{prev:"prev",next:"next",prevYear:"prev year",nextYear:"next year",year:"year",today:"today",month:"month",week:"week",day:"day",list:"list"},weekText:"W",weekTextLong:"Week",closeHint:"Close",timeHint:"Time",eventHint:"Event",allDayText:"all-day",moreLinkText:"more",noEventsText:"No events to display"},po=Object.assign(Object.assign({},go),{buttonHints:{prev:"Previous $0",next:"Next $0",today:(e,t)=>"day"===t?"Today":"This "+e},viewHint:"$0 view",navLinkHint:"Go to $0",moreLinkHint:e=>`Show ${e} more event${1===e?"":"s"}`});function mo(e){let t=e.length>0?e[0].code:"en",n=fo.concat(e),r={en:po};for(let e of n)r[e.code]=e;return{map:r,defaultCode:t}}function vo(e,t){return"object"!=typeof e||Array.isArray(e)?function(e,t){let n=[].concat(e||[]),r=function(e,t){for(let n=0;n<e.length;n+=1){let r=e[n].toLocaleLowerCase().split("-");for(let e=r.length;e>0;e-=1){let n=r.slice(0,e).join("-");if(t[n])return t[n]}}return null}(n,t)||po;return bo(e,n,r)}(e,t):bo(e.code,[e.code],e)}function bo(e,t,n){let r=dt([go,n],["buttonText"]);delete r.code;let{week:i}=r;return delete r.week,{codeArg:e,codes:t,week:i,simpleNumberFormat:new Intl.NumberFormat(e),options:r}}function yo(e){return{id:Be(),name:e.name,premiumReleaseDate:e.premiumReleaseDate?new Date(e.premiumReleaseDate):void 0,deps:e.deps||[],reducers:e.reducers||[],isLoadingFuncs:e.isLoadingFuncs||[],contextInit:[].concat(e.contextInit||[]),eventRefiners:e.eventRefiners||{},eventDefMemberAdders:e.eventDefMemberAdders||[],eventSourceRefiners:e.eventSourceRefiners||{},isDraggableTransformers:e.isDraggableTransformers||[],eventDragMutationMassagers:e.eventDragMutationMassagers||[],eventDefMutationAppliers:e.eventDefMutationAppliers||[],dateSelectionTransformers:e.dateSelectionTransformers||[],datePointTransforms:e.datePointTransforms||[],dateSpanTransforms:e.dateSpanTransforms||[],views:e.views||{},viewPropsTransformers:e.viewPropsTransformers||[],isPropsValid:e.isPropsValid||null,externalDefTransforms:e.externalDefTransforms||[],viewContainerAppends:e.viewContainerAppends||[],eventDropTransformers:e.eventDropTransformers||[],componentInteractions:e.componentInteractions||[],calendarInteractions:e.calendarInteractions||[],themeClasses:e.themeClasses||{},eventSourceDefs:e.eventSourceDefs||[],cmdFormatter:e.cmdFormatter,recurringTypes:e.recurringTypes||[],namedTimeZonedImpl:e.namedTimeZonedImpl,initialView:e.initialView||"",elementDraggingImpl:e.elementDraggingImpl,optionChangeHandlers:e.optionChangeHandlers||{},scrollGridImpl:e.scrollGridImpl||null,listenerRefiners:e.listenerRefiners||{},optionRefiners:e.optionRefiners||{},propSetHandlers:e.propSetHandlers||{}}}function Eo(){let e,t=[],n=[];return(r,i)=>(e&&Ft(r,t)&&Ft(i,n)||(e=function(e,t){let n={},r={premiumReleaseDate:void 0,reducers:[],isLoadingFuncs:[],contextInit:[],eventRefiners:{},eventDefMemberAdders:[],eventSourceRefiners:{},isDraggableTransformers:[],eventDragMutationMassagers:[],eventDefMutationAppliers:[],dateSelectionTransformers:[],datePointTransforms:[],dateSpanTransforms:[],views:{},viewPropsTransformers:[],isPropsValid:null,externalDefTransforms:[],viewContainerAppends:[],eventDropTransformers:[],componentInteractions:[],calendarInteractions:[],themeClasses:{},eventSourceDefs:[],cmdFormatter:null,recurringTypes:[],namedTimeZonedImpl:null,initialView:"",elementDraggingImpl:null,optionChangeHandlers:{},scrollGridImpl:null,listenerRefiners:{},optionRefiners:{},propSetHandlers:{}};function i(e){for(let o of e){const e=o.name,a=n[e];void 0===a?(n[e]=o.id,i(o.deps),s=o,r={premiumReleaseDate:Ao((t=r).premiumReleaseDate,s.premiumReleaseDate),reducers:t.reducers.concat(s.reducers),isLoadingFuncs:t.isLoadingFuncs.concat(s.isLoadingFuncs),contextInit:t.contextInit.concat(s.contextInit),eventRefiners:Object.assign(Object.assign({},t.eventRefiners),s.eventRefiners),eventDefMemberAdders:t.eventDefMemberAdders.concat(s.eventDefMemberAdders),eventSourceRefiners:Object.assign(Object.assign({},t.eventSourceRefiners),s.eventSourceRefiners),isDraggableTransformers:t.isDraggableTransformers.concat(s.isDraggableTransformers),eventDragMutationMassagers:t.eventDragMutationMassagers.concat(s.eventDragMutationMassagers),eventDefMutationAppliers:t.eventDefMutationAppliers.concat(s.eventDefMutationAppliers),dateSelectionTransformers:t.dateSelectionTransformers.concat(s.dateSelectionTransformers),datePointTransforms:t.datePointTransforms.concat(s.datePointTransforms),dateSpanTransforms:t.dateSpanTransforms.concat(s.dateSpanTransforms),views:Object.assign(Object.assign({},t.views),s.views),viewPropsTransformers:t.viewPropsTransformers.concat(s.viewPropsTransformers),isPropsValid:s.isPropsValid||t.isPropsValid,externalDefTransforms:t.externalDefTransforms.concat(s.externalDefTransforms),viewContainerAppends:t.viewContainerAppends.concat(s.viewContainerAppends),eventDropTransformers:t.eventDropTransformers.concat(s.eventDropTransformers),calendarInteractions:t.calendarInteractions.concat(s.calendarInteractions),componentInteractions:t.componentInteractions.concat(s.componentInteractions),themeClasses:Object.assign(Object.assign({},t.themeClasses),s.themeClasses),eventSourceDefs:t.eventSourceDefs.concat(s.eventSourceDefs),cmdFormatter:s.cmdFormatter||t.cmdFormatter,recurringTypes:t.recurringTypes.concat(s.recurringTypes),namedTimeZonedImpl:s.namedTimeZonedImpl||t.namedTimeZonedImpl,initialView:t.initialView||s.initialView,elementDraggingImpl:t.elementDraggingImpl||s.elementDraggingImpl,optionChangeHandlers:Object.assign(Object.assign({},t.optionChangeHandlers),s.optionChangeHandlers),scrollGridImpl:s.scrollGridImpl||t.scrollGridImpl,listenerRefiners:Object.assign(Object.assign({},t.listenerRefiners),s.listenerRefiners),optionRefiners:Object.assign(Object.assign({},t.optionRefiners),s.optionRefiners),propSetHandlers:Object.assign(Object.assign({},t.propSetHandlers),s.propSetHandlers)}):a!==o.id&&console.warn(`Duplicate plugin '${e}'`)}var t,s}return e&&i(e),i(t),r}(r,i)),t=r,n=i,e)}function Ao(e,t){return void 0===e?t:void 0===t?e:new Date(Math.max(e.valueOf(),t.valueOf()))}class Do extends Tr{}function So(e,t,n,r){if(t[e])return t[e];let i=function(e,t,n,r){let i=n[e],s=r[e],o=e=>i&&null!==i[e]?i[e]:s&&null!==s[e]?s[e]:null,a=o("component"),l=o("superType"),c=null;if(l){if(l===e)throw new Error("Can't have a custom view type that references itself");c=So(l,t,n,r)}!a&&c&&(a=c.component);if(!a)return null;return{type:e,component:a,defaults:Object.assign(Object.assign({},c?c.defaults:{}),i?i.rawOptions:{}),overrides:Object.assign(Object.assign({},c?c.overrides:{}),s?s.rawOptions:{})}}(e,t,n,r);return i&&(t[e]=i),i}function wo(e){return ht(e,Co)}function Co(e){let t="function"==typeof e?{component:e}:e,{component:n}=t;var r;return t.content&&(r=t,n=e=>f(Nr.Consumer,null,t=>f(qi,{elTag:"div",elClasses:so(t.viewSpec),renderProps:Object.assign(Object.assign({},e),{nextDayThreshold:t.options.nextDayThreshold}),generatorName:void 0,generator:r.content,classNameGenerator:r.classNames,didMount:r.didMount,willUnmount:r.willUnmount}))),{superType:t.type,component:n,rawOptions:t}}function Ro(e,t,n,r){let i=wo(e),s=wo(t.views);return ht(function(e,t){let n,r={};for(n in e)So(n,r,e,t);for(n in t)So(n,r,e,t);return r}(i,s),e=>function(e,t,n,r,i){let s=e.overrides.duration||e.defaults.duration||r.duration||n.duration,o=null,a="",l="",c={};if(s&&(o=function(e){let t=JSON.stringify(e),n=xo[t];void 0===n&&(n=tt(e),xo[t]=n);return n}(s),o)){let e=lt(o);a=e.unit,1===e.value&&(l=a,c=t[a]?t[a].rawOptions:{})}let d=t=>{let n=t.buttonText||{},r=e.defaults.buttonTextKey;return null!=r&&null!=n[r]?n[r]:null!=n[e.type]?n[e.type]:null!=n[l]?n[l]:null},u=t=>{let n=t.buttonHints||{},r=e.defaults.buttonTextKey;return null!=r&&null!=n[r]?n[r]:null!=n[e.type]?n[e.type]:null!=n[l]?n[l]:null};return{type:e.type,component:e.component,duration:o,durationUnit:a,singleUnit:l,optionDefaults:e.defaults,optionOverrides:Object.assign(Object.assign({},c),e.overrides),buttonTextOverride:d(r)||d(n)||e.overrides.buttonText,buttonTextDefault:d(i)||e.defaults.buttonText||d(ln)||e.type,buttonTitleOverride:u(r)||u(n)||e.overrides.buttonHint,buttonTitleDefault:u(i)||e.defaults.buttonHint||u(ln)}}(e,s,t,n,r))}Do.prototype.classes={root:"fc-theme-standard",tableCellShaded:"fc-cell-shaded",buttonGroup:"fc-button-group",button:"fc-button fc-button-primary",buttonActive:"fc-button-active"},Do.prototype.baseIconClass="fc-icon",Do.prototype.iconClasses={close:"fc-icon-x",prev:"fc-icon-chevron-left",next:"fc-icon-chevron-right",prevYear:"fc-icon-chevrons-left",nextYear:"fc-icon-chevrons-right"},Do.prototype.rtlIconClasses={prev:"fc-icon-chevron-right",next:"fc-icon-chevron-left",prevYear:"fc-icon-chevrons-right",nextYear:"fc-icon-chevrons-left"},Do.prototype.iconOverrideOption="buttonIcons",Do.prototype.iconOverrideCustomButtonOption="icon",Do.prototype.iconOverridePrefix="fc-icon-";let xo={};function _o(e,t,n){let r=t?t.activeRange:null;return Mo({},function(e,t){let n=co(t),r=[].concat(e.eventSources||[]),i=[];e.initialEvents&&r.unshift(e.initialEvents);e.events&&r.unshift(e.events);for(let e of r){let r=lo(e,t,n);r&&i.push(r)}return i}(e,n),r,n)}function To(e,t,n,r){let i=n?n.activeRange:null;switch(t.type){case"ADD_EVENT_SOURCES":return Mo(e,t.sources,i,r);case"REMOVE_EVENT_SOURCE":return s=e,o=t.sourceId,ut(s,e=>e.sourceId!==o);case"PREV":case"NEXT":case"CHANGE_DATE":case"CHANGE_VIEW_TYPE":return n?Io(e,i,r):e;case"FETCH_EVENT_SOURCES":return Oo(e,t.sourceIds?ft(t.sourceIds):Po(e,r),i,t.isRefetch||!1,r);case"RECEIVE_EVENTS":case"RECEIVE_EVENT_ERROR":return function(e,t,n,r){let i=e[t];if(i&&n===i.latestFetchId)return Object.assign(Object.assign({},e),{[t]:Object.assign(Object.assign({},i),{isFetching:!1,fetchRange:r})});return e}(e,t.sourceId,t.fetchId,t.fetchRange);case"REMOVE_ALL_EVENT_SOURCES":return{};default:return e}var s,o}function ko(e){for(let t in e)if(e[t].isFetching)return!0;return!1}function Mo(e,t,n,r){let i={};for(let e of t)i[e.sourceId]=e;return n&&(i=Io(i,n,r)),Object.assign(Object.assign({},e),i)}function Io(e,t,n){return Oo(e,ut(e,e=>function(e,t,n){if(!Ho(e,n))return!e.latestFetchId;return!n.options.lazyFetching||!e.fetchRange||e.isFetching||t.start<e.fetchRange.start||t.end>e.fetchRange.end}(e,t,n)),t,!1,n)}function Oo(e,t,n,r,i){let s={};for(let o in e){let a=e[o];t[o]?s[o]=No(a,n,r,i):s[o]=a}return s}function No(e,t,n,r){let{options:i,calendarApi:s}=r,o=r.pluginHooks.eventSourceDefs[e.sourceDefId],a=Be();return o.fetch({eventSource:e,range:t,isRefetch:n,context:r},n=>{let{rawEvents:o}=n;i.eventSourceSuccess&&(o=i.eventSourceSuccess.call(s,o,n.response)||o),e.success&&(o=e.success.call(s,o,n.response)||o),r.dispatch({type:"RECEIVE_EVENTS",sourceId:e.sourceId,fetchId:a,fetchRange:t,rawEvents:o})},n=>{let o=!1;i.eventSourceFailure&&(i.eventSourceFailure.call(s,n),o=!0),e.failure&&(e.failure(n),o=!0),o||console.warn(n.message,n),r.dispatch({type:"RECEIVE_EVENT_ERROR",sourceId:e.sourceId,fetchId:a,fetchRange:t,error:n})}),Object.assign(Object.assign({},e),{isFetching:!0,latestFetchId:a})}function Po(e,t){return ut(e,e=>Ho(e,t))}function Ho(e,t){return!t.pluginHooks.eventSourceDefs[e.sourceDefId].ignoreRange}function Bo(e,t){switch(t.type){case"UNSELECT_DATES":return null;case"SELECT_DATES":return t.selection;default:return e}}function jo(e,t){switch(t.type){case"UNSELECT_EVENT":return"";case"SELECT_EVENT":return t.eventInstanceId;default:return e}}function zo(e,t){let n;switch(t.type){case"UNSET_EVENT_DRAG":return null;case"SET_EVENT_DRAG":return n=t.state,{affectedEvents:n.affectedEvents,mutatedEvents:n.mutatedEvents,isEvent:n.isEvent};default:return e}}function Uo(e,t){let n;switch(t.type){case"UNSET_EVENT_RESIZE":return null;case"SET_EVENT_RESIZE":return n=t.state,{affectedEvents:n.affectedEvents,mutatedEvents:n.mutatedEvents,isEvent:n.isEvent};default:return e}}function Lo(e,t,n,r,i){return{header:e.headerToolbar?Wo(e.headerToolbar,e,t,n,r,i):null,footer:e.footerToolbar?Wo(e.footerToolbar,e,t,n,r,i):null}}function Wo(e,t,n,r,i,s){let o={},a=[],l=!1;for(let c in e){let d=Fo(e[c],t,n,r,i,s);o[c]=d.widgets,a.push(...d.viewsWithButtons),l=l||d.hasTitle}return{sectionWidgets:o,viewsWithButtons:a,hasTitle:l}}function Fo(e,t,n,r,i,s){let o="rtl"===t.direction,a=t.customButtons||{},l=n.buttonText||{},c=t.buttonText||{},d=n.buttonHints||{},u=t.buttonHints||{},h=e?e.split(" "):[],f=[],g=!1;return{widgets:h.map(e=>e.split(",").map(e=>{if("title"===e)return g=!0,{buttonName:e};let n,h,p,m,v,b;if(n=a[e])p=e=>{n.click&&n.click.call(e.target,e,e.target)},(m=r.getCustomButtonIconClass(n))||(m=r.getIconClass(e,o))||(v=n.text),b=n.hint||n.text;else if(h=i[e]){f.push(e),p=()=>{s.changeView(e)},(v=h.buttonTextOverride)||(m=r.getIconClass(e,o))||(v=h.buttonTextDefault);let n=h.buttonTextOverride||h.buttonTextDefault;b=Ze(h.buttonTitleOverride||h.buttonTitleDefault||t.viewHint,[n,e],n)}else if(s[e])if(p=()=>{s[e]()},(v=l[e])||(m=r.getIconClass(e,o))||(v=c[e]),"prevYear"===e||"nextYear"===e){let t="prevYear"===e?"prev":"next";b=Ze(d[t]||u[t],[c.year||"year","year"],c[e])}else b=t=>Ze(d[e]||u[e],[c[t]||t,t],c[e]);return{buttonName:e,buttonClick:p,buttonIcon:m,buttonText:v,buttonHint:b}})),viewsWithButtons:f,hasTitle:g}}class Vo{constructor(e,t,n){this.type=e,this.getCurrentData=t,this.dateEnv=n}get calendar(){return this.getCurrentData().calendarApi}get title(){return this.getCurrentData().viewTitle}get activeStart(){return this.dateEnv.toDate(this.getCurrentData().dateProfile.activeRange.start)}get activeEnd(){return this.dateEnv.toDate(this.getCurrentData().dateProfile.activeRange.end)}get currentStart(){return this.dateEnv.toDate(this.getCurrentData().dateProfile.currentRange.start)}get currentEnd(){return this.dateEnv.toDate(this.getCurrentData().dateProfile.currentRange.end)}getOption(e){return this.getCurrentData().options[e]}}function Go(e,t){let n=gt(t.getCurrentData().eventSources),r=[];for(let t of e){let e=!1;for(let r=0;r<n.length;r+=1)if(n[r]._raw===t){n.splice(r,1),e=!0;break}e||r.push(t)}for(let e of n)t.dispatch({type:"REMOVE_EVENT_SOURCE",sourceId:e.sourceId});for(let e of r)t.calendarApi.addEventSource(e)}const Qo=[yo({name:"array-event-source",eventSourceDefs:[{ignoreRange:!0,parseMeta:e=>Array.isArray(e.events)?e.events:null,fetch(e,t){t({rawEvents:e.eventSource.meta})}}]}),yo({name:"func-event-source",eventSourceDefs:[{parseMeta:e=>"function"==typeof e.events?e.events:null,fetch(e,t,n){const{dateEnv:r}=e.context;Dr(e.eventSource.meta.bind(null,vi(e.range,r)),e=>t({rawEvents:e}),n)}}]}),yo({name:"json-event-source",eventSourceRefiners:{method:String,extraParams:mn,startParam:String,endParam:String,timeZoneParam:String},eventSourceDefs:[{parseMeta:e=>!e.url||"json"!==e.format&&e.format?null:{url:e.url,format:"json",method:(e.method||"GET").toUpperCase(),extraParams:e.extraParams,startParam:e.startParam,endParam:e.endParam,timeZoneParam:e.timeZoneParam},fetch(e,t,n){const{meta:r}=e.eventSource,i=function(e,t,n){let r,i,s,o,{dateEnv:a,options:l}=n,c={};r=e.startParam,null==r&&(r=l.startParam);i=e.endParam,null==i&&(i=l.endParam);s=e.timeZoneParam,null==s&&(s=l.timeZoneParam);o="function"==typeof e.extraParams?e.extraParams():e.extraParams||{};Object.assign(c,o),c[r]=a.formatIso(t.start),c[i]=a.formatIso(t.end),"local"!==a.timeZone&&(c[s]=a.timeZone);return c}(r,e.range,e.context);bs(r.method,r.url,i).then(([e,n])=>{t({rawEvents:e,response:n})},n)}}]}),yo({name:"simple-recurring-event",recurringTypes:[{parse(e,t){if(e.daysOfWeek||e.startTime||e.endTime||e.startRecur||e.endRecur){let i,s={daysOfWeek:e.daysOfWeek||null,startTime:e.startTime||null,endTime:e.endTime||null,startRecur:e.startRecur?t.createMarker(e.startRecur):null,endRecur:e.endRecur?t.createMarker(e.endRecur):null};return e.duration&&(i=e.duration),!i&&e.startTime&&e.endTime&&(n=e.endTime,r=e.startTime,i={years:n.years-r.years,months:n.months-r.months,days:n.days-r.days,milliseconds:n.milliseconds-r.milliseconds}),{allDayGuess:Boolean(!e.startTime&&!e.endTime),duration:i,typeData:s}}var n,r;return null},expand(e,t,n){let r=rr(t,{start:e.startRecur,end:e.endRecur});return r?function(e,t,n,r){let i=e?ft(e):null,s=kt(n.start),o=n.end,a=[];for(;s<o;){let e;i&&!i[s.getUTCDay()]||(e=t?r.add(s,t):s,a.push(e)),s=St(s,1)}return a}(e.daysOfWeek,e.startTime,r,n):[]}}],eventRefiners:{daysOfWeek:mn,startTime:tt,endTime:tt,duration:tt,startRecur:mn,endRecur:mn}}),yo({name:"change-handler",optionChangeHandlers:{events(e,t){Go([e],t)},eventSources:Go}}),yo({name:"misc",isLoadingFuncs:[e=>ko(e.eventSources)],propSetHandlers:{dateProfile:function(e,t){t.emitter.trigger("datesSet",Object.assign(Object.assign({},vi(e.activeRange,t.dateEnv)),{view:t.viewApi}))},eventStore:function(e,t){let{emitter:n}=t;n.hasHandlers("eventsSet")&&n.trigger("eventsSet",Jr(e,t))}}})];class qo{constructor(e,t){this.runTaskOption=e,this.drainedOption=t,this.queue=[],this.delayedRunner=new ys(this.drain.bind(this))}request(e,t){this.queue.push(e),this.delayedRunner.request(t)}pause(e){this.delayedRunner.pause(e)}resume(e,t){this.delayedRunner.resume(e,t)}drain(){let{queue:e}=this;for(;e.length;){let t,n=[];for(;t=e.shift();)this.runTask(t),n.push(t);this.drained(n)}}runTask(e){this.runTaskOption&&this.runTaskOption(e)}drained(e){this.drainedOption&&this.drainedOption(e)}}function Yo(e,t,n){let r;return r=/^(year|month)$/.test(e.currentRangeUnit)?e.currentRange:e.activeRange,n.formatRange(r.start,r.end,on(t.titleFormat||function(e){let{currentRangeUnit:t}=e;if("year"===t)return{year:"numeric"};if("month"===t)return{year:"numeric",month:"long"};let n=Tt(e.currentRange.start,e.currentRange.end);if(null!==n&&n>1)return{year:"numeric",month:"short",day:"numeric"};return{year:"numeric",month:"long",day:"numeric"}}(e)),{isEndExclusive:e.isRangeAllDay,defaultSeparator:t.titleRangeSeparator})}class Zo{constructor(e){this.computeOptionsData=Vt(this._computeOptionsData),this.computeCurrentViewData=Vt(this._computeCurrentViewData),this.organizeRawLocales=Vt(mo),this.buildLocale=Vt(vo),this.buildPluginHooks=Eo(),this.buildDateEnv=Vt(Xo),this.buildTheme=Vt(Jo),this.parseToolbars=Vt(Lo),this.buildViewSpecs=Vt(Ro),this.buildDateProfileGenerator=Gt($o),this.buildViewApi=Vt(Ko),this.buildViewUiProps=Gt(na),this.buildEventUiBySource=Vt(ea,pt),this.buildEventUiBases=Vt(ta),this.parseContextBusinessHours=Gt(ia),this.buildTitle=Vt(Yo),this.emitter=new Sr,this.actionRunner=new qo(this._handleAction.bind(this),this.updateData.bind(this)),this.currentCalendarOptionsInput={},this.currentCalendarOptionsRefined={},this.currentViewOptionsInput={},this.currentViewOptionsRefined={},this.currentCalendarOptionsRefiners={},this.getCurrentData=()=>this.data,this.dispatch=e=>{this.actionRunner.request(e)},this.props=e,this.actionRunner.pause();let t={},n=this.computeOptionsData(e.optionOverrides,t,e.calendarApi),r=n.calendarOptions.initialView||n.pluginHooks.initialView,i=this.computeCurrentViewData(r,n,e.optionOverrides,t);e.calendarApi.currentDataManager=this,this.emitter.setThisContext(e.calendarApi),this.emitter.setOptions(i.options);let s=function(e,t){let n=e.initialDate;return null!=n?t.createMarker(n):Ur(e.now,t)}(n.calendarOptions,n.dateEnv),o=i.dateProfileGenerator.build(s);ar(o.activeRange,s)||(s=o.currentRange.start);let a={dateEnv:n.dateEnv,options:n.calendarOptions,pluginHooks:n.pluginHooks,calendarApi:e.calendarApi,dispatch:this.dispatch,emitter:this.emitter,getCurrentData:this.getCurrentData};for(let e of n.pluginHooks.contextInit)e(a);let l=_o(n.calendarOptions,o,a),c={dynamicOptionOverrides:t,currentViewType:r,currentDate:s,dateProfile:o,businessHours:this.parseContextBusinessHours(a),eventSources:l,eventUiBases:{},eventStore:{defs:{},instances:{}},renderableEventStore:{defs:{},instances:{}},dateSelection:null,eventSelection:"",eventDrag:null,eventResize:null,selectionConfig:this.buildViewUiProps(a).selectionConfig},d=Object.assign(Object.assign({},a),c);for(let e of n.pluginHooks.reducers)Object.assign(c,e(null,null,d));ra(c,a)&&this.emitter.trigger("loading",!0),this.state=c,this.updateData(),this.actionRunner.resume()}resetOptions(e,t){let{props:n}=this;n.optionOverrides=t?Object.assign(Object.assign({},n.optionOverrides),e):e,this.actionRunner.request({type:"NOTHING"})}_handleAction(e){let{props:t,state:n,emitter:r}=this,i=function(e,t){switch(t.type){case"SET_OPTION":return Object.assign(Object.assign({},e),{[t.optionName]:t.rawOptionValue});default:return e}}(n.dynamicOptionOverrides,e),s=this.computeOptionsData(t.optionOverrides,i,t.calendarApi),o=function(e,t){switch(t.type){case"CHANGE_VIEW_TYPE":e=t.viewType}return e}(n.currentViewType,e),a=this.computeCurrentViewData(o,s,t.optionOverrides,i);t.calendarApi.currentDataManager=this,r.setThisContext(t.calendarApi),r.setOptions(a.options);let l={dateEnv:s.dateEnv,options:s.calendarOptions,pluginHooks:s.pluginHooks,calendarApi:t.calendarApi,dispatch:this.dispatch,emitter:r,getCurrentData:this.getCurrentData},{currentDate:c,dateProfile:d}=n;this.data&&this.data.dateProfileGenerator!==a.dateProfileGenerator&&(d=a.dateProfileGenerator.build(c)),c=function(e,t){switch(t.type){case"CHANGE_DATE":return t.dateMarker;default:return e}}(c,e),d=function(e,t,n,r){let i;switch(t.type){case"CHANGE_VIEW_TYPE":return r.build(t.dateMarker||n);case"CHANGE_DATE":return r.build(t.dateMarker);case"PREV":if(i=r.buildPrev(e,n),i.isValid)return i;break;case"NEXT":if(i=r.buildNext(e,n),i.isValid)return i}return e}(d,e,c,a.dateProfileGenerator),"PREV"!==e.type&&"NEXT"!==e.type&&ar(d.currentRange,c)||(c=d.currentRange.start);let u=To(n.eventSources,e,d,l),h=os(n.eventStore,e,u,d,l),f=ko(u)&&!a.options.progressiveEventRendering&&n.renderableEventStore||h,{eventUiSingleBase:g,selectionConfig:p}=this.buildViewUiProps(l),m=this.buildEventUiBySource(u),v={dynamicOptionOverrides:i,currentViewType:o,currentDate:c,dateProfile:d,eventSources:u,eventStore:h,renderableEventStore:f,selectionConfig:p,eventUiBases:this.buildEventUiBases(f.defs,g,m),businessHours:this.parseContextBusinessHours(l),dateSelection:Bo(n.dateSelection,e),eventSelection:jo(n.eventSelection,e),eventDrag:zo(n.eventDrag,e),eventResize:Uo(n.eventResize,e)},b=Object.assign(Object.assign({},l),v);for(let t of s.pluginHooks.reducers)Object.assign(v,t(n,e,b));let y=ra(n,l),E=ra(v,l);!y&&E?r.trigger("loading",!0):y&&!E&&r.trigger("loading",!1),this.state=v,t.onAction&&t.onAction(e)}updateData(){let{props:e,state:t}=this,n=this.data,r=this.computeOptionsData(e.optionOverrides,t.dynamicOptionOverrides,e.calendarApi),i=this.computeCurrentViewData(t.currentViewType,r,e.optionOverrides,t.dynamicOptionOverrides),s=this.data=Object.assign(Object.assign(Object.assign({viewTitle:this.buildTitle(t.dateProfile,i.options,r.dateEnv),calendarApi:e.calendarApi,dispatch:this.dispatch,emitter:this.emitter,getCurrentData:this.getCurrentData},r),i),t),o=r.pluginHooks.optionChangeHandlers,a=n&&n.calendarOptions,l=r.calendarOptions;if(a&&a!==l){a.timeZone!==l.timeZone&&(t.eventSources=s.eventSources=function(e,t,n){let r=t?t.activeRange:null;return Oo(e,Po(e,n),r,!0,n)}(s.eventSources,t.dateProfile,s),t.eventStore=s.eventStore=function(e,t,n){let{defs:r}=e,i=ht(e.instances,e=>{let i=r[e.defId];return i.allDay||i.recurringDef?e:Object.assign(Object.assign({},e),{range:{start:n.createMarker(t.toDate(e.range.start,e.forcedStartTzo)),end:n.createMarker(t.toDate(e.range.end,e.forcedEndTzo))},forcedStartTzo:n.canComputeOffset?null:e.forcedStartTzo,forcedEndTzo:n.canComputeOffset?null:e.forcedEndTzo})});return{defs:r,instances:i}}(s.eventStore,n.dateEnv,s.dateEnv));for(let e in o)a[e]!==l[e]&&o[e](l[e],s)}e.onData&&e.onData(s)}_computeOptionsData(e,t,n){let{refinedOptions:r,pluginHooks:i,localeDefaults:s,availableLocaleData:o,extra:a}=this.processRawCalendarOptions(e,t);sa(a);let l=this.buildDateEnv(r.timeZone,r.locale,r.weekNumberCalculation,r.firstDay,r.weekText,i,o,r.defaultRangeSeparator),c=this.buildViewSpecs(i.views,e,t,s),d=this.buildTheme(r,i);return{calendarOptions:r,pluginHooks:i,dateEnv:l,viewSpecs:c,theme:d,toolbarConfig:this.parseToolbars(r,e,d,c,n),localeDefaults:s,availableRawLocales:o.map}}processRawCalendarOptions(e,t){let{locales:n,locale:r}=gn([ln,e,t]),i=this.organizeRawLocales(n),s=i.map,o=this.buildLocale(r||i.defaultCode,s).options,a=this.buildPluginHooks(e.plugins||[],Qo),l=this.currentCalendarOptionsRefiners=Object.assign(Object.assign(Object.assign(Object.assign(Object.assign({},an),cn),dn),a.listenerRefiners),a.optionRefiners),c={},d=gn([ln,o,e,t]),u={},h=this.currentCalendarOptionsInput,f=this.currentCalendarOptionsRefined,g=!1;for(let e in d)"plugins"!==e&&(d[e]===h[e]||un[e]&&e in h&&un[e](h[e],d[e])?u[e]=f[e]:l[e]?(u[e]=l[e](d[e]),g=!0):c[e]=h[e]);return g&&(this.currentCalendarOptionsInput=d,this.currentCalendarOptionsRefined=u),{rawOptions:this.currentCalendarOptionsInput,refinedOptions:this.currentCalendarOptionsRefined,pluginHooks:a,availableLocaleData:i,localeDefaults:o,extra:c}}_computeCurrentViewData(e,t,n,r){let i=t.viewSpecs[e];if(!i)throw new Error(`viewType "${e}" is not available. Please make sure you've loaded all neccessary plugins`);let{refinedOptions:s,extra:o}=this.processRawViewOptions(i,t.pluginHooks,t.localeDefaults,n,r);return sa(o),{viewSpec:i,options:s,dateProfileGenerator:this.buildDateProfileGenerator({dateProfileGeneratorClass:i.optionDefaults.dateProfileGeneratorClass,duration:i.duration,durationUnit:i.durationUnit,usesMinMaxTime:i.optionDefaults.usesMinMaxTime,dateEnv:t.dateEnv,calendarApi:this.props.calendarApi,slotMinTime:s.slotMinTime,slotMaxTime:s.slotMaxTime,showNonCurrentDates:s.showNonCurrentDates,dayCount:s.dayCount,dateAlignment:s.dateAlignment,dateIncrement:s.dateIncrement,hiddenDays:s.hiddenDays,weekends:s.weekends,nowInput:s.now,validRangeInput:s.validRange,visibleRangeInput:s.visibleRange,monthMode:s.monthMode,fixedWeekCount:s.fixedWeekCount}),viewApi:this.buildViewApi(e,this.getCurrentData,t.dateEnv)}}processRawViewOptions(e,t,n,r,i){let s=gn([ln,e.optionDefaults,n,r,e.optionOverrides,i]),o=Object.assign(Object.assign(Object.assign(Object.assign(Object.assign(Object.assign({},an),cn),dn),fn),t.listenerRefiners),t.optionRefiners),a={},l=this.currentViewOptionsInput,c=this.currentViewOptionsRefined,d=!1,u={};for(let e in s)s[e]===l[e]||un[e]&&un[e](s[e],l[e])?a[e]=c[e]:(s[e]===this.currentCalendarOptionsInput[e]||un[e]&&un[e](s[e],this.currentCalendarOptionsInput[e])?e in this.currentCalendarOptionsRefined&&(a[e]=this.currentCalendarOptionsRefined[e]):o[e]?a[e]=o[e](s[e]):u[e]=s[e],d=!0);return d&&(this.currentViewOptionsInput=s,this.currentViewOptionsRefined=a),{rawOptions:this.currentViewOptionsInput,refinedOptions:this.currentViewOptionsRefined,extra:u}}}function Xo(e,t,n,r,i,s,o,a){let l=vo(t||o.defaultCode,o.map);return new wi({calendarSystem:"gregory",timeZone:e,namedTimeZoneImpl:s.namedTimeZonedImpl,locale:l,weekNumberCalculation:n,firstDay:r,weekText:i,cmdFormatter:s.cmdFormatter,defaultSeparator:a})}function Jo(e,t){return new(t.themeClasses[e.themeSystem]||Do)(e)}function $o(e){return new(e.dateProfileGeneratorClass||Lr)(e)}function Ko(e,t,n){return new Vo(e,t,n)}function ea(e){return ht(e,e=>e.ui)}function ta(e,t,n){let r={"":t};for(let t in e){let i=e[t];i.sourceId&&n[i.sourceId]&&(r[t]=n[i.sourceId])}return r}function na(e){let{options:t}=e;return{eventUiSingleBase:Tn({display:t.eventDisplay,editable:t.editable,startEditable:t.eventStartEditable,durationEditable:t.eventDurationEditable,constraint:t.eventConstraint,overlap:"boolean"==typeof t.eventOverlap?t.eventOverlap:void 0,allow:t.eventAllow,backgroundColor:t.eventBackgroundColor,borderColor:t.eventBorderColor,textColor:t.eventTextColor,color:t.eventColor},e),selectionConfig:Tn({constraint:t.selectConstraint,overlap:"boolean"==typeof t.selectOverlap?t.selectOverlap:void 0,allow:t.selectAllow},e)}}function ra(e,t){for(let n of t.pluginHooks.isLoadingFuncs)if(n(e))return!0;return!1}function ia(e){return Un(e.options.businessHours,e)}function sa(e,t){for(let n in e)console.warn(`Unknown option '${n}'`+(t?` for view '${t}'`:""))}class oa extends Br{render(){return f("div",{className:"fc-toolbar-chunk"},...this.props.widgetGroups.map(e=>this.renderWidgetGroup(e)))}renderWidgetGroup(e){let{props:t}=this,{theme:n}=this.context,r=[],i=!0;for(let s of e){let{buttonName:e,buttonClick:o,buttonText:a,buttonIcon:l,buttonHint:c}=s;if("title"===e)i=!1,r.push(f("h2",{className:"fc-toolbar-title",id:t.titleId},t.title));else{let i=e===t.activeButton,s=!t.isTodayEnabled&&"today"===e||!t.isPrevEnabled&&"prev"===e||!t.isNextEnabled&&"next"===e,d=[`fc-${e}-button`,n.getClass("button")];i&&d.push(n.getClass("buttonActive")),r.push(f("button",{type:"button",title:"function"==typeof c?c(t.navUnit):c,disabled:s,"aria-pressed":i,className:d.join(" "),onClick:o},a||(l?f("span",{className:l}):"")))}}if(r.length>1){return f("div",{className:i&&n.getClass("buttonGroup")||""},...r)}return r[0]}}class aa extends Br{render(){let e,t,{model:n,extraClassName:r}=this.props,i=!1,s=n.sectionWidgets,o=s.center;return s.left?(i=!0,e=s.left):e=s.start,s.right?(i=!0,t=s.right):t=s.end,f("div",{className:[r||"","fc-toolbar",i?"fc-toolbar-ltr":""].join(" ")},this.renderSection("start",e||[]),this.renderSection("center",o||[]),this.renderSection("end",t||[]))}renderSection(e,t){let{props:n}=this;return f(oa,{key:e,widgetGroups:t,title:n.title,navUnit:n.navUnit,activeButton:n.activeButton,isTodayEnabled:n.isTodayEnabled,isPrevEnabled:n.isPrevEnabled,isNextEnabled:n.isNextEnabled,titleId:n.titleId})}}class la extends Br{constructor(){super(...arguments),this.state={availableWidth:null},this.handleEl=e=>{this.el=e,jr(this.props.elRef,e),this.updateAvailableWidth()},this.handleResize=()=>{this.updateAvailableWidth()}}render(){let{props:e,state:t}=this,{aspectRatio:n}=e,r=["fc-view-harness",n||e.liquid||e.height?"fc-view-harness-active":"fc-view-harness-passive"],i="",s="";return n?null!==t.availableWidth?i=t.availableWidth/n:s=1/n*100+"%":i=e.height||"",f("div",{"aria-labelledby":e.labeledById,ref:this.handleEl,className:r.join(" "),style:{height:i,paddingBottom:s}},e.children)}componentDidMount(){this.context.addResizeHandler(this.handleResize)}componentWillUnmount(){this.context.removeResizeHandler(this.handleResize)}updateAvailableWidth(){this.el&&this.props.aspectRatio&&this.setState({availableWidth:this.el.offsetWidth})}}class ca extends Ii{constructor(e){super(e),this.handleSegClick=(e,t)=>{let{component:n}=this,{context:r}=n,i=ti(t);if(i&&n.isValidSegDownEl(e.target)){let s=Ee(e.target,".fc-event-forced-url"),o=s?s.querySelector("a[href]").href:"";r.emitter.trigger("eventClick",{el:t,event:new Zr(n.context,i.eventRange.def,i.eventRange.instance),jsEvent:e,view:r.viewApi}),o&&!e.defaultPrevented&&(window.location.href=o)}},this.destroy=Me(e.el,"click",".fc-event",this.handleSegClick)}}class da extends Ii{constructor(e){super(e),this.handleEventElRemove=e=>{e===this.currentSegEl&&this.handleSegLeave(null,this.currentSegEl)},this.handleSegEnter=(e,t)=>{ti(t)&&(this.currentSegEl=t,this.triggerEvent("eventMouseEnter",e,t))},this.handleSegLeave=(e,t)=>{this.currentSegEl&&(this.currentSegEl=null,this.triggerEvent("eventMouseLeave",e,t))},this.removeHoverListeners=function(e,t,n,r){let i;return Me(e,"mouseover",t,(e,t)=>{if(t!==i){i=t,n(e,t);let s=e=>{i=null,r(e,t),t.removeEventListener("mouseleave",s)};t.addEventListener("mouseleave",s)}})}(e.el,".fc-event",this.handleSegEnter,this.handleSegLeave)}destroy(){this.removeHoverListeners()}triggerEvent(e,t,n){let{component:r}=this,{context:i}=r,s=ti(n);t&&!r.isValidSegDownEl(t.target)||i.emitter.trigger(e,{el:n,event:new Zr(i,s.eventRange.def,s.eventRange.instance),jsEvent:t,view:i.viewApi})}}class ua extends Hr{constructor(){super(...arguments),this.buildViewContext=Vt(Pr),this.buildViewPropTransformers=Vt(fa),this.buildToolbarProps=Vt(ha),this.headerRef={current:null},this.footerRef={current:null},this.interactionsStore={},this.state={viewLabelId:Te()},this.registerInteractiveComponent=(e,t)=>{let n=function(e,t){return{component:e,el:t.el,useEventCenter:null==t.useEventCenter||t.useEventCenter,isHitComboAllowed:t.isHitComboAllowed||null}}(e,t),r=[ca,da].concat(this.props.pluginHooks.componentInteractions).map(e=>new e(n));this.interactionsStore[e.uid]=r,Ni[e.uid]=n},this.unregisterInteractiveComponent=e=>{let t=this.interactionsStore[e.uid];if(t){for(let e of t)e.destroy();delete this.interactionsStore[e.uid]}delete Ni[e.uid]},this.resizeRunner=new ys(()=>{this.props.emitter.trigger("_resize",!0),this.props.emitter.trigger("windowResize",{view:this.props.viewApi})}),this.handleWindowResize=e=>{let{options:t}=this.props;t.handleWindowResize&&e.target===window&&this.resizeRunner.request(t.windowResizeDelay)}}render(){let e,{props:t}=this,{toolbarConfig:n,options:r}=t,i=this.buildToolbarProps(t.viewSpec,t.dateProfile,t.dateProfileGenerator,t.currentDate,Ur(t.options.now,t.dateEnv),t.viewTitle),s=!1,o="";t.isHeightAuto||t.forPrint?o="":null!=r.height?s=!0:null!=r.contentHeight?o=r.contentHeight:e=Math.max(r.aspectRatio,.5);let a=this.buildViewContext(t.viewSpec,t.viewApi,t.options,t.dateProfileGenerator,t.dateEnv,t.theme,t.pluginHooks,t.dispatch,t.getCurrentData,t.emitter,t.calendarApi,this.registerInteractiveComponent,this.unregisterInteractiveComponent),l=n.header&&n.header.hasTitle?this.state.viewLabelId:"";return f(Nr.Provider,{value:a},n.header&&f(aa,Object.assign({ref:this.headerRef,extraClassName:"fc-header-toolbar",model:n.header,titleId:l},i)),f(la,{liquid:s,height:o,aspectRatio:e,labeledById:l},this.renderView(t),this.buildAppendContent()),n.footer&&f(aa,Object.assign({ref:this.footerRef,extraClassName:"fc-footer-toolbar",model:n.footer,titleId:""},i)))}componentDidMount(){let{props:e}=this;this.calendarInteractions=e.pluginHooks.calendarInteractions.map(t=>new t(e)),window.addEventListener("resize",this.handleWindowResize);let{propSetHandlers:t}=e.pluginHooks;for(let n in t)t[n](e[n],e)}componentDidUpdate(e){let{props:t}=this,{propSetHandlers:n}=t.pluginHooks;for(let r in n)t[r]!==e[r]&&n[r](t[r],t)}componentWillUnmount(){window.removeEventListener("resize",this.handleWindowResize),this.resizeRunner.clear();for(let e of this.calendarInteractions)e.destroy();this.props.emitter.trigger("_unmount")}buildAppendContent(){let{props:e}=this;return f(p,{},...e.pluginHooks.viewContainerAppends.map(t=>t(e)))}renderView(e){let{pluginHooks:t}=e,{viewSpec:n}=e,r={dateProfile:e.dateProfile,businessHours:e.businessHours,eventStore:e.renderableEventStore,eventUiBases:e.eventUiBases,dateSelection:e.dateSelection,eventSelection:e.eventSelection,eventDrag:e.eventDrag,eventResize:e.eventResize,isHeightAuto:e.isHeightAuto,forPrint:e.forPrint},i=this.buildViewPropTransformers(t.viewPropsTransformers);for(let t of i)Object.assign(r,t.transform(r,e));return f(n.component,Object.assign({},r))}}function ha(e,t,n,r,i,s){let o=n.build(i,void 0,!1),a=n.buildPrev(t,r,!1),l=n.buildNext(t,r,!1);return{title:s,activeButton:e.type,navUnit:e.singleUnit,isTodayEnabled:o.isValid&&!ar(t.currentRange,i),isPrevEnabled:a.isValid,isNextEnabled:l.isValid}}function fa(e){return e.map(e=>new e)}function ga(e){let t=vo(e.locale||"en",mo([]).map);return new wi(Object.assign(Object.assign({timeZone:ln.timeZone,calendarSystem:"gregory"},e),{locale:t}))}Hi.touchMouseIgnoreWait=500;let pa=0,ma=0,va=!1;class ba{constructor(e){this.subjectEl=null,this.selector="",this.handleSelector="",this.shouldIgnoreMove=!1,this.shouldWatchScroll=!0,this.isDragging=!1,this.isTouchDragging=!1,this.wasTouchScroll=!1,this.handleMouseDown=e=>{if(!this.shouldIgnoreMouse()&&function(e){return 0===e.button&&!e.ctrlKey}(e)&&this.tryStart(e)){let t=this.createEventFromMouse(e,!0);this.emitter.trigger("pointerdown",t),this.initScrollWatch(t),this.shouldIgnoreMove||document.addEventListener("mousemove",this.handleMouseMove),document.addEventListener("mouseup",this.handleMouseUp)}},this.handleMouseMove=e=>{let t=this.createEventFromMouse(e);this.recordCoords(t),this.emitter.trigger("pointermove",t)},this.handleMouseUp=e=>{document.removeEventListener("mousemove",this.handleMouseMove),document.removeEventListener("mouseup",this.handleMouseUp),this.emitter.trigger("pointerup",this.createEventFromMouse(e)),this.cleanup()},this.handleTouchStart=e=>{if(this.tryStart(e)){this.isTouchDragging=!0;let t=this.createEventFromTouch(e,!0);this.emitter.trigger("pointerdown",t),this.initScrollWatch(t);let n=e.target;this.shouldIgnoreMove||n.addEventListener("touchmove",this.handleTouchMove),n.addEventListener("touchend",this.handleTouchEnd),n.addEventListener("touchcancel",this.handleTouchEnd),window.addEventListener("scroll",this.handleTouchScroll,!0)}},this.handleTouchMove=e=>{let t=this.createEventFromTouch(e);this.recordCoords(t),this.emitter.trigger("pointermove",t)},this.handleTouchEnd=e=>{if(this.isDragging){let t=e.target;t.removeEventListener("touchmove",this.handleTouchMove),t.removeEventListener("touchend",this.handleTouchEnd),t.removeEventListener("touchcancel",this.handleTouchEnd),window.removeEventListener("scroll",this.handleTouchScroll,!0),this.emitter.trigger("pointerup",this.createEventFromTouch(e)),this.cleanup(),this.isTouchDragging=!1,pa+=1,setTimeout(()=>{pa-=1},Hi.touchMouseIgnoreWait)}},this.handleTouchScroll=()=>{this.wasTouchScroll=!0},this.handleScroll=e=>{if(!this.shouldIgnoreMove){let t=window.pageXOffset-this.prevScrollX+this.prevPageX,n=window.pageYOffset-this.prevScrollY+this.prevPageY;this.emitter.trigger("pointermove",{origEvent:e,isTouch:this.isTouchDragging,subjectEl:this.subjectEl,pageX:t,pageY:n,deltaX:t-this.origPageX,deltaY:n-this.origPageY})}},this.containerEl=e,this.emitter=new Sr,e.addEventListener("mousedown",this.handleMouseDown),e.addEventListener("touchstart",this.handleTouchStart,{passive:!0}),ma+=1,1===ma&&window.addEventListener("touchmove",ya,{passive:!1})}destroy(){this.containerEl.removeEventListener("mousedown",this.handleMouseDown),this.containerEl.removeEventListener("touchstart",this.handleTouchStart,{passive:!0}),ma-=1,ma||window.removeEventListener("touchmove",ya,{passive:!1})}tryStart(e){let t=this.querySubjectEl(e),n=e.target;return!(!t||this.handleSelector&&!Ee(n,this.handleSelector))&&(this.subjectEl=t,this.isDragging=!0,this.wasTouchScroll=!1,!0)}cleanup(){va=!1,this.isDragging=!1,this.subjectEl=null,this.destroyScrollWatch()}querySubjectEl(e){return this.selector?Ee(e.target,this.selector):this.containerEl}shouldIgnoreMouse(){return pa||this.isTouchDragging}cancelTouchScroll(){this.isDragging&&(va=!0)}initScrollWatch(e){this.shouldWatchScroll&&(this.recordCoords(e),window.addEventListener("scroll",this.handleScroll,!0))}recordCoords(e){this.shouldWatchScroll&&(this.prevPageX=e.pageX,this.prevPageY=e.pageY,this.prevScrollX=window.pageXOffset,this.prevScrollY=window.pageYOffset)}destroyScrollWatch(){this.shouldWatchScroll&&window.removeEventListener("scroll",this.handleScroll,!0)}createEventFromMouse(e,t){let n=0,r=0;return t?(this.origPageX=e.pageX,this.origPageY=e.pageY):(n=e.pageX-this.origPageX,r=e.pageY-this.origPageY),{origEvent:e,isTouch:!1,subjectEl:this.subjectEl,pageX:e.pageX,pageY:e.pageY,deltaX:n,deltaY:r}}createEventFromTouch(e,t){let n,r,i=e.touches,s=0,o=0;return i&&i.length?(n=i[0].pageX,r=i[0].pageY):(n=e.pageX,r=e.pageY),t?(this.origPageX=n,this.origPageY=r):(s=n-this.origPageX,o=r-this.origPageY),{origEvent:e,isTouch:!0,subjectEl:this.subjectEl,pageX:n,pageY:r,deltaX:s,deltaY:o}}}function ya(e){va&&e.preventDefault()}class Ea{constructor(){this.isVisible=!1,this.sourceEl=null,this.mirrorEl=null,this.sourceElRect=null,this.parentNode=document.body,this.zIndex=9999,this.revertDuration=0}start(e,t,n){this.sourceEl=e,this.sourceElRect=this.sourceEl.getBoundingClientRect(),this.origScreenX=t-window.pageXOffset,this.origScreenY=n-window.pageYOffset,this.deltaX=0,this.deltaY=0,this.updateElPosition()}handleMove(e,t){this.deltaX=e-window.pageXOffset-this.origScreenX,this.deltaY=t-window.pageYOffset-this.origScreenY,this.updateElPosition()}setIsVisible(e){e?this.isVisible||(this.mirrorEl&&(this.mirrorEl.style.display=""),this.isVisible=e,this.updateElPosition()):this.isVisible&&(this.mirrorEl&&(this.mirrorEl.style.display="none"),this.isVisible=e)}stop(e,t){let n=()=>{this.cleanup(),t()};e&&this.mirrorEl&&this.isVisible&&this.revertDuration&&(this.deltaX||this.deltaY)?this.doRevertAnimation(n,this.revertDuration):setTimeout(n,0)}doRevertAnimation(e,t){let n=this.mirrorEl,r=this.sourceEl.getBoundingClientRect();n.style.transition="top "+t+"ms,left "+t+"ms",we(n,{left:r.left,top:r.top}),Oe(n,()=>{n.style.transition="",e()})}cleanup(){this.mirrorEl&&(ye(this.mirrorEl),this.mirrorEl=null),this.sourceEl=null}updateElPosition(){this.sourceEl&&this.isVisible&&we(this.getMirrorEl(),{left:this.sourceElRect.left+this.deltaX,top:this.sourceElRect.top+this.deltaY})}getMirrorEl(){let e=this.sourceElRect,t=this.mirrorEl;return t||(t=this.mirrorEl=this.sourceEl.cloneNode(!0),t.classList.add("fc-unselectable"),t.classList.add("fc-event-dragging"),we(t,{position:"fixed",zIndex:this.zIndex,visibility:"",boxSizing:"border-box",width:e.right-e.left,height:e.bottom-e.top,right:"auto",bottom:"auto",margin:0}),this.parentNode.appendChild(t)),t}}class Aa extends Rr{constructor(e,t){super(),this.handleScroll=()=>{this.scrollTop=this.scrollController.getScrollTop(),this.scrollLeft=this.scrollController.getScrollLeft(),this.handleScrollChange()},this.scrollController=e,this.doesListening=t,this.scrollTop=this.origScrollTop=e.getScrollTop(),this.scrollLeft=this.origScrollLeft=e.getScrollLeft(),this.scrollWidth=e.getScrollWidth(),this.scrollHeight=e.getScrollHeight(),this.clientWidth=e.getClientWidth(),this.clientHeight=e.getClientHeight(),this.clientRect=this.computeClientRect(),this.doesListening&&this.getEventTarget().addEventListener("scroll",this.handleScroll)}destroy(){this.doesListening&&this.getEventTarget().removeEventListener("scroll",this.handleScroll)}getScrollTop(){return this.scrollTop}getScrollLeft(){return this.scrollLeft}setScrollTop(e){this.scrollController.setScrollTop(e),this.doesListening||(this.scrollTop=Math.max(Math.min(e,this.getMaxScrollTop()),0),this.handleScrollChange())}setScrollLeft(e){this.scrollController.setScrollLeft(e),this.doesListening||(this.scrollLeft=Math.max(Math.min(e,this.getMaxScrollLeft()),0),this.handleScrollChange())}getClientWidth(){return this.clientWidth}getClientHeight(){return this.clientHeight}getScrollWidth(){return this.scrollWidth}getScrollHeight(){return this.scrollHeight}handleScrollChange(){}}class Da extends Aa{constructor(e,t){super(new xr(e),t)}getEventTarget(){return this.scrollController.el}computeClientRect(){return yr(this.scrollController.el)}}class Sa extends Aa{constructor(e){super(new _r,e)}getEventTarget(){return window}computeClientRect(){return{left:this.scrollLeft,right:this.scrollLeft+this.clientWidth,top:this.scrollTop,bottom:this.scrollTop+this.clientHeight}}handleScrollChange(){this.clientRect=this.computeClientRect()}}const wa="function"==typeof performance?performance.now:Date.now;class Ca{constructor(){this.isEnabled=!0,this.scrollQuery=[window,".fc-scroller"],this.edgeThreshold=50,this.maxVelocity=300,this.pointerScreenX=null,this.pointerScreenY=null,this.isAnimating=!1,this.scrollCaches=null,this.everMovedUp=!1,this.everMovedDown=!1,this.everMovedLeft=!1,this.everMovedRight=!1,this.animate=()=>{if(this.isAnimating){let e=this.computeBestEdge(this.pointerScreenX+window.pageXOffset,this.pointerScreenY+window.pageYOffset);if(e){let t=wa();this.handleSide(e,(t-this.msSinceRequest)/1e3),this.requestAnimation(t)}else this.isAnimating=!1}}}start(e,t,n){this.isEnabled&&(this.scrollCaches=this.buildCaches(n),this.pointerScreenX=null,this.pointerScreenY=null,this.everMovedUp=!1,this.everMovedDown=!1,this.everMovedLeft=!1,this.everMovedRight=!1,this.handleMove(e,t))}handleMove(e,t){if(this.isEnabled){let n=e-window.pageXOffset,r=t-window.pageYOffset,i=null===this.pointerScreenY?0:r-this.pointerScreenY,s=null===this.pointerScreenX?0:n-this.pointerScreenX;i<0?this.everMovedUp=!0:i>0&&(this.everMovedDown=!0),s<0?this.everMovedLeft=!0:s>0&&(this.everMovedRight=!0),this.pointerScreenX=n,this.pointerScreenY=r,this.isAnimating||(this.isAnimating=!0,this.requestAnimation(wa()))}}stop(){if(this.isEnabled){this.isAnimating=!1;for(let e of this.scrollCaches)e.destroy();this.scrollCaches=null}}requestAnimation(e){this.msSinceRequest=e,requestAnimationFrame(this.animate)}handleSide(e,t){let{scrollCache:n}=e,{edgeThreshold:r}=this,i=r-e.distance,s=i*i/(r*r)*this.maxVelocity*t,o=1;switch(e.name){case"left":o=-1;case"right":n.setScrollLeft(n.getScrollLeft()+s*o);break;case"top":o=-1;case"bottom":n.setScrollTop(n.getScrollTop()+s*o)}}computeBestEdge(e,t){let{edgeThreshold:n}=this,r=null,i=this.scrollCaches||[];for(let s of i){let i=s.clientRect,o=e-i.left,a=i.right-e,l=t-i.top,c=i.bottom-t;o>=0&&a>=0&&l>=0&&c>=0&&(l<=n&&this.everMovedUp&&s.canScrollUp()&&(!r||r.distance>l)&&(r={scrollCache:s,name:"top",distance:l}),c<=n&&this.everMovedDown&&s.canScrollDown()&&(!r||r.distance>c)&&(r={scrollCache:s,name:"bottom",distance:c}),o<=n&&this.everMovedLeft&&s.canScrollLeft()&&(!r||r.distance>o)&&(r={scrollCache:s,name:"left",distance:o}),a<=n&&this.everMovedRight&&s.canScrollRight()&&(!r||r.distance>a)&&(r={scrollCache:s,name:"right",distance:a}))}return r}buildCaches(e){return this.queryScrollEls(e).map(e=>e===window?new Sa(!1):new Da(e,!1))}queryScrollEls(e){let t=[];for(let n of this.scrollQuery)"object"==typeof n?t.push(n):t.push(...Array.prototype.slice.call(xe(e).querySelectorAll(n)));return t}}class Ra extends Pi{constructor(e,t){super(e),this.containerEl=e,this.delay=null,this.minDistance=0,this.touchScrollAllowed=!0,this.mirrorNeedsRevert=!1,this.isInteracting=!1,this.isDragging=!1,this.isDelayEnded=!1,this.isDistanceSurpassed=!1,this.delayTimeoutId=null,this.onPointerDown=e=>{this.isDragging||(this.isInteracting=!0,this.isDelayEnded=!1,this.isDistanceSurpassed=!1,Ue(document.body),We(document.body),e.isTouch||e.origEvent.preventDefault(),this.emitter.trigger("pointerdown",e),this.isInteracting&&!this.pointer.shouldIgnoreMove&&(this.mirror.setIsVisible(!1),this.mirror.start(e.subjectEl,e.pageX,e.pageY),this.startDelay(e),this.minDistance||this.handleDistanceSurpassed(e)))},this.onPointerMove=e=>{if(this.isInteracting){if(this.emitter.trigger("pointermove",e),!this.isDistanceSurpassed){let t,n=this.minDistance,{deltaX:r,deltaY:i}=e;t=r*r+i*i,t>=n*n&&this.handleDistanceSurpassed(e)}this.isDragging&&("scroll"!==e.origEvent.type&&(this.mirror.handleMove(e.pageX,e.pageY),this.autoScroller.handleMove(e.pageX,e.pageY)),this.emitter.trigger("dragmove",e))}},this.onPointerUp=e=>{this.isInteracting&&(this.isInteracting=!1,Le(document.body),Fe(document.body),this.emitter.trigger("pointerup",e),this.isDragging&&(this.autoScroller.stop(),this.tryStopDrag(e)),this.delayTimeoutId&&(clearTimeout(this.delayTimeoutId),this.delayTimeoutId=null))};let n=this.pointer=new ba(e);n.emitter.on("pointerdown",this.onPointerDown),n.emitter.on("pointermove",this.onPointerMove),n.emitter.on("pointerup",this.onPointerUp),t&&(n.selector=t),this.mirror=new Ea,this.autoScroller=new Ca}destroy(){this.pointer.destroy(),this.onPointerUp({})}startDelay(e){"number"==typeof this.delay?this.delayTimeoutId=setTimeout(()=>{this.delayTimeoutId=null,this.handleDelayEnd(e)},this.delay):this.handleDelayEnd(e)}handleDelayEnd(e){this.isDelayEnded=!0,this.tryStartDrag(e)}handleDistanceSurpassed(e){this.isDistanceSurpassed=!0,this.tryStartDrag(e)}tryStartDrag(e){this.isDelayEnded&&this.isDistanceSurpassed&&(this.pointer.wasTouchScroll&&!this.touchScrollAllowed||(this.isDragging=!0,this.mirrorNeedsRevert=!1,this.autoScroller.start(e.pageX,e.pageY,this.containerEl),this.emitter.trigger("dragstart",e),!1===this.touchScrollAllowed&&this.pointer.cancelTouchScroll()))}tryStopDrag(e){this.mirror.stop(this.mirrorNeedsRevert,this.stopDrag.bind(this,e))}stopDrag(e){this.isDragging=!1,this.emitter.trigger("dragend",e)}setIgnoreMove(e){this.pointer.shouldIgnoreMove=e}setMirrorIsVisible(e){this.mirror.setIsVisible(e)}setMirrorNeedsRevert(e){this.mirrorNeedsRevert=e}setAutoScrollEnabled(e){this.autoScroller.isEnabled=e}}class xa{constructor(e){this.origRect=Er(e),this.scrollCaches=Ar(e).map(e=>new Da(e,!0))}destroy(){for(let e of this.scrollCaches)e.destroy()}computeLeft(){let e=this.origRect.left;for(let t of this.scrollCaches)e+=t.origScrollLeft-t.getScrollLeft();return e}computeTop(){let e=this.origRect.top;for(let t of this.scrollCaches)e+=t.origScrollTop-t.getScrollTop();return e}isWithinClipping(e,t){let n={left:e,top:t};for(let e of this.scrollCaches)if(!_a(e.getEventTarget())&&!Gn(n,e.clientRect))return!1;return!0}}function _a(e){let t=e.tagName;return"HTML"===t||"BODY"===t}class Ta{constructor(e,t){this.useSubjectCenter=!1,this.requireInitial=!0,this.initialHit=null,this.movingHit=null,this.finalHit=null,this.handlePointerDown=e=>{let{dragging:t}=this;this.initialHit=null,this.movingHit=null,this.finalHit=null,this.prepareHits(),this.processFirstCoord(e),this.initialHit||!this.requireInitial?(t.setIgnoreMove(!1),this.emitter.trigger("pointerdown",e)):t.setIgnoreMove(!0)},this.handleDragStart=e=>{this.emitter.trigger("dragstart",e),this.handleMove(e,!0)},this.handleDragMove=e=>{this.emitter.trigger("dragmove",e),this.handleMove(e)},this.handlePointerUp=e=>{this.releaseHits(),this.emitter.trigger("pointerup",e)},this.handleDragEnd=e=>{this.movingHit&&this.emitter.trigger("hitupdate",null,!0,e),this.finalHit=this.movingHit,this.movingHit=null,this.emitter.trigger("dragend",e)},this.droppableStore=t,e.emitter.on("pointerdown",this.handlePointerDown),e.emitter.on("dragstart",this.handleDragStart),e.emitter.on("dragmove",this.handleDragMove),e.emitter.on("pointerup",this.handlePointerUp),e.emitter.on("dragend",this.handleDragEnd),this.dragging=e,this.emitter=new Sr}processFirstCoord(e){let t,n={left:e.pageX,top:e.pageY},r=n,i=e.subjectEl;i instanceof HTMLElement&&(t=Er(i),r=qn(r,t));let s=this.initialHit=this.queryHitForOffset(r.left,r.top);if(s){if(this.useSubjectCenter&&t){let e=Qn(t,s.rect);e&&(r=Yn(e))}this.coordAdjust=Zn(r,n)}else this.coordAdjust={left:0,top:0}}handleMove(e,t){let n=this.queryHitForOffset(e.pageX+this.coordAdjust.left,e.pageY+this.coordAdjust.top);!t&&ka(this.movingHit,n)||(this.movingHit=n,this.emitter.trigger("hitupdate",n,!1,e))}prepareHits(){this.offsetTrackers=ht(this.droppableStore,e=>(e.component.prepareHits(),new xa(e.el)))}releaseHits(){let{offsetTrackers:e}=this;for(let t in e)e[t].destroy();this.offsetTrackers={}}queryHitForOffset(e,t){let{droppableStore:n,offsetTrackers:r}=this,i=null;for(let s in n){let o=n[s].component,a=r[s];if(a&&a.isWithinClipping(e,t)){let n=a.computeLeft(),r=a.computeTop(),l=e-n,c=t-r,{origRect:d}=a,u=d.right-d.left,h=d.bottom-d.top;if(l>=0&&l<u&&c>=0&&c<h){let e=o.queryHit(l,c,u,h);e&&or(e.dateProfile.activeRange,e.dateSpan.range)&&(!i||e.layer>i.layer)&&(e.componentId=s,e.context=o.context,e.rect.left+=n,e.rect.right+=n,e.rect.top+=r,e.rect.bottom+=r,i=e)}}}return i}}function ka(e,t){return!e&&!t||Boolean(e)===Boolean(t)&&mi(e.dateSpan,t.dateSpan)}function Ma(e,t){let n={};for(let r of t.pluginHooks.datePointTransforms)Object.assign(n,r(e,t));var r,i;return Object.assign(n,(r=e,{date:(i=t.dateEnv).toDate(r.range.start),dateStr:i.formatIso(r.range.start,{omitTime:r.allDay}),allDay:r.allDay})),n}class Ia extends Ii{constructor(e){super(e),this.subjectEl=null,this.subjectSeg=null,this.isDragging=!1,this.eventRange=null,this.relevantEvents=null,this.receivingContext=null,this.validMutation=null,this.mutatedRelevantEvents=null,this.handlePointerDown=e=>{let t=e.origEvent.target,{component:n,dragging:r}=this,{mirror:i}=r,{options:s}=n.context,o=n.context;this.subjectEl=e.subjectEl;let a=this.subjectSeg=ti(e.subjectEl),l=(this.eventRange=a.eventRange).instance.instanceId;this.relevantEvents=Dn(o.getCurrentData().eventStore,l),r.minDistance=e.isTouch?0:s.eventDragMinDistance,r.delay=e.isTouch&&l!==n.props.eventSelection?function(e){let{options:t}=e.context,n=t.eventLongPressDelay;null==n&&(n=t.longPressDelay);return n}(n):null,s.fixedMirrorParent?i.parentNode=s.fixedMirrorParent:i.parentNode=Ee(t,".fc"),i.revertDuration=s.dragRevertDuration;let c=n.isValidSegDownEl(t)&&!Ee(t,".fc-event-resizer");r.setIgnoreMove(!c),this.isDragging=c&&e.subjectEl.classList.contains("fc-event-draggable")},this.handleDragStart=e=>{let t=this.component.context,n=this.eventRange,r=n.instance.instanceId;e.isTouch?r!==this.component.props.eventSelection&&t.dispatch({type:"SELECT_EVENT",eventInstanceId:r}):t.dispatch({type:"UNSELECT_EVENT"}),this.isDragging&&(t.calendarApi.unselect(e),t.emitter.trigger("eventDragStart",{el:this.subjectEl,event:new Zr(t,n.def,n.instance),jsEvent:e.origEvent,view:t.viewApi}))},this.handleHitUpdate=(e,t)=>{if(!this.isDragging)return;let n=this.relevantEvents,r=this.hitDragging.initialHit,i=this.component.context,s=null,o=null,a=null,l=!1,c={affectedEvents:n,mutatedEvents:{defs:{},instances:{}},isEvent:!0};if(e){s=e.context;let t=s.options;i===s||t.editable&&t.droppable?(o=function(e,t,n){let r=e.dateSpan,i=t.dateSpan,s=r.range.start,o=i.range.start,a={};r.allDay!==i.allDay&&(a.allDay=i.allDay,a.hasEnd=t.context.options.allDayMaintainDuration,i.allDay&&(s=kt(s)));let l=Vn(s,o,e.context.dateEnv,e.componentId===t.componentId?e.largeUnit:null);l.milliseconds&&(a.allDay=!1);let c={datesDelta:l,standardProps:a};for(let r of n)r(c,e,t);return c}(r,e,s.getCurrentData().pluginHooks.eventDragMutationMassagers),o&&(a=Gr(n,s.getCurrentData().eventUiBases,o,s),c.mutatedEvents=a,cs(c,e.dateProfile,s)||(l=!0,o=null,a=null,c.mutatedEvents={defs:{},instances:{}}))):s=null}this.displayDrag(s,c),l?je():ze(),t||(i===s&&ka(r,e)&&(o=null),this.dragging.setMirrorNeedsRevert(!o),this.dragging.setMirrorIsVisible(!e||!xe(this.subjectEl).querySelector(".fc-event-mirror")),this.receivingContext=s,this.validMutation=o,this.mutatedRelevantEvents=a)},this.handlePointerUp=()=>{this.isDragging||this.cleanup()},this.handleDragEnd=e=>{if(this.isDragging){let t=this.component.context,n=t.viewApi,{receivingContext:r,validMutation:i}=this,s=this.eventRange.def,o=this.eventRange.instance,a=new Zr(t,s,o),l=this.relevantEvents,c=this.mutatedRelevantEvents,{finalHit:d}=this.hitDragging;if(this.clearDrag(),t.emitter.trigger("eventDragStop",{el:this.subjectEl,event:a,jsEvent:e.origEvent,view:n}),i){if(r===t){let r=new Zr(t,c.defs[s.defId],o?c.instances[o.instanceId]:null);t.dispatch({type:"MERGE_EVENTS",eventStore:c});let d={oldEvent:a,event:r,relatedEvents:Jr(c,t,o),revert(){t.dispatch({type:"MERGE_EVENTS",eventStore:l})}},u={};for(let e of t.getCurrentData().pluginHooks.eventDropTransformers)Object.assign(u,e(i,t));t.emitter.trigger("eventDrop",Object.assign(Object.assign(Object.assign({},d),u),{el:e.subjectEl,delta:i.datesDelta,jsEvent:e.origEvent,view:n})),t.emitter.trigger("eventChange",d)}else if(r){let i={event:a,relatedEvents:Jr(l,t,o),revert(){t.dispatch({type:"MERGE_EVENTS",eventStore:l})}};t.emitter.trigger("eventLeave",Object.assign(Object.assign({},i),{draggedEl:e.subjectEl,view:n})),t.dispatch({type:"REMOVE_EVENTS",eventStore:l}),t.emitter.trigger("eventRemove",i);let u=c.defs[s.defId],h=c.instances[o.instanceId],f=new Zr(r,u,h);r.dispatch({type:"MERGE_EVENTS",eventStore:c});let g={event:f,relatedEvents:Jr(c,r,h),revert(){r.dispatch({type:"REMOVE_EVENTS",eventStore:c})}};r.emitter.trigger("eventAdd",g),e.isTouch&&r.dispatch({type:"SELECT_EVENT",eventInstanceId:o.instanceId}),r.emitter.trigger("drop",Object.assign(Object.assign({},Ma(d.dateSpan,r)),{draggedEl:e.subjectEl,jsEvent:e.origEvent,view:d.context.viewApi})),r.emitter.trigger("eventReceive",Object.assign(Object.assign({},g),{draggedEl:e.subjectEl,view:d.context.viewApi}))}}else t.emitter.trigger("_noEventDrop")}this.cleanup()};let{component:t}=this,{options:n}=t.context,r=this.dragging=new Ra(e.el);r.pointer.selector=Ia.SELECTOR,r.touchScrollAllowed=!1,r.autoScroller.isEnabled=n.dragScroll;let i=this.hitDragging=new Ta(this.dragging,Ni);i.useSubjectCenter=e.useEventCenter,i.emitter.on("pointerdown",this.handlePointerDown),i.emitter.on("dragstart",this.handleDragStart),i.emitter.on("hitupdate",this.handleHitUpdate),i.emitter.on("pointerup",this.handlePointerUp),i.emitter.on("dragend",this.handleDragEnd)}destroy(){this.dragging.destroy()}displayDrag(e,t){let n=this.component.context,r=this.receivingContext;r&&r!==e&&(r===n?r.dispatch({type:"SET_EVENT_DRAG",state:{affectedEvents:t.affectedEvents,mutatedEvents:{defs:{},instances:{}},isEvent:!0}}):r.dispatch({type:"UNSET_EVENT_DRAG"})),e&&e.dispatch({type:"SET_EVENT_DRAG",state:t})}clearDrag(){let e=this.component.context,{receivingContext:t}=this;t&&t.dispatch({type:"UNSET_EVENT_DRAG"}),e!==t&&e.dispatch({type:"UNSET_EVENT_DRAG"})}cleanup(){this.subjectSeg=null,this.isDragging=!1,this.eventRange=null,this.relevantEvents=null,this.receivingContext=null,this.validMutation=null,this.mutatedRelevantEvents=null}}Ia.SELECTOR=".fc-event-draggable, .fc-event-resizable";const Oa={fixedMirrorParent:mn},Na={dateClick:mn,eventDragStart:mn,eventDragStop:mn,eventDrop:mn,eventResizeStart:mn,eventResizeStop:mn,eventResize:mn,drop:mn,eventReceive:mn,eventLeave:mn};class Pa{constructor(e,t){this.receivingContext=null,this.droppableEvent=null,this.suppliedDragMeta=null,this.dragMeta=null,this.handleDragStart=e=>{this.dragMeta=this.buildDragMeta(e.subjectEl)},this.handleHitUpdate=(e,t,n)=>{let{dragging:r}=this.hitDragging,i=null,s=null,o=!1,a={affectedEvents:{defs:{},instances:{}},mutatedEvents:{defs:{},instances:{}},isEvent:this.dragMeta.create};e&&(i=e.context,this.canDropElOnCalendar(n.subjectEl,i)&&(s=function(e,t,n){let r=Object.assign({},t.leftoverProps);for(let i of n.pluginHooks.externalDefTransforms)Object.assign(r,i(e,t));let{refined:i,extra:s}=Hn(r,n),o=jn(i,s,t.sourceId,e.allDay,n.options.forceEventDuration||Boolean(t.duration),n),a=e.range.start;e.allDay&&t.startTime&&(a=n.dateEnv.add(a,t.startTime));let l=t.duration?n.dateEnv.add(a,t.duration):Vr(e.allDay,a,n),c=vn(o.defId,{start:a,end:l});return{def:o,instance:c}}(e.dateSpan,this.dragMeta,i),a.mutatedEvents=An(s),o=!cs(a,e.dateProfile,i),o&&(a.mutatedEvents={defs:{},instances:{}},s=null))),this.displayDrag(i,a),r.setMirrorIsVisible(t||!s||!document.querySelector(".fc-event-mirror")),o?je():ze(),t||(r.setMirrorNeedsRevert(!s),this.receivingContext=i,this.droppableEvent=s)},this.handleDragEnd=e=>{let{receivingContext:t,droppableEvent:n}=this;if(this.clearDrag(),t&&n){let r=this.hitDragging.finalHit,i=r.context.viewApi,s=this.dragMeta;if(t.emitter.trigger("drop",Object.assign(Object.assign({},Ma(r.dateSpan,t)),{draggedEl:e.subjectEl,jsEvent:e.origEvent,view:i})),s.create){let r=An(n);t.dispatch({type:"MERGE_EVENTS",eventStore:r}),e.isTouch&&t.dispatch({type:"SELECT_EVENT",eventInstanceId:n.instance.instanceId}),t.emitter.trigger("eventReceive",{event:new Zr(t,n.def,n.instance),relatedEvents:[],revert(){t.dispatch({type:"REMOVE_EVENTS",eventStore:r})},draggedEl:e.subjectEl,view:i})}}this.receivingContext=null,this.droppableEvent=null};let n=this.hitDragging=new Ta(e,Ni);n.requireInitial=!1,n.emitter.on("dragstart",this.handleDragStart),n.emitter.on("hitupdate",this.handleHitUpdate),n.emitter.on("dragend",this.handleDragEnd),this.suppliedDragMeta=t}buildDragMeta(e){return"object"==typeof this.suppliedDragMeta?ji(this.suppliedDragMeta):"function"==typeof this.suppliedDragMeta?ji(this.suppliedDragMeta(e)):function(e){let t=function(e,t){let n=Hi.dataAttrPrefix,r=(n?n+"-":"")+t;return e.getAttribute("data-"+r)||""}(e,"event");return ji(t?JSON.parse(t):{create:!1})}(e)}displayDrag(e,t){let n=this.receivingContext;n&&n!==e&&n.dispatch({type:"UNSET_EVENT_DRAG"}),e&&e.dispatch({type:"SET_EVENT_DRAG",state:t})}clearDrag(){this.receivingContext&&this.receivingContext.dispatch({type:"UNSET_EVENT_DRAG"})}canDropElOnCalendar(e,t){let n=t.options.dropAccept;return"function"==typeof n?n.call(t.calendarApi,e):"string"!=typeof n||!n||Boolean(Ae(e,n))}}Hi.dataAttrPrefix="";class Ha extends Pi{constructor(e){super(e),this.shouldIgnoreMove=!1,this.mirrorSelector="",this.currentMirrorEl=null,this.handlePointerDown=e=>{this.emitter.trigger("pointerdown",e),this.shouldIgnoreMove||this.emitter.trigger("dragstart",e)},this.handlePointerMove=e=>{this.shouldIgnoreMove||this.emitter.trigger("dragmove",e)},this.handlePointerUp=e=>{this.emitter.trigger("pointerup",e),this.shouldIgnoreMove||this.emitter.trigger("dragend",e)};let t=this.pointer=new ba(e);t.emitter.on("pointerdown",this.handlePointerDown),t.emitter.on("pointermove",this.handlePointerMove),t.emitter.on("pointerup",this.handlePointerUp)}destroy(){this.pointer.destroy()}setIgnoreMove(e){this.shouldIgnoreMove=e}setMirrorIsVisible(e){if(e)this.currentMirrorEl&&(this.currentMirrorEl.style.visibility="",this.currentMirrorEl=null);else{let e=this.mirrorSelector?document.querySelector(this.mirrorSelector):null;e&&(this.currentMirrorEl=e,e.style.visibility="hidden")}}}var Ba=yo({name:"@fullcalendar/interaction",componentInteractions:[class extends Ii{constructor(e){super(e),this.handlePointerDown=e=>{let{dragging:t}=this,n=e.origEvent.target;t.setIgnoreMove(!this.component.isValidDateDownEl(n))},this.handleDragEnd=e=>{let{component:t}=this,{pointer:n}=this.dragging;if(!n.wasTouchScroll){let{initialHit:n,finalHit:r}=this.hitDragging;if(n&&r&&ka(n,r)){let{context:r}=t,i=Object.assign(Object.assign({},Ma(n.dateSpan,r)),{dayEl:n.dayEl,jsEvent:e.origEvent,view:r.viewApi||r.calendarApi.view});r.emitter.trigger("dateClick",i)}}},this.dragging=new Ra(e.el),this.dragging.autoScroller.isEnabled=!1;let t=this.hitDragging=new Ta(this.dragging,Oi(e));t.emitter.on("pointerdown",this.handlePointerDown),t.emitter.on("dragend",this.handleDragEnd)}destroy(){this.dragging.destroy()}},class extends Ii{constructor(e){super(e),this.dragSelection=null,this.handlePointerDown=e=>{let{component:t,dragging:n}=this,{options:r}=t.context,i=r.selectable&&t.isValidDateDownEl(e.origEvent.target);n.setIgnoreMove(!i),n.delay=e.isTouch?function(e){let{options:t}=e.context,n=t.selectLongPressDelay;null==n&&(n=t.longPressDelay);return n}(t):null},this.handleDragStart=e=>{this.component.context.calendarApi.unselect(e)},this.handleHitUpdate=(e,t)=>{let{context:n}=this.component,r=null,i=!1;if(e){let t=this.hitDragging.initialHit;e.componentId===t.componentId&&this.isHitComboAllowed&&!this.isHitComboAllowed(t,e)||(r=function(e,t,n){let r=e.dateSpan,i=t.dateSpan,s=[r.range.start,r.range.end,i.range.start,i.range.end];s.sort(Xe);let o={};for(let r of n){let n=r(e,t);if(!1===n)return null;n&&Object.assign(o,n)}return o.range={start:s[0],end:s[3]},o.allDay=r.allDay,o}(t,e,n.pluginHooks.dateSelectionTransformers)),r&&ds(r,e.dateProfile,n)||(i=!0,r=null)}r?n.dispatch({type:"SELECT_DATES",selection:r}):t||n.dispatch({type:"UNSELECT_DATES"}),i?je():ze(),t||(this.dragSelection=r)},this.handlePointerUp=e=>{this.dragSelection&&(Wr(this.dragSelection,e,this.component.context),this.dragSelection=null)};let{component:t}=e,{options:n}=t.context,r=this.dragging=new Ra(e.el);r.touchScrollAllowed=!1,r.minDistance=n.selectMinDistance||0,r.autoScroller.isEnabled=n.dragScroll;let i=this.hitDragging=new Ta(this.dragging,Oi(e));i.emitter.on("pointerdown",this.handlePointerDown),i.emitter.on("dragstart",this.handleDragStart),i.emitter.on("hitupdate",this.handleHitUpdate),i.emitter.on("pointerup",this.handlePointerUp)}destroy(){this.dragging.destroy()}},Ia,class extends Ii{constructor(e){super(e),this.draggingSegEl=null,this.draggingSeg=null,this.eventRange=null,this.relevantEvents=null,this.validMutation=null,this.mutatedRelevantEvents=null,this.handlePointerDown=e=>{let{component:t}=this,n=ti(this.querySegEl(e)),r=this.eventRange=n.eventRange;this.dragging.minDistance=t.context.options.eventDragMinDistance,this.dragging.setIgnoreMove(!this.component.isValidSegDownEl(e.origEvent.target)||e.isTouch&&this.component.props.eventSelection!==r.instance.instanceId)},this.handleDragStart=e=>{let{context:t}=this.component,n=this.eventRange;this.relevantEvents=Dn(t.getCurrentData().eventStore,this.eventRange.instance.instanceId);let r=this.querySegEl(e);this.draggingSegEl=r,this.draggingSeg=ti(r),t.calendarApi.unselect(),t.emitter.trigger("eventResizeStart",{el:r,event:new Zr(t,n.def,n.instance),jsEvent:e.origEvent,view:t.viewApi})},this.handleHitUpdate=(e,t,n)=>{let{context:r}=this.component,i=this.relevantEvents,s=this.hitDragging.initialHit,o=this.eventRange.instance,a=null,l=null,c=!1,d={affectedEvents:i,mutatedEvents:{defs:{},instances:{}},isEvent:!0};if(e){e.componentId===s.componentId&&this.isHitComboAllowed&&!this.isHitComboAllowed(s,e)||(a=function(e,t,n,r){let i=e.context.dateEnv,s=e.dateSpan.range.start,o=t.dateSpan.range.start,a=Vn(s,o,i,e.largeUnit);if(n){if(i.add(r.start,a)<r.end)return{startDelta:a}}else if(i.add(r.end,a)>r.start)return{endDelta:a};return null}(s,e,n.subjectEl.classList.contains("fc-event-resizer-start"),o.range))}a&&(l=Gr(i,r.getCurrentData().eventUiBases,a,r),d.mutatedEvents=l,cs(d,e.dateProfile,r)||(c=!0,a=null,l=null,d.mutatedEvents=null)),l?r.dispatch({type:"SET_EVENT_RESIZE",state:d}):r.dispatch({type:"UNSET_EVENT_RESIZE"}),c?je():ze(),t||(a&&ka(s,e)&&(a=null),this.validMutation=a,this.mutatedRelevantEvents=l)},this.handleDragEnd=e=>{let{context:t}=this.component,n=this.eventRange.def,r=this.eventRange.instance,i=new Zr(t,n,r),s=this.relevantEvents,o=this.mutatedRelevantEvents;if(t.emitter.trigger("eventResizeStop",{el:this.draggingSegEl,event:i,jsEvent:e.origEvent,view:t.viewApi}),this.validMutation){let a=new Zr(t,o.defs[n.defId],r?o.instances[r.instanceId]:null);t.dispatch({type:"MERGE_EVENTS",eventStore:o});let l={oldEvent:i,event:a,relatedEvents:Jr(o,t,r),revert(){t.dispatch({type:"MERGE_EVENTS",eventStore:s})}};t.emitter.trigger("eventResize",Object.assign(Object.assign({},l),{el:this.draggingSegEl,startDelta:this.validMutation.startDelta||tt(0),endDelta:this.validMutation.endDelta||tt(0),jsEvent:e.origEvent,view:t.viewApi})),t.emitter.trigger("eventChange",l)}else t.emitter.trigger("_noEventResize");this.draggingSeg=null,this.relevantEvents=null,this.validMutation=null};let{component:t}=e,n=this.dragging=new Ra(e.el);n.pointer.selector=".fc-event-resizer",n.touchScrollAllowed=!1,n.autoScroller.isEnabled=t.context.options.dragScroll;let r=this.hitDragging=new Ta(this.dragging,Oi(e));r.emitter.on("pointerdown",this.handlePointerDown),r.emitter.on("dragstart",this.handleDragStart),r.emitter.on("hitupdate",this.handleHitUpdate),r.emitter.on("dragend",this.handleDragEnd)}destroy(){this.dragging.destroy()}querySegEl(e){return Ee(e.subjectEl,".fc-event")}}],calendarInteractions:[class{constructor(e){this.context=e,this.isRecentPointerDateSelect=!1,this.matchesCancel=!1,this.matchesEvent=!1,this.onSelect=e=>{e.jsEvent&&(this.isRecentPointerDateSelect=!0)},this.onDocumentPointerDown=e=>{let t=this.context.options.unselectCancel,n=Re(e.origEvent);this.matchesCancel=!!Ee(n,t),this.matchesEvent=!!Ee(n,Ia.SELECTOR)},this.onDocumentPointerUp=e=>{let{context:t}=this,{documentPointer:n}=this,r=t.getCurrentData();if(!n.wasTouchScroll){if(r.dateSelection&&!this.isRecentPointerDateSelect){let n=t.options.unselectAuto;!n||n&&this.matchesCancel||t.calendarApi.unselect(e)}r.eventSelection&&!this.matchesEvent&&t.dispatch({type:"UNSELECT_EVENT"})}this.isRecentPointerDateSelect=!1};let t=this.documentPointer=new ba(document);t.shouldIgnoreMove=!0,t.shouldWatchScroll=!1,t.emitter.on("pointerdown",this.onDocumentPointerDown),t.emitter.on("pointerup",this.onDocumentPointerUp),e.emitter.on("select",this.onSelect)}destroy(){this.context.emitter.off("select",this.onSelect),this.documentPointer.destroy()}}],elementDraggingImpl:Ra,optionRefiners:Oa,listenerRefiners:Na});class ja extends zr{constructor(){super(...arguments),this.headerElRef={current:null}}renderSimpleLayout(e,t){let{props:n,context:r}=this,i=[],s=Ns(r.options);return e&&i.push({type:"header",key:"header",isSticky:s,chunk:{elRef:this.headerElRef,tableClassName:"fc-col-header",rowContent:e}}),i.push({type:"body",key:"body",liquid:!0,chunk:{content:t}}),f(io,{elClasses:["fc-daygrid"],viewSpec:r.viewSpec},f(Hs,{liquid:!n.isHeightAuto&&!n.forPrint,collapsibleWidth:n.forPrint,cols:[],sections:i}))}renderHScrollLayout(e,t,n,r){let i=this.context.pluginHooks.scrollGridImpl;if(!i)throw new Error("No ScrollGrid implementation");let{props:s,context:o}=this,a=!s.forPrint&&Ns(o.options),l=!s.forPrint&&Ps(o.options),c=[];return e&&c.push({type:"header",key:"header",isSticky:a,chunks:[{key:"main",elRef:this.headerElRef,tableClassName:"fc-col-header",rowContent:e}]}),c.push({type:"body",key:"body",liquid:!0,chunks:[{key:"main",content:t}]}),l&&c.push({type:"footer",key:"footer",isSticky:!0,chunks:[{key:"main",content:Os}]}),f(io,{elClasses:["fc-daygrid"],viewSpec:o.viewSpec},f(i,{liquid:!s.isHeightAuto&&!s.forPrint,collapsibleWidth:s.forPrint,colGroups:[{cols:[{span:n,minWidth:r}]}],sections:c}))}}function za(e,t){let n=[];for(let e=0;e<t;e+=1)n[e]=[];for(let t of e)n[t.row].push(t);return n}function Ua(e,t){let n=[];for(let e=0;e<t;e+=1)n[e]=[];for(let t of e)n[t.firstCol].push(t);return n}function La(e,t){let n=[];if(e){for(let r=0;r<t;r+=1)n[r]={affectedInstances:e.affectedInstances,isEvent:e.isEvent,segs:[]};for(let t of e.segs)n[t.row].segs.push(t)}else for(let e=0;e<t;e+=1)n[e]=null;return n}const Wa=on({hour:"numeric",minute:"2-digit",omitZeroMinute:!0,meridiem:"narrow"});function Fa(e){let{display:t}=e.eventRange.ui;return"list-item"===t||"auto"===t&&!e.eventRange.def.allDay&&e.firstCol===e.lastCol&&e.isStart&&e.isEnd}class Va extends Br{render(){let{props:e}=this;return f(js,Object.assign({},e,{elClasses:["fc-daygrid-event","fc-daygrid-block-event","fc-h-event"],defaultTimeFormat:Wa,defaultDisplayEventEnd:e.defaultDisplayEventEnd,disableResizing:!e.seg.eventRange.def.allDay}))}}class Ga extends Br{render(){let{props:e,context:t}=this,{options:n}=t,{seg:r}=e,i=ci(r,n.eventTimeFormat||Wa,t,!0,e.defaultDisplayEventEnd);return f(Bs,Object.assign({},e,{elTag:"a",elClasses:["fc-daygrid-event","fc-daygrid-dot-event"],elAttrs:fi(e.seg,t),defaultGenerator:Qa,timeText:i,isResizing:!1,isDateSelecting:!1}))}}function Qa(e){return f(p,null,f("div",{className:"fc-daygrid-event-dot",style:{borderColor:e.borderColor||e.backgroundColor}}),e.timeText&&f("div",{className:"fc-event-time"},e.timeText),f("div",{className:"fc-event-title"},e.event.title||f(p,null," ")))}class qa extends Br{constructor(){super(...arguments),this.compileSegs=Vt(Ya)}render(){let{props:e}=this,{allSegs:t,invisibleSegs:n}=this.compileSegs(e.singlePlacements);return f($s,{elClasses:["fc-daygrid-more-link"],dateProfile:e.dateProfile,todayRange:e.todayRange,allDayDate:e.allDayDate,moreCnt:e.moreCnt,allSegs:t,hiddenSegs:n,alignmentElRef:e.alignmentElRef,alignGridTop:e.alignGridTop,extraDateSpan:e.extraDateSpan,popoverContent:()=>{let n=(e.eventDrag?e.eventDrag.affectedInstances:null)||(e.eventResize?e.eventResize.affectedInstances:null)||{};return f(p,null,t.map(t=>{let r=t.eventRange.instance.instanceId;return f("div",{className:"fc-daygrid-event-harness",key:r,style:{visibility:n[r]?"hidden":""}},Fa(t)?f(Ga,Object.assign({seg:t,isDragging:!1,isSelected:r===e.eventSelection,defaultDisplayEventEnd:!1},di(t,e.todayRange))):f(Va,Object.assign({seg:t,isDragging:!1,isResizing:!1,isDateSelecting:!1,isSelected:r===e.eventSelection,defaultDisplayEventEnd:!1},di(t,e.todayRange))))}))}})}}function Ya(e){let t=[],n=[];for(let r of e)t.push(r.seg),r.isVisible||n.push(r.seg);return{allSegs:t,invisibleSegs:n}}const Za=on({week:"narrow"});class Xa extends zr{constructor(){super(...arguments),this.rootElRef={current:null},this.state={dayNumberId:Te()},this.handleRootEl=e=>{jr(this.rootElRef,e),jr(this.props.elRef,e)}}render(){let{context:e,props:t,state:n,rootElRef:r}=this,{options:i}=e,{date:s,dateProfile:o}=t;return f(Ws,{elTag:"td",elRef:this.handleRootEl,elClasses:["fc-daygrid-day",...t.extraClassNames||[]],elAttrs:Object.assign(Object.assign(Object.assign({},t.extraDataAttrs),t.showDayNumber?{"aria-labelledby":n.dayNumberId}:{}),{role:"gridcell"}),defaultGenerator:Ja,date:s,dateProfile:o,todayRange:t.todayRange,showDayNumber:t.showDayNumber,extraRenderProps:t.extraRenderProps},(o,a)=>f("div",{className:"fc-daygrid-day-frame fc-scrollgrid-sync-inner",ref:t.innerElRef},t.showWeekNumber&&f(Ys,{elTag:"a",elClasses:["fc-daygrid-week-number"],elAttrs:hr(e,s,"week"),date:s,defaultFormat:Za}),Boolean(!a.isDisabled&&(t.showDayNumber||Fs(i)||t.forceDayTop))&&f("div",{className:"fc-daygrid-day-top"},f(o,{elTag:"a",elClasses:["fc-daygrid-day-number"],elAttrs:Object.assign(Object.assign({},hr(e,s)),{id:n.dayNumberId})})),f("div",{className:"fc-daygrid-day-events",ref:t.fgContentElRef},t.fgContent,f("div",{className:"fc-daygrid-day-bottom",style:{marginTop:t.moreMarginTop}},f(qa,{allDayDate:s,singlePlacements:t.singlePlacements,moreCnt:t.moreCnt,alignmentElRef:r,alignGridTop:!t.showDayNumber,extraDateSpan:t.extraDateSpan,dateProfile:t.dateProfile,eventSelection:t.eventSelection,eventDrag:t.eventDrag,eventResize:t.eventResize,todayRange:t.todayRange}))),f("div",{className:"fc-daygrid-day-bg"},t.bgContent)))}}function Ja(e){return e.dayNumberText||f(p,null," ")}function $a(e,t,n,r,i,s,o){let a=new el;a.allowReslicing=!0,a.strictOrder=r,!0===t||!0===n?(a.maxCoord=s,a.hiddenConsumes=!0):"number"==typeof t?a.maxStackCnt=t:"number"==typeof n&&(a.maxStackCnt=n,a.hiddenConsumes=!0);let l=[],c=[];for(let t=0;t<e.length;t+=1){let n=e[t],{instanceId:r}=n.eventRange.instance,s=i[r];null!=s?l.push({index:t,thickness:s,span:{start:n.firstCol,end:n.lastCol+1}}):c.push(n)}let d=a.addSegs(l),u=a.toRects(),{singleColPlacements:h,multiColPlacements:f,leftoverMargins:g}=function(e,t,n){let r=function(e,t){let n=[];for(let e=0;e<t;e+=1)n.push([]);for(let t of e)for(let e=t.span.start;e<t.span.end;e+=1)n[e].push(t);return n}(e,n.length),i=[],s=[],o=[];for(let e=0;e<n.length;e+=1){let a=r[e],l=[],c=0,d=0;for(let r of a){let i=t[r.index];l.push({seg:Ka(i,e,e+1,n),isVisible:!0,isAbsolute:!1,absoluteTop:r.levelCoord,marginTop:r.levelCoord-c}),c=r.levelCoord+r.thickness}let u=[];c=0,d=0;for(let r of a){let i=t[r.index],s=r.span.end-r.span.start>1,o=r.span.start===e;d+=r.levelCoord-c,c=r.levelCoord+r.thickness,s?(d+=r.thickness,o&&u.push({seg:Ka(i,r.span.start,r.span.end,n),isVisible:!0,isAbsolute:!0,absoluteTop:r.levelCoord,marginTop:0})):o&&(u.push({seg:Ka(i,r.span.start,r.span.end,n),isVisible:!0,isAbsolute:!1,absoluteTop:r.levelCoord,marginTop:d}),d=0)}i.push(l),s.push(u),o.push(d)}return{singleColPlacements:i,multiColPlacements:s,leftoverMargins:o}}(u,e,o),p=[],m=[];for(let e of c){f[e.firstCol].push({seg:e,isVisible:!1,isAbsolute:!0,absoluteTop:0,marginTop:0});for(let t=e.firstCol;t<=e.lastCol;t+=1)h[t].push({seg:Ka(e,t,t+1,o),isVisible:!1,isAbsolute:!1,absoluteTop:0,marginTop:0})}for(let e=0;e<o.length;e+=1)p.push(0);for(let t of d){let n=e[t.index],r=t.span;f[r.start].push({seg:Ka(n,r.start,r.end,o),isVisible:!1,isAbsolute:!0,absoluteTop:0,marginTop:0});for(let e=r.start;e<r.end;e+=1)p[e]+=1,h[e].push({seg:Ka(n,e,e+1,o),isVisible:!1,isAbsolute:!1,absoluteTop:0,marginTop:0})}for(let e=0;e<o.length;e+=1)m.push(g[e]);return{singleColPlacements:h,multiColPlacements:f,moreCnts:p,moreMarginTops:m}}function Ka(e,t,n,r){if(e.firstCol===t&&e.lastCol===n-1)return e;let i=e.eventRange,s=i.range,o=rr(s,{start:r[t].date,end:St(r[n-1].date,1)});return Object.assign(Object.assign({},e),{firstCol:t,lastCol:n-1,eventRange:{def:i.def,ui:Object.assign(Object.assign({},i.ui),{durationEditable:!1}),instance:i.instance,range:o},isStart:e.isStart&&o.start.valueOf()===s.start.valueOf(),isEnd:e.isEnd&&o.end.valueOf()===s.end.valueOf()})}class el extends Ci{constructor(){super(...arguments),this.hiddenConsumes=!1,this.forceHidden={}}addSegs(e){const t=super.addSegs(e),{entriesByLevel:n}=this,r=e=>!this.forceHidden[xi(e)];for(let e=0;e<n.length;e+=1)n[e]=n[e].filter(r);return t}handleInvalidInsertion(e,t,n){const{entriesByLevel:r,forceHidden:i}=this,{touchingEntry:s,touchingLevel:o,touchingLateral:a}=e;if(this.hiddenConsumes&&s){const e=xi(s);if(!i[e])if(this.allowReslicing){const e=Object.assign(Object.assign({},s),{span:Ti(s.span,t.span)});i[xi(e)]=!0,r[o][a]=e,this.splitEntry(s,t,n)}else i[e]=!0,n.push(s)}return super.handleInvalidInsertion(e,t,n)}}class tl extends zr{constructor(){super(...arguments),this.cellElRefs=new Ds,this.frameElRefs=new Ds,this.fgElRefs=new Ds,this.segHarnessRefs=new Ds,this.rootElRef={current:null},this.state={framePositions:null,maxContentHeight:null,eventInstanceHeights:{}},this.handleResize=e=>{e&&this.updateSizing(!0)}}render(){let{props:e,state:t,context:n}=this,{options:r}=n,i=e.cells.length,s=Ua(e.businessHourSegs,i),o=Ua(e.bgEventSegs,i),a=Ua(this.getHighlightSegs(),i),l=Ua(this.getMirrorSegs(),i),{singleColPlacements:c,multiColPlacements:d,moreCnts:u,moreMarginTops:h}=$a(ii(e.fgEventSegs,r.eventOrder),e.dayMaxEvents,e.dayMaxEventRows,r.eventOrderStrict,t.eventInstanceHeights,t.maxContentHeight,e.cells),g=e.eventDrag&&e.eventDrag.affectedInstances||e.eventResize&&e.eventResize.affectedInstances||{};return f("tr",{ref:this.rootElRef,role:"row"},e.renderIntro&&e.renderIntro(),e.cells.map((t,n)=>{let r=this.renderFgSegs(n,e.forPrint?c[n]:d[n],e.todayRange,g),i=this.renderFgSegs(n,function(e,t){if(!e.length)return[];let n=function(e){let t={};for(let n of e)for(let e of n)t[e.seg.eventRange.instance.instanceId]=e.absoluteTop;return t}(t);return e.map(e=>({seg:e,isVisible:!0,isAbsolute:!0,absoluteTop:n[e.eventRange.instance.instanceId],marginTop:0}))}(l[n],d),e.todayRange,{},Boolean(e.eventDrag),Boolean(e.eventResize),!1);return f(Xa,{key:t.key,elRef:this.cellElRefs.createRef(t.key),innerElRef:this.frameElRefs.createRef(t.key),dateProfile:e.dateProfile,date:t.date,showDayNumber:e.showDayNumbers,showWeekNumber:e.showWeekNumbers&&0===n,forceDayTop:e.showWeekNumbers,todayRange:e.todayRange,eventSelection:e.eventSelection,eventDrag:e.eventDrag,eventResize:e.eventResize,extraRenderProps:t.extraRenderProps,extraDataAttrs:t.extraDataAttrs,extraClassNames:t.extraClassNames,extraDateSpan:t.extraDateSpan,moreCnt:u[n],moreMarginTop:h[n],singlePlacements:c[n],fgContentElRef:this.fgElRefs.createRef(t.key),fgContent:f(p,null,f(p,null,r),f(p,null,i)),bgContent:f(p,null,this.renderFillSegs(a[n],"highlight"),this.renderFillSegs(s[n],"non-business"),this.renderFillSegs(o[n],"bg-event"))})}))}componentDidMount(){this.updateSizing(!0),this.context.addResizeHandler(this.handleResize)}componentDidUpdate(e,t){let n=this.props;this.updateSizing(!pt(e,n))}componentWillUnmount(){this.context.removeResizeHandler(this.handleResize)}getHighlightSegs(){let{props:e}=this;return e.eventDrag&&e.eventDrag.segs.length?e.eventDrag.segs:e.eventResize&&e.eventResize.segs.length?e.eventResize.segs:e.dateSelectionSegs}getMirrorSegs(){let{props:e}=this;return e.eventResize&&e.eventResize.segs.length?e.eventResize.segs:[]}renderFgSegs(e,t,n,r,i,s,o){let{context:a}=this,{eventSelection:l}=this.props,{framePositions:c}=this.state,d=1===this.props.cells.length,u=i||s||o,h=[];if(c)for(let g of t){let{seg:t}=g,{instanceId:p}=t.eventRange.instance,m=p+":"+e,v=g.isVisible&&!r[p],b=g.isAbsolute,y="",E="";b&&(a.isRtl?(E=0,y=c.lefts[t.lastCol]-c.lefts[t.firstCol]):(y=0,E=c.rights[t.firstCol]-c.rights[t.lastCol])),h.push(f("div",{className:"fc-daygrid-event-harness"+(b?" fc-daygrid-event-harness-abs":""),key:m,ref:u?null:this.segHarnessRefs.createRef(m),style:{visibility:v?"":"hidden",marginTop:b?"":g.marginTop,top:b?g.absoluteTop:"",left:y,right:E}},Fa(t)?f(Ga,Object.assign({seg:t,isDragging:i,isSelected:p===l,defaultDisplayEventEnd:d},di(t,n))):f(Va,Object.assign({seg:t,isDragging:i,isResizing:s,isDateSelecting:o,isSelected:p===l,defaultDisplayEventEnd:d},di(t,n)))))}return h}renderFillSegs(e,t){let{isRtl:n}=this.context,{todayRange:r}=this.props,{framePositions:i}=this.state,s=[];if(i)for(let o of e){let e=n?{right:0,left:i.lefts[o.lastCol]-i.lefts[o.firstCol]}:{left:0,right:i.rights[o.firstCol]-i.rights[o.lastCol]};s.push(f("div",{key:hi(o.eventRange),className:"fc-daygrid-bg-harness",style:e},"bg-event"===t?f(Gs,Object.assign({seg:o},di(o,r))):qs(t)))}return f(p,{},...s)}updateSizing(e){let{props:t,state:n,frameElRefs:r}=this;if(!t.forPrint&&null!==t.clientWidth){if(e){let e=t.cells.map(e=>r.currentMap[e.key]);if(e.length){let t=this.rootElRef.current,r=new wr(t,e,!0,!1);n.framePositions&&n.framePositions.similarTo(r)||this.setState({framePositions:new wr(t,e,!0,!1)})}}const i=this.state.eventInstanceHeights,s=this.queryEventInstanceHeights(),o=!0===t.dayMaxEvents||!0===t.dayMaxEventRows;this.safeSetState({eventInstanceHeights:Object.assign(Object.assign({},i),s),maxContentHeight:o?this.computeMaxContentHeight():null})}}queryEventInstanceHeights(){let e=this.segHarnessRefs.currentMap,t={};for(let n in e){let r=Math.round(e[n].getBoundingClientRect().height),i=n.split(":")[0];t[i]=Math.max(t[i]||0,r)}return t}computeMaxContentHeight(){let e=this.props.cells[0].key,t=this.cellElRefs.currentMap[e],n=this.fgElRefs.currentMap[e];return t.getBoundingClientRect().bottom-n.getBoundingClientRect().top}getCellEls(){let e=this.cellElRefs.currentMap;return this.props.cells.map(t=>e[t.key])}}tl.addStateEquality({eventInstanceHeights:pt});class nl extends zr{constructor(){super(...arguments),this.splitBusinessHourSegs=Vt(za),this.splitBgEventSegs=Vt(za),this.splitFgEventSegs=Vt(za),this.splitDateSelectionSegs=Vt(za),this.splitEventDrag=Vt(La),this.splitEventResize=Vt(La),this.rowRefs=new Ds,this.handleRootEl=e=>{this.rootEl=e,e?this.context.registerInteractiveComponent(this,{el:e,isHitComboAllowed:this.props.isHitComboAllowed}):this.context.unregisterInteractiveComponent(this)}}render(){let{props:e}=this,{dateProfile:t,dayMaxEventRows:n,dayMaxEvents:r,expandRows:i}=e,s=e.cells.length,o=this.splitBusinessHourSegs(e.businessHourSegs,s),a=this.splitBgEventSegs(e.bgEventSegs,s),l=this.splitFgEventSegs(e.fgEventSegs,s),c=this.splitDateSelectionSegs(e.dateSelectionSegs,s),d=this.splitEventDrag(e.eventDrag,s),u=this.splitEventResize(e.eventResize,s),h=!0===r||!0===n;return h&&!i&&(h=!1,n=null,r=null),f("div",{className:["fc-daygrid-body",h?"fc-daygrid-body-balanced":"fc-daygrid-body-unbalanced",i?"":"fc-daygrid-body-natural"].join(" "),ref:this.handleRootEl,style:{width:e.clientWidth,minWidth:e.tableMinWidth}},f($i,{unit:"day"},(h,g)=>f(p,null,f("table",{role:"presentation",className:"fc-scrollgrid-sync-table",style:{width:e.clientWidth,minWidth:e.tableMinWidth,height:i?e.clientHeight:""}},e.colGroupNode,f("tbody",{role:"presentation"},e.cells.map((i,h)=>f(tl,{ref:this.rowRefs.createRef(h),key:i.length?i[0].date.toISOString():h,showDayNumbers:s>1,showWeekNumbers:e.showWeekNumbers,todayRange:g,dateProfile:t,cells:i,renderIntro:e.renderRowIntro,businessHourSegs:o[h],eventSelection:e.eventSelection,bgEventSegs:a[h].filter(rl),fgEventSegs:l[h],dateSelectionSegs:c[h],eventDrag:d[h],eventResize:u[h],dayMaxEvents:r,dayMaxEventRows:n,clientWidth:e.clientWidth,clientHeight:e.clientHeight,forPrint:e.forPrint})))))))}prepareHits(){this.rowPositions=new wr(this.rootEl,this.rowRefs.collect().map(e=>e.getCellEls()[0]),!1,!0),this.colPositions=new wr(this.rootEl,this.rowRefs.currentMap[0].getCellEls(),!0,!1)}queryHit(e,t){let{colPositions:n,rowPositions:r}=this,i=n.leftToIndex(e),s=r.topToIndex(t);if(null!=s&&null!=i){let e=this.props.cells[s][i];return{dateProfile:this.props.dateProfile,dateSpan:Object.assign({range:this.getCellRange(s,i),allDay:!0},e.extraDateSpan),dayEl:this.getCellEl(s,i),rect:{left:n.lefts[i],right:n.rights[i],top:r.tops[s],bottom:r.bottoms[s]},layer:0}}return null}getCellEl(e,t){return this.rowRefs.currentMap[e].getCellEls()[t]}getCellRange(e,t){let n=this.props.cells[e][t].date;return{start:n,end:St(n,1)}}}function rl(e){return e.eventRange.def.allDay}class il extends is{constructor(){super(...arguments),this.forceDayIfListItem=!0}sliceRange(e,t){return t.sliceRange(e)}}class sl extends zr{constructor(){super(...arguments),this.slicer=new il,this.tableRef={current:null}}render(){let{props:e,context:t}=this;return f(nl,Object.assign({ref:this.tableRef},this.slicer.sliceProps(e,e.dateProfile,e.nextDayThreshold,t,e.dayTableModel),{dateProfile:e.dateProfile,cells:e.dayTableModel.cells,colGroupNode:e.colGroupNode,tableMinWidth:e.tableMinWidth,renderRowIntro:e.renderRowIntro,dayMaxEvents:e.dayMaxEvents,dayMaxEventRows:e.dayMaxEventRows,showWeekNumbers:e.showWeekNumbers,expandRows:e.expandRows,headerAlignElRef:e.headerAlignElRef,clientWidth:e.clientWidth,clientHeight:e.clientHeight,forPrint:e.forPrint}))}}function ol(e,t){let n=new ns(e.renderRange,t);return new rs(n,/year|month|week/.test(e.currentRangeUnit))}oo(':root{--fc-daygrid-event-dot-width:8px}.fc-daygrid-day-events:after,.fc-daygrid-day-events:before,.fc-daygrid-day-frame:after,.fc-daygrid-day-frame:before,.fc-daygrid-event-harness:after,.fc-daygrid-event-harness:before{clear:both;content:"";display:table}.fc .fc-daygrid-body{position:relative;z-index:1}.fc .fc-daygrid-day.fc-day-today{background-color:var(--fc-today-bg-color)}.fc .fc-daygrid-day-frame{min-height:100%;position:relative}.fc .fc-daygrid-day-top{display:flex;flex-direction:row-reverse}.fc .fc-day-other .fc-daygrid-day-top{opacity:.3}.fc .fc-daygrid-day-number{padding:4px;position:relative;z-index:4}.fc .fc-daygrid-day-events{margin-top:1px}.fc .fc-daygrid-body-balanced .fc-daygrid-day-events{left:0;position:absolute;right:0}.fc .fc-daygrid-body-unbalanced .fc-daygrid-day-events{min-height:2em;position:relative}.fc .fc-daygrid-body-natural .fc-daygrid-day-events{margin-bottom:1em}.fc .fc-daygrid-event-harness{position:relative}.fc .fc-daygrid-event-harness-abs{left:0;position:absolute;right:0;top:0}.fc .fc-daygrid-bg-harness{bottom:0;position:absolute;top:0}.fc .fc-daygrid-day-bg .fc-non-business{z-index:1}.fc .fc-daygrid-day-bg .fc-bg-event{z-index:2}.fc .fc-daygrid-day-bg .fc-highlight{z-index:3}.fc .fc-daygrid-event{margin-top:1px;z-index:6}.fc .fc-daygrid-event.fc-event-mirror{z-index:7}.fc .fc-daygrid-day-bottom{font-size:.85em;padding:2px 3px 0}.fc .fc-daygrid-day-bottom:before{clear:both;content:"";display:table}.fc .fc-daygrid-more-link{cursor:pointer;position:relative;z-index:4}.fc .fc-daygrid-week-number{background-color:var(--fc-neutral-bg-color);color:var(--fc-neutral-text-color);min-width:1.5em;padding:2px;position:absolute;text-align:center;top:0;z-index:5}.fc .fc-more-popover .fc-popover-body{min-width:220px;padding:10px}.fc-direction-ltr .fc-daygrid-event.fc-event-start,.fc-direction-rtl .fc-daygrid-event.fc-event-end{margin-left:2px}.fc-direction-ltr .fc-daygrid-event.fc-event-end,.fc-direction-rtl .fc-daygrid-event.fc-event-start{margin-right:2px}.fc-direction-ltr .fc-daygrid-week-number{border-radius:0 0 3px 0;left:0}.fc-direction-rtl .fc-daygrid-week-number{border-radius:0 0 0 3px;right:0}.fc-liquid-hack .fc-daygrid-day-frame{position:static}.fc-daygrid-event{border-radius:3px;font-size:var(--fc-small-font-size);position:relative;white-space:nowrap}.fc-daygrid-block-event .fc-event-time{font-weight:700}.fc-daygrid-block-event .fc-event-time,.fc-daygrid-block-event .fc-event-title{padding:1px}.fc-daygrid-dot-event{align-items:center;display:flex;padding:2px 0}.fc-daygrid-dot-event .fc-event-title{flex-grow:1;flex-shrink:1;font-weight:700;min-width:0;overflow:hidden}.fc-daygrid-dot-event.fc-event-mirror,.fc-daygrid-dot-event:hover{background:rgba(0,0,0,.1)}.fc-daygrid-dot-event.fc-event-selected:before{bottom:-10px;top:-10px}.fc-daygrid-event-dot{border:calc(var(--fc-daygrid-event-dot-width)/2) solid var(--fc-event-border-color);border-radius:calc(var(--fc-daygrid-event-dot-width)/2);box-sizing:content-box;height:0;margin:0 4px;width:0}.fc-direction-ltr .fc-daygrid-event .fc-event-time{margin-right:3px}.fc-direction-rtl .fc-daygrid-event .fc-event-time{margin-left:3px}');var al=yo({name:"@fullcalendar/daygrid",initialView:"dayGridMonth",views:{dayGrid:{component:class extends ja{constructor(){super(...arguments),this.buildDayTableModel=Vt(ol),this.headerRef={current:null},this.tableRef={current:null}}render(){let{options:e,dateProfileGenerator:t}=this.context,{props:n}=this,r=this.buildDayTableModel(n.dateProfile,t),i=e.dayHeaders&&f(es,{ref:this.headerRef,dateProfile:n.dateProfile,dates:r.headerDates,datesRepDistinctDays:1===r.rowCnt}),s=t=>f(sl,{ref:this.tableRef,dateProfile:n.dateProfile,dayTableModel:r,businessHours:n.businessHours,dateSelection:n.dateSelection,eventStore:n.eventStore,eventUiBases:n.eventUiBases,eventSelection:n.eventSelection,eventDrag:n.eventDrag,eventResize:n.eventResize,nextDayThreshold:e.nextDayThreshold,colGroupNode:t.tableColGroupNode,tableMinWidth:t.tableMinWidth,dayMaxEvents:e.dayMaxEvents,dayMaxEventRows:e.dayMaxEventRows,showWeekNumbers:e.weekNumbers,expandRows:!n.isHeightAuto,headerAlignElRef:this.headerElRef,clientWidth:t.clientWidth,clientHeight:t.clientHeight,forPrint:n.forPrint});return e.dayMinWidth?this.renderHScrollLayout(i,s,r.colCnt,e.dayMinWidth):this.renderSimpleLayout(i,s)}},dateProfileGeneratorClass:class extends Lr{buildRenderRange(e,t,n){let r,{dateEnv:i}=this.props,s=super.buildRenderRange(e,t,n),o=s.start,a=s.end;if(/^(year|month)$/.test(t)&&(o=i.startOfWeek(o),r=i.startOfWeek(a),r.valueOf()!==a.valueOf()&&(a=Dt(r,1))),this.props.monthMode&&this.props.fixedWeekCount){a=Dt(a,6-Math.ceil(Ct(o,a)))}return{start:o,end:a}}}},dayGridDay:{type:"dayGrid",duration:{days:1}},dayGridWeek:{type:"dayGrid",duration:{weeks:1}},dayGridMonth:{type:"dayGrid",duration:{months:1},monthMode:!0,fixedWeekCount:!0}}});class ll extends Kn{getKeyInfo(){return{allDay:{},timed:{}}}getKeysForDateSpan(e){return e.allDay?["allDay"]:["timed"]}getKeysForEventDef(e){return e.allDay?Kr(e)?["timed","allDay"]:["allDay"]:["timed"]}}const cl=on({hour:"numeric",minute:"2-digit",omitZeroMinute:!0,meridiem:"short"});function dl(e){let t=["fc-timegrid-slot","fc-timegrid-slot-label",e.isLabeled?"fc-scrollgrid-shrink":"fc-timegrid-slot-minor"];return f(Nr.Consumer,null,n=>{if(!e.isLabeled)return f("td",{className:t.join(" "),"data-time":e.isoTimeStr});let{dateEnv:r,options:i,viewApi:s}=n,o=null==i.slotLabelFormat?cl:Array.isArray(i.slotLabelFormat)?on(i.slotLabelFormat[0]):on(i.slotLabelFormat),a={level:0,time:e.time,date:r.toDate(e.date),view:s,text:r.format(e.date,o)};return f(qi,{elTag:"td",elClasses:t,elAttrs:{"data-time":e.isoTimeStr},renderProps:a,generatorName:"slotLabelContent",generator:i.slotLabelContent||ul,classNameGenerator:i.slotLabelClassNames,didMount:i.slotLabelDidMount,willUnmount:i.slotLabelWillUnmount},e=>f("div",{className:"fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"},f(e,{elTag:"div",elClasses:["fc-timegrid-slot-label-cushion","fc-scrollgrid-shrink-cushion"]})))})}function ul(e){return e.text}class hl extends Br{render(){return this.props.slatMetas.map(e=>f("tr",{key:e.key},f(dl,Object.assign({},e))))}}const fl=on({week:"short"});class gl extends zr{constructor(){super(...arguments),this.allDaySplitter=new ll,this.headerElRef={current:null},this.rootElRef={current:null},this.scrollerElRef={current:null},this.state={slatCoords:null},this.handleScrollTopRequest=e=>{let t=this.scrollerElRef.current;t&&(t.scrollTop=e)},this.renderHeadAxis=(e,t="")=>{let{options:n}=this.context,{dateProfile:r}=this.props,i=r.renderRange,s=1===Rt(i.start,i.end)?hr(this.context,i.start,"week"):{};return n.weekNumbers&&"day"===e?f(Ys,{elTag:"th",elClasses:["fc-timegrid-axis","fc-scrollgrid-shrink"],elAttrs:{"aria-hidden":!0},date:i.start,defaultFormat:fl},e=>f("div",{className:["fc-timegrid-axis-frame","fc-scrollgrid-shrink-frame","fc-timegrid-axis-frame-liquid"].join(" "),style:{height:t}},f(e,{elTag:"a",elClasses:["fc-timegrid-axis-cushion","fc-scrollgrid-shrink-cushion","fc-scrollgrid-sync-inner"],elAttrs:s}))):f("th",{"aria-hidden":!0,className:"fc-timegrid-axis"},f("div",{className:"fc-timegrid-axis-frame",style:{height:t}}))},this.renderTableRowAxis=e=>{let{options:t,viewApi:n}=this.context,r={text:t.allDayText,view:n};return f(qi,{elTag:"td",elClasses:["fc-timegrid-axis","fc-scrollgrid-shrink"],elAttrs:{"aria-hidden":!0},renderProps:r,generatorName:"allDayContent",generator:t.allDayContent||pl,classNameGenerator:t.allDayClassNames,didMount:t.allDayDidMount,willUnmount:t.allDayWillUnmount},t=>f("div",{className:["fc-timegrid-axis-frame","fc-scrollgrid-shrink-frame",null==e?" fc-timegrid-axis-frame-liquid":""].join(" "),style:{height:e}},f(t,{elTag:"span",elClasses:["fc-timegrid-axis-cushion","fc-scrollgrid-shrink-cushion","fc-scrollgrid-sync-inner"]})))},this.handleSlatCoords=e=>{this.setState({slatCoords:e})}}renderSimpleLayout(e,t,n){let{context:r,props:i}=this,s=[],o=Ns(r.options);return e&&s.push({type:"header",key:"header",isSticky:o,chunk:{elRef:this.headerElRef,tableClassName:"fc-col-header",rowContent:e}}),t&&(s.push({type:"body",key:"all-day",chunk:{content:t}}),s.push({type:"body",key:"all-day-divider",outerContent:f("tr",{role:"presentation",className:"fc-scrollgrid-section"},f("td",{className:"fc-timegrid-divider "+r.theme.getClass("tableCellShaded")}))})),s.push({type:"body",key:"body",liquid:!0,expandRows:Boolean(r.options.expandRows),chunk:{scrollerElRef:this.scrollerElRef,content:n}}),f(io,{elRef:this.rootElRef,elClasses:["fc-timegrid"],viewSpec:r.viewSpec},f(Hs,{liquid:!i.isHeightAuto&&!i.forPrint,collapsibleWidth:i.forPrint,cols:[{width:"shrink"}],sections:s}))}renderHScrollLayout(e,t,n,r,i,s,o){let a=this.context.pluginHooks.scrollGridImpl;if(!a)throw new Error("No ScrollGrid implementation");let{context:l,props:c}=this,d=!c.forPrint&&Ns(l.options),u=!c.forPrint&&Ps(l.options),h=[];e&&h.push({type:"header",key:"header",isSticky:d,syncRowHeights:!0,chunks:[{key:"axis",rowContent:e=>f("tr",{role:"presentation"},this.renderHeadAxis("day",e.rowSyncHeights[0]))},{key:"cols",elRef:this.headerElRef,tableClassName:"fc-col-header",rowContent:e}]}),t&&(h.push({type:"body",key:"all-day",syncRowHeights:!0,chunks:[{key:"axis",rowContent:e=>f("tr",{role:"presentation"},this.renderTableRowAxis(e.rowSyncHeights[0]))},{key:"cols",content:t}]}),h.push({key:"all-day-divider",type:"body",outerContent:f("tr",{role:"presentation",className:"fc-scrollgrid-section"},f("td",{colSpan:2,className:"fc-timegrid-divider "+l.theme.getClass("tableCellShaded")}))}));let g=l.options.nowIndicator;return h.push({type:"body",key:"body",liquid:!0,expandRows:Boolean(l.options.expandRows),chunks:[{key:"axis",content:e=>f("div",{className:"fc-timegrid-axis-chunk"},f("table",{"aria-hidden":!0,style:{height:e.expandRows?e.clientHeight:""}},e.tableColGroupNode,f("tbody",null,f(hl,{slatMetas:s}))),f("div",{className:"fc-timegrid-now-indicator-container"},f($i,{unit:g?"minute":"day"},e=>{let t=g&&o&&o.safeComputeTop(e);return"number"==typeof t?f(Us,{elClasses:["fc-timegrid-now-indicator-arrow"],elStyle:{top:t},isAxis:!0,date:e}):null})))},{key:"cols",scrollerElRef:this.scrollerElRef,content:n}]}),u&&h.push({key:"footer",type:"footer",isSticky:!0,chunks:[{key:"axis",content:Os},{key:"cols",content:Os}]}),f(io,{elRef:this.rootElRef,elClasses:["fc-timegrid"],viewSpec:l.viewSpec},f(a,{liquid:!c.isHeightAuto&&!c.forPrint,collapsibleWidth:!1,colGroups:[{width:"shrink",cols:[{width:"shrink"}]},{cols:[{span:r,minWidth:i}]}],sections:h}))}getAllDayMaxEventProps(){let{dayMaxEvents:e,dayMaxEventRows:t}=this.context.options;return!0!==e&&!0!==t||(e=void 0,t=5),{dayMaxEvents:e,dayMaxEventRows:t}}}function pl(e){return e.text}class ml{constructor(e,t,n){this.positions=e,this.dateProfile=t,this.slotDuration=n}safeComputeTop(e){let{dateProfile:t}=this;if(ar(t.currentRange,e)){let n=kt(e),r=e.valueOf()-n.valueOf();if(r>=ot(t.slotMinTime)&&r<ot(t.slotMaxTime))return this.computeTimeTop(tt(r))}return null}computeDateTop(e,t){return t||(t=kt(e)),this.computeTimeTop(tt(e.valueOf()-t.valueOf()))}computeTimeTop(e){let t,n,{positions:r,dateProfile:i}=this,s=r.els.length,o=(e.milliseconds-ot(i.slotMinTime))/ot(this.slotDuration);return o=Math.max(0,o),o=Math.min(s,o),t=Math.floor(o),t=Math.min(t,s-1),n=o-t,r.tops[t]+r.getHeight(t)*n}}class vl extends Br{render(){let{props:e,context:t}=this,{options:n}=t,{slatElRefs:r}=e;return f("tbody",null,e.slatMetas.map((i,s)=>{let o={time:i.time,date:t.dateEnv.toDate(i.date),view:t.viewApi};return f("tr",{key:i.key,ref:r.createRef(i.key)},e.axis&&f(dl,Object.assign({},i)),f(qi,{elTag:"td",elClasses:["fc-timegrid-slot","fc-timegrid-slot-lane",!i.isLabeled&&"fc-timegrid-slot-minor"],elAttrs:{"data-time":i.isoTimeStr},renderProps:o,generatorName:"slotLaneContent",generator:n.slotLaneContent,classNameGenerator:n.slotLaneClassNames,didMount:n.slotLaneDidMount,willUnmount:n.slotLaneWillUnmount}))}))}}class bl extends Br{constructor(){super(...arguments),this.rootElRef={current:null},this.slatElRefs=new Ds}render(){let{props:e,context:t}=this;return f("div",{ref:this.rootElRef,className:"fc-timegrid-slots"},f("table",{"aria-hidden":!0,className:t.theme.getClass("table"),style:{minWidth:e.tableMinWidth,width:e.clientWidth,height:e.minHeight}},e.tableColGroupNode,f(vl,{slatElRefs:this.slatElRefs,axis:e.axis,slatMetas:e.slatMetas})))}componentDidMount(){this.updateSizing()}componentDidUpdate(){this.updateSizing()}componentWillUnmount(){this.props.onCoords&&this.props.onCoords(null)}updateSizing(){let{context:e,props:t}=this;if(t.onCoords&&null!==t.clientWidth){this.rootElRef.current.offsetHeight&&t.onCoords(new ml(new wr(this.rootElRef.current,(n=this.slatElRefs.currentMap,t.slatMetas.map(e=>n[e.key])),!1,!0),this.props.dateProfile,e.options.slotDuration))}var n}}function yl(e,t){let n,r=[];for(n=0;n<t;n+=1)r.push([]);if(e)for(n=0;n<e.length;n+=1)r[e[n].col].push(e[n]);return r}function El(e,t){let n=[];if(e){for(let r=0;r<t;r+=1)n[r]={affectedInstances:e.affectedInstances,isEvent:e.isEvent,segs:[]};for(let t of e.segs)n[t.col].segs.push(t)}else for(let e=0;e<t;e+=1)n[e]=null;return n}class Al extends Br{render(){let{props:e}=this;return f($s,{elClasses:["fc-timegrid-more-link"],elStyle:{top:e.top,bottom:e.bottom},allDayDate:null,moreCnt:e.hiddenSegs.length,allSegs:e.hiddenSegs,hiddenSegs:e.hiddenSegs,extraDateSpan:e.extraDateSpan,dateProfile:e.dateProfile,todayRange:e.todayRange,popoverContent:()=>Il(e.hiddenSegs,e),defaultGenerator:Dl},e=>f(e,{elTag:"div",elClasses:["fc-timegrid-more-link-inner","fc-sticky"]}))}}function Dl(e){return e.shortText}function Sl(e,t,n){let r=new Ci;null!=t&&(r.strictOrder=t),null!=n&&(r.maxStackCnt=n);let i=_i(r.addSegs(e)),s=function(e){const{entriesByLevel:t}=e,n=xl((e,t)=>e+":"+t,(r,i)=>{let s=wl(function(e,t,n){let{levelCoords:r,entriesByLevel:i}=e,s=i[t][n],o=r[t]+s.thickness,a=r.length,l=t;for(;l<a&&r[l]<o;l+=1);for(;l<a;l+=1){let e,t=i[l],n=Mi(t,s.span.start,Ri),r=n[0]+n[1],o=r;for(;(e=t[o])&&e.span.start<s.span.end;)o+=1;if(r<o)return{level:l,lateralStart:r,lateralEnd:o}}return null}(e,r,i),n),o=t[r][i];return[Object.assign(Object.assign({},o),{nextLevelNodes:s[0]}),o.thickness+s[1]]});return wl(t.length?{level:0,lateralStart:0,lateralEnd:t[0].length}:null,n)[0]}(r);return s=function(e,t){const n=xl((e,t,n)=>xi(e),(e,r,i)=>{let s,{nextLevelNodes:o,thickness:a}=e,l=a+i,c=a/l,d=[];if(o.length)for(let e of o)if(void 0===s){let t=n(e,r,l);s=t[0],d.push(t[1])}else{let t=n(e,s,0);d.push(t[1])}else s=t;let u=(s-r)*c;return[s-u,Object.assign(Object.assign({},e),{thickness:u,nextLevelNodes:d})]});return e.map(e=>n(e,0,0)[1])}(s,1),{segRects:function(e){let t=[];const n=xl((e,t,n)=>xi(e),(e,n,i)=>{let s=Object.assign(Object.assign({},e),{levelCoord:n,stackDepth:i,stackForward:0});return t.push(s),s.stackForward=r(e.nextLevelNodes,n+e.thickness,i+1)+1});function r(e,t,r){let i=0;for(let s of e)i=Math.max(n(s,t,r),i);return i}return r(e,0,0),t}(s),hiddenGroups:i}}function wl(e,t){if(!e)return[[],0];let{level:n,lateralStart:r,lateralEnd:i}=e,s=r,o=[];for(;s<i;)o.push(t(n,s)),s+=1;return o.sort(Cl),[o.map(Rl),o[0][1]]}function Cl(e,t){return t[1]-e[1]}function Rl(e){return e[0]}function xl(e,t){const n={};return(...r)=>{let i=e(...r);return i in n?n[i]:n[i]=t(...r)}}function _l(e,t,n=null,r=0){let i=[];if(n)for(let s=0;s<e.length;s+=1){let o=e[s],a=n.computeDateTop(o.start,t),l=Math.max(a+(r||0),n.computeDateTop(o.end,t));i.push({start:Math.round(a),end:Math.round(l)})}return i}const Tl=on({hour:"numeric",minute:"2-digit",meridiem:!1});class kl extends Br{render(){return f(js,Object.assign({},this.props,{elClasses:["fc-timegrid-event","fc-v-event",this.props.isShort&&"fc-timegrid-event-short"],defaultTimeFormat:Tl}))}}class Ml extends Br{constructor(){super(...arguments),this.sortEventSegs=Vt(ii)}render(){let{props:e,context:t}=this,{options:n}=t,r=n.selectMirror,i=e.eventDrag&&e.eventDrag.segs||e.eventResize&&e.eventResize.segs||r&&e.dateSelectionSegs||[],s=e.eventDrag&&e.eventDrag.affectedInstances||e.eventResize&&e.eventResize.affectedInstances||{},o=this.sortEventSegs(e.fgEventSegs,n.eventOrder);return f(Ws,{elTag:"td",elRef:e.elRef,elClasses:["fc-timegrid-col",...e.extraClassNames||[]],elAttrs:Object.assign({role:"gridcell"},e.extraDataAttrs),date:e.date,dateProfile:e.dateProfile,todayRange:e.todayRange,extraRenderProps:e.extraRenderProps},t=>f("div",{className:"fc-timegrid-col-frame"},f("div",{className:"fc-timegrid-col-bg"},this.renderFillSegs(e.businessHourSegs,"non-business"),this.renderFillSegs(e.bgEventSegs,"bg-event"),this.renderFillSegs(e.dateSelectionSegs,"highlight")),f("div",{className:"fc-timegrid-col-events"},this.renderFgSegs(o,s,!1,!1,!1)),f("div",{className:"fc-timegrid-col-events"},this.renderFgSegs(i,{},Boolean(e.eventDrag),Boolean(e.eventResize),Boolean(r))),f("div",{className:"fc-timegrid-now-indicator-container"},this.renderNowIndicator(e.nowIndicatorSegs)),Fs(n)&&f(t,{elTag:"div",elClasses:["fc-timegrid-col-misc"]})))}renderFgSegs(e,t,n,r,i){let{props:s}=this;return s.forPrint?Il(e,s):this.renderPositionedFgSegs(e,t,n,r,i)}renderPositionedFgSegs(e,t,n,r,i){let{eventMaxStack:s,eventShortHeight:o,eventOrderStrict:a,eventMinHeight:l}=this.context.options,{date:c,slatCoords:d,eventSelection:u,todayRange:h,nowDate:g}=this.props,m=n||r||i,v=_l(e,c,d,l),{segPlacements:b,hiddenGroups:y}=function(e,t,n,r){let i=[],s=[];for(let n=0;n<e.length;n+=1){let r=t[n];r?i.push({index:n,thickness:1,span:r}):s.push(e[n])}let{segRects:o,hiddenGroups:a}=Sl(i,n,r),l=[];for(let t of o)l.push({seg:e[t.index],rect:t});for(let e of s)l.push({seg:e,rect:null});return{segPlacements:l,hiddenGroups:a}}(e,v,a,s);return f(p,null,this.renderHiddenGroups(y,e),b.map(e=>{let{seg:s,rect:a}=e,l=s.eventRange.instance.instanceId,c=m||Boolean(!t[l]&&a),d=Ol(a&&a.span),p=!m&&a?this.computeSegHStyle(a):{left:0,right:0},v=Boolean(a)&&a.stackForward>0,b=Boolean(a)&&a.span.end-a.span.start<o;return f("div",{className:"fc-timegrid-event-harness"+(v?" fc-timegrid-event-harness-inset":""),key:l,style:Object.assign(Object.assign({visibility:c?"":"hidden"},d),p)},f(kl,Object.assign({seg:s,isDragging:n,isResizing:r,isDateSelecting:i,isSelected:l===u,isShort:b},di(s,h,g))))}))}renderHiddenGroups(e,t){let{extraDateSpan:n,dateProfile:r,todayRange:i,nowDate:s,eventSelection:o,eventDrag:a,eventResize:l}=this.props;return f(p,null,e.map(e=>{let c=Ol(e.span),d=(u=e.entries,h=t,u.map(e=>h[e.index]));var u,h;return f(Al,{key:zt(to(d)),hiddenSegs:d,top:c.top,bottom:c.bottom,extraDateSpan:n,dateProfile:r,todayRange:i,nowDate:s,eventSelection:o,eventDrag:a,eventResize:l})}))}renderFillSegs(e,t){let{props:n,context:r}=this,i=_l(e,n.date,n.slatCoords,r.options.eventMinHeight).map((r,i)=>{let s=e[i];return f("div",{key:hi(s.eventRange),className:"fc-timegrid-bg-harness",style:Ol(r)},"bg-event"===t?f(Gs,Object.assign({seg:s},di(s,n.todayRange,n.nowDate))):qs(t))});return f(p,null,i)}renderNowIndicator(e){let{slatCoords:t,date:n}=this.props;return t?e.map((e,r)=>f(Us,{key:r,elClasses:["fc-timegrid-now-indicator-line"],elStyle:{top:t.computeDateTop(e.start,n)},isAxis:!1,date:n})):null}computeSegHStyle(e){let t,n,{isRtl:r,options:i}=this.context,s=i.slotEventOverlap,o=e.levelCoord,a=e.levelCoord+e.thickness;s&&(a=Math.min(1,o+2*(a-o))),r?(t=1-a,n=o):(t=o,n=1-a);let l={zIndex:e.stackDepth+1,left:100*t+"%",right:100*n+"%"};return s&&!e.stackForward&&(l[r?"marginLeft":"marginRight"]=20),l}}function Il(e,{todayRange:t,nowDate:n,eventSelection:r,eventDrag:i,eventResize:s}){let o=(i?i.affectedInstances:null)||(s?s.affectedInstances:null)||{};return f(p,null,e.map(e=>{let i=e.eventRange.instance.instanceId;return f("div",{key:i,style:{visibility:o[i]?"hidden":""}},f(kl,Object.assign({seg:e,isDragging:!1,isResizing:!1,isDateSelecting:!1,isSelected:i===r,isShort:!1},di(e,t,n))))}))}function Ol(e){return e?{top:e.start,bottom:-e.end}:{top:"",bottom:""}}class Nl extends Br{constructor(){super(...arguments),this.splitFgEventSegs=Vt(yl),this.splitBgEventSegs=Vt(yl),this.splitBusinessHourSegs=Vt(yl),this.splitNowIndicatorSegs=Vt(yl),this.splitDateSelectionSegs=Vt(yl),this.splitEventDrag=Vt(El),this.splitEventResize=Vt(El),this.rootElRef={current:null},this.cellElRefs=new Ds}render(){let{props:e,context:t}=this,n=t.options.nowIndicator&&e.slatCoords&&e.slatCoords.safeComputeTop(e.nowDate),r=e.cells.length,i=this.splitFgEventSegs(e.fgEventSegs,r),s=this.splitBgEventSegs(e.bgEventSegs,r),o=this.splitBusinessHourSegs(e.businessHourSegs,r),a=this.splitNowIndicatorSegs(e.nowIndicatorSegs,r),l=this.splitDateSelectionSegs(e.dateSelectionSegs,r),c=this.splitEventDrag(e.eventDrag,r),d=this.splitEventResize(e.eventResize,r);return f("div",{className:"fc-timegrid-cols",ref:this.rootElRef},f("table",{role:"presentation",style:{minWidth:e.tableMinWidth,width:e.clientWidth}},e.tableColGroupNode,f("tbody",{role:"presentation"},f("tr",{role:"row"},e.axis&&f("td",{"aria-hidden":!0,className:"fc-timegrid-col fc-timegrid-axis"},f("div",{className:"fc-timegrid-col-frame"},f("div",{className:"fc-timegrid-now-indicator-container"},"number"==typeof n&&f(Us,{elClasses:["fc-timegrid-now-indicator-arrow"],elStyle:{top:n},isAxis:!0,date:e.nowDate})))),e.cells.map((t,n)=>f(Ml,{key:t.key,elRef:this.cellElRefs.createRef(t.key),dateProfile:e.dateProfile,date:t.date,nowDate:e.nowDate,todayRange:e.todayRange,extraRenderProps:t.extraRenderProps,extraDataAttrs:t.extraDataAttrs,extraClassNames:t.extraClassNames,extraDateSpan:t.extraDateSpan,fgEventSegs:i[n],bgEventSegs:s[n],businessHourSegs:o[n],nowIndicatorSegs:a[n],dateSelectionSegs:l[n],eventDrag:c[n],eventResize:d[n],slatCoords:e.slatCoords,eventSelection:e.eventSelection,forPrint:e.forPrint}))))))}componentDidMount(){this.updateCoords()}componentDidUpdate(){this.updateCoords()}updateCoords(){let{props:e}=this;var t;e.onColCoords&&null!==e.clientWidth&&e.onColCoords(new wr(this.rootElRef.current,(t=this.cellElRefs.currentMap,e.cells.map(e=>t[e.key])),!0,!1))}}class Pl extends zr{constructor(){super(...arguments),this.processSlotOptions=Vt(Hl),this.state={slatCoords:null},this.handleRootEl=e=>{e?this.context.registerInteractiveComponent(this,{el:e,isHitComboAllowed:this.props.isHitComboAllowed}):this.context.unregisterInteractiveComponent(this)},this.handleScrollRequest=e=>{let{onScrollTopRequest:t}=this.props,{slatCoords:n}=this.state;if(t&&n){if(e.time){let r=n.computeTimeTop(e.time);r=Math.ceil(r),r&&(r+=1),t(r)}return!0}return!1},this.handleColCoords=e=>{this.colCoords=e},this.handleSlatCoords=e=>{this.setState({slatCoords:e}),this.props.onSlatCoords&&this.props.onSlatCoords(e)}}render(){let{props:e,state:t}=this;return f("div",{className:"fc-timegrid-body",ref:this.handleRootEl,style:{width:e.clientWidth,minWidth:e.tableMinWidth}},f(bl,{axis:e.axis,dateProfile:e.dateProfile,slatMetas:e.slatMetas,clientWidth:e.clientWidth,minHeight:e.expandRows?e.clientHeight:"",tableMinWidth:e.tableMinWidth,tableColGroupNode:e.axis?e.tableColGroupNode:null,onCoords:this.handleSlatCoords}),f(Nl,{cells:e.cells,axis:e.axis,dateProfile:e.dateProfile,businessHourSegs:e.businessHourSegs,bgEventSegs:e.bgEventSegs,fgEventSegs:e.fgEventSegs,dateSelectionSegs:e.dateSelectionSegs,eventSelection:e.eventSelection,eventDrag:e.eventDrag,eventResize:e.eventResize,todayRange:e.todayRange,nowDate:e.nowDate,nowIndicatorSegs:e.nowIndicatorSegs,clientWidth:e.clientWidth,tableMinWidth:e.tableMinWidth,tableColGroupNode:e.tableColGroupNode,slatCoords:t.slatCoords,onColCoords:this.handleColCoords,forPrint:e.forPrint}))}componentDidMount(){this.scrollResponder=this.context.createScrollResponder(this.handleScrollRequest)}componentDidUpdate(e){this.scrollResponder.update(e.dateProfile!==this.props.dateProfile)}componentWillUnmount(){this.scrollResponder.detach()}queryHit(e,t){let{dateEnv:n,options:r}=this.context,{colCoords:i}=this,{dateProfile:s}=this.props,{slatCoords:o}=this.state,{snapDuration:a,snapsPerSlot:l}=this.processSlotOptions(this.props.slotDuration,r.snapDuration),c=i.leftToIndex(e),d=o.positions.topToIndex(t);if(null!=c&&null!=d){let e=this.props.cells[c],r=o.positions.tops[d],u=o.positions.getHeight(d),h=(t-r)/u,f=d*l+Math.floor(h*l),g=this.props.cells[c].date,p=rt(s.slotMinTime,it(a,f)),m=n.add(g,p),v=n.add(m,a);return{dateProfile:s,dateSpan:Object.assign({range:{start:m,end:v},allDay:!1},e.extraDateSpan),dayEl:i.els[c],rect:{left:i.lefts[c],right:i.rights[c],top:r,bottom:r+u},layer:0}}return null}}function Hl(e,t){let n=t||e,r=at(e,n);return null===r&&(n=e,r=1),{snapDuration:n,snapsPerSlot:r}}class Bl extends is{sliceRange(e,t){let n=[];for(let r=0;r<t.length;r+=1){let i=rr(e,t[r]);i&&n.push({start:i.start,end:i.end,isStart:i.start.valueOf()===e.start.valueOf(),isEnd:i.end.valueOf()===e.end.valueOf(),col:r})}return n}}class jl extends zr{constructor(){super(...arguments),this.buildDayRanges=Vt(zl),this.slicer=new Bl,this.timeColsRef={current:null}}render(){let{props:e,context:t}=this,{dateProfile:n,dayTableModel:r}=e,i=t.options.nowIndicator,s=this.buildDayRanges(r,n,t.dateEnv);return f($i,{unit:i?"minute":"day"},(o,a)=>f(Pl,Object.assign({ref:this.timeColsRef},this.slicer.sliceProps(e,n,null,t,s),{forPrint:e.forPrint,axis:e.axis,dateProfile:n,slatMetas:e.slatMetas,slotDuration:e.slotDuration,cells:r.cells[0],tableColGroupNode:e.tableColGroupNode,tableMinWidth:e.tableMinWidth,clientWidth:e.clientWidth,clientHeight:e.clientHeight,expandRows:e.expandRows,nowDate:o,nowIndicatorSegs:i&&this.slicer.sliceNowDate(o,t,s),todayRange:a,onScrollTopRequest:e.onScrollTopRequest,onSlatCoords:e.onSlatCoords})))}}function zl(e,t,n){let r=[];for(let i of e.headerDates)r.push({start:n.add(i,t.slotMinTime),end:n.add(i,t.slotMaxTime)});return r}const Ul=[{hours:1},{minutes:30},{minutes:15},{seconds:30},{seconds:15}];function Ll(e,t,n,r,i){let s=new Date(0),o=e,a=tt(0),l=n||function(e){let t,n,r;for(t=Ul.length-1;t>=0;t-=1)if(n=tt(Ul[t]),r=at(n,e),null!==r&&r>1)return n;return e}(r),c=[];for(;ot(o)<ot(t);){let e=i.add(s,o),t=null!==at(a,l);c.push({date:e,time:o,key:e.toISOString(),isoTimeStr:Lt(e),isLabeled:t}),o=rt(o,r),a=rt(a,r)}return c}function Wl(e,t){let n=new ns(e.renderRange,t);return new rs(n,!1)}const Fl={allDaySlot:Boolean};oo('.fc-v-event{background-color:var(--fc-event-bg-color);border:1px solid var(--fc-event-border-color);display:block}.fc-v-event .fc-event-main{color:var(--fc-event-text-color);height:100%}.fc-v-event .fc-event-main-frame{display:flex;flex-direction:column;height:100%}.fc-v-event .fc-event-time{flex-grow:0;flex-shrink:0;max-height:100%;overflow:hidden}.fc-v-event .fc-event-title-container{flex-grow:1;flex-shrink:1;min-height:0}.fc-v-event .fc-event-title{bottom:0;max-height:100%;overflow:hidden;top:0}.fc-v-event:not(.fc-event-start){border-top-left-radius:0;border-top-right-radius:0;border-top-width:0}.fc-v-event:not(.fc-event-end){border-bottom-left-radius:0;border-bottom-right-radius:0;border-bottom-width:0}.fc-v-event.fc-event-selected:before{left:-10px;right:-10px}.fc-v-event .fc-event-resizer-start{cursor:n-resize}.fc-v-event .fc-event-resizer-end{cursor:s-resize}.fc-v-event:not(.fc-event-selected) .fc-event-resizer{height:var(--fc-event-resizer-thickness);left:0;right:0}.fc-v-event:not(.fc-event-selected) .fc-event-resizer-start{top:calc(var(--fc-event-resizer-thickness)/-2)}.fc-v-event:not(.fc-event-selected) .fc-event-resizer-end{bottom:calc(var(--fc-event-resizer-thickness)/-2)}.fc-v-event.fc-event-selected .fc-event-resizer{left:50%;margin-left:calc(var(--fc-event-resizer-dot-total-width)/-2)}.fc-v-event.fc-event-selected .fc-event-resizer-start{top:calc(var(--fc-event-resizer-dot-total-width)/-2)}.fc-v-event.fc-event-selected .fc-event-resizer-end{bottom:calc(var(--fc-event-resizer-dot-total-width)/-2)}.fc .fc-timegrid .fc-daygrid-body{z-index:2}.fc .fc-timegrid-divider{padding:0 0 2px}.fc .fc-timegrid-body{min-height:100%;position:relative;z-index:1}.fc .fc-timegrid-axis-chunk{position:relative}.fc .fc-timegrid-axis-chunk>table,.fc .fc-timegrid-slots{position:relative;z-index:1}.fc .fc-timegrid-slot{border-bottom:0;height:1.5em}.fc .fc-timegrid-slot:empty:before{content:"\\00a0"}.fc .fc-timegrid-slot-minor{border-top-style:dotted}.fc .fc-timegrid-slot-label-cushion{display:inline-block;white-space:nowrap}.fc .fc-timegrid-slot-label{vertical-align:middle}.fc .fc-timegrid-axis-cushion,.fc .fc-timegrid-slot-label-cushion{padding:0 4px}.fc .fc-timegrid-axis-frame-liquid{height:100%}.fc .fc-timegrid-axis-frame{align-items:center;display:flex;justify-content:flex-end;overflow:hidden}.fc .fc-timegrid-axis-cushion{flex-shrink:0;max-width:60px}.fc-direction-ltr .fc-timegrid-slot-label-frame{text-align:right}.fc-direction-rtl .fc-timegrid-slot-label-frame{text-align:left}.fc-liquid-hack .fc-timegrid-axis-frame-liquid{bottom:0;height:auto;left:0;position:absolute;right:0;top:0}.fc .fc-timegrid-col.fc-day-today{background-color:var(--fc-today-bg-color)}.fc .fc-timegrid-col-frame{min-height:100%;position:relative}.fc-media-screen.fc-liquid-hack .fc-timegrid-col-frame{bottom:0;height:auto;left:0;position:absolute;right:0;top:0}.fc-media-screen .fc-timegrid-cols{bottom:0;left:0;position:absolute;right:0;top:0}.fc-media-screen .fc-timegrid-cols>table{height:100%}.fc-media-screen .fc-timegrid-col-bg,.fc-media-screen .fc-timegrid-col-events,.fc-media-screen .fc-timegrid-now-indicator-container{left:0;position:absolute;right:0;top:0}.fc .fc-timegrid-col-bg{z-index:2}.fc .fc-timegrid-col-bg .fc-non-business{z-index:1}.fc .fc-timegrid-col-bg .fc-bg-event{z-index:2}.fc .fc-timegrid-col-bg .fc-highlight{z-index:3}.fc .fc-timegrid-bg-harness{left:0;position:absolute;right:0}.fc .fc-timegrid-col-events{z-index:3}.fc .fc-timegrid-now-indicator-container{bottom:0;overflow:hidden}.fc-direction-ltr .fc-timegrid-col-events{margin:0 2.5% 0 2px}.fc-direction-rtl .fc-timegrid-col-events{margin:0 2px 0 2.5%}.fc-timegrid-event-harness{position:absolute}.fc-timegrid-event-harness>.fc-timegrid-event{bottom:0;left:0;position:absolute;right:0;top:0}.fc-timegrid-event-harness-inset .fc-timegrid-event,.fc-timegrid-event.fc-event-mirror,.fc-timegrid-more-link{box-shadow:0 0 0 1px var(--fc-page-bg-color)}.fc-timegrid-event,.fc-timegrid-more-link{border-radius:3px;font-size:var(--fc-small-font-size)}.fc-timegrid-event{margin-bottom:1px}.fc-timegrid-event .fc-event-main{padding:1px 1px 0}.fc-timegrid-event .fc-event-time{font-size:var(--fc-small-font-size);margin-bottom:1px;white-space:nowrap}.fc-timegrid-event-short .fc-event-main-frame{flex-direction:row;overflow:hidden}.fc-timegrid-event-short .fc-event-time:after{content:"\\00a0-\\00a0"}.fc-timegrid-event-short .fc-event-title{font-size:var(--fc-small-font-size)}.fc-timegrid-more-link{background:var(--fc-more-link-bg-color);color:var(--fc-more-link-text-color);cursor:pointer;margin-bottom:1px;position:absolute;z-index:9999}.fc-timegrid-more-link-inner{padding:3px 2px;top:0}.fc-direction-ltr .fc-timegrid-more-link{right:0}.fc-direction-rtl .fc-timegrid-more-link{left:0}.fc .fc-timegrid-now-indicator-line{border-color:var(--fc-now-indicator-color);border-style:solid;border-width:1px 0 0;left:0;position:absolute;right:0;z-index:4}.fc .fc-timegrid-now-indicator-arrow{border-color:var(--fc-now-indicator-color);border-style:solid;margin-top:-5px;position:absolute;z-index:4}.fc-direction-ltr .fc-timegrid-now-indicator-arrow{border-bottom-color:transparent;border-top-color:transparent;border-width:5px 0 5px 6px;left:0}.fc-direction-rtl .fc-timegrid-now-indicator-arrow{border-bottom-color:transparent;border-top-color:transparent;border-width:5px 6px 5px 0;right:0}');var Vl=yo({name:"@fullcalendar/timegrid",initialView:"timeGridWeek",optionRefiners:Fl,views:{timeGrid:{component:class extends gl{constructor(){super(...arguments),this.buildTimeColsModel=Vt(Wl),this.buildSlatMetas=Vt(Ll)}render(){let{options:e,dateEnv:t,dateProfileGenerator:n}=this.context,{props:r}=this,{dateProfile:i}=r,s=this.buildTimeColsModel(i,n),o=this.allDaySplitter.splitProps(r),a=this.buildSlatMetas(i.slotMinTime,i.slotMaxTime,e.slotLabelInterval,e.slotDuration,t),{dayMinWidth:l}=e,c=!l,d=l,u=e.dayHeaders&&f(es,{dates:s.headerDates,dateProfile:i,datesRepDistinctDays:!0,renderIntro:c?this.renderHeadAxis:null}),h=!1!==e.allDaySlot&&(t=>f(sl,Object.assign({},o.allDay,{dateProfile:i,dayTableModel:s,nextDayThreshold:e.nextDayThreshold,tableMinWidth:t.tableMinWidth,colGroupNode:t.tableColGroupNode,renderRowIntro:c?this.renderTableRowAxis:null,showWeekNumbers:!1,expandRows:!1,headerAlignElRef:this.headerElRef,clientWidth:t.clientWidth,clientHeight:t.clientHeight,forPrint:r.forPrint},this.getAllDayMaxEventProps()))),g=t=>f(jl,Object.assign({},o.timed,{dayTableModel:s,dateProfile:i,axis:c,slotDuration:e.slotDuration,slatMetas:a,forPrint:r.forPrint,tableColGroupNode:t.tableColGroupNode,tableMinWidth:t.tableMinWidth,clientWidth:t.clientWidth,clientHeight:t.clientHeight,onSlatCoords:this.handleSlatCoords,expandRows:t.expandRows,onScrollTopRequest:this.handleScrollTopRequest}));return d?this.renderHScrollLayout(u,h,g,s.colCnt,l,a,this.state.slatCoords):this.renderSimpleLayout(u,h,g)}},usesMinMaxTime:!0,allDaySlot:!0,slotDuration:"00:30:00",slotEventOverlap:!0},timeGridDay:{type:"timeGrid",duration:{days:1}},timeGridWeek:{type:"timeGrid",duration:{weeks:1}}}});class Gl extends Br{constructor(){super(...arguments),this.state={textId:Te()}}render(){let{theme:e,dateEnv:t,options:n,viewApi:r}=this.context,{cellId:i,dayDate:s,todayRange:o}=this.props,{textId:a}=this.state,l=lr(s,o),c=n.listDayFormat?t.format(s,n.listDayFormat):"",d=n.listDaySideFormat?t.format(s,n.listDaySideFormat):"",u=Object.assign({date:t.toDate(s),view:r,textId:a,text:c,sideText:d,navLinkAttrs:hr(this.context,s),sideNavLinkAttrs:hr(this.context,s,"day",!1)},l);return f(qi,{elTag:"tr",elClasses:["fc-list-day",...cr(l,e)],elAttrs:{"data-date":Ut(s)},renderProps:u,generatorName:"dayHeaderContent",generator:n.dayHeaderContent||Ql,classNameGenerator:n.dayHeaderClassNames,didMount:n.dayHeaderDidMount,willUnmount:n.dayHeaderWillUnmount},t=>f("th",{scope:"colgroup",colSpan:3,id:i,"aria-labelledby":a},f(t,{elTag:"div",elClasses:["fc-list-day-cushion",e.getClass("tableCellShaded")]})))}}function Ql(e){return f(p,null,e.text&&f("a",Object.assign({id:e.textId,className:"fc-list-day-text"},e.navLinkAttrs),e.text),e.sideText&&f("a",Object.assign({"aria-hidden":!0,className:"fc-list-day-side-text"},e.sideNavLinkAttrs),e.sideText))}const ql=on({hour:"numeric",minute:"2-digit",meridiem:"short"});class Yl extends Br{render(){let{props:e,context:t}=this,{options:n}=t,{seg:r,timeHeaderId:i,eventHeaderId:s,dateHeaderId:o}=e,a=n.eventTimeFormat||ql;return f(Bs,Object.assign({},e,{elTag:"tr",elClasses:["fc-list-event",r.eventRange.def.url&&"fc-event-forced-url"],defaultGenerator:()=>function(e,t){let n=fi(e,t);return f("a",Object.assign({},n),e.eventRange.def.title)}(r,t),seg:r,timeText:"",disableDragging:!0,disableResizing:!0}),(e,n)=>f(p,null,function(e,t,n,r,i){let{options:s}=n;if(!1!==s.displayEventTime){let o,a=e.eventRange.def,l=e.eventRange.instance,c=!1;if(a.allDay?c=!0:Fn(e.eventRange.range)?e.isStart?o=ci(e,t,n,null,null,l.range.start,e.end):e.isEnd?o=ci(e,t,n,null,null,e.start,l.range.end):c=!0:o=ci(e,t,n),c){let e={text:n.options.allDayText,view:n.viewApi};return f(qi,{elTag:"td",elClasses:["fc-list-event-time"],elAttrs:{headers:`${r} ${i}`},renderProps:e,generatorName:"allDayContent",generator:s.allDayContent||Zl,classNameGenerator:s.allDayClassNames,didMount:s.allDayDidMount,willUnmount:s.allDayWillUnmount})}return f("td",{className:"fc-list-event-time"},o)}return null}(r,a,t,i,o),f("td",{"aria-hidden":!0,className:"fc-list-event-graphic"},f("span",{className:"fc-list-event-dot",style:{borderColor:n.borderColor||n.backgroundColor}})),f(e,{elTag:"td",elClasses:["fc-list-event-title"],elAttrs:{headers:`${s} ${o}`}})))}}function Zl(e){return e.text}function Xl(e){return e.text}function Jl(e){let t=kt(e.renderRange.start),n=e.renderRange.end,r=[],i=[];for(;t<n;)r.push(t),i.push({start:t,end:St(t,1)}),t=St(t,1);return{dayDates:r,dayRanges:i}}const $l={listDayFormat:Kl,listDaySideFormat:Kl,noEventsClassNames:mn,noEventsContent:mn,noEventsDidMount:mn,noEventsWillUnmount:mn};function Kl(e){return!1===e?null:on(e)}oo(':root{--fc-list-event-dot-width:10px;--fc-list-event-hover-bg-color:#f5f5f5}.fc-theme-standard .fc-list{border:1px solid var(--fc-border-color)}.fc .fc-list-empty{align-items:center;background-color:var(--fc-neutral-bg-color);display:flex;height:100%;justify-content:center}.fc .fc-list-empty-cushion{margin:5em 0}.fc .fc-list-table{border-style:hidden;width:100%}.fc .fc-list-table tr>*{border-left:0;border-right:0}.fc .fc-list-sticky .fc-list-day>*{background:var(--fc-page-bg-color);position:sticky;top:0}.fc .fc-list-table thead{left:-10000px;position:absolute}.fc .fc-list-table tbody>tr:first-child th{border-top:0}.fc .fc-list-table th{padding:0}.fc .fc-list-day-cushion,.fc .fc-list-table td{padding:8px 14px}.fc .fc-list-day-cushion:after{clear:both;content:"";display:table}.fc-theme-standard .fc-list-day-cushion{background-color:var(--fc-neutral-bg-color)}.fc-direction-ltr .fc-list-day-text,.fc-direction-rtl .fc-list-day-side-text{float:left}.fc-direction-ltr .fc-list-day-side-text,.fc-direction-rtl .fc-list-day-text{float:right}.fc-direction-ltr .fc-list-table .fc-list-event-graphic{padding-right:0}.fc-direction-rtl .fc-list-table .fc-list-event-graphic{padding-left:0}.fc .fc-list-event.fc-event-forced-url{cursor:pointer}.fc .fc-list-event:hover td{background-color:var(--fc-list-event-hover-bg-color)}.fc .fc-list-event-graphic,.fc .fc-list-event-time{white-space:nowrap;width:1px}.fc .fc-list-event-dot{border:calc(var(--fc-list-event-dot-width)/2) solid var(--fc-event-border-color);border-radius:calc(var(--fc-list-event-dot-width)/2);box-sizing:content-box;display:inline-block;height:0;width:0}.fc .fc-list-event-title a{color:inherit;text-decoration:none}.fc .fc-list-event.fc-event-forced-url:hover a{text-decoration:underline}');var ec=yo({name:"@fullcalendar/list",optionRefiners:$l,views:{list:{component:class extends zr{constructor(){super(...arguments),this.computeDateVars=Vt(Jl),this.eventStoreToSegs=Vt(this._eventStoreToSegs),this.state={timeHeaderId:Te(),eventHeaderId:Te(),dateHeaderIdRoot:Te()},this.setRootEl=e=>{e?this.context.registerInteractiveComponent(this,{el:e}):this.context.unregisterInteractiveComponent(this)}}render(){let{props:e,context:t}=this,{dayDates:n,dayRanges:r}=this.computeDateVars(e.dateProfile),i=this.eventStoreToSegs(e.eventStore,e.eventUiBases,r);return f(io,{elRef:this.setRootEl,elClasses:["fc-list",t.theme.getClass("table"),!1!==t.options.stickyHeaderDates?"fc-list-sticky":""],viewSpec:t.viewSpec},f(As,{liquid:!e.isHeightAuto,overflowX:e.isHeightAuto?"visible":"hidden",overflowY:e.isHeightAuto?"visible":"auto"},i.length>0?this.renderSegList(i,n):this.renderEmptyMessage()))}renderEmptyMessage(){let{options:e,viewApi:t}=this.context,n={text:e.noEventsText,view:t};return f(qi,{elTag:"div",elClasses:["fc-list-empty"],renderProps:n,generatorName:"noEventsContent",generator:e.noEventsContent||Xl,classNameGenerator:e.noEventsClassNames,didMount:e.noEventsDidMount,willUnmount:e.noEventsWillUnmount},e=>f(e,{elTag:"div",elClasses:["fc-list-empty-cushion"]}))}renderSegList(e,t){let{theme:n,options:r}=this.context,{timeHeaderId:i,eventHeaderId:s,dateHeaderIdRoot:o}=this.state,a=function(e){let t,n,r=[];for(t=0;t<e.length;t+=1)n=e[t],(r[n.dayIndex]||(r[n.dayIndex]=[])).push(n);return r}(e);return f($i,{unit:"day"},(e,l)=>{let c=[];for(let n=0;n<a.length;n+=1){let d=a[n];if(d){let a=Ut(t[n]),u=o+"-"+a;c.push(f(Gl,{key:a,cellId:u,dayDate:t[n],todayRange:l})),d=ii(d,r.eventOrder);for(let t of d)c.push(f(Yl,Object.assign({key:a+":"+t.eventRange.instance.instanceId,seg:t,isDragging:!1,isResizing:!1,isDateSelecting:!1,isSelected:!1,timeHeaderId:i,eventHeaderId:s,dateHeaderId:u},di(t,l,e))))}}return f("table",{className:"fc-list-table "+n.getClass("table")},f("thead",null,f("tr",null,f("th",{scope:"col",id:i},r.timeHint),f("th",{scope:"col","aria-hidden":!0}),f("th",{scope:"col",id:s},r.eventHint))),f("tbody",null,c))})}_eventStoreToSegs(e,t,n){return this.eventRangesToSegs($r(e,t,this.props.dateProfile.activeRange,this.context.options.nextDayThreshold).fg,n)}eventRangesToSegs(e,t){let n=[];for(let r of e)n.push(...this.eventRangeToSegs(r,t));return n}eventRangeToSegs(e,t){let n,r,i,{dateEnv:s}=this.context,{nextDayThreshold:o}=this.context.options,a=e.range,l=e.def.allDay,c=[];for(n=0;n<t.length;n+=1)if(r=rr(a,t[n]),r&&(i={component:this,eventRange:e,start:r.start,end:r.end,isStart:e.isStart&&r.start.valueOf()===a.start.valueOf(),isEnd:e.isEnd&&r.end.valueOf()===a.end.valueOf(),dayIndex:n},c.push(i),!i.isEnd&&!l&&n+1<t.length&&a.end<s.add(t[n+1].start,o))){i.end=a.end,i.isEnd=!0;break}return c}},buttonTextKey:"list",listDayFormat:{month:"long",day:"numeric",year:"numeric"}},listDay:{type:"list",duration:{days:1},listDayFormat:{weekday:"long"}},listWeek:{type:"list",duration:{weeks:1},listDayFormat:{weekday:"long"},listDaySideFormat:{month:"long",day:"numeric",year:"numeric"}},listMonth:{type:"list",duration:{month:1},listDaySideFormat:{weekday:"long"}},listYear:{type:"list",duration:{year:1},listDaySideFormat:{weekday:"long"}}}});return Qo.push(Ba,al,Vl,ec),e.Calendar=class extends uo{constructor(e,t={}){super(),this.isRendering=!1,this.isRendered=!1,this.currentClassNames=[],this.customContentRenderId=0,this.handleAction=e=>{switch(e.type){case"SET_EVENT_DRAG":case"SET_EVENT_RESIZE":this.renderRunner.tryDrain()}},this.handleData=e=>{this.currentData=e,this.renderRunner.request(e.calendarOptions.rerenderDelay)},this.handleRenderRequest=()=>{if(this.isRendering){this.isRendered=!0;let{currentData:e}=this;kr(()=>{P(f(zi,{options:e.calendarOptions,theme:e.theme,emitter:e.emitter},(t,n,r,i)=>(this.setClassNames(t),this.setHeight(n),f(Qi.Provider,{value:this.customContentRenderId},f(ua,Object.assign({isHeightAuto:r,forPrint:i},e))))),this.el)})}else this.isRendered&&(this.isRendered=!1,P(null,this.el),this.setClassNames([]),this.setHeight(""))},this.el=e,this.renderRunner=new ys(this.handleRenderRequest),new Zo({optionOverrides:t,calendarApi:this,onAction:this.handleAction,onData:this.handleData})}render(){let e=this.isRendering;e?this.customContentRenderId+=1:this.isRendering=!0,this.renderRunner.request(),e&&this.updateSize()}destroy(){this.isRendering&&(this.isRendering=!1,this.renderRunner.request())}updateSize(){kr(()=>{super.updateSize()})}batchRendering(e){this.renderRunner.pause("batchRendering"),e(),this.renderRunner.resume("batchRendering")}pauseRendering(){this.renderRunner.pause("pauseRendering")}resumeRendering(){this.renderRunner.resume("pauseRendering",!0)}resetOptions(e,t){this.currentDataManager.resetOptions(e,t)}setClassNames(e){if(!Ft(e,this.currentClassNames)){let{classList:t}=this.el;for(let e of this.currentClassNames)t.remove(e);for(let n of e)t.add(n);this.currentClassNames=e}}setHeight(e){Ce(this.el,"height",e)}},e.Draggable=class{constructor(e,t={}){this.handlePointerDown=e=>{let{dragging:t}=this,{minDistance:n,longPressDelay:r}=this.settings;t.minDistance=null!=n?n:e.isTouch?0:ln.eventDragMinDistance,t.delay=e.isTouch?null!=r?r:ln.longPressDelay:0},this.handleDragStart=e=>{e.isTouch&&this.dragging.delay&&e.subjectEl.classList.contains("fc-event")&&this.dragging.mirror.getMirrorEl().classList.add("fc-event-selected")},this.settings=t;let n=this.dragging=new Ra(e);n.touchScrollAllowed=!1,null!=t.itemSelector&&(n.pointer.selector=t.itemSelector),null!=t.appendTo&&(n.mirror.parentNode=t.appendTo),n.emitter.on("pointerdown",this.handlePointerDown),n.emitter.on("dragstart",this.handleDragStart),new Pa(n,t.eventData)}destroy(){this.dragging.destroy()}},e.Internal=ho,e.JsonRequestError=vs,e.ThirdPartyDraggable=class{constructor(e,t){let n=document;e===document||e instanceof Element?(n=e,t=t||{}):t=e||{};let r=this.dragging=new Ha(n);"string"==typeof t.itemSelector?r.pointer.selector=t.itemSelector:n===document&&(r.pointer.selector="[data-event]"),"string"==typeof t.mirrorSelector&&(r.mirrorSelector=t.mirrorSelector),new Pa(r,t.eventData)}destroy(){this.dragging.destroy()}},e.createPlugin=yo,e.formatDate=function(e,t={}){let n=ga(t),r=on(t),i=n.createMarkerMeta(e);return i?n.format(i.marker,r,{forcedTzo:i.forcedTzo}):""},e.formatRange=function(e,t,n){let r=ga("object"==typeof n&&n?n:{}),i=on(n),s=r.createMarkerMeta(e),o=r.createMarkerMeta(t);return s&&o?r.formatRange(s.marker,o.marker,i,{forcedStartTzo:s.forcedTzo,forcedEndTzo:o.forcedTzo,isEndExclusive:n.isEndExclusive,defaultSeparator:ln.defaultRangeSeparator}):""},e.globalLocales=fo,e.globalPlugins=Qo,e.sliceEvents=function(e,t){return $r(e.eventStore,e.eventUiBases,e.dateProfile.activeRange,t?e.nextDayThreshold:null).fg},e.version="6.0.3",Object.defineProperty(e,"__esModule",{value:!0}),e}({});
    </script>
    <script>
      !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t=t||self).jsVectorMap=e()}(this,(function(){"use strict";Element.prototype.matches||(Element.prototype.matches=Element.prototype.matchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector||Element.prototype.oMatchesSelector||Element.prototype.webkitMatchesSelector||function(t){for(var e=(this.document||this.ownerDocument).querySelectorAll(t),i=e.length;--i>=0&&e.item(i)!==this;);return i>-1}),Object.assign||Object.defineProperty(Object,"assign",{enumerable:!1,configurable:!0,writable:!0,value:function(t){if(null==t)throw new TypeError("Cannot convert first argument to object");for(var e=Object(t),i=1;i<arguments.length;i++){var s=arguments[i];if(null!=s){s=Object(s);for(var a=Object.keys(Object(s)),r=0,n=a.length;r<n;r++){var o=a[r],h=Object.getOwnPropertyDescriptor(s,o);void 0!==h&&h.enumerable&&(e[o]=s[o])}}}return e}});var t={},e=1,i=function(i,s,a,r){void 0===r&&(r={}),t["jvm:"+s+"::"+e++]={selector:i,handler:a},i.addEventListener(s,a,r)},s=function(e,i,s){var a=i.split(":")[1];e.removeEventListener(a,s),delete t[i]},a=function(){return t},r=function(){function t(t){return t instanceof Element?(this.selector=t,this):(this.selector=document.querySelector(t),this)}var e=t.prototype;return e.on=function(t,e,s){return void 0===s&&(s={}),i(this.selector,t,e,s),this},e.delegate=function(t,e,i){for(var s in e=e.split(" "))this.on(e[s],(function(e){var s=e.target;s.matches(t)&&i.call(s,e)}))},e.css=function(t){for(var e in t)this.selector.style[e]=t[e];return this},e.text=function(t){return t?(this.selector.textContent=t,this):this.selector.textContent},e.attr=function(t,e){return t&&e?(this.selector.setAttribute(t,e),this):this.selector.getAttribute(t)},e.addClass=function(t){return this.selector.classList?(this.selector.classList.add(t),this):(-1==this.selector.className.split(" ").indexOf(t)&&(this.selector.className+=" "+t),this)},e.append=function(t){return this.selector.appendChild(t),this},e.show=function(){this.css({display:"block"})},e.hide=function(){this.css({display:"none"})},e.height=function(){return this.selector.offsetHeight},e.width=function(){return this.selector.offsetWidth},t}(),n=function(t){return function(t){return!!t&&"object"==typeof t}(t)&&!function(t){var e=Object.prototype.toString.call(t);return"[object RegExp]"===e||"[object Date]"===e||function(t){return t.$$typeof===o}(t)}(t)};var o="function"==typeof Symbol&&Symbol.for?Symbol.for("react.element"):60103;function h(t,e){return!1!==e.clone&&e.isMergeableObject(t)?d((i=t,Array.isArray(i)?[]:{}),t,e):t;var i}function l(t,e,i){return t.concat(e).map((function(t){return h(t,i)}))}function c(t){return Object.keys(t).concat(function(t){return Object.getOwnPropertySymbols?Object.getOwnPropertySymbols(t).filter((function(e){return t.propertyIsEnumerable(e)})):[]}(t))}function u(t,e){try{return e in t}catch(t){return!1}}function p(t,e,i){var s={};return i.isMergeableObject(t)&&c(t).forEach((function(e){s[e]=h(t[e],i)})),c(e).forEach((function(a){(function(t,e){return u(t,e)&&!(Object.hasOwnProperty.call(t,e)&&Object.propertyIsEnumerable.call(t,e))})(t,a)||(u(t,a)&&i.isMergeableObject(e[a])?s[a]=function(t,e){if(!e.customMerge)return d;var i=e.customMerge(t);return"function"==typeof i?i:d}(a,i)(t[a],e[a],i):s[a]=h(e[a],i))})),s}var d=function(t,e,i){(i=i||{}).arrayMerge=i.arrayMerge||l,i.isMergeableObject=i.isMergeableObject||n,i.cloneUnlessOtherwiseSpecified=h;var s=Array.isArray(e);return s===Array.isArray(t)?s?i.arrayMerge(t,e,i):p(t,e,i):h(e,i)},f=function(t){return/\.(jpg|gif|png)$/.test(t)},m=function(t,e,i,s){void 0===s&&(s=!1);var a=document.createElement(t);return i&&(a[s?"innerHTML":"textContent"]=i),e&&(a.className=e),a},g=function(t){return new r(t)},v=function(t){return t.replace(/[\w]([A-Z])/g,(function(t){return t[0]+"-"+t[1]})).toLowerCase()},y=function(t){return"function"==typeof t},b=function(t){return"object"==typeof t},S=function(t){return Array.isArray(t)},w=function(t,e){return Object.assign(t,e)},x=function(t,e){return d(t,e)},M=function(t){return Object.keys(t)};function k(t,e){t.prototype=Object.create(e.prototype),t.prototype.constructor=t,t.__proto__=e}var _=function(){function t(t,e){this._name=t,this.node=this.createElement(t),e&&this.set(e)}var e=t.prototype;return e.createElement=function(t){return document.createElementNS("http://www.w3.org/2000/svg",t)},e.addClass=function(t){this.node.setAttribute("class",t)},e.getBBox=function(){return this.node.getBBox()},e.set=function(t,e){if(b(t))for(var i in t)this.applyAttr(i,t[i]);else this.applyAttr(t,e)},e.get=function(t){return this.style.initial[t]},e.applyAttr=function(t,e){this.node.setAttribute(v(t),e)},e.remove=function(){this.node.parentNode.removeChild(this.node)},t}(),j=function(t){function e(e,i,s){var a;return void 0===s&&(s={}),(a=t.call(this,e,i)||this).isHovered=!1,a.isSelected=!1,a.style=s,a.style.current={},a.updateStyle(),a}k(e,t);var i=e.prototype;return i.setStyle=function(t,e){var i;b(t)?w(this.style.current,t):w(this.style.current,((i={})[t]=e,i));this.updateStyle()},i.updateStyle=function(){var t={};w(t,this.style.initial),w(t,this.style.current),this.isHovered&&w(t,this.style.hover),this.isSelected&&(w(t,this.style.selected),this.isHovered&&w(t,this.style.selectedHover)),this.set(t)},e}(_),C=function(t){function e(e,i){return t.call(this,"text",e,i)||this}return k(e,t),e.prototype.applyAttr=function(e,i){"text"===e?this.node.textContent=i:t.prototype.applyAttr.call(this,e,i)},e}(j),X=function(t){function e(e,i){return t.call(this,"image",e,i)||this}return k(e,t),e.prototype.applyAttr=function(e,i){var s;"image"===e?(b(i)?(s=i.url,this.offset=i.offset||[0,0]):(s=i,this.offset=[0,0]),this.node.setAttributeNS("http://www.w3.org/1999/xlink","href",s),this.width=23,this.height=23,this.applyAttr("width",this.width),this.applyAttr("height",this.height),this.applyAttr("x",this.cx-this.width/2+this.offset[0]),this.applyAttr("y",this.cy-this.height/2+this.offset[1])):"cx"==e?(this.cx=i,this.width&&this.applyAttr("x",i-this.width/2+this.offset[0])):"cy"==e?(this.cy=i,this.height&&this.applyAttr("y",i-this.height/2+this.offset[1])):t.prototype.applyAttr.apply(this,arguments)},e}(j),Y=function(t){function e(e){var i;return(i=t.call(this,"svg")||this)._container=e,i._defsElement=new _("defs"),i._rootElement=new _("g",{id:"jvm-regions-group"}),i.node.appendChild(i._defsElement.node),i.node.appendChild(i._rootElement.node),i._container.append(i.node),i}k(e,t);var i=e.prototype;return i.setSize=function(t,e){this.node.setAttribute("width",t),this.node.setAttribute("height",e)},i.applyTransformParams=function(t,e,i){this._rootElement.node.setAttribute("transform","scale("+t+") translate("+e+", "+i+")")},i.createPath=function(t,e){var i=new j("path",t,e);return i.node.setAttribute("fill-rule","evenodd"),this.add(i)},i.createCircle=function(t,e,i){var s=new j("circle",t,e);return this.add(s,i)},i.createLine=function(t,e,i){var s=new j("line",t,e);return this.add(s,i)},i.createText=function(t,e,i){var s=new C(t,e);return this.add(s,i)},i.createImage=function(t,e,i){var s=new X(t,e);return this.add(s,i)},i.createGroup=function(t){var e=new _("g");return this.node.appendChild(e.node),t&&(e.node.id=t),e.canvas=this,e},i.add=function(t,e){return(e=e||this._rootElement).node.appendChild(t.node),t},e}(_);function O(t,e,i){var s=g(e),a=-1===s.attr("class").indexOf("jvm-region")?"marker":"region",r="region"===a?s.attr("data-code"):s.attr("data-index"),n=a+":select";return i&&(n=a+".tooltip:show"),{event:n,type:a,code:r,element:"region"===a?t.regions[r].element:t.markers[r].element,tooltipText:"region"===a?t.mapData.paths[r].name||"":t.markers[r].config.name||""}}var E=function(){function t(){}var e=t.prototype;return e.getLabelText=function(t,e){if(e){if(y(e.render)){var i=[];return this.config.marker&&i.push(this.config.marker),i.push(t),e.render.apply(this,i)}return t}},e.getLabelOffsets=function(t,e){return y(e.offsets)?e.offsets(t):S(e.offsets)?e.offsets[t]:[0,0]},e.setStyle=function(t,e){this.shape.setStyle(t,e)},e.remove=function(){this.shape.remove(),this.label&&this.label.remove()},e.hover=function(t){this._setStatus("isHovered",t)},e.select=function(t){this._setStatus("isSelected",t)},e._setStatus=function(t,e){this.shape[t]=e,this.shape.updateStyle(),this[t]=e,this.label&&(this.label[t]=e,this.label.updateStyle())},t}(),L=function(t){function e(e){var i,s=e.map,a=e.code,r=e.path,n=e.style,o=e.label,h=e.labelStyle,l=e.labelsGroup;(i=t.call(this)||this).config=arguments[0],i.canvas=s.canvas,i.map=s,i.shape=i.canvas.createPath({d:r,dataCode:a},n),i.shape.addClass("jvm-region jvm-element");var c=i.shape.getBBox(),u=i.getLabelText(a,o);if(o&&u){var p=i.getLabelOffsets(a);i.labelX=c.x+c.width/2+p[0],i.labelY=c.y+c.height/2+p[1],i.label=i.canvas.createText({text:u,textAnchor:"middle",alignmentBaseline:"central",dataCode:a,x:i.labelX,y:i.labelY},h,l),i.label.addClass("jvm-region jvm-element")}return i}return k(e,t),e.prototype.updateLabelPosition=function(){this.label&&this.label.set({x:this.labelX*this.map.scale+this.map.transX*this.map.scale,y:this.labelY*this.map.scale+this.map.transY*this.map.scale})},e}(E);var T=function(t){function e(e){var i,s=e.index,a=e.map,r=e.style,n=e.x1,o=e.y1,h=e.x2,l=e.y2,c=e.group;return(i=t.call(this)||this).shape=a.canvas.createLine({x1:n,y1:o,x2:h,y2:l,dataIndex:s},r,c),i.shape.addClass("jvm-line"),i}return k(e,t),e}(E);function A(t,e){return t.toLowerCase()+":to:"+e.toLowerCase()}var z=function(t){function e(e){var i,s=e.index,a=e.style,r=e.label,n=e.cx,o=e.cy,h=e.map,l=e.group;return(i=t.call(this)||this)._map=h,i._isImage=!!a.initial.image,i.config=arguments[0],i.shape=h.canvas[i._isImage?"createImage":"createCircle"]({dataIndex:s,cx:n,cy:o},i._getStyle(),l),i.shape.addClass("jvm-marker jvm-element"),i._isImage&&i.updateLabelPosition(),r&&i._createLabel(i.config),i}k(e,t);var i=e.prototype;return i.updateLabelPosition=function(){this.label&&this.label.set({x:this._labelX*this._map.scale+this._offsets[0]+this._map.transX*this._map.scale+5+(this._isImage?(this.shape.width||0)/2:this.shape.node.r.baseVal.value),y:this._labelY*this._map.scale+this._map.transY*this._map.scale+this._offsets[1]})},i._createLabel=function(t){var e=t.index,i=t.map,s=t.label,a=t.labelsGroup,r=t.cx,n=t.cy,o=t.marker,h=t.isRecentlyCreated,l=this.getLabelText(e,s);this._labelX=r/i.scale-i.transX,this._labelY=n/i.scale-i.transY,this._offsets=h&&o.offsets?o.offsets:this.getLabelOffsets(e,s),this.label=i.canvas.createText({text:l,dataIndex:e,x:this._labelX,y:this._labelY,dy:"0.6ex"},i.params.markerLabelStyle,a),this.label.addClass("jvm-marker jvm-element"),h&&this.updateLabelPosition()},i._getStyle=function(){var t={};return this._isImage?t.initial={image:this.config.style.initial.image}:t=this.config.style,t},e}(E);var P=function(){function t(t){void 0===t&&(t={}),this._options=t,this._map=this._options.map,this._series=this._options.series,this._body=m("div","jvm-legend"),this._options.cssClass&&this._body.setAttribute("class",this._options.cssClass),t.vertical?this._map.legendVertical.appendChild(this._body):this._map.legendHorizontal.appendChild(this._body),this.render()}return t.prototype.render=function(){var t,e,i,s=this._series.scale.getTicks(),a=m("div","jvm-legend-inner");if(this._body.innderHTML="",this._options.title){var r=m("div","jvm-legend-title",this._options.title);this._body.appendChild(r)}this._body.appendChild(a);for(var n=0;n<s.length;n++){switch(t=m("div","jvm-legend-tick"),e=m("div","jvm-legend-tick-sample"),this._series.config.attribute){case"fill":f(s[n].value)?e.style.background="url("+s[n].value+")":e.style.background=s[n].value;break;case"stroke":e.style.background=s[n].value;break;case"image":e.style.background="url("+(b(s[n].value)?s[n].value.url:s[n].value)+") no-repeat center center",e.style.backgroundSize="cover"}t.appendChild(e),i=s[n].label,this._options.labelRender&&(i=this._options.labelRender(i));var o=m("div","jvm-legend-tick-text",i);t.appendChild(o),a.appendChild(t)}},t}(),D=function(){function t(t){this._scale=t}var e=t.prototype;return e.getValue=function(t){return this._scale[t]},e.getTicks=function(){var t=[];for(var e in this._scale)t.push({label:e,value:this._scale[e]});return t},t}(),I=function(){function t(t,e,i){void 0===t&&(t={}),this._map=i,this._elements=e,this._values=t.values||{},this.config=t,this.config.attribute=t.attribute||"fill",t.attributes&&this.setAttributes(t.attributes),b(t.scale)&&(this.scale=new D(t.scale)),this.config.legend&&(this.legend=new P(w({map:this._map,series:this},this.config.legend))),this.setValues(this._values)}var e=t.prototype;return e.setValues=function(t){var e={};for(var i in t)t[i]&&(e[i]=this.scale.getValue(t[i]));this.setAttributes(e)},e.setAttributes=function(t){for(var e in t)this._elements[e]&&this._elements[e].element.setStyle(this.config.attribute,t[e])},e.clear=function(){var t,e={};for(t in this._values)this._elements[t]&&(e[t]=this._elements[t].element.shape.style.initial[this.config.attribute]);this.setAttributes(e),this._values={}},t}();var H={mill:function(t,e,i){return{x:this.radius*(e-i)*this.radDeg,y:-this.radius*Math.log(Math.tan((45+.4*t)*this.radDeg))/.8}},merc:function(t,e,i){return{x:this.radius*(e-i)*this.radDeg,y:-this.radius*Math.log(Math.tan(Math.PI/4+t*Math.PI/360))}},aea:function(t,e,i){var s=i*this.radDeg,a=29.5*this.radDeg,r=45.5*this.radDeg,n=t*this.radDeg,o=e*this.radDeg,h=(Math.sin(a)+Math.sin(r))/2,l=Math.cos(a)*Math.cos(a)+2*h*Math.sin(a),c=h*(o-s),u=Math.sqrt(l-2*h*Math.sin(n))/h,p=Math.sqrt(l-2*h*Math.sin(0))/h;return{x:u*Math.sin(c)*this.radius,y:-(p-u*Math.cos(c))*this.radius}},lcc:function(t,e,i){var s=i*this.radDeg,a=e*this.radDeg,r=33*this.radDeg,n=45*this.radDeg,o=t*this.radDeg,h=Math.log(Math.cos(r)*(1/Math.cos(n)))/Math.log(Math.tan(Math.PI/4+n/2)*(1/Math.tan(Math.PI/4+r/2))),l=Math.cos(r)*Math.pow(Math.tan(Math.PI/4+r/2),h)/h,c=l*Math.pow(1/Math.tan(Math.PI/4+o/2),h),u=l*Math.pow(1/Math.tan(Math.PI/4+0),h);return{x:c*Math.sin(h*(a-s))*this.radius,y:-(u-c*Math.cos(h*(a-s)))*this.radius}}};H.degRad=180/Math.PI,H.radDeg=Math.PI/180,H.radius=6381372;var R=function(){function t(t,e){var i=t.scale,s=t.values;this._scale=i,this._values=s,this._fromColor=this.hexToRgb(i[0]),this._toColor=this.hexToRgb(i[1]),this._map=e,this.setMinMaxValues(s),this.visualize()}var e=t.prototype;return e.setMinMaxValues=function(t){for(var e in this.min=Number.MAX_VALUE,this.max=0,t)(e=parseFloat(t[e]))>this.max&&(this.max=e),e<this.min&&(this.min=e)},e.visualize=function(){var t,e={};for(var i in this._values)t=parseFloat(this._values[i]),isNaN(t)||(e[i]=this.getValue(t));this.setAttributes(e)},e.setAttributes=function(t){for(var e in t)this._map.regions[e]&&this._map.regions[e].element.setStyle("fill",t[e])},e.getValue=function(t){for(var e,i="#",s=0;s<3;s++)i+=(1===(e=Math.round(this._fromColor[s]+(this._toColor[s]-this._fromColor[s])*((t-this.min)/(this.max-this.min))).toString(16)).length?"0":"")+e;return i},e.hexToRgb=function(t){var e=0,i=0,s=0;return 4==t.length?(e="0x"+t[1]+t[1],i="0x"+t[2]+t[2],s="0x"+t[3]+t[3]):7==t.length&&(e="0x"+t[1]+t[2],i="0x"+t[3]+t[4],s="0x"+t[5]+t[6]),[parseInt(e),parseInt(i),parseInt(s)]},t}();var G=Object.freeze({__proto__:null,handleContainerEvents:function(){var t,e,i=this,s=!1,a=this;this.params.draggable&&(this.container.on("mousemove",(function(i){return s&&(a.transX-=(t-i.pageX)/a.scale,a.transY-=(e-i.pageY)/a.scale,a.applyTransform(),t=i.pageX,e=i.pageY),!1})).on("mousedown",(function(i){return s=!0,t=i.pageX,e=i.pageY,!1})),g("body").on("mouseup",(function(){s=!1}))),this.params.zoomOnScroll&&this.container.on("wheel",(function(t){var e=0;e=(t.deltaY||-t.wheelDelta||t.detail)>>10||1,e*=75;var s=i.container.selector.getBoundingClientRect(),r=t.pageX-s.left-window.pageXOffset,n=t.pageY-s.top-window.pageYOffset,o=Math.pow(1+a.params.zoomOnScrollSpeed/1e3,-1.5*e);a.tooltip&&a.tooltip.hide(),a.setScale(a.scale*o,r,n)}),{passive:!0})},handleElementEvents:function(){var t=this;this.container.delegate(".jvm-element","mouseover mouseout",(function(e){var i=O(t,this,!0),s=t.params.showTooltip;"mouseover"===e.type?e.defaultPrevented||(i.element.hover(!0),s&&(t.tooltip.text(i.tooltipText),t.tooltip.show(),t.emit(i.event,[t.tooltip,i.code]))):(i.element.hover(!1),s&&t.tooltip.hide())})),this.container.delegate(".jvm-element","mouseup",(function(e){var i=O(t,this);if("region"===i.type&&t.params.regionsSelectable||"marker"===i.type&&t.params.markersSelectable&&!e.defaultPrevented){var s=i.element;t.params[i.type+"sSelectableOne"]&&t.clearSelected(i.type+"s"),i.element.isSelected?s.select(!1):s.select(!0),t.emit(i.event,[i.code,s.isSelected,t.getSelected(i.type+"s")])}}))},handleZoomButtons:function(){var t=this,e=this,s=m("div","jvm-zoom-btn jvm-zoomin","&#43;",!0),a=m("div","jvm-zoom-btn jvm-zoomout","&#x2212",!0);this.container.append(s).append(a),i(s,"click",(function(){t.setScale(e.scale*e.params.zoomStep,e.width/2,e.height/2,!1,e.params.zoomAnimate)})),i(a,"click",(function(){t.setScale(e.scale/e.params.zoomStep,e.width/2,e.height/2,!1,e.params.zoomAnimate)}))},bindContainerTouchEvents:function(){var t,e,i,s,a,r,n,o=this,h=function(h){var l,c,u,p,d=h.touches;if("touchstart"==h.type&&(n=0),1==d.length)1==n&&(u=o.transX,p=o.transY,o.transX-=(i-d[0].pageX)/o.scale,o.transY-=(s-d[0].pageY)/o.scale,o.tooltip.hide(),o.applyTransform(),u==o.transX&&p==o.transY||h.preventDefault()),i=d[0].pageX,s=d[0].pageY;else if(2==d.length)if(2==n)c=Math.sqrt(Math.pow(d[0].pageX-d[1].pageX,2)+Math.pow(d[0].pageY-d[1].pageY,2))/e,o.setScale(t*c,a,r),o.tooltip.hide(),h.preventDefault();else{var f=o.container.selector.getBoundingClientRect();l={top:f.top+window.scrollY,left:f.left+window.scrollX},a=d[0].pageX>d[1].pageX?d[1].pageX+(d[0].pageX-d[1].pageX)/2:d[0].pageX+(d[1].pageX-d[0].pageX)/2,r=d[0].pageY>d[1].pageY?d[1].pageY+(d[0].pageY-d[1].pageY)/2:d[0].pageY+(d[1].pageY-d[0].pageY)/2,a-=l.left,r-=l.top,t=o.scale,e=Math.sqrt(Math.pow(d[0].pageX-d[1].pageX,2)+Math.pow(d[0].pageY-d[1].pageY,2))}n=d.length};this.container.on("touchstart",h).on("touchmove",h)},createRegions:function(){var t,e;for(t in this.regionLabelsGroup=this.regionLabelsGroup||this.canvas.createGroup("jvm-regions-labels-group"),this.mapData.paths)e=new L({map:this,code:t,path:this.mapData.paths[t].path,style:w({},this.params.regionStyle),labelStyle:this.params.regionLabelStyle,labelsGroup:this.regionLabelsGroup,label:this.params.labels&&this.params.labels.regions}),this.regions[t]={config:this.mapData.paths[t],element:e}},createLines:function(t,e,i){var s=this;void 0===i&&(i=!1);var a,r=!1,n=!1;for(var o in this.linesGroup=this.linesGroup||this.canvas.createGroup("jvm-lines-group"),t){var h=t[o];for(var l in e){var c=i?e[l].config:e[l];c.name===h.from&&(r=this.getMarkerPosition(c)),c.name===h.to&&(n=this.getMarkerPosition(c))}!1!==r&&!1!==n&&(a=new T({index:o,map:this,style:x({initial:this.params.lineStyle},{initial:h.style||{}}),x1:r.x,y1:r.y,x2:n.x,y2:n.y,group:this.linesGroup}),i&&Object.keys(this.lines).forEach((function(e){e===A(t[0].from,t[0].to)&&s.lines[e].element.remove()})),this.lines[A(h.from,h.to)]={element:a,config:h})}},createMarkers:function(t,e){var i,s,a,r,n=this;for(var o in void 0===t&&(t={}),void 0===e&&(e=!1),this.markersGroup=this.markersGroup||this.canvas.createGroup("jvm-markers-group"),this.markerLabelsGroup=this.markerLabelsGroup||this.canvas.createGroup("jvm-markers-labels-group"),t){if(i=t[o],a=this.getMarkerPosition(i),r=i.coords.join(":"),e){if(M(this.markers).filter((function(t){return n.markers[t]._uid===r})).length)continue;o=M(this.markers).length}!1!==a&&(s=new z({index:o,map:this,style:x(this.params.markerStyle,{initial:i.style||{}}),label:this.params.labels&&this.params.labels.markers,labelsGroup:this.markerLabelsGroup,cx:a.x,cy:a.y,group:this.markersGroup,marker:i,isRecentlyCreated:e}),this.markers[o]&&this.removeMarkers([o]),this.markers[o]={_uid:r,config:i,element:s})}},createTooltip:function(){var t=this,e=this,i=m("div","jvm-tooltip");this.tooltip=g(document.body.appendChild(i)),this.container.on("mousemove",(function(s){if("block"===e.tooltip.selector.style.display){var a=t.container.selector.querySelector("#jvm-regions-group").getBoundingClientRect(),r=i.getBoundingClientRect(),n=r.height,o=r.width,h=s.clientY<=a.top+n+5,l=s.pageY-n-5,c=s.pageX-o-5;h&&(l+=n+5,c-=10),s.clientX<a.left+o+5&&(c=s.pageX+5+2,h&&(c+=10)),t.tooltip.css({top:l+"px",left:c+"px"})}}))},createSeries:function(){for(var t in this.series={markers:[],regions:[]},this.params.series)for(var e=0;e<this.params.series[t].length;e++)this.series[t][e]=new I(this.params.series[t][e],this[t],this)},applyTransform:function(){var t,e,i,s;this.defaultWidth*this.scale<=this.width?(t=(this.width-this.defaultWidth*this.scale)/(2*this.scale),i=(this.width-this.defaultWidth*this.scale)/(2*this.scale)):(t=0,i=(this.width-this.defaultWidth*this.scale)/this.scale),this.defaultHeight*this.scale<=this.height?(e=(this.height-this.defaultHeight*this.scale)/(2*this.scale),s=(this.height-this.defaultHeight*this.scale)/(2*this.scale)):(e=0,s=(this.height-this.defaultHeight*this.scale)/this.scale),this.transY>e?this.transY=e:this.transY<s&&(this.transY=s),this.transX>t?this.transX=t:this.transX<i&&(this.transX=i),this.canvas.applyTransformParams(this.scale,this.transX,this.transY),this.markers&&this.repositionMarkers(),this.lines&&this.repositionLines(),this.repositionLabels()},setFocus:function(t){var e=this;void 0===t&&(t={});var i,s=[];if(t.region?s.push(t.region):t.regions&&(s=t.regions),s.length)return s.forEach((function(t){if(e.regions[t]){var s=e.regions[t].element.shape.getBBox();s&&(i=void 0===i?s:{x:Math.min(i.x,s.x),y:Math.min(i.y,s.y),width:Math.max(i.x+i.width,s.x+s.width)-Math.min(i.x,s.x),height:Math.max(i.y+i.height,s.y+s.height)-Math.min(i.y,s.y)})}})),this.setScale(Math.min(this.width/i.width,this.height/i.height),-(i.x+i.width/2),-(i.y+i.height/2),!0,t.animate);if(t.coords){var a=this.coordsToPoint(t.coords[0],t.coords[1]),r=this.transX-a.x/this.scale,n=this.transY-a.y/this.scale;return this.setScale(t.scale*this.baseScale,r,n,!0,t.animate)}},resize:function(){var t=this.baseScale;this.width/this.height>this.defaultWidth/this.defaultHeight?(this.baseScale=this.height/this.defaultHeight,this.baseTransX=Math.abs(this.width-this.defaultWidth*this.baseScale)/(2*this.baseScale)):(this.baseScale=this.width/this.defaultWidth,this.baseTransY=Math.abs(this.height-this.defaultHeight*this.baseScale)/(2*this.baseScale)),this.scale*=this.baseScale/t,this.transX*=this.baseScale/t,this.transY*=this.baseScale/t},setScale:function(t,e,i,s,a){var r,n,o,h,l,c,u,p,d,f,m=this,g=0,v=Math.abs(Math.round(60*(t-this.scale)/Math.max(t,this.scale)));t>this.params.zoomMax*this.baseScale?t=this.params.zoomMax*this.baseScale:t<this.params.zoomMin*this.baseScale&&(t=this.params.zoomMin*this.baseScale),void 0!==e&&void 0!==i&&(r=t/this.scale,s?(d=e+this.defaultWidth*(this.width/(this.defaultWidth*t))/2,f=i+this.defaultHeight*(this.height/(this.defaultHeight*t))/2):(d=this.transX-(r-1)/t*e,f=this.transY-(r-1)/t*i)),a&&v>0?(o=this.scale,h=(t-o)/v,l=this.transX*this.scale,u=this.transY*this.scale,c=(d*t-l)/v,p=(f*t-u)/v,n=setInterval((function(){g+=1,m.scale=o+h*g,m.transX=(l+c*g)/m.scale,m.transY=(u+p*g)/m.scale,m.applyTransform(),g==v&&(clearInterval(n),m.emit("viewport:changed",[m.scale,m.transX,m.transY]))}),10)):(this.transX=d,this.transY=f,this.scale=t,this.applyTransform(),this.emit("viewport:changed",[this.scale,this.transX,this.transY]))},updateSize:function(){this.width=this.container.width(),this.height=this.container.height(),this.resize(),this.canvas.setSize(this.width,this.height),this.applyTransform()},coordsToPoint:function(t,e){var i,s,a,r=V.maps[this.params.map].projection,n=r.centralMeridian;return i=H[r.type](t,e,n),!!(s=this.getInsetForPoint(i.x,i.y))&&(a=s.bbox,i.x=(i.x-a[0].x)/(a[1].x-a[0].x)*s.width*this.scale,i.y=(i.y-a[0].y)/(a[1].y-a[0].y)*s.height*this.scale,{x:i.x+this.transX*this.scale+s.left*this.scale,y:i.y+this.transY*this.scale+s.top*this.scale})},getInsetForPoint:function(t,e){var i,s,a=V.maps[this.params.map].insets;for(i=0;i<a.length;i++)if(t>(s=a[i].bbox)[0].x&&t<s[1].x&&e>s[0].y&&e<s[1].y)return a[i]},getMarkerPosition:function(t){var e=t.coords;return V.maps[this.params.map].projection?this.coordsToPoint.apply(this,e):{x:e[0]*this.scale+this.transX*this.scale,y:e[1]*this.scale+this.transY*this.scale}},repositionLines:function(){var t=!1,e=!1;for(var i in this.lines){for(var s in this.markers){var a=this.markers[s];a.config.name===this.lines[i].config.from&&(t=this.getMarkerPosition(a.config)),a.config.name===this.lines[i].config.to&&(e=this.getMarkerPosition(a.config))}!1!==t&&!1!==e&&this.lines[i].element.setStyle({x1:t.x,y1:t.y,x2:e.x,y2:e.y})}},repositionMarkers:function(){var t;for(var e in this.markers)!1!==(t=this.getMarkerPosition(this.markers[e].config))&&this.markers[e].element.setStyle({cx:t.x,cy:t.y})},repositionLabels:function(){var t=this.params.labels;if(t){if(t.regions)for(var e in this.regions)this.regions[e].element.updateLabelPosition();if(t.markers)for(var i in this.markers)this.markers[i].element.updateLabelPosition()}},visualizeData:function(t){b(t)&&(this.dataVisualization=new R(t,this))}}),B={onViewportChange:"viewport:changed",onRegionSelected:"region:select",onMarkerSelected:"marker:select",onRegionTooltipShow:"region.tooltip:show",onMarkerTooltipShow:"marker.tooltip:show",onLoaded:"map:loaded"},V=function(){function t(e){if(void 0===e&&(e={}),this.params=x(t.defaults,e),!t.maps[this.params.map])throw new Error("Attempt to use map which was not loaded: "+e.map);this.mapData=t.maps[this.params.map],this.regions={},this.markers={},this.lines={},this.defaultWidth=this.mapData.width,this.defaultHeight=this.mapData.height,this.height=0,this.width=0,this.scale=1,this.baseScale=1,this.transX=0,this.transY=0,this.baseTransX=0,this.baseTransY=0,"loading"!==window.document.readyState?this.init(e.selector):window.addEventListener("DOMContentLoaded",this.init.bind(this,e.selector))}var e=t.prototype;return e.init=function(t){this.container=g(t).addClass("jvm-container"),this.canvas=new Y(this.container,this.width,this.height),this.setBackgroundColor(this.params.backgroundColor),this.handleContainerEvents(),this.createRegions(),this.updateSize(),this.createLines(this.params.lines||{},this.params.markers||{}),this.createMarkers(this.params.markers),this.handleElementEvents(),this.repositionLabels(),this.params.showTooltip&&this.createTooltip(),this.params.zoomButtons&&this.handleZoomButtons(),this.params.selectedRegions&&this.setSelected("regions",this.params.selectedRegions),this.params.selectedMarkers&&this.setSelected("markers",this.params.selectedMarkers),this.params.focusOn&&this.setFocus(this.params.focusOn),this.params.visualizeData&&this.visualizeData(this.params.visualizeData),this.params.bindTouchEvents&&("ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch)&&this.bindContainerTouchEvents(),this.params.series&&(this.container.append(this.legendHorizontal=m("div","jvm-series-container jvm-series-h")).append(this.legendVertical=m("div","jvm-series-container jvm-series-v")),this.createSeries()),this.emit("map:loaded",[this])},e.emit=function(t,e){for(var i in B)B[i]===t&&y(this.params[i])&&this.params[i].apply(this,e)},e.setBackgroundColor=function(t){this.container.css({backgroundColor:t})},e.getSelected=function(t){var e,i=[];for(e in this[t])this[t][e].element.isSelected&&i.push(e);return i},e.clearSelected=function(t){var e=this;this.getSelected(t).forEach((function(i){e[t][i].element.select(!1)}))},e.setSelected=function(t,e){var i=this;e.forEach((function(e){i[t][e]&&i[t][e].element.select(!0)}))},e.getSelectedRegions=function(){return this.getSelected("regions")},e.clearSelectedRegions=function(){var t=this;this.getSelected("regions").forEach((function(e){t.regions[e].element.select(!1)}))},e.getSelectedMarkers=function(){return this.getSelected("markers")},e.clearSelectedMarkers=function(){var t=this;this.getSelected("markers").forEach((function(e){t.markers[e].element.select(!1)}))},e.addMarker=function(t){this.createMarkers([t],!0)},e.removeMarkers=function(t){var e=this;t.forEach((function(t){e.markers[t].element.remove(),delete e.markers[t]}))},e.addLine=function(t,e,i){void 0===i&&(i={}),this.createLines([{from:t,to:e,style:i}],this.markers,!0)},e.reset=function(){for(var t in this.series)for(var e=0;e<this.series[t].length;e++)this.series[t][e].clear();this.scale=this.baseScale,this.transX=this.baseTransX,this.transY=this.baseTransY,this.clearSelectedMarkers(),this.clearSelectedRegions(),this.applyTransform()},e.destroy=function(t){var e=this;void 0===t&&(t=!0);var i=a(),r=this.tooltip.selector,n=Object.keys;r.parentElement.removeChild(r),n(i).forEach((function(t){s(i[t].selector,t,i[t].handler)})),t&&n(this).forEach((function(t){try{delete e[t]}catch(t){}}))},t}();V.maps={},V.defaults={map:"world",backgroundColor:"tranparent",draggable:!0,zoomButtons:!0,zoomOnScroll:!0,zoomOnScrollSpeed:3,zoomMax:12,zoomMin:1,zoomAnimate:!0,showTooltip:!0,zoomStep:1.5,bindTouchEvents:!0,lineStyle:{stroke:"#808080",strokeWidth:1,strokeLinecap:"round"},markersSelectable:!1,markersSelectableOne:!1,markerStyle:{initial:{r:7,fill:"#374151",fillOpacity:1,stroke:"#FFF",strokeWidth:5,strokeOpacity:.5},hover:{fill:"#3cc0ff",cursor:"pointer"},selected:{fill:"blue"},selectedHover:{}},markerLabelStyle:{initial:{fontFamily:"Verdana",fontSize:12,fontWeight:500,cursor:"default",fill:"#374151"},hover:{cursor:"pointer"},selected:{},selectedHover:{}},regionsSelectable:!1,regionsSelectableOne:!1,regionStyle:{initial:{fill:"#dee2e8",fillOpacity:1,stroke:"none",strokeWidth:0},hover:{fillOpacity:.7,cursor:"pointer"},selected:{fill:"#9ca3af"},selectedHover:{}},regionLabelStyle:{initial:{fontFamily:"Verdana",fontSize:"12",fontWeight:"bold",cursor:"default",fill:"#35373e"},hover:{cursor:"pointer"}}},Object.assign(V.prototype,G);var W=function(){function t(t){if(void 0===t&&(t={}),!t.selector)throw new Error("Selector is not given.");return new V(t)}return t.prototype.addMap=function(t,e){V.maps[t]=e},t}();return window.jsVectorMap=W}));
    </script>
    <script >
      jsVectorMap.prototype.addMap("world_merc", {"insets": [{"width": 900, "top": 0, "height": 583.0802520919394, "bbox": [{"y": -18449355.69035302, "x": -20004297.151525836}, {"y": 7485321.539093307, "x": 20026572.394749384}], "left": 0}], "paths": {"BD": {"path": "M651.84,359.63l-0.6,-2.05l-1.36,-1.76l-2.31,-0.11l-0.41,0.48l0.2,0.98l-0.54,1.03l-0.71,-0.37l-0.68,0.36l-1.19,-0.37l-0.37,-2.06l-0.81,-1.92l0.39,-1.52l-0.21,-0.46l-1.16,-0.55l0.3,-0.55l1.48,-0.98l0.03,-0.64l-1.56,-1.27l0.56,-1.2l1.6,0.97l1.04,0.16l0.18,1.62l0.33,0.35l5.65,0.65l-0.86,1.73l-1.21,0.35l-0.77,1.56l0.07,0.46l1.37,1.41l0.68,-0.19l0.42,-1.44l1.21,3.96l-0.03,1.26l-0.32,-0.15l-0.41,0.28Z", "name": "Bangladesh"}, "BE": {"path": "M429.3,264.88l1.93,0.28l2.07,-0.74l1.41,1.55l1.25,0.86l-0.23,2.13l-0.68,0.42l-0.18,1.46l-1.63,-1.32l-1.4,0.17l-2.72,-3.22l-1.17,-0.21l-0.2,-0.77l1.57,-0.62Z", "name": "Belgium"}, "BF": {"path": "M421.42,377.38l-0.11,0.96l0.34,1.18l1.4,1.73l0.07,1.11l0.32,0.37l2.56,0.52l-0.04,1.3l-0.38,0.54l-1.07,0.21l-0.73,1.19l-0.63,0.21l-3.22,-0.25l-0.94,0.39l-5.4,-0.05l-0.39,0.38l0.16,2.75l-1.23,-0.43l-1.17,0.1l-0.89,0.57l-2.27,-1.73l-0.13,-1.12l0.61,-0.96l0.01,-0.93l1.87,-2.0l0.44,-1.83l0.43,-0.39l1.28,0.26l1.05,-0.52l0.47,-0.73l1.84,-1.1l0.55,-0.84l2.2,-1.01l1.15,-0.31l0.72,0.46l1.13,-0.01Z", "name": "Burkina Faso"}, "BG": {"path": "M491.72,293.09l-0.93,1.06l-0.91,2.45l0.52,1.52l-1.65,-0.27l-2.55,1.06l-0.27,1.69l-1.79,0.25l-2.03,-1.11l-1.92,0.88l-1.4,-0.07l-0.15,-1.87l-1.09,-1.09l0.34,-1.71l0.91,-1.02l0.01,-0.52l-1.15,-1.41l-0.06,-1.14l0.44,0.87l0.46,0.21l0.87,-0.23l1.91,0.53l3.68,0.18l1.44,-0.92l2.7,-0.74l1.67,1.16l0.95,0.26Z", "name": "Bulgaria"}, "BA": {"path": "M463.49,287.91l2.09,0.57l1.72,-0.03l1.56,0.78l-0.4,0.99l1.14,1.61l-0.27,1.19l-1.82,1.31l-0.37,1.54l-1.65,-0.96l-0.89,-1.36l-2.11,-2.07l-1.65,-2.57l0.25,-0.7l0.45,0.41l0.59,-0.06l0.43,-0.59l0.92,-0.06Z", "name": "Bosnia and Herz."}, "BN": {"path": "M707.48,403.47l0.69,-0.65l1.41,-0.91l-0.15,1.64l-0.81,-0.05l-0.61,0.58l-0.53,-0.6Z", "name": "Brunei"}, "BO": {"path": "M263.83,471.11l-3.09,-0.24l-0.38,0.24l-0.7,1.56l-1.31,-1.57l-3.28,-0.66l-2.38,2.47l-1.3,0.27l-0.88,-3.36l-1.31,-2.93l0.74,-2.43l-0.12,-0.42l-1.2,-1.03l-0.37,-1.92l-1.09,-1.59l1.46,-2.61l-0.97,-2.36l0.48,-1.07l-0.35,-0.74l0.91,-1.33l0.16,-3.89l0.5,-1.18l-1.81,-3.45l2.46,0.08l0.8,-0.85l3.4,-1.92l2.66,-0.35l-0.19,1.39l0.3,1.07l-0.05,1.98l2.72,2.29l2.88,0.49l0.89,0.87l1.79,0.59l0.98,0.71l1.71,0.05l1.17,0.61l0.6,2.74l-0.7,0.54l0.96,3.03l0.37,0.28l4.3,0.1l-0.25,1.22l0.27,1.03l1.43,0.92l0.5,1.38l-0.41,1.9l-0.65,1.11l0.13,1.37l-2.69,-1.68l-2.4,-0.03l-4.36,0.77l-1.49,2.56l-0.1,1.55l-0.75,2.44Z", "name": "Bolivia"}, "JP": {"path": "M781.1,291.58l1.81,0.77l1.63,-1.08l0.4,2.83l-3.6,1.02l-1.98,3.05l-3.61,-2.12l-0.58,0.21l-1.27,3.44l-2.14,0.04l-0.3,-2.88l1.09,-2.32l2.44,-0.17l0.37,-0.34l1.26,-6.78l2.45,3.07l2.03,1.27ZM773.56,314.42l-0.92,2.42l0.38,1.64l-1.15,1.91l-3.02,1.35l-4.59,0.3l-3.33,3.22l-1.25,-0.86l-0.09,-2.06l-0.46,-0.38l-4.35,0.67l-3.0,1.42l-2.84,0.06l-0.37,0.26l0.11,0.44l2.34,2.04l-1.55,4.67l-1.25,0.95l-0.8,-0.75l0.56,-2.43l-0.2,-0.44l-1.47,-0.8l-0.77,-1.54l2.14,-0.91l1.27,-1.83l2.45,-1.53l1.83,-2.06l4.77,-0.88l2.6,0.61l0.45,-0.22l2.39,-5.05l1.27,1.14l0.53,0.01l5.1,-4.39l1.68,-4.08l-0.39,-3.75l0.92,-1.82l2.11,-0.49l1.24,4.16l-0.07,2.45l-2.25,3.13l-0.03,3.43ZM757.77,324.02l0.2,0.64l-1.01,1.31l-1.17,-0.72l-1.28,0.7l-0.69,1.54l-1.01,-0.53l0.01,-1.04l1.14,-1.49l1.58,0.15l0.85,-1.05l1.38,0.49Z", "name": "Japan"}, "BI": {"path": "M495.45,425.39l-1.08,-2.99l1.14,-0.11l0.64,-1.19l0.76,0.09l0.65,1.83l-2.1,2.37Z", "name": "Burundi"}, "BJ": {"path": "M429.57,385.57l-0.05,0.81l0.5,1.35l-0.42,0.87l0.17,0.79l-1.82,2.14l-0.57,1.77l-0.08,5.44l-1.41,0.2l-0.48,-1.36l0.11,-5.73l-0.52,-0.7l-0.2,-1.35l-1.48,-1.49l0.22,-0.91l0.89,-0.43l0.42,-0.93l1.27,-0.36l1.22,-1.35l0.61,-0.0l1.62,1.25Z", "name": "Benin"}, "BT": {"path": "M650.32,342.67l0.85,0.75l-0.12,1.18l-3.76,-0.12l-1.57,0.41l-1.93,-0.91l1.49,-2.09l1.12,-0.6l1.62,0.6l1.33,0.09l0.98,0.68Z", "name": "Bhutan"}, "JM": {"path": "M228.38,368.9l-0.8,0.41l-2.27,-1.09l0.84,-0.25l2.14,0.31l1.18,0.59l-1.09,0.03Z", "name": "Jamaica"}, "BW": {"path": "M483.92,460.24l2.27,4.08l2.83,2.92l0.96,0.32l0.77,2.5l2.13,0.63l1.04,0.8l-3.01,1.7l-2.32,2.09l-1.54,2.79l-1.52,0.46l-0.64,2.01l-1.34,0.54l-1.84,-0.12l-1.21,-0.77l-1.36,-0.31l-1.22,0.64l-0.75,1.42l-2.31,1.98l-1.39,0.22l-0.36,-0.63l0.16,-1.82l-1.48,-2.63l-0.62,-0.44l-0.0,-7.35l2.08,-0.08l0.38,-0.4l0.07,-9.12l1.56,-0.08l3.63,-0.87l0.8,0.91l0.52,0.07l1.5,-0.97l2.2,-0.5Z", "name": "Botswana"}, "BR": {"path": "M259.98,404.95l3.24,0.7l0.65,-0.53l4.55,-1.32l1.08,-1.06l-0.02,-0.64l0.55,-0.05l0.28,0.28l-0.26,0.87l0.22,0.48l0.73,0.32l0.4,0.81l-0.62,0.86l-0.4,2.13l0.82,2.56l1.69,1.43l1.43,0.2l3.17,-1.68l3.18,0.3l0.65,-0.75l-0.27,-0.92l1.9,-0.09l2.39,0.99l1.06,-0.61l0.84,0.78l1.2,-0.18l1.18,-1.06l0.84,-1.94l1.36,-2.11l0.37,-0.05l1.89,5.46l1.33,0.59l0.05,1.28l-1.77,1.94l0.02,0.56l1.02,0.87l4.07,0.36l0.08,2.16l0.66,0.29l1.74,-1.5l6.97,2.32l1.02,1.22l-0.35,1.18l0.49,0.5l2.81,-0.74l4.77,1.3l3.75,-0.08l3.57,2.0l3.29,2.86l1.93,0.73l2.12,0.12l0.71,0.62l1.21,4.52l-0.95,4.0l-4.72,5.09l-1.64,2.95l-1.72,2.07l-0.8,0.3l-0.72,2.05l0.18,4.81l-0.94,5.62l-0.81,1.15l-0.43,3.44l-2.55,3.58l-0.4,2.59l-1.86,1.08l-0.67,1.57l-2.54,0.01l-3.94,1.05l-1.83,1.24l-2.87,0.85l-3.03,2.27l-2.2,2.92l-0.36,2.08l0.4,1.64l-0.45,2.73l-0.52,1.26l-1.77,1.62l-2.75,5.05l-3.83,3.63l-1.23,2.92l-1.18,1.22l-0.37,-0.92l0.96,-1.23l0.01,-0.48l-1.52,-2.09l-4.56,-3.52l-1.03,-0.01l-2.38,-2.13l-0.85,0.0l5.38,-5.77l3.77,-2.69l0.21,-2.55l-1.34,-1.86l-0.92,0.07l0.59,-2.44l0.01,-1.59l-1.11,-0.85l-1.75,0.31l-0.44,-3.22l-0.52,-0.97l-1.88,-0.9l-1.24,0.48l-2.17,-0.43l0.15,-3.31l-0.63,-1.37l0.67,-0.74l-0.22,-1.37l0.66,-1.16l0.44,-2.08l-0.61,-1.86l-1.4,-0.87l-0.2,-0.77l0.34,-1.41l-0.38,-0.49l-4.52,-0.1l-0.72,-2.27l0.59,-0.42l-0.03,-1.12l-0.5,-0.87l-0.32,-1.71l-1.45,-0.76l-1.63,-0.02l-1.05,-0.73l-1.6,-0.48l-1.13,-1.0l-2.69,-0.41l-2.47,-2.08l0.13,-4.38l-0.45,-0.45l-3.46,0.5l-3.44,1.95l-0.6,0.74l-2.89,-0.17l-1.47,0.42l-0.72,-0.18l0.15,-3.54l-0.64,-0.34l-1.94,1.42l-1.87,-0.06l-0.83,-1.19l-1.38,-0.27l0.21,-1.01l-1.35,-1.5l-0.88,-1.92l0.56,-0.6l-0.0,-0.81l1.29,-0.62l0.22,-0.43l-0.22,-1.19l0.61,-0.91l0.15,-0.99l2.65,-1.58l1.99,-0.47l0.42,-0.36l2.06,0.11l0.42,-0.33l1.19,-8.0l-0.41,-1.56l-1.1,-1.0l0.01,-1.33l1.91,-0.42l0.08,-0.96l-0.33,-0.43l-1.14,-0.2l-0.02,-0.83l4.47,0.05l0.82,-0.67l0.82,1.81l0.8,0.07l1.15,1.1l2.26,-0.05l0.71,-0.83l2.78,-0.96l0.48,-1.13l1.6,-0.64l0.24,-0.47l-0.48,-0.83l-1.83,-0.19l-0.36,-3.22Z", "name": "Brazil"}, "BS": {"path": "M227.69,345.88l0.0,-0.01l0.0,0.0l-0.0,0.01ZM226.4,353.1l-0.48,-1.18l-0.85,-0.78l0.36,-1.17l0.95,2.03l0.01,1.1ZM225.65,345.38l-1.96,0.32l-0.04,-0.26l0.74,-0.14l1.26,0.08Z", "name": "Bahamas"}, "BY": {"path": "M493.82,245.43l0.3,0.93l0.53,0.25l1.16,-0.47l2.08,0.9l0.2,1.73l-0.48,1.43l1.57,2.82l0.93,0.75l0.13,0.97l1.58,0.7l0.48,0.74l-0.6,0.57l-1.85,-0.13l-0.76,0.48l-0.12,0.47l1.08,3.5l-1.96,0.33l-0.87,1.12l-0.12,1.49l-0.67,-0.22l-2.03,0.17l-0.52,-0.75l-0.57,-0.09l-0.72,0.54l-0.9,-0.5l-1.91,-0.08l-2.74,-0.95l-2.61,-0.34l-2.01,0.09l-1.52,1.11l-0.65,0.08l-0.07,-1.5l-0.64,-1.57l1.4,-1.01l0.01,-1.65l-0.7,-1.69l-0.08,-1.37l2.2,-0.03l2.72,-1.61l0.73,-2.54l2.1,-1.69l-0.2,-1.69l3.82,-2.26l2.27,0.97Z", "name": "Belarus"}, "BZ": {"path": "M198.03,374.09l0.1,-4.57l0.69,-0.06l0.74,-1.32l0.34,0.28l-0.4,1.33l0.17,0.59l-0.34,2.3l-1.3,1.44Z", "name": "Belize"}, "RU": {"path": "M491.5,228.55l2.65,-2.55l-0.01,-0.58l-2.35,-2.15l7.46,-9.43l1.0,-2.89l-0.09,-0.41l-3.55,-3.64l0.93,-3.78l-2.18,-4.19l1.62,-5.27l-2.85,-6.95l2.24,-4.74l-0.06,-0.43l-3.73,-4.33l0.33,-4.4l1.87,-0.61l4.26,-2.85l2.35,-2.28l3.83,4.05l6.96,1.77l9.34,7.63l1.83,2.99l0.16,4.03l-2.62,3.11l-3.84,1.55l-11.03,-4.69l-2.16,0.81l-0.14,0.63l3.99,4.45l0.31,8.71l5.34,3.55l0.64,-0.27l0.32,-2.78l-1.43,-2.53l1.23,-1.72l5.74,3.47l0.43,-0.01l2.11,-1.42l0.15,-0.48l-1.59,-4.12l5.51,-5.69l1.99,0.31l2.25,2.09l0.65,-0.16l1.46,-4.3l-2.03,-4.0l1.18,-3.78l-1.5,-3.67l5.98,1.86l1.2,3.14l-2.74,0.7l-0.3,0.39l0.02,3.61l2.07,2.45l0.43,0.11l3.87,-1.38l0.85,-4.25l13.69,-8.82l1.16,0.21l-2.17,3.65l0.26,0.59l3.11,0.7l0.4,-0.14l1.68,-2.16l4.51,-0.18l3.61,-2.68l2.61,3.78l0.67,-0.02l2.85,-4.55l-0.0,-0.43l-2.5,-3.89l1.03,-1.89l7.03,2.08l3.39,2.18l9.05,7.85l0.62,-0.13l1.64,-3.95l-2.48,-3.58l-0.07,-1.39l-0.31,-0.37l-2.62,-0.61l0.73,-3.21l-1.33,-5.76l-0.07,-2.28l4.55,-7.04l1.67,-7.53l1.59,-1.44l6.17,2.09l0.48,4.29l-2.34,6.42l1.55,2.76l0.79,5.18l-0.57,9.85l2.73,4.33l-1.02,4.26l-4.88,9.07l0.23,0.57l2.86,0.92l0.49,-0.22l0.94,-2.13l2.83,-1.82l0.65,-3.1l2.12,-3.05l-1.37,-4.06l1.14,-4.42l-0.31,-0.49l-2.47,-0.52l-0.55,-3.59l1.95,-7.61l-3.13,-6.05l4.31,-5.2l-0.45,-5.83l0.53,-0.08l1.2,4.22l-0.98,7.66l0.21,0.4l2.68,1.42l0.58,-0.43l-1.09,-5.45l3.9,-2.98l4.9,-0.41l4.5,4.5l0.49,0.06l0.17,-0.47l-2.21,-6.76l-0.24,-8.85l4.01,-1.66l5.93,0.39l5.54,-1.19l0.28,-0.55l-1.97,-4.64l2.73,-5.9l2.89,-0.36l4.78,-4.84l6.49,-1.33l1.07,-2.85l6.11,-0.9l1.91,2.17l0.58,0.02l5.5,-5.45l4.43,0.17l0.41,-0.34l0.68,-4.62l2.32,-4.63l5.58,-4.48l3.69,3.23l-3.04,2.5l0.14,0.69l5.42,1.64l0.64,5.13l0.7,0.21l2.17,-2.49l6.98,0.14l5.48,5.07l1.92,3.72l-0.59,4.98l-2.66,2.78l-6.56,5.27l-1.96,2.84l0.18,0.6l3.08,1.27l3.68,2.26l0.45,-0.02l1.76,-1.33l1.14,5.11l0.34,0.31l0.41,-0.22l1.03,-2.14l3.75,-1.32l7.65,1.4l0.57,3.81l0.35,0.34l10.47,1.28l0.45,-0.39l0.13,-6.16l4.81,1.41l3.93,-0.03l3.85,4.37l1.1,5.17l-1.42,3.65l3.15,6.24l4.05,3.25l0.63,-0.2l2.24,-7.6l3.55,3.15l0.44,0.06l4.09,-2.03l4.67,2.34l0.49,-0.1l1.68,-2.01l3.85,1.04l0.49,-0.48l-1.76,-7.3l3.0,-3.3l22.19,5.31l2.15,4.74l6.55,5.95l10.36,-1.34l4.76,1.21l1.93,2.89l-0.3,5.24l3.26,2.4l3.66,-1.4l4.3,-0.18l4.84,1.4l4.5,-0.75l4.22,6.04l0.56,0.1l3.1,-2.22l0.13,-0.49l-1.96,-4.39l0.94,-2.74l7.63,1.95l5.23,-0.41l7.05,3.36l9.59,8.27l6.43,6.42l-0.21,3.79l1.82,1.88l0.45,0.06l0.21,-0.41l-0.52,-4.08l6.13,0.86l4.58,5.48l-2.15,2.3l-3.97,0.6l-0.34,0.39l-0.06,5.64l-0.78,0.94l-1.98,-0.15l-1.91,-1.99l-3.16,-1.63l-0.77,-2.69l-2.54,-0.99l-2.81,0.69l-1.11,-1.73l0.5,-2.12l-0.56,-0.45l-3.0,1.46l-0.2,0.51l1.06,2.68l-1.31,2.33l-3.03,2.42l-3.08,-0.41l-0.37,0.63l2.22,3.03l1.47,4.59l1.16,1.53l0.26,2.04l-0.46,1.02l-4.64,-1.05l-6.95,4.01l-2.18,0.6l-7.62,6.88l-0.81,1.88l-3.15,-3.07l-0.49,-0.06l-6.18,3.75l-0.93,-1.52l-0.61,-0.09l-2.26,2.01l-3.15,-0.64l-0.47,0.3l-0.79,3.18l-3.03,4.85l0.09,1.91l0.26,0.36l2.58,0.95l-0.3,6.03l-1.97,0.14l-0.36,0.29l-1.07,3.72l0.87,1.82l-4.01,2.02l-1.04,4.88l-3.49,0.95l-0.29,0.32l-0.73,4.06l-3.07,3.18l-0.71,-2.11l-2.45,-15.41l1.17,-6.06l2.06,-2.67l0.2,-2.12l3.83,-1.13l4.47,-6.06l4.28,-5.09l4.48,-4.07l2.13,-7.67l-0.45,-0.5l-3.36,0.72l-1.47,4.3l-5.81,5.21l-1.86,-5.8l-0.49,-0.26l-6.68,1.94l-6.27,8.55l-0.01,0.46l1.74,2.54l-8.37,1.57l0.16,-3.05l-0.32,-0.41l-3.89,-0.75l-3.3,2.39l-7.61,-0.82l-8.47,1.58l-17.7,19.78l0.24,0.67l3.73,0.52l1.14,2.49l2.65,1.15l0.46,-0.13l1.47,-1.95l2.35,0.24l3.43,4.41l0.08,3.28l-1.96,4.11l-0.21,4.69l-1.11,6.02l-3.72,5.32l-0.87,2.56l-8.3,10.17l-3.18,1.92l-1.29,0.04l-1.45,-1.54l-0.53,-0.05l-2.48,1.84l0.28,-0.27l0.36,-4.08l-0.6,-2.85l1.77,-1.03l2.89,0.6l0.44,-0.22l1.71,-3.57l0.84,-3.92l0.97,-1.37l1.32,-3.37l-0.48,-0.53l-4.14,1.11l-2.19,1.46l-3.38,-0.0l-1.05,-3.43l-2.97,-2.72l-4.29,-1.26l-1.76,-6.1l-2.63,-6.06l-2.3,-1.58l-3.75,-1.25l-3.46,0.09l-3.19,0.77l-2.26,2.18l0.05,0.61l1.21,0.86l0.03,1.88l-1.34,1.28l-2.26,4.23l-0.03,1.71l-3.16,2.2l-2.8,-1.36l-3.02,0.27l-1.18,-1.17l-1.68,-0.52l-3.94,2.75l-3.21,0.62l-2.27,0.93l-3.04,-0.6l-2.21,0.03l-1.47,-1.89l-2.61,-1.95l-2.65,-0.52l-5.44,1.21l-3.23,-1.49l-0.71,-3.08l-5.2,-1.5l-2.75,-1.64l-0.54,0.13l-2.59,4.17l0.89,2.46l-2.1,2.34l-3.38,-0.91l-2.42,-0.14l-1.85,-1.84l-2.51,-0.06l-2.46,-1.17l-3.86,1.89l-4.72,3.31l-3.26,0.87l-1.17,-2.07l-0.41,-0.2l-2.97,0.48l-1.1,-1.58l-1.62,-0.7l-1.31,-2.32l-1.38,-0.72l-3.71,0.94l-3.3,-2.2l-0.56,0.12l-0.97,1.52l-5.27,-9.77l-3.03,-3.13l0.73,-1.08l-0.04,-0.5l-0.5,-0.06l-6.2,3.97l-1.82,0.18l0.16,-1.83l-0.23,-0.4l-3.22,-1.46l-2.47,0.85l-0.7,-4.0l-0.31,-0.32l-4.5,-0.95l-2.52,1.84l-6.18,1.58l-1.3,1.08l-9.51,1.62l-1.15,1.45l-0.03,0.46l1.56,2.48l-1.98,0.89l-0.21,0.52l0.35,0.85l-2.18,1.8l0.03,0.64l3.81,2.6l-0.44,1.31l-3.21,-0.16l-0.87,1.02l-3.08,-1.9l-3.97,0.08l-2.66,1.61l-8.29,-4.28l-4.1,0.06l-5.42,4.44l-0.37,2.36l-2.0,-1.76l-0.63,0.13l-2.0,4.27l0.61,1.02l-1.32,2.63l0.05,0.44l2.13,2.54l1.95,0.05l1.39,2.15l-0.23,1.74l1.12,0.83l-0.86,1.61l-2.49,0.71l-2.49,3.66l0.0,0.45l2.19,3.19l-0.16,2.44l2.54,3.7l-1.62,1.81l-0.67,-0.14l-1.63,-1.93l-2.29,-0.94l-0.94,-1.47l-2.34,-0.71l-1.48,0.44l-0.42,-0.51l-3.52,-1.68l-5.76,-1.14l-0.47,0.2l-2.87,-2.64l-2.9,-1.36l-1.63,-1.56l1.39,-0.52l2.08,-3.01l-0.04,-0.51l-0.98,-1.01l3.14,-1.27l0.25,-0.4l-0.07,-0.8l-0.5,-0.35l-1.72,0.45l0.04,-0.92l1.06,-0.85l2.31,-0.26l0.34,-0.28l0.4,-1.47l-0.51,-1.94l0.95,-1.86l0.01,-1.32l-0.27,-0.37l-3.69,-1.26l-1.41,0.02l-1.42,-1.68l-0.43,-0.12l-1.78,0.57l-2.78,-1.21l-0.01,-0.71l-0.89,-1.73l-2.01,-0.38l-0.13,-0.77l0.53,-1.15l-1.6,-2.31l-3.58,0.03l-0.92,0.88l-0.42,-0.07l-1.05,-3.54l2.29,-0.07l0.97,-0.92l0.06,-0.51l-0.9,-1.27l-1.4,-0.62l-0.06,-0.85l-0.95,-0.73l-1.43,-2.57l0.49,-1.21l-0.25,-2.07l-2.69,-1.38l-1.22,0.37l-0.45,-0.94l-2.46,-1.05l-0.74,-2.46l-0.21,-2.19l-1.07,-1.09l0.93,-1.49l-0.72,-4.29l1.7,-2.67l-0.24,-0.98ZM749.34,295.94l-0.76,0.56l-0.11,0.15l-0.01,-0.65l0.87,-0.06ZM871.96,154.57l2.04,-0.2l3.29,2.04l-0.13,0.64l-2.37,1.7l-5.54,0.79l-0.34,-1.85l3.05,-3.11ZM797.75,123.25l-2.42,3.18l-3.66,-0.78l-4.39,-3.6l0.47,-2.52l10.01,3.72ZM783.79,118.53l-1.81,6.68l-8.92,-0.26l-4.06,2.13l-4.64,-5.86l1.28,-6.57l3.04,-1.79l6.39,0.44l8.71,5.22ZM778.23,253.99l-0.64,-1.28l0.31,-0.17l0.33,1.45ZM778.36,254.55l0.92,4.28l-0.05,4.08l1.05,4.08l2.23,6.09l-2.91,-0.99l-0.51,0.27l-1.54,5.47l2.42,4.01l-0.04,1.39l-1.22,-1.41l-0.65,0.06l-1.07,1.83l-0.29,-1.88l0.28,-3.61l-0.28,-4.01l0.58,-2.92l0.11,-5.24l-1.46,-4.02l0.21,-5.38l2.23,-2.09ZM780.09,139.86l-3.31,0.05l-5.09,-1.07l2.11,-3.11l2.77,-0.74l3.29,3.15l0.23,1.71ZM683.7,87.54l-13.17,4.38l4.34,-15.76l1.75,-1.29l1.59,0.74l6.17,7.25l-0.68,4.69ZM670.82,80.26l-5.03,1.48l-6.76,-3.64l-4.04,-4.98l-1.9,-10.03l-3.29,-2.93l6.28,-10.21l5.0,-3.39l4.63,7.67l5.72,14.22l-0.6,11.8ZM564.4,160.28l-0.92,0.41l-7.78,-0.94l-0.83,-3.41l-4.32,-2.0l-0.33,-3.85l2.54,-1.96l-0.08,-4.42l4.9,-7.29l-0.16,-0.58l-1.86,-0.88l5.7,-7.68l-0.57,-4.44l5.43,-5.07l8.18,-6.55l8.25,-1.96l4.4,-4.05l4.43,-1.3l1.54,3.81l-1.55,3.04l-16.43,9.84l-7.93,9.27l-7.69,17.13l0.59,6.93l4.49,5.95ZM548.68,56.87l-5.47,3.05l-0.54,2.57l-2.49,2.05l-2.33,-2.98l1.37,-4.49l-0.35,-0.52l-4.3,-0.36l3.7,-2.13l3.34,-0.17l0.47,3.78l0.35,0.35l0.42,-0.25l1.41,-3.62l2.04,-2.24l3.21,2.97l-0.81,1.96ZM477.39,251.71l-4.1,0.06l-2.6,-0.41l0.38,-1.28l3.15,-1.29l3.25,1.22l-0.09,1.7Z", "name": "Russia"}, "RW": {"path": "M497.0,418.15l0.71,1.01l-0.11,1.09l-1.63,0.03l-1.04,1.39l-0.83,-0.11l0.51,-1.2l0.08,-1.34l0.42,-0.41l0.7,0.14l1.19,-0.61Z", "name": "Rwanda"}, "RS": {"path": "M469.33,288.43l0.49,-1.17l-1.2,-1.97l1.47,-0.73l1.3,0.13l1.18,1.23l0.45,1.29l1.35,0.74l0.34,1.53l1.46,1.02l0.76,-0.3l0.25,0.82l-0.51,0.87l0.22,1.27l1.08,1.41l-0.8,0.94l-0.38,1.72l-1.22,0.09l0.27,-0.81l-2.46,-2.38l-0.93,0.06l-0.47,1.05l-2.15,-1.58l0.57,-1.85l-1.13,-1.51l0.53,-1.32l-0.49,-0.55Z", "name": "Serbia"}, "TL": {"path": "M734.55,437.87l-0.09,-0.98l4.5,-0.86l-2.82,1.28l-1.59,0.55Z", "name": "Timor-Leste"}, "TM": {"path": "M553.03,299.38l-0.05,0.44l-0.1,-0.29l0.15,-0.15ZM555.85,298.15l0.46,-0.11l1.47,0.82l2.08,2.72l4.07,-0.21l0.38,-0.49l-0.34,-1.39l1.95,-1.07l1.9,-1.78l2.93,1.56l0.41,2.75l1.21,0.76l2.57,-0.15l0.62,0.45l1.32,3.46l4.54,3.8l2.67,1.6l3.07,1.26l-0.04,1.22l-1.32,-0.81l-0.61,0.19l-0.32,0.93l-2.19,0.86l-0.47,2.34l-1.21,0.81l-1.91,0.45l-0.73,1.44l-1.54,0.33l-2.22,-1.01l-0.2,-2.37l-0.37,-0.37l-1.72,-0.1l-2.76,-2.67l-2.14,-0.44l-2.84,-1.62l-1.78,-0.29l-1.25,0.58l-1.56,-0.09l-2.01,1.85l-1.69,0.47l-0.37,-1.75l0.36,-3.28l-0.2,-0.39l-1.68,-0.94l0.55,-1.92l-0.34,-0.51l-1.23,-0.14l0.38,-1.9l2.23,0.64l2.2,-1.06l0.12,-0.63l-1.77,-1.94l-0.69,-1.85Z", "name": "Turkmenistan"}, "TJ": {"path": "M597.8,305.02l-0.08,0.09l-2.5,-0.5l-0.48,0.34l-0.24,1.88l0.43,0.45l2.63,-0.24l3.18,1.04l4.38,-0.45l0.56,2.63l0.54,0.29l0.66,-0.26l1.12,0.54l0.21,2.4l-3.76,-0.23l-1.81,1.45l-1.74,0.8l-0.62,-0.64l0.22,-2.47l-0.65,-0.49l-0.04,-1.02l-1.36,-0.73l-0.48,0.07l-1.08,1.11l-0.54,1.62l-1.3,-0.06l-0.96,1.26l-0.91,-0.37l-1.63,0.91l-0.24,-0.12l1.28,-3.1l-0.54,-2.38l-1.69,-0.89l0.36,-0.8l2.18,-0.05l1.19,-1.8l0.76,-1.99l2.44,-0.56l-0.28,1.13l0.36,0.91l0.43,0.25Z", "name": "Tajikistan"}, "RO": {"path": "M487.52,276.99l0.59,0.28l2.89,4.68l-0.18,3.12l0.45,1.64l1.3,0.9l1.37,-0.47l0.76,0.41l0.03,0.46l-0.83,0.52l-0.57,-0.25l-0.55,0.3l-0.63,3.8l-0.98,-0.24l-2.1,-1.28l-2.95,0.81l-1.25,0.86l-3.49,-0.17l-1.88,-0.53l-0.87,0.17l-0.86,-1.54l0.34,-0.35l-0.05,-0.61l-0.62,-0.44l-0.51,0.04l-0.55,0.55l-1.04,-0.73l-0.17,-1.29l-1.58,-1.05l-0.34,-1.15l-0.92,-0.96l1.63,-0.65l2.66,-4.89l2.39,-1.44l2.93,0.39l1.06,0.83l0.47,0.02l0.79,-0.53l1.77,-0.34l0.76,-0.87l0.76,0.0Z", "name": "Romania"}, "GW": {"path": "M386.23,383.41l-0.29,0.84l0.15,0.61l-2.21,0.6l-0.86,0.96l-1.04,-0.83l-1.09,-0.23l-0.54,-1.07l-0.66,-0.5l2.41,-0.49l4.13,0.1Z", "name": "Guinea-Bissau"}, "GT": {"path": "M195.08,379.54l-2.48,-0.37l-1.03,-0.46l-1.14,-0.9l0.3,-1.01l-0.24,-0.68l0.96,-1.69l2.98,-0.01l0.4,-0.37l-0.19,-1.29l-1.68,-1.44l0.53,-0.4l0.0,-1.08l3.85,0.02l-0.21,4.61l0.4,0.43l1.48,0.38l-1.5,1.01l-0.34,0.71l0.12,0.57l-2.2,1.98Z", "name": "Guatemala"}, "GR": {"path": "M487.09,300.31l-0.62,1.67l-0.37,0.23l-2.84,-0.38l-3.03,0.86l-0.18,0.66l1.34,1.43l-0.67,0.28l-1.12,0.0l-1.2,-1.54l-0.65,0.03l-0.52,1.05l0.56,1.95l1.06,1.34l-0.61,0.46l-0.05,0.59l2.53,2.34l0.02,1.02l-1.77,-0.64l-0.5,0.54l0.53,1.16l-1.1,0.23l-0.3,0.52l0.77,2.24l-0.99,0.02l-1.84,-1.22l-1.37,-4.59l-2.21,-3.25l-0.12,-0.67l1.06,-1.44l0.2,-1.06l0.84,-0.7l0.03,-0.55l1.33,-0.24l1.01,-0.71l1.21,0.06l0.67,-0.62l2.26,-0.01l1.8,-0.83l1.85,1.11l2.28,-0.31l0.35,-0.39l0.01,-0.9l0.35,0.26ZM480.49,319.61l0.67,0.51l-0.8,-0.16l0.13,-0.35ZM482.3,320.35l2.74,0.05l0.29,0.4l-2.04,0.15l-0.32,-0.47l-0.67,-0.13Z", "name": "Greece"}, "GQ": {"path": "M448.79,409.52l0.02,2.22l-4.09,0.0l0.69,-2.27l3.38,0.05Z", "name": "Eq. Guinea"}, "GY": {"path": "M277.42,399.96l-0.32,1.83l-1.32,0.57l-0.23,0.46l-0.28,2.01l1.11,1.82l0.83,0.19l0.32,1.25l1.13,1.62l-1.21,-0.19l-1.08,0.71l-1.77,0.5l-0.44,0.46l-0.86,-0.09l-1.32,-1.01l-0.77,-2.27l0.36,-1.91l0.68,-1.23l-0.57,-1.17l-0.74,-0.43l0.12,-1.16l-0.9,-0.69l-1.1,0.09l-1.31,-1.48l0.53,-0.72l-0.04,-0.84l1.99,-0.86l0.05,-0.59l-0.71,-0.78l0.14,-0.57l1.66,-1.24l1.36,0.77l1.41,1.5l0.06,1.15l0.37,0.38l0.8,0.05l2.06,1.87Z", "name": "Guyana"}, "GE": {"path": "M521.61,293.9l5.38,1.03l3.26,1.57l0.84,0.7l1.39,-0.49l2.05,0.63l0.69,1.25l1.15,0.65l-0.2,0.63l1.05,1.54l-1.06,-0.15l-1.81,-0.93l-0.97,0.52l-3.21,0.48l-2.28,-1.55l-2.37,0.06l0.23,-1.11l-0.75,-2.51l-1.45,-1.26l-1.43,-0.44l-0.53,-0.61Z", "name": "Georgia"}, "GB": {"path": "M412.72,233.04l-2.32,4.44l0.45,0.57l2.5,-0.63l2.22,0.02l-0.56,3.24l-2.22,4.0l0.31,0.59l2.36,0.26l2.34,5.43l1.76,0.84l2.21,6.35l2.96,0.93l-0.25,2.13l-1.17,1.09l-0.09,0.47l0.87,1.82l-1.92,1.78l-3.29,-0.02l-4.09,1.04l-1.02,-0.68l-0.52,0.07l-1.5,1.67l-2.09,-0.4l-1.88,1.4l-0.67,-0.39l3.29,-3.71l2.15,-0.83l0.25,-0.41l-0.33,-0.35l-3.72,-0.64l-0.47,-1.06l2.27,-1.1l0.17,-0.57l-1.29,-2.09l0.39,-2.22l3.35,0.34l0.44,-0.34l0.37,-2.46l-1.77,-2.98l-3.1,-0.89l-0.43,-0.84l0.8,-2.18l-0.82,-1.22l-0.67,0.01l-0.66,1.02l-0.1,-3.02l-1.24,-2.37l0.87,-4.6l1.78,-3.54l1.83,0.33l2.26,-0.3ZM406.3,251.21l-1.06,2.32l-1.53,-0.71l-1.21,0.0l0.4,-1.97l-0.42,-1.89l1.46,-0.13l2.36,2.36Z", "name": "United Kingdom"}, "GA": {"path": "M453.24,409.42l-0.08,0.98l0.7,1.29l2.36,0.24l-0.98,2.63l1.18,1.79l0.25,1.78l-0.29,1.52l-0.6,0.93l-1.84,-0.09l-1.23,-1.11l-0.66,0.23l-0.15,0.84l-1.42,0.26l-1.02,0.7l-0.11,0.52l0.77,1.35l-1.34,0.98l-3.94,-4.31l-1.44,-2.45l0.06,-0.6l0.54,-0.81l1.05,-3.46l4.17,-0.07l0.4,-0.4l-0.02,-2.66l2.39,0.21l1.25,-0.27Z", "name": "Gabon"}, "GN": {"path": "M391.8,383.91l0.47,0.81l1.11,-0.32l0.98,0.71l1.07,0.2l2.26,-1.23l0.63,0.44l1.13,1.58l-0.48,1.41l0.8,0.3l-0.08,0.48l0.46,0.69l-0.35,1.37l1.05,2.63l-1.0,0.69l0.03,1.42l-0.72,-0.06l-1.07,1.01l-0.24,-0.27l0.07,-1.11l-1.05,-1.55l-0.49,-0.14l-1.3,0.36l-0.35,-2.01l-1.6,-2.19l-2.0,-0.0l-1.31,0.54l-1.95,2.19l-1.86,-2.2l-1.2,-0.78l-0.3,-1.12l-0.8,-0.86l0.65,-0.73l0.81,-0.03l1.64,-0.8l0.23,-1.88l2.67,0.64l0.89,-0.31l1.21,0.15Z", "name": "Guinea"}, "GM": {"path": "M379.31,381.18l0.1,-0.36l2.43,-0.07l0.74,-0.62l0.5,-0.03l0.83,0.53l-1.08,-0.33l-1.87,0.91l-1.65,-0.04ZM384.0,380.68l0.95,0.06l0.76,-0.23l-0.59,0.32l-1.11,-0.15Z", "name": "Gambia"}, "GL": {"path": "M352.9,3.19l15.35,16.28l-4.35,6.99l-9.4,0.81l-13.48,1.81l-0.32,0.54l1.26,3.26l0.46,0.25l8.67,-1.96l7.39,6.05l0.55,-0.04l4.4,-4.95l1.83,5.61l-2.72,9.68l0.18,0.45l0.48,-0.06l6.34,-6.15l11.94,-6.62l7.14,3.24l1.33,6.85l-10.07,11.17l-1.42,3.42l-7.83,2.5l-0.28,0.42l0.35,0.36l5.33,0.65l-2.8,9.83l-2.03,8.69l0.08,13.63l2.84,7.11l-3.6,0.49l-4.12,3.47l-0.05,0.56l4.54,5.53l0.56,8.17l-2.39,0.81l-0.24,0.53l3.05,7.7l-5.05,0.6l-0.27,0.64l2.78,3.54l-0.72,2.75l-3.27,1.26l-3.42,0.02l-0.35,0.59l3.09,5.7l0.03,2.82l-4.32,-2.99l-0.57,0.13l-1.29,2.22l0.14,0.54l3.3,2.0l3.18,4.75l0.88,5.79l-3.85,1.25l-4.86,-7.12l-0.48,-0.14l-0.24,0.44l0.83,5.08l-2.81,3.81l0.3,0.64l9.17,0.61l-6.07,5.68l-6.74,5.42l-7.2,2.3l-2.98,0.14l-2.66,2.67l-3.44,6.75l-5.23,4.25l-1.73,0.27l-7.11,3.08l-2.15,3.69l-0.09,4.21l-1.22,3.58l-4.03,4.36l0.89,4.48l-2.31,8.95l-3.05,0.26l-3.56,-4.0l-5.12,-0.16l-2.26,-2.64l-1.69,-5.21l-4.31,-6.82l-1.24,-3.62l-0.4,-5.4l-3.39,-5.47l0.87,-4.47l-1.62,-2.41l2.37,-7.41l3.81,-2.67l1.01,-3.01l0.52,-5.6l-0.22,-0.39l-0.45,0.06l-4.16,3.58l-1.99,0.9l-2.73,-2.07l-0.16,-4.72l0.9,-3.66l1.94,-0.09l5.03,1.98l0.47,-0.14l-0.03,-0.49l-6.54,-7.53l-0.47,-0.11l-2.25,1.0l-1.7,-1.6l2.69,-7.67l-1.51,-3.12l-4.99,-15.74l-3.17,-3.76l-0.11,-4.29l-6.93,-6.07l-5.4,-0.76l-12.62,1.16l-2.75,-3.16l-4.1,-6.46l6.13,-3.31l4.96,-0.6l0.35,-0.37l-0.29,-0.42l-10.63,-2.99l-5.42,-4.66l0.32,-4.37l9.32,-6.03l9.34,-6.65l0.97,-5.04l-0.15,-0.39l-6.52,-4.97l2.06,-5.6l8.57,-10.89l3.56,-1.73l0.22,-0.41l-1.01,-7.43l5.7,-4.5l7.58,-2.82l7.37,-0.16l2.62,5.4l0.69,0.04l6.35,-9.67l5.63,6.55l3.58,1.5l5.14,5.66l0.54,0.05l0.1,-0.53l-5.89,-9.52l0.33,-7.89l8.21,-11.86l8.55,0.93l0.41,-0.25l3.12,-7.8l8.58,-2.09l19.79,2.78Z", "name": "Greenland"}, "GH": {"path": "M420.53,387.35l-0.01,0.72l0.96,1.2l0.24,3.75l0.59,0.95l-0.51,2.1l0.19,1.41l1.02,2.22l-6.97,2.85l-1.8,-0.57l0.04,-0.89l-1.02,-2.04l0.61,-2.66l1.07,-2.33l-0.96,-6.5l5.01,0.07l0.94,-0.39l0.61,0.11Z", "name": "Ghana"}, "OM": {"path": "M568.09,360.37l-0.91,1.71l-1.22,0.04l-0.59,0.78l-0.41,1.53l0.26,1.63l-1.16,0.05l-1.56,0.99l-0.76,1.78l-1.62,0.05l-0.98,0.66l-0.17,1.17l-0.89,0.53l-1.49,-0.18l-2.4,0.95l-2.48,-5.51l7.35,-2.77l1.67,-5.36l-1.12,-2.14l0.05,-0.87l0.67,-1.04l0.07,-1.08l0.91,-0.43l-0.05,-2.14l0.7,-0.01l1.01,1.68l1.51,1.12l3.3,0.87l1.73,2.37l0.81,0.38l-1.23,2.44l-0.99,0.81ZM561.83,347.23l-0.0,-0.01l0.01,-0.01l-0.0,0.02Z", "name": "Oman"}, "TN": {"path": "M448.18,315.32l-1.08,1.46l-0.02,1.43l0.84,0.93l-0.29,2.3l-1.65,1.83l0.48,1.65l1.41,0.33l0.53,1.2l0.9,0.55l-0.11,1.83l-3.54,2.81l-0.09,2.52l-0.58,0.32l-0.96,-4.72l-1.54,-1.32l-0.15,-0.82l-1.93,-1.68l-0.19,-1.93l1.52,-1.74l0.59,-2.52l-0.38,-3.0l0.43,-1.35l2.45,-1.14l1.29,0.28l-0.06,1.25l0.59,0.37l1.54,-0.84Z", "name": "Tunisia"}, "JO": {"path": "M518.65,329.54l-5.15,1.67l-0.19,0.64l2.19,2.56l-0.58,0.44l-0.33,0.78l-1.71,0.36l-1.71,1.89l-2.34,-0.38l1.21,-4.6l0.56,-4.33l2.81,0.99l4.45,-2.88l0.8,2.87Z", "name": "Jordan"}, "HR": {"path": "M455.59,286.98l1.42,0.1l0.57,-0.46l0.74,0.44l0.98,0.07l0.43,-0.4l-0.01,-0.73l0.86,-0.57l0.21,-1.25l1.62,-0.78l2.55,1.93l2.07,0.69l0.88,-0.35l1.09,1.85l-0.56,0.77l-1.05,-0.63l-1.67,0.05l-2.1,-0.57l-1.3,0.07l-0.58,0.54l-0.57,-0.52l-0.65,0.16l-0.47,1.84l1.79,2.75l2.11,2.07l0.81,1.23l-1.27,-1.06l-2.2,-0.99l-1.73,-2.1l0.2,-0.63l-1.06,-1.38l-0.31,-1.43l-1.61,-0.56l-0.49,0.2l-0.45,0.89l-0.26,-1.24Z", "name": "Croatia"}, "HT": {"path": "M238.65,368.15l-1.58,-0.17l-1.19,0.44l-0.91,-0.56l0.06,-0.21l3.62,0.5ZM239.22,368.07l0.82,-0.54l0.06,-0.62l-1.02,-1.03l0.02,-0.84l-0.3,-0.39l-0.93,-0.35l3.16,0.46l0.02,1.9l-0.48,0.35l-0.07,0.58l0.54,0.74l-1.81,-0.26Z", "name": "Haiti"}, "HU": {"path": "M462.05,281.37l0.68,-1.93l-0.16,-0.54l0.71,-0.0l0.39,-0.35l0.1,-0.84l1.72,1.0l2.35,-0.43l0.43,-0.77l3.49,-0.92l0.69,-0.91l0.54,-0.15l2.55,1.09l0.69,-0.26l1.03,0.76l0.1,0.55l-1.45,0.83l-2.6,4.82l-1.79,0.61l-1.69,-0.11l-2.72,1.41l-1.83,-0.61l-2.55,-1.92l-0.7,-1.3Z", "name": "Hungary"}, "HN": {"path": "M199.6,379.29l-1.71,-1.22l0.07,-0.96l3.04,-2.17l2.37,0.29l1.27,-0.09l1.1,-0.53l1.3,0.28l1.14,-0.26l1.37,0.37l2.25,1.39l-2.37,0.95l-1.23,-0.4l-0.88,1.31l-1.28,1.0l-0.43,-0.3l-0.55,0.08l-0.42,0.53l-0.96,0.05l-0.36,0.41l0.04,0.89l-0.52,0.6l-0.3,0.04l-0.3,-0.56l-0.66,-0.32l0.12,-0.68l-0.48,-0.66l-0.63,-0.25l-0.97,0.2Z", "name": "Honduras"}, "PR": {"path": "M256.17,368.34l-0.27,0.28l-2.83,0.06l-0.07,-0.57l1.95,-0.1l1.23,0.34Z", "name": "Puerto Rico"}, "PS": {"path": "M509.06,331.4l0.27,-0.17l-0.04,0.09l-0.23,0.08ZM509.37,331.14l-0.03,-0.63l-0.35,-0.18l0.32,-1.21l0.24,0.11l-0.19,1.91Z", "name": "Palestine"}, "PT": {"path": "M401.85,314.47l-0.65,0.52l-1.11,-0.37l-0.93,0.18l0.29,-1.97l-0.24,-1.95l-1.24,-0.59l-0.47,-0.95l0.18,-1.87l1.01,-1.29l0.69,-3.25l-0.04,-1.52l-0.59,-2.16l1.29,-0.96l0.85,1.5l3.09,-0.33l0.49,1.17l-1.07,1.02l-0.03,2.43l-0.41,0.6l-0.08,1.25l-0.8,0.2l-0.26,0.57l0.93,1.79l-0.64,1.95l0.78,1.16l-1.12,1.72l0.08,1.13Z", "name": "Portugal"}, "PY": {"path": "M274.9,466.41l0.74,1.55l-0.16,3.55l0.32,0.41l2.64,0.52l1.11,-0.48l1.4,0.6l0.36,0.62l0.53,3.53l1.27,0.41l0.98,-0.39l0.52,0.28l-0.0,1.23l-1.21,5.54l-2.09,1.99l-1.8,0.41l-4.72,-1.03l2.21,-3.81l-0.32,-1.54l-2.77,-1.32l-3.03,-2.01l-2.07,-0.45l-4.34,-4.19l0.91,-2.99l0.08,-1.45l1.07,-2.09l4.13,-0.73l2.18,0.04l2.06,1.2l0.03,0.61Z", "name": "Paraguay"}, "PA": {"path": "M213.79,393.56l0.26,-1.53l-0.36,-0.26l-0.01,-0.5l0.44,-0.1l0.93,1.4l1.26,0.03l0.77,0.5l1.38,-0.24l2.51,-1.12l0.86,-0.72l3.45,0.85l1.4,1.19l0.41,1.75l-0.21,0.34l-0.53,-0.12l-0.47,0.29l-0.16,0.6l-0.68,-1.28l0.45,-0.49l-0.19,-0.66l-0.47,-0.13l-0.54,-0.84l-1.5,-0.75l-1.1,0.16l-0.75,0.99l-1.62,0.84l-0.18,0.96l0.85,0.97l-0.58,0.45l-0.69,0.08l-0.34,-1.18l-1.27,0.03l-0.71,-1.05l-2.59,-0.47Z", "name": "Panama"}, "PG": {"path": "M808.58,428.76l2.54,2.57l-0.13,0.26l-0.33,0.12l-0.87,-0.78l-1.22,-2.17ZM801.41,422.94l0.51,0.29l0.26,0.27l-0.49,-0.36l-0.28,-0.21ZM803.17,424.48l0.59,0.5l0.08,1.06l-0.29,-0.91l-0.38,-0.65ZM796.68,428.31l0.52,0.75l1.43,-0.19l2.27,-1.82l-0.01,-1.43l1.12,0.16l-0.04,1.1l-0.7,1.28l-1.12,0.18l-0.62,0.79l-2.46,1.11l-1.17,-0.0l-3.08,-1.25l3.41,0.0l0.45,-0.68ZM789.15,433.47l2.31,1.81l1.59,2.62l1.34,0.14l-0.06,0.66l0.31,0.43l1.06,0.24l0.06,0.66l2.25,1.06l-1.21,0.13l-0.72,-0.64l-4.56,-0.65l-3.22,-2.89l-1.49,-2.35l-3.27,-1.11l-2.38,0.72l-1.59,0.86l-0.2,0.42l0.27,1.56l-1.55,0.69l-1.36,-0.4l-2.21,-0.09l-0.08,-15.44l8.39,2.93l2.95,2.4l0.6,1.64l4.02,1.5l0.31,0.69l-1.76,0.21l-0.33,0.52l0.55,1.68Z", "name": "Papua New Guinea"}, "PE": {"path": "M244.97,425.11l-1.26,-0.07l-0.57,0.42l-1.93,0.45l-2.98,1.76l-0.36,1.36l-0.58,0.8l0.12,1.37l-1.24,0.6l-0.22,1.22l-0.62,0.84l1.04,2.28l1.28,1.44l-0.41,0.85l0.32,0.57l1.48,0.13l1.16,1.37l2.21,0.07l1.63,-1.08l-0.13,3.04l0.3,0.4l1.14,0.29l1.31,-0.35l1.9,3.62l-0.48,0.86l-0.17,3.89l-0.94,1.6l0.35,0.76l-0.48,1.08l0.98,2.0l-2.1,3.89l-0.97,0.51l-2.17,-1.31l-0.39,-1.18l-4.95,-2.62l-4.46,-2.82l-1.85,-1.53l-0.91,-1.87l0.3,-0.97l-2.11,-3.36l-4.82,-9.74l-1.04,-1.2l-0.87,-1.95l-3.4,-2.49l0.58,-1.18l-1.13,-2.23l0.66,-1.5l1.45,-1.15l-0.6,0.99l0.07,0.92l0.47,0.36l1.74,0.03l0.97,1.17l0.54,0.07l1.42,-1.03l0.6,-1.84l1.42,-2.02l3.04,-1.04l2.73,-2.62l0.86,-1.74l-0.1,-1.87l1.44,1.02l0.9,1.25l1.06,0.59l1.7,2.73l1.86,0.31l1.45,-0.61l0.96,0.39l1.36,-0.19l1.45,0.89l-1.4,2.21l0.31,0.61l0.59,0.05l0.47,0.5Z", "name": "Peru"}, "PK": {"path": "M615.13,319.81l-1.88,2.0l-2.59,0.42l-3.73,-0.73l-1.6,1.43l-0.09,0.4l1.77,4.7l1.73,1.32l-1.73,1.38l-0.11,2.26l-2.34,2.8l-1.59,2.95l-2.46,2.8l-3.03,-0.07l-2.76,2.96l0.05,0.59l1.51,1.16l0.26,1.98l1.44,1.55l0.37,1.77l-5.02,-0.01l-1.78,1.76l-1.41,-0.53l-0.76,-1.94l-2.27,-2.23l-11.61,0.89l0.72,-2.47l3.43,-1.37l0.25,-0.43l-0.21,-1.29l-1.2,-0.67l-0.28,-2.57l-2.29,-1.2l-1.32,-2.09l2.85,1.0l2.62,-0.4l1.42,0.35l0.77,-0.59l1.71,0.2l3.25,-1.2l0.26,-0.36l0.08,-2.33l1.19,-1.41l1.68,0.0l0.58,-0.87l1.59,-0.32l1.2,0.17l0.98,-0.83l0.01,-1.99l0.94,-1.58l1.48,-0.71l0.19,-0.54l-0.69,-1.39l2.06,-0.12l0.69,-1.09l-0.03,-1.23l1.12,-1.15l-0.18,-1.88l-0.5,-1.14l1.17,-1.09l5.42,-0.99l2.59,-0.89l1.6,1.26l0.97,2.53l3.5,1.06Z", "name": "Pakistan"}, "PH": {"path": "M737.01,393.71l0.39,2.98l-0.44,1.19l-0.55,-1.53l-0.67,-0.14l-1.17,1.28l0.65,2.1l-0.42,0.69l-2.48,-1.23l-0.58,-1.49l0.66,-1.03l-0.1,-0.53l-1.59,-1.19l-0.56,0.08l-0.65,0.87l-1.23,0.0l-1.58,0.97l0.83,-1.81l2.56,-1.42l0.65,0.84l0.45,0.13l1.9,-0.69l0.56,-1.12l1.5,-0.06l0.38,-0.43l-0.09,-1.2l1.21,0.72l0.36,2.03ZM733.59,386.41l0.05,0.76l0.08,0.27l-0.8,-0.42l-0.18,-0.72l0.85,0.12ZM734.08,385.93l-0.12,-1.13l-1.01,-1.29l1.36,0.03l0.53,0.73l0.51,2.06l-1.27,-0.4ZM733.76,387.52l0.39,0.99l-0.32,0.15l-0.07,-1.14ZM724.65,368.03l1.46,0.71l0.72,-0.31l-0.32,1.19l0.79,1.74l-0.57,1.88l-1.53,1.06l-0.39,2.27l0.56,2.06l1.63,0.57l1.16,-0.27l2.72,1.24l-0.19,1.1l0.77,0.85l-0.08,0.37l-1.4,-0.9l-0.88,-1.29l-0.66,0.0l-0.38,0.55l-1.6,-1.32l-2.15,0.36l-0.87,-0.4l0.07,-0.62l0.66,-0.56l-0.01,-0.62l-0.75,-0.6l-0.72,0.44l-0.73,-0.88l-0.39,-2.53l0.32,0.27l0.66,-0.28l0.26,-4.04l0.71,-2.06l1.14,0.0ZM731.03,388.72l-0.88,0.85l-1.19,1.95l-1.05,-1.2l0.93,-1.11l0.32,-1.48l0.52,-0.06l-0.27,1.16l0.22,0.45l0.49,-0.12l1.0,-1.32l-0.08,0.86ZM726.83,385.61l0.83,0.38l1.17,-0.0l-0.02,0.48l-2.0,1.41l0.02,-2.28ZM724.81,381.88l-0.39,1.29l-1.42,-1.98l1.2,0.05l0.6,0.64ZM716.54,391.7l1.12,-0.97l0.03,-0.03l-0.28,0.38l-0.87,0.63ZM719.21,388.91l0.04,-0.07l0.8,-1.54l0.16,0.76l-1.01,0.85Z", "name": "Philippines"}, "PL": {"path": "M468.45,271.45l-1.1,-1.82l-1.87,-0.39l-0.48,-1.25l-1.72,-0.44l-0.47,0.25l-0.21,0.56l-0.72,-0.43l0.12,-0.82l-0.32,-0.45l-1.74,-0.32l-1.05,-1.13l-0.96,-2.4l0.17,-1.46l-0.62,-2.19l-0.82,-1.37l0.61,-1.22l-0.51,-1.88l1.46,-1.07l6.88,-3.37l2.12,0.62l0.15,0.81l0.38,0.33l5.51,0.54l4.53,-0.06l1.06,0.38l0.5,1.09l0.14,1.93l0.66,1.51l-0.01,1.34l-1.3,0.73l-0.17,0.5l0.74,1.83l0.07,1.86l1.22,3.37l-0.19,0.78l-1.23,0.53l-2.27,3.23l0.24,1.15l-1.99,-1.23l-2.01,0.46l-1.38,-0.32l-1.2,0.67l-1.05,-1.13l-1.17,0.27Z", "name": "Poland"}, "ZM": {"path": "M481.47,443.27l0.39,0.31l2.52,0.15l0.99,1.18l2.01,0.36l1.4,-0.64l0.69,1.18l1.78,0.33l1.84,2.38l2.24,0.19l0.4,-0.43l-0.21,-2.77l-0.62,-0.3l-0.48,0.33l-1.98,-1.18l0.72,-5.32l-0.51,-1.19l0.58,-1.31l3.68,-0.62l0.26,0.64l1.21,0.63l0.9,-0.22l2.16,0.67l1.33,0.71l1.07,1.02l0.56,1.89l-0.88,2.72l0.43,2.1l-0.73,0.88l-0.76,2.39l0.6,0.68l-6.61,1.85l-0.29,0.44l0.19,1.47l-1.69,0.36l-1.43,1.04l-0.38,0.89l-0.87,0.26l-3.48,3.75l-4.15,-0.54l-1.52,-1.01l-1.77,-0.14l-1.82,0.53l-3.04,-3.46l0.11,-7.69l4.82,0.03l0.39,-0.49l-0.18,-0.76l0.33,-0.84l-0.4,-1.37l0.24,-1.06Z", "name": "Zambia"}, "EH": {"path": "M384.42,359.7l0.26,-0.83l1.06,-1.32l0.8,-3.63l3.38,-2.88l0.69,-1.87l0.06,5.03l-1.98,0.21l-0.94,1.63l0.39,3.66l-3.71,-0.01ZM392.0,347.13l0.72,-1.91l1.77,-0.25l2.09,0.35l0.96,-0.65l1.27,-0.07l-0.0,2.65l-6.8,-0.12Z", "name": "W. Sahara"}, "EE": {"path": "M485.7,228.2l2.62,0.79l2.44,-0.11l0.18,0.41l-1.67,2.62l0.66,4.56l-0.85,1.18l-1.72,-0.01l-3.21,-2.27l-1.85,0.58l0.22,-2.14l-0.62,-0.38l-0.64,0.42l-1.26,-1.35l-0.18,-2.36l2.87,-1.24l3.02,-0.69Z", "name": "Estonia"}, "EG": {"path": "M492.06,333.38l1.47,0.44l2.95,-1.74l2.03,-0.22l1.52,0.32l0.6,1.27l0.7,0.04l0.41,-0.68l1.8,0.61l1.95,0.17l1.04,-0.54l1.43,4.34l-2.03,4.78l-1.66,-1.85l-1.76,-4.05l-0.65,-0.12l-0.35,0.67l1.04,3.03l3.44,7.26l1.77,3.16l2.04,2.76l-0.37,0.54l0.22,2.06l2.73,2.28l-28.43,0.0l0.0,-19.72l-0.73,-2.31l0.6,-1.66l-0.33,-1.32l0.69,-1.07l3.05,-0.04l4.82,1.62Z", "name": "Egypt"}, "ZA": {"path": "M467.15,505.21l-0.13,-2.11l-0.69,-1.7l0.71,-0.7l-0.12,-2.46l-4.57,-8.67l0.78,-0.92l0.59,0.47l0.69,1.37l2.83,0.75l1.5,-0.27l2.24,-1.46l0.18,-9.94l1.35,2.39l-0.21,1.57l0.61,1.24l0.41,0.2l1.79,-0.29l2.61,-2.16l0.69,-1.37l0.95,-0.5l2.19,1.08l2.04,0.14l1.78,-0.67l0.85,-2.2l1.38,-0.34l1.59,-2.85l2.15,-1.95l3.41,-1.92l1.99,0.46l1.02,-0.28l0.99,0.2l1.75,5.47l-0.37,3.39l-0.82,-0.24l-1.0,0.47l-0.87,1.75l-0.04,1.2l1.98,1.91l1.47,-0.3l0.7,-1.24l1.09,0.01l-0.77,3.89l-0.58,1.15l-2.2,1.88l-3.17,5.02l-2.8,3.01l-3.57,3.07l-2.53,1.12l-1.22,0.15l-0.51,0.75l-1.17,-0.34l-1.4,0.54l-2.58,-0.55l-1.62,0.35l-1.19,-0.11l-2.54,1.18l-2.1,0.47l-1.6,1.15l-0.84,0.05l-0.93,-0.95l-0.93,-0.16l-0.97,-1.21l-0.25,0.05ZM491.46,495.56l0.62,-0.98l1.48,-0.62l1.18,-2.31l-0.07,-0.48l-1.99,-1.77l-1.68,0.59l-1.42,1.19l-1.34,1.82l0.02,0.49l1.88,2.23l1.32,-0.17Z", "name": "South Africa"}, "EC": {"path": "M231.86,415.43l0.29,1.59l-0.69,1.45l-2.61,2.51l-3.13,1.11l-1.53,2.18l-0.49,1.68l-1.0,0.73l-1.02,-1.11l-1.78,-0.16l0.67,-1.15l-0.24,-0.86l1.25,-2.13l-0.54,-1.09l-0.67,-0.08l-0.72,0.87l-0.87,-0.64l0.35,-0.69l-0.36,-1.96l0.81,-0.51l0.45,-1.51l0.92,-1.57l-0.07,-0.97l2.65,-1.33l2.75,1.35l0.77,1.05l2.12,0.35l0.76,-0.32l1.96,1.21Z", "name": "Ecuador"}, "IT": {"path": "M451.58,282.14l3.5,1.08l-0.22,1.43l0.34,1.0l-1.55,-0.28l-2.22,1.64l0.13,1.69l-0.27,1.22l0.82,1.78l2.39,1.84l1.3,2.87l2.79,2.73l2.05,0.1l0.25,0.31l-0.43,0.41l0.09,0.64l4.05,2.19l2.2,2.0l-0.17,0.42l-1.16,-1.17l-2.18,-0.54l-0.45,0.21l-1.05,2.12l0.14,0.51l1.59,1.06l-0.2,1.15l-1.06,0.36l-1.25,2.57l-0.36,0.08l0.0,-0.41l1.01,-2.65l-1.73,-3.5l-1.12,-0.56l-0.67,-1.29l-1.72,-0.75l-1.01,-1.25l-2.01,-0.35l-4.11,-3.59l-1.63,-1.87l-1.03,-3.6l-3.56,-1.55l-1.3,0.58l-1.68,1.6l0.17,-0.9l-0.27,-0.45l-1.14,-0.37l-0.55,-2.31l0.78,-1.37l-0.66,-1.44l0.81,0.44l1.41,-0.27l1.08,-0.94l0.53,0.39l1.19,-0.11l0.75,-1.38l1.51,0.37l1.39,-0.65l0.34,-1.31l1.06,0.36l0.5,-0.22l0.21,-0.51l1.95,-0.5l0.42,0.96ZM459.21,311.54l-0.67,1.87l0.33,1.12l-0.32,0.99l-1.48,-0.91l-4.52,-1.83l0.21,-0.97l2.67,0.25l3.8,-0.53ZM443.92,301.94l1.19,1.86l-0.3,3.74l-1.07,-0.01l-0.75,0.79l-0.53,-0.48l-0.1,-3.76l-0.41,-1.41l1.07,0.0l0.9,-0.74Z", "name": "Italy"}, "VN": {"path": "M690.58,359.66l-2.72,1.89l-2.09,2.52l-0.63,1.98l4.31,6.55l2.32,1.68l1.44,1.97l1.11,4.65l-0.32,4.28l-1.93,1.55l-2.84,1.62l-2.11,2.17l-2.73,2.07l-0.59,-1.06l0.63,-1.54l-0.12,-0.47l-1.34,-1.05l1.51,-0.72l2.55,-0.18l0.3,-0.63l-0.82,-1.16l4.0,-2.09l0.31,-3.08l-0.57,-1.79l0.42,-2.69l-0.73,-1.99l-1.86,-1.79l-3.63,-5.38l-2.73,-1.5l0.37,-0.5l1.5,-0.65l0.21,-0.52l-0.97,-2.33l-0.37,-0.25l-2.83,-0.02l-2.25,-4.02l0.84,-0.42l4.39,-0.3l2.06,-1.35l1.15,0.91l1.88,0.41l-0.18,1.55l1.36,1.19l1.69,0.47Z", "name": "Vietnam"}, "SB": {"path": "M826.68,441.55l-0.6,0.09l-0.2,-0.34l0.37,0.15l0.44,0.09ZM824.18,437.32l-0.26,-0.31l-0.31,-0.91l0.03,0.0l0.54,1.22ZM823.04,439.28l-1.66,-0.22l-0.2,-0.53l1.16,0.28l0.7,0.47ZM819.26,434.58l1.17,0.66l0.03,0.04l-0.82,-0.45l-0.38,-0.25Z", "name": "Solomon Is."}, "ET": {"path": "M516.04,377.54l1.1,0.85l1.63,-0.46l0.68,0.48l1.63,0.03l2.01,0.96l1.73,1.68l1.64,2.1l-1.52,2.06l0.16,1.73l0.39,0.38l2.05,0.01l-0.36,1.03l2.86,3.6l8.32,3.09l1.32,0.02l-6.33,6.76l-3.1,0.11l-2.36,1.77l-1.47,0.04l-0.86,0.79l-1.38,-0.0l-1.32,-0.81l-2.29,1.05l-0.76,0.98l-3.29,-0.41l-3.07,-2.07l-1.8,-0.07l-0.62,-0.6l0.0,-1.24l-0.28,-0.38l-1.15,-0.37l-1.4,-2.6l-1.19,-0.69l-0.47,-1.01l-1.27,-1.23l-1.16,-0.22l0.43,-0.73l1.45,-0.28l0.41,-0.95l-0.03,-2.22l0.68,-2.45l1.05,-0.63l1.43,-3.08l1.57,-1.38l1.02,-2.53l0.35,-1.9l2.52,0.47l0.44,-0.24l0.58,-1.44Z", "name": "Ethiopia"}, "SO": {"path": "M525.13,418.38l-1.13,-1.57l-0.03,-8.86l2.66,-3.38l1.67,-0.13l2.13,-1.69l3.41,-0.23l7.08,-7.57l2.91,-3.71l0.08,-4.85l2.98,-0.67l1.24,-0.87l0.45,-0.0l-0.2,3.03l-1.21,3.64l-2.73,6.0l-2.13,3.66l-5.03,6.17l-8.56,6.4l-2.78,3.08l-0.8,1.56Z", "name": "Somalia"}, "ZW": {"path": "M498.91,471.53l-1.1,-0.22l-0.92,0.29l-2.09,-0.46l-1.49,-1.14l-1.89,-0.44l-0.62,-1.44l-0.01,-0.86l-0.3,-0.38l-0.97,-0.26l-2.72,-2.8l-1.93,-3.41l3.83,0.46l3.74,-3.89l1.08,-0.44l0.26,-0.78l1.25,-0.91l1.41,-0.26l0.5,0.9l1.99,-0.05l1.72,1.19l1.11,0.18l1.05,0.68l0.01,3.05l-0.59,3.84l0.38,0.87l-0.23,1.26l-0.39,0.36l-0.64,1.86l-2.43,2.82Z", "name": "Zimbabwe"}, "ES": {"path": "M415.99,294.24l1.08,1.32l4.61,1.55l1.08,-0.64l2.58,1.41l2.72,-0.33l0.09,1.34l-2.15,2.02l-3.1,0.68l-0.31,0.31l-0.2,1.01l-1.54,1.87l-0.97,2.65l0.86,1.9l-1.34,1.4l-0.49,1.86l-1.88,0.7l-1.66,2.25l-5.35,-0.01l-1.81,1.17l-0.88,1.06l-0.86,-0.18l-0.79,-0.9l-0.68,-1.73l-2.37,-0.68l-0.12,-0.6l1.21,-2.0l-0.78,-1.19l0.62,-1.89l-0.8,-1.8l0.89,-0.51l0.09,-1.41l0.42,-0.63l0.03,-2.39l1.01,-0.78l0.12,-0.47l-1.04,-1.93l-1.46,-0.12l-0.63,0.42l-1.04,0.0l-0.53,-1.39l-0.55,-0.22l-1.31,0.73l0.07,-1.41l-0.87,-1.4l3.08,-2.16l2.98,0.6l3.32,-0.02l2.62,0.58l6.01,-0.06Z", "name": "Spain"}, "ER": {"path": "M520.38,375.96l3.42,2.46l3.5,3.81l0.85,0.55l-0.95,-0.01l-3.51,-3.92l-2.33,-1.16l-1.73,-0.07l-0.91,-0.51l-1.25,0.52l-1.34,-1.03l-0.62,0.17l-0.66,1.63l-2.34,-0.43l-0.18,-0.68l1.29,-5.37l0.62,-0.63l1.95,-0.54l0.87,-1.03l1.17,2.45l0.68,2.36l1.49,1.45Z", "name": "Eritrea"}, "ME": {"path": "M468.91,298.06l-1.24,-1.13l0.5,-2.11l0.88,-0.81l2.29,1.73l-0.52,0.71l-0.77,-0.3l-1.14,1.91Z", "name": "Montenegro"}, "MD": {"path": "M491.9,285.98l-0.28,-1.04l0.25,-1.54l-0.15,-1.8l-3.32,-5.2l1.4,-0.31l1.71,1.08l1.07,0.18l0.88,0.78l0.03,1.44l0.78,0.52l0.33,1.38l0.81,0.94l0.0,0.67l-1.14,-0.08l-0.7,-0.47l-0.52,0.29l-0.06,0.94l-1.08,2.21Z", "name": "Moldova"}, "MG": {"path": "M545.91,449.15l0.4,3.06l0.63,1.22l-0.21,1.04l-0.56,-0.81l-0.69,-0.01l-0.47,0.77l0.41,2.15l-0.18,0.89l-0.72,0.79l-0.15,2.18l-5.77,18.57l-3.92,1.7l-3.12,-1.54l-0.6,-1.26l-0.19,-2.48l-0.86,-2.12l-0.21,-1.83l0.39,-1.67l1.21,-0.76l0.01,-0.79l1.19,-2.08l0.23,-1.69l-1.06,-3.05l-0.19,-2.26l0.81,-1.36l0.32,-1.49l4.63,-1.23l3.44,-3.04l0.85,-1.42l-0.09,-0.71l0.78,-0.04l1.38,-1.79l0.13,-1.65l0.45,-0.62l1.16,1.7l0.59,1.62Z", "name": "Madagascar"}, "MA": {"path": "M378.77,359.44l0.06,-0.63l0.93,-0.75l0.82,-1.41l-0.09,-1.07l0.79,-1.77l1.31,-1.64l0.95,-0.61l0.66,-1.61l0.09,-1.52l0.81,-1.54l1.72,-1.11l1.55,-2.81l1.16,-1.0l2.44,-0.41l1.94,-1.91l1.31,-0.82l2.09,-2.4l-0.51,-3.84l1.25,-3.95l1.5,-1.88l4.46,-2.74l2.37,-4.82l1.43,0.01l1.7,1.31l2.31,-0.21l3.46,0.7l0.81,1.67l0.16,1.84l0.86,3.17l0.57,0.63l-0.27,0.69l-3.05,0.46l-1.26,1.11l-1.33,0.24l-0.33,0.37l-0.09,1.91l-2.69,1.06l-1.07,1.5l-1.89,0.72l-2.58,0.47l-4.04,2.12l-0.53,4.86l-1.16,0.07l-0.92,0.64l-1.96,-0.36l-2.42,0.56l-0.74,1.99l-0.86,0.41l-1.14,3.39l-3.53,3.11l-0.81,3.66l-0.96,1.14l-0.29,0.84l-4.94,0.19Z", "name": "Morocco"}, "UZ": {"path": "M598.64,298.24l-1.64,1.79l0.06,0.61l1.85,1.26l1.99,-0.71l2.27,1.34l-2.58,1.91l-2.57,-0.24l-0.2,-0.5l0.47,-1.39l-0.47,-0.52l-3.35,0.77l-2.1,3.89l-1.86,-0.14l-0.39,0.23l-0.65,1.43l0.21,0.53l1.65,0.69l0.47,2.05l-1.21,2.74l-1.54,-0.54l-1.11,-0.04l0.05,-1.53l-0.25,-0.38l-3.3,-1.35l-2.56,-1.53l-4.4,-3.69l-1.33,-3.48l-1.1,-0.68l-2.57,0.15l-0.7,-0.5l-0.46,-2.81l-3.37,-1.79l-0.46,0.06l-2.07,1.94l-2.09,1.14l-0.2,0.45l0.29,1.2l-1.92,0.03l-0.09,-11.97l5.98,-1.95l6.18,4.04l2.35,3.08l7.41,-0.61l2.72,2.28l-0.18,3.21l0.39,0.42l0.89,0.02l0.45,2.42l0.38,0.33l2.93,0.1l0.96,1.58l1.29,-0.25l1.05,-2.28l3.18,-2.25l1.24,-0.54Z", "name": "Uzbekistan"}, "MM": {"path": "M673.9,359.64l-1.97,1.62l-0.57,0.98l-1.4,0.62l-1.36,1.08l-1.99,0.36l-1.08,2.72l-0.91,0.41l-0.19,0.55l1.21,2.31l2.52,3.49l-0.79,1.95l-0.74,0.41l-0.17,0.52l0.65,1.39l1.61,1.98l0.25,2.61l0.9,2.15l-1.92,3.6l0.68,-2.27l-0.81,-1.75l0.19,-2.68l-1.05,-1.54l-1.24,-6.25l-1.12,-2.29l-0.61,-0.13l-4.33,3.06l-2.39,-0.66l0.77,-2.89l-0.52,-2.65l-1.92,-3.02l0.25,-0.78l-0.29,-0.51l-1.33,-0.31l-1.61,-1.97l-0.1,-1.35l0.82,-0.23l0.04,-1.7l1.03,-0.53l0.21,-0.44l-0.23,-0.99l0.54,-0.98l0.08,-2.3l1.45,0.46l0.48,-0.2l1.12,-2.26l0.16,-1.4l1.34,-2.25l-0.01,-1.58l2.89,-1.73l1.62,0.46l0.51,-0.43l-0.17,-1.48l0.65,-0.39l0.07,-1.08l0.77,-0.11l0.71,1.41l1.06,0.72l-0.03,4.05l-2.38,2.46l-0.3,3.26l0.47,0.43l2.27,-0.39l0.51,2.15l1.47,0.69l-0.61,1.87l0.19,0.47l2.97,1.52l1.64,-0.56l0.02,0.35Z", "name": "Myanmar"}, "ML": {"path": "M392.61,383.9l-0.19,-2.39l-0.99,-0.88l-0.44,-1.31l-0.09,-1.3l0.81,-0.59l0.35,-1.26l2.37,0.66l1.31,-0.48l0.86,0.15l0.66,-0.57l9.83,-0.04l0.38,-0.28l0.56,-1.82l-0.44,-0.66l-2.35,-22.51l3.26,-0.04l16.7,11.72l0.74,1.34l2.5,1.11l0.02,1.42l0.44,0.39l2.34,-0.22l0.01,5.49l-1.28,1.64l-0.26,1.51l-5.31,0.58l-1.08,0.93l-2.9,0.1l-0.87,-0.48l-1.38,0.37l-2.4,1.1l-0.6,0.88l-1.86,1.1l-0.43,0.71l-0.79,0.4l-1.44,-0.21l-0.81,0.84l-0.34,1.65l-1.91,2.04l-0.06,1.04l-0.67,1.23l0.13,1.17l-0.97,0.39l-0.23,-0.65l-0.52,-0.24l-1.35,0.4l-0.34,0.55l-2.69,-0.29l-0.37,-0.36l-0.02,-0.91l-0.65,-0.35l0.45,-0.65l-0.03,-0.52l-2.12,-2.46l-0.76,-0.01l-2.0,1.17l-0.78,-0.15l-0.8,-0.67l-1.21,0.23Z", "name": "Mali"}, "MN": {"path": "M676.61,267.85l3.78,1.95l5.69,-1.19l2.35,0.48l2.34,1.79l1.81,2.09l2.28,-0.04l3.11,0.62l2.49,-0.96l3.42,-0.7l3.51,-2.62l1.21,0.34l1.56,1.35l2.31,-0.25l-2.72,6.05l0.64,1.85l0.5,0.22l1.31,-0.44l2.36,0.55l2.04,-1.29l1.73,1.03l2.1,2.39l-0.15,0.72l-1.72,-0.34l-3.79,0.54l-1.88,1.14l-1.76,2.29l-3.71,1.35l-2.44,1.82l-3.81,-0.99l-0.44,0.19l-1.31,2.27l1.07,2.53l-1.56,1.04l-1.74,1.78l-2.78,1.14l-3.78,0.14l-4.05,1.18l-2.75,1.69l-1.16,-0.94l-2.93,0.0l-3.61,-2.0l-2.59,-0.55l-3.41,0.46l-5.11,-0.75l-2.62,0.07l-1.31,-1.82l-1.4,-3.4l-1.47,-0.37l-3.14,-2.22l-6.15,-1.06l-0.73,-1.26l0.89,-4.37l-1.73,-2.97l-3.7,-1.54l-1.96,-1.86l-0.53,-2.16l2.39,-0.63l4.75,-3.33l3.59,-1.75l2.18,1.16l2.44,0.05l1.83,1.83l2.46,0.14l3.58,0.97l0.4,-0.12l2.43,-2.72l0.07,-0.43l-0.93,-2.14l2.28,-3.66l2.59,1.52l4.94,1.41l0.44,2.74Z", "name": "Mongolia"}, "MK": {"path": "M472.81,299.6l0.49,-0.78l3.56,-0.8l1.01,0.87l0.14,1.71l-0.66,0.59l-1.14,-0.05l-1.14,0.75l-1.37,0.24l-0.79,-0.61l-0.3,-1.19l0.2,-0.73Z", "name": "Macedonia"}, "MW": {"path": "M505.5,439.25l0.85,1.96l0.15,2.88l-0.69,1.66l0.72,1.81l0.06,1.29l0.49,0.64l0.07,1.07l0.4,0.55l0.8,-0.23l0.55,0.62l0.7,-0.21l0.34,0.6l0.19,2.98l-1.04,0.63l-0.53,1.27l-1.11,-1.1l-0.16,-1.59l0.51,-1.33l-0.32,-1.32l-0.99,-0.65l-0.82,0.12l-2.36,-1.66l0.63,-1.99l0.82,-1.18l-0.46,-2.03l0.9,-2.88l-0.95,-2.53l0.97,0.19l0.29,0.41Z", "name": "Malawi"}, "MR": {"path": "M407.4,349.79l-2.62,0.03l-0.39,0.44l2.42,23.13l0.37,0.43l-0.39,1.27l-9.75,0.04l-0.56,0.54l-0.91,-0.11l-1.27,0.46l-1.61,-0.66l-0.98,0.03l-0.36,0.29l-0.38,1.37l-0.42,0.24l-2.93,-3.44l-2.96,-1.55l-1.62,-0.03l-1.27,0.55l-1.12,-0.2l-0.65,0.4l-0.08,-0.51l0.68,-1.31l0.31,-2.47l-0.57,-3.99l0.23,-1.25l-0.68,-1.53l-1.16,-1.05l0.25,-0.42l9.58,0.02l0.4,-0.45l-0.46,-3.79l0.47,-1.08l2.11,-0.22l0.36,-0.4l-0.08,-6.64l7.81,0.14l0.41,-0.4l0.01,-3.47l7.8,5.59Z", "name": "Mauritania"}, "UG": {"path": "M498.55,406.22l0.7,-0.46l1.65,0.5l1.96,-0.57l1.7,0.01l1.45,-0.98l0.91,1.33l1.33,3.95l-2.57,4.03l-1.46,-0.4l-2.54,0.91l-1.37,1.61l-0.01,0.81l-2.42,-0.01l-2.26,1.01l-0.17,-1.59l0.58,-1.04l0.14,-1.94l1.37,-2.28l1.78,-1.58l-0.17,-0.65l-0.72,-0.24l0.13,-2.43Z", "name": "Uganda"}, "MY": {"path": "M717.48,403.36l-1.39,0.65l-2.12,-0.41l-2.88,-0.0l-0.38,0.28l-0.84,2.75l-0.99,0.96l-1.21,3.29l-1.73,0.45l-2.45,-0.68l-1.39,0.31l-1.33,1.15l-1.59,-0.14l-1.41,0.44l-1.44,-1.19l-0.18,-0.73l1.34,0.53l1.93,-0.47l0.75,-2.23l4.02,-1.03l2.75,-3.21l0.82,0.94l0.64,-0.05l0.4,-0.65l0.96,0.06l0.42,-0.36l0.24,-2.69l1.81,-1.65l1.21,-1.87l0.63,-0.01l1.07,1.06l0.34,1.28l3.44,1.35l-0.06,0.35l-1.37,0.1l-0.35,0.54l0.32,0.88ZM673.68,399.48l0.17,1.1l0.47,0.33l1.65,-0.3l0.87,-0.94l1.61,1.52l0.98,1.57l-0.12,2.81l0.41,2.29l0.95,0.9l0.88,2.44l-1.27,0.12l-5.1,-3.68l-0.34,-1.29l-1.37,-1.59l-0.33,-1.97l-0.88,-1.4l0.25,-1.68l-0.46,-1.06l1.63,0.84Z", "name": "Malaysia"}, "MX": {"path": "M133.1,328.46l0.22,0.49l9.64,3.54l6.96,-0.02l0.4,-0.4l0.0,-0.81l3.76,0.0l3.55,3.11l1.4,2.99l1.51,1.09l2.08,0.86l0.48,-0.14l1.46,-2.1l1.72,-0.05l1.59,1.03l2.06,3.53l1.47,1.63l1.26,3.28l2.18,1.06l2.27,0.6l-1.19,3.88l-0.42,5.19l1.79,5.01l1.62,1.94l0.61,1.55l1.2,1.45l2.55,0.67l1.38,1.13l7.54,-1.93l1.86,-1.32l1.14,-4.4l4.1,-1.24l3.56,-0.11l0.32,0.31l-0.06,0.97l-1.26,1.49l-0.67,1.74l0.38,0.71l-0.73,2.32l-0.49,-0.3l-1.0,0.08l-1.0,1.41l-0.47,-0.11l-0.53,0.47l-4.26,-0.02l-0.4,0.4l-0.0,1.08l-1.1,0.26l0.1,0.44l1.82,1.46l0.56,0.94l-3.19,0.21l-1.21,2.12l0.24,0.73l-0.2,0.45l-2.24,-2.21l-1.45,-0.94l-2.22,-0.7l-1.52,0.23l-3.06,1.18l-10.55,-3.9l-2.86,-2.0l-3.78,-0.94l-1.08,-1.21l-2.62,-1.46l-1.18,-1.57l-0.39,-0.85l0.66,-0.64l-0.19,-0.55l0.53,-0.77l0.01,-0.93l-2.0,-3.91l-2.21,-2.71l-2.53,-2.16l-1.19,-1.68l-2.2,-1.21l-0.31,-0.45l0.34,-1.56l-0.21,-0.44l-1.23,-0.63l-1.36,-1.26l-0.59,-1.87l-1.53,-0.48l-2.44,-2.68l-0.15,-0.94l-1.33,-2.14l-0.84,-2.11l-0.15,-1.39l-1.81,-1.16l-0.98,0.05l-1.31,-0.74l-0.58,0.22l-0.4,1.19l0.71,3.95l3.51,4.09l0.28,0.83l0.53,0.26l0.41,1.51l1.33,1.8l1.58,1.46l0.8,2.49l1.43,2.51l0.13,1.37l0.37,0.36l1.03,0.08l1.68,2.38l-0.84,0.79l-0.66,-1.55l-1.68,-1.59l-2.91,-1.94l0.06,-1.89l-0.53,-1.73l-2.91,-2.11l-0.56,0.08l-1.95,-1.14l-0.92,-1.02l0.72,-0.08l0.93,-1.06l0.08,-1.82l-1.93,-2.04l-1.46,-0.81l-3.76,-8.06l4.87,-0.45Z", "name": "Mexico"}, "IL": {"path": "M507.77,331.27l0.39,-0.81l0.2,0.43l-0.34,1.09l0.52,0.43l0.68,-0.23l-0.86,3.84l-1.16,-3.52l0.6,-0.8l-0.03,-0.44ZM508.72,328.43l0.38,-1.13l0.64,0.0l0.52,-0.54l0.02,0.67l-0.52,1.01l-0.55,-0.25l-0.5,0.24Z", "name": "Israel"}, "FR": {"path": "M444.48,298.15l-0.65,2.02l-0.56,-0.34l-0.51,-1.98l0.42,-1.04l0.99,-0.8l0.31,2.13ZM429.62,268.54l1.78,1.88l1.48,-0.14l2.08,1.68l1.36,0.33l1.23,0.98l3.1,0.6l-1.08,2.26l-0.3,2.52l-0.41,0.38l-0.92,-0.28l-0.51,0.42l0.07,0.77l-1.82,2.19l-0.04,1.65l0.57,0.37l0.85,-0.41l0.62,1.14l-0.04,1.13l0.61,1.11l-0.78,1.22l0.65,2.72l1.29,0.62l-0.19,1.03l-2.02,1.73l-4.75,-0.9l-3.84,1.13l-0.52,2.09l-2.47,0.37l-2.7,-1.47l-1.18,0.64l-4.28,-1.44l-0.76,-1.02l1.21,-2.03l0.41,-7.31l-2.58,-3.82l-1.89,-1.93l-3.74,-1.44l-0.2,-2.16l2.82,-0.72l4.11,0.96l0.48,-0.46l-0.62,-3.38l1.98,1.12l5.83,-3.02l0.91,-3.28l1.57,-0.58l0.25,0.97l1.34,0.35l1.05,1.43ZM289.01,408.29l-0.81,0.8l-0.78,0.12l-0.5,-0.66l-0.56,-0.1l-0.91,0.6l-0.46,-0.22l1.09,-2.96l-0.96,-1.77l-0.17,-1.49l1.07,-1.77l2.32,0.75l2.51,2.01l0.3,0.74l-2.14,3.96Z", "name": "France"}, "XS": {"path": "M531.15,388.78l1.52,0.12l5.13,-0.96l5.3,-1.49l-0.01,4.43l-2.67,3.4l-1.85,0.01l-8.04,-2.95l-2.55,-3.19l1.12,-1.73l2.04,2.35Z", "name": "Somaliland"}, "FI": {"path": "M492.16,172.43l-0.28,5.17l3.67,4.26l-2.21,4.98l2.86,6.98l-1.64,5.01l2.21,4.51l-0.98,3.55l3.63,4.02l-0.84,2.48l-7.53,9.52l-4.5,0.42l-4.38,1.84l-3.74,0.97l-1.3,-2.46l-2.36,-1.68l0.53,-4.89l-1.2,-4.86l1.14,-3.04l2.23,-3.46l5.68,-6.22l1.8,-1.58l-0.4,-2.8l-3.4,-2.81l-0.79,-2.25l-0.16,-10.13l-7.02,-7.77l0.96,-1.19l2.47,3.3l3.5,-0.17l2.57,1.6l0.53,-0.09l2.46,-3.23l1.19,-5.07l3.49,-2.23l2.82,2.55l-1.01,4.77Z", "name": "Finland"}, "FJ": {"path": "M869.95,457.1l-1.21,0.42l-0.08,-0.24l2.98,-1.23l-0.15,0.44l-1.54,0.62ZM867.58,459.4l0.43,0.38l-0.27,0.91l-1.24,0.29l-1.04,-0.25l-0.14,-0.69l0.64,-0.59l0.92,0.26l0.7,-0.31Z", "name": "Fiji"}, "FK": {"path": "M274.37,564.69l1.48,1.33l-0.53,1.0l-2.96,1.07l-0.95,-1.2l-0.57,-0.05l-1.79,1.54l-0.79,-1.16l2.52,-2.03l1.9,0.9l0.46,-0.09l1.23,-1.32Z", "name": "Falkland Is."}, "NI": {"path": "M202.32,382.47l0.82,-0.18l1.03,-1.02l-0.04,-0.89l0.68,-0.0l0.63,-0.54l0.97,0.23l1.53,-1.28l0.58,-1.0l1.17,0.35l2.41,-0.95l0.13,1.34l-0.81,1.96l0.1,2.77l-0.36,0.38l-0.11,1.76l-0.47,0.81l0.18,1.15l-1.73,-0.86l-0.71,0.27l-1.47,-0.6l-0.52,0.16l-4.02,-3.85Z", "name": "Nicaragua"}, "NL": {"path": "M430.16,264.22l0.76,-0.72l2.14,-5.88l3.19,-1.63l1.7,0.1l0.35,1.07l-0.6,3.64l-0.51,1.24l-1.24,0.0l-0.4,0.44l0.34,3.35l-2.18,-2.14l-0.43,-0.11l-2.22,0.8l-0.89,-0.15Z", "name": "Netherlands"}, "NO": {"path": "M491.42,157.32l7.17,5.11l-2.71,1.67l-0.13,0.55l2.55,4.24l-3.9,2.61l-1.31,0.42l0.79,-4.7l-3.21,-2.91l-0.48,-0.04l-4.06,2.73l-1.21,5.15l-2.11,2.72l-2.64,-1.54l-3.04,0.32l-2.65,-3.53l-0.63,-0.01l-1.41,1.75l-1.41,0.26l-0.33,0.36l-0.33,4.08l-4.27,-0.99l-0.48,0.32l-0.6,3.44l-2.07,-0.02l-0.38,0.27l-4.15,11.7l-3.88,8.48l0.84,2.18l-0.71,1.86l-2.2,-0.09l-0.4,0.28l-1.64,5.41l0.15,7.19l1.58,2.74l-0.8,5.79l-2.04,3.34l-0.83,2.09l-1.27,-2.26l-0.65,-0.07l-4.87,5.52l-3.05,1.02l-3.16,-2.22l-0.86,-5.06l-0.78,-11.7l2.19,-3.29l6.55,-4.59l5.02,-5.96l4.64,-8.4l6.0,-12.26l11.0,-13.83l5.32,-3.11l3.99,0.38l0.38,-0.19l3.69,-6.04l4.48,0.3l4.3,-1.47ZM484.42,59.58l4.68,4.94l-3.51,7.19l-6.97,1.55l-7.03,-2.18l-0.42,-3.6l-0.37,-0.35l-3.35,-0.23l-2.51,-6.12l7.16,-3.9l3.42,3.43l0.63,-0.09l2.33,-4.19l5.93,3.56ZM482.22,93.35l-4.99,4.27l-3.84,-2.35l1.56,-3.06l-1.38,-3.53l4.4,-2.11l0.89,4.13l3.36,2.65ZM466.32,69.71l8.02,9.81l-6.13,5.05l-1.37,8.88l-2.22,2.36l-1.15,9.08l-2.49,0.35l-5.08,-6.44l2.14,-3.9l-0.08,-0.49l-3.69,-3.4l-4.82,-10.44l-1.89,-10.23l6.16,-4.58l1.22,4.4l0.41,0.29l3.57,-0.19l0.37,-0.32l0.9,-4.57l3.14,-0.43l3.02,4.76Z", "name": "Norway"}, "NA": {"path": "M474.4,460.84l-1.11,0.05l-0.38,0.4l-0.07,9.11l-2.09,0.08l-0.38,0.4l-0.0,18.09l-1.98,1.29l-1.16,0.18l-2.43,-0.69l-0.48,-1.18l-0.99,-0.78l-0.55,0.05l-0.9,1.05l-1.52,-1.75l-0.94,-1.97l-1.99,-8.9l-0.06,-3.23l-0.33,-1.56l-2.3,-3.43l-1.91,-4.94l-1.96,-2.48l-0.12,-1.61l2.33,-0.8l1.43,0.07l1.82,1.15l10.23,-0.26l1.84,1.26l6.01,0.37ZM474.58,460.83l6.59,-1.65l1.91,0.41l-1.71,0.41l-1.31,0.85l-1.12,-0.95l-4.36,0.94Z", "name": "Namibia"}, "VU": {"path": "M839.03,452.86l0.23,1.16l-0.44,0.03l-0.2,-1.47l0.42,0.28Z", "name": "Vanuatu"}, "NC": {"path": "M838.79,471.67l-0.34,0.23l-2.9,-1.8l-3.27,-3.48l1.65,0.85l4.86,4.19Z", "name": "New Caledonia"}, "NE": {"path": "M454.74,355.83l1.33,1.41l0.49,0.07l1.26,-0.72l0.53,3.62l0.94,0.85l0.17,0.94l0.82,0.72l-0.45,0.98l-0.96,5.37l-0.13,3.28l-3.05,2.34l-1.22,3.61l1.02,1.25l-0.0,1.48l0.39,0.4l1.13,0.04l-0.1,0.49l-0.45,0.09l-0.35,0.68l-1.47,-2.44l-0.86,-0.29l-2.09,1.38l-1.73,-0.67l-1.45,-0.17l-0.85,0.35l-1.36,-0.07l-1.64,1.1l-1.06,0.05l-2.94,-1.29l-1.44,0.59l-1.01,-0.03l-0.97,-0.95l-2.7,-0.99l-2.69,0.31l-0.87,0.65l-0.46,1.62l-0.74,1.17l-0.12,1.55l-1.57,-1.1l-1.31,0.24l0.03,-0.82l-0.32,-0.41l-2.59,-0.52l-0.15,-1.17l-1.36,-1.62l-0.29,-1.01l0.13,-0.85l1.29,-0.08l1.08,-0.93l3.31,-0.22l2.22,-0.41l0.32,-0.34l0.2,-1.5l1.39,-1.91l-0.01,-5.78l3.37,-1.15l7.24,-5.24l8.41,-5.07l3.69,1.09Z", "name": "Niger"}, "NG": {"path": "M456.32,383.7l0.64,0.66l-0.28,1.06l-2.11,2.02l-2.03,5.2l-1.37,1.16l-1.15,3.19l-1.33,0.66l-1.46,-0.97l-1.21,0.16l-1.38,1.37l-0.91,0.24l-1.79,4.07l-2.33,0.81l-1.11,-0.07l-0.86,0.51l-1.71,-0.05l-1.19,-1.39l-0.89,-1.9l-1.77,-1.66l-3.95,-0.08l0.07,-5.23l0.42,-1.44l1.95,-2.32l-0.14,-0.91l0.43,-1.18l-0.53,-1.42l0.25,-2.95l0.72,-1.08l0.32,-1.35l0.46,-0.39l2.47,-0.28l2.34,0.89l1.15,1.03l1.28,0.04l1.22,-0.59l3.03,1.28l1.5,-0.14l1.36,-1.01l1.32,0.07l0.82,-0.35l3.45,0.81l1.82,-1.34l1.84,2.7l0.66,0.16Z", "name": "Nigeria"}, "NZ": {"path": "M857.8,512.11l1.85,3.38l0.45,0.2l0.3,-0.38l0.03,-1.36l0.38,0.29l0.56,2.51l2.02,1.03l1.81,0.29l1.59,-1.16l0.7,0.2l-1.16,4.01l-1.98,0.12l-0.73,1.27l0.21,1.25l-2.44,4.45l-1.47,1.02l-0.42,-0.65l-0.66,-0.3l1.25,-2.35l-0.81,-2.16l-2.64,-1.38l0.04,-0.7l1.82,-1.29l0.42,-2.46l-0.15,-2.29l-0.96,-2.0l-0.05,-0.75l-3.11,-3.94l-0.82,-1.69l1.57,1.56l1.76,0.72l0.66,2.55ZM853.83,527.42l0.57,1.38l0.61,0.17l1.4,-1.06l0.46,0.9l0.0,1.2l-2.48,3.93l-1.26,1.36l-0.06,0.47l0.6,1.08l-1.47,0.09l-2.32,1.54l-2.04,5.78l-3.02,2.49l-2.03,-0.07l-1.72,-1.2l-2.46,-0.23l-0.29,-0.92l1.25,-2.46l3.05,-3.36l1.62,-0.67l4.01,-3.18l1.56,-1.87l1.08,-2.44l1.01,-1.01l0.35,-1.73l1.23,-1.07l0.35,0.88Z", "name": "New Zealand"}, "NP": {"path": "M641.15,342.42l-0.0,3.36l-1.74,0.04l-4.8,-0.9l-1.59,-1.45l-3.36,-0.36l-7.66,-3.88l0.81,-2.23l2.33,-1.79l1.77,0.78l2.49,1.85l1.38,0.43l0.99,1.42l1.89,0.55l1.99,1.22l5.5,0.95Z", "name": "Nepal"}, "XK": {"path": "M472.78,298.18l-1.1,-1.47l0.98,-0.9l0.29,-0.94l2.0,1.84l-0.4,0.85l-1.77,0.62Z", "name": "Kosovo"}, "CI": {"path": "M407.4,389.11l0.86,0.42l0.56,0.9l1.13,0.54l1.19,-0.61l0.97,-0.08l1.42,0.54l0.6,3.25l-1.03,2.09l-0.65,2.85l1.06,2.33l-0.06,0.53l-2.54,-0.47l-1.66,0.03l-3.06,0.47l-4.11,1.61l0.32,-3.06l-1.18,-1.31l-1.32,-0.67l0.42,-0.86l-0.2,-1.4l0.5,-0.68l0.01,-1.59l0.84,-0.33l0.26,-0.5l-1.15,-3.02l0.12,-0.51l0.51,-0.25l0.66,0.31l1.93,0.02l0.67,-0.72l0.71,-0.14l0.25,0.7l0.57,0.22l1.4,-0.61Z", "name": "C\u00f4te d'Ivoire"}, "CH": {"path": "M444.61,279.47l-0.29,1.12l0.16,0.5l1.13,0.67l1.03,0.12l-0.12,0.88l-0.79,0.44l-1.7,-0.42l-0.47,0.25l-0.46,1.23l-0.72,0.07l-0.3,-0.39l-0.58,-0.06l-1.31,1.14l-0.93,0.13l-0.87,-0.62l-0.82,-1.51l-0.52,-0.17l-0.61,0.29l0.02,-0.85l1.73,-1.95l0.07,-0.65l0.96,0.08l0.57,-0.53l1.97,0.02l0.67,-0.71l2.16,0.92Z", "name": "Switzerland"}, "CO": {"path": "M242.07,384.75l-1.7,0.59l-0.59,1.19l-1.7,1.7l-0.37,1.94l-0.67,1.44l0.31,0.57l1.03,0.14l0.25,0.91l0.57,0.65l-0.04,2.35l1.64,1.42l3.16,-0.24l1.26,0.28l1.67,2.06l0.41,0.13l4.09,-0.39l0.45,0.22l-0.92,1.95l-0.2,1.8l0.52,1.83l0.75,1.05l-1.12,1.1l0.07,0.63l0.84,0.51l0.74,1.3l-0.39,-0.45l-0.59,-0.01l-0.71,0.74l-4.71,-0.05l-0.4,0.41l0.03,1.57l0.33,0.39l1.11,0.2l-1.68,0.4l-0.29,0.38l-0.01,1.82l1.16,1.14l0.34,1.25l-1.05,7.05l-1.04,-0.87l1.26,-1.99l-0.13,-0.56l-2.18,-1.23l-1.38,0.2l-1.14,-0.38l-1.27,0.61l-1.55,-0.26l-1.38,-2.46l-1.23,-0.75l-0.85,-1.2l-1.67,-1.19l-0.86,0.13l-2.11,-1.32l-1.01,0.31l-1.8,-0.29l-0.52,-0.91l-3.09,-1.68l0.77,-0.52l-0.1,-1.12l0.41,-0.64l1.34,-0.32l2.0,-2.88l-0.11,-0.57l-0.67,-0.43l0.39,-1.38l-0.52,-2.11l0.49,-0.83l-0.4,-2.13l-0.97,-1.36l0.17,-0.67l0.86,-0.08l0.47,-0.75l-0.46,-1.63l1.41,-0.07l1.8,-1.7l0.93,-0.24l0.3,-0.38l0.45,-2.78l1.22,-1.01l1.44,-0.04l0.45,-0.5l1.91,0.12l2.93,-1.85l1.15,-1.15l0.91,0.47l-0.26,0.45Z", "name": "Colombia"}, "CN": {"path": "M740.22,270.81l4.55,1.5l2.81,2.58l0.98,3.43l0.38,0.29l3.8,0.0l2.34,-1.51l3.31,-0.89l-1.01,2.59l-1.01,1.46l-0.85,3.95l-1.53,3.16l-2.73,-0.57l-2.43,1.3l-0.19,0.43l0.65,2.95l-0.32,3.68l-0.94,0.07l-0.37,0.4l0.01,0.58l-0.89,-1.11l-0.67,0.07l-0.92,1.77l-3.72,1.4l-0.25,0.46l0.28,1.25l-1.5,-0.08l-1.08,-0.96l-0.59,0.06l-1.68,2.31l-2.7,1.74l-2.03,2.08l-3.39,0.92l-1.93,1.54l-1.22,0.4l0.42,-0.81l-0.43,-1.03l1.81,-2.01l0.02,-0.51l-1.32,-1.73l-0.51,-0.11l-2.25,1.21l-2.83,2.28l-1.5,2.02l-2.27,0.14l-1.56,1.64l-0.04,0.47l1.32,2.16l2.01,0.63l0.3,1.47l1.98,0.92l0.42,-0.05l2.6,-2.09l1.99,1.1l1.5,0.12l0.24,0.97l-3.39,0.94l-1.12,1.61l-2.5,1.64l-1.29,2.15l0.13,0.55l2.57,1.6l0.97,2.9l3.17,4.94l-0.03,1.8l-1.36,0.69l-0.19,0.5l0.6,1.55l1.41,0.95l-0.9,4.05l-1.43,0.4l-3.85,6.72l-2.28,3.23l-6.78,4.72l-2.73,0.3l-1.45,1.07l-0.61,-0.62l-0.56,-0.01l-1.36,1.29l-3.39,1.31l-2.61,0.41l-1.1,2.86l-0.81,0.09l-0.5,-1.47l0.5,-0.88l-0.25,-0.59l-3.36,-0.86l-1.3,0.41l-2.3,-0.64l-0.95,-0.87l0.34,-1.33l-0.3,-0.49l-2.19,-0.48l-1.13,-0.96l-0.48,-0.03l-2.06,1.4l-4.28,0.28l-2.76,1.08l-0.28,0.43l0.32,2.61l-0.59,-0.03l-0.19,-1.39l-0.56,-0.34l-1.67,0.72l-2.47,-1.26l0.63,-1.94l-0.25,-0.5l-1.37,-0.46l-0.55,-2.3l-0.46,-0.3l-2.13,0.37l0.24,-2.6l2.39,-2.48l0.03,-4.49l-1.19,-0.94l-0.79,-1.57l-0.41,-0.22l-1.4,0.2l-2.0,-0.32l0.48,-1.12l-1.17,-1.78l-0.56,-0.11l-1.62,1.1l-2.25,-0.6l-2.89,1.82l-2.25,2.08l-1.74,0.31l-1.17,-0.74l-3.32,-0.68l-1.48,0.83l-1.04,1.32l-0.12,-1.23l-0.54,-0.34l-1.44,0.56l-5.54,-0.9l-1.98,-1.22l-1.89,-0.56l-0.99,-1.42l-1.34,-0.39l-2.55,-1.88l-2.01,-0.89l-1.21,0.59l-5.57,-3.64l-0.54,-2.5l1.19,0.26l0.49,-0.37l0.08,-1.52l-0.98,-1.65l0.16,-2.6l-2.69,-3.58l-4.12,-1.33l-0.68,-2.18l-1.91,-1.6l-0.38,-0.78l-0.5,-3.27l-1.52,-0.73l-0.7,0.14l-0.49,-2.31l0.57,-0.59l-0.13,-0.89l2.06,-1.34l1.59,-0.59l2.55,0.42l0.43,-0.23l0.85,-1.9l2.99,-0.37l1.11,-1.41l4.04,-1.97l0.39,-0.97l-0.17,-1.67l1.48,-0.77l0.19,-0.49l-2.1,-5.65l4.54,-1.3l1.38,-0.84l1.88,-6.37l4.59,1.12l0.4,-0.13l1.49,-1.91l0.11,-3.42l2.01,-0.45l1.83,-2.43l0.45,-0.15l0.67,2.44l2.23,2.08l3.44,1.35l1.58,2.72l-0.93,4.08l0.95,1.84l6.54,1.28l2.95,2.14l1.48,0.4l1.07,3.0l1.52,2.13l3.06,0.09l5.13,0.76l3.38,-0.46l2.34,0.48l3.65,2.02l3.07,0.05l0.99,0.93l0.48,0.05l2.87,-1.78l3.94,-1.15l3.84,-0.16l3.06,-1.29l1.77,-1.81l1.72,-1.14l0.16,-0.47l-1.12,-2.36l1.05,-1.82l4.03,0.9l2.45,-1.85l3.76,-1.36l1.97,-2.46l1.63,-0.96l3.49,-0.47l1.91,0.4l0.47,-0.31l0.18,-1.65l-2.27,-2.59l-2.11,-1.27l-0.44,0.02l-1.78,1.27l-2.29,-0.54l-1.28,0.37l-0.43,-1.02l2.76,-6.16l3.03,1.25l3.53,-2.45l0.15,-1.96l2.18,-4.08l1.47,-1.55l-0.03,-2.26l-1.16,-1.03l1.66,-1.66l2.96,-0.72l3.21,-0.11l3.62,1.21l2.05,1.43l3.31,8.17l0.92,3.82ZM696.92,366.89l-1.87,1.1l-1.63,-0.65l-0.06,-1.84l1.03,-1.01l2.58,-0.7l1.15,0.05l0.31,0.56l-0.98,1.09l-0.53,1.4Z", "name": "China"}, "CM": {"path": "M457.92,387.33l1.06,1.92l-1.4,0.16l-1.05,-0.23l-0.45,0.23l-0.54,1.2l0.08,0.45l1.48,1.48l1.05,0.45l1.01,2.47l-1.52,3.0l-0.68,0.68l-0.13,3.69l2.38,3.84l1.09,0.8l0.24,2.48l-3.67,-1.14l-11.27,-0.13l0.23,-1.79l-0.98,-1.66l-1.19,-0.54l-0.44,-0.97l-0.6,-0.42l1.71,-4.28l0.75,-0.13l1.38,-1.37l0.65,-0.03l1.71,0.99l1.93,-1.12l1.14,-3.2l1.38,-1.17l2.0,-5.16l2.17,-2.15l0.3,-1.65l-0.86,-0.89l0.18,-0.37l0.8,1.32l0.07,3.24Z", "name": "Cameroon"}, "CL": {"path": "M246.67,568.71l-3.34,2.4l-0.55,3.89l-0.62,0.06l-2.66,-1.3l-2.82,-2.86l-3.06,-2.32l-0.71,-2.33l0.65,-2.52l-1.22,-2.56l-0.31,-6.43l1.02,-3.46l2.58,-2.79l-0.19,-0.66l-3.24,-0.91l2.11,-2.91l0.78,-5.35l2.3,1.02l0.56,-0.29l1.31,-7.14l-0.2,-0.42l-1.68,-0.9l-0.58,0.28l-0.7,3.81l-0.82,-0.25l1.58,-10.59l1.15,-2.43l-0.71,-3.1l-0.18,-3.15l1.02,-0.35l3.26,-9.88l1.07,-4.5l-0.56,-4.47l0.74,-2.47l-0.29,-3.45l1.46,-3.5l2.04,-17.19l-0.67,-7.94l1.04,-0.54l0.54,-0.92l0.79,1.16l0.32,1.82l1.25,1.19l-0.69,2.61l1.33,2.98l0.97,3.7l0.47,0.29l1.49,-0.31l0.11,0.25l-0.77,2.53l-2.57,1.28l-0.22,0.37l0.08,4.51l-0.47,0.8l0.58,1.25l-1.59,1.59l-1.68,2.74l-0.89,2.6l0.21,2.85l-1.49,2.9l1.12,5.38l0.64,0.64l-0.01,2.49l-1.39,2.89l0.02,2.59l-1.89,2.18l0.02,2.98l0.7,2.85l-1.44,1.23l-1.26,6.27l0.39,3.95l-0.98,0.94l0.58,3.94l1.04,1.3l-0.69,1.22l0.14,0.54l1.01,0.61l0.18,0.88l-1.04,0.92l0.26,2.03l-0.89,4.69l-1.31,3.11l0.25,2.01l-0.73,2.21l-1.97,1.93l0.28,4.31l0.88,1.43l1.6,0.0l-0.01,2.68l1.04,2.36l6.16,0.76ZM248.69,570.67l0.0,9.15l0.4,0.4l3.58,0.07l-0.53,1.14l-1.93,1.23l-2.45,-0.46l-1.9,-1.34l-2.54,-0.61l-5.59,-4.63l-2.57,-3.5l4.23,3.11l3.32,1.53l0.5,-0.14l1.29,-1.95l0.83,-2.85l2.04,-1.51l1.3,0.35Z", "name": "Chile"}, "XC": {"path": "M504.86,320.38l0.39,0.01l0.27,-0.07l-0.3,0.35l-0.36,-0.28Z", "name": "N. Cyprus"}, "CA": {"path": "M280.04,266.9l-1.66,3.44l0.11,0.49l0.5,-0.0l1.44,-1.15l1.05,0.52l-0.63,0.98l0.16,0.58l2.22,1.06l1.38,-0.83l1.97,0.93l-0.68,2.46l0.52,0.48l1.3,-0.48l0.99,3.78l-0.93,2.87l-0.77,0.09l-1.25,-0.52l0.49,-2.7l-0.87,-0.87l-0.52,0.06l-2.77,3.06l-0.43,-0.04l1.14,-1.12l-0.14,-0.66l-2.4,-0.9l-7.4,0.09l-0.2,-0.58l1.35,-1.14l0.02,-0.6l-0.8,-0.75l1.91,-2.12l2.57,-6.16l1.48,-2.16l1.98,-1.26l0.5,0.08l-1.6,3.09ZM68.32,168.48l4.07,1.51l3.89,3.35l2.78,0.73l0.42,-0.15l2.16,-2.88l2.84,-2.09l3.89,0.75l3.71,-3.14l3.71,-1.66l1.54,2.72l0.62,0.1l1.99,-1.93l0.48,-2.97l1.15,0.53l4.17,6.45l0.67,0.01l2.68,-3.95l0.27,4.33l0.54,0.35l3.08,-1.17l1.05,-2.04l2.63,0.36l3.83,3.0l5.86,2.58l3.48,1.19l2.44,-0.39l2.95,3.04l-3.23,3.06l0.16,0.67l4.53,1.42l6.92,-0.76l1.96,-1.04l2.47,3.65l0.64,0.03l2.72,-3.33l-0.01,-0.52l-2.34,-2.61l1.33,-1.93l2.87,-0.3l1.88,-0.64l1.8,1.47l2.48,3.63l0.41,0.17l2.63,-0.5l4.62,2.96l3.83,-1.03l3.59,0.16l0.42,-0.43l-0.27,-3.92l1.8,-0.96l3.49,2.08l-0.01,6.03l0.34,0.4l0.44,-0.28l1.5,-4.95l1.69,0.15l0.43,-0.33l1.13,-6.89l-2.74,-4.66l-2.86,-2.89l0.19,-8.09l2.75,-5.34l2.86,1.11l2.44,3.36l3.31,8.33l-2.12,3.42l0.22,0.59l4.38,1.37l-0.01,6.85l0.29,0.39l0.45,-0.18l3.02,-4.91l2.56,3.84l-0.68,5.11l2.42,4.42l0.7,0.0l2.61,-4.74l1.86,-5.93l0.15,-7.44l3.08,0.48l3.57,1.03l3.18,3.35l0.14,3.2l-1.81,3.53l1.71,3.82l-0.29,2.9l-4.72,4.27l-3.21,0.89l-2.43,-1.77l-0.62,0.23l-0.74,3.09l-2.4,5.08l-0.73,2.58l-2.76,3.73l-3.68,0.5l-2.07,2.63l-0.15,3.32l-2.86,0.78l-3.1,4.45l-2.74,5.98l-0.98,4.09l-0.14,5.74l0.31,0.4l3.44,0.75l2.25,7.78l0.48,0.26l3.37,-0.88l4.49,1.92l2.43,1.68l1.92,2.2l3.09,1.21l2.61,1.84l6.65,0.69l-0.36,3.49l0.8,4.33l1.81,4.63l3.81,3.97l0.51,0.05l2.08,-1.51l1.37,-4.39l-1.31,-6.63l-1.54,-2.05l3.69,-1.91l2.84,-3.1l1.49,-3.43l-0.24,-3.19l-1.7,-3.97l-2.92,-3.49l2.86,-5.19l-1.09,-4.55l-0.81,-7.95l1.39,-0.99l4.1,1.4l2.62,0.54l2.14,-1.31l5.09,4.62l1.07,2.2l4.09,0.36l-0.06,3.98l0.83,6.25l2.42,1.04l1.74,2.7l0.57,0.11l3.63,-2.66l2.51,-5.54l1.22,-1.73l7.63,15.44l-0.95,2.7l0.14,0.45l3.3,2.51l2.23,2.5l4.1,1.23l1.45,1.25l0.96,3.51l2.08,0.8l0.87,1.37l0.17,4.34l-3.4,2.77l-4.22,1.5l-3.06,3.15l-4.04,0.61l-5.35,-0.82l-6.4,0.25l-2.32,2.87l-3.25,1.78l-6.48,8.38l-0.03,0.47l0.45,0.17l2.33,-0.73l3.98,-4.83l5.12,-3.08l3.49,-0.36l1.77,1.49l-2.18,2.58l0.8,4.03l1.01,2.99l3.5,1.85l4.14,-0.52l2.14,-3.2l0.24,1.68l1.22,0.99l-2.64,2.0l-5.49,2.09l-2.54,1.45l-2.73,2.43l-1.38,-0.18l-0.08,-2.39l4.16,-2.8l0.16,-0.45l-0.39,-0.28l-4.01,0.12l-2.61,0.4l-1.4,-1.73l-0.12,-5.1l-1.11,-1.06l-1.83,0.44l-0.65,-0.76l-0.63,0.03l-1.91,2.77l-0.81,2.9l-0.81,1.48l-1.66,0.64l-0.47,0.87l-8.32,0.08l-1.21,0.71l-2.33,2.23l-0.72,-0.14l-1.36,1.08l-1.12,-0.54l-4.75,1.43l-0.9,1.32l0.21,0.59l1.7,0.22l0.05,0.22l-1.84,0.36l-1.85,0.9l-1.19,-0.29l-0.92,0.15l-2.95,2.0l-0.71,-0.11l0.32,-0.68l1.12,-1.78l1.72,-1.33l0.09,-2.6l1.16,-2.28l0.48,0.59l2.03,0.48l0.42,-0.16l0.82,-1.6l-2.66,-4.02l-2.29,-0.71l-5.63,-0.81l-0.4,-0.66l-0.86,0.2l0.27,-0.64l-0.21,-0.52l-0.72,-0.32l0.32,-1.06l-0.91,-1.28l0.34,-0.82l-0.29,-0.55l-2.6,-0.52l-0.76,-1.93l-0.95,-0.76l-1.67,-0.09l-2.67,-0.67l-1.13,1.4l-1.48,0.69l-0.85,1.24l-2.8,-0.89l-2.1,0.45l-2.38,-1.13l-4.23,-0.83l-0.58,-0.48l-0.42,-1.96l-0.4,-0.32l-0.85,0.02l-0.39,0.4l-0.01,1.07l-69.11,-0.01l-6.5,-5.37l-4.5,-1.66l-1.29,-3.28l0.34,-2.39l-0.2,-0.41l-3.03,-1.66l-0.52,-3.39l-2.92,-2.97l-0.05,-1.94l1.39,-2.23l-0.07,-2.8l-4.34,-3.13l-4.08,-8.55l-4.01,-4.22l-1.31,-2.51l-0.57,-0.15l-2.51,1.6l-2.18,2.42l-3.81,-5.1l-2.44,-1.39l-2.26,-0.18l0.03,-55.45ZM265.75,272.87l-0.72,0.04l-3.11,-1.15l-1.72,-1.35l3.19,0.89l2.36,1.57ZM249.33,12.09l6.65,1.61l5.26,2.56l4.43,5.22l-0.1,4.84l-5.98,7.79l-6.13,3.67l-2.26,3.84l0.35,0.6l4.74,-0.08l-5.52,9.28l-4.14,4.52l-4.23,11.87l-5.01,2.26l-1.69,2.82l-7.4,1.42l-0.32,0.34l0.22,0.41l3.02,1.48l-1.51,2.34l2.02,6.18l-2.26,4.04l-3.94,3.58l-1.16,4.49l-3.53,3.68l0.35,2.54l0.44,0.34l3.85,-0.39l0.04,2.09l-6.37,6.12l-6.3,-2.81l-7.5,1.6l-3.7,-1.27l-4.4,-0.52l-0.28,-4.64l4.41,-2.41l0.2,-0.41l-1.19,-8.1l1.06,-0.58l6.49,4.94l0.49,-0.0l0.12,-0.48l-3.41,-7.64l-3.92,-2.37l1.85,-4.46l4.51,-3.29l0.71,-4.65l-3.55,-5.6l-0.98,-6.84l6.22,0.58l1.88,1.51l0.57,-0.08l3.91,-5.41l-0.21,-0.62l-5.64,-1.76l-8.71,0.93l-4.24,-5.03l-2.06,-6.44l-2.92,-4.92l-0.52,-5.65l3.5,-3.22l2.94,-0.62l4.91,-2.99l3.67,-6.97l2.62,0.86l2.63,5.2l0.41,0.22l0.34,-0.32l1.88,-10.36l3.17,-3.13l4.37,-2.24l7.32,-0.83l1.2,2.03l0.52,0.16l7.1,-3.49l10.71,2.64ZM203.82,140.61l1.98,5.56l0.38,0.26l0.37,-0.27l2.27,-6.74l5.84,-3.34l4.06,8.5l-0.37,5.31l0.57,0.39l4.95,-2.38l2.28,-3.11l5.2,3.94l3.34,3.74l0.31,3.32l0.54,0.34l4.32,-1.65l2.44,4.64l6.13,3.12l2.09,2.87l2.25,6.4l-4.35,3.07l-0.01,0.65l5.9,4.44l3.95,1.47l3.53,5.87l3.81,0.57l-0.69,3.91l-4.11,6.58l-2.68,-2.22l-3.9,-5.85l-0.43,-0.17l-3.24,0.78l-0.3,0.35l-0.24,3.8l2.63,3.5l3.42,2.75l0.96,1.44l1.58,5.48l-0.73,3.38l-2.67,-1.26l-6.25,-4.45l-0.52,0.05l-0.04,0.52l6.1,8.03l0.24,1.1l-6.09,-1.92l-5.3,-3.12l-2.77,-2.46l0.72,-1.31l-0.1,-0.51l-7.38,-5.75l-0.64,0.33l0.03,1.33l-6.7,0.85l-1.79,-1.68l1.46,-3.85l4.49,-0.1l5.15,-0.77l0.31,-0.54l-0.79,-2.04l0.83,-2.91l3.22,-6.15l-0.67,-3.24l-1.07,-2.43l-3.84,-3.29l-4.67,-2.18l1.24,-1.37l0.05,-0.47l-2.65,-4.44l-2.33,-0.57l-1.88,-2.37l-0.65,0.04l-1.25,2.02l-4.3,0.88l-9.0,-1.6l-5.26,-2.14l-3.98,-1.1l-1.81,-2.3l2.43,-3.26l-0.32,-0.64l-3.2,-0.03l-0.75,-7.66l1.89,-7.38l2.46,-3.41l5.58,-2.04l-1.59,4.91ZM261.18,282.95l2.07,0.7l1.54,-0.05l-0.57,0.69l-0.66,0.17l-2.92,-1.41l-0.44,-0.86l0.38,-0.46l0.61,1.23ZM230.78,185.0l-2.28,0.26l-0.54,-2.72l0.98,-3.45l1.88,-0.76l1.65,1.57l0.03,2.61l-0.24,0.76l-1.47,1.73ZM229.41,141.37l0.16,1.75l-4.89,-0.38l-2.72,1.08l-0.48,-0.34l-2.65,-4.39l0.09,-2.82l0.87,-0.43l5.47,0.92l4.14,4.61ZM222.03,214.7l-0.78,2.22l-0.56,-0.23l-0.54,-1.3l0.87,-1.54l0.57,0.07l0.44,0.77ZM183.65,102.44l3.0,3.59l4.7,-0.02l1.97,3.24l-0.41,4.19l2.83,2.3l1.84,2.54l6.99,1.27l4.2,-2.19l4.96,-0.84l3.84,0.67l2.53,3.56l0.53,3.8l-1.43,2.32l-3.48,1.88l-3.25,-1.1l-7.15,1.44l-5.04,0.16l-3.95,-1.13l-6.43,-2.95l-0.83,-5.12l-0.3,-4.98l-2.56,-4.72l-5.31,-1.46l-2.69,-3.1l0.83,-3.99l4.63,0.64ZM207.36,195.03l0.42,2.4l0.63,0.26l0.99,-0.72l1.27,1.36l5.47,3.76l0.21,2.54l0.49,0.36l1.62,-0.39l1.33,1.4l-1.71,1.36l-3.54,-1.23l-1.33,-2.43l-0.66,-0.06l-2.46,2.99l-3.05,2.47l-0.7,-2.67l-0.45,-0.29l-2.39,0.38l1.64,-2.22l0.32,-4.55l0.78,-5.03l1.13,0.31ZM215.49,211.5l-2.69,2.74l-1.33,-0.09l-0.38,-1.01l1.61,-2.18l2.82,0.04l-0.02,0.5ZM202.66,70.17l2.91,4.33l-3.3,3.83l-4.54,9.4l-4.14,0.83l-4.93,-1.5l-2.57,-4.9l0.04,-4.53l1.93,-3.49l-0.36,-0.59l-4.35,0.1l-2.61,-4.34l-1.55,-6.33l1.71,-6.55l1.67,-4.57l2.41,-1.04l0.22,-0.48l-0.96,-3.26l5.05,-0.73l3.21,8.41l8.21,6.06l1.95,9.35ZM187.39,143.67l-2.74,6.11l-2.28,-0.24l-1.49,-6.99l0.04,-4.2l1.26,-3.63l2.29,-2.28l4.96,0.3l4.35,2.01l-3.51,7.33l-2.87,1.59ZM186.12,124.07l-1.2,3.26l-3.2,-0.62l-2.75,-2.26l1.22,-4.02l3.15,-2.36l1.93,3.09l0.86,2.91ZM185.64,96.93l-0.83,0.24l-4.33,-0.68l-0.51,-2.52l4.35,0.15l1.52,1.89l-0.2,0.91ZM180.62,90.66l-3.24,2.16l-1.76,-2.41l-1.05,-4.51l-0.18,-4.75l2.69,0.43l1.32,0.77l2.85,4.19l-0.63,4.11ZM180.98,172.19l-1.22,1.91l-3.04,-1.9l-2.16,0.64l-2.93,-2.72l1.98,-2.02l1.52,-2.75l3.72,3.03l2.13,3.8ZM169.77,135.22l2.97,1.73l4.08,-1.03l0.51,2.03l-2.26,4.02l0.07,0.48l3.66,3.51l-0.43,6.97l-3.8,2.82l-2.06,-0.56l-1.71,-2.96l-6.1,-6.18l0.04,-2.04l4.64,0.95l0.44,-0.57l-2.66,-5.4l2.61,-3.78ZM174.46,107.75l1.36,3.53l0.08,5.21l-1.09,7.07l-3.71,0.89l-2.35,-1.35l0.05,-5.54l-0.47,-0.4l-3.64,0.69l-0.14,-7.04l2.56,0.16l3.62,-3.51l3.32,0.59l0.42,-0.3ZM170.01,87.71l0.84,4.38l-3.36,-1.1l-4.3,-4.01l-4.91,-0.41l2.06,-3.18l-0.05,-0.5l-2.92,-2.99l-0.16,-4.33l4.31,1.6l6.62,4.67l1.87,5.86ZM134.6,141.21l-1.16,3.7l0.55,0.48l5.29,-2.43l3.29,4.01l0.64,-0.03l2.53,-3.85l1.89,2.29l2.03,7.94l0.37,0.3l0.4,-0.26l1.28,-3.56l-1.72,-8.28l1.76,-1.01l2.22,1.24l2.69,3.29l2.45,13.62l8.57,7.16l-0.23,2.66l-3.8,0.53l-0.29,0.6l1.51,2.57l-0.67,2.03l-4.14,-1.0l-4.49,-1.91l-3.03,0.47l-4.65,2.34l-10.43,1.63l-1.41,-3.17l-3.42,-1.92l-2.23,0.65l-2.72,-5.01l5.02,-1.82l3.63,0.3l3.27,-1.29l0.25,-0.38l-0.26,-0.37l-4.84,-1.75l-5.5,0.57l-3.28,-0.14l-1.06,-2.23l5.47,-2.91l0.2,-0.46l-0.4,-0.3l-3.77,0.11l-3.96,-1.88l1.97,-5.68l1.69,-3.21l6.41,-4.99l2.07,1.35ZM158.82,138.54l-1.83,4.71l-3.34,-5.15l0.6,-0.86l2.98,-0.32l1.59,1.62ZM149.59,111.85l0.99,3.73l0.63,0.21l2.09,-1.62l2.15,0.37l0.41,4.59l-1.42,4.36l-8.24,1.45l-6.38,4.09l-3.32,0.18l-0.26,-2.47l5.03,-4.13l0.12,-0.46l-0.41,-0.24l-11.2,1.15l-3.08,-1.54l3.28,-9.52l2.11,-2.66l6.67,3.38l4.39,5.99l4.63,0.92l0.44,-0.53l-3.52,-9.7l2.01,-3.46l2.07,1.01l0.81,4.89ZM145.71,84.15l-2.55,2.05l-3.61,-0.01l0.03,-1.26l2.32,-3.45l0.99,0.43l2.82,2.24ZM144.69,94.95l-4.27,3.06l-3.27,-3.31l1.81,-3.41l3.34,-1.13l3.11,1.67l-0.73,3.12ZM118.92,155.09l-5.99,3.39l-1.29,-3.14l-5.55,-4.03l2.72,-9.3l2.17,-5.73l-2.25,-5.4l7.82,-1.34l3.61,1.91l6.24,0.5l2.31,2.51l2.44,3.4l-2.87,2.01l-6.21,6.07l-3.1,5.73l-0.05,3.42ZM129.56,96.45l-0.31,7.96l-1.8,3.53l-2.35,0.59l-4.6,4.46l-3.74,1.48l-2.92,-1.93l4.07,-7.68l5.0,-7.12l3.62,0.15l3.02,-1.45ZM111.13,275.3l-0.71,0.3l-3.83,-1.6l-0.83,-1.38l-2.13,-1.28l-0.67,-1.21l-2.4,-0.65l-0.75,-2.19l3.73,1.32l2.25,0.41l2.0,3.05l2.52,1.64l0.8,1.62ZM87.8,253.38l0.9,0.35l1.87,-0.27l-0.67,4.25l1.83,2.97l-1.42,-1.69l-0.98,-1.97l-1.19,-1.23l-0.34,-2.41Z", "name": "Canada"}, "CG": {"path": "M466.72,406.37l-0.1,1.03l-1.25,2.97l-0.19,3.62l-0.46,1.78l-0.23,0.63l-1.61,1.19l-1.21,1.39l-1.09,2.43l0.04,2.09l-3.25,3.25l-0.5,-0.24l-0.5,-0.83l-1.36,-0.02l-0.98,0.89l-1.68,-0.99l-1.54,1.24l-1.52,-1.96l1.57,-1.14l0.11,-0.52l-0.77,-1.35l2.1,-0.66l0.39,-0.73l1.05,0.82l2.21,0.11l1.12,-1.37l0.37,-1.81l-0.27,-2.09l-1.13,-1.5l1.0,-2.69l-0.13,-0.45l-0.92,-0.58l-1.6,0.17l-0.51,-0.94l0.1,-0.61l2.75,0.09l3.97,1.24l0.51,-0.33l0.17,-1.28l1.24,-2.21l1.28,-1.14l2.76,0.49Z", "name": "Congo"}, "CF": {"path": "M461.16,408.1l-0.26,-1.19l-1.09,-0.77l-0.84,-1.18l-0.29,-1.0l-1.04,-1.15l0.08,-3.44l0.58,-0.49l1.16,-2.36l1.85,-0.17l0.61,-0.62l0.97,0.58l3.15,-0.97l2.48,-1.92l0.02,-0.96l2.82,0.02l2.36,-1.18l1.93,-2.86l1.16,-0.94l1.11,-0.31l0.27,0.87l1.34,1.48l-0.39,2.02l0.3,1.01l4.01,2.76l0.17,0.93l2.63,2.31l0.6,1.44l2.08,1.4l-3.84,-0.21l-1.94,0.88l-1.24,-0.49l-2.67,1.2l-1.29,-0.18l-0.51,0.37l-0.6,1.22l-3.35,-0.65l-1.57,-0.91l-2.42,-0.83l-1.45,0.91l-0.97,1.28l-0.26,1.56l-3.22,-0.43l-1.49,1.33l-0.94,1.62Z", "name": "Central African Rep."}, "CD": {"path": "M487.01,402.27l2.34,-0.14l1.35,1.84l1.34,0.45l0.86,-0.39l1.21,0.12l1.07,-0.41l0.54,0.89l2.04,1.54l-0.14,2.72l0.7,0.54l-1.38,1.13l-1.53,2.54l-0.17,2.05l-0.59,1.08l-0.02,1.72l-0.72,0.84l-0.66,3.01l0.63,1.32l-0.44,4.26l0.64,1.47l-0.37,1.22l0.86,1.8l1.53,1.42l0.3,1.27l0.44,0.51l-4.08,0.75l-0.92,1.82l0.51,1.35l-0.74,5.46l0.17,0.38l2.45,1.47l0.54,-0.1l0.12,1.64l-1.28,-0.01l-1.85,-2.37l-1.94,-0.45l-0.48,-1.14l-0.56,-0.2l-1.41,0.74l-1.71,-0.3l-1.01,-1.19l-2.49,-0.2l-0.44,-0.77l-1.98,-0.21l-2.88,0.36l0.11,-2.42l-0.85,-1.13l-0.16,-1.36l0.32,-1.74l-0.47,-0.89l-0.04,-1.5l-0.4,-0.39l-2.53,0.02l0.1,-0.41l-0.39,-0.49l-1.28,0.01l-0.43,0.46l-1.62,0.32l-0.83,1.8l-1.09,-0.28l-2.4,0.52l-1.37,-1.91l-1.3,-3.31l-0.38,-0.27l-7.39,-0.03l-2.46,0.42l0.5,-0.45l0.37,-1.47l0.66,-0.38l0.92,0.08l0.73,-0.82l0.87,0.02l0.31,0.68l1.4,0.36l3.59,-3.63l0.01,-2.23l1.02,-2.29l2.69,-2.39l0.43,-0.99l0.49,-1.96l0.17,-3.51l1.25,-2.95l0.36,-3.15l0.86,-1.13l1.1,-0.67l3.57,1.73l3.65,0.73l0.46,-0.21l0.8,-1.46l1.24,0.19l2.61,-1.17l0.81,0.44l1.04,-0.03l0.59,-0.66l0.7,-0.16l1.81,0.25Z", "name": "Dem. Rep. Congo"}, "CZ": {"path": "M458.44,265.89l1.23,1.2l1.49,0.27l0.09,1.1l1.36,0.81l0.58,-0.21l0.25,-0.67l1.12,0.29l0.53,1.3l1.67,0.21l0.69,1.14l-1.4,1.19l-0.12,0.65l-0.55,0.55l-1.59,0.21l-0.56,0.65l-1.03,-0.52l-1.03,0.17l-2.15,-1.12l-1.05,0.4l-1.18,1.3l-1.53,-1.0l-2.59,-2.49l-0.57,-2.36l1.48,-0.7l0.99,-1.01l1.72,-0.74l0.54,-0.59l0.73,0.29l0.87,-0.32Z", "name": "Czech Rep."}, "CY": {"path": "M504.35,321.02l0.49,0.34l-1.34,0.65l-0.91,-0.29l-0.26,-0.55l2.02,-0.14Z", "name": "Cyprus"}, "CR": {"path": "M211.34,387.89l0.48,1.0l1.61,1.62l-0.54,0.45l0.3,1.42l-0.25,1.2l-1.09,-0.6l-0.05,-1.25l-2.46,-1.43l-0.28,-0.77l-0.66,-0.45l-0.45,-0.0l-0.11,1.05l-1.32,-0.95l0.31,-1.31l-0.36,-0.6l0.31,-0.27l1.42,0.58l1.29,-0.14l0.56,0.56l0.74,0.17l0.55,-0.27Z", "name": "Costa Rica"}, "CU": {"path": "M221.21,356.57l1.27,1.05l2.18,-0.29l4.43,3.42l2.09,0.45l-0.1,0.41l0.36,0.49l1.75,0.1l1.44,0.97l-3.07,0.42l-4.17,-0.03l0.79,-0.7l-0.04,-0.63l-1.2,-0.76l-1.49,-0.16l-0.7,-0.62l-0.56,-1.44l-0.4,-0.25l-1.34,0.1l-2.2,-0.68l-0.89,-0.6l-3.18,-0.41l-0.28,-0.17l0.6,-0.76l-0.36,-0.29l-2.73,-0.05l-1.7,1.33l-0.91,0.03l-0.61,0.71l-1.03,0.22l1.14,-1.35l1.01,-0.54l3.69,-1.04l3.98,0.22l2.21,0.87Z", "name": "Cuba"}, "SZ": {"path": "M500.35,482.11l0.5,2.14l-0.39,0.94l-1.04,0.22l-1.23,-1.25l-0.02,-0.69l0.84,-1.65l1.34,0.28Z", "name": "Swaziland"}, "SY": {"path": "M510.98,327.85l0.08,-1.44l0.55,-1.47l1.28,-1.07l0.12,-0.44l-0.41,-1.19l-1.14,-0.38l-0.19,-1.91l0.53,-1.11l1.29,-1.31l0.19,-1.27l0.6,0.24l2.61,-0.82l1.36,0.56l2.06,-0.01l2.95,-1.17l3.29,-0.29l-0.72,1.1l-1.49,1.11l0.23,2.19l-0.89,3.46l-10.14,6.13l-2.17,-0.92Z", "name": "Syria"}, "KG": {"path": "M621.37,297.76l-3.91,1.98l-0.95,1.31l-3.03,0.37l-1.14,2.06l-2.35,-0.39l-2.01,0.7l-2.39,1.55l0.09,1.02l-0.42,0.44l-4.5,0.47l-3.01,-1.02l-2.38,0.19l0.12,-0.96l2.3,0.46l1.14,-0.97l1.99,0.21l3.21,-2.37l-0.03,-0.67l-2.97,-1.75l-1.95,0.72l-1.27,-0.86l1.77,-1.84l-0.12,-0.64l-0.4,-0.18l0.36,-0.95l1.35,-0.39l4.01,1.14l0.5,-0.31l0.35,-1.82l1.08,-0.54l3.4,1.37l1.14,-0.35l7.61,0.43l1.15,1.13l1.27,0.45Z", "name": "Kyrgyzstan"}, "KE": {"path": "M506.26,414.59l1.87,-2.56l0.93,-2.15l-1.38,-4.08l-1.06,-1.6l2.82,-2.75l0.79,0.26l0.12,1.41l0.86,0.83l1.9,0.11l3.28,2.13l3.57,0.44l1.05,-1.12l1.96,-0.9l0.82,0.69l1.16,0.09l-1.78,2.45l0.03,9.12l1.3,1.94l-1.37,0.78l-0.67,1.03l-1.08,0.46l-0.34,1.67l-0.81,1.07l-0.45,1.55l-0.68,0.56l-3.2,-2.23l-0.35,-1.58l-8.86,-4.98l0.14,-1.6l-0.57,-1.04Z", "name": "Kenya"}, "SS": {"path": "M481.71,393.21l1.07,-0.73l1.2,-3.2l1.36,-0.26l1.61,2.0l0.87,0.34l1.11,-0.41l1.5,0.07l0.57,0.53l2.49,0.0l0.44,-0.63l1.07,-0.4l0.45,-0.84l0.59,-0.33l1.9,1.34l1.6,-0.2l2.83,-3.35l-0.32,-2.23l1.6,-0.53l-0.24,1.62l0.3,1.84l1.34,1.18l0.2,1.88l0.35,0.41l0.02,1.54l-0.23,0.47l-1.42,0.25l-0.85,1.44l0.3,0.6l1.4,0.17l1.12,1.08l0.59,1.13l1.03,0.53l1.28,2.37l-4.42,3.99l-1.74,0.01l-1.89,0.55l-1.47,-0.52l-1.15,0.57l-2.96,-2.62l-1.3,0.49l-1.06,-0.15l-0.79,0.39l-0.82,-0.22l-1.8,-2.7l-1.91,-1.1l-0.66,-1.5l-2.62,-2.33l-0.18,-0.94l-2.37,-1.61Z", "name": "S. Sudan"}, "SR": {"path": "M283.12,400.08l2.1,0.53l-1.08,1.95l0.2,1.72l0.93,1.49l-0.59,2.04l-0.43,0.71l-1.12,-0.42l-1.32,0.22l-0.93,-0.2l-0.46,0.26l-0.25,0.73l0.33,0.7l-0.89,-0.13l-1.39,-1.98l-0.31,-1.34l-0.97,-0.31l-0.89,-1.47l0.35,-1.61l1.45,-0.82l0.33,-1.87l2.61,0.44l0.58,-0.47l1.75,-0.16Z", "name": "Suriname"}, "KH": {"path": "M689.52,379.15l0.5,1.47l-0.28,2.77l-4.0,1.87l-0.16,0.59l0.69,0.97l-2.06,0.17l-2.05,0.97l-1.82,-0.32l-0.9,-1.17l-1.23,-2.56l-0.55,-2.88l1.4,-1.87l3.01,-0.46l2.23,0.35l2.01,0.99l0.51,-0.14l0.95,-1.49l1.74,0.75Z", "name": "Cambodia"}, "SV": {"path": "M195.8,379.9l1.41,-1.21l2.24,1.46l0.98,-0.27l0.44,0.21l-0.27,1.07l-1.14,-0.03l-3.65,-1.23Z", "name": "El Salvador"}, "SK": {"path": "M476.87,273.43l-1.2,2.33l-2.74,-1.08l-1.05,0.4l-0.52,0.78l-3.44,0.85l-0.48,0.81l-1.74,0.38l-1.88,-1.17l-0.2,-1.03l0.4,-0.94l1.02,0.01l0.86,-0.39l1.74,-2.23l0.83,0.19l0.76,-0.39l1.06,1.14l0.49,0.08l1.33,-0.74l1.26,0.34l1.63,-0.49l1.87,1.16Z", "name": "Slovakia"}, "KR": {"path": "M737.47,312.73l1.03,-0.11l0.87,-1.28l2.69,-0.35l0.32,-0.3l1.75,3.04l0.59,1.94l0.02,3.41l-0.81,1.45l-2.22,0.59l-1.92,1.21l-1.79,0.21l-0.2,-1.21l0.44,-2.44l-0.97,-2.83l1.45,-0.41l0.23,-0.6l-1.48,-2.32Z", "name": "Korea"}, "SI": {"path": "M456.18,286.22l-0.51,-1.56l0.2,-1.29l1.68,0.23l1.44,-0.83l2.08,-0.09l0.62,-0.56l0.24,0.62l-1.66,0.8l-0.43,1.53l-0.67,0.28l-0.24,0.94l-1.2,-0.55l-0.54,0.09l-0.33,0.43l-0.67,-0.05Z", "name": "Slovenia"}, "KP": {"path": "M736.77,312.06l-0.91,-0.45l-0.89,0.68l-1.23,-0.97l0.49,-1.01l0.5,-0.32l0.58,-2.78l-0.45,-0.8l-1.38,-0.34l-0.75,-0.55l1.69,-1.74l2.72,-1.75l1.57,-2.11l1.1,0.86l2.17,0.12l0.41,-0.49l-0.32,-1.43l3.54,-1.33l0.93,-1.56l1.03,1.28l-1.46,1.26l-0.79,1.2l0.02,2.38l-1.08,0.61l-1.41,1.55l-1.7,0.58l-1.23,1.17l-0.16,2.14l2.12,1.67l-0.16,0.33l-2.59,0.32l-1.14,1.41l-1.21,0.08Z", "name": "Dem. Rep. Korea"}, "KW": {"path": "M540.8,336.41l0.38,0.92l-0.17,0.78l0.61,1.64l-0.95,0.04l-0.83,-1.35l-1.59,-0.2l1.34,-2.02l1.21,0.17Z", "name": "Kuwait"}, "SN": {"path": "M390.09,377.95l0.12,1.57l0.49,1.48l0.96,0.82l0.05,1.3l-1.26,-0.19l-0.75,0.33l-1.84,-0.62l-5.84,-0.13l-2.54,0.51l-0.22,-1.04l1.78,0.04l2.01,-0.92l1.03,0.48l1.09,0.05l1.29,-0.62l0.14,-0.58l-0.51,-0.74l-1.81,0.25l-1.13,-0.64l-0.79,0.04l-0.72,0.61l-2.31,0.06l-0.92,-1.79l-0.82,-0.65l0.64,-0.36l1.81,-3.15l0.65,-0.64l1.04,0.19l1.39,-0.56l1.19,-0.02l2.72,1.39l3.03,3.53Z", "name": "Senegal"}, "SL": {"path": "M394.46,393.98l-1.73,1.98l-0.58,1.34l-2.07,-1.06l-1.22,-1.26l-0.65,-2.4l1.16,-0.97l0.67,-1.18l1.21,-0.52l1.66,0.0l1.03,1.65l0.52,2.42Z", "name": "Sierra Leone"}, "KZ": {"path": "M552.75,298.52l0.51,-1.47l-0.48,-1.19l-2.96,-1.32l-1.07,-2.94l-1.37,-0.98l-0.03,-0.45l1.95,0.27l0.45,-0.38l0.09,-2.29l1.75,-0.47l2.09,0.51l0.49,-0.34l0.45,-3.5l-0.45,-2.38l-0.42,-0.32l-2.41,0.17l-2.39,-0.84l-2.87,1.59l-2.15,0.7l-0.86,-0.4l0.15,-1.86l-1.6,-2.47l-2.02,-0.09l-1.83,-2.19l1.33,-2.64l-0.61,-1.04l1.66,-3.54l2.17,1.91l0.66,-0.26l0.29,-2.7l4.94,-4.15l3.67,-0.1l8.38,4.33l2.97,-1.63l3.74,-0.08l3.1,1.99l0.56,-0.13l0.6,-0.97l3.28,0.16l0.4,-0.27l0.63,-1.89l-0.15,-0.46l-3.62,-2.47l1.99,-1.65l-0.2,-1.23l2.05,-0.92l0.17,-0.58l-1.66,-2.63l0.88,-1.1l9.22,-1.46l1.35,-1.1l6.17,-1.58l2.26,-1.78l4.05,0.85l0.74,4.22l0.54,0.3l2.46,-0.98l2.8,1.27l-0.18,2.03l0.44,0.43l2.58,-0.3l4.83,-3.09l0.03,0.36l3.16,3.23l5.57,10.31l0.69,0.03l1.11,-1.75l3.11,2.07l3.78,-0.93l1.13,0.59l1.15,2.17l1.83,0.89l1.0,1.55l0.4,0.18l2.95,-0.47l1.06,1.89l-1.65,2.2l-1.92,0.33l-0.33,0.38l-0.12,3.61l-1.14,1.37l-4.73,-1.15l-0.48,0.28l-1.76,6.36l-1.1,0.68l-4.91,1.4l-0.26,0.52l2.13,5.72l-1.4,0.73l-0.08,1.73l-0.87,-0.28l-1.43,-1.27l-7.9,-0.45l-0.92,0.34l-3.74,-1.37l-1.63,0.99l-0.31,1.59l-3.7,-1.05l-1.87,0.48l-0.76,1.57l-1.35,0.6l-3.3,2.34l-1.12,2.31l-0.42,0.01l-0.93,-1.56l-2.86,-0.1l-0.45,-2.43l-0.39,-0.33l-0.81,-0.02l0.02,-3.32l-3.0,-2.52l-4.58,0.18l-2.74,0.47l-2.34,-3.04l-6.74,-4.23l-6.45,2.1l-0.28,0.38l0.1,12.31l-0.69,0.09l-1.62,-2.42l-1.83,-1.07l-3.13,0.66l-0.68,0.6Z", "name": "Kazakhstan"}, "SA": {"path": "M537.53,338.97l2.0,0.25l0.91,1.39l1.49,-0.06l0.88,2.19l1.29,0.79l0.51,1.03l1.56,1.08l-0.1,1.98l0.32,0.93l1.57,2.56l0.76,0.55l0.71,-0.04l1.37,4.1l7.83,1.63l0.51,-0.29l0.77,1.29l-1.56,5.0l-7.29,2.58l-7.31,1.05l-2.34,1.19l-1.88,2.79l-0.76,0.28l-0.83,-0.79l-0.91,0.12l-2.88,-0.52l-3.5,0.25l-0.86,-0.57l-0.58,0.15l-0.66,1.29l0.16,1.12l-0.43,0.33l-0.93,-1.42l-0.33,-1.18l-1.23,-0.89l-1.27,-2.1l-0.78,-2.27l-1.73,-1.83l-1.14,-0.49l-1.54,-2.37l-0.2,-3.5l-1.44,-3.02l-1.27,-1.19l-1.33,-0.58l-1.31,-3.5l-0.77,-0.7l-0.97,-2.05l-2.8,-4.2l-1.07,-0.17l0.59,-2.85l2.75,0.31l1.08,-0.88l0.6,-0.99l1.74,-0.36l0.65,-1.08l0.72,-0.43l0.1,-0.6l-2.09,-2.45l4.42,-1.3l0.48,-0.39l2.75,0.73l3.66,2.01l7.03,5.8l4.88,0.32Z", "name": "Saudi Arabia"}, "SE": {"path": "M480.3,192.35l-4.15,1.76l-2.43,4.19l0.32,3.66l-3.86,4.45l-4.93,4.95l-1.79,7.79l1.78,3.64l2.29,2.71l-2.14,5.19l-2.69,1.39l-0.95,7.87l-1.3,3.9l-2.71,-0.39l-0.43,0.25l-1.32,3.3l-2.29,0.16l-0.75,-3.94l-2.09,-5.18l-1.86,-6.56l1.04,-2.66l2.12,-3.53l0.83,-6.02l-1.6,-2.83l-0.15,-7.02l1.52,-4.93l2.18,0.09l0.39,-0.26l0.87,-2.28l-0.85,-2.14l3.83,-8.36l4.06,-11.45l2.12,0.02l0.4,-0.33l0.59,-3.35l4.31,1.0l0.49,-0.36l0.34,-4.24l1.04,-0.19l6.98,7.72l0.07,9.8l0.74,2.18Z", "name": "Sweden"}, "SD": {"path": "M505.98,389.25l-0.34,-0.78l-1.17,-0.91l-0.27,-1.62l0.29,-1.82l-0.34,-0.46l-1.16,-0.18l-0.54,0.59l-1.23,0.11l-0.28,0.65l0.53,0.66l0.17,1.23l-2.44,3.01l-0.96,0.2l-2.39,-1.41l-0.95,0.52l-0.38,0.78l-1.11,0.41l-0.29,0.5l-1.94,0.0l-0.54,-0.52l-1.81,-0.09l-0.95,0.41l-2.45,-2.36l-2.07,0.54l-0.73,1.27l-0.6,2.11l-1.25,0.58l-0.75,-0.62l0.27,-2.67l-1.48,-1.78l-0.22,-1.49l-0.92,-0.97l-0.02,-1.3l-0.57,-1.17l-0.69,-0.16l0.7,-1.31l-0.18,-1.15l0.65,-0.63l0.03,-0.55l-0.36,-0.42l1.56,-3.02l1.91,0.16l0.43,-0.4l-0.1,-11.14l2.49,-0.01l0.4,-0.4l-0.0,-4.96l29.02,0.0l0.65,2.11l-0.49,0.67l0.36,2.75l0.93,3.22l2.12,1.59l-0.9,1.07l-1.72,0.4l-0.98,0.91l-1.42,5.73l0.24,1.16l-0.38,2.09l-0.97,2.4l-1.53,1.32l-1.32,2.93l-1.22,0.86l-0.37,1.34Z", "name": "Sudan"}, "DO": {"path": "M241.8,368.82l0.05,-0.67l-0.47,-0.75l0.43,-0.45l0.19,-1.02l-0.09,-1.57l1.66,0.01l1.99,0.64l0.33,0.69l1.29,0.19l0.33,0.77l0.99,0.09l0.81,0.64l-0.46,0.53l-1.13,-0.48l-1.87,-0.01l-1.27,0.6l-0.75,-0.56l-1.01,0.55l-0.79,1.43l-0.23,-0.62Z", "name": "Dominican Rep."}, "DJ": {"path": "M528.43,386.01l-0.45,0.67l-0.58,-0.25l-1.51,0.13l-0.18,-1.02l1.45,-1.97l0.83,0.17l0.77,-0.44l0.2,1.01l-1.21,0.52l-0.06,0.7l0.73,0.48Z", "name": "Djibouti"}, "DK": {"path": "M452.3,246.5l-1.22,2.88l-2.11,-1.99l-0.26,-1.39l2.98,-1.2l0.61,1.7ZM447.78,242.9l-0.32,0.89l-0.89,-0.07l-1.8,3.21l0.54,2.1l-1.13,0.47l-1.58,-0.48l-0.91,-2.19l-0.07,-4.44l0.99,-2.3l2.0,-0.26l1.11,-1.38l1.3,-0.85l-0.05,1.54l-0.73,1.69l0.3,1.28l1.25,0.79Z", "name": "Denmark"}, "DE": {"path": "M453.15,278.66l-0.56,-0.42l-1.2,-0.11l-1.89,0.66l-2.12,-0.15l-0.57,0.71l-0.83,-0.67l-0.98,0.09l-2.56,-1.08l-0.49,0.15l-0.39,0.62l-1.46,-0.02l0.26,-2.16l1.24,-2.54l-0.28,-0.57l-3.51,-0.68l-0.95,-0.81l0.12,-1.49l-0.49,-1.0l0.27,-2.61l-0.38,-3.76l1.43,-0.25l0.63,-1.53l0.65,-3.87l-0.43,-1.44l0.31,-0.56l1.61,-0.18l0.34,0.68l0.67,0.07l1.7,-2.09l-0.57,-3.77l1.35,0.41l1.33,-0.45l0.28,1.46l2.27,0.9l-0.02,1.24l0.52,0.39l2.55,-0.8l1.33,-1.07l2.53,1.51l1.08,1.24l0.51,1.88l-0.61,1.39l0.88,1.43l0.58,2.06l-0.16,1.52l0.87,2.18l-0.54,0.2l-0.49,-0.34l-0.54,0.07l-0.57,0.68l-1.71,0.73l-1.01,1.02l-1.75,0.82l-0.2,0.5l0.84,2.98l2.45,2.3l-0.71,1.4l-1.0,0.83l0.33,2.27Z", "name": "Germany"}, "YE": {"path": "M528.26,376.46l0.26,-0.43l-0.22,-1.03l0.28,-0.61l-0.09,-0.91l0.92,-0.7l-0.08,-1.37l0.39,-0.76l1.01,0.48l3.33,-0.27l3.76,0.42l0.95,0.82l1.36,-0.59l1.74,-2.67l2.18,-1.11l6.86,-0.96l2.48,5.52l-1.64,0.77l-0.56,1.93l-6.23,2.19l-2.29,1.82l-1.93,0.05l-1.41,1.03l-4.24,0.75l-1.72,1.5l-3.28,0.19l-0.52,-1.19l0.02,-1.52l-1.34,-3.33Z", "name": "Yemen"}, "DZ": {"path": "M441.47,315.57l-0.34,1.19l0.39,2.88l-0.55,2.35l-1.58,1.92l0.36,2.53l1.92,1.66l0.17,0.85l1.43,1.1l1.85,7.66l0.13,1.23l-0.57,5.23l0.2,1.59l-0.88,1.03l-0.02,0.5l1.41,1.93l0.14,1.24l0.89,1.54l0.5,0.17l0.97,-0.42l1.72,1.11l0.83,1.29l-8.23,4.95l-7.23,5.24l-3.43,1.15l-2.3,0.21l-0.28,-1.63l-2.56,-1.12l-0.67,-1.28l-26.12,-18.48l0.01,-3.67l3.77,-1.98l2.44,-0.43l2.12,-0.8l1.08,-1.5l2.81,-1.11l0.34,-2.2l1.34,-0.31l1.04,-1.0l3.46,-0.73l0.36,-1.59l-0.58,-0.56l-0.83,-3.02l-0.18,-1.95l-0.8,-1.65l2.06,-1.44l2.62,-0.52l1.71,-1.32l2.31,-0.91l8.23,-0.8l1.51,0.41l2.27,-1.19l2.45,-0.02l0.91,0.65l1.38,-0.05Z", "name": "Algeria"}, "US": {"path": "M892.73,206.44l1.34,0.72l1.36,-0.5l1.85,1.36l2.21,0.69l-1.59,1.04l-2.57,-2.02l-2.38,0.18l-0.3,-0.25l0.09,-1.21ZM183.2,272.56l0.38,1.78l1.12,0.96l4.22,0.82l2.39,1.15l2.19,-0.43l2.01,0.64l-1.73,0.85l-3.49,3.04l-0.14,0.83l0.52,0.39l2.3,-0.7l1.8,1.17l5.17,-2.8l-0.37,0.89l0.24,0.53l1.35,0.45l1.71,1.35l4.7,-1.01l0.4,0.77l1.58,0.45l0.68,0.78l-1.42,0.21l-2.2,-0.37l-3.59,1.03l-2.72,3.73l0.35,0.91l0.62,-0.0l0.61,-0.75l-1.43,5.39l0.29,3.47l0.67,1.77l0.61,0.48l1.03,-0.07l0.75,-0.43l1.59,-2.19l0.13,-2.45l-0.82,-2.2l0.11,-1.33l1.2,-2.74l0.42,-0.36l0.48,0.84l0.4,-0.3l0.4,-1.6l0.59,-0.51l0.24,-0.94l1.66,0.56l1.67,1.25l-0.03,2.8l-1.28,1.3l0.02,1.21l0.87,0.37l1.67,-1.46l0.49,0.18l0.51,3.02l-2.51,4.23l0.17,0.59l1.54,0.69l1.51,0.19l1.93,-0.49l4.72,-2.41l2.16,-2.03l-0.08,-1.39l0.77,-0.26l3.91,0.4l2.14,-1.19l0.19,-0.39l-0.31,-1.71l2.31,-2.21l1.0,-0.57l8.31,-0.03l0.57,-0.94l1.9,-0.88l0.92,-1.72l0.75,-2.75l1.58,-2.29l0.94,0.69l1.44,-0.54l0.81,0.77l-0.0,4.78l1.98,3.01l-2.38,1.52l-5.36,2.37l-1.81,3.03l0.01,1.98l0.83,1.79l0.78,0.27l-6.43,1.12l-2.21,1.0l-0.21,0.48l0.45,0.28l3.52,-0.57l-2.73,0.77l-1.77,-0.26l-0.76,0.91l0.23,0.65l0.34,0.07l-0.43,1.87l-1.26,1.73l-1.46,-1.16l-0.49,-0.06l-0.18,0.46l0.52,1.74l0.61,0.64l0.03,0.92l-0.94,1.5l-1.22,-1.31l-0.28,-2.52l-0.35,-0.35l-0.42,0.27l-0.48,1.39l0.34,1.57l-0.97,-0.29l-0.48,0.22l0.16,0.5l1.54,0.91l0.1,2.78l0.78,0.52l0.53,3.76l-1.43,2.04l-2.47,0.86l-1.71,1.78l-1.31,0.27l-1.27,1.11l-0.43,1.05l-2.7,1.91l-2.64,3.21l-0.45,2.23l0.45,2.17l0.85,2.51l1.09,2.0l0.04,1.26l1.16,3.2l-0.18,2.82l-0.55,1.49l-0.47,0.22l-0.88,-0.24l-0.33,-1.01l-1.03,-0.79l-2.75,-5.4l0.46,-2.04l-0.76,-1.66l-1.95,-2.41l-1.47,-0.55l-2.38,1.23l-1.46,-1.42l-1.79,-0.75l-2.78,0.36l-2.27,-0.31l-2.03,0.23l-1.04,0.45l-0.18,0.57l0.39,0.67l0.19,1.47l-0.9,-0.23l-0.84,0.49l-1.57,-0.08l-2.08,-1.52l-2.08,0.34l-1.91,-0.65l-3.74,0.89l-2.39,2.17l-2.54,1.28l-1.45,1.47l-0.61,1.43l-0.02,1.98l0.38,1.9l-1.99,-0.55l-1.81,-0.8l-1.25,-3.25l-1.44,-1.57l-2.24,-3.73l-1.76,-1.15l-2.28,-0.01l-1.71,2.18l-1.74,-0.72l-1.16,-0.78l-1.52,-3.14l-3.94,-3.35l-4.34,-0.0l-0.4,0.4l-0.0,0.81l-6.5,0.02l-9.04,-3.34l-0.33,-0.75l-5.69,0.52l-0.43,-1.37l-1.62,-1.72l-1.14,-0.41l-0.55,-0.94l-1.27,-0.14l-1.02,-0.83l-2.22,-0.29l-0.43,-0.33l-0.36,-1.7l-2.4,-3.06l-2.02,-4.21l-0.05,-0.96l-2.93,-3.59l-0.33,-2.54l-1.3,-1.83l0.52,-2.65l-0.09,-2.87l-0.78,-2.59l0.96,-3.2l0.61,-6.46l-0.46,-4.91l-1.48,-4.8l0.09,-0.23l3.09,1.09l1.27,3.33l0.71,0.07l0.68,-1.24l-1.12,-5.71l68.79,-0.0l0.4,-0.4l0.13,-1.09ZM32.37,157.48l1.75,3.33l0.67,0.06l0.98,-1.29l3.62,0.39l-0.12,1.35l0.27,0.41l3.83,1.28l2.65,-0.7l5.14,2.3l4.86,0.72l1.87,0.93l3.47,-1.11l3.64,2.11l2.52,0.95l-0.03,56.12l0.38,0.4l2.37,0.14l2.29,1.31l3.91,5.31l0.63,0.04l2.4,-2.69l2.1,-1.34l1.18,2.24l3.95,4.14l4.1,8.6l4.22,2.91l0.06,2.46l-1.03,1.56l-1.12,-1.31l-2.06,-1.31l-0.68,-3.73l-3.26,-3.82l-1.32,-4.34l-0.33,-0.28l-6.34,-0.42l-2.8,-1.31l-5.26,-5.09l-6.77,-2.72l-3.55,0.39l-4.79,-2.25l-3.33,-2.21l-2.78,1.09l-0.25,0.43l0.46,3.15l-3.97,1.29l-2.26,1.69l-2.25,0.84l-0.29,-2.33l1.07,-4.71l2.51,-1.5l0.15,-0.53l-0.69,-1.3l-0.62,-0.11l-3.19,2.88l-1.77,3.43l-3.56,3.49l-0.04,0.53l1.65,2.14l-2.16,3.15l-5.1,3.33l-0.76,2.13l-3.78,2.28l-0.91,2.19l-2.68,1.74l-1.82,-0.27l-6.95,4.17l-3.92,1.13l2.36,-1.94l2.5,-1.4l2.58,-2.35l3.26,-0.66l1.2,-1.79l3.42,-2.69l2.56,-2.83l0.42,-3.52l1.25,-2.78l-0.09,-0.45l-0.46,-0.07l-2.63,1.33l-0.6,-0.62l-0.6,0.03l-1.02,1.31l-1.33,-1.98l-0.71,0.08l-0.3,0.77l-0.56,-1.45l-0.62,-0.17l-2.39,1.85l-1.03,-0.0l-0.18,-2.46l0.44,-1.74l-1.7,-2.14l-0.41,-0.11l-3.01,0.89l-1.94,-2.17l-1.61,-1.16l-0.11,-2.96l-1.78,-2.05l0.88,-2.78l2.01,-2.96l0.87,-2.7l1.66,-0.33l1.59,0.82l0.5,-0.12l1.86,-2.47l1.93,0.32l1.91,-1.75l-0.34,-2.97l-1.22,-1.04l1.59,-1.93l-0.33,-0.65l-1.69,0.11l-2.66,1.27l-0.72,1.08l-1.92,-1.11l-3.43,0.63l-3.41,-1.3l-1.05,-2.33l-2.87,-3.16l3.14,-2.29l5.47,-2.98l1.51,0.0l-0.29,2.67l0.42,0.44l5.29,-0.24l0.34,-0.59l-2.03,-3.88l-3.12,-2.51l-1.79,-3.25l-2.4,-2.83l-3.25,-2.04l1.19,-3.05l4.45,-0.33l3.16,-3.2l0.69,-3.62l2.43,-3.32l2.42,-0.86l4.6,-3.26l2.51,0.36l3.66,-3.91l3.4,1.47ZM37.56,239.39l-2.21,1.54l-0.94,-0.87l-0.32,-1.79l3.24,-2.14l1.37,0.26l0.77,1.05l-1.9,1.94ZM31.06,363.53l0.98,0.48l0.75,0.91l-1.77,1.1l-0.44,-1.57l0.48,-0.92ZM29.32,361.52l0.19,0.06l0.11,0.07l-0.18,0.04l-0.12,-0.16ZM25.2,359.55l0.2,0.24l-0.14,-0.02l-0.05,-0.23ZM5.91,226.07l-1.09,0.55l-2.4,-1.69l1.72,-0.6l1.6,0.37l0.17,1.37Z", "name": "United States"}, "UY": {"path": "M286.86,504.69l-0.94,1.64l-2.58,1.54l-1.67,-0.55l-1.42,0.28l-2.4,-1.28l-1.51,0.09l-1.28,-1.4l0.16,-1.65l0.56,-0.83l-0.02,-2.91l1.22,-5.04l1.18,-0.23l2.36,2.12l1.08,0.03l4.36,3.37l1.24,1.73l-0.98,1.58l0.62,1.52Z", "name": "Uruguay"}, "LB": {"path": "M510.37,325.96l-0.89,0.55l1.84,-3.86l0.6,0.08l0.24,0.7l-1.15,0.96l-0.64,1.57Z", "name": "Lebanon"}, "LA": {"path": "M689.54,378.29l-1.76,-0.75l-0.5,0.15l-0.94,1.48l-1.33,-0.65l0.62,-0.99l0.11,-2.2l-2.04,-2.45l-0.25,-2.69l-1.9,-2.14l-2.15,-0.31l-0.79,0.93l-1.12,0.06l-1.06,-0.4l-2.05,1.22l-0.04,-1.63l0.61,-2.74l-0.36,-0.49l-1.35,-0.1l-0.11,-1.26l-0.97,-0.9l0.33,-0.61l1.63,-1.34l0.39,0.36l1.33,0.07l0.42,-0.45l-0.34,-2.75l0.7,-0.21l1.28,1.86l1.11,2.41l0.36,0.23l2.82,0.02l0.72,1.72l-1.4,0.67l-0.72,0.95l0.13,0.59l2.91,1.54l3.61,5.34l1.88,1.81l0.57,1.65l-0.35,1.99Z", "name": "Lao PDR"}, "TW": {"path": "M724.01,356.0l-0.73,1.52l-0.9,-1.56l-0.26,-1.81l1.38,-2.53l1.73,-1.8l0.64,0.46l-1.86,5.73Z", "name": "Taiwan"}, "TT": {"path": "M266.64,389.17l0.28,-1.17l1.13,-0.22l-0.06,1.21l-1.35,0.18Z", "name": "Trinidad and Tobago"}, "TR": {"path": "M513.19,301.28l3.65,1.31l3.06,-0.48l2.09,0.29l3.13,-1.74l2.44,-0.15l2.19,1.49l0.35,0.95l-0.23,1.5l0.24,0.43l2.34,1.31l-1.23,0.67l-0.2,0.43l0.75,3.55l-0.42,1.23l1.16,2.15l-0.57,0.25l-0.9,-0.73l-2.91,-0.41l-1.25,0.5l-4.23,0.45l-2.81,1.15l-1.9,0.01l-1.54,-0.57l-2.56,0.81l-0.66,-0.49l-0.64,0.29l-0.12,1.59l-0.89,0.9l-0.49,-0.75l0.8,-1.4l-0.41,-0.19l-1.43,0.25l-2.0,-0.69l-2.04,1.79l-3.49,0.32l-2.14,-1.66l-2.7,-0.1l-0.87,1.34l-1.36,0.29l-2.28,-1.56l-2.71,-0.02l-1.37,-2.89l-1.7,-1.68l1.09,-2.23l-0.08,-0.46l-1.31,-1.28l2.41,-2.71l3.68,-0.13l0.36,-0.25l0.94,-2.24l4.48,0.41l3.23,-2.2l2.8,-0.91l3.98,-0.07l4.28,2.31ZM488.78,302.77l-1.7,1.44l-0.51,-0.99l1.37,-2.91l-0.78,-0.93l1.78,-0.74l1.78,0.37l0.45,1.31l1.81,0.89l-0.14,0.26l-2.76,0.17l-1.31,1.13Z", "name": "Turkey"}, "LK": {"path": "M624.16,398.87l-1.82,0.48l-0.99,-1.67l-0.42,-3.47l0.95,-3.45l1.21,0.98l2.26,4.21l-0.34,2.34l-0.85,0.58Z", "name": "Sri Lanka"}, "LV": {"path": "M489.13,238.44l0.98,0.86l0.21,2.15l0.72,2.39l-3.68,2.17l-2.21,-1.98l-1.3,-0.34l-0.27,-0.73l-0.45,-0.25l-2.41,0.44l-4.15,-0.29l-2.48,1.13l0.07,-2.68l1.15,-2.72l1.91,-1.29l2.14,3.3l2.01,-0.09l0.38,-0.35l0.45,-3.34l1.74,-0.68l3.03,2.19l2.16,0.1Z", "name": "Latvia"}, "LT": {"path": "M486.92,246.68l0.19,1.58l-2.02,1.5l-0.54,2.27l-2.48,1.47l-2.05,-0.02l-0.5,-1.08l-1.3,-0.59l-0.07,-2.33l-1.21,-0.74l-2.38,-0.69l-0.45,-3.18l2.51,-1.21l4.09,0.28l2.23,-0.39l0.52,0.88l1.23,0.27l2.22,1.99Z", "name": "Lithuania"}, "LU": {"path": "M436.07,271.5l-0.48,-0.1l0.29,-1.66l0.29,0.51l-0.1,1.25Z", "name": "Luxembourg"}, "LR": {"path": "M399.36,395.85l0.18,1.54l-0.49,1.0l0.08,0.47l2.47,1.8l-0.33,2.81l-2.65,-1.13l-5.78,-4.62l0.58,-1.32l2.1,-2.34l0.86,-0.22l0.77,1.14l-0.14,0.86l0.59,0.87l1.0,0.14l0.76,-0.99Z", "name": "Liberia"}, "LS": {"path": "M491.05,494.85l-0.48,0.15l-1.5,-1.78l1.12,-1.53l2.18,-1.51l1.52,1.34l-0.99,1.94l-1.23,0.4l-0.62,0.98Z", "name": "Lesotho"}, "TH": {"path": "M670.27,385.68l-1.41,3.9l0.15,2.01l0.38,0.36l1.38,0.07l0.9,2.05l0.55,2.34l1.4,1.45l1.61,0.38l0.96,0.97l-0.5,0.64l-1.1,0.2l-0.34,-1.18l-2.04,-1.1l-0.63,0.23l-0.63,-0.62l-0.48,-1.3l-2.55,-2.64l-0.73,0.41l0.95,-3.91l2.16,-4.25ZM670.67,384.59l-0.92,-2.2l-0.26,-2.64l-2.14,-3.1l0.72,-0.5l0.89,-2.62l-2.62,-3.66l-0.99,-1.9l0.88,-0.52l1.05,-2.63l1.74,-0.19l2.59,-1.63l0.76,0.58l0.13,1.42l0.37,0.36l1.23,0.09l-0.52,2.34l0.05,2.46l0.6,0.33l2.43,-1.45l0.77,0.4l1.47,-0.08l0.71,-0.89l1.48,0.14l1.71,1.92l0.25,2.69l1.92,2.15l-0.1,1.92l-0.61,0.87l-2.22,-0.33l-3.5,0.65l-1.6,2.14l0.36,2.6l-1.51,-0.79l-1.85,-0.01l0.28,-1.54l-0.4,-0.47l-2.21,0.02l-0.4,0.37l-0.19,2.77l-0.34,0.94Z", "name": "Thailand"}, "TF": {"path": "M596.66,558.28l-3.18,0.21l-0.05,-1.59l0.4,-1.7l1.28,0.9l2.08,0.42l-0.53,1.76Z", "name": "Fr. S. Antarctic Lands"}, "TG": {"path": "M422.7,387.47l-0.1,1.24l1.53,1.53l0.08,1.1l0.5,0.65l-0.11,5.64l0.49,1.47l-1.31,0.35l-1.02,-2.13l-0.18,-1.13l0.53,-2.2l-0.63,-1.16l-0.22,-3.7l-1.01,-1.41l0.07,-0.29l1.37,0.03Z", "name": "Togo"}, "TD": {"path": "M480.25,365.02l0.12,9.75l-2.1,0.05l-1.14,1.91l-0.69,1.65l0.34,0.73l-0.66,0.92l0.24,0.9l-0.86,1.97l0.45,0.5l0.59,-0.1l0.34,0.65l0.03,1.39l0.9,1.06l-1.45,0.43l-1.27,1.03l-1.83,2.78l-2.16,1.08l-2.31,-0.15l-0.86,0.25l-0.26,0.49l0.17,0.62l-2.11,1.69l-2.85,0.87l-1.09,-0.57l-0.73,0.67l-1.12,0.1l-1.1,-3.13l-1.25,-0.64l-1.22,-1.23l0.3,-0.65l3.01,0.04l0.35,-0.6l-1.3,-2.21l-0.08,-3.33l-0.97,-1.68l0.22,-1.06l-0.38,-0.48l-1.22,-0.04l0.0,-1.27l-0.98,-1.08l0.97,-3.05l3.25,-2.68l0.13,-3.38l0.95,-5.29l0.52,-1.1l-0.1,-0.47l-0.91,-0.8l-0.19,-0.98l-0.8,-0.6l-0.55,-3.77l2.11,-1.24l19.56,10.1Z", "name": "Chad"}, "LY": {"path": "M483.49,331.4l-0.77,1.19l0.3,1.46l-0.6,1.92l0.73,2.26l0.0,25.02l-2.48,0.01l-0.41,0.87l-19.41,-10.02l-4.41,2.35l-1.37,-1.37l-3.82,-1.13l-1.14,-1.71l-1.98,-1.28l-1.22,0.33l-0.67,-1.15l-0.16,-1.3l-1.29,-1.77l0.88,-1.24l-0.07,-4.54l0.43,-2.38l-0.86,-3.65l1.13,-0.8l0.22,-1.23l-0.21,-1.1l3.49,-2.78l0.28,-2.06l2.44,0.85l1.18,-0.22l1.97,0.47l3.14,1.26l1.37,2.7l5.71,1.77l2.64,1.43l1.62,-0.76l1.29,-1.41l-0.45,-2.46l0.67,-1.22l1.67,-1.29l1.56,-0.37l3.13,0.56l1.09,1.36l3.98,0.83l0.38,0.6Z", "name": "Libya"}, "AE": {"path": "M550.76,353.19l1.89,-0.42l3.84,0.02l4.77,-4.92l0.19,0.38l0.26,1.67l-0.82,0.01l-0.39,0.35l-0.08,2.12l-0.82,0.64l-0.01,1.0l-0.67,1.03l-0.39,1.45l-7.07,-1.29l-0.71,-2.04Z", "name": "United Arab Emirates"}, "VE": {"path": "M240.68,386.52l0.53,0.75l-0.02,1.07l-1.07,1.78l0.95,2.01l0.42,0.23l1.4,-0.44l0.56,-1.84l-0.77,-1.17l-0.1,-1.49l2.83,-0.94l0.26,-0.49l-0.28,-0.97l0.3,-0.28l0.66,1.32l1.96,0.26l1.4,1.23l0.08,0.69l0.39,0.35l4.81,-0.23l1.49,1.12l1.92,0.31l1.67,-0.84l0.22,-0.61l3.44,-0.14l-0.18,0.56l0.86,1.2l2.19,0.35l1.68,1.1l0.37,1.87l0.41,0.32l1.56,0.17l-1.66,1.36l-0.22,0.92l0.66,0.98l-1.67,0.54l-0.3,0.4l0.04,0.99l-0.56,0.57l-0.01,0.55l1.85,2.27l-0.66,0.69l-4.47,1.29l-0.72,0.54l-3.69,-0.9l-0.71,0.27l-0.02,0.7l0.91,0.53l-0.08,1.55l0.35,1.58l0.35,0.31l1.66,0.17l-1.3,0.52l-0.48,1.13l-2.68,0.91l-0.6,0.77l-1.57,0.13l-1.17,-1.13l-0.8,-2.52l-1.25,-1.26l1.02,-1.23l-1.29,-2.95l0.18,-1.62l1.0,-2.21l-0.2,-0.49l-1.14,-0.47l-4.02,0.36l-1.82,-2.11l-1.57,-0.33l-2.99,0.23l-1.06,-0.98l0.25,-1.24l-0.2,-1.02l-0.59,-0.69l-0.29,-1.06l-1.08,-0.39l0.78,-2.81l1.9,-2.12Z", "name": "Venezuela"}, "AF": {"path": "M600.86,316.06l-1.73,1.47l0.72,3.0l-1.1,1.13l-0.02,1.35l-0.49,0.78l-2.15,-0.09l-0.37,0.58l0.8,1.63l-1.4,0.74l-1.06,1.8l0.07,1.81l-0.66,0.56l-0.91,-0.22l-1.91,0.38l-0.48,0.81l-1.88,0.14l-1.49,1.9l-0.08,2.2l-2.91,1.07l-1.64,-0.24l-0.72,0.58l-1.41,-0.31l-2.4,0.41l-3.54,-1.24l1.98,-2.49l-0.21,-1.88l-0.3,-0.34l-1.63,-0.42l-0.19,-1.69l-0.76,-2.19l0.96,-1.48l-0.18,-0.59l-0.75,-0.31l1.48,-5.22l2.12,0.97l2.14,-0.38l0.74,-1.45l1.77,-0.42l1.54,-1.0l0.62,-2.51l1.88,-0.54l0.48,-0.87l0.93,0.61l2.13,0.12l2.55,1.01l1.96,-0.89l0.64,0.46l0.58,-0.13l0.69,-1.23l1.58,-0.09l0.47,-0.64l0.24,-1.17l0.79,-0.81l0.81,0.43l-0.19,0.66l0.71,0.58l-0.09,2.61l1.28,1.05ZM601.25,315.96l1.86,-0.88l1.42,-1.28l3.93,0.22l0.11,0.23l-2.26,0.81l-5.06,0.9Z", "name": "Afghanistan"}, "IQ": {"path": "M530.81,314.51l0.79,0.72l1.26,-0.3l1.46,3.35l1.63,1.01l0.15,1.38l-1.23,1.13l-0.53,2.67l1.73,2.85l3.12,1.72l1.16,2.02l-0.38,1.98l0.39,0.48l0.41,-0.0l0.02,1.16l0.79,1.02l-2.51,-0.11l-1.71,2.58l-4.3,-0.21l-7.02,-5.78l-3.73,-2.06l-2.89,-0.78l-0.86,-3.1l5.46,-3.23l0.95,-3.7l-0.2,-2.14l1.28,-0.77l1.22,-1.86l0.86,-0.39l2.67,0.37Z", "name": "Iraq"}, "IS": {"path": "M384.17,190.14l-0.45,3.88l2.67,3.88l-3.04,4.17l-9.15,4.83l-9.47,-2.42l1.99,-2.05l-0.1,-0.63l-4.53,-2.38l3.43,-0.89l0.3,-0.41l-0.11,-1.75l-0.3,-0.36l-4.81,-1.29l1.43,-3.39l3.37,-0.82l3.74,4.02l0.56,0.03l3.59,-3.17l2.9,1.61l0.45,-0.04l3.95,-3.21l3.58,0.38Z", "name": "Iceland"}, "IR": {"path": "M533.43,314.24l-1.29,-2.38l0.43,-1.06l-0.72,-3.4l1.03,-0.56l0.32,0.9l1.26,1.49l2.06,0.57l1.12,-0.18l2.89,-2.33l0.6,-0.15l0.42,0.54l-0.74,1.37l0.06,0.46l1.56,1.68l0.66,0.05l0.67,1.99l2.55,0.89l1.88,1.61l3.7,0.53l3.91,-0.83l0.47,-0.8l2.17,-0.66l1.65,-1.68l1.49,0.08l1.19,-0.57l1.57,0.26l2.84,1.62l1.88,0.32l2.77,2.69l1.78,0.2l0.18,2.19l-1.69,5.93l0.23,0.49l0.64,0.26l-0.85,1.58l0.81,2.33l0.19,1.83l0.3,0.35l1.63,0.43l0.16,1.43l-2.16,2.5l-0.01,0.51l2.21,3.19l2.35,1.3l0.06,2.26l1.24,0.74l0.12,0.75l-3.31,1.33l-1.08,3.14l-9.68,-1.74l-0.99,-3.18l-1.43,-0.75l-2.18,0.48l-2.47,1.31l-2.82,-0.86l-2.46,-2.11l-2.41,-0.84l-3.42,-6.37l-0.49,-0.2l-1.17,0.41l-1.43,-0.86l-0.51,0.09l-0.64,0.77l-0.97,-1.07l-0.02,-1.4l-0.71,-0.39l0.27,-1.92l-1.29,-2.25l-3.13,-1.73l-1.59,-2.62l0.51,-2.08l1.3,-1.32l-0.19,-1.79l-1.73,-1.17l-1.57,-3.6Z", "name": "Iran"}, "AM": {"path": "M537.0,308.96l-0.27,0.03l-1.24,-2.34l-0.92,0.01l-0.62,-0.73l-0.69,-0.08l-0.96,-0.89l-1.58,-0.69l0.2,-1.3l-0.28,-0.9l2.73,-0.41l1.13,1.15l-0.21,1.0l1.06,0.9l-0.5,0.74l0.08,0.53l2.05,1.37l0.04,1.62Z", "name": "Armenia"}, "AL": {"path": "M470.32,297.19l0.73,0.03l0.93,0.99l0.13,0.95l-0.3,1.27l0.36,1.43l1.02,0.9l-1.82,3.2l-0.18,-0.65l-1.26,-1.0l-0.19,-1.36l0.53,-3.17l-0.55,-1.64l0.61,-0.94Z", "name": "Albania"}, "AO": {"path": "M461.55,429.93l1.26,3.16l1.94,2.36l2.47,-0.54l1.25,0.32l0.44,-0.18l0.93,-1.92l1.31,-0.08l0.41,-0.44l0.47,-0.0l-0.1,0.41l0.39,0.49l2.65,-0.02l0.03,1.2l0.48,1.02l-0.34,1.52l0.18,1.56l0.83,1.04l-0.13,2.87l0.54,0.39l3.96,-0.41l-0.1,1.81l0.39,1.06l-0.24,1.45l-4.7,-0.03l-0.4,0.39l-0.12,8.23l2.93,3.55l-3.84,0.9l-5.89,-0.36l-1.88,-1.27l-10.47,0.23l-1.3,-1.03l-1.85,-0.16l-2.4,0.78l-0.15,-1.08l0.33,-2.2l1.0,-3.5l1.35,-3.24l2.24,-2.82l0.33,-2.07l-0.13,-1.54l-0.8,-1.08l-1.21,-2.88l0.87,-1.62l-1.27,-4.13l-1.17,-1.53l2.47,-0.63l7.03,0.03ZM451.71,428.77l-0.47,-1.26l1.25,-1.11l0.32,0.3l-0.99,1.03l-0.12,1.04Z", "name": "Angola"}, "AR": {"path": "M258.05,471.85l1.38,1.83l0.68,-0.08l0.87,-1.93l2.39,0.09l4.94,4.92l2.17,0.51l2.99,1.99l2.47,1.04l0.26,0.88l-2.38,4.1l0.23,0.58l5.39,1.21l2.13,-0.46l2.46,-2.25l0.49,-2.47l0.76,-0.32l0.98,1.25l-0.04,1.9l-3.67,2.62l-2.85,2.79l-3.42,4.08l-1.3,5.37l0.01,2.9l-0.54,0.77l-0.36,3.52l3.15,2.82l-0.31,1.9l1.54,1.59l-0.1,1.23l-2.3,3.86l-3.55,1.64l-4.91,0.65l-2.7,-0.32l-0.43,0.5l0.5,1.83l-0.49,2.34l0.4,1.59l-1.21,0.94l-2.34,0.42l-2.29,-1.15l-1.41,0.93l0.41,3.97l1.69,1.02l1.41,-0.77l0.39,0.92l-2.08,0.99l-2.01,2.14l-0.47,3.69l-0.49,1.57l-2.34,0.12l-2.08,2.01l-0.63,3.07l2.46,2.67l2.21,0.74l-0.73,2.83l-2.84,2.04l-1.73,4.57l-2.18,1.47l-1.15,1.98l0.77,4.43l1.16,1.7l-2.44,-0.66l-5.82,-0.52l-0.91,-2.06l0.05,-2.9l-0.46,-0.4l-1.41,0.21l-0.69,-1.12l-0.2,-3.82l1.89,-1.73l0.79,-2.4l-0.26,-1.97l1.31,-3.13l0.91,-4.79l-0.23,-1.96l1.06,-0.95l-0.27,-1.32l-1.01,-0.76l0.63,-1.12l-0.05,-0.46l-1.05,-1.22l-0.53,-3.58l0.97,-0.92l-0.42,-4.02l1.21,-6.04l1.53,-1.49l-0.75,-3.06l-0.01,-2.68l1.79,-1.91l0.05,-2.76l1.43,-3.06l0.01,-2.77l-0.69,-0.77l-1.09,-4.84l1.48,-2.87l-0.19,-2.93l0.85,-2.48l1.59,-2.58l1.73,-1.72l0.05,-0.51l-0.61,-0.89l0.45,-0.89l-0.07,-4.37l2.71,-1.48l0.86,-2.84l-0.22,-0.73l1.77,-2.07l2.9,0.58ZM256.68,580.89l-1.95,0.18l-1.42,-1.53l-3.82,-0.12l-0.0,-7.37l1.57,3.7l3.26,2.57l3.18,1.01l-0.81,1.56Z", "name": "Argentina"}, "AU": {"path": "M705.79,484.09l0.27,0.04l0.18,-0.47l-0.49,-1.51l0.92,1.16l0.45,0.15l0.28,-0.39l-0.09,-1.61l-1.99,-3.77l1.09,-3.43l-0.24,-1.62l0.34,-0.64l0.38,1.08l0.43,-0.19l0.99,-1.75l1.91,-0.85l1.29,-1.18l1.81,-0.93l0.95,-0.17l0.93,0.27l1.92,-0.97l1.46,-0.29l1.03,-0.82l1.44,0.04l2.78,-0.86l1.36,-1.18l0.71,-1.48l1.41,-1.28l0.3,-2.63l1.27,-1.61l0.78,1.67l0.54,0.19l1.07,-0.52l0.15,-0.59l-0.73,-1.02l0.45,-0.73l0.78,0.4l0.58,-0.3l0.28,-1.84l1.87,-2.17l1.12,-0.39l0.28,-0.58l0.62,0.17l0.5,-0.36l0.03,-0.38l1.87,-0.58l1.65,1.06l1.35,1.49l3.4,0.39l0.44,-0.54l-0.46,-1.24l1.05,-1.82l1.04,-0.62l0.14,-0.55l-0.25,-0.41l0.88,-1.19l1.31,-0.78l1.31,0.27l2.1,-0.48l0.31,-0.4l-0.05,-1.31l-0.92,-0.78l1.48,0.56l1.41,1.08l2.11,0.65l0.81,-0.21l1.4,0.71l1.69,-0.67l0.8,0.19l0.64,-0.33l0.71,0.78l-1.33,1.96l-0.71,0.07l-0.35,0.51l0.24,0.87l-1.52,2.38l0.12,1.06l2.15,1.66l1.97,0.86l3.04,2.4l1.97,0.66l0.54,0.89l2.72,0.87l1.84,-1.12l2.07,-6.05l-0.43,-3.63l0.3,-1.75l0.47,-0.87l-0.32,-0.69l1.09,-3.31l0.46,-0.47l0.4,0.71l0.17,1.52l0.65,0.53l0.15,1.04l0.85,1.22l0.12,2.41l0.9,2.03l0.57,0.18l1.3,-0.79l1.69,1.73l-0.2,1.09l0.53,2.23l0.39,1.32l0.68,0.49l0.6,1.99l-0.2,1.51l0.81,1.79l2.87,1.56l3.14,2.21l-0.12,0.78l1.38,1.62l0.95,2.84l0.58,0.22l0.71,-0.42l0.8,0.92l0.61,0.01l0.46,2.48l4.82,4.87l0.66,2.1l-0.07,3.44l1.15,2.31l-0.13,2.37l-1.1,3.88l0.04,1.73l-0.48,2.02l-1.05,2.56l-1.9,1.57l-1.73,3.77l-2.38,6.57l-0.24,3.08l-1.15,0.88l-2.86,0.16l-2.31,1.3l-2.5,2.46l-1.81,-1.24l-1.29,-0.49l0.31,-1.32l-0.55,-0.46l-1.5,0.69l-2.01,2.12l-7.1,-2.39l-1.49,-1.79l-1.13,-4.06l-1.45,-1.37l-1.84,-0.28l0.58,-1.28l-0.61,-2.26l-0.73,-0.1l-1.14,1.96l-0.94,0.24l0.6,-0.77l0.44,-1.84l0.99,-1.67l-0.2,-2.22l-0.28,-0.35l-0.43,0.13l-2.0,2.51l-1.51,1.0l-0.93,2.15l-1.35,-0.87l-0.01,-1.63l-1.57,-2.18l-1.11,-0.96l0.27,-0.39l-0.13,-0.58l-3.21,-1.8l-1.84,-0.13l-2.55,-1.44l-4.58,0.3l-6.02,2.02l-2.54,-0.14l-2.62,1.5l-2.13,0.67l-1.49,2.78l-3.48,0.33l-2.3,-0.54l-3.48,0.46l-1.6,1.58l-0.81,-0.03l-2.36,1.75l-3.24,-0.11l-3.72,-2.38l0.04,-1.18l1.19,-0.49l0.48,-0.93l0.21,-3.17l-0.28,-1.75l-1.34,-3.02l-0.39,-1.56l0.06,-1.8l-0.96,-1.79l-0.17,-1.0l-1.02,-1.04l-0.29,-2.09l-1.15,-1.85ZM784.91,527.24l2.67,1.14l3.23,-1.06l1.08,0.16l0.16,3.5l-0.85,1.25l-0.18,1.86l-0.27,-0.29l-0.62,0.04l-1.56,2.15l-1.66,-0.2l-1.41,-2.68l-0.37,-2.29l-1.4,-2.82l0.04,-0.96l1.14,0.2Z", "name": "Australia"}, "AT": {"path": "M462.92,275.34l0.01,2.75l-1.06,0.01l-0.34,0.61l0.39,0.64l-1.07,2.55l-2.0,0.08l-1.34,0.81l-5.27,-1.14l-0.48,-1.1l-0.47,-0.23l-2.47,0.64l-0.42,0.58l-2.45,-0.51l-0.75,-0.44l0.44,-1.16l1.11,0.9l0.63,-0.17l0.25,-0.69l1.91,0.14l1.87,-0.66l0.97,0.09l0.68,0.66l0.65,-0.15l0.25,-0.83l-0.31,-2.16l0.82,-0.52l0.68,-1.35l1.49,0.98l0.52,-0.07l1.34,-1.47l0.61,-0.2l1.79,1.07l1.3,-0.12l0.74,0.46Z", "name": "Austria"}, "IN": {"path": "M623.36,335.51l-1.27,1.12l-0.97,2.68l0.21,0.5l8.04,4.05l3.43,0.39l1.57,1.44l4.92,0.91l2.18,-0.04l0.38,-0.3l0.29,-1.28l-0.32,-1.72l0.15,-0.92l0.82,-0.32l0.44,2.59l2.28,1.07l1.78,-0.4l4.14,0.1l0.38,-0.36l0.18,-1.73l-0.53,-0.69l1.4,-0.31l2.25,-2.09l2.69,-1.7l1.92,0.64l1.8,-1.03l0.8,1.22l-0.69,0.98l0.26,0.63l2.42,0.38l0.09,0.52l-0.83,0.77l0.13,1.14l-1.53,-0.3l-3.24,1.94l-0.12,1.84l-1.32,2.23l-0.17,1.44l-0.93,1.89l-1.63,-0.52l-0.52,0.37l-0.09,2.72l-0.56,1.13l0.2,0.85l-0.53,0.28l-1.18,-3.85l-1.08,-0.27l-0.38,0.31l-0.24,1.03l-0.66,-0.68l0.55,-1.12l1.21,-0.35l1.15,-2.33l-0.23,-0.56l-1.58,-0.49l-4.33,-0.29l-0.19,-1.63l-0.35,-0.35l-1.11,-0.13l-1.91,-1.16l-0.57,0.17l-0.88,1.89l0.11,0.48l1.38,1.12l-1.11,0.73l-0.69,1.14l0.18,0.55l1.24,0.59l-0.32,1.59l0.85,2.01l0.36,2.08l-0.22,0.62l-4.58,0.54l-0.33,0.42l0.13,1.86l-1.18,1.39l-3.65,1.85l-2.79,3.1l-4.32,3.33l-0.18,1.29l-4.65,1.82l-0.77,2.19l0.64,5.37l-1.06,2.51l-0.01,3.97l-1.24,0.28l-1.14,1.94l0.39,0.85l-1.69,0.53l-1.04,1.84l-0.65,0.47l-2.06,-2.06l-2.1,-6.05l-2.2,-3.67l-1.05,-4.8l-2.29,-3.61l-1.76,-8.34l0.01,-3.18l-0.49,-2.59l-0.55,-0.29l-3.53,1.56l-1.52,-0.28l-2.87,-2.86l0.86,-0.7l0.08,-0.54l-0.74,-1.06l-2.68,-2.13l1.26,-1.38l5.33,0.01l0.39,-0.48l-0.5,-2.37l-1.42,-1.51l-0.27,-2.01l-1.44,-1.26l2.33,-2.5l3.05,0.07l2.62,-2.99l1.6,-2.96l2.4,-2.88l0.06,-2.16l1.98,-1.58l-0.01,-0.64l-1.93,-1.4l-0.82,-1.91l-0.81,-2.4l0.91,-0.97l3.58,0.7l2.93,-0.45l2.32,-2.35l2.31,3.07l-0.24,2.31l0.99,1.68l-0.05,0.92l-1.34,-0.3l-0.48,0.47l0.7,3.26l2.61,2.09l3.02,1.77Z", "name": "India"}, "TZ": {"path": "M495.56,426.32l2.8,-3.13l-0.02,-0.82l-0.64,-1.3l0.68,-0.52l0.14,-1.47l-0.76,-1.25l0.31,-0.11l2.26,0.03l-0.51,2.76l0.76,1.3l0.5,0.12l1.05,-0.53l1.19,-0.12l0.61,0.24l1.43,-0.62l0.1,-0.67l-0.71,-0.62l1.57,-1.7l8.65,4.86l0.32,1.53l3.34,2.33l-1.05,2.81l0.13,1.61l1.63,1.12l-0.6,1.77l-0.01,2.33l1.89,4.05l0.57,0.44l-1.47,1.09l-2.61,0.95l-1.43,-0.04l-1.06,0.77l-2.29,0.36l-2.87,-0.69l-0.83,0.07l-0.64,-0.75l-0.31,-2.8l-1.32,-1.36l-3.25,-0.77l-3.96,-1.59l-1.18,-2.42l-0.32,-1.75l-1.76,-1.49l0.42,-1.05l-0.44,-0.89l0.08,-0.96l-0.46,-0.58l0.06,-0.56Z", "name": "Tanzania"}, "AZ": {"path": "M539.27,301.57l1.33,0.36l0.44,-0.21l0.4,-0.78l1.11,-1.01l2.3,3.71l1.5,0.55l-1.32,0.17l-0.34,0.33l-0.81,3.49l-0.98,1.01l0.05,1.26l-1.28,-1.27l0.73,-1.34l-0.78,-1.39l-1.51,0.17l-2.32,1.87l-0.04,-1.43l-2.05,-1.48l0.5,-0.74l-0.07,-0.53l-1.07,-0.91l0.33,-0.54l-0.14,-0.55l-1.17,-1.02l1.91,0.73l1.71,0.07l0.37,-0.88l-1.01,-1.48l0.2,-0.14l0.4,0.06l1.63,1.92ZM533.76,306.94l0.63,0.52l0.69,-0.0l0.63,1.35l-0.71,-0.18l-1.25,-1.69Z", "name": "Azerbaijan"}, "IE": {"path": "M405.07,254.34l0.37,2.67l-1.78,3.47l-4.21,2.28l-2.89,-0.5l1.83,-4.09l-1.24,-4.04l4.62,-4.68l0.33,1.5l-0.5,2.21l0.41,0.49l1.45,-0.06l1.61,0.75Z", "name": "Ireland"}, "ID": {"path": "M756.47,417.79l0.69,4.01l2.79,1.78l0.51,-0.1l2.04,-2.59l2.71,-1.43l2.05,-0.0l3.9,1.73l2.46,0.45l0.08,15.16l-1.75,-1.55l-2.54,-0.51l-0.88,0.72l-2.32,0.06l0.69,-1.33l1.45,-0.64l0.23,-0.46l-0.65,-2.74l-1.24,-2.22l-5.04,-2.3l-2.09,-0.23l-3.68,-2.27l-0.55,0.13l-0.65,1.07l-0.52,0.12l-0.55,-1.89l-1.21,-0.78l1.84,-0.62l1.72,0.05l0.39,-0.52l-0.21,-0.66l-0.38,-0.28l-3.45,-0.0l-1.13,-1.48l-2.1,-0.43l-0.52,-0.61l2.69,-0.48l1.28,-0.78l3.66,0.94l0.3,0.71ZM757.91,430.25l-0.62,0.82l-0.1,-0.8l0.59,-1.12l0.13,1.1ZM747.38,422.88l0.34,0.72l-1.22,-0.57l-4.68,-0.1l0.27,-0.62l2.78,-0.09l2.52,0.67ZM741.05,415.14l-0.67,-2.88l0.64,-2.01l0.41,0.86l1.21,0.18l0.16,0.7l-0.1,1.68l-0.84,-0.16l-0.46,0.3l-0.34,1.34ZM739.05,423.4l-0.5,0.45l-1.34,-0.36l-0.17,-0.37l1.73,-0.08l0.27,0.36ZM721.45,414.41l-0.19,1.97l2.24,2.23l0.54,0.02l1.27,-1.07l2.75,-0.5l-0.9,1.21l-2.11,0.93l-0.16,0.6l2.22,3.01l-0.3,1.07l1.36,1.75l-2.26,0.85l-0.28,-0.31l0.12,-1.19l-1.64,-1.34l0.17,-2.24l-0.56,-0.39l-1.67,0.76l-0.23,0.39l0.3,6.18l-1.1,0.25l-0.69,-0.47l0.64,-2.21l-0.39,-2.42l-0.39,-0.34l-0.8,-0.01l-0.58,-1.29l0.98,-1.6l0.35,-1.96l1.32,-3.87ZM728.59,426.17l0.38,0.5l-0.02,1.28l-0.88,0.49l-0.53,-0.48l1.04,-1.79ZM729.04,416.88l0.27,-0.05l-0.02,0.13l-0.24,-0.08ZM721.68,413.95l0.16,-0.32l1.89,-1.65l1.83,0.68l3.16,0.35l2.94,-0.1l2.39,-1.66l-1.73,2.13l-1.66,0.43l-2.41,-0.48l-4.17,0.13l-2.39,0.51ZM730.55,440.42l1.11,-1.94l2.02,-0.82l0.08,0.62l-1.45,1.68l-1.77,0.46ZM728.12,435.8l-0.1,0.38l-3.46,0.66l-2.91,-0.27l-0.0,-0.25l1.54,-0.41l1.66,0.73l1.67,-0.19l1.61,-0.65ZM722.9,440.18l-0.64,0.03l-2.26,-1.21l1.12,-0.24l1.78,1.42ZM716.26,435.69l0.88,0.51l1.28,-0.17l0.2,0.35l-4.65,0.73l0.4,-0.67l1.15,-0.02l0.75,-0.74ZM711.66,423.74l-0.38,-0.16l-2.54,1.01l-1.12,-1.44l-1.69,-0.13l-1.16,-0.75l-3.04,0.77l-1.1,-1.15l-3.31,-0.11l-0.35,-3.05l-1.35,-0.95l-1.11,-1.98l-0.33,-2.06l0.27,-2.14l0.9,-1.01l0.37,1.15l2.09,1.49l1.53,-0.48l1.82,0.08l1.38,-1.19l1.0,-0.18l2.28,0.67l2.26,-0.53l1.52,-3.64l1.01,-0.99l0.78,-2.57l4.1,0.31l-1.11,1.77l0.02,0.46l1.7,2.2l-0.23,1.39l2.07,1.71l-2.33,0.42l-0.88,1.9l0.1,2.05l-2.4,1.9l-0.06,2.45l-0.7,2.79ZM692.58,431.94l0.35,0.26l4.8,0.25l0.78,-0.97l4.17,1.09l1.13,1.69l3.69,0.45l2.14,1.05l-1.8,0.61l-2.77,-1.0l-4.8,-0.12l-5.24,-1.42l-1.84,-0.25l-1.11,0.3l-4.26,-0.97l-0.7,-1.14l-1.59,-0.13l1.18,-1.66l2.74,0.13l2.87,1.13l0.26,0.69ZM685.53,429.08l-2.22,0.04l-2.06,-2.04l-3.15,-2.01l-2.93,-3.52l-3.11,-5.33l-2.2,-2.12l-1.64,-4.06l-2.32,-1.69l-1.27,-2.07l-1.96,-1.5l-2.51,-2.65l-0.11,-0.66l4.81,0.53l2.15,2.38l3.31,2.74l2.35,2.66l2.7,0.17l1.95,1.59l1.54,2.17l1.59,0.95l-0.84,1.71l0.15,0.52l1.44,0.87l0.79,0.1l0.4,1.58l0.87,1.4l1.96,0.39l1.0,1.31l-0.6,3.01l-0.09,3.51Z", "name": "Indonesia"}, "UA": {"path": "M493.77,283.66l1.85,0.21l0.66,-0.27l0.1,-0.68l-0.25,-0.87l-0.8,-0.85l-0.34,-1.43l-0.87,-0.71l0.01,-1.37l-1.13,-1.01l-1.16,-0.23l-2.07,-1.18l-1.66,0.37l-0.67,0.55l-0.9,-0.0l-0.86,0.91l-1.69,0.33l-0.76,0.47l-1.18,-0.82l-3.05,-0.42l-0.9,0.48l-0.22,-0.62l-1.16,-0.85l0.86,-1.88l0.25,0.1l0.53,-0.51l-0.57,-1.53l2.08,-2.96l1.38,-0.69l0.26,-1.34l-1.09,-3.02l0.9,-0.18l1.27,-1.02l1.78,-0.08l2.45,0.31l2.87,0.98l1.87,0.08l0.85,0.53l1.06,-0.47l0.78,0.77l2.17,-0.18l0.91,0.35l0.54,-0.34l0.15,-1.9l0.58,-0.67l2.82,-0.06l0.87,-0.86l3.0,-0.22l1.29,1.86l-0.53,0.89l0.21,1.25l0.36,0.33l1.78,0.17l0.93,2.49l3.18,1.38l1.95,-0.52l1.69,1.77l1.39,-0.04l3.36,1.15l0.02,0.75l-0.97,1.91l0.49,2.26l-0.28,0.89l-2.37,0.33l-1.29,1.04l-0.21,1.6l-1.85,0.32l-1.58,1.12l-2.41,0.24l-2.16,1.36l-0.19,0.36l0.32,2.54l1.49,0.93l1.92,-0.16l-0.18,0.47l-2.65,0.61l-3.21,1.92l-0.89,-0.46l0.44,-1.33l-0.24,-0.5l-2.27,-0.86l2.41,-1.32l0.12,-0.62l-0.93,-0.95l-3.62,-0.85l-0.14,-1.08l-0.47,-0.34l-2.32,0.45l-2.91,4.52l-1.19,-0.45l-0.98,0.48l-0.36,-0.21l1.35,-2.93Z", "name": "Ukraine"}, "QA": {"path": "M549.32,350.8l-0.76,-0.24l-0.14,-1.72l0.84,-1.35l0.47,0.54l0.04,1.41l-0.45,1.36Z", "name": "Qatar"}, "MZ": {"path": "M508.58,448.77l-0.34,-2.6l0.51,-2.07l3.55,0.64l2.51,-0.38l1.02,-0.76l1.49,0.01l2.74,-0.99l1.66,-1.21l0.51,9.32l0.41,1.25l-0.68,1.69l-0.93,1.74l-1.5,1.52l-5.16,2.32l-2.78,2.78l-1.02,0.54l-1.71,1.84l-0.98,0.59l-0.35,2.45l1.16,1.99l0.49,2.24l0.43,0.31l-0.06,2.14l-0.39,1.21l0.5,0.73l-0.25,0.78l-0.92,0.86l-5.13,2.47l-1.22,1.39l0.21,1.17l0.59,0.4l-0.11,0.78l-1.22,-0.02l-0.73,-3.1l0.42,-3.19l-1.78,-5.56l2.49,-2.89l0.69,-1.93l0.44,-0.43l0.28,-1.57l-0.39,-0.94l0.59,-3.72l-0.01,-3.32l-1.48,-1.17l-1.2,-0.23l-1.74,-1.18l-1.92,0.0l-0.3,-2.12l7.06,-1.98l1.28,1.1l0.89,-0.1l0.67,0.45l0.1,0.75l-0.51,1.3l0.19,1.83l1.75,1.86l0.65,-0.13l0.71,-1.68l1.17,-0.86l-0.26,-3.51l-1.05,-1.87l-1.04,-0.95Z", "name": "Mozambique"}}, "height": 583.0802520919394, "projection": {"type": "merc", "centralMeridian": 11.5}, "width": 900.0})
    </script>
    <script>
        
      !function() {
        "use strict";
        function o() {
            var o = window,
                t = document;
            if (!("scrollBehavior" in t.documentElement.style && !0 !== o.__forceSmoothScrollPolyfill__)) {
                var l,
                    e = o.HTMLElement || o.Element,
                    r = 468,
                    i = {
                        scroll: o.scroll || o.scrollTo,
                        scrollBy: o.scrollBy,
                        elementScroll: e.prototype.scroll || n,
                        scrollIntoView: e.prototype.scrollIntoView
                    },
                    s = o.performance && o.performance.now ? o.performance.now.bind(o.performance) : Date.now,
                    c = (l = o.navigator.userAgent, new RegExp(["MSIE ", "Trident/", "Edge/"].join("|")).test(l) ? 1 : 0);
                o.scroll = o.scrollTo = function() {
                    void 0 !== arguments[0] && (!0 !== f(arguments[0]) ? h.call(o, t.body, void 0 !== arguments[0].left ? ~~arguments[0].left : o.scrollX || o.pageXOffset, void 0 !== arguments[0].top ? ~~arguments[0].top : o.scrollY || o.pageYOffset) : i.scroll.call(o, void 0 !== arguments[0].left ? arguments[0].left : "object" != typeof arguments[0] ? arguments[0] : o.scrollX || o.pageXOffset, void 0 !== arguments[0].top ? arguments[0].top : void 0 !== arguments[1] ? arguments[1] : o.scrollY || o.pageYOffset))
                },
                o.scrollBy = function() {
                    void 0 !== arguments[0] && (f(arguments[0]) ? i.scrollBy.call(o, void 0 !== arguments[0].left ? arguments[0].left : "object" != typeof arguments[0] ? arguments[0] : 0, void 0 !== arguments[0].top ? arguments[0].top : void 0 !== arguments[1] ? arguments[1] : 0) : h.call(o, t.body, ~~arguments[0].left + (o.scrollX || o.pageXOffset), ~~arguments[0].top + (o.scrollY || o.pageYOffset)))
                },
                e.prototype.scroll = e.prototype.scrollTo = function() {
                    if (void 0 !== arguments[0])
                        if (!0 !== f(arguments[0])) {
                            var o = arguments[0].left,
                                t = arguments[0].top;
                            h.call(this, this, void 0 === o ? this.scrollLeft : ~~o, void 0 === t ? this.scrollTop : ~~t)
                        } else {
                            if ("number" == typeof arguments[0] && void 0 === arguments[1])
                                throw new SyntaxError("Value could not be converted");
                            i.elementScroll.call(this, void 0 !== arguments[0].left ? ~~arguments[0].left : "object" != typeof arguments[0] ? ~~arguments[0] : this.scrollLeft, void 0 !== arguments[0].top ? ~~arguments[0].top : void 0 !== arguments[1] ? ~~arguments[1] : this.scrollTop)
                        }
                },
                e.prototype.scrollBy = function() {
                    void 0 !== arguments[0] && (!0 !== f(arguments[0]) ? this.scroll({
                        left: ~~arguments[0].left + this.scrollLeft,
                        top: ~~arguments[0].top + this.scrollTop,
                        behavior: arguments[0].behavior
                    }) : i.elementScroll.call(this, void 0 !== arguments[0].left ? ~~arguments[0].left + this.scrollLeft : ~~arguments[0] + this.scrollLeft, void 0 !== arguments[0].top ? ~~arguments[0].top + this.scrollTop : ~~arguments[1] + this.scrollTop))
                },
                e.prototype.scrollIntoView = function() {
                    if (!0 !== f(arguments[0])) {
                        var l = function(o) {
                                for (; o !== t.body && !1 === (e = p(l = o, "Y") && a(l, "Y"), r = p(l, "X") && a(l, "X"), e || r);)
                                    o = o.parentNode || o.host;
                                var l,
                                    e,
                                    r;
                                return o
                            }(this),
                            e = l.getBoundingClientRect(),
                            r = this.getBoundingClientRect();
                        l !== t.body ? (h.call(this, l, l.scrollLeft + r.left - e.left, l.scrollTop + r.top - e.top), "fixed" !== o.getComputedStyle(l).position && o.scrollBy({
                            left: e.left,
                            top: e.top,
                            behavior: "smooth"
                        })) : o.scrollBy({
                            left: r.left,
                            top: r.top,
                            behavior: "smooth"
                        })
                    } else
                        i.scrollIntoView.call(this, void 0 === arguments[0] || arguments[0])
                }
            }
            function n(o, t) {
                this.scrollLeft = o,
                this.scrollTop = t
            }
            function f(o) {
                if (null === o || "object" != typeof o || void 0 === o.behavior || "auto" === o.behavior || "instant" === o.behavior)
                    return !0;
                if ("object" == typeof o && "smooth" === o.behavior)
                    return !1;
                throw new TypeError("behavior member of ScrollOptions " + o.behavior + " is not a valid value for enumeration ScrollBehavior.")
            }
            function p(o, t) {
                return "Y" === t ? o.clientHeight + c < o.scrollHeight : "X" === t ? o.clientWidth + c < o.scrollWidth : void 0
            }
            function a(t, l) {
                var e = o.getComputedStyle(t, null)["overflow" + l];
                return "auto" === e || "scroll" === e
            }
            function d(t) {
                var l,
                    e,
                    i,
                    c,
                    n = (s() - t.startTime) / r;
                c = n = n > 1 ? 1 : n,
                l = .5 * (1 - Math.cos(Math.PI * c)),
                e = t.startX + (t.x - t.startX) * l,
                i = t.startY + (t.y - t.startY) * l,
                t.method.call(t.scrollable, e, i),
                e === t.x && i === t.y || o.requestAnimationFrame(d.bind(o, t))
            }
            function h(l, e, r) {
                var c,
                    f,
                    p,
                    a,
                    h = s();
                l === t.body ? (c = o, f = o.scrollX || o.pageXOffset, p = o.scrollY || o.pageYOffset, a = i.scroll) : (c = l, f = l.scrollLeft, p = l.scrollTop, a = n),
                d({
                    scrollable: c,
                    method: a,
                    startTime: h,
                    startX: f,
                    startY: p,
                    x: e,
                    y: r
                })
            }
        }
        "object" == typeof exports && "undefined" != typeof module ? module.exports = {
            polyfill: o
        } : o()
      }();

    </script>
    <script>
      (function () {
        /* ========= Preloader ======== */
        const preloader = document.querySelectorAll('#preloader')

        window.addEventListener('load', function () {
          if (preloader.length) {
            this.document.getElementById('preloader').style.display = 'none'
          }
        })

        /* ========= Add Box Shadow in Header on Scroll ======== */
        window.addEventListener('scroll', function () {
          const header = document.querySelector('.header')
          if (window.scrollY > 0) {
            header.style.boxShadow = '0px 0px 30px 0px rgba(200, 208, 216, 0.30)'
          } else {
            header.style.boxShadow = 'none'
          }
        })

        /* ========= sidebar toggle ======== */
        const sidebarNavWrapper = document.querySelector(".sidebar-nav-wrapper");
        const mainWrapper = document.querySelector(".main-wrapper");
        const menuToggleButton = document.querySelector("#menu-toggle");
        const menuToggleButtonIcon = document.querySelector("#menu-toggle i");
        const overlay = document.querySelector(".overlay");

        menuToggleButton.addEventListener("click", () => {
          sidebarNavWrapper.classList.toggle("active");
          overlay.classList.add("active");
          mainWrapper.classList.toggle("active");

          if (document.body.clientWidth > 1200) {
            if (menuToggleButtonIcon.classList.contains("lni-chevron-left")) {
              menuToggleButtonIcon.classList.remove("lni-chevron-left");
              menuToggleButtonIcon.classList.add("lni-menu");
            } else {
              menuToggleButtonIcon.classList.remove("lni-menu");
              menuToggleButtonIcon.classList.add("lni-chevron-left");
            }
          } else {
            if (menuToggleButtonIcon.classList.contains("lni-chevron-left")) {
              menuToggleButtonIcon.classList.remove("lni-chevron-left");
              menuToggleButtonIcon.classList.add("lni-menu");
            }
          }
        });
        overlay.addEventListener("click", () => {
          sidebarNavWrapper.classList.remove("active");
          overlay.classList.remove("active");
          mainWrapper.classList.remove("active");
        });
      })();

    </script>
    
    @yield('script')

    
  </body>
</html>