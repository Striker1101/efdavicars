@extends('layouts.app')

@section('title', 'Home')

@section('head')

    <head>
    </head>
@endsection


@section('content')


    <div class="post_content entry-content">
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                // Generate a unique hash key for localStorage
                var hash_key = tinvwl_add_to_wishlist.hash_key + '_refresh';

                if (localStorage.getItem(hash_key) && '70f247' === localStorage.getItem(hash_key)) {
                    localStorage.setItem(hash_key, '');
                }

                // Refresh the wishlist when storage changes in another tab
                $(window).on('storage', function(e) {
                    if (
                        e.originalEvent.key === hash_key &&
                        '70f247' === e.originalEvent.newValue
                    ) {
                        // Call the function to refresh the wishlist data
                        $.fn.tinvwl_get_wishlist_data('refresh');
                    }
                });
            });
        </script>
        <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
            <div class="tinv-header">
                <h2>Default wishlist</h2>
            </div>
            <form action="https://greeny.axiomthemes.com/wishlist-page/70f247/" method="post" autocomplete="off"
                data-tinvwl_paged="1" data-tinvwl_per_page="10" data-tinvwl_sharekey="70f247">
                <table class="tinvwl-table-manage-list">
                    <thead>
                        <tr>
                            <th class="product-cb"><input type="checkbox" class="global-cb input-checkbox"
                                    title="Select all for bulk action">
                            </th>
                            <th class="product-remove"></th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name"><span class="tinvwl-full">Product Name</span><span
                                    class="tinvwl-mobile">Product</span>
                            </th>
                            <th class="product-price">Unit Price</th>
                            <th class="product-stock">Stock Status</th>
                            <th class="product-action">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="wishlist_item">
                            <td class="product-cb">
                                <input type="checkbox" name="wishlist_pr[]" class="input-checkbox" value="55"
                                    title="Select for bulk action">
                            </td>
                            <td class="product-remove">
                                <button type="submit" name="tinvwl-remove" value="55" title="Remove"><i
                                        class="ftinvwl ftinvwl-times"></i>
                                </button>
                            </td>
                            <td class="product-thumbnail">
                                <a href="https://greeny.axiomthemes.com/product/car-model-b/?tiwp=55"><img loading="lazy"
                                        decoding="async" width="630" height="630"
                                        src="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-630x630.jpg"
                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                        srcset="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-630x630.jpg 630w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-300x300.jpg 300w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-1024x1024.jpg 1024w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-150x150.jpg 150w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-768x768.jpg 768w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-370x370.jpg 370w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-120x120.jpg 120w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-840x840.jpg 840w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-410x410.jpg 410w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-600x600.jpg 600w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1.jpg 1200w"
                                        sizes="(max-width: 630px) 100vw, 630px" /></a>
                            </td>
                            <td class="product-name">
                                <a href="https://greeny.axiomthemes.com/product/car-model-b/?tiwp=55">Car Model B</a>
                            </td>
                            <td class="product-price">
                                <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">&#36;</span>45,000.00</bdi></span></del>
                                <span class="screen-reader-text">Original price was: &#036;45,000.00.</span><ins
                                    aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">&#36;</span>43,000.00</bdi></span></ins><span
                                    class="screen-reader-text">Current price is: &#036;43,000.00.</span>
                            </td>
                            <td class="product-stock">
                                <p class="stock in-stock"><span><i class="ftinvwl ftinvwl-check"></i></span><span
                                        class="tinvwl-txt">In stock</span></p>
                            </td>
                            <td class="product-action">
                                <button class="button alt" name="tinvwl-add-to-cart" value="55" title="Add to Cart">
                                    <i class="ftinvwl ftinvwl-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="wishlist_item">
                            <td class="product-cb">
                                <input type="checkbox" name="wishlist_pr[]" class="input-checkbox" value="54"
                                    title="Select for bulk action">
                            </td>
                            <td class="product-remove">
                                <button type="submit" name="tinvwl-remove" value="54" title="Remove"><i
                                        class="ftinvwl ftinvwl-times"></i>
                                </button>
                            </td>
                            <td class="product-thumbnail">
                                <a href="https://greeny.axiomthemes.com/product/car-model-a/?tiwp=54"><img loading="lazy"
                                        decoding="async" width="630" height="630"
                                        src="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-630x630.jpg"
                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""
                                        srcset="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-630x630.jpg 630w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-300x300.jpg 300w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-1024x1024.jpg 1024w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-150x150.jpg 150w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-768x768.jpg 768w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-370x370.jpg 370w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-120x120.jpg 120w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-840x840.jpg 840w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-410x410.jpg 410w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-600x600.jpg 600w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3.jpg 1200w"
                                        sizes="(max-width: 630px) 100vw, 630px" /></a>
                            </td>
                            <td class="product-name">
                                <a href="https://greeny.axiomthemes.com/product/car-model-a/?tiwp=54">Car Model A</a>
                            </td>
                            <td class="product-price">
                                <span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">&#36;</span>40,000.00</bdi></span>
                            </td>
                            <td class="product-stock">
                                <p class="stock in-stock"><span><i class="ftinvwl ftinvwl-check"></i></span><span
                                        class="tinvwl-txt">In stock</span></p>
                            </td>
                            <td class="product-action">
                                <button class="button alt" name="tinvwl-add-to-cart" value="54" title="Add to Cart">
                                    <i class="ftinvwl ftinvwl-shopping-cart"></i><span class="tinvwl-txt">Add to
                                        Cart</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="100">
                                <div class="tinvwl-to-left look_in">
                                    <div class="tinvwl-input-group tinvwl-no-full"><input type="hidden"
                                            name="lists_per_page" value="10" id="tinvwl_lists_per_page" /><select
                                            name="product_actions" id="tinvwl_product_actions"
                                            class="tinvwl-break-input-filed form-control">
                                            <option value="" selected="selected">Actions</option>
                                            <option value="add_to_cart_selected">Add to Cart</option>
                                            <option value="remove_selected">Remove</option>
                                        </select><span class="tinvwl-input-group-btn"><button type="submit"
                                                class="button" name="tinvwl-action-product_apply" value="product_apply"
                                                title="Apply Action">Apply <span
                                                    class='tinvwl-mobile'>Action</span></button></div>
                                </div>
                                <div class="tinvwl-to-right look_in"><button type="submit" class="button"
                                        name="tinvwl-action-product_selected" value="product_selected"
                                        title="Add Selected to Cart">Add Selected to Cart</button><button type="submit"
                                        class="button" name="tinvwl-action-product_all" value="product_all"
                                        title="Add All to Cart">Add All to Cart</button></div>
        </div> <input type="hidden" id="wishlist_nonce" name="wishlist_nonce" value="520857a4ff" /><input
            type="hidden" name="_wp_http_referer" value="/wishlist-page/" /> </td>
        </tr>
        </tfoot>
        </table>
        </form>
        <div class="tinv-lists-nav tinv-wishlist-clear">
        </div>
    </div>

    </div><!-- .entry-content -->


    </article>
    </div>
    </div>

@endsection

@section('footer_scripts')
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = false;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up scroll_to_top_style_default"
        title="Scroll to top"></a>
    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/greeny\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }

            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();
    </script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>

















    <script type="text/javascript" src="https://greeny.axiomthemes.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.3"
        id="jquery-ui-datepicker-js"></script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        /* <![CDATA[ */
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "M d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
        /* ]]> */
    </script>



    <script type="text/javascript" id="booked-functions-js-extra">
        /* <![CDATA[ */
        var booked_js_vars = {
            "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "profilePage": "",
            "publicAppointments": "",
            "i18n_confirm_appt_edit": "Are you sure you want to change the appointment date? By doing so, the appointment date will need to be approved again.",
            "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
            "i18n_please_wait": "Please wait ...",
            "i18n_wrong_username_pass": "Wrong username\/password combination.",
            "i18n_fill_out_required_fields": "Please fill out all required fields.",
            "i18n_guest_appt_required_fields": "Please enter your name to book an appointment.",
            "i18n_appt_required_fields": "Please enter your name, your email address and choose a password to book an appointment.",
            "i18n_appt_required_fields_guest": "Please fill in all \"Information\" fields.",
            "i18n_password_reset": "Please check your email for instructions on resetting your password.",
            "i18n_password_reset_error": "That username or email is not recognized.",
            "nonce": "cf4d825910"
        };
        /* ]]> */
    </script>

    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/advanced-popups/public/js/advanced-popups-public.js?ver=1.2.1"
        id="advanced-popups-js"></script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js">
    </script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js">
    </script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>





    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js"
        id="magnific-popup-js"></script>
    <script type="text/javascript" id="trx_demo_panels-js-extra">
        /* <![CDATA[ */
        var TRX_DEMO_STORAGE = {
            "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "f28b62252f",
            "site_url": "https:\/\/greeny.axiomthemes.com",
            "user_logged_in": "0",
            "msg_ajax_error": "Invalid server response! Try again later.",
            "tabs_delay": "3000"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/js/trx_demo_panels.js" id="trx_demo_panels-js">
    </script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.3.5"
        id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/greeny.axiomthemes.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.3.5"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.3.5"
        id="js-cookie-js" data-wp-strategy=""></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.3.5"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="booked-fea-js-js-extra">
        /* <![CDATA[ */
        var booked_fea_vars = {
            "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
            "i18n_confirm_appt_approve": "Are you sure you want to approve this appointment?"
        };
        /* ]]> */
    </script>

    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_f408d0888c290ef52e2a0748d01f55a8",
            "fragment_name": "wc_fragments_f408d0888c290ef52e2a0748d01f55a8",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=9.3.5"
        id="wc-cart-fragments-js" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="tinvwl-js-extra">
        /* <![CDATA[ */
        var tinvwl_add_to_wishlist = {
            "text_create": "Create New",
            "text_already_in": "\"{product_name}\" already in Wishlist",
            "simple_flow": "1",
            "hide_zero_counter": "",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your wishlist.",
            "tinvwl_break_submit": "No items or actions are selected.",
            "tinvwl_clipboard": "Copied!",
            "allow_parent_variable": "",
            "block_ajax_wishlists_data": "",
            "update_wishlists_data": "",
            "hash_key": "ti_wishlist_data_f408d0888c290ef52e2a0748d01f55a8",
            "nonce": "8ed217f0d3",
            "rest_root": "https:\/\/greeny.axiomthemes.com\/wp-json\/",
            "plugin_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/ti-woocommerce-wishlist\/",
            "wc_ajax_url": "\/?wc-ajax=tinvwl",
            "stats": "",
            "popup_timer": "6000"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/ti-woocommerce-wishlist/assets/js/public.min.js?ver=2.9.2"
        id="tinvwl-js"></script>
    <script type="text/javascript" id="booked-wc-fe-functions-js-extra">
        /* <![CDATA[ */
        var booked_wc_variables = {
            "prefix": "booked_wc_",
            "ajaxurl": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "i18n_pay": "Are you sure you want to add the appointment to cart and go to checkout?",
            "i18n_mark_paid": "Are you sure you want to mark this appointment as \"Paid\"?",
            "i18n_paid": "Paid",
            "i18n_awaiting_payment": "Awaiting Payment",
            "checkout_page": "https:\/\/greeny.axiomthemes.com\/checkout\/",
            "nonce": "7cc0cfc61f"
        };
        /* ]]> */
    </script>

    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.3.5"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.3.5"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript" id="trx_addons-js-extra">
        /* <![CDATA[ */
        var TRX_ADDONS_STORAGE = {
            "admin_mode": "",
            "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "f28b62252f",
            "rest_url": "https:\/\/greeny.axiomthemes.com\/wp-json\/",
            "site_url": "https:\/\/greeny.axiomthemes.com",
            "plugin_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/trx_addons\/",
            "post_id": "6130",
            "vc_edit_mode": "",
            "is_preview": "",
            "is_preview_gb": "",
            "is_preview_elm": "",
            "no_image": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/trx_addons\/css\/images\/no-image.jpg",
            "popup_engine": "magnific",
            "scroll_progress": "hide",
            "hide_fixed_rows": "1",
            "smooth_scroll": "",
            "animate_inner_links": "1",
            "disable_animation_on_mobile": "",
            "add_target_blank": "0",
            "menu_collapse": "1",
            "menu_collapse_icon": "trx_addons_icon-ellipsis-vert",
            "menu_stretch": "1",
            "resize_tag_video": "",
            "resize_tag_iframe": "1",
            "allow_cookie_is_retina": "",
            "mediaplayer_icons_selector_allowed": "1",
            "user_logged_in": "",
            "theme_slug": "greeny",
            "theme_bg_color": "#E7F0F7",
            "theme_accent_color": "#A8C62E",
            "page_wrap_class": ".page_wrap",
            "header_wrap_class": ".top_panel",
            "footer_wrap_class": ".footer_wrap",
            "sidebar_wrap_class": ".sidebar",
            "columns_wrap_class": "trx_addons_columns_wrap",
            "columns_in_single_row_class": "columns_in_single_row",
            "column_class_template": "trx_addons_column-$1_$2",
            "loading_layout": "<div class=\"trx_addons_loading trx_addons_loading_style_default\"><\/div>",
            "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-zA-Z0-9_\\-]+(\\.[a-zA-Z0-9_\\-]+)*\\.[a-zA-Z0-9]{2,12}$",
            "mobile_breakpoint_fixedrows_off": "768",
            "mobile_breakpoint_fixedcolumns_off": "768",
            "mobile_breakpoint_stacksections_off": "768",
            "mobile_breakpoint_scroll_lag_off": "0",
            "mobile_breakpoint_fullheight_off": "1025",
            "mobile_breakpoint_mousehelper_off": "1025",
            "msg_caption_yes": "Yes",
            "msg_caption_no": "No",
            "msg_caption_ok": "OK",
            "msg_caption_accept": "Accept",
            "msg_caption_apply": "Apply",
            "msg_caption_cancel": "Cancel",
            "msg_caption_attention": "Attention!",
            "msg_caption_warning": "Warning!",
            "msg_ajax_error": "Invalid server answer!",
            "msg_magnific_loading": "Loading image",
            "msg_magnific_error": "Error loading image",
            "msg_magnific_close": "Close (Esc)",
            "msg_error_like": "Error saving your like! Please, try again later.",
            "msg_field_name_empty": "The name can't be empty",
            "msg_field_email_empty": "Too short (or empty) email address",
            "msg_field_email_not_valid": "Invalid email address",
            "msg_field_text_empty": "The message text can't be empty",
            "msg_search_error": "Search error! Try again later.",
            "msg_send_complete": "Send message complete!",
            "msg_send_error": "Transmit failed!",
            "msg_validation_error": "Error data validation!",
            "msg_name_empty": "The name can't be empty",
            "msg_name_long": "Too long name",
            "msg_email_empty": "Too short (or empty) email address",
            "msg_email_long": "E-mail address is too long",
            "msg_email_not_valid": "E-mail address is invalid",
            "msg_text_empty": "The message text can't be empty",
            "msg_copied": "Copied!",
            "ajax_views": "",
            "menu_cache": [".menu_mobile_inner nav > ul"],
            "login_via_ajax": "1",
            "double_opt_in_registration": "1",
            "msg_login_empty": "The Login field can't be empty",
            "msg_login_long": "The Login field is too long",
            "msg_password_empty": "The password can't be empty and shorter then 4 characters",
            "msg_password_long": "The password is too long",
            "msg_login_success": "Login success! The page should be reloaded in 3 sec.",
            "msg_login_error": "Login failed!",
            "msg_not_agree": "Please, read and check 'Terms and Conditions'",
            "msg_password_not_equal": "The passwords in both fields are not equal",
            "msg_registration_success": "Thank you for registering. Please confirm registration by clicking on the link in the letter sent to the specified email.",
            "msg_registration_error": "Registration failed!",
            "shapes_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/themes\/greeny\/skins\/default\/trx_addons\/css\/shapes\/",
            "mouse_helper_in_swiper_slider": "1",
            "add_to_links_url": [{
                "slug": "elementor",
                "mask": "elementor.com\/",
                "link": "https:\/\/be.elementor.com\/visit\/?bta=2496&nci=5383&brand=elementor&utm_campaign=theme",
                "args": {
                    "afp": "trx25",
                    "landingPage": "@href"
                }
            }],
            "elementor_stretched_section_container": ".page_wrap",
            "pagebuilder_preview_mode": "",
            "elementor_animate_items": ".elementor-heading-title,.sc_item_subtitle,.sc_item_title,.sc_item_descr,.sc_item_posts_container + .sc_item_button,.sc_item_button.sc_title_button,nav > ul > li",
            "elementor_animate_as_text": {
                "elementor-heading-title": "line,word,char",
                "sc_item_title": "line,word,char"
            },
            "elementor_breakpoints": {
                "desktop": 999999,
                "tablet": 1024,
                "mobile": 767
            },
            "elementor_placeholder_image": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/images\/placeholder.png",
            "animate_to_mc4wp_form_submitted": "1",
            "msg_no_products_found": "No products found! Please, change query parameters and try again.",
            "ai_helper_sc_igenerator_openai_sizes": [],
            "msg_ai_helper_igenerator_download": "Download",
            "msg_ai_helper_igenerator_download_error": "Error",
            "msg_ai_helper_igenerator_download_expired": "The generated image cache timed out. The download link is no longer valid.<br>But you can still download the image by right-clicking on it and selecting \"Save Image As...\"",
            "msg_ai_helper_igenerator_disabled": "Image generation is not available in edit mode!",
            "msg_ai_helper_igenerator_wait_available": "Wait for the image to become available on the rendering server",
            "msg_ai_helper_sc_chat_clear": "Clear",
            "msg_ai_helper_mgenerator_download": "Download",
            "msg_ai_helper_mgenerator_download_error": "Error",
            "msg_ai_helper_mgenerator_download_expired": "The generated music cache timed out. The download link is no longer valid.<br>But you can still download the music by right-clicking on it and selecting \"Save Media As...\"",
            "msg_ai_helper_mgenerator_disabled": "Music generation is not available in edit mode!",
            "msg_ai_helper_mgenerator_fetch_error": "Error updating the tag audio on this page - object is not found!",
            "msg_ai_helper_agenerator_download": "Download",
            "msg_ai_helper_agenerator_download_error": "Error",
            "msg_ai_helper_agenerator_download_expired": "The generated audio cache timed out. The download link is no longer valid.<br>But you can still download the file by right-clicking on it and selecting \"Save Media As...\"",
            "msg_ai_helper_agenerator_disabled": "Audio generation is not available in edit mode!",
            "msg_ai_helper_agenerator_fetch_error": "Error updating the tag audio on this page - object is not found!",
            "msg_ai_helper_vgenerator_download": "Download",
            "msg_ai_helper_vgenerator_download_error": "Error",
            "msg_ai_helper_vgenerator_download_expired": "The generated video cache timed out. The download link is no longer valid.<br>But you can still download the video by right-clicking on it and selecting \"Save Video As...\"",
            "msg_ai_helper_vgenerator_disabled": "Video generation is not available in edit mode!",
            "msg_ai_helper_vgenerator_wait_available": "Wait for the video to become available on the rendering server",
            "audio_effects_allowed": "0",
            "bg_colors_selector": "body:not(.body_style_boxed) .page_content_wrap,body.body_style_boxed .page_wrap",
            "mouse_helper": "0",
            "mouse_helper_delay": "10",
            "mouse_helper_centered": "0",
            "msg_mouse_helper_anchor": "",
            "portfolio_use_gallery": "",
            "scroll_to_anchor": "0",
            "update_location_from_anchor": "0",
            "msg_sc_googlemap_not_avail": "Googlemap service is not available",
            "msg_sc_googlemap_geocoder_error": "Error while geocode address",
            "sc_icons_animation_speed": "50",
            "msg_sc_osmap_not_avail": "OpenStreetMap service is not available",
            "msg_sc_osmap_geocoder_error": "Error while geocoding address",
            "osmap_tiler": "vector",
            "osmap_tiler_styles": [],
            "osmap_attribution": "Map data \u00a9 <a href=\"https:\/\/www.openstreetmap.org\/\">OpenStreetMap<\/a> contributors",
            "slider_round_lengths": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/js/__scripts.js" id="trx_addons-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.min.js"
        id="superfish-js"></script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/js/tweenmax/GSAP/3.12.2/gsap.min.js"
        id="tweenmax-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/mailchimp-for-wp/mailchimp-for-wp.js"
        id="trx_addons-mailchimp-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/woocommerce/woocommerce.js"
        id="trx_addons-woocommerce-js"></script>
    <script type="text/javascript" id="greeny-init-js-extra">
        /* <![CDATA[ */
        var GREENY_STORAGE = {
            "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "f28b62252f",
            "home_url": "https:\/\/greeny.axiomthemes.com",
            "theme_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/themes\/greeny\/",
            "site_scheme": "scheme_default",
            "user_logged_in": "",
            "mobile_layout_width": "768",
            "mobile_device": "",
            "mobile_breakpoint_underpanels_off": "768",
            "mobile_breakpoint_fullheight_off": "1025",
            "menu_side_stretch": "",
            "menu_side_icons": "1",
            "background_video": "",
            "use_mediaelements": "1",
            "resize_tag_video": "",
            "resize_tag_iframe": "1",
            "open_full_post": "",
            "which_block_load": "article",
            "admin_mode": "",
            "msg_ajax_error": "Invalid server answer!",
            "msg_i_agree_error": "Please accept the terms of our Privacy Policy.",
            "toggle_title": "Filter by ",
            "msg_copied": "Copied!",
            "alter_link_color": "#A8C62E",
            "mc4wp_msg_email_min": "Email address is too short (or empty)",
            "mc4wp_msg_email_max": "Too long email address",
            "button_hover": "default"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/themes/greeny/js/__scripts.js" id="greeny-init-js"></script>
    <script type="text/javascript" id="mediaelement-core-js-before">
        /* <![CDATA[ */
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.17"
        id="mediaelement-core-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=6.8.3"
        id="mediaelement-migrate-js"></script>
    <script type="text/javascript" id="mediaelement-js-extra">
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=6.8.3"
        id="wp-mediaelement-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/skin.js" id="greeny-skin-default-js">
    </script>
    <script type="text/javascript" defer
        src="https://greeny.axiomthemes.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.10.3"
        id="mc4wp-forms-api-js"></script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.28.4"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.28.4"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.28.4",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "e_local_google_fonts": true,
                "editor_v2": true,
                "home_screen": true
            },
            "urls": {
                "assets": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/greeny.axiomthemes.com\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "f314a3b9df"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "stretched_section_container": ".page_wrap",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 6130,
                "title": "Wishlist%20Page%20%E2%80%93%20Greeny",
                "excerpt": "",
                "featuredImage": false
            }
        };
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.28.4",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "e_local_google_fonts": true,
                "editor_v2": true,
                "home_screen": true
            },
            "urls": {
                "assets": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/greeny.axiomthemes.com\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "f314a3b9df"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "stretched_section_container": ".page_wrap",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 6130,
                "title": "Wishlist%20Page%20%E2%80%93%20Greeny",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.28.4"
        id="elementor-frontend-js"></script>
    <script type="text/javascript" defer="defer"
        src="https://greeny.axiomthemes.com/wp-content/themes/greeny/plugins/woocommerce/woocommerce.js"
        id="greeny-woocommerce-js"></script>
    <script>
        TRX_DEMO_STORAGE['tabs_layout'] =
            "		<div class=\"trx_demo_panels trx_demo_tabs_position_rc trx_demo_tabs_style_icons\" style=\"width:320px;\">  			<div class=\"trx_demo_tabs\"> 				<a class=\"hint_left hint_big hint_slide\" href=\"https://1.envato.market/AoMk5a\" 						 target=\"_blank\"						aria-label=\"Buy theme\" 						data-type=\"link\" 						style=\"color:#ffffff;background-color:#a8c62e;\" 					><i class=\"trx_demo_icon-shopping-cart\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"#panel_related-themes\" 												aria-label=\"Our Bestsellers\" 						data-type=\"products\" 						style=\"color:#141541;background-color:#a8c62e;\" 					><i class=\"trx_demo_icon-gallery\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"https://greeny.axiomthemes.com?notabs=1\" 												aria-label=\"Hide panel\" 						data-type=\"link\" 						style=\"color:#141541;background-color:#a8c62e;\" 					><i class=\"trx_demo_icon-browser\"></i></a>			</div>  			<div class=\"trx_demo_panels_wrap\"> 				<div id=\"panel_related-themes\" 							class=\"trx_demo_panel 									trx_demo_panel_products									trx_demo_panel_thumbs_animation_off									trx_demo_panel_layout_1col									trx_demo_panel_style_plain\" 							style=\"\" 					><div class=\"trx_demo_panel_header\"><h5 class=\"trx_demo_panel_title\" style=\"\">Our Bestsellers</h5></div><div class=\"trx_demo_panel_content\"><div class=\"trx_demo_panel_list\"><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,business\" data-search-value=\"elementra\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2025/08/59-elementra.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=elementra\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=elementra\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;69</del>&nbsp;&#036;59</span>Elementra<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,business,news-editorial\" data-search-value=\"qwery\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Qwery-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=qwery\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=qwery\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;75</del>&nbsp;&#036;59</span>Qwery<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,technology\" data-search-value=\"ann\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Ann-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=ann\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=ann\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>ANN<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Technology</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,buddypress,wordpress-themes\" data-search-value=\"anesta\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Anesta-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=anesta\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=anesta\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;79</del>&nbsp;&#036;69</span>Anesta<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">BuddyPress</span><span class=\"trx_demo_panel_list_item_term\">WordPress Themes</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,blog-magazine,news-editorial\" data-search-value=\"kicker\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Kicker-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=kicker\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=kicker\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;75</del>&nbsp;&#036;59</span>Kicker<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Blog / Magazine</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,health-beauty,news-editorial\" data-search-value=\"jacqueline\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Jacqueline-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=jacqueline\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=jacqueline\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>Jacqueline<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Health &amp; Beauty</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,entertainment,news-editorial\" data-search-value=\"fc united\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/FC-United-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=fc-united\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=fc-united\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>FC United<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Entertainment</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"portfolio\" data-search-value=\"helion\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Helion-home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=helion\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=helion\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Helion<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Portfolio</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"news-editorial\" data-search-value=\"blabber\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Blabber_home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=blabber\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=blabber\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Blabber<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"directory-listings\" data-search-value=\"alliance\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/02/Screenshot_1.png);\"> 															<a href=\"http://demo.themerex.net/?theme=alliance\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=alliance\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Alliance<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Directory &amp; Listings</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item\" data-filter-value=\"bestsellers,business,corporate\" data-search-value=\"business\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2025/12/Business-Admin.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=business\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=business\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;69</del>&nbsp;&#036;19</span>Business<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span><span class=\"trx_demo_panel_list_item_term\">Corporate</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item\" data-filter-value=\"bestsellers,business,corporate\" data-search-value=\"flexify\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2025/07/Flexify-Primary-Preview-10.51.47.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=flexify\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=flexify\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;69</del>&nbsp;&#036;19</span>Flexify<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span><span class=\"trx_demo_panel_list_item_term\">Corporate</span></span></a> 												</h6> 																							</div> 										</div></div></div><div class=\"trx_demo_panel_footer\"><a class=\"trx_demo_panel_button sc_button theme_button trx_demo_inline_1699359616 trx_demo_inline_856691114\" href=\"https://themeforest.net/item/elementra-100-elementor-wordpress-theme/57242915\" target=\"_blank\">Sale</a></div></div></div> 			<span class=\"trx_demo_button_close\"><span class=\"trx_demo_button_close_icon\"></span></span>  		</div>  		<div class=\"trx_demo_panels_mask\"></div> 		";
    </script>
    <script src="https://code.tidio.co/ctybgkiqd4jhsgdvzlgahqx3pjybdwlg.js" async></script>
@endsection
