Need to:

  Open up all your bookmarks in Dev

# Checkout Page:

    * Write code to perform a geocoding request when a user creates a 
        new shipping address
    * Write code to store geocoding data in our WordPress database 
        (custom table or custom post type?)

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

     // $orderdata Array will have Information. 
     // ex: Shipping firstname, Lastname, Address ... etc ...
    }

# Map Page:

  ## Make a WordPress plugin that will accomplish the following:
    * Get the geocodes from the database
    * Turn them into Google markers
    * Load up the Google Marker Clusterer V3 with the markers

# Matt says: 

    * Learn all about how to make WordPress plugins.  This is your area 
        of development / expertise on this project.
    * Learn how to make an admin setup screen for your plugin(s), 
        that will get added to the left menu in WordPress Admin for the site.