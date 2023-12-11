<?php
// This file is part of the CampusConnect plugin for Moodle - http://moodle.org/
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
 * version file for CampusConnect block
 *
 * @package    block_campusconnect
 * @copyright  2012 Synergy Learning
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2019111300;
$plugin->requires = 2017051505; // Moodle 3.3.5+
$plugin->cron = 0; // Does not use cron
$plugin->component = 'block_campusconnect';
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '3.3.5+ (Build: 2019111300)';
$plugin->dependencies = array('local_campusconnect' => 2012062700);
