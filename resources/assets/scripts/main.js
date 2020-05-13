/* eslint-disable no-unused-vars */


// import external dependencies
import 'jquery';
import 'bootstrap';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import projects from './routes/projects';

/** Populate Router instance with DOM routes */
const routes = new Router({
  common, // all pages
  home,
  aboutUs,
  projects,
});


// Load Events
jQuery(document).ready(() => routes.loadEvents());
