window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

window.io = require('socket.io-client');

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001',
    auth: {
        headers: {
            'X-CSRF-Token': document.head.querySelector('meta[name="csrf-token"]'),
            Authorization: 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMWEwZjcyYWJkZDgzNzFmMmIzNjI3NmY4ODAyYzQ2N2VjY2Q4NWY2NGI0N2U5ZTU5NTNkNjhjZDgwNjdhNmQ1ODBiYzhiZjg4YjE1ZDMyYTEiLCJpYXQiOjE1OTU1MDc2NTYsIm5iZiI6MTU5NTUwNzY1NiwiZXhwIjoxNjI3MDQzNjU2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YgyG1DgB1j0vQTzw_pA_sTWKq8BfLPdkwAqOXUwaRfPRphy_NVc527H6rnJVle5_PB1DxmBvU67QIh0PfcPeFy2Z7enZAtlcheNnvon24X2CfrrbozTEv59GdbRkiOLbfRrufSLR4sF-xy7v_JUEuuufWLkq4HxMsYSDIiZstW7blbLksU2H9D4ljGrPuhLSdm26ZpLXPRTk58KtcGGBLNtJBXTSVTzTXEwsZ0SM1ojl6OvD-vq5n5DPlQ9KHzqlFMcM5AVcN9PM8L2mEPGCRcaz4hojjPKSuNWptiKMxIlLZC5XCWcrtEq_5OJl7a833z-alV7qBCsgUIkq2KwHG5DJGcb3xb4E_FEnHLCkbmiHa5RmW2Ow5BBC1DlwH4QSou-liv9NmEXbOGPv340fmj5taZVVOMHEzoFspvarPY4BFu6MREMc6KkmnaL0e-6mE0badYRlSFCltAet6jwJa_fkqtpYyivjXpykiVzcCw8bzTqn69ERHwcHOg3rAiRoBhcIDk_8ZlWplIsIq6UC0EfmlEJhAjHlzsYAhVaqAfIkifm9q7_7nKYfiQq5YwgCDLLajwR2gXa9biLQOZkkMt7vTwbb8xYz8pUkRIaINM--rjqasJEQjAmuqFYD0GPGxegdV_WsTt64103YZyu1Wc_DE1odqUCHkpK52spFZiw',
        }
    }
});
