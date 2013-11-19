<?php

function wl_get_base_domain() {
  $components = explode('.', $_SERVER['HTTP_HOST']);
  $ext = array_pop($components);
  $domain = array_pop($components);
  return $domain . '.' . $ext;
}