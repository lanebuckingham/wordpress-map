Need to:

# Checkout Page:

    - Write code to perform a geocoding request when a user creates a new shipping address
    - Write code to store geocoding data in our WordPress database (custom table or custom post type?)

## Here's an example of retrieving order data from a WooCommerce database:

    <?php 
    global $woocommerce;
    $order = new WC_Order($order_id);
    $order_shipping_total = $order->get_shipping();
    echo $order_shipping_total;
    ?>

## Here's another:

    $args = array(
      'post_type' => 'shop_order',
      'post_status' => 'publish',
      'meta_key' => '_customer_user',
      'posts_per_page' => '-1'
    );
    $my_query = new WP_Query($args);

    $customer_orders = $my_query->posts;

    foreach ($customer_orders as $customer_order) {
     $order = new WC_Order();

     $order->populate($customer_order);
     $orderdata = (array) $order;

     // $orderdata Array will have Information. for e.g Shippin firstname, Lastname, Address ... and MUCH more.... Just enjoy!
    }

# Map Page:

    - Get the geocodes from the database
    - Turn them into Google markers
    - Load up the Google Marker Clusterer V3 with the markers

