<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details.
 *
 * @package    block_dashboard
 * @category   blocks
 * @copyright  2012 onwards Valery Fremaux (http://www.mylearningfactory.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * VFLibs can be found at http://github.com/vfremaux/moodle-local_vflibs
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2017080602;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2017110800;        // Requires this Moodle version.
$plugin->component = 'block_dashboard'; // Full name of the plugin (used for diagnostics).
$plugin->release = '3.4.0 (build 2017080602)';
$plugin->maturity = MATURITY_RC;
$plugin->dependencies = array('local_vflibs' => '2016081100');

// Non moodle attributes.
$plugin->codeincrement = '3.4.0004';
$plugin->privacy = 'dualrelease';