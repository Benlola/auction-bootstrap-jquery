<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CheckCurrentCountryCode {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle( Request $request, Closure $next ) {
        if ( ! Cookie::has( 'current_country_code' ) ) {

            Cookie::queue(
                Cookie::make(
                    'current_country_code',
                    $_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'MD',
                    now()->addDays( 1 )->timestamp,
                    config( 'session.path' ),
                    config( 'session.domain' )
                )
            );
        }

        return $next( $request );
    }
}
