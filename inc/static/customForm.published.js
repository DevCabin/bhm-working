define([],function(){function e(e){var t=["jquery","common/regexhelper/regexhelper","common/api/api.guid","libs/jquery/plugins/jquery.xDomainRequest","wsbcore/tipper","wsbcore/datepicker","libs/jquery/plugins/jquery.watermark/jquery.watermark"];require(t,function(t,r,n){function d(){if(c(),M()){var r=[],d="",i="",l=!0,u={},g=('[data-groupId="'+e.groupId+'"]',a?a.find('[data-groupId="'+e.groupId+'"]'):t('[data-groupId="'+e.groupId+'"]'));g.sort(function(e,a){var r=function(e){return t(e).attr("tabindex")||0};return r(e)-r(a)}).each(function(){var a=t(this),n=a.attr("data-formtype");if("date"!=n){var o=a.attr("type");if("button"!=o&&"submit"!=o&&("radio"!=o&&"checkbox"!=o||a.is(":checked"))){var s=a.attr("data-label");if(!s){var p=(u[n]||0)+1;u[n]=p,s=(e.fieldFormatByType[n]||"{num}").replace("{num}",p.toLocaleString())}var f=a.val();if(a.attr("data-namefield"))d=f;else if(a.attr("data-gemsubmit")&&"true"===a.attr("data-gemsubmit").toLowerCase()){i=f;var c=a.parent().find(".opt-in-checkbox");c&&c.is(":checked")&&(l=!1)}r.push({label:s,value:f,type:n})}}});var h={domainName:e.domainName,resellerId:e.resellerId,elementId:n.toLegacyIdString(e.elementId),subject:e.subject,emailHashList:e.emailHashList,formFields:r,hostPageUrl:encodeURIComponent(window.location.href)},m='input[type="hidden"][data-groupId="'+e.groupId+'"][data-formType="file"]',v=a?a.find(m):t(m);v.length&&v.val()&&(h.uploadedFileUrl=encodeURIComponent(v.val()));var I=function(){if(s){var r='div[data-label-container-groupId="'+e.groupId+'"]',n=a?a.find(r):t(r),d=1/0;t.each(n,function(e,a){var r=parseInt(t(a).parent().parent().css("top"))||0;d=Math.min(r,d)});var i=n.parent().parent(),l=o.parent().parent();"mobile"===e.renderMode&&(l=l.parent()),i.remove();var u='[data-aid="submit-'+e.elementId+"-"+e.renderMode+'"]',p=a?a.find(u):t(u);p.remove(),o.show(),l.css({top:d+"px",height:"auto"})}else if(e.postRedirectUrl.search("window.wsb.gotoAddress")>=0){var f=e.postRedirectUrl.match(/preview\/(?:desktop|mobile)\/(?:(?:[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})|(?:\d+))/)[0];window.wsb.gotoAddress(f)}else window.location=e.postRedirectUrl},b=function(a){p(!0);var r=e.sendErrorMessage,n=e.errorTitle,d="error";429===a.status&&e.tooManyRequestsErrorMessage&&(r=e.tooManyRequestsErrorMessage,e.tooManyRequestsErrorTitle&&(n=e.tooManyRequestsErrorTitle),d="warning"),f()?alert(r):t("<div></div>").sfGrowl({title:n||"",content:r,icon:d,fadetime:3e3})},y=e.mailerUrl;t.browser.msie&&t.browser.version<10&&window.location.href.indexOf("http://")>=0&&(y=y.replace("https://","http://"));var w={type:"POST",url:y,crossDomain:!0,data:JSON.stringify(h)};if(e.gemSubmit&&!l&&1==e.resellerId&&""!=i){var x=(d||"").split(" "),k=x[0],T=x.slice(1).join(" "),j={email:i,suppressed:l};k&&(j.firstName=k),T&&(j.lastName=T);var q=[e.gemSubmitUrl,e.orionId,e.domainName].join("/"),C={type:"POST",url:q,crossDomain:!0,data:j,dataType:"json"};t.when(t.ajax(w),t.ajax(C)).then(I).fail(b)}else t.when(t.ajax(w)).then(I).fail(b);p(!1)}}var i,o,l="form-button-disabled",u="form-value-invalid",s=e.showMessage,p=(e.isPreview,function(e){e?(i.removeClass(l),i.removeAttr("disabled")):(i.addClass(l),i.attr("disabled","disabled"))}),f=function(){{var e="#mobile-site-view";a?a.find(e):t(e)}return t(e).length>0},c=function(){var r='[data-field-container-groupId="'+e.groupId+'"]',n="[data-date-elementId]",d=a?a.find(r).find(n):t(r).find(n);if(d&&d.length){var i=t.map(d,function(e){return{elementId:t(e).attr("data-date-elementId"),subIndex:t(e).attr("data-subIndex")||0,val:"span"===(t(e).prop("tagName")||"").toLowerCase()?t(e).text():t(e).val()}}),o={};t.each(i,function(e,t){var a=t.elementId;a in o?o[a].push(t):o[a]=[t]});for(elementId in o){var l=t.map(o[elementId].sort(function(e,t){return e.subIndex-t.subIndex}),function(e){return e.val}).join(" "),u='[data-aid="datetime-value-'+elementId+'"]';a?a.find(u).val(l):t(u).val(l)}}},g=function(e){var a=t(e),r=t(e).attr("data-formType"),n=0;return n="hidden"===t(a).attr("type")?"file"===r?t(a).parent().offset().top+1:t(a).prev().offset().top+1:a.offset().top,parseInt(n)},h=function(e){var a=t(e),r=t(e).attr("data-formType"),n=0;return n="hidden"===t(a).attr("type")?"file"===r?t(a).parent().offset().left+1:t(a).prev().offset().left+1:a.offset().left,parseInt(n)},m=function(e,t){var a=g(e),r=g(t);return a!=r?a-r:h(e)-h(t)},v=function(){var r='[data-groupId="'+e.groupId+'"]',n=a?a.find(r):t(r);n.sort(function(e,t){return m(e,t)}).each(function(a){var r=100*e.groupIdInt;t(this).attr("tabindex",r+a)})},I=function(){var r='[data-groupId="'+e.groupId+'"]',n=a?a.find(r):t(r);t.each(n,function(e,a){var r=t(a).attr("placeholder");r&&t(a).watermark(r)})},b=function(n){var d=!0,i=t(n),o=i.val(),l=i.attr("data-formType"),s=Boolean(i.attr("required"));if(s){if("radio"==l||"checkbox"==l){var f=i.attr("name"),c='input[name="'+f+'"]:checked',g=a?a.find(c):t(c),h='input[name="'+f+'"]',m=a?a.find(h):t(h);0!=g.length||m.is(":focus")||(d=!1)}else d=Boolean(o);i.attr("data-placeholder",d?"":e.requiredValidationMessage)}return d&&("email"===l?(r.validateEmailAddress(o)||(d=!1),s||0!==o.length||(d=!0),i.attr("data-placeholder",d?"":e.emailValidationMessage)):"date"==l?"time"===i.attr("data-datetime-type")?(r.validateTime(o)||(d=!1),s||0!==o.length||(d=!0),i.attr("data-placeholder",d?"":e.dateValidationMessage)):(r.validateDate(o)||(d=!1),s||0!==o.length||(d=!0),i.attr("data-placeholder",d?"":e.dateValidationMessage)):"input"===l&&o.length>100?(d=!1,i.val(o.substr(0,100)),i.attr("data-placeholder",d?"":e.lengthValidationMessage)):"paragraph"===l&&o.length>4e3?(d=!1,i.val(o.substr(0,4e3)),i.attr("data-placeholder",d?"":e.longLengthValidationMessage)):"file"===l&&o.length<=0&&s&&(d=!1)),i.parents('[data-field-container-groupId ="'+e.groupId+'"]').data("valid",d),d?(i.removeClass(u),x()):(i.addClass(u),p(!1)),d},y='[data-groupId="'+e.groupId+'"][type="hidden"][data-formType="file"],[data-groupId="'+e.groupId+'"][type="text"], [data-groupId="'+e.groupId+'"][type="email"], textarea[data-groupId="'+e.groupId+'"], [data-groupId="'+e.groupId+'"][type="radio"], [data-groupId="'+e.groupId+'"][type="checkbox"], select[data-groupId="'+e.groupId+'"][data-formtype="dropdown"]',w=a?a.find(y):t(y),x=function(){for(var a=!0,r=0,n=w.length;n>r;r++)if(!t(w[r]).parents('[data-field-container-groupId ="'+e.groupId+'"]').data("valid")){p(!1),a=!1;break}return a&&p(!0),a},M=function(){for(var e=!0,t=0,a=w.length;a>t;t++)b(w[t])||(p(!1),e=!1);return e},k=function(){t.each(w,function(a,r){var n=t(r).attr("data-formType");if("date"===n)t(r).parents('[data-field-container-groupId ="'+e.groupId+'"]').data("valid",!0);else{var d=Boolean(t(r).attr("required"));t(r).parents('[data-field-container-groupId ="'+e.groupId+'"]').data("valid",!d)}});{var r='[data-groupId="'+e.groupId+'"][type="text"], [data-groupId="'+e.groupId+'"][type="email"], textarea[data-groupId="'+e.groupId+'"]';a?a.find(r):t(r)}t(r).on("keyup paste",function(e){("keyup"!==e.type||9!==e.which)&&b(this)}).on("blur",function(){var e=b(this);if(!e){var a=t(this),r=a.attr("data-placeholder");r&&""!=r&&(a.attr("data-value",a.attr("value")||""),a.attr("placeholder",r),a.attr("value",""))}}).on("focus",function(){var e=t(this),a=e.attr("data-value");a&&e.attr("value",a)});var n='[data-groupId="'+e.groupId+'"][type="radio"],[data-groupId="'+e.groupId+'"][type="checkbox"]',d=a?a.find(n):t(n);t(d).on("change focusin focusout",function(){b(this)});var i='select[data-groupId="'+e.groupId+'"][data-formtype="dropdown"]',o=a?a.find(i):t(i);t(o).on("change focusin focusout",function(){b(this)});var l='[data-groupId="'+e.groupId+'"][type="hidden"][data-formType=file]',u=a?a.find(l):t(l);t(u).on("change",function(){b(this)})},T=function(){var r=0,n='div[data-label-container-groupId="'+e.groupId+'"]',d='div[data-field-container-groupId="'+e.groupId+'"]',i=a?a.find(n):t(n),o=a?a.find(d):t(d),l=i.addClass(e.labelCssClass),u=o.addClass(e.fieldCssClass);if("1"===e.labelOrientation){t.each(l,function(e,a){var n=t(a).width();r=Math.max(r,n)});var s=t(l[0]).parent().parent().width()-r-12;t.each(l,function(e,a){t(a).width(r)}),t.each(u,function(e,a){t(a).width(s)})}},j=function(){var r='[data-field-container-groupId="'+e.groupId+'"]',n=a?a.find(r):t(r);t.each(n.find("[data-content]"),function(e,a){var r=t(a).attr("data-content");r&&t(a).sfTipper({style:"qt",content:r,target:t(a)})})},q=function(){var r='[data-field-container-groupId ="'+e.groupId+'"]',n=a?a.find(r):t(r),d=n.find('[data-datetime-type="date"]');if(d&&d.length){var i=new Date,o=[i.getMonth()+1,i.getDate(),i.getFullYear()].join("/");t.each(t(d),function(e,a){t(a).attr("value",o).sfDatePicker({onChange:function(e){b(e)}})})}};t(document).ready(function(){var r='[data-aid="submit-'+e.elementId+"-"+e.renderMode+'"]',n="#"+e.messageBoxId;i=a?a.find(r):t(r),i.click(d),p(!1),o=a?a.find(n):t(n),T(),v(),I(),k(),j(),q()})})}function t(e){require(["jquery","wsbcore/upload"],function(t){var r,n,d=e.domainName,i=window.location.href,o='[data-aid="uploader-'+e.elementId+'"]',l='[data-aid="uploaded-file-'+e.elementId+'"]',u='[data-aid="file-'+e.elementId+'"]',s="#uploader-"+e.elementId+"-file-size-error-message",p=a?a.find(o):t(o),f=a?a.find(l):t(l),c=a?a.find(u):t(u),g=a?a.find(s):t(s),h=function(){setTimeout(function(){p.find(".sf-upload-btns").width(100).height(n),p.find(".sf-upload-status").empty().text(e.fileDisplayText),p.find(".sf-upload-scroller").hide()},1)},m=function(){c.val("").trigger("change"),f.empty()},v=function(){p.hide(),f.show()},I=function(){p.show(),f.hide()};p.sfUpload({ddEnabled:!1,expectData:!0,condensed:!0,multiFile:!1,maxFileSize:10485760,uploadPath:e.uploadUrl+"?domainName="+d+"&elementID="+e.elementId+"&pageUrl="+encodeURIComponent(i),onUpload:function(e,t,a){a(t)},onSuccess:function(a,r,n){var d,i;n&&("string"==typeof n&&(n=JSON.parse(n)),n&&"object"==typeof n&&(d=n.url,i=n.filename)),d&&(c.val(d).trigger("change"),f.empty().append(t("<a/>").attr("href",d).append(i||e.fileUploadSuccessMessage)).append("&nbsp;&nbsp;").append(t('<a href="javascript:void(0)"></a>').addClass("delete-file-btn").attr("title",e.deleteLinkText).click(function(){I(),m()}))),v()},onStart:function(e,t){if(g.hide(),e&&e.length){var a=p.find(".sf-upload-btns");a.width()>0&&(r=a.width()),a.height()>0&&(n=a.height()),p.find(".sf-upload-btns").width(0).height(0),p.find(".sf-upload-scroller").show(),p.find(".sf-upload-header").hide()}t&&t.length&&g.show()},onError:function(){h(),g.show()},onFinish:function(){h()},txt:{select:e.uploadButtonText,upload:"",intro:e.uploadButtonPrompt,introWithDrop:"",introMaxItems:"",statusPending:"",statusUploading:"",statusFinished:"",pending:"",finished:"",uploading:""}})})}var a;return{initializeSubmitButton:e,initializeUploader:t,setDom:function(e){a=e}}});
//# sourceMappingURL=customForm.published.js.map