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

defined('MOODLE_INTERNAL') || die();

/**
 * @package    block_dashboard
 * @category   blocks
 * @author  Valery Fremaux (valery.fremaux@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if ($submit) {
    $data = $_POST;

    unset($data['submit']);

    $theBlock->config = (object) $data;
    $theBlock->instance_config_save($theBlock->config);

    redirect(new moodle_url('/course/view.php', array('id' => $COURSE->id)));
}

if ($save) {
    $data = $_POST;

    unset($data['save']);

    $theBlock->config = (object) $data;
    $theBlock->instance_config_save($theBlock->config);

    redirect(new moodle_url('/blocks/dashboard/setup.php', array('id' => $COURSE->id, 'instance' => $blockid)));
}

if ($saveview) {
    $data = $_POST;

    unset($data['save']);

    $theBlock->config = (object) $data;
    $theBlock->instance_config_save($theBlock->config);

    redirect(new moodle_url('/blocks/dashboard/view.php', array('id' => $COURSE->id, 'blockid' => $blockid)));
}