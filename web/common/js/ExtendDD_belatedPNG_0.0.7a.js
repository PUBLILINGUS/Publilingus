

/* DEBUT _ Ajout du rollover sur la balise button mais pas sur ses enfants */

DD_belatedPNG.attachHandlers = function(el) {
  var self = this;
  var handlers = {resize: 'vmlOffsets', move: 'vmlOffsets'};
  if (el.nodeName == 'A') {
    var moreForAs = {mouseleave: 'handlePseudoHover', mouseenter: 'handlePseudoHover', focus: 'handlePseudoHover', blur: 'handlePseudoHover'};
    for (var a in moreForAs) {
      handlers[a] = moreForAs[a];
    }
  }
  if (el.nodeName == 'BUTTON') {
    var moreForBUTTONs = {mouseleave: 'handlePseudoHover', mouseenter: 'handlePseudoHover', focus: 'handlePseudoHover', blur: 'handlePseudoHover'};
    for (var BUTTON in moreForBUTTONs) {
      handlers[BUTTON] = moreForBUTTONs[BUTTON];
    }
  }
  for (var h in handlers) {
    el.attachEvent('on' + h, function() {
      self[handlers[h]](el);
    });
  }
  el.attachEvent('onpropertychange', this.readPropertyChange);
};

DD_belatedPNG.createVmlNameSpace = function() { /* enable VML */
  if (document.namespaces && !document.namespaces[this.ns]) {
    document.namespaces.add(this.ns, 'urn:schemas-microsoft-com:vml');
  }
}