<?php



/**
 *  menu active
 * @param $path
 * @param string $active
 * @return string
 */
function setActive($path, $active = 'active') {

    if (is_array($path)) {

        foreach ($path as $k => $v) {
            $path[$k] = getLang() . "/" . $v;
        }
    } else {
        $path = getLang() . "/" . $path;
    }

    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

/**
 * @return mixed
 */
function getLang() {

    return LaravelLocalization::getCurrentLocale();
}

/**
 * @param null $url
 * @return mixed
 */
function langURL($url = null) {

    //return LaravelLocalization::getLocalizedURL(getLang(), $url);

    return getLang() . $url;
}

/**
 * @param $route
 * @return mixed
 */
function langRoute($route, $parameters = array()) {

    return URL::route(getLang() . "." . $route, $parameters);
}

/**
 * @param $route
 * @return mixed
 */
function langRedirectRoute($route) {

    return Redirect::route(getLang() . "." . $route);
}