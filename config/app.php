<?php

define('ROOT',realpath(__DIR__.'/../'));

const APP_ENV = 'local';
const APP = ROOT.'/app';
const VIEWS = ROOT.'/app/Views';
const MODELS =ROOT.'/app/Models';
const CONTROLLERS = ROOT.'/app/Controllers';
const CONFIG = ROOT.'/config';
const CORE = ROOT.'/core';

const LOGS = ROOT.'/logs';

const DB_CONFIG_FILE = CONFIG.'/db.php';

define('ROUTES', CONFIG.'/routes.php');


