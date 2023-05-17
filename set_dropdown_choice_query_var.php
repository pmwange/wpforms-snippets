function wpf_dev_field_data( $field, $form_data ) {
 
    if ( absint( $form_data['id'] ) !== 15813 || absint( $field['id'] ) !==7 ) {
        return $field;
    }	
	$default_field_value = 'Second Choice';	
	 if ( isset( $_GET['office-location'] ) ) {
    $default_field_value = $_GET['office-location'];
  }
	foreach( $field['choices'] as $key => $choice ) {
		if( $choice['label'] === $default_field_value ) {
			$field['choices'][$key]['default'] = true;
			break;
		}
	}
 
    return $field;
 
}
add_filter( 'wpforms_field_data', 'wpf_dev_field_data', 10, 2 );
