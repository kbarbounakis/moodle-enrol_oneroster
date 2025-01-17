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
 * One Roster Enrolment Client.
 *
 * @package    enrol_oneroster
 * @copyright  Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_oneroster\local\interfaces;

/**
 * One Roster Rostering interface..
 *
 * @package    enrol_oneroster
 * @copyright  Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
interface rostering_client {
    /**
     * Get the rostering endpoint for this version of the API.
     *
     * @return rostering_endpoint
     */
    public function get_rostering_endpoint(): rostering_endpoint;

    /**
     * Sync the roster.
     *
     * @param   int $onlysincetime
     */
    public function sync_roster(?int $onlysincetime = null, ?array $filter = null): void;

    /**
     * Fetch the list of organisations that can be syncronised.
     *
     * @return  array
     */
    public function fetch_organisation_list(): Iterable;
    
}
