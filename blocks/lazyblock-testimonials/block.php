<?php

/**
 * The template for displaying the Testimonials Block
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */
$context = Timber::context();

$context['testimonials'] = $attributes;
Timber::render('testimonials.twig', $context);
