<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return view('admin.ajax_index');
        } else {
            return view('admin.index');
        }

    }

    public function articleList()
    {
        return view('admin.article_list');
    }

    public function articleAdd()
    {
        return view('admin.add');
    }

    public function comments()
    {
        return view('admin.comments');
    }

    public function articleInsert(Request $request)
    {
        set_time_limit(0);
        if ($request->ajax()) {
            $data = $request->data;

            $validator = Validator::make($data, [
                'title' => 'required|min:5',
                'editormd_id-html-code' => 'required|min:5',
            ]);

            if ($validator->fails()) {
                return response()->json(['status'=>202,'error'=>$validator->errors()]);
            }

            $res = Article::where('title',$data['title'])->first();

            if(!empty($res)){
                return response()->json(['status'=>201,'error'=>"已存在相同标题的博文"]);
            }
            $info = array();
            $timestamps = time();
            $info['title'] = $data['title'];
            $info['content_html'] = $data['editormd_id-html-code'];

            $info['create_time'] = $timestamps;
            $info['update_time'] = $timestamps;

            DB::beginTransaction();
            try {
                $id = DB::table("articles")->insertGetId($info);
                DB::commit();
                return response()->json(['status' => 200, 'id' => $id]);
            } catch (\Exception $e) {
                DB::rollback();
                return response()->json(['status' => '202', 'error' => $e]);
            }

        }
    }
}
