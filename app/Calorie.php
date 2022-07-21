<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calorie extends Model
{

    public static $rules = [
        'protein' => 'nullable',
        'carbohydrate' => 'nullable',
        'fat' => 'nullable',
        'time_no' => 'nullable',
    ];
    public function calorie()
  {
      return $this->belongsTo(Calorie::class);
  }
    // モデルに関連付けるテーブル
    protected $table = 'calories';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'protein',
        'carbohydrate',
        'fat',
        'created_at',
        'updated_at'
    ];

    /**
     * 一覧画面表示用にテーブルから全てのデータを取得
     */
    public function findAllCalories()
    {
        return Calorie::all();
    }

    /**
     * リクエストされたIDをもとにテーブルのレコードを1件取得
     */
    public function findCalorieById($id)
    {
        return Calorie::find($id);
    }

    /**
     * 登録処理
     */
    public function InsertCalorie($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'protein' => $request->protein,
            'carbohydrate' => $request->carbohydrate,
            'fat' => $request->fat,
        ]);
    }

    /**
     * 更新処理
     */
    public function updateCalorie($request, $calorie)
    {
        $result = $calorie->fill([
            'protein' => $request->protein,
            'carbohydrate' => $request->carbohydrate,
            'fat' => $request->fat
        ])->save();

        return $result;
    }

    /**
     * 削除処理
     */
    public function deleteCalorieById($id)
    {
        return $this->destroy($id);
    }
}
