<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class CheckMaintenance
{
    private const MAINTENANCE_URI = '/maintenance';

    private const ADMIN_KEY = '171322c2ab77320dc7321fc5cb3ebb23a913e30d';

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->get('admin') === self::ADMIN_KEY) {
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
