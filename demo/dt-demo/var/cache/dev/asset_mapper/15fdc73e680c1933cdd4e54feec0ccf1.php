O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/ini_set.js";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/info/ini_set-325deb4f1c2e8fa83e89dde0a44c767c.js";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/info/ini_set.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1619:"'use strict';

module.exports = function ini_set(varname, newvalue) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/ini_set/
  // original by: Brett Zamir (https://brett-zamir.me)
  //      note 1: This will not set a global_value or access level for the ini item
  //   example 1: ini_set('date.timezone', 'Asia/Hong_Kong')
  //   example 1: ini_set('date.timezone', 'America/Chicago')
  //   returns 1: 'Asia/Hong_Kong'

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};
  $locutus.php.ini = $locutus.php.ini || {};

  $locutus.php.ini = $locutus.php.ini || {};
  $locutus.php.ini[varname] = $locutus.php.ini[varname] || {};

  var oldval = $locutus.php.ini[varname].local_value;

  var lowerStr = (newvalue + '').toLowerCase().trim();
  if (newvalue === true || lowerStr === 'on' || lowerStr === '1') {
    newvalue = 'on';
  }
  if (newvalue === false || lowerStr === 'off' || lowerStr === '0') {
    newvalue = 'off';
  }

  var _setArr = function _setArr(oldval) {
    // Although these are set individually, they are all accumulated
    if (typeof oldval === 'undefined') {
      $locutus.ini[varname].local_value = [];
    }
    $locutus.ini[varname].local_value.push(newvalue);
  };

  switch (varname) {
    case 'extension':
      _setArr(oldval, newvalue);
      break;
    default:
      $locutus.php.ini[varname].local_value = newvalue;
      break;
  }

  return oldval;
};
//# sourceMappingURL=ini_set.js-b1c25be9433a4fdc2f4796068a9ce6b7.map";s:6:"digest";s:32:"325deb4f1c2e8fa83e89dde0a44c767c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/ini_set.js.map";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/info/ini_set.js-b1c25be9433a4fdc2f4796068a9ce6b7.map";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/info/ini_set.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"b1c25be9433a4fdc2f4796068a9ce6b7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/info/ini_set.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/info/ini_set.js";}