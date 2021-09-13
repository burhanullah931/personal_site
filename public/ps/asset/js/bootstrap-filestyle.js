!function(t){"use strict";var e=0,i=function(e,i){this.options=i,this.$elementFilestyle=[],this.$element=t(e)};i.prototype={clear:function(){this.$element.val(""),this.$elementFilestyle.find(":text").val(""),this.$elementFilestyle.find(".badge").remove()},destroy:function(){this.$element.removeAttr("style").removeData("filestyle"),this.$elementFilestyle.remove()},disabled:function(t){if(!0===t)this.options.disabled||(this.$element.attr("disabled","true"),this.$elementFilestyle.find("label").attr("disabled","true"),this.options.disabled=!0);else{if(!1!==t)return this.options.disabled;this.options.disabled&&(this.$element.removeAttr("disabled"),this.$elementFilestyle.find("label").removeAttr("disabled"),this.options.disabled=!1)}},buttonBefore:function(t){if(!0===t)this.options.buttonBefore||(this.options.buttonBefore=!0,this.options.input&&(this.$elementFilestyle.remove(),this.constructor(),this.pushNameFiles()));else{if(!1!==t)return this.options.buttonBefore;this.options.buttonBefore&&(this.options.buttonBefore=!1,this.options.input&&(this.$elementFilestyle.remove(),this.constructor(),this.pushNameFiles()))}},icon:function(t){if(!0===t)this.options.icon||(this.options.icon=!0,this.$elementFilestyle.find("label").prepend(this.htmlIcon()));else{if(!1!==t)return this.options.icon;this.options.icon&&(this.options.icon=!1,this.$elementFilestyle.find(".icon-span-filestyle").remove())}},input:function(t){if(!0===t)this.options.input||(this.options.input=!0,this.options.buttonBefore?this.$elementFilestyle.append(this.htmlInput()):this.$elementFilestyle.prepend(this.htmlInput()),this.$elementFilestyle.find(".badge").remove(),this.pushNameFiles(),this.$elementFilestyle.find(".group-span-filestyle").addClass("input-group-btn"));else{if(!1!==t)return this.options.input;if(this.options.input){this.options.input=!1,this.$elementFilestyle.find(":text").remove();var e=this.pushNameFiles();e.length>0&&this.options.badge&&this.$elementFilestyle.find("label").append(' <span class="badge">'+e.length+"</span>"),this.$elementFilestyle.find(".group-span-filestyle").removeClass("input-group-btn")}}},size:function(t){if(void 0===t)return this.options.size;var e=this.$elementFilestyle.find("label"),i=this.$elementFilestyle.find("input");e.removeClass("btn-lg btn-sm"),i.removeClass("input-lg input-sm"),"nr"!=t&&(e.addClass("btn-"+t),i.addClass("input-"+t))},placeholder:function(t){if(void 0===t)return this.options.placeholder;this.options.placeholder=t,this.$elementFilestyle.find("input").attr("placeholder",t)},buttonText:function(t){if(void 0===t)return this.options.buttonText;this.options.buttonText=t,this.$elementFilestyle.find("label .buttonText").html(this.options.buttonText)},buttonName:function(t){if(void 0===t)return this.options.buttonName;this.options.buttonName=t,this.$elementFilestyle.find("label").attr({class:"btn "+this.options.buttonName})},iconName:function(t){if(void 0===t)return this.options.iconName;this.$elementFilestyle.find(".icon-span-filestyle").attr({class:"icon-span-filestyle "+this.options.iconName})},htmlIcon:function(){return this.options.icon?'<span style="margin-right: 3px;" class="icon-span-filestyle '+this.options.iconName+'"></span> ':""},htmlInput:function(){return this.options.input?'<input type="text" class="form-control '+("nr"==this.options.size?"":"input-"+this.options.size)+'" placeholder="'+this.options.placeholder+'" disabled> ':""},pushNameFiles:function(){var t="",e=[];void 0===this.$element[0].files?e[0]={name:this.$element[0]&&this.$element[0].value}:e=this.$element[0].files;for(var i=0;i<e.length;i++)t+=e[i].name.split("\\").pop()+", ";return""!==t?this.$elementFilestyle.find(":text").val(t.replace(/\, $/g,"")):this.$elementFilestyle.find(":text").val(""),e},constructor:function(){var i,n,s=this,l=s.$element.attr("id");""!==l&&l||(l="filestyle-"+e,s.$element.attr({id:l}),e++),n='<span class="group-span-filestyle '+(s.options.input?"input-group-btn":"")+'"><label for="'+l+'" class="btn '+s.options.buttonName+" "+("nr"==s.options.size?"":"btn-"+s.options.size)+'" '+(s.options.disabled||s.$element.attr("disabled")?'disabled="true"':"")+">"+s.htmlIcon()+'<span class="buttonText">'+s.options.buttonText+"</span></label></span>",i=s.options.buttonBefore?n+s.htmlInput():s.htmlInput()+n,s.$elementFilestyle=t('<div class="bootstrap-filestyle input-group">'+i+"</div>"),s.$elementFilestyle.find(".group-span-filestyle").attr("tabindex","0").keypress(function(t){if(13===t.keyCode||32===t.charCode)return s.$elementFilestyle.find("label").click(),!1}),s.$element.css({position:"absolute",clip:"rect(0px 0px 0px 0px)"}).attr("tabindex","-1").after(s.$elementFilestyle),(s.options.disabled||s.$element.attr("disabled"))&&s.$element.attr("disabled","true"),s.$element.change(function(){var t=s.pushNameFiles();0==s.options.input&&s.options.badge?0==s.$elementFilestyle.find(".badge").length?s.$elementFilestyle.find("label").append(' <span class="badge">'+t.length+"</span>"):0==t.length?s.$elementFilestyle.find(".badge").remove():s.$elementFilestyle.find(".badge").html(t.length):s.$elementFilestyle.find(".badge").remove()}),window.navigator.userAgent.search(/firefox/i)>-1&&s.$elementFilestyle.find("label").click(function(){return s.$element.click(),!1})}};var n=t.fn.filestyle;t.fn.filestyle=function(e,n){var s="",l=this.each(function(){if("file"===t(this).attr("type")){var l=t(this),o=l.data("filestyle"),a=t.extend({},t.fn.filestyle.defaults,e,"object"==typeof e&&e);o||(l.data("filestyle",o=new i(this,a)),o.constructor()),"string"==typeof e&&(s=o[e](n))}});return void 0!==typeof s?s:l},t.fn.filestyle.defaults={buttonText:"Choose file",iconName:"glyphicon glyphicon-folder-open",buttonName:"btn-default",size:"nr",input:!0,badge:!0,icon:!0,buttonBefore:!1,disabled:!1,placeholder:""},t.fn.filestyle.noConflict=function(){return t.fn.filestyle=n,this},t(function(){t(".filestyle").each(function(){var e=t(this),i={input:"false"!==e.attr("data-input"),icon:"false"!==e.attr("data-icon"),buttonBefore:"true"===e.attr("data-buttonBefore"),disabled:"true"===e.attr("data-disabled"),size:e.attr("data-size"),buttonText:e.attr("data-buttonText"),buttonName:e.attr("data-buttonName"),iconName:e.attr("data-iconName"),badge:"false"!==e.attr("data-badge"),placeholder:e.attr("data-placeholder")};e.filestyle(i)})})}(window.jQuery);