<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogPage extends Component
{
    public $blog_img;
    public $blog_title;
    public $blog_content;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $blogimg, $blogtitle, $blogcontent)
    {
        $this->blog_img = $blogimg;
        $this->blog_title = $blogtitle;
        $this->blog_content = $blogcontent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-page');
    }
}
