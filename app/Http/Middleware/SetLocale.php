<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported locales.
     *
     * @var array
     */
    protected array $supportedLocales = ['id', 'en'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Explicit query parameter switch (e.g. ?lang=en or ?lang=id)
        if ($request->has('lang') && in_array($request->query('lang'), $this->supportedLocales)) {
            $locale = $request->query('lang');
            Session::put('locale', $locale);
        }
        // 2. Stored session locale
        elseif (Session::has('locale') && in_array(Session::get('locale'), $this->supportedLocales)) {
            $locale = Session::get('locale');
        }
        // 3. Default application locale (English)
        else {
            $locale = config('app.locale', 'en');
            Session::put('locale', $locale);
        }

        App::setLocale($locale);

        return $next($request);
    }
}
