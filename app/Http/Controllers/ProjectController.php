<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;
use App\Models\Profile; // ここを追加
use Illuminate\Support\Facades\Auth; // ここを追加
use App\Http\Requests\StoreDatasRequest; // ここを追加
use Illuminate\Support\Facades\DB; // ここを追加
use Illuminate\Support\Facades\Log; // ここを追加
use Illuminate\Support\Facades\Mail; //追記
use App\Mail\TestMail; //追記
use App\Http\Requests\DataUpdateRequest;
use App\Http\Requests\storeProfileRequest;
use App\Http\Requests\editProfile; // ここを追加

class ProjectController extends Controller
{
    //
    public function pre_register_check(){
        return view('projects.pre_register_check');
    }
    public function home(){
        return view('projects.home');
    }

    public function record(){
        $datas = Auth::user()->datas->all();
        return view('projects.index',compact('datas'));
    }

    public function store(StoreDatasRequest $request)
    {
        DB::beginTransaction();
        try{
            $datas = Data::create([
                'bt' => $request->bt,
                'pulse' => $request->pulse,
                'Trb_bw' => $request->Trb_bw,
                'Tra_bw' => $request->Tra_bw,
                'fatigue' => $request->fatigue,
                'training' => $request->training,
                'user_id' => Auth::id(),
            ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            Log::debug($e);
            abort(500);
        }
        return redirect()->route('record.index');
    }

    public function showData($id)
    {
        // 渡されてきた記事IDのデータを取得
        $datas = Data::find($id);

        return view('projects.detail', compact('datas'));
    }

    public function record_update($id)
    {
        // 渡されてきた記事IDのデータを取得
        $datas = Data::find($id);

        return view('projects.update', compact('datas'));
    }

    public function update_store(DataUpdateRequest $request, $id)
    {
        
        // 渡されてきた記事IDのデータを取得
        $datas = Data::find($id);

         // トランザクション開始
         DB::beginTransaction();
        // 編集する内容をfillメソッドを使用して記述
        try{
                $datas->fill([
                'bt' => $request->bt,
                'pulse' => $request->pulse,
                'Trb_bw' => $request->Trb_bw,
                'Tra_bw' => $request->Tra_bw,
                'fatigue' => $request->fatigue,
                'training' => $request->training,
            ]);

            // 保存処理
            $datas->save();
            DB::commit();
        }
        catch(\Exception $e) {
            // トランザクションロールバック
            DB::rollBack();

            // ログ出力
            Log::debug($e);

            // エラー画面遷移
            abort(500);
        }
            return redirect()->route('record.index', $datas->id);
            
        }
    /**
     * 記事削除処理
     */
    public function record_delete($id)
    {
        DB::beginTransaction();
        try{
            // 渡されてきた記事IDのデータを取得
            $datas = Data::find($id);

            // 記事削除処理
            $datas->delete();

            DB::commit();
        } catch(\Exception $e){
            DB::rollBack();

            Log::debug($e);

            abort(500);
        }

        return redirect()->route('record.index');
    }

    public function profile_show($id)
    {
        $profile = Profile::where('profile_id' , '=', $id)->first();
        return view('projects.viewProfile',compact('profile'));
    }

    public function create_profile($id)
    {
        $profile_id = $id;
        return view('projects.editProfile',compact('profile_id'));
    }

    public function store_profile(Request $request, $id)
    {
        DB::beginTransaction();
        try{
            $profile_id = $id;
            $profiles = Profile::create([
                'profileName' => $request->name,
                'sports' => $request->sports,
                'team' => $request->team,
                'number' => $request->number,
                'position' => $request->position,
                'profile_id' => Auth::id(),
        ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            Log::debug($e);
            abort(500);
        }
        return redirect()->route('profile', [
            'id' => $profile_id,
        ]);
    }
    public function update_profile($id)
    {
        // 渡されてきた記事IDのデータを取得
        $profile = Profile::where('profile_id' , '=', $id)->first();

        return view('projects.updateProfile', compact('profile'));
    }
    public function storeUpdate_profile(Request $request, $id)
    {
        DB::beginTransaction();
        try{
        $profile = Profile::where('profile_id' , '=', $id)->first();
        $profile ->fill([
            'profileName' => $request->name,
            'sports' => $request->sports,
            'team' => $request->team,
            'number' => $request->number,
            'position' => $request->position,
            'profile_id' => Auth::id(),
        ]);
            DB::commit();
            // 保存処理
            $profile->save();
        }catch(\Exception $e){
            DB::rollBack();
            Log::debug($e);
            abort(500);
        }
        return redirect()->route('profile', $id);
    }
    
    public function search(Request $request, $id)
    {
        $keyword = $request->input('keyword');
        $query = Data::query();
        
        if(!empty($keyword)) {
            $query->orwhere('bt', 'LIKE', "%{$keyword}%");
            $query->orWhere('pulse', 'LIKE', "%{$keyword}%");
            $query->orWhere('Trb_bw', 'LIKE', "%{$keyword}%");
            $query->orWhere('Tra_bw', 'LIKE', "%{$keyword}%");
            $query->orWhere('fatigue', 'LIKE', "%{$keyword}%");
            $query->orWhere('training', 'LIKE', "%{$keyword}%");
            $query->orWhere('created_at', 'LIKE', "%{$keyword}%");
        }
        $seaches = $query->get();
        return view('projects.searchResult', compact('seaches', 'keyword'));

    }
}

