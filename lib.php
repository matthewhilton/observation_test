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
 * This file contains the moodle hooks for the assign module.
 *
 * It delegates most functions to the assignment class.
 *
 * @package   mod_observation
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

function observation_get_course_content_items(\core_course\local\entity\content_item $defaultmodulecontentitem) {
    global $CFG, $OUTPUT;

    $types = [];

    // The 'External tool' entry (the main module content item), should always take the id of 1.

    // TODO check user permissions to see activity
    // TODO make this modular, replace hardcoded values
    $types = [new \core_course\local\entity\content_item(
        1,
        $defaultmodulecontentitem->get_name(),
        $defaultmodulecontentitem->get_title(),
        $defaultmodulecontentitem->get_link(),
        $defaultmodulecontentitem->get_icon(),
        $defaultmodulecontentitem->get_help(),
        $defaultmodulecontentitem->get_archetype(),
        $defaultmodulecontentitem->get_component_name()
    )];
    return $types;
}
