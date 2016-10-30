function wrapIt (el) {
  var wrapper = document.createElement('div');
  wrapper.className = "responsive-video";
  el.parentNode.insertBefore(wrapper, el);
  wrapper.appendChild(el);
}

(function () {
  var els = document.querySelectorAll('iframe');
  var elsLength = els.length;
  for (var i = 0; i < elsLength; i++) {
    wrapIt(els[i])
  }
})();