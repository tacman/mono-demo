O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strtok.js";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtok-12ee6929b209bd507ca4103c229444df.js";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtok.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1277:"'use strict';

module.exports = function strtok(str, tokens) {
  //  discuss at: https://locutus.io/php/strtok/
  // original by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Use tab and newline as tokenizing characters as well
  //   example 1: var $string = "\t\t\t\nThis is\tan example\nstring\n"
  //   example 1: var $tok = strtok($string, " \n\t")
  //   example 1: var $b = ''
  //   example 1: while ($tok !== false) {$b += "Word="+$tok+"\n"; $tok = strtok(" \n\t");}
  //   example 1: var $result = $b
  //   returns 1: "Word=This\nWord=is\nWord=an\nWord=example\nWord=string\n"

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  if (tokens === undefined) {
    tokens = str;
    str = $locutus.php.strtokleftOver;
  }
  if (str.length === 0) {
    return false;
  }
  if (tokens.indexOf(str.charAt(0)) !== -1) {
    return strtok(str.substr(1), tokens);
  }
  for (var i = 0; i < str.length; i++) {
    if (tokens.indexOf(str.charAt(i)) !== -1) {
      break;
    }
  }
  $locutus.php.strtokleftOver = str.substr(i + 1);

  return str.substring(0, i);
};
//# sourceMappingURL=strtok.js-466b94ce6d2a2d1bb6a139377efd0692.map";s:6:"digest";s:32:"12ee6929b209bd507ca4103c229444df";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strtok.js.map";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtok.js-466b94ce6d2a2d1bb6a139377efd0692.map";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtok.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"466b94ce6d2a2d1bb6a139377efd0692";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/strings/strtok.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/strings/strtok.js";}