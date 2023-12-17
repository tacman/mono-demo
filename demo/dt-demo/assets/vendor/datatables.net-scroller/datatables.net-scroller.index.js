/**
 * Bundled by jsDelivr using Rollup v2.79.1 and Terser v5.19.2.
 * Original file: /npm/datatables.net-scroller@2.3.0/js/dataTables.scroller.mjs
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
import t from"jquery";import s from"datatables.net";export{default}from"datatables.net";let o=t;
/**
 * @summary     Scroller
 * @description Virtual rendering for DataTables
 * @version     2.3.0
 * @copyright   SpryMedia Ltd.
 *
 * This source file is free software, available under the following license:
 *   MIT license - http://datatables.net/license/mit
 *
 * This source file is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.
 *
 * For details please refer to: http://www.datatables.net
 */var e=function(t,s){if(this instanceof e){void 0===s&&(s={});var r=o.fn.dataTable.Api(t);this.s={dt:r.settings()[0],dtApi:r,tableTop:0,tableBottom:0,redrawTop:0,redrawBottom:0,autoHeight:!0,viewportRows:0,stateTO:null,stateSaveThrottle:function(){},drawTO:null,heights:{jump:null,page:null,virtual:null,scroll:null,row:null,viewport:null,labelHeight:0,xbar:0},topRowFloat:0,scrollDrawDiff:null,loaderVisible:!1,forceReposition:!1,baseRowTop:0,baseScrollTop:0,mousedown:!1,lastScrollTop:0},this.s=o.extend(this.s,e.oDefaults,s),this.s.heights.row=this.s.rowHeight,this.dom={force:document.createElement("div"),label:o('<div class="dts_label">0</div>'),scroller:null,table:null,loader:null},this.s.dt.oScroller||(this.s.dt.oScroller=this,this.construct())}else alert("Scroller warning: Scroller must be initialised with the 'new' keyword.")};o.extend(e.prototype,{measure:function(t){this.s.autoHeight&&this._calcRowHeight();var s=this.s.heights;s.row&&(s.viewport=this._parseHeight(o(this.dom.scroller).css("max-height")),this.s.viewportRows=parseInt(s.viewport/s.row,10)+1,this.s.dt._iDisplayLength=this.s.viewportRows*this.s.displayBuffer);var e=this.dom.label.outerHeight();s.xbar=this.dom.scroller.offsetHeight-this.dom.scroller.clientHeight,s.labelHeight=e,(void 0===t||t)&&this.s.dt.oInstance.fnDraw(!1)},pageInfo:function(){var t=this.s.dt,s=this.dom.scroller.scrollTop,o=t.fnRecordsDisplay(),e=Math.ceil(this.pixelsToRow(s+this.s.heights.viewport,!1,this.s.ani));return{start:Math.floor(this.pixelsToRow(s,!1,this.s.ani)),end:o<e?o-1:e-1}},pixelsToRow:function(t,s,o){var e=t-this.s.baseScrollTop,r=o?(this._domain("physicalToVirtual",this.s.baseScrollTop)+e)/this.s.heights.row:e/this.s.heights.row+this.s.baseRowTop;return s||void 0===s?parseInt(r,10):r},rowToPixels:function(t,s,o){var e,r=t-this.s.baseRowTop;return o?(e=this._domain("virtualToPhysical",this.s.baseScrollTop),e+=r*this.s.heights.row):(e=this.s.baseScrollTop,e+=r*this.s.heights.row),s||void 0===s?parseInt(e,10):e},scrollToRow:function(t,s){var e=this,r=!1,i=this.rowToPixels(t),l=t-(this.s.displayBuffer-1)/2*this.s.viewportRows;l<0&&(l=0),(i>this.s.redrawBottom||i<this.s.redrawTop)&&this.s.dt._iDisplayStart!==l&&(r=!0,i=this._domain("virtualToPhysical",t*this.s.heights.row),this.s.redrawTop<i&&i<this.s.redrawBottom&&(this.s.forceReposition=!0,s=!1)),void 0===s||s?(this.s.ani=r,o(this.dom.scroller).animate({scrollTop:i},(function(){setTimeout((function(){e.s.ani=!1}),250)}))):o(this.dom.scroller).scrollTop(i)},construct:function(){var t=this,e=this.s.dtApi;if(!this.s.dt.oFeatures.bPaginate)throw new Error("Pagination must be enabled for Scroller to operate");this.dom.force.style.position="relative",this.dom.force.style.top="0px",this.dom.force.style.left="0px",this.dom.force.style.width="1px",this.dom.scroller=e.table().node().parentNode,this.dom.scroller.appendChild(this.dom.force),this.dom.scroller.style.position="relative",this.dom.table=o(">table",this.dom.scroller)[0],this.dom.table.style.position="absolute",this.dom.table.style.top="0px",this.dom.table.style.left="0px",o(e.table().container()).addClass("dts DTS"),this.dom.label.appendTo(this.dom.scroller),this.s.heights.row&&"auto"!=this.s.heights.row&&(this.s.autoHeight=!1),this.s.ingnoreScroll=!0,o(this.dom.scroller).on("scroll.dt-scroller",(function(s){t._scroll.call(t)})),o(this.dom.scroller).on("touchstart.dt-scroller",(function(){t._scroll.call(t)})),o(this.dom.scroller).on("mousedown.dt-scroller",(function(){t.s.mousedown=!0})).on("mouseup.dt-scroller",(function(){t.s.labelVisible=!1,t.s.mousedown=!1,t.dom.label.css("display","none")})),o(window).on("resize.dt-scroller",(function(){t.measure(!1),t._info()}));var r=!0,i=e.state.loaded();e.on("stateSaveParams.scroller",(function(s,o,e){r&&i?(e.scroller=i.scroller,r=!1,e.scroller&&(t.s.lastScrollTop=e.scroller.scrollTop)):e.scroller={topRow:t.s.topRowFloat,baseScrollTop:t.s.baseScrollTop,baseRowTop:t.s.baseRowTop,scrollTop:t.s.lastScrollTop}})),e.on("stateLoadParams.scroller",(function(s,o,e){void 0!==e.scroller&&t.scrollToRow(e.scroller.topRow)})),i&&i.scroller&&(this.s.topRowFloat=i.scroller.topRow,this.s.baseScrollTop=i.scroller.baseScrollTop,this.s.baseRowTop=i.scroller.baseRowTop),this.measure(!1),t.s.stateSaveThrottle=s.util.throttle((function(){t.s.dtApi.state.save()}),500),e.on("init.scroller",(function(){t.measure(!1),t.s.scrollType="jump",t._draw(),e.on("draw.scroller",(function(){t._draw()}))})),e.on("preDraw.dt.scroller",(function(){t._scrollForce()})),e.on("destroy.scroller",(function(){o(window).off("resize.dt-scroller"),o(t.dom.scroller).off(".dt-scroller"),o(t.s.dt.nTable).off(".scroller"),o(t.s.dt.nTableWrapper).removeClass("DTS"),o("div.DTS_Loading",t.dom.scroller.parentNode).remove(),t.dom.table.style.position="",t.dom.table.style.top="",t.dom.table.style.left=""}))},_calcRowHeight:function(){var t=this.s.dt,e=t.nTable,r=e.cloneNode(!1),i=o("<tbody/>").appendTo(r),l=t.oClasses,a=s.versionCheck("2")?{container:l.container,scroller:l.scrolling.container,body:l.scrolling.body}:{container:l.sWrapper,scroller:l.sScrollWrapper,body:l.sScrollBody},n=o('<div class="'+a.container+' DTS"><div class="'+a.scroller+'"><div class="'+a.body+'"></div></div></div>');o("tbody tr:lt(4)",e).clone().appendTo(i);var h=o("tr",i).length;if(1===h)i.prepend("<tr><td>&#160;</td></tr>"),i.append("<tr><td>&#160;</td></tr>");else for(;h<3;h++)i.append("<tr><td>&#160;</td></tr>");o("div."+a.body,n).append(r);var c=this.s.dt.nHolding||e.parentNode;o(c).is(":visible")||(c="body"),n.find("input").removeAttr("name"),n.appendTo(c),this.s.heights.row=o("tr",i).eq(1).outerHeight(),n.remove()},_draw:function(){var t=this,s=this.s.heights,e=this.dom.scroller.scrollTop,r=o(this.s.dt.nTable).height(),i=this.s.dt._iDisplayStart,l=this.s.dt._iDisplayLength,a=this.s.dt.fnRecordsDisplay(),n=e+s.viewport;this.s.skip=!0,!this.s.dt.bSorted&&!this.s.dt.bFiltered||0!==i||this.s.dt._drawHold||(this.s.topRowFloat=0),e="jump"===this.s.scrollType?this._domain("virtualToPhysical",this.s.topRowFloat*s.row):e,this.s.baseScrollTop=e,this.s.baseRowTop=this.s.topRowFloat;var h=e-(this.s.topRowFloat-i)*s.row;if(0===i)h=0;else if(i+l>=a)h=s.scroll-r;else{if(h+r<n){var c=n-r,d=c-h;this.s.baseScrollTop+=d+1,h=c}}this.dom.table.style.top=h+"px",this.s.tableTop=h,this.s.tableBottom=r+this.s.tableTop;var p=(e-this.s.tableTop)*this.s.boundaryScale;if(this.s.redrawTop=e-p,this.s.redrawBottom=e+p>s.scroll-s.viewport-s.row?s.scroll-s.viewport-s.row:e+p,this.s.skip=!1,t.s.ingnoreScroll)if(this.s.dt.oFeatures.bStateSave&&null!==this.s.dt.oLoadedState&&void 0!==this.s.dt.oLoadedState.scroller){var f=!(!this.s.dt.sAjaxSource&&!t.s.dt.ajax||this.s.dt.oFeatures.bServerSide);(f&&this.s.dt.iDraw>=2||!f&&this.s.dt.iDraw>=1)&&setTimeout((function(){o(t.dom.scroller).scrollTop(t.s.dt.oLoadedState.scroller.scrollTop),setTimeout((function(){t.s.ingnoreScroll=!1}),0)}),0)}else t.s.ingnoreScroll=!1;this.s.dt.oFeatures.bInfo&&setTimeout((function(){t._info.call(t)}),0),o(this.s.dt.nTable).triggerHandler("position.dts.dt",h)},_domain:function(t,s){var o,e=this.s.heights,r=1e4;if(e.virtual===e.scroll)return s;if(s<r)return s;if("virtualToPhysical"===t&&s>=e.virtual-r)return o=e.virtual-s,e.scroll-o;if("physicalToVirtual"===t&&s>=e.scroll-r)return o=e.scroll-s,e.virtual-o;var i=(e.virtual-r-r)/(e.scroll-r-r),l=r-i*r;return"virtualToPhysical"===t?(s-l)/i:i*s+l},_info:function(){if(this.s.dt.oFeatures.bInfo){var t,s=this.s.dt,e=this.s.dtApi,r=s.oLanguage,i=e.page.info(),l=i.recordsDisplay,a=i.recordsTotal,n=Math.floor(this.s.topRowFloat)+1,h=n+Math.floor(this.s.heights.viewport/this.s.heights.row),c=h>l?l:h;0===l&&l==a?t=r.sInfoEmpty+r.sInfoPostFix:0===l?t=r.sInfoEmpty+" "+r.sInfoFiltered+r.sInfoPostFix:l==a?t=r.sInfo+r.sInfoPostFix:(t=r.sInfo,r.sInfoFiltered,r.sInfoPostFix),t=this._macros(t,n,c,a,l);var d=r.fnInfoCallback;d&&(t=d.call(s.oInstance,s,n,c,a,l,t));var p=s.aanFeatures.i;if(void 0!==p){for(var f=0,u=p.length;f<u;f++)o(p[f]).html(t);o(s.nTable).triggerHandler("info.dt")}o("div.dt-info",e.table().container()).each((function(){o(this).html(t),e.trigger("info",[this,t])}))}},_macros:function(t,s,o,e,r){var i=this.s.dtApi,l=this.s.dt,a=l.fnFormatNumber;return t.replace(/_START_/g,a.call(l,s)).replace(/_END_/g,a.call(l,o)).replace(/_MAX_/g,a.call(l,e)).replace(/_TOTAL_/g,a.call(l,r)).replace(/_ENTRIES_/g,i.i18n("entries","")).replace(/_ENTRIES-MAX_/g,i.i18n("entries","",e)).replace(/_ENTRIES-TOTAL_/g,i.i18n("entries","",r))},_parseHeight:function(t){var s,e=/^([+-]?(?:\d+(?:\.\d+)?|\.\d+))(px|em|rem|vh)$/.exec(t);if(null===e)return 0;var r=parseFloat(e[1]),i=e[2];return"px"===i?s=r:"vh"===i?s=r/100*o(window).height():"rem"===i?s=r*parseFloat(o(":root").css("font-size")):"em"===i&&(s=r*parseFloat(o("body").css("font-size"))),s||0},_scroll:function(){var t,e=this,r=this.s.heights,i=this.dom.scroller.scrollTop;if(!this.s.skip&&!this.s.ingnoreScroll&&i!==this.s.lastScrollTop)if(this.s.dt.bFiltered||this.s.dt.bSorted)this.s.lastScrollTop=0;else{if(clearTimeout(this.s.stateTO),this.s.stateTO=setTimeout((function(){e.s.dtApi.state.save()}),250),this.s.scrollType=Math.abs(i-this.s.lastScrollTop)>r.viewport?"jump":"cont",this.s.topRowFloat="cont"===this.s.scrollType?this.pixelsToRow(i,!1,!1):this._domain("physicalToVirtual",i)/r.row,this.s.topRowFloat<0&&(this.s.topRowFloat=0),this.s.forceReposition||i<this.s.redrawTop||i>this.s.redrawBottom){var l=Math.ceil((this.s.displayBuffer-1)/2*this.s.viewportRows);if(t=parseInt(this.s.topRowFloat,10)-l,this.s.forceReposition=!1,t<=0?t=0:t+this.s.dt._iDisplayLength>this.s.dt.fnRecordsDisplay()?(t=this.s.dt.fnRecordsDisplay()-this.s.dt._iDisplayLength)<0&&(t=0):t%2!=0&&t++,this.s.targetTop=t,t!=this.s.dt._iDisplayStart){this.s.tableTop=o(this.s.dt.nTable).offset().top,this.s.tableBottom=o(this.s.dt.nTable).height()+this.s.tableTop;var a=function(){e.s.dt._iDisplayStart=e.s.targetTop,e.s.dtApi.draw("page")};this.s.dt.oFeatures.bServerSide?(this.s.forceReposition=!0,o(this.s.dt.nTable).triggerHandler("scroller-will-draw.dt"),s.versionCheck("2")?e.s.dtApi.processing(!0):this.s.dt.oApi._fnProcessingDisplay(this.s.dt,!0),clearTimeout(this.s.drawTO),this.s.drawTO=setTimeout(a,this.s.serverWait)):a()}}else this.s.topRowFloat=this.pixelsToRow(i,!1,!0);if(this._info(),this.s.lastScrollTop=i,this.s.stateSaveThrottle(),"jump"===this.s.scrollType&&this.s.mousedown&&(this.s.labelVisible=!0),this.s.labelVisible){var n=(r.viewport-r.labelHeight-r.xbar)/r.scroll;this.dom.label.html(this.s.dt.fnFormatNumber(parseInt(this.s.topRowFloat,10)+1)).css("top",i+i*n).css("display","block")}}},_scrollForce:function(){var t=this.s.heights,s=1e6;t.virtual=t.row*this.s.dt.fnRecordsDisplay(),t.scroll=t.virtual,t.scroll>s&&(t.scroll=s),this.dom.force.style.height=t.scroll>this.s.heights.row?t.scroll+"px":this.s.heights.row+"px"}}),e.defaults={boundaryScale:.5,displayBuffer:9,rowHeight:"auto",serverWait:200},e.oDefaults=e.defaults,e.version="2.3.0",o(document).on("preInit.dt.dtscroller",(function(t,r){if("dt"===t.namespace){var i=r.oInit.scroller,l=s.defaults.scroller;if(i||l){var a=o.extend({},i,l);!1!==i&&new e(r,a)}}})),o.fn.dataTable.Scroller=e,o.fn.DataTable.Scroller=e;var r=o.fn.dataTable.Api;r.register("scroller()",(function(){return this})),r.register("scroller().rowToPixels()",(function(t,s,o){var e=this.context;if(e.length&&e[0].oScroller)return e[0].oScroller.rowToPixels(t,s,o)})),r.register("scroller().pixelsToRow()",(function(t,s,o){var e=this.context;if(e.length&&e[0].oScroller)return e[0].oScroller.pixelsToRow(t,s,o)})),r.register(["scroller().scrollToRow()","scroller.toPosition()"],(function(t,s){return this.iterator("table",(function(o){o.oScroller&&o.oScroller.scrollToRow(t,s)})),this})),r.register("row().scrollTo()",(function(t){var s=this;return this.iterator("row",(function(o,e){if(o.oScroller){var r=s.rows({order:"applied",search:"applied"}).indexes().indexOf(e);o.oScroller.scrollToRow(r,t)}})),this})),r.register("scroller.measure()",(function(t){return this.iterator("table",(function(s){s.oScroller&&s.oScroller.measure(t)})),this})),r.register("scroller.page()",(function(){var t=this.context;if(t.length&&t[0].oScroller)return t[0].oScroller.pageInfo()}));
