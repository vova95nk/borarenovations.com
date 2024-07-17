<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class CheckMaintenance
{
    private const MAINTENANCE_URI = '/maintenance';

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->get('admin') === env('ADMIN_KEY', sha1(Carbon::now()->toDateTimeString()))) {
            return $next($request);
        }

        if ($this->isMaintenance($request->getRequestUri())) {
            return Redirect::route('maintenance');
        }

        return $next($request);
    }

    private function isMaintenance(string $uri): bool
    {
        return env('IS_MAINTENANCE', false) && $uri !== self::MAINTENANCE_URI;
    }
}
