add_filter( 'wpcf7_recaptcha_threshold', function( $threshold ) {

    $submission = WPCF7_Submission::get_instance();

    if ( ! $submission ) {
        return $threshold;
    }

    $form = $submission->get_contact_form();

    if ( ! $form ) {
        return $threshold;
    }

    // Cambia 1234 por el id del formulario de Contact Form 7
    if ( 1234 === $form->id() ) {
		// Cambia 0.25 por la puntuacion del 0 al 1 que desees
        return 0.25;
    }

    return $threshold;

} );