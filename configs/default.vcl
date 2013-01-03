backend default {
    .host = "127.0.0.1";
    .port = "8080";
    .connect_timeout = 600s;
    .first_byte_timeout = 600s;
    .between_bytes_timeout = 600s;
}

sub vcl_recv {
  if (req.request == "GET" && req.url ~ "^/sites/") {
    # we only ever want to deal with GET requests, we are working
    # on the assumption that everything in sites is served the same
    # to all users so we don't want the cookie */
    unset req.http.cookie;
    return(lookup);
  }
  elsif (req.request == "GET" && req.http.Cookie !~ "DRUPAL_VARNISH") {
    # this site has drupal_set_messages and importantly changing content
    # for anon users only on  /user page */
    # It was tempting to unset.http.cookie; here but it's needed to
    # stop users who log out getting the last page they saw logged in */
    return(lookup);
  }
}

sub vcl_fetch {
  if (req.request == "GET" && req.url ~ "^/sites/") {
    # we can unset the Cookie Drupal adds, set a lifetime for the object
    # and make it cacheable */
    unset beresp.http.Set-Cookie;
  }
  elsif (req.request == "GET" && req.http.cookie !~ "DRUPAL_VARNISH") {
    if (req.url !~ "(/[a-zA-Z]{2})?/user" && req.url !~ "(/[a-zA-Z]{2})?/admin") {
      # We don't want the ttl so long on these pages, so we must set
      # it in the different if blocks rather than cacheable here */
      set beresp.ttl = 2d;
      unset beresp.http.Set-Cookie;
      if (req.url !~ "^[a-zA-Z]{2}/") {
        # make sure that language is taken into account on caching pages
        # without a langage code in the url, and make sure that caches
        # know if there is a cookie with the page it's not to use the
        # cached one */
        set beresp.http.Vary = "Accept-Language, Cookie";
      }
      else {
        set beresp.http.Vary = "Cookie";
      }
    }
  }
}
