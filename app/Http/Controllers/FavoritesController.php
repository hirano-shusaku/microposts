<?php

namespace App\Http\Controllers;

class FavoritesController extends Controller
{
        /**
     * 投稿をお気に入りするアクション。
     *
     * @param  $micropost  投稿のID
     * @return \Illuminate\Http\Response
     */
        public function store($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 IDの投稿をお気に入りにする
        \Auth::user()->favorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
       /**
     * 投稿をお気に入りやめるアクション。
     *
     * @param  $micropostId  投稿のID
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropost)
    {
        // 認証済みユーザ（閲覧者）が、 IDの投稿をお気に入りをやめる
        \Auth::user()->unfavorite($micropost);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
