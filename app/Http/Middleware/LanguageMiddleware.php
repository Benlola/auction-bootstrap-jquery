<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;

class LanguageMiddleware
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
        session()->put('lang', $this->getCode());
        app()->setLocale(session('lang',  $this->getCode()));
        $this->setDirection($this->getCode());
        return $next($request);
    }

    public function getCode()
    {
        if (session()->has('lang')) {
            return session('lang');
        }
        $language = Language::where('is_default', 1)->first();
        return $language ? $language->code : 'en';
    }

    public function setDirection($code)
    {
        if (session()->has('direction')) {
            return session('direction');
        }
        $direction = Language::whereCode($code)->first();
        session()->put('direction', $direction->is_rtl ? 'rtl' : 'ltr');
        return false;
    }


}
