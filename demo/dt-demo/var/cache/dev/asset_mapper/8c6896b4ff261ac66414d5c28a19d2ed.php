O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/@popperjs/core/dist/umd/enums.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/@popperjs/core/dist/umd/enums-83c7aeffb7e081b5f464fdcb9013b038.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/@popperjs/core/dist/umd/enums.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2512:"/**
 * @popperjs/core v2.11.7 - MIT License
 */

(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
  typeof define === 'function' && define.amd ? define(['exports'], factory) :
  (global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.Popper = {}));
}(this, (function (exports) { 'use strict';

  var top = 'top';
  var bottom = 'bottom';
  var right = 'right';
  var left = 'left';
  var auto = 'auto';
  var basePlacements = [top, bottom, right, left];
  var start = 'start';
  var end = 'end';
  var clippingParents = 'clippingParents';
  var viewport = 'viewport';
  var popper = 'popper';
  var reference = 'reference';
  var variationPlacements = /*#__PURE__*/basePlacements.reduce(function (acc, placement) {
    return acc.concat([placement + "-" + start, placement + "-" + end]);
  }, []);
  var placements = /*#__PURE__*/[].concat(basePlacements, [auto]).reduce(function (acc, placement) {
    return acc.concat([placement, placement + "-" + start, placement + "-" + end]);
  }, []); // modifiers that need to read the DOM

  var beforeRead = 'beforeRead';
  var read = 'read';
  var afterRead = 'afterRead'; // pure-logic modifiers

  var beforeMain = 'beforeMain';
  var main = 'main';
  var afterMain = 'afterMain'; // modifier with the purpose to write to the DOM (or write into a framework state)

  var beforeWrite = 'beforeWrite';
  var write = 'write';
  var afterWrite = 'afterWrite';
  var modifierPhases = [beforeRead, read, afterRead, beforeMain, main, afterMain, beforeWrite, write, afterWrite];

  exports.afterMain = afterMain;
  exports.afterRead = afterRead;
  exports.afterWrite = afterWrite;
  exports.auto = auto;
  exports.basePlacements = basePlacements;
  exports.beforeMain = beforeMain;
  exports.beforeRead = beforeRead;
  exports.beforeWrite = beforeWrite;
  exports.bottom = bottom;
  exports.clippingParents = clippingParents;
  exports.end = end;
  exports.left = left;
  exports.main = main;
  exports.modifierPhases = modifierPhases;
  exports.placements = placements;
  exports.popper = popper;
  exports.read = read;
  exports.reference = reference;
  exports.right = right;
  exports.start = start;
  exports.top = top;
  exports.variationPlacements = variationPlacements;
  exports.viewport = viewport;
  exports.write = write;

  Object.defineProperty(exports, '__esModule', { value: true });

})));
//# sourceMappingURL=enums.js-6d38aef125ae9e72db4cc8024911da78.map
";s:6:"digest";s:32:"83c7aeffb7e081b5f464fdcb9013b038";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/@popperjs/core/dist/umd/enums.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/@popperjs/core/dist/umd/enums.js-6d38aef125ae9e72db4cc8024911da78.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/@popperjs/core/dist/umd/enums.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"6d38aef125ae9e72db4cc8024911da78";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/@popperjs/core/dist/umd/enums.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/@popperjs/core/dist/umd/enums.js";}