/**
 * javascript functionality for the arctic template
 * copies the mothod for dokuwikis TOC functionality
 * in order to keep the template XHTML valid
 */

/**
 * Adds the toggle switch to the TOC
 */
function addSbTocToggle() {
    if(!document.getElementById) return;
    var header = $('sb__toc__header');
    if(!header) return;

    var obj          = document.createElement('span');
    obj.id           = 'sb__toc__toggle';
    obj.innerHTML    = '<span>&minus;</span>';
    obj.className    = 'toc_close';
    obj.style.cursor = 'pointer';

    prependChild(header,obj);
    obj.parentNode.onclick = toggleSbToc;
    try {
       obj.parentNode.style.cursor = 'pointer';
       obj.parentNode.style.cursor = 'hand';
    }catch(e){}
}

/**
 * This toggles the visibility of the Table of Contents
 */
function toggleSbToc() {
  var toc = $('sb__toc__inside');
  var obj = $('sb__toc__toggle');
  if(toc.style.display == 'none') {
    toc.style.display   = '';
    obj.innerHTML       = '<span>&minus;</span>';
    obj.className       = 'toc_close';
  } else {
    toc.style.display   = 'none';
    obj.innerHTML       = '<span>+</span>';
    obj.className       = 'toc_open';
  }
}

addInitEvent(addSbTocToggle);
