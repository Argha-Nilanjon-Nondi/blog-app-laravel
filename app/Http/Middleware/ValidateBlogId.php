<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Blog;

class ValidateBlogId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        

        $post = Blog::where([
            ["blog_id", "=", $request->id]
        ]);

        if ($post->count() == 0) {
            return redirect("/admin/blog/99");
        }

        else{
            return $next($request);
        }
    }
}
