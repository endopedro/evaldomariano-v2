// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// Fontawesome
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faMapMarkerAlt, faPhone } from '@fortawesome/free-solid-svg-icons';
import { faClock, faEnvelope } from '@fortawesome/free-regular-svg-icons';
import { faWhatsapp, faFacebookSquare, faInstagram, faYoutube } from '@fortawesome/free-brands-svg-icons';
library.add(faMapMarkerAlt, faPhone, faClock, faWhatsapp, faEnvelope, faFacebookSquare, faInstagram, faYoutube);
dom.watch();

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
