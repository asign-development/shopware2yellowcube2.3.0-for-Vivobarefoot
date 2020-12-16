# Changelog
All notable changes to this project will be documented in this file.

## v2.3.0
- File: AsignYellowcubeCore.php - Removed CommType from requests, because Yellowcube said [CommType] => SOAP is not a part of their structures.
- File: AsignYellowcubeCore.php - Converted $sOrderDocFlag in numerical format
- File: AsignYellowcubeCron.php - Modified the logic of saving different WAB, WAR statuses in order cron. Fixed the bug of (Column not found: 1054 Unknown column '' in 'field list').
- File AsignWidgetCube.php - Fixed manually sending order condition