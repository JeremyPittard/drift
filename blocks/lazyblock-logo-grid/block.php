<?php

/**
 * The template for displaying the Logo Grid Block
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */
$context = Timber::context();

$context['logos'] = $attributes;
Timber::render('logo-grid.twig', $context);
