<?php
class noneCache extends Cache {
  var $content = array();
  
  function page_fast_cache() {
    return FALSE;
  }
  
  function get() {
    return 0; // we never find it!
  }
  
  function set() {
    // no op
  }
  
  function delete() {
    // no op
  }

  function flush() {
    // no op
  }
  
  function gc() {
    // no op
  }
}
