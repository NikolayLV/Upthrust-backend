<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VPNMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $allowedIps = [
            '192.168.', // локальные сети
            '10.',      // локальные сети
            '172.',     // локальные сети
            'xxx.xxx.xxx.xxx' // сюда можно вставить статический IP VPN-шлюза
        ];

        $clientIp = $request->ip();

        foreach ($allowedIps as $prefix) {
            if (str_starts_with($clientIp, $prefix)) {
                return $next($request);
            }
        }

        abort(403, 'Доступ только по VPN');
    }

}
