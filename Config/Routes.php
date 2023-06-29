<?php



namespace Config;



// Create a new instance of our RouteCollection class.

$routes = Services::routes();



/*

 * --------------------------------------------------------------------

 * Router Setup

 * --------------------------------------------------------------------

 */

$routes->setDefaultNamespace('App\Controllers');

$routes->setDefaultController('Home');

$routes->setDefaultMethod('index');

$routes->setTranslateURIDashes(false);

$routes->set404Override();

$routes->get('/lang/(:segment)', 'Home::changelanguange/$1');

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps

// where controller filters or CSRF protection are bypassed.

// If you don't want to define all routes, please use the Auto Routing (Improved).

// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

// $routes->setAutoRoute(false);



/*

 * --------------------------------------------------------------------

 * Route Definitions

 * --------------------------------------------------------------------

 */



// We get a performance increase by specifying the default

// route since we don't have to scan directories.



//http://localhost/kualanamu/Admin/Login/CekSignIn


$routes->get('admin', 'Admin\Login::index');
$routes->get('logout', 'Admin\Login::logout');
$routes->post('ceksignin', 'Admin\Login::ceksignin');

$routes->group('admin', static function ($routes) {

    $routes->get('dashboard', 'Admin\C_dashboard::index');

    $routes->get('setupparameter', 'Admin\C_setupparameter::index');

    $routes->get('setupparameter/addFAQ', 'Admin\C_setupparameter::addFAQ');

    $routes->get('setupparameter/editFAQ', 'Admin\C_setupparameter::editFAQ');



    $routes->get('setupairports', 'Admin\C_setupairports::index');

    $routes->get('setupairports/add', 'Admin\C_setupairports::add');

    $routes->get('setupairports/edit', 'Admin\C_setupairports::edit');



    $routes->get('setupairlines', 'Admin\C_setupairlines::index');

    $routes->get('setupairlines/add', 'Admin\C_setupairlines::add');

    $routes->get('setupairlines/edit', 'Admin\C_setupairlines::edit');



    $routes->get('setupterminal', 'Admin\C_setupterminal::index');

    $routes->get('setupterminal/add', 'Admin\C_setupterminal::add');

    $routes->get('setupterminal/edit', 'Admin\C_setupterminal::edit');



    $routes->get('setupshopdinecategory', 'Admin\C_setupshopdinecategory::index');

    $routes->get('setupshopdinecategory/add', 'Admin\C_setupshopdinecategory::add');

    $routes->get('setupshopdinecategory/edit', 'Admin\C_setupshopdinecategory::edit');



    $routes->get('setupshopdine', 'Admin\C_setupshopdine::index');

    $routes->get('setupshopdine/add', 'Admin\C_setupshopdine::add');

    $routes->get('setupshopdine/edit', 'Admin\C_setupshopdine::edit');



    $routes->get('setupactivity', 'Admin\C_setupactivity::index');

    $routes->get('setupactivity/add', 'Admin\C_setupactivity::add');

    $routes->get('setupactivity/edit', 'Admin\C_setupactivity::edit');



    $routes->get('setupairportguides', 'Admin\C_setupairportguides::index');

    $routes->get('setupairportguides/add', 'Admin\C_setupairportguides::add');

    $routes->get('setupairportguides/edit', 'Admin\C_setupairportguides::edit');



    $routes->get('aboutcorporate', 'Admin\C_aboutcorporate::index');

    $routes->get('aboutcorporate/add', 'Admin\C_aboutcorporate::add');

    $routes->get('aboutcorporate/edit', 'Admin\C_aboutcorporate::edit');
});


$routes->get('/', 'Home::index');

$routes->group('/', static function ($routes) {

    $routes->get('testing', 'Home::testing');



    $routes->group('home', static function ($routes) {

        $routes->get('/', 'Home::index');

        $routes->post('Home', 'Home::activity_type');



        $routes->post('SlideContent', 'Home::SlideContent');

        $routes->get('slide_read', 'Home::slide_read');

        $routes->post('slide_loadread', 'Home::slide_loadread');



        $routes->post('highlightsNews', 'Home::highlightsNews');

        $routes->post('contentFlightSchedule', 'Home::contentFlightSchedule');

        $routes->post('EventContent', 'Home::EventContent');

        $routes->post('contentGallery', 'Home::contentGallery');

        $routes->post('contentAirlines', 'Home::contentAirlines');



        $routes->post('contentFAQ', 'Home::contentFAQ');
    });



    $routes->group('flightinformation', static function ($routes) {

        $routes->get('/', 'FlightInformation::index');

        $routes->post('ArrivalTabPane', 'FlightInformation::ArrivalTabPane');

        $routes->post('DepartureTabPane', 'FlightInformation::DepartureTabPane');
    });



    $routes->group('airportguidelines', static function ($routes) {

        $routes->get('/', 'AirportGuidelines::index');

        $routes->post('contentAirportGuidelines', 'AirportGuidelines::contentAirportGuidelines');

        $routes->get('detail', 'AirportGuidelines::detail');

        $routes->post('loadDetailAirportGuidelines', 'AirportGuidelines::loadDetailAirportGuidelines');
    });



    $routes->group('passengerguide', static function ($routes) {

        $routes->get('/', 'PassengerGuide::index');

        $routes->get('flightdepartureguide', 'PassengerGuide::flightdepartureguide');

        $routes->get('arrivingpassengers', 'PassengerGuide::arrivingpassengers');

        $routes->get('detailflightdepartureguide', 'PassengerGuide::detailflightdepartureguide');

        $routes->get('detailarrivingpassengers', 'PassengerGuide::detailarrivingpassengers');



        $routes->post('contentflightdepartureguide', 'PassengerGuide::contentflightdepartureguide');

        $routes->post('contentarrivingpassengers', 'PassengerGuide::contentarrivingpassengers');

        $routes->post('loadDetail', 'PassengerGuide::loadDetail');
    });



    $routes->group('shopdine', static function ($routes) {

        $routes->get('/', 'ShopDine::index');



        $routes->get('shop', 'ShopDine::shop');

        $routes->post('loadContentShop', 'ShopDine::loadContentShop');

        $routes->get('detailshop', 'ShopDine::detailshop');

        $routes->post('contentdetailshop', 'ShopDine::contentdetailshop');



        $routes->get('eatdine', 'ShopDine::eatdine');

        $routes->post('loadEatDine', 'ShopDine::loadEatDine');

        $routes->get('detaileatdine', 'ShopDine::detaileatdine');

        $routes->post('contentdetaileatdine', 'ShopDine::contentdetaileatdine');



        $routes->get('services', 'ShopDine::services');

        $routes->post('loadservices', 'ShopDine::loadservices');

        $routes->get('detailservices', 'ShopDine::detailservices');

        $routes->post('contentdetailservices', 'ShopDine::contentdetailservices');
    });



    $routes->group('corporateaboutus', static function ($routes) {

        $routes->get('/', 'CorporateAboutUs::index');

        $routes->post('loadContentCorporateAboutUs', 'CorporateAboutUs::loadContentCorporateAboutUs');
    });



    $routes->group('corporatecareers', static function ($routes) {

        $routes->get('/', 'CorporateCareers::index');

        $routes->post('contentCorporateCareers', 'CorporateCareers::contentCorporateCareers');
    });



    $routes->group('news', static function ($routes) {

        $routes->get('/', 'News::index');

        $routes->post('contentNews', 'News::contentNews');



        $routes->get('read', 'News::read');

        $routes->post('loadReadNews', 'News::loadReadNews');

        $routes->post('contentRecentposts', 'News::contentRecentposts');
    });



    $routes->group('cargo', static function ($routes) {

        $routes->get('/', 'Cargo::index');
    });



    $routes->group('businessairlines', static function ($routes) {

        $routes->get('/', 'BusinessAirlines::index');

        $routes->post('loadContentBusinessAirlines', 'BusinessAirlines::loadContentBusinessAirlines');
    });

    $routes->group('businessgeneralaviation', static function ($routes) {

        $routes->get('/', 'BusinessGeneralAviation::index');

        $routes->post('contentBusinessGeneralAviation', 'BusinessGeneralAviation::contentBusinessGeneralAviation');
    });

    $routes->group('businessadvertise', static function ($routes) {

        $routes->get('/', 'BusinessAdvertise::index');

        $routes->post('contentBusinessAdvertise', 'BusinessAdvertise::contentBusinessAdvertise');
    });

    $routes->group('socialbusinessrelations', static function ($routes) {

        $routes->get('/', 'SocialBusinessRelations::index');

        $routes->post('contentSocialBusinessRelations', 'SocialBusinessRelations::contentSocialBusinessRelations');
    });

    $routes->group('securityoperationsform', static function ($routes) {

        $routes->get('/', 'SecurityOperationsForm::index');

        $routes->post('contentSecurityOperationsForm', 'SecurityOperationsForm::contentSecurityOperationsForm');
    });

    $routes->group('buildingplan', static function ($routes) {

        $routes->get('/', 'BuildingPlan::index');

        $routes->post('contentBuildingPlan', 'BuildingPlan::contentBuildingPlan');
    });



    $routes->group('contact', static function ($routes) {

        $routes->get('/', 'Contact::index');
        $routes->post('contentContactDeskrispsi', 'Contact::contentContactDeskrispsi');
    });





    // $routes->get('blog', 'Admin\Blog::index');



    // $routes->group('news', static function ($routes) {

    //     $routes->get('/', 'News::index');

    //     $routes->get('read', 'News::read');

    // });

});



// $routes->get('/', 'Home::index');



// $routes->get('/about_us', 'AboutAs::index');



/*

 * --------------------------------------------------------------------

 * Additional Routing

 * --------------------------------------------------------------------

 *

 * There will often be times that you need additional routing and you

 * need it to be able to override any defaults in this file. Environment

 * based routes is one such time. require() additional route files here

 * to make that happen.

 *

 * You will have access to the $routes object within that file without

 * needing to reload it.

 */

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {

    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
