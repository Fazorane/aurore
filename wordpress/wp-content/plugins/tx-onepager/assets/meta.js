!function(e){function t(e){return e&&("onepage.php"===e||0===e.indexOf("onepager-"))}function o(t,o){var a={action:"onepager_get_sections",pageId:t};o=o||"template-"+t;var i=o+".jpg";e.post(ajaxurl,a,function(e){e.success?n({name:o,screenshot:i,sections:e.sections}):alert("oops!! onepager could not export this page")})}function n(e){var t="data:text/json;charset=utf-8,"+encodeURIComponent(JSON.stringify(e,null,2)),o=document.getElementById("downloadAnchorElem");o.setAttribute("href",t),o.setAttribute("download",e.name+".json"),o.click()}function a(e,t){var o={action:"onepager_select_layout",layoutId:t,pageId:e};r(o)}function i(){var t={action:"onepager_get_sections",pageId:onepager.pageId},o={action:"onepager_save_sections",updated:null,pageId:onepager.pageId,sections:[]};e.post(ajaxurl,t,function(e){if(e&&e.success&&0!==e.sections.length){var t="Are you sure you want to insert this layout?This layout will replace your current layout!",n=confirm(t);if(!n)return;r(o)}else r(o)})}function r(t){e.post(ajaxurl,t,function(e){e&&e.success?location.href=onepager.buildModeUrl:alert("failed to insert layout ")})}e(function(e){function n(){f.val("onepage.php"),f.trigger("change"),I.click()}function r(){f.val("default"),f.trigger("change")}function c(){var t="Are you sure you want to insert this layout?This layout will replace your current layout!",o=e(this).attr("data-layout-id"),n=confirm(t);n&&a(l,o)}function s(e){o(l,"template"),e.preventDefault()}function u(){var o=e(this).val();setTimeout(function(){t(o)?(h.hide(),p.hide(),g.show(),b.show()):(h.show(),p.show(),g.hide(),b.hide())},10)}var l=onepager.pageId,p=e('<button type="button" id="enable-onepager" class="op-btn op-btn-with-logo">Enable Onepager</button>'),g=e('<button type="button" id="disable-onepager" class="op-btn op-btn-with-logo">Disable Onepager</button>'),d=e(".op-select-preset"),h=e("#postdivrich"),f=e("#page_template"),y=e("#onepager-export-layout"),b=e("#onepager_meta"),v=e("#blank-template"),m=e("#op-group-filter select"),w=e("#op-presets>.media"),I=e("#publish");window.exportSections=function(e,t){t=t||l,o(t,e)},m.on("change",function(){var t=e(this).val();w.hide(),e(t).show()}),y.on("click",s),f.on("change",u),d.on("click",c),v.on("click",i),p.on("click",n),g.on("click",r),f.trigger("change"),h.before(p),h.before(g)})}(jQuery);