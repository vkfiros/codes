// International number input for forms

add_filter( "um_mobile_number_form_edit_field", "um_mobile_number_form_edit_field_tel", 10, 2 );
add_filter( "um_phone_number_form_edit_field", "um_mobile_number_form_edit_field_tel", 10, 2 );
    
    function um_mobile_number_form_edit_field_tel( $output, $set_mode ) {

        if( $set_mode == 'register' || $set_mode == 'profile'  ) {
            $output = str_replace( 'type="text"', 'type="tel"', $output );
        }
        return $output;
    }


add_filter( 'um_view_field_value_text', 'my_custom_view_field_value', 10, 2 );

function my_custom_view_field_value( $res, $data ) {
	
	if( $data['metakey'] == 'phone_number' || $data['metakey'] == 'mobile_number' ) {
        if( !empty( $res )) {
            $res = '<a href="tel:' . str_replace( array( '(', ')', '.', '-', ' ' ), '', $res ) . '">' . $res . '</a>';
        }
	}
	return $res;
}
