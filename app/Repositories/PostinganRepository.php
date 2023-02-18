<?php

namespace App\Repositories;

use App\Models\Postingan;

class PostinganRepository
{
    public static function get($id = null)
    {
        $getDatat = Postingan::withCount(['likes'])->with(['komentars']);
        if (! is_null($id)) $getDatat->where('id', $id);

        return $getDatat->get();
    }

    public static function detail($id)
    {
        return Postingan::find($id);
    }

    public static function create($input)
    {
        return Postingan::create($input);
    }

    public static function update($id, $input)
    {
        $postingan = Postingan::find($id);
        $postingan->deskripsi = $input['deskripsi'];
        $postingan->save();

        return $postingan;
    }

    public static function delete($id)
    {
        return Postingan::find($id)->delete();
    }
}
