"use strict";var _createClass=function(){function s(e,t){for(var o=0;o<t.length;o++){var s=t[o];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(e,s.key,s)}}return function(e,t,o){return t&&s(e.prototype,t),o&&s(e,o),e}}();function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var MF=function(){function s(e,t,o){_classCallCheck(this,s),this.smallBox=e,this.bigBox=t,this.mask=o}return _createClass(s,[{key:"onmouseenter",value:function(){var e=this;this.smallBox.onmouseover=function(){e.bigBox.style.display="block",e.mask.style.display="block"}}},{key:"onmousemove",value:function(){var f=this;this.smallBox.onmousemove=function(e){var t=e||event,o=t.pageX-this.offsetLeft-f.mask.offsetWidth/2,s=t.pageY-this.offsetTop-f.mask.offsetHeight/2;o<0&&(o=0);var i=this.offsetWidth-f.mask.offsetWidth;i<o&&(o=i),s<0&&(s=0);var n=this.offsetWidth-f.mask.offsetHeight;n<s&&(s=n);var a=f.bigBox.offsetWidth*o/f.mask.offsetWidth,l=f.bigBox.offsetHeight*s/f.mask.offsetHeight;f.bigBox.style.backgroundPositionX=-a+"px",f.bigBox.style.backgroundPositionY=-l+"px",f.mask.style.left=o+"px",f.mask.style.top=s+"px"}}},{key:"onmouseleave",value:function(){var e=this;this.smallBox.onmouseout=function(){e.bigBox.style.display="none",e.mask.style.display="none"}}},{key:"eventbind",value:function(){this.onmouseenter(),this.onmouseleave(),this.onmousemove()}}]),s}();