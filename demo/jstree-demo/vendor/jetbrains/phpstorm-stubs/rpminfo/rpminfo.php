<?php

// Start of rpminfo v.0.5.0

const RPMVERSION = '4.15.1';
const RPMSENSE_ANY = 0;
const RPMSENSE_LESS = 2;
const RPMSENSE_GREATER = 4;
const RPMSENSE_EQUAL = 8;
const RPMSENSE_POSTTRANS = 32;
const RPMSENSE_PREREQ = 64;
const RPMSENSE_PRETRANS = 128;
const RPMSENSE_INTERP = 256;
const RPMSENSE_SCRIPT_PRE = 512;
const RPMSENSE_SCRIPT_POST = 1024;
const RPMSENSE_SCRIPT_PREUN = 2048;
const RPMSENSE_SCRIPT_POSTUN = 4096;
const RPMSENSE_SCRIPT_VERIFY = 8192;
const RPMSENSE_FIND_REQUIRES = 16384;
const RPMSENSE_FIND_PROVIDES = 32768;
const RPMSENSE_TRIGGERIN = 65536;
const RPMSENSE_TRIGGERUN = 131072;
const RPMSENSE_TRIGGERPOSTUN = 262144;
const RPMSENSE_MISSINGOK = 524288;
const RPMSENSE_RPMLIB = 16777216;
const RPMSENSE_TRIGGERPREIN = 33554432;
const RPMSENSE_KEYRING = 67108864;
const RPMSENSE_CONFIG = 268435456;
const RPMMIRE_DEFAULT = 0;
const RPMMIRE_STRCMP = 1;
const RPMMIRE_REGEX = 2;
const RPMMIRE_GLOB = 3;
const RPMTAG_ARCH = 1022;
const RPMTAG_ARCHIVESIZE = 1046;
const RPMTAG_BASENAMES = 1117;
const RPMTAG_BUGURL = 5012;
const RPMTAG_BUILDARCHS = 1089;
const RPMTAG_BUILDHOST = 1007;
const RPMTAG_BUILDTIME = 1006;
const RPMTAG_C = 1054;
const RPMTAG_CHANGELOGNAME = 1081;
const RPMTAG_CHANGELOGTEXT = 1082;
const RPMTAG_CHANGELOGTIME = 1080;
const RPMTAG_CLASSDICT = 1142;
const RPMTAG_CONFLICTFLAGS = 1053;
const RPMTAG_CONFLICTNAME = 1054;
const RPMTAG_CONFLICTNEVRS = 5044;
const RPMTAG_CONFLICTS = 1054;
const RPMTAG_CONFLICTVERSION = 1055;
const RPMTAG_COOKIE = 1094;
const RPMTAG_DBINSTANCE = 1195;
const RPMTAG_DEPENDSDICT = 1145;
const RPMTAG_DESCRIPTION = 1005;
const RPMTAG_DIRINDEXES = 1116;
const RPMTAG_DIRNAMES = 1118;
const RPMTAG_DISTRIBUTION = 1010;
const RPMTAG_DISTTAG = 1155;
const RPMTAG_DISTURL = 1123;
const RPMTAG_DSAHEADER = 267;
const RPMTAG_E = 1003;
const RPMTAG_ENCODING = 5062;
const RPMTAG_ENHANCEFLAGS = 5057;
const RPMTAG_ENHANCENAME = 5055;
const RPMTAG_ENHANCENEVRS = 5061;
const RPMTAG_ENHANCES = 5055;
const RPMTAG_ENHANCEVERSION = 5056;
const RPMTAG_EPOCH = 1003;
const RPMTAG_EPOCHNUM = 5019;
const RPMTAG_EVR = 5013;
const RPMTAG_EXCLUDEARCH = 1059;
const RPMTAG_EXCLUDEOS = 1060;
const RPMTAG_EXCLUSIVEARCH = 1061;
const RPMTAG_EXCLUSIVEOS = 1062;
const RPMTAG_FILECAPS = 5010;
const RPMTAG_FILECLASS = 1141;
const RPMTAG_FILECOLORS = 1140;
const RPMTAG_FILECONTEXTS = 1147;
const RPMTAG_FILEDEPENDSN = 1144;
const RPMTAG_FILEDEPENDSX = 1143;
const RPMTAG_FILEDEVICES = 1095;
const RPMTAG_FILEDIGESTALGO = 5011;
const RPMTAG_FILEDIGESTS = 1035;
const RPMTAG_FILEFLAGS = 1037;
const RPMTAG_FILEGROUPNAME = 1040;
const RPMTAG_FILEINODES = 1096;
const RPMTAG_FILELANGS = 1097;
const RPMTAG_FILELINKTOS = 1036;
const RPMTAG_FILEMD5S = 1035;
const RPMTAG_FILEMODES = 1030;
const RPMTAG_FILEMTIMES = 1034;
const RPMTAG_FILENAMES = 5000;
const RPMTAG_FILENLINKS = 5045;
const RPMTAG_FILEPROVIDE = 5001;
const RPMTAG_FILERDEVS = 1033;
const RPMTAG_FILEREQUIRE = 5002;
const RPMTAG_FILESIGNATURELENGTH = 5091;
const RPMTAG_FILESIGNATURES = 5090;
const RPMTAG_FILESIZES = 1028;
const RPMTAG_FILESTATES = 1029;
const RPMTAG_FILETRIGGERCONDS = 5086;
const RPMTAG_FILETRIGGERFLAGS = 5072;
const RPMTAG_FILETRIGGERINDEX = 5070;
const RPMTAG_FILETRIGGERNAME = 5069;
const RPMTAG_FILETRIGGERPRIORITIES = 5084;
const RPMTAG_FILETRIGGERSCRIPTFLAGS = 5068;
const RPMTAG_FILETRIGGERSCRIPTPROG = 5067;
const RPMTAG_FILETRIGGERSCRIPTS = 5066;
const RPMTAG_FILETRIGGERTYPE = 5087;
const RPMTAG_FILETRIGGERVERSION = 5071;
const RPMTAG_FILEUSERNAME = 1039;
const RPMTAG_FILEVERIFYFLAGS = 1045;
const RPMTAG_FSCONTEXTS = 1148;
const RPMTAG_GIF = 1012;
const RPMTAG_GROUP = 1016;
const RPMTAG_HDRID = 269;
const RPMTAG_HEADERCOLOR = 5017;
const RPMTAG_HEADERI18NTABLE = 100;
const RPMTAG_HEADERIMAGE = 61;
const RPMTAG_HEADERIMMUTABLE = 63;
const RPMTAG_HEADERREGIONS = 64;
const RPMTAG_HEADERSIGNATURES = 62;
const RPMTAG_ICON = 1043;
const RPMTAG_INSTALLCOLOR = 1127;
const RPMTAG_INSTALLTID = 1128;
const RPMTAG_INSTALLTIME = 1008;
const RPMTAG_INSTFILENAMES = 5040;
const RPMTAG_INSTPREFIXES = 1099;
const RPMTAG_LICENSE = 1014;
const RPMTAG_LONGARCHIVESIZE = 271;
const RPMTAG_LONGFILESIZES = 5008;
const RPMTAG_LONGSIGSIZE = 270;
const RPMTAG_LONGSIZE = 5009;
const RPMTAG_MODULARITYLABEL = 5096;
const RPMTAG_N = 1000;
const RPMTAG_NAME = 1000;
const RPMTAG_NEVR = 5015;
const RPMTAG_NEVRA = 5016;
const RPMTAG_NOPATCH = 1052;
const RPMTAG_NOSOURCE = 1051;
const RPMTAG_NVR = 5014;
const RPMTAG_NVRA = 1196;
const RPMTAG_O = 1090;
const RPMTAG_OBSOLETEFLAGS = 1114;
const RPMTAG_OBSOLETENAME = 1090;
const RPMTAG_OBSOLETENEVRS = 5043;
const RPMTAG_OBSOLETES = 1090;
const RPMTAG_OBSOLETEVERSION = 1115;
const RPMTAG_OLDENHANCES = 1159;
const RPMTAG_OLDENHANCESFLAGS = 1161;
const RPMTAG_OLDENHANCESNAME = 1159;
const RPMTAG_OLDENHANCESVERSION = 1160;
const RPMTAG_OLDFILENAMES = 1027;
const RPMTAG_OLDSUGGESTS = 1156;
const RPMTAG_OLDSUGGESTSFLAGS = 1158;
const RPMTAG_OLDSUGGESTSNAME = 1156;
const RPMTAG_OLDSUGGESTSVERSION = 1157;
const RPMTAG_OPTFLAGS = 1122;
const RPMTAG_ORDERFLAGS = 5037;
const RPMTAG_ORDERNAME = 5035;
const RPMTAG_ORDERVERSION = 5036;
const RPMTAG_ORIGBASENAMES = 1120;
const RPMTAG_ORIGDIRINDEXES = 1119;
const RPMTAG_ORIGDIRNAMES = 1121;
const RPMTAG_ORIGFILENAMES = 5007;
const RPMTAG_OS = 1021;
const RPMTAG_P = 1047;
const RPMTAG_PACKAGER = 1015;
const RPMTAG_PATCH = 1019;
const RPMTAG_PATCHESFLAGS = 1134;
const RPMTAG_PATCHESNAME = 1133;
const RPMTAG_PATCHESVERSION = 1135;
const RPMTAG_PAYLOADCOMPRESSOR = 1125;
const RPMTAG_PAYLOADDIGEST = 5092;
const RPMTAG_PAYLOADDIGESTALGO = 5093;
const RPMTAG_PAYLOADFLAGS = 1126;
const RPMTAG_PAYLOADFORMAT = 1124;
const RPMTAG_PKGID = 261;
const RPMTAG_PLATFORM = 1132;
const RPMTAG_POLICIES = 1150;
const RPMTAG_POLICYFLAGS = 5033;
const RPMTAG_POLICYNAMES = 5030;
const RPMTAG_POLICYTYPES = 5031;
const RPMTAG_POLICYTYPESINDEXES = 5032;
const RPMTAG_POSTIN = 1024;
const RPMTAG_POSTINFLAGS = 5021;
const RPMTAG_POSTINPROG = 1086;
const RPMTAG_POSTTRANS = 1152;
const RPMTAG_POSTTRANSFLAGS = 5025;
const RPMTAG_POSTTRANSPROG = 1154;
const RPMTAG_POSTUN = 1026;
const RPMTAG_POSTUNFLAGS = 5023;
const RPMTAG_POSTUNPROG = 1088;
const RPMTAG_PREFIXES = 1098;
const RPMTAG_PREIN = 1023;
const RPMTAG_PREINFLAGS = 5020;
const RPMTAG_PREINPROG = 1085;
const RPMTAG_PRETRANS = 1151;
const RPMTAG_PRETRANSFLAGS = 5024;
const RPMTAG_PRETRANSPROG = 1153;
const RPMTAG_PREUN = 1025;
const RPMTAG_PREUNFLAGS = 5022;
const RPMTAG_PREUNPROG = 1087;
const RPMTAG_PROVIDEFLAGS = 1112;
const RPMTAG_PROVIDENAME = 1047;
const RPMTAG_PROVIDENEVRS = 5042;
const RPMTAG_PROVIDES = 1047;
const RPMTAG_PROVIDEVERSION = 1113;
const RPMTAG_PUBKEYS = 266;
const RPMTAG_R = 1002;
const RPMTAG_RECOMMENDFLAGS = 5048;
const RPMTAG_RECOMMENDNAME = 5046;
const RPMTAG_RECOMMENDNEVRS = 5058;
const RPMTAG_RECOMMENDS = 5046;
const RPMTAG_RECOMMENDVERSION = 5047;
const RPMTAG_RECONTEXTS = 1149;
const RPMTAG_RELEASE = 1002;
const RPMTAG_REMOVETID = 1129;
const RPMTAG_REQUIREFLAGS = 1048;
const RPMTAG_REQUIRENAME = 1049;
const RPMTAG_REQUIRENEVRS = 5041;
const RPMTAG_REQUIRES = 1049;
const RPMTAG_REQUIREVERSION = 1050;
const RPMTAG_RPMVERSION = 1064;
const RPMTAG_RSAHEADER = 268;
const RPMTAG_SHA1HEADER = 269;
const RPMTAG_SHA256HEADER = 273;
const RPMTAG_SIGGPG = 262;
const RPMTAG_SIGMD5 = 261;
const RPMTAG_SIGPGP = 259;
const RPMTAG_SIGSIZE = 257;
const RPMTAG_SIZE = 1009;
const RPMTAG_SOURCE = 1018;
const RPMTAG_SOURCEPACKAGE = 1106;
const RPMTAG_SOURCEPKGID = 1146;
const RPMTAG_SOURCERPM = 1044;
const RPMTAG_SUGGESTFLAGS = 5051;
const RPMTAG_SUGGESTNAME = 5049;
const RPMTAG_SUGGESTNEVRS = 5059;
const RPMTAG_SUGGESTS = 5049;
const RPMTAG_SUGGESTVERSION = 5050;
const RPMTAG_SUMMARY = 1004;
const RPMTAG_SUPPLEMENTFLAGS = 5054;
const RPMTAG_SUPPLEMENTNAME = 5052;
const RPMTAG_SUPPLEMENTNEVRS = 5060;
const RPMTAG_SUPPLEMENTS = 5052;
const RPMTAG_SUPPLEMENTVERSION = 5053;
const RPMTAG_TRANSFILETRIGGERCONDS = 5088;
const RPMTAG_TRANSFILETRIGGERFLAGS = 5082;
const RPMTAG_TRANSFILETRIGGERINDEX = 5080;
const RPMTAG_TRANSFILETRIGGERNAME = 5079;
const RPMTAG_TRANSFILETRIGGERPRIORITIES = 5085;
const RPMTAG_TRANSFILETRIGGERSCRIPTFLAGS = 5078;
const RPMTAG_TRANSFILETRIGGERSCRIPTPROG = 5077;
const RPMTAG_TRANSFILETRIGGERSCRIPTS = 5076;
const RPMTAG_TRANSFILETRIGGERTYPE = 5089;
const RPMTAG_TRANSFILETRIGGERVERSION = 5081;
const RPMTAG_TRIGGERCONDS = 5005;
const RPMTAG_TRIGGERFLAGS = 1068;
const RPMTAG_TRIGGERINDEX = 1069;
const RPMTAG_TRIGGERNAME = 1066;
const RPMTAG_TRIGGERSCRIPTFLAGS = 5027;
const RPMTAG_TRIGGERSCRIPTPROG = 1092;
const RPMTAG_TRIGGERSCRIPTS = 1065;
const RPMTAG_TRIGGERTYPE = 5006;
const RPMTAG_TRIGGERVERSION = 1067;
const RPMTAG_URL = 1020;
const RPMTAG_V = 1001;
const RPMTAG_VCS = 5034;
const RPMTAG_VENDOR = 1011;
const RPMTAG_VERBOSE = 5018;
const RPMTAG_VERIFYSCRIPT = 1079;
const RPMTAG_VERIFYSCRIPTFLAGS = 5026;
const RPMTAG_VERIFYSCRIPTPROG = 1091;
const RPMTAG_VERSION = 1001;
const RPMTAG_XPM = 1013;

/**
 * Compare two RPM evr (epoch:version-release) strings
 *
 * @param string $evr1 <p>
 * First epoch:version-release string
 * </p>
 * @param string $evr2 <p>
 * Second epoch:version-release string
 * </p>
 * @return int <p>
 * < 0 if evr1 < evr2, > 0 if evr1 > evr2, 0 if equal.
 * </p>
 * @since 0.1.0
 */
function rpmvercmp(string $evr1, string $evr2) {}

/**
 * Retrieve information from a RPM file, reading its metadata.
 * If given error will be used to store error message
 * instead of raising a warning. The return
 * value is a hash table,
 * or false if it fails.
 *
 * @param string $path <p>
 * Path to the RPM file.
 * </p>
 * @param bool $full [optional] <p>
 * If TRUE all information headers for the file are retrieved, else only a minimal set.
 * </p>
 * @param null|string &$error [optional] <p>
 * If provided, will receive the possible error message, and will avoid a runtime warning.
 * </p>
 *
 * @return array|null <p>
 * An array of information or <b>NULL</b> on error.
 * </p>
 * @since 0.1.0
 */
function rpminfo(string $path, bool $full = false, ?string &$error = null) {}

/**
 * Retrieve information about an installed package, from the system RPM database.
 *
 * @param string $nevr <p>
 * Name with optional epoch, version and release.
 * </p>
 * @param bool $full [optional] <p>
 * If TRUE all information headers for the file are retrieved, else only a minimal set.
 * </p>
 *
 * @return array|null <p>
 * An array of arrays of information or <b>NULL</b> on error.
 * </p>
 * @since 0.2.0
 */
function rpmdbinfo(string $nevr, bool $full = false) {}

/**
 * Retriev information from the local RPM database.
 *
 * @param string $pattern <p>
 * Value to search for.
 * </p>
 * @param int $rpmtag [optional] <p>
 * Search criterion, one of RPMTAG_* constant.
 * </p>
 * @param int $rpmmire [optional] <p>
 * Pattern type, one of RPMMIRE_* constant.
 * When < 0 the criterion must equals the value, and database index is used if possible.
 * </p>
 * @param bool $full [optional] <p>
 * If TRUE all information headers for the file are retrieved, else only a minimal set.
 * </p>
 *
 * @return array|null <p>
 * An array of arrays of information or <b>NULL</b> on error.
 * </p>
 * @since 0.3.0
 */
function rpmdbsearch(string $pattern, int $rpmtag = RPMTAG_NAME, int $rpmmire = -1, bool $full = false) {}

/**
 * Add an additional retrieved tag in subsequent queries.
 *
 * @param int $tag One of RPMTAG_* constant, see the rpminfo constants page.
 *
 * @return bool Returns true on success or false on failure.
 * @since 0.5.0
 */
function rpmaddtag(int $tag): bool {}
