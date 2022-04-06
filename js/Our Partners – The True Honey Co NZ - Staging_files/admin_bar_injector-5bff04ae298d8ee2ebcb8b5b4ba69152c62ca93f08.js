!function(){var e=function(e){var t={exports:{}};return e.call(t.exports,t,t.exports),t.exports},r=function(){function s(e,t){for(var i=0;i<t.length;i++){var s=t[i];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}return function(e,t,i){return t&&s(e.prototype,t),i&&s(e,i),e}}(),h=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")},o=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)},c=function a(e,t,i){null===e&&(e=Function.prototype);var s=Object.getOwnPropertyDescriptor(e,t);if(s===undefined){var n=Object.getPrototypeOf(e);return null===n?undefined:a(n,t,i)}if("value"in s)return s.value;var o=s.get;return o===undefined?undefined:o.call(i)},d=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t},s=function(e){return e&&e.__esModule?e:{"default":e}},p=e(function(e,t){"use strict";function i(e,t){!(1<arguments.length&&t!==undefined)||arguments[1]?window.open(e,"adminBarWindow"):window.location.assign(e)}function s(){window.location.reload()}Object.defineProperty(t,"__esModule",{value:!0}),t.redirectToUrl=i,t.refreshPage=s;var n=function(){function o(e){var t=e.targetNode,i=e.iframeRoot,s=e.iframeSrc,n=e.permanentDomain;h(this,o),this.targetNode=t,this.iframeRoot=i,this.iframeSrc=s,this.permanentDomain=n}return r(o,[{key:"createIframe",value:function i(e,t){this.iframe=document.createElement("iframe"),this.iframe.setAttribute("title",e),this.iframe.setAttribute("id",t),this.iframe.setAttribute("src",this.iframeSrc),this.iframe.setAttribute("sandbox","allow-same-origin allow-scripts"),this.iframe.setAttribute("style",this.loadingStyles),this.targetNode.appendChild(this.iframe),this.target=this.iframe.contentWindow}}],[{key:"convertStylesObjectToString",value:function e(t){return Object.keys(t).map(function(e){return e+": "+t[e]+";"}).join(" ")}},{key:"returnObjectValues",value:function s(t){return Object.keys(t).map(function(e){return t[e]})}}]),o}();t["default"]=n});e(function(e,t){"use strict";function l(e,t,i,s){var n=window.location.pathname;if(e===t){var o=""+s+n.replace("/"+i,"");window.location.assign(o)}else if(t===i){var r=s+"/"+e+n;window.location.assign(r)}else{var a=s+"/"+n.replace("/"+i,e);window.location.assign(a)}}Object.defineProperty(t,"__esModule",{value:!0}),t.changeLocale=l;var i=function(e){function f(e){var t=e.targetNode,i=e.iframeSrc,s=e.permanentDomain;h(this,f);var n=d(this,(f.__proto__||Object.getPrototypeOf(f)).call(this,{targetNode:t,iframeSrc:i,permanentDomain:s}));return n.POST_MESSAGE_ACTIONS={TOGGLE_BAR:"toggle_bar",SET_IFRAME_HEIGHT:"set_iframe_height",REDIRECT_TO_URL:"redirect_to_url",SET_INITIAL_STATE:"set_initial_state",OPEN_POPOVER:"open_popover",CLOSE_POPOVER:"close_popover",TEMPLATE_EDITOR_REFRESH_PAGE:'{"key":"pageRefresh"}',CHANGE_LOCALE:"change_locale",OPEN_MODAL:"open_modal",CLOSE_MODAL:"close_modal"},n.loadingStyles=f.convertStylesObjectToString({position:"fixed",border:"none"}),n.defaultStyles=f.convertStylesObjectToString({position:"fixed",bottom:0,left:0,"z-index":2147483647,width:"100%",height:"auto",border:"none"}),n.collapsedStyles=f.convertStylesObjectToString({position:"fixed",bottom:0,left:0,"z-index":2147483647,width:"80px",height:"80px",border:"none"}),n.popoverOpenStyles=f.convertStylesObjectToString({position:"fixed",bottom:0,left:0,"z-index":2147483647,width:"100%",height:"100vh",border:"none"}),n}return o(f,e),r(f,[{key:"init",value:function t(){this.postMessageBuffer=this.postMessageBuffer.bind(this),this.setInitialState=this.setInitialState.bind(this),c(f.prototype.__proto__||Object.getPrototypeOf(f.prototype),"createIframe",this).call(this,"Shopify Admin Bar","admin-bar-iframe"),this.target=this.iframe.contentWindow,window.addEventListener("message",this.postMessageBuffer)}},{key:"teardown",value:function i(){window.removeEventListener("message",this.postMessageBuffer),window.removeEventListener("DOMContentLoaded",this.setInitialState)}},{key:"setInitialState",value:function s(){this.isCollapsed?this.iframe.setAttribute("style",this.collapsedStyles):this.iframe.setAttribute("style",this.defaultStyles)}},{key:"postMessageBuffer",value:function u(e){var t=e.data.action||e.data,i=e.data,s=i.height,n=i.url,o=i.isCollapsed,r=i.newWindow,a=e.data.localeData,l=e.origin;!t||f.returnObjectValues(this.POST_MESSAGE_ACTIONS).indexOf(t)<0||l!=="https://"+this.permanentDomain||(t!==this.POST_MESSAGE_ACTIONS.SET_IFRAME_HEIGHT||s)&&this.postMessageHandler(t,s,n,o,r,a,l)}},{key:"postMessageHandler",value:function a(e,t,i,s,n,o,r){if(e===this.POST_MESSAGE_ACTIONS.TOGGLE_BAR)this.isCollapsed?(this.isCollapsed=!1,this.iframe.setAttribute("style",this.defaultStyles),this.iframe.style.height=this.heightBeforeCollapse):(this.isCollapsed=!0,this.heightBeforeCollapse=this.iframe.style.height,this.iframe.setAttribute("style",this.collapsedStyles));else if(e===this.POST_MESSAGE_ACTIONS.SET_IFRAME_HEIGHT&&null!=t)this.iframe.style.height=t+"px";else if(e===this.POST_MESSAGE_ACTIONS.REDIRECT_TO_URL&&null!=i)(0,p.redirectToUrl)(i,n);else if(e===this.POST_MESSAGE_ACTIONS.OPEN_POPOVER)this.iframe.setAttribute("style",this.popoverOpenStyles);else if(e===this.POST_MESSAGE_ACTIONS.CLOSE_POPOVER)this.iframe.setAttribute("style",this.defaultStyles);else if(e===this.POST_MESSAGE_ACTIONS.SET_INITIAL_STATE)s?(this.isCollapsed=!0,this.iframe.setAttribute("style",this.collapsedStyles)):(this.isCollapsed=!1,this.iframe.setAttribute("style",this.defaultStyles));else if(e===this.POST_MESSAGE_ACTIONS.TEMPLATE_EDITOR_REFRESH_PAGE)(0,p.refreshPage)();else if(e===this.POST_MESSAGE_ACTIONS.CHANGE_LOCALE&&null!=o){l(o.selectedLocale,o.primaryLocale,o.previousLocale,o.shopUrl)}else e===this.POST_MESSAGE_ACTIONS.OPEN_MODAL?(this.iframe.setAttribute("style",this.popoverOpenStyles),this.sendPostMessage("modal_opened",r)):e===this.POST_MESSAGE_ACTIONS.CLOSE_MODAL&&(this.iframe.setAttribute("style",this.defaultStyles),this.sendPostMessage("modal_closed",r))}},{key:"sendPostMessage",value:function n(e,t){this.target.postMessage(e,t)}}]),f}(s(p)["default"]);t["default"]=i,Shopify.AdminBarInjector=null!=t["default"]?t["default"]:t})}("undefined"!=typeof global?global:"undefined"!=typeof window&&window);