// 3rd party packages from NPM
import $ from'jquery';

//import '../style.css'
import '../styles/styles.css'

// our modules / classes

import ImageCarousel from './modules/Imagecarousel';
import MobileMenu from './modules/MobileMenu';
import ProjectSlideshow from './modules/ProjectSlideshow';

//Instantiate new object using our modules/classes

let carousel = new ImageCarousel();
let mobMenu = new MobileMenu();
let projectSlideshow = new ProjectSlideshow(); //not being used