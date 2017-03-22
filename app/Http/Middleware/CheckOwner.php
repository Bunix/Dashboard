<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Route;

class CheckOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   $requestPath = Route::getCurrentRequest()->getPathInfo();
        $array = explode('/',$requestPath);
        $list = [
           0=> 'edit',
           1=> 'update',
           2=> 'destroy'
        ];
        foreach ($list as $item)
        {
            if(ends_with($requestPath,$item))
            {
                $model = \App::make('\App\\'.ucfirst($array[1]));
                $index = $array[2];
                $author = $model->find($index)->user;
                if($author != Auth::user())
                {
                    return redirect()->back()->with('errorMessage',"You don't have permission for this operation.");
                }
            }
        }
        return $next($request);
    }
}
