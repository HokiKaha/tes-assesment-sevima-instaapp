<?php

namespace App\Services;

use App\Repositories\KomentarRepository;

class KomentarService
{
    public static function get()
    {
        return [
            'data' => KomentarRepository::getAll()
        ];
    }

    public static function store($input)
    {
        $inserted = KomentarRepository::create($input);
        return [
            'data' => $inserted
        ];
    }

    public static function update($id, $input)
    {
        $inserted = KomentarRepository::update($id, $input);
        return [
            'data' => $inserted
        ];
    }

    public static function destroy($id)
    {
        $deleted = KomentarRepository::destroy($id);
        return [
            'data' => $deleted
        ];
    }
}
