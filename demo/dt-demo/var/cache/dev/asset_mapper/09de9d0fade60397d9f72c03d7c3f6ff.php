O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:107:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/bootstrap/js/dist/util/template-factory.js";s:10:"publicPath";s:113:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/template-factory-8638057dd80f73f7bb170d70196957a3.js";s:23:"publicPathWithoutDigest";s:80:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/template-factory.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:5013:"/*!
  * Bootstrap template-factory.js v5.2.3 (https://getbootstrap.com/)
  * Copyright 2011-2022 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory(require('./sanitizer'), require('./index'), require('../dom/selector-engine'), require('./config')) :
  typeof define === 'function' && define.amd ? define(['./sanitizer', './index', '../dom/selector-engine', './config'], factory) :
  (global = typeof globalThis !== 'undefined' ? globalThis : global || self, global.TemplateFactory = factory(global.Sanitizer, global.Index, global.SelectorEngine, global.Config));
})(this, (function (sanitizer, index, SelectorEngine, Config) { 'use strict';

  const _interopDefaultLegacy = e => e && typeof e === 'object' && 'default' in e ? e : { default: e };

  const SelectorEngine__default = /*#__PURE__*/_interopDefaultLegacy(SelectorEngine);
  const Config__default = /*#__PURE__*/_interopDefaultLegacy(Config);

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v5.2.3): util/template-factory.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * Constants
   */

  const NAME = 'TemplateFactory';
  const Default = {
    allowList: sanitizer.DefaultAllowlist,
    content: {},
    // { selector : text ,  selector2 : text2 , }
    extraClass: '',
    html: false,
    sanitize: true,
    sanitizeFn: null,
    template: '<div></div>'
  };
  const DefaultType = {
    allowList: 'object',
    content: 'object',
    extraClass: '(string|function)',
    html: 'boolean',
    sanitize: 'boolean',
    sanitizeFn: '(null|function)',
    template: 'string'
  };
  const DefaultContentType = {
    entry: '(string|element|function|null)',
    selector: '(string|element)'
  };
  /**
   * Class definition
   */

  class TemplateFactory extends Config__default.default {
    constructor(config) {
      super();
      this._config = this._getConfig(config);
    } // Getters


    static get Default() {
      return Default;
    }

    static get DefaultType() {
      return DefaultType;
    }

    static get NAME() {
      return NAME;
    } // Public


    getContent() {
      return Object.values(this._config.content).map(config => this._resolvePossibleFunction(config)).filter(Boolean);
    }

    hasContent() {
      return this.getContent().length > 0;
    }

    changeContent(content) {
      this._checkContent(content);

      this._config.content = { ...this._config.content,
        ...content
      };
      return this;
    }

    toHtml() {
      const templateWrapper = document.createElement('div');
      templateWrapper.innerHTML = this._maybeSanitize(this._config.template);

      for (const [selector, text] of Object.entries(this._config.content)) {
        this._setContent(templateWrapper, text, selector);
      }

      const template = templateWrapper.children[0];

      const extraClass = this._resolvePossibleFunction(this._config.extraClass);

      if (extraClass) {
        template.classList.add(...extraClass.split(' '));
      }

      return template;
    } // Private


    _typeCheckConfig(config) {
      super._typeCheckConfig(config);

      this._checkContent(config.content);
    }

    _checkContent(arg) {
      for (const [selector, content] of Object.entries(arg)) {
        super._typeCheckConfig({
          selector,
          entry: content
        }, DefaultContentType);
      }
    }

    _setContent(template, content, selector) {
      const templateElement = SelectorEngine__default.default.findOne(selector, template);

      if (!templateElement) {
        return;
      }

      content = this._resolvePossibleFunction(content);

      if (!content) {
        templateElement.remove();
        return;
      }

      if (index.isElement(content)) {
        this._putElementInTemplate(index.getElement(content), templateElement);

        return;
      }

      if (this._config.html) {
        templateElement.innerHTML = this._maybeSanitize(content);
        return;
      }

      templateElement.textContent = content;
    }

    _maybeSanitize(arg) {
      return this._config.sanitize ? sanitizer.sanitizeHtml(arg, this._config.allowList, this._config.sanitizeFn) : arg;
    }

    _resolvePossibleFunction(arg) {
      return typeof arg === 'function' ? arg(this) : arg;
    }

    _putElementInTemplate(element, templateElement) {
      if (this._config.html) {
        templateElement.innerHTML = '';
        templateElement.append(element);
        return;
      }

      templateElement.textContent = element.textContent;
    }

  }

  return TemplateFactory;

}));
//# sourceMappingURL=template-factory.js-a110d0988059377ea9b1e9bf087bd911.map
";s:6:"digest";s:32:"8638057dd80f73f7bb170d70196957a3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:111:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/bootstrap/js/dist/util/template-factory.js.map";s:10:"publicPath";s:117:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/template-factory.js-a110d0988059377ea9b1e9bf087bd911.map";s:23:"publicPathWithoutDigest";s:84:"/assets/@survos/api-grid/node_modules/bootstrap/js/dist/util/template-factory.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a110d0988059377ea9b1e9bf087bd911";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:76:"@survos/api-grid/node_modules/bootstrap/js/dist/util/template-factory.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:72:"@survos/api-grid/node_modules/bootstrap/js/dist/util/template-factory.js";}