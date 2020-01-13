<?php
namespace App\Repositories;

use App\Blogs;

class BlogRepository implements BlogRepositoryInterface
{

    public function get($id)
    {
        return Blogs::find($id);
    }

    public function all()
    {
        return  Blogs::all();
    }

    public function delete($id)
    {
        Blogs::destroy($id);
    }


    public function update($id, array $blog_data)
    {
//        Post::find($id)-&gt;update($blog_data);
    }
}
