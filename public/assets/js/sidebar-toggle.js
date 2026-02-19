/**
 * Sidebar toggle type YouTube (desktop lg+ uniquement).
 * Bascule --sidebar-width entre 90px (collapsed) et 290px (expanded).
 * N'affecte pas le drawer mobile.
 */
(function () {
  'use strict';

  var STORAGE_KEY = 'sidebar-collapsed';
  var LG_BREAKPOINT = 1024;

  function isLg() {
    return window.matchMedia('(min-width: ' + LG_BREAKPOINT + 'px)').matches;
  }

  function setCollapsed(collapsed) {
    var body = document.body;
    var sidebar = document.getElementById('sidebar');
    if (!body || !sidebar) return;
    if (collapsed) {
      body.classList.add('sidebar-collapsed');
      sidebar.setAttribute('data-sidebar-collapsed', 'true');
    } else {
      body.classList.remove('sidebar-collapsed');
      sidebar.setAttribute('data-sidebar-collapsed', 'false');
    }
    try {
      localStorage.setItem(STORAGE_KEY, collapsed ? 'true' : 'false');
    } catch (e) {}
  }

  function toggle() {
    var collapsed = document.body.classList.toggle('sidebar-collapsed');
    var sidebar = document.getElementById('sidebar');
    if (sidebar) {
      sidebar.setAttribute('data-sidebar-collapsed', collapsed ? 'true' : 'false');
    }
    try {
      localStorage.setItem(STORAGE_KEY, collapsed ? 'true' : 'false');
    } catch (e) {}
  }

  function restore() {
    if (!isLg()) {
      document.body.classList.remove('sidebar-collapsed');
      var s = document.getElementById('sidebar');
      if (s) s.setAttribute('data-sidebar-collapsed', 'false');
      return;
    }
    try {
      var stored = localStorage.getItem(STORAGE_KEY);
      if (stored === 'true') setCollapsed(true);
      else if (stored === 'false') setCollapsed(false);
    } catch (e) {}
  }

  function onResize() {
    if (!isLg()) {
      document.body.classList.remove('sidebar-collapsed');
      var s = document.getElementById('sidebar');
      if (s) s.setAttribute('data-sidebar-collapsed', 'false');
    } else {
      restore();
    }
  }

  function init() {
    restore();
    var btn = document.querySelector('[data-sidebar-toggle]');
    if (btn) {
      btn.addEventListener('click', function () {
        if (!isLg()) return;
        toggle();
      });
    }
    window.addEventListener('resize', onResize);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
