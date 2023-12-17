O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/wordwrap.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/strings/wordwrap-b371a9ce1b6d4cb803b884318275b337.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/strings/wordwrap.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3339:"'use strict';

module.exports = function wordwrap(str, intWidth, strBreak, cut) {
  //  discuss at: https://locutus.io/php/wordwrap/
  // original by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
  // improved by: Nick Callen
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Sakimori
  //  revised by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
  // bugfixed by: Michael Grier
  // bugfixed by: Feras ALHAEK
  // improved by: Rafał Kukawski (https://kukawski.net)
  //   example 1: wordwrap('Kevin van Zonneveld', 6, '|', true)
  //   returns 1: 'Kevin|van|Zonnev|eld'
  //   example 2: wordwrap('The quick brown fox jumped over the lazy dog.', 20, '<br />\n')
  //   returns 2: 'The quick brown fox<br />\njumped over the lazy<br />\ndog.'
  //   example 3: wordwrap('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')
  //   returns 3: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea\ncommodo consequat.'

  intWidth = arguments.length >= 2 ? +intWidth : 75;
  strBreak = arguments.length >= 3 ? '' + strBreak : '\n';
  cut = arguments.length >= 4 ? !!cut : false;

  var i = void 0,
      j = void 0,
      line = void 0;

  str += '';

  if (intWidth < 1) {
    return str;
  }

  var reLineBreaks = /\r\n|\n|\r/;
  var reBeginningUntilFirstWhitespace = /^\S*/;
  var reLastCharsWithOptionalTrailingWhitespace = /\S*(\s)?$/;

  var lines = str.split(reLineBreaks);
  var l = lines.length;
  var match = void 0;

  // for each line of text
  for (i = 0; i < l; lines[i++] += line) {
    line = lines[i];
    lines[i] = '';

    while (line.length > intWidth) {
      // get slice of length one char above limit
      var slice = line.slice(0, intWidth + 1);

      // remove leading whitespace from rest of line to parse
      var ltrim = 0;
      // remove trailing whitespace from new line content
      var rtrim = 0;

      match = slice.match(reLastCharsWithOptionalTrailingWhitespace);

      // if the slice ends with whitespace
      if (match[1]) {
        // then perfect moment to cut the line
        j = intWidth;
        ltrim = 1;
      } else {
        // otherwise cut at previous whitespace
        j = slice.length - match[0].length;

        if (j) {
          rtrim = 1;
        }

        // but if there is no previous whitespace
        // and cut is forced
        // cut just at the defined limit
        if (!j && cut && intWidth) {
          j = intWidth;
        }

        // if cut wasn't forced
        // cut at next possible whitespace after the limit
        if (!j) {
          var charsUntilNextWhitespace = (line.slice(intWidth).match(reBeginningUntilFirstWhitespace) || [''])[0];

          j = slice.length + charsUntilNextWhitespace.length;
        }
      }

      lines[i] += line.slice(0, j - rtrim);
      line = line.slice(j + ltrim);
      lines[i] += line.length ? strBreak : '';
    }
  }

  return lines.join('\n');
};
//# sourceMappingURL=wordwrap.js-93b36a81fd8cbdc5dee51fc05fddf0de.map";s:6:"digest";s:32:"b371a9ce1b6d4cb803b884318275b337";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/wordwrap.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/wordwrap.js-93b36a81fd8cbdc5dee51fc05fddf0de.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/wordwrap.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"93b36a81fd8cbdc5dee51fc05fddf0de";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/wordwrap.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/strings/wordwrap.js";}