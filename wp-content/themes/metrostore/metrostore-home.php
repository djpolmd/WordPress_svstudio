<?php

get_header();

  if (is_active_sidebar('metrostore_homepage')) {
      dynamic_sidebar('metrostore_homepage');
  }

get_footer();