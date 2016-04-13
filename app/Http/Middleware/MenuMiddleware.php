<?php

namespace App\Http\Middleware;

use Closure;
use Menu;


class MenuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         Menu::make('live_primary', function($menu) {
            $menu->add('Home', getLang() . '/');
            $menu->add('Sewing Machines', getLang() . 'sewing-machines/qnique');
            $menu->add('Machine Frames', getLang() . 'machine-frames');
            $menu->add('Hand Quilding', getLang() . 'hand-quilting');
            $menu->add('Automated', getLang() . 'automated/qct');
            $menu->add('truecut', getLang() . '');
            $menu->add('Quilding Industry', getLang() . '');
            $shop = $menu->add('Shop', getLang() . 'shop', ['class' => 'sf-menu']);
                        $shop->add('Cart', getLang() . 'shop/cart');
                        $shop->add('Checkout', getLang() . 'shop/checkout');
            $menu->add('Blog', getLang() . 'articles');
            $menu->add('Contact', getLang() . 'contact');
        });

         Menu::make('disclosures', function($menu) {
            $menu->add('Terms of Use', getLang() . '/');
            $menu->add('Privacy Policy', getLang() . '/');
            $menu->add('Returns', getLang() . '/');
            $menu->add('Refunds', getLang() . '/');
            $menu->add('Support', getLang() . '/');
            $menu->add('Search', getLang() . '/');
            $menu->add('Sitemap', getLang() . '/');
            $menu->add('Blog', getLang() . '/blog');

        });

        Menu::make('account', function($menu) {

            $menu->add('My Account', getLang() . '/my-account')->icon('user');
            $menu->add('Purchase History', getLang() . '/');
            $menu->add('Shipping Details', getLang() . '/');
            $menu->add('Refunds', getLang() . '/');
            $menu->add('Support', getLang() . '/');

        });

        Menu::make('shop', function($menu) {
            $menu->add('Shop', getLang() . '/shop')->icon('cart');
            $menu->add('Cart', getLang() . '/shop/cart');
            $menu->add('Checkout', getLang() . '/shop/cart/checkout');
            $menu->add('Refunds', getLang() . '/shop');
            $menu->add('Support', getLang() . '/shop');
            //$menu->add('Search', getLang() . '/shop');
            //$menu->add('Sitemap', getLang() . '/shop');
            //$menu->add('Blog', getLang() . '/blog');

        });

        Menu::make('truecut', function($menu) {
            $menu->add('TrueCut', getLang() . '/truecut');
            $menu->add('Confort Cutter', getLang() . '/truecut/comfort-cutter/');
        });

        Menu::make('homepage', function($menu) {
            $menu->add('The Grace Company', getLang() . '/');
            $menu->add('Community', getLang() . '/comminity');
            $menu->add('News', getLang() . '/news');
            $menu->add('Tutorials', getLang() . '/tutorials');
            $menu->add('Support', getLang() . '/support');
            $menu->add('Shop Now', getLang() . '/shop');

        });

        Menu::make('hqf', function($menu) {
            // $menu->add('TrueCut', getLang() . '/truecut');
            // $menu->add('Confort Cutter', getLang() . '/truecut/comfort-cutter/');
        });

        Menu::make('popular', function($menu) {
            $menu->add('Documentation', getLang() . '/docs');
            $menu->add('Software', getLang() . '/');
            $menu->add('FAQ\'s', getLang() . '/');
            $menu->add('Support Forums', getLang() . '/');
            $menu->add('Press & News', getLang() . '/');
            $menu->add('Blog', getLang() . '/');
            $menu->add('Quilting Community', getLang() . '/');

        });


        Menu::make('machine', function($menu) {
            // $menu->add('TrueCut', getLang() . '/truecut');
            // $menu->add('Confort Cutter', getLang() . '/truecut/comfort-cutter/');
        });

        Menu::make('industry', function($menu) {
            // $menu->add('TrueCut', getLang() . '/truecut');
            // $menu->add('Confort Cutter', getLang() . '/truecut/comfort-cutter/');
        });

        Menu::make('blog', function($menu) {
            // $menu->add('TrueCut', getLang() . '/truecut');
            // $menu->add('Confort Cutter', getLang() . '/truecut/comfort-cutter/');
        });
 Menu::make('adminmenu', function($menu) {
            $menu->add('Dashboard', getLang() . '/admin')->icon(' clip-home-3');
            $menu->add('Website', getLang() . '/admin/menu')->icon('align-justify');
        });

        Menu::make('adminsidebar', function($menu) {
            $menu->add('Dashboard', getLang() . '/admin')->icon(' clip-home-3');
            $menu->add('Website', getLang() . '/admin/menu')->icon('align-justify');
            $menu->website->add('Menu', getLang() . '/admin/menu')->icon('users');
            $menu->website->add('Blog', getLang() . '/admin/menu')->icon('align-justify');
            $menu->website->add('Pages', getLang() . '/admin/menu')->icon('align-justify');
            $menu->website->add('FAQs', getLang() . '/admin/menu')->icon('align-justify');
            $menu->website->add('News', getLang() . '/admin/menu')->icon('align-justify');
            $menu->website->add('Galleries', getLang() . '/admin/menu')->icon('align-justify');
            $menu->website->add('Galleries', getLang() . '/admin/menu')->icon('align-justify');
            $menu->website->add('Galleries', getLang() . '/admin/menu')->icon('align-justify');

            $menu->add('Products', getLang() . '#')->icon('shopping-cart');
                $menu->products->add('List', getLang() . '/admin/products/');
                $menu->products->add('New', getLang() . '/admin/products/create');
            $menu->add('eCommerce', getLang() . '/admin/menu')->icon('money');
                $menu->ecommerce->add('Customers', getLang() . '/admin/');

        });


        Menu::make('qnique', function($menu) {
            $menu->add('Qnique', getLang() . '/sewing-machines/qnique');
            $menu->add('Features', getLang() . '/sewing-machines/qnique/features/');
            $menu->add('Specs', getLang() . '/sewing-machines/qnique/specs/');
            $menu->add('Accessories', getLang() . '/sewing-machines/qnique/accessories/');
        });

        return $next($request);
    }
}
