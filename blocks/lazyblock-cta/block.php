<?php

/**
 * The template for displaying the CTA Block
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */
$context = Timber::context();

$context['cta'] = $attributes;
Timber::render('cta.twig', $context);
