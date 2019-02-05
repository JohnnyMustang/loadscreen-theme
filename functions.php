<?php

  require 'functions/helpers.php';
  require 'functions/setup.php';
  require 'functions/discourse.php';
  require 'functions/generics.php';
  require 'functions/components.php';
  require 'functions/post_blocks.php';
  require 'functions/user_blocks.php';
  
  require 'functions/pokedex/helpers.php';
  require 'functions/pokedex/setup.php';
  require 'functions/pokedex/pagination.php';
  require 'functions/pokedex/dex_blocks.php';
  require 'functions/pokedex/evolution.php';

  @ini_set('upload_max_size' , '64M');
  @ini_set('post_max_size' , '64M');
  @ini_set('max_execution_time' , '300');

?>
