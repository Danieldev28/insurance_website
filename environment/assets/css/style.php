<?php
    header("Content-type: text/css; charset: UTF-8");
?>

/**
* Template Name: Moderna - v2.0.1
* Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #444;
}

a {
  color: #4fa6d5;
}

a:hover {
  color: #45beff;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6, .font-primary {
  font-family: "Roboto", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 3px;
  right: 15px;
  bottom: 15px;
  background: #68A4C4;
  color: #fff;
  transition: display 0.5s ease-in-out;
  z-index: 99999;
}

.back-to-top i {
  font-size: 24px;
  position: absolute;
  top: 8px;
  left: 8px;
}

.back-to-top:hover {
  color: #fff;
  background: #85b6cf;
  transition: background 0.2s ease-in-out;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 20px 0;
  background: #1e4356;
}

#header.header-transparent {
  background: none;
}

#header.header-scrolled {
  background: rgba(30, 67, 86, 0.8);
  height: 60px;
  padding: 10px 0;
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  padding: 4px 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

#main {
  margin-top: 80px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #ddecf5;
  padding: 10px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Open Sans", sans-serif;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #a2cce3;
  text-decoration: none;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% - 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #1c3745;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #68A4C4;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav {
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: 9999;
  overflow-y: auto;
  left: -260px;
  width: 260px;
  padding-top: 18px;
  background: #1e4356;
  transition: 0.4s;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #ddecf5;
  padding: 10px 20px;
  font-weight: 500;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #a2cce3;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa0";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #fff;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(30, 67, 86, 0.9);
  overflow: hidden;
  display: none;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  left: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 90vh;
  overflow: hidden;
  position: relative;
}

#hero::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  width: 130%;
  height: 95%;
  background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(30, 67, 86, 0.6)), url("../img/hero-bg-4.jpg") center top no-repeat;
  z-index: 0;
  border-radius: 0 0 50% 50%;
  transform: translateX(-50%) rotate(0deg);
}

#hero::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  width: 130%;
  height: 96%;
  background: #68A4C4;
  opacity: 0.3;
  z-index: 0;
  border-radius: 0 0 50% 50%;
  transform: translateX(-50%) translateY(18px) rotate(2deg);
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 48px;
  font-weight: 700;
}

#hero p {
  width: 80%;
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-control-prev, #hero .carousel-control-next {
  width: 10%;
}

#hero .carousel-control-next-icon, #hero .carousel-control-prev-icon {
  background: none;
  font-size: 48px;
  line-height: 1;
  width: auto;
  height: auto;
}

#hero .btn-get-started {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #68A4C4;
}

#hero .btn-get-started:hover {
  background: #68A4C4;
  color: #fff;
  text-decoration: none;
}

@media (min-width: 1024px) {
  #hero p {
    width: 60%;
  }
  #hero .carousel-control-prev, #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }
  #hero::after {
    width: 180%;
    height: 95%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) rotate(0deg);
  }
  #hero::before {
    top: 0;
    width: 180%;
    height: 94%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) translateY(20px) rotate(4deg);
  }
}

@media (max-width: 575px) {
  #hero::after {
    left: 40%;
    top: 0;
    width: 200%;
    height: 95%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) rotate(0deg);
  }
  #hero::before {
    left: 50%;
    top: 0;
    width: 200%;
    height: 94%;
    border-radius: 0 0 50% 50%;
    transform: translateX(-50%) translateY(20px) rotate(4deg);
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}

.section-bg {
  background-color: #f3f8fa;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 28px;
  font-weight: 400;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2::before {
  content: '';
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #68A4C4;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background-color: #f3f8fa;
  min-height: 40px;
}

.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
}

.breadcrumbs ol li + li {
  padding-left: 10px;
}

.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #6c757d;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Our Services
--------------------------------------------------------------*/
.services {
  padding-bottom: 20px;
}

.services .icon-box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  margin: 0  0 40px 0;
  background: #fff;
  box-shadow: 0 5px 26px 0 rgba(68, 88, 144, 0.14);
  transition: all 0.3s ease-in-out;
  text-align: center;
  border: 1px solid #fff;
}

.services .icon {
  margin: 0 auto 20px auto;
  padding-top: 17px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 72px;
  height: 72px;
}

.services .icon i {
  font-size: 36px;
  line-height: 1;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #111;
}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}

.services .icon-box-pink .icon {
  background: #fceef3;
}

.services .icon-box-pink .icon i {
  color: #ff689b;
}

.services .icon-box-pink:hover {
  border-color: #ff689b;
}

.services .icon-box-cyan .icon {
  background: #e6fdfc;
}

.services .icon-box-cyan .icon i {
  color: #3fcdc7;
}

.services .icon-box-cyan:hover {
  border-color: #3fcdc7;
}

.services .icon-box-green .icon {
  background: #eafde7;
}

.services .icon-box-green .icon i {
  color: #41cf2e;
}

.services .icon-box-green:hover {
  border-color: #41cf2e;
}

.services .icon-box-blue .icon {
  background: #e1eeff;
}

.services .icon-box-blue .icon i {
  color: #2282ff;
}

.services .icon-box-blue:hover {
  border-color: #2282ff;
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us .container {
  box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6);
  background: #fff;
}

.why-us .icon-box + .icon-box {
  margin-top: 50px;
}

.why-us .icon-box .icon {
  float: left;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 72px;
  height: 72px;
  background: #f3f8fa;
  border-radius: 6px;
  transition: 0.5s;
}

.why-us .icon-box .icon i {
  color: #68A4C4;
  font-size: 32px;
}

.why-us .icon-box:hover .icon {
  background: #68A4C4;
}

.why-us .icon-box:hover .icon i {
  color: #fff;
}

.why-us .icon-box .title {
  margin-left: 95px;
  font-weight: 700;
  margin-bottom: 10px;
  font-size: 18px;
  text-transform: uppercase;
}

.why-us .icon-box .title a {
  color: #343a40;
  transition: 0.3s;
}

.why-us .icon-box .title a:hover {
  color: #68A4C4;
}

.why-us .icon-box .description {
  margin-left: 95px;
  line-height: 24px;
  font-size: 14px;
}

.why-us .video-box {
  position: relative;
}

.why-us .video-box img {
  padding-top: 15px;
  padding-bottom: 15px;
}

.why-us .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#68A4C4 50%, rgba(104, 164, 196, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.why-us .play-btn::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.why-us .play-btn::before {
  content: '';
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(104, 164, 196, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.why-us .play-btn:hover::after {
  border-left: 15px solid #68A4C4;
  transform: scale(20);
}

.why-us .play-btn:hover::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features .row + .row {
  margin-top: 100px;
}

.features h3 {
  font-weight: 400;
  font-size: 24px;
}

.features ul {
  list-style: none;
  padding: 0;
}

.features ul li {
  padding-bottom: 10px;
}

.features ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #68A4C4;
}

.features p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about h3 {
  font-weight: 400;
  font-size: 26px;
}

.about ul {
  list-style: none;
  padding: 0;
}

.about ul li {
  padding-bottom: 10px;
}

.about ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #68A4C4;
}

.about p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Facts
--------------------------------------------------------------*/
.facts .counters span {
  font-size: 48px;
  display: block;
  color: #68A4C4;
}

.facts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Our Skills
--------------------------------------------------------------*/
.skills {
  padding: 60px 0;
}

.skills .progress {
  height: 35px;
  margin-bottom: 10px;
}

.skills .progress .skill {
  line-height: 35px;
  padding: 0;
  margin: 0 0 0 20px;
  text-transform: uppercase;
}

.skills .progress .skill .val {
  float: right;
  font-style: normal;
  margin: 0 20px 0 0;
}

.skills .progress-bar {
  width: 1px;
  text-align: left;
  transition: .9s;
}

/*--------------------------------------------------------------
# Tetstimonials
--------------------------------------------------------------*/
.testimonials {
  padding: 60px 0;
}

.testimonials .section-header {
  margin-bottom: 40px;
}

.testimonials .testimonial-item {
  text-align: center;
}

.testimonials .testimonial-item .testimonial-img {
  width: 120px;
  border-radius: 50%;
  border: 4px solid #fff;
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0 0 15px 0;
}

.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: #fbfcfd;
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
}

.testimonials .owl-nav, .testimonials .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.testimonials .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.testimonials .owl-dot.active {
  background-color: #68A4C4 !important;
}

@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}

/*--------------------------------------------------------------
# Service Details
--------------------------------------------------------------*/
.service-details {
  padding-bottom: 10px;
}

.service-details .card {
  border: 0;
  padding: 0 30px;
  margin-bottom: 60px;
  position: relative;
}

.service-details .card-img {
  width: calc(100% + 60px);
  margin-left: -30px;
  overflow: hidden;
  z-index: 9;
  border-radius: 0;
}

.service-details .card-img img {
  max-width: 100%;
  transition: all 0.3s ease-in-out;
}

.service-details .card-body {
  z-index: 10;
  background: #fff;
  border-top: 4px solid #fff;
  padding: 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin-top: -60px;
  transition: 0.3s;
}

.service-details .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 20px;
}

.service-details .card-title a {
  color: #1e4356;
  transition: 0.3s;
}

.service-details .card-text {
  color: #5e5e5e;
}

.service-details .read-more a {
  color: #777777;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  transition: 0.3s;
}

.service-details .read-more a:hover {
  color: #68A4C4;
}

.service-details .card:hover img {
  transform: scale(1.1);
}

.service-details .card:hover .card-body {
  border-color: #68A4C4;
}

.service-details .card:hover .card-body .card-title a {
  color: #68A4C4;
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .row {
  padding-top: 40px;
}

.pricing .box {
  padding: 40px;
  margin-bottom: 30px;
  box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
  background: #fff;
  text-align: center;
}

.pricing h3 {
  font-weight: 300;
  margin-bottom: 15px;
  font-size: 28px;
}

.pricing h4 {
  font-size: 46px;
  color: #68A4C4;
  font-weight: 400;
  font-family: "Open Sans", sans-serif;
  margin-bottom: 25px;
}

.pricing h4 span {
  color: #bababa;
  font-size: 18px;
  display: block;
}

.pricing ul {
  padding: 0;
  list-style: none;
  color: #999;
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding-bottom: 12px;
}

.pricing ul i {
  color: #68A4C4;
  font-size: 18px;
  padding-right: 4px;
}

.pricing ul .na {
  color: #ccc;
}

.pricing ul .na i {
  color: #ccc;
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .get-started-btn {
  background: #1e4356;
  display: inline-block;
  padding: 6px 30px;
  border-radius: 20px;
  color: #fff;
  transition: none;
  font-size: 14px;
  font-weight: 400;
  font-family: "Roboto", sans-serif;
  transition: 0.3s;
}

.pricing .get-started-btn:hover {
  background: #68A4C4;
}

.pricing .featured {
  z-index: 10;
  margin: -30px -5px 0 -5px;
}

.pricing .featured .get-started-btn {
  background: #68A4C4;
}

.pricing .featured .get-started-btn:hover {
  background: #85b6cf;
}

@media (max-width: 992px) {
  .pricing .box {
    max-width: 60%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 767px) {
  .pricing .box {
    max-width: 80%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 420px) {
  .pricing .box {
    max-width: 100%;
    margin: 0 auto 30px auto;
  }
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio {
  padding-bottom: 60px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 0 35px 0;
  list-style: none;
  text-align: center;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  margin: 0 12px 5px 12px;
  display: inline-block;
  padding: 0 4px 6px 4px;
  font-size: 16px;
  font-weight: 500;
  line-height: 20px;
  color: #444;
  background: white;
  transition: all 0.3s ease-in-out;
  border-bottom: 2px solid #fff;
  font-family: "Roboto", sans-serif;
}

.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  border-color: #68A4C4;
  color: #68A4C4;
}

.portfolio .portfolio-item {
  background: #1e4356;
  overflow: hidden;
  min-height: 200px;
  position: relative;
  border-radius: 4px;
  margin: 0 0 30px 0;
}

.portfolio .portfolio-item img {
  transition: all 0.3s ease-in-out;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  transition: all .3s linear;
  text-align: center;
  top: 10%;
  left: 0;
  right: 0;
}

.portfolio .portfolio-item .portfolio-info h3 {
  font-size: 22px;
}

.portfolio .portfolio-item .portfolio-info h3 a {
  color: #fff;
  font-weight: bold;
}

.portfolio .portfolio-item .portfolio-info a i {
  color: #68A4C4;
  font-size: 24px;
}

.portfolio .portfolio-item:hover img {
  opacity: 0.4;
  transform: scale(1.1);
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
  top: calc(50% - 30px);
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team {
  background: #fff;
  padding-bottom: 30px;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: -40px;
  right: 0;
  height: 40px;
  opacity: 0;
  transition: bottom ease-in-out 0.4s;
  text-align: center;
  background: rgba(30, 67, 86, 0.8);
}

.team .member .social a {
  transition: color 0.3s;
  color: #fff;
  margin: 0 10px;
  padding-top: 8px;
  display: inline-block;
}

.team .member .social a:hover {
  color: #68A4C4;
}

.team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin: 15px 0 5px 0;
  font-size: 18px;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  text-transform: uppercase;
  font-weight: 400;
  margin-bottom: 15px;
  color: #68A4C4;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #666;
}

.team .member:hover .social {
  bottom: 0;
  opacity: 1;
  transition: bottom ease-in-out 0.4s;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact {
  padding-bottom: 30px;
}

.contact .info-box {
  color: #444;
  text-align: center;
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 20px 0 30px 0;
  margin-bottom: 30px;
}

.contact .info-box i {
  font-size: 32px;
  color: #68A4C4;
  border-radius: 50%;
  padding: 8px;
  border: 2px dotted #a2cce3;
}

.contact .info-box h3 {
  font-size: 20px;
  color: #666;
  font-weight: 700;
  margin: 10px 0;
}

.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.contact .php-email-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
  padding: 30px;
  margin-bottom: 30px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input::focus, .contact .php-email-form textarea::focus {
  background-color: #68A4C4;
}

.contact .php-email-form input {
  padding: 20px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type="submit"] {
  background: #68A4C4;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #8dbad2;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Map
--------------------------------------------------------------*/
.map {
  padding: 0;
  margin-bottom: -6px;
}

.map iframe {
  width: 100%;
  height: 380px;
}

/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog {
  padding: 40px 0 20px 0;
}

.blog .entry {
  padding: 30px;
  margin-bottom: 60px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .entry .entry-img {
  max-height: 400px;
  margin: -30px -30px 20px -30px;
  overflow: hidden;
}

.blog .entry .entry-title {
  font-size: 28px;
  font-weight: bold;
  padding: 0;
  margin: 0 0 20px 0;
}

.blog .entry .entry-title a {
  color: #32627b;
  transition: 0.3s;
}

.blog .entry .entry-title a:hover {
  color: #68A4C4;
}

.blog .entry .entry-meta {
  margin-bottom: 15px;
  color: #dddddd;
}

.blog .entry .entry-meta ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
}

.blog .entry .entry-meta ul li + li {
  padding-left: 15px;
}

.blog .entry .entry-meta i {
  font-size: 14px;
  padding-right: 4px;
}

.blog .entry .entry-meta a {
  color: #aaaaaa;
  font-size: 14px;
  display: inline-block;
}

.blog .entry .entry-content p {
  line-height: 24px;
}

.blog .entry .entry-content .read-more {
  -moz-text-align-last: right;
  text-align-last: right;
}

.blog .entry .entry-content .read-more a {
  display: inline-block;
  background: #68A4C4;
  color: #fff;
  padding: 6px 20px;
  transition: 0.3s;
  font-size: 14px;
}

.blog .entry .entry-content .read-more a:hover {
  background: #32627b;
}

.blog .entry .entry-content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .entry .entry-content blockquote {
  overflow: hidden;
  background-color: #fafafa;
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .entry .entry-content blockquote p {
  color: #444;
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .entry .entry-content blockquote .quote-left {
  position: absolute;
  left: 20px;
  top: 20px;
  font-size: 36px;
  color: #e7e7e7;
}

.blog .entry .entry-content blockquote .quote-right {
  position: absolute;
  right: 20px;
  bottom: 20px;
  font-size: 36px;
  color: #e7e7e7;
}

.blog .entry .entry-content blockquote::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: #32627b;
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .entry .entry-footer {
  padding-top: 10px;
  border-top: 1px solid #e6e6e6;
}

.blog .entry .entry-footer i {
  color: #4c99c1;
  display: inline;
}

.blog .entry .entry-footer a {
  color: #90c0d8;
  transition: 0.3s;
}

.blog .entry .entry-footer a:hover {
  color: #68A4C4;
}

.blog .entry .entry-footer .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .entry .entry-footer .cats li {
  display: inline-block;
}

.blog .entry .entry-footer .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .entry .entry-footer .tags li {
  display: inline-block;
}

.blog .entry .entry-footer .tags li + li::before {
  padding-right: 6px;
  color: #6c757d;
  content: ",";
}

.blog .entry .entry-footer .share {
  font-size: 16px;
}

.blog .entry .entry-footer .share i {
  padding-left: 5px;
}

.blog .entry-single {
  margin-bottom: 30px;
}

.blog .blog-author {
  padding: 20px;
  margin-bottom: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-author img {
  width: 120px;
}

.blog .blog-author h4 {
  margin-left: 140px;
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
}

.blog .blog-author .social-links {
  margin: 0 0 5px 140px;
}

.blog .blog-author .social-links a {
  color: #72afce;
}

.blog .blog-author p {
  margin-left: 140px;
  font-style: italic;
  color: #b7b7b7;
}

.blog .blog-comments {
  margin-bottom: 30px;
}

.blog .blog-comments .comments-count {
  font-weight: bold;
}

.blog .blog-comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog .blog-comments .comment .comment-img {
  width: 50px;
}

.blog .blog-comments .comment h5 {
  margin-left: 65px;
  font-size: 16px;
  margin-bottom: 2px;
}

.blog .blog-comments .comment h5 a {
  font-weight: bold;
  color: #444;
  transition: 0.3s;
}

.blog .blog-comments .comment h5 a:hover {
  color: #68A4C4;
}

.blog .blog-comments .comment h5 .reply {
  padding-left: 10px;
  color: #32627b;
}

.blog .blog-comments .comment time {
  margin-left: 65px;
  display: block;
  font-size: 14px;
  color: #72afce;
  margin-bottom: 5px;
}

.blog .blog-comments .comment p {
  margin-left: 65px;
}

.blog .blog-comments .comment.comment-reply {
  padding-left: 40px;
}

.blog .blog-comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .blog-comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog .blog-comments .reply-form p {
  font-size: 14px;
}

.blog .blog-comments .reply-form input {
  border-radius: 0;
  padding: 20px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form input:focus {
  box-shadow: none;
  border-color: #a2cce3;
}

.blog .blog-comments .reply-form textarea {
  border-radius: 0;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .blog-comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: #a2cce3;
}

.blog .blog-comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog .blog-comments .reply-form .btn-primary {
  border-radius: 0;
  padding: 10px 20px;
  border: 0;
  background-color: #32627b;
}

.blog .blog-comments .reply-form .btn-primary:hover {
  background-color: #68A4C4;
}

.blog .blog-pagination {
  color: #7b9bab;
}

.blog .blog-pagination ul {
  display: flex;
  padding-left: 0;
  list-style: none;
}

.blog .blog-pagination li {
  border: 1px solid white;
  margin: 0 5px;
  transition: 0.3s;
}

.blog .blog-pagination li.active {
  background: white;
}

.blog .blog-pagination li a {
  color: #aaaaaa;
  padding: 7px 16px;
  display: inline-block;
}

.blog .blog-pagination li.active, .blog .blog-pagination li:hover {
  background: #68A4C4;
  border: 1px solid #68A4C4;
}

.blog .blog-pagination li.active a, .blog .blog-pagination li:hover a {
  color: #fff;
}

.blog .blog-pagination li.disabled {
  background: #fff;
  border: 1px solid white;
}

.blog .blog-pagination li.disabled i {
  color: #f1f1f1;
  padding: 10px 16px;
  display: inline-block;
}

.blog .sidebar {
  padding: 30px;
  margin: 0 0 60px 20px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

.blog .sidebar .sidebar-title {
  font-size: 20px;
  font-weight: 700;
  padding: 0 0 0 0;
  margin: 0 0 15px 0;
  color: #32627b;
  position: relative;
}

.blog .sidebar .sidebar-item {
  margin-bottom: 30px;
}

.blog .sidebar .search-form form {
  background: #fff;
  border: 1px solid #ddd;
  padding: 3px 10px;
  position: relative;
}

.blog .sidebar .search-form form input[type="text"] {
  border: 0;
  padding: 4px;
  width: calc(100% - 40px);
}

.blog .sidebar .search-form form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 15px;
  margin: -1px;
  background: #32627b;
  color: #fff;
  transition: 0.3s;
}

.blog .sidebar .search-form form button:hover {
  background: #68A4C4;
}

.blog .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .categories ul li + li {
  padding-top: 10px;
}

.blog .sidebar .categories ul a {
  color: #3f8db5;
}

.blog .sidebar .categories ul a:hover {
  color: #68A4C4;
}

.blog .sidebar .categories ul a span {
  padding-left: 5px;
  color: #bedae8;
  font-size: 14px;
}

.blog .sidebar .recent-posts .post-item + .post-item {
  margin-top: 15px;
}

.blog .sidebar .recent-posts img {
  width: 80px;
  float: left;
}

.blog .sidebar .recent-posts h4 {
  font-size: 15px;
  margin-left: 95px;
  font-weight: bold;
}

.blog .sidebar .recent-posts h4 a {
  color: #0d2735;
  transition: 0.3s;
}

.blog .sidebar .recent-posts h4 a:hover {
  color: #68A4C4;
}

.blog .sidebar .recent-posts time {
  display: block;
  margin-left: 95px;
  font-style: italic;
  font-size: 14px;
  color: #72afce;
}

.blog .sidebar .tags {
  margin-bottom: -10px;
}

.blog .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .tags ul li {
  display: inline-block;
}

.blog .sidebar .tags ul a {
  color: #3f8db5;
  font-size: 14px;
  padding: 6px 14px;
  margin: 0 6px 8px 0;
  border: 1px solid #e4eff5;
  display: inline-block;
  transition: 0.3s;
}

.blog .sidebar .tags ul a:hover {
  color: #fff;
  border: 1px solid #32627b;
  background: #32627b;
}

.blog .sidebar .tags ul a span {
  padding-left: 5px;
  color: #bedae8;
  font-size: 14px;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #0b212d;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .footer-newsletter {
  padding: 50px 0;
  background: #0d2735;
}

#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #a2cce3;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
}

#footer .footer-newsletter form input[type="email"] {
  border: 0;
  padding: 4px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  margin: 3px;
  background: #68A4C4;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
}

#footer .footer-newsletter form input[type="submit"]:hover {
  background: #468db3;
}

#footer .footer-top {
  background: #0d2735;
  border-top: 1px solid #17455e;
  border-bottom: 1px solid #123649;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 18px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  color: #a2cce3;
  font-weight: 600;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Roboto", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #1e4356;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #68A4C4;
  color: #fff;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 18px;
  font-weight: 600;
  color: #a2cce3;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #a2cce3;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #a2cce3;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}

#footer .credits a {
  color: #a2cce3;
}
