<?php

namespace App\Repositories;

use App\Models\PostinganKomentar;

class KomentarRepository
{
    public static function getByPostingan($posinganId)
    {
        return PostinganKomentar::where('postingan_id', $posinganId)->get();
    }

    public static function create($input)
    {
        return PostinganKomentar::create($input);
    }

    public static function update($id, $input)
    {
        $postingan = PostinganKomentar::find($id);
        $postingan->komentar = $input['komentar'];
        $postingan->save();

        return $postingan;
    }

    public static function destroy($id)
    {
        return PostinganKomentar::find($id)->delete();
    }
}
