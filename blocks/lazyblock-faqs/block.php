<?php

/**
 * The template for displaying the FAQs Block
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */
$context = Timber::context();

$context['faqs'] = $attributes;
Timber::render('faqs.twig', $context);
