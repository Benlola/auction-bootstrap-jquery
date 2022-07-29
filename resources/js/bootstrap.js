window._ = require('lodash');

try {
    require('bootstrap');
} catch (e) {
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
//let laravelToken = document.querySelector('meta[name="csrf-token"]').content;
window.axios.defaults.headers.common['Authorization'] = document.querySelector('meta[name="csrf-token"]').content;
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: window.location.hostname,
    wssHost: window.location.hostname,
    httpHost: window.location.hostname,
    httpsHost: window.location.hostname,
    wsPort: process.env.MIX_PUSHER_APP_PORT,
    wssPort: process.env.MIX_PUSHER_APP_PORT,
    forceTLS: process.env.MIX_PUSHER_APP_FORCE_TLS,
    encrypted: process.env.MIX_PUSHER_APP_ENCRYPTED,
    disableStats: process.env.MIX_PUSHER_APP_DISABLE_STATS,
});
