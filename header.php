<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kurintar_Retreat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-for-kurintar-retreat' ); ?></a>

	<header id="masthead" class="dynamic-header bg-black">
        <div class="container max-w-full lg:max-w-screen-xl mx-auto">
            <div class="flex items-center justify-between p-6 relative">
                <div class="flex items-center flex-shrink-0 text-stone-800 mr-auto">
                    <a href="/" class="flex items-center rtl:space-x-reverse">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/kurintar-retreat.png" class="h-6 lg:h-8 default-logo" alt="Logo" />
                    </a>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation flex items-center">
                    
                    <button aria-controls="primary-menu" aria-expanded="false" id="menu-toggle" class="menu-toggle w-fit flex items-center px-3 py-2 rounded text-white hover:text-stone-200 lg:!hidden">
                        <svg fill="white" class="h-6 w-6 menu-icon closed" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                        <svg fill="white" class="h-6 w-6 menu-icon open hidden" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill="white" d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                        </svg>
                    </button>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container'      => 'ul',
                                'menu_class'     => 'bg-black lg:bg-transparent w-full lg:flex lg:items-center lg:w-auto hidden lg:block p-5 lg:p-0 lunum-header md:ml-auto md:mr-0 text-base md:text-sm lg:text-lg xl:text-xl absolute lg:static left-0 top-20 ',
                            )
                        );
                    ?>
                    <div class="flex space-x-2 mt-2 lg:mt-0 hidden">
                        <a href="#" class="flex items-center justify-center w-fit px-2 py-2 text-sm font-semibold leading-6 capitalize duration-100 transform border-0 rounded-sm cursor-pointer hover:shadow-lg hover:-translate-y-1">
                            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4998 12.0846C17.1692 12.0846 19.3332 9.92068 19.3332 7.2513C19.3332 4.58193 17.1692 2.41797 14.4998 2.41797C11.8305 2.41797 9.6665 4.58193 9.6665 7.2513C9.6665 9.92068 11.8305 12.0846 14.4998 12.0846Z" stroke="white" stroke-width="1.5"/>
                                <path d="M24.1642 21.7526C24.1666 21.5544 24.1666 21.3526 24.1666 21.1484C24.1666 18.1457 19.8383 15.7109 14.4999 15.7109C9.1615 15.7109 4.83325 18.1457 4.83325 21.1484C4.83325 24.1511 4.83325 26.5859 14.4999 26.5859C17.1957 26.5859 19.1399 26.3962 20.5416 26.0579" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </nav><!-- #site-navigation -->
                <nav class="user-nav mt-3.5 mr-3 hidden">
                    <button id="user-option-toggle">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-person-fill" viewBox="0 0 20 20">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    </button>
                    <div id="user-options" class="user-options relative hidden">
                        <ul class="absolute right-0 bg-gray-800 p-4 spacy-y-4 top-2 lg:min-w-[150px]">
                            <?php if (isset($_SESSION['custom_user_id'])) : ?>
                                
                                <li class="mb-3 text-sm">Signed in as,<br/> <span class="italic text-base"><?php echo $_SESSION['custom_user_name']; ?></span></li>
                                <li class="mb-3"><a class="hover:text-[#0088f3]" href="<?php echo home_url('/custom-dashboard'); ?>">My Account</a></li>
                                <li class="mb-3"><a class="hover:text-[#0088f3]" href="<?php echo home_url(); ?>?logout">Sign out</a></li>
                            <?php else : ?>
                                <li class="mb-3"><a class="hover:text-[#0088f3]" href="<?php echo home_url('/sign-in'); ?>">Sign in</a></li>
                                <li class="mb-3"><a class="hover:text-[#0088f3]" href="<?php echo home_url('/create-account'); ?>">Create Account</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                                
                </nav>
            </div>
        </div>
    </header><!-- #masthead -->
