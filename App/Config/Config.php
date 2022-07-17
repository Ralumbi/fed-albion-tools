<?php

/**
 * Main Project Configurations
 */
const PROJECT_NAME = 'Albion-Organizer';
const PROJECT_VERSION = 'v0.01';

/**
 * Users Configurations
 */

// set to '/' when on production server
const ROOT_URL = 'http://localhost:8000/';

// TEMPLATE is the template directory
// make sure you add an '/' at the end of template name
const TEMPLATE = 'Default';

// Here you can add all the folders you want to autoload from the 'App/' directory
// NOTE: DON'T ADD THE HELPERS FOLDER HERE!
const AUTOLOADDIR = [
    'Core',
];

// Here you can add the helpers you want to load from the 'App/Helpers/' directory
const LOADHELPER = [
    'Routes', // do not remove unless you know what you're doing
];