<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    public function start(Request $request)
    {
        // part1 ni faqat local yaratamiz
        $part1 = 'mock-part1-'.substr(md5(time()), 0, 8);
        Cache::put('part1', $part1, 600); // 10 min

        return response()->json([
            'status' => 'ok',
            'part1' => $part1,
        ]);
    }

    public function receiver(Request $request)
    {
        $part1 = Cache::get('part1');
        $part2 = trim($request->input('part2', '-simulated-part2-'));
        $finalCode = $part1.$part2;
        Cache::put('final_code', $finalCode, 600);

        return response()->json([
            'status' => 'received',
            'final_code' => $finalCode,
        ]);
    }

    public function result()
    {
        $finalCode = Cache::get('final_code');

        return response()->json([
            'combined_code' => $finalCode,
            'final_message' => "Simulated final message: final_code=$finalCode",
        ]);
    }
}
