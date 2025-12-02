<?php
/**
 * OpenEMR Wiki - LocalSettings.php
 * MediaWiki 1.44
 */

# comment below 2 lines for debug
error_reporting( E_ALL & ~E_DEPRECATED );
ini_set( 'display_errors', 0 );

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
    exit;
}

## Paths
$wgExtensionDirectory = "$IP/extensions";
$wgStyleDirectory = "$IP/skins";
$wgScriptPath = "/wiki";
$wgScript = "$wgScriptPath/index.php";
$wgArticlePath = "$wgScript/$1";
$wgStylePath = "$wgScriptPath/skins";
$wgLogo = "$wgScriptPath/assets/openemr-logo-wiki.svg";

## Site info
$wgServer = getenv('MW_SERVER') ?: "http://localhost:8080";
$wgSitename = "OpenEMR Project Wiki";
$wgLanguageCode = "en";

## Database
$wgDBserver = getenv('DB_HOST') ?: 'db';
$wgDBname = getenv('DB_NAME') ?: 'mediawiki';
$wgDBuser = getenv('DB_USER') ?: 'wiki';
$wgDBpassword = getenv('DB_PASS');
$wgDBprefix = "";
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Security
$wgSecretKey = getenv('MW_SECRET_KEY');
$wgCookiePrefix = getenv('MW_COOKIE_PREFIX');

## Email
$wgEnableEmail = true;
$wgEnableUserEmail = true;
$wgEmergencyContact = "hello@open-emr.org";
$wgPasswordSender = "hello@open-emr.org";
$wgEnotifUserTalk = true;
$wgEnotifWatchlist = false;
$wgEmailAuthentication = true;
$wgSMTP = [
    'host' => getenv('SMTP_HOST') ?: '127.0.0.1',
    'IDHost' => 'open-emr.org',
    'port' => getenv('SMTP_PORT') ?: 25,
    'auth' => false,
    'username' => '',
    'password' => ''
];

## Cache
$wgMainCacheType = CACHE_NONE;

## Uploads
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgMaxShellMemory = 2202400;
$wgFileExtensions = array_merge(
    $wgFileExtensions,
    [ 'pdf', 'txt', 'zip', 'tgz', 'gz', 'tar', 'odt', 'xlsx', 'docx', 'ico', 'svg' ]
);

## Locale
$wgShellLocale = "en_US.utf8";

## Features
$wgExternalLinkTarget = '_blank';
$wgNamespacesWithSubpages[NS_MAIN] = true;
$wgUseTeX = false;
$wgDiff3 = "/usr/bin/diff3";

## Permissions - Anonymous users
$wgGroupPermissions['*']['read'] = true;

## Permissions - Logged-in users
$wgGroupPermissions['user']['move'] = true;
$wgGroupPermissions['user']['move-subpages'] = true;
$wgGroupPermissions['user']['move-rootuserpages'] = true;
$wgGroupPermissions['user']['read'] = true;
$wgGroupPermissions['user']['edit'] = true;
$wgGroupPermissions['user']['createpage'] = true;
$wgGroupPermissions['user']['createtalk'] = true;
$wgGroupPermissions['user']['writeapi'] = true;
$wgGroupPermissions['user']['upload'] = true;
$wgGroupPermissions['user']['reupload'] = true;
$wgGroupPermissions['user']['reupload-shared'] = true;
$wgGroupPermissions['user']['minoredit'] = true;
$wgGroupPermissions['user']['purge'] = true;
$wgGroupPermissions['user']['sendemail'] = true;

## Permissions - Autoconfirmed
$wgGroupPermissions['autoconfirmed']['autoconfirmed'] = true;

## Permissions - Bots
$wgGroupPermissions['bot']['bot'] = true;
$wgGroupPermissions['bot']['autoconfirmed'] = true;
$wgGroupPermissions['bot']['nominornewtalk'] = true;
$wgGroupPermissions['bot']['autopatrol'] = true;
$wgGroupPermissions['bot']['suppressredirect'] = true;
$wgGroupPermissions['bot']['apihighlimits'] = true;
$wgGroupPermissions['bot']['writeapi'] = true;

## Permissions - Sysops
$wgGroupPermissions['sysop']['block'] = true;
$wgGroupPermissions['sysop']['createaccount'] = true;
$wgGroupPermissions['sysop']['delete'] = true;
$wgGroupPermissions['sysop']['bigdelete'] = true;
$wgGroupPermissions['sysop']['deletedhistory'] = true;
$wgGroupPermissions['sysop']['deletedtext'] = true;
$wgGroupPermissions['sysop']['undelete'] = true;
$wgGroupPermissions['sysop']['editinterface'] = true;
$wgGroupPermissions['sysop']['editusercss'] = true;
$wgGroupPermissions['sysop']['edituserjs'] = true;
$wgGroupPermissions['sysop']['import'] = true;
$wgGroupPermissions['sysop']['importupload'] = true;
$wgGroupPermissions['sysop']['move'] = true;
$wgGroupPermissions['sysop']['move-subpages'] = true;
$wgGroupPermissions['sysop']['move-rootuserpages'] = true;
$wgGroupPermissions['sysop']['patrol'] = true;
$wgGroupPermissions['sysop']['autopatrol'] = true;
$wgGroupPermissions['sysop']['protect'] = true;
$wgGroupPermissions['sysop']['proxyunbannable'] = true;
$wgGroupPermissions['sysop']['rollback'] = true;
$wgGroupPermissions['sysop']['upload'] = true;
$wgGroupPermissions['sysop']['reupload'] = true;
$wgGroupPermissions['sysop']['reupload-shared'] = true;
$wgGroupPermissions['sysop']['unwatchedpages'] = true;
$wgGroupPermissions['sysop']['autoconfirmed'] = true;
$wgGroupPermissions['sysop']['upload_by_url'] = true;
$wgGroupPermissions['sysop']['ipblock-exempt'] = true;
$wgGroupPermissions['sysop']['blockemail'] = true;
$wgGroupPermissions['sysop']['markbotedits'] = true;
$wgGroupPermissions['sysop']['apihighlimits'] = true;
$wgGroupPermissions['sysop']['browsearchive'] = true;
$wgGroupPermissions['sysop']['noratelimit'] = true;
$wgGroupPermissions['sysop']['movefile'] = true;
$wgGroupPermissions['sysop']['unblockself'] = true;
$wgGroupPermissions['sysop']['suppressredirect'] = true;
$wgGroupPermissions['sysop']['confirmaccount'] = true;
$wgGroupPermissions['sysop']['passwordreset'] = true;
$wgGroupPermissions['sysop']['userrights'] = true;
$wgGroupPermissions['sysop']['renameuser'] = true;
$wgGroupPermissions['sysop']['deletelogentry'] = true;
$wgGroupPermissions['sysop']['deleterevision'] = true;

## Permissions - Bureaucrats
$wgGroupPermissions['bureaucrat']['noratelimit'] = true;
$wgGroupPermissions['bureaucrat']['protect'] = true;
$wgGroupPermissions['bureaucrat']['editprotected'] = true;

## Permissions - Suppressors
$wgGroupPermissions['suppress']['hideuser'] = true;
$wgGroupPermissions['suppress']['suppressrevision'] = true;
$wgGroupPermissions['suppress']['suppressionlog'] = true;

## MIME type restrictions (allow zip)
$wgMimeTypeExclusions = [
    'text/html', 'text/javascript', 'text/x-javascript', 'application/x-shellscript',
    'application/x-php', 'text/x-php',
    'text/x-python', 'text/x-perl', 'text/x-bash', 'text/x-sh', 'text/x-csh',
    'text/scriptlet', 'application/x-msdownload',
    'application/x-msmetafile',
    'application/x-opc+zip',
];

## Licensing
$wgRightsPage = "";
$wgRightsUrl = "http://www.gnu.org/copyleft/fdl.html";
$wgRightsText = "GNU Free Documentation License 1.3";
$wgRightsIcon = "$wgStylePath/common/images/gnu-fdl.png";

## Skin
$wgDefaultSkin = 'openemr';
wfLoadSkin( 'Openemr' );

## Extensions
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

wfLoadExtension( 'EmbedVideo' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );

# Uncomment when ready to configure
wfLoadExtension( 'CloudflarePurge' );
$wgCloudflarePurgeZoneID = getenv('CF_ZONE_ID');
$wgCloudflarePurgeToken = getenv('CF_API_TOKEN');

## Debug (disable in production)
# $wgShowExceptionDetails = true;

# maintenance mode
#$wgReadOnly = "Wiki is temporarily in read-only mode due to maintenance.";
