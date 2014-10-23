<?php
/*

  Linux indexer main execution file

  @link http://hrvojesolc.github.io/linux-indexer
  @copyright Copyright (c) 2014 Hrvoje Solc (hrvoje.solc@gmail.com)
  @license GNU AFFERO GENERAL PUBLIC LICENSE Version 3, 19 November 2007

*/

// Set the root folder of application in global constant LI_INC. This constant will be used in
// other files to ensure they are called from linux indexer programs.
if(!defined('LI_INC')) define('LI_INC', dirname(__FILE__).'/');

// Load web front end
require('linux-indexer-web.php');

// Exit gracefully after loading the front end
exit();

?>
