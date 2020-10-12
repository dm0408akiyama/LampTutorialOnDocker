<?php

namespace App\Http\Middleware;

use Closure;

class SampleMiddleware
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
        $data = [
            ['name'=>'taro', 'mail'=>'taro@yamada'],
            ['name'=>'ziro', 'mail'=>'ziro@yamada']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
