<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;


class PostController extends Controller
{


    public function post(){


        $posts=Post::all();
     return view('post', compact('posts'));
    // return view('post');
 }
    

    public function create_post(Request $request){

        $incomingFields = $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

        // // $incomingFields['title'] = strip_tags($incomingFields['title']);
        // // $incomingFields['body'] = strip_tags($incomingFields['body']);
        // // $incomingFields['user_id'] = auth()->id();
        // // Post::create($incomingFields);
        
        // return redirect('/lists');



        
        $post=new Post;
         $User=Auth::User();

         $post->name=$User->name;
         $post->user_id=$User->id;
        $post->title=$request->title;
        $post->body=$request->body;


        // // $image=$request->image;
        // // $imagename=time().'.'.$image->getClientOriginalExtension();
        // // $request->image->move('photos',$imagename);
        // // $usersblog->image=$imagename;

            if($request->hasFile('image')) {
                $file = $request->file('image');
                $imagename=time(). $file->getClientOriginalName();
                $file->move('image',$imagename);
                $post->image= 'image/'.$imagename;
                
            }
    

        $post->save(); 

        return redirect('/lists');

    }
    
    public function ShowEditScreen($id)  {
        $data=Post::find($id);
        return view('editpost', compact('data'));
    
    }


    public function UpdatePost (Request $request,$id){
        { 
            $usersblog=Post::find($id);
    
            $usersblog->title=$request->title;
            $usersblog->body=$request->body;
    
    //         $image=$request->image;
    // if($image){
    //     $imagename=time().'.'.$image->getClientOriginalExtension();
    //     $request->image->move('photos',$imagename);
    //     $usersblog->image=$imagename;
    }
    
            $usersblog->save();
    
    
    
            return redirect('/lists');
    
        }

    // }
    // $incomingFields=$request->validate(
    //     [
    //         'title' => 'required',
    //         'body'=> 'required'
    //     ]
    // );
    // $incomingFields['title']= strip_tags($incomingFields['title']);
    // $incomingFields['body']= strip_tags($incomingFields['body']);

    // $post->update($incomingFields);
    // return redirect('/post');
// }



public function deleteblog( $id ){
    // if(auth() -> user() -> id === $post['user_id']){
    //     $post->delete();

    $post = Post::where('id',$id);
        $post->delete();
        return redirect('/lists');
// return redirect('/post');
}

public function lists(Request $request){
    $user_id=Auth::user()->id;

        $p=Post::where('user_id', $user_id)->get();
        return view('lists', compact('p'));
    
}
public function WelcomePosts()  {
    $p = Post::all();
    return view('welcome', compact('p'));
}
}

