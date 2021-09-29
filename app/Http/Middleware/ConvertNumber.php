<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ConvertNumber
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $refinedInputs = [];
        foreach ($request->input() as  $inputKey => $input) {
            foreach ($persian as $englishNum => $persianNum) {
                $input = str_replace($persianNum, $englishNum, $input);
            }
            $refinedInputs[$inputKey] = $input;
        }
        $request->replace($refinedInputs);
        return $next($request);
    }
}
