<?php
# MantisBT - A PHP based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package MantisBT
 * @copyright Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
 * @copyright Copyright (C) 2002 MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 */

# This sample file contains the essential files that you MUST
# configure to your specific settings.  You may override settings
# from config_defaults_inc.php by uncommenting the config option
# and setting its value in this file.

# Rename this file to config_inc.php after configuration.

# In general the value OFF means the feature is disabled and ON means the
# feature is enabled.  Any other cases will have an explanation.

# Look in http://www.mantisbt.org/docs/ or config_defaults_inc.php for more
# detailed comments.

# --- Database Configuration ---
$g_hostname      = 'if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$g_db_username   = 'wsd3l1f5t9jrcpd9';
$g_db_password   = 'euh546jursh2bds7';
$g_database_name = 'fplrvuuc2eql1qzb';
$g_db_type       = 'mysqli';

# --- Security ---
$g_crypto_master_salt = 'uhhrtghdhdyeh1@3';	#  Random string of at least 16 chars, unique to the installation

# --- Anonymous Access / Signup ---
$g_allow_signup				= OFF;
$g_allow_anonymous_login	= OFF;
$g_anonymous_account		= '';

# --- Email Configuration ---
$g_phpMailer_method		=  PHPMAILER_METHOD_SMTP
$g_smtp_host			= 'server247.web-hosting.com';			# used with PHPMAILER_METHOD_SMTP
$g_smtp_username		= 'admin@hnx.network';					# used with PHPMAILER_METHOD_SMTP
$g_smtp_password		= 'Pa@9708677704';					# used with PHPMAILER_METHOD_SMTP
$g_webmaster_email      = 'admin@hnx.network';
$g_from_email           = 'admin@hnx.network';	# the "From: " field in emails
$g_return_path_email    = 'admin@hnx.network';	# the return address for bounced mail
$g_from_name			= 'HNX | Software Management';
$g_email_receive_own	= ON;
$g_email_send_using_cronjob = ON;

# --- Attachments / File Uploads ---
# $g_allow_file_upload	= ON;
# $g_file_upload_method	= DATABASE; # or DISK
# $g_absolute_path_default_upload_folder = ''; # used with DISK, must contain trailing \ or /.
# $g_max_file_size		= 5000000;	# in bytes
# $g_preview_attachments_inline_max_size = 256 * 1024;
# $g_allowed_files		= '';		# extensions comma separated, e.g. 'php,html,java,exe,pl'
# $g_disallowed_files		= '';		# extensions comma separated

# --- Branding ---
# $g_window_title			= 'MantisBT';
# $g_logo_image			= 'images/mantis_logo.png';
# $g_favicon_image		= 'images/favicon.ico';

# --- Real names ---
# $g_show_realname = OFF;
# $g_show_user_realname_threshold = NOBODY;	# Set to access level (e.g. VIEWER, REPORTER, DEVELOPER, MANAGER, etc)

# --- Others ---
# $g_default_home_page = 'my_view_page.php';	# Set to name of page to go to after login
