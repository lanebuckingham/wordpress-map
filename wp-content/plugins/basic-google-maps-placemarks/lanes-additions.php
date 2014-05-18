<?php

/*
 * Add a custom post type to store the geo codes of customer shipping addresses
   Ended up not having to do this because the 'Basic Google Maps Placemarks' 
   plugin already created a custom post type called 'bgmp'

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'geo_code',
    array(
      'labels' => array(
        'name' => __( 'GeoCodes' ),
        'singular_name' => __( 'GeoCode' )
      ),
    'public' => true,
    'has_archive' => true,
    )
  );
}
*/

/*
 * Get geo codes for a customer shipping address when their order is completed
 * The special GeoCode post type is registered above, search:  create_post_type
 */
function my_function($order_id) {
  
  // Get the order
  $order = new WC_Order( $order_id );

  // Get the geo code for the order zip code via request to google's geocoding service
  $lat = 0.0;
  $lng = 0.0;
  $response = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?components=postal_code:$order->shipping_postcode&sensor=false&key=AIzaSyB6uJDp6hUSpuxe1gaEVIngd1dKXiM9cxU"), true);
  if (count($response) > 0 && count($response['results']) > 0)
  {
    $lat = $response['results'][0]['geometry']['location']['lat'];
    $lng = $response['results'][0]['geometry']['location']['lng'];
  }

  // Save geo code to db as a new custom post
  $coord = "$lat,$lng";
  $post_data = array(
    'post_title'    => $order->shipping_postcode,
    'post_content'  => $coord,
    'post_type'     => "bgmp",
    'post_status'   => "publish"
  );
  $error_obj = "";
  $post_id = wp_insert_post( $post_data );
  add_post_meta( $post_id, 'bgmp_address', $coord );
  add_post_meta( $post_id, 'bgmp_latitude', $lat );
  add_post_meta( $post_id, 'bgmp_longitude', $lng );  
}

add_action( 'woocommerce_thankyou', 'my_function' );

?>