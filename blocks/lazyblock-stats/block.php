<?php

/**
 * The template for displaying the Stats Block
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */
$context = Timber::context();

$context['stats'] = $attributes;
Timber::render('stats.twig', $context);
