<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function home()
    {
        return view('user.index', [
            'collectionSliders' => $this->collectionSliders(),
        ]);
    }

    private function collectionSliders(): array
    {
        return [
            [
                'number' => '01',
                'title' => 'Dòng váy VIP',
                'description' => 'Những thiết kế váy cưới hiện đại, thanh lịch và dễ mặc. Dòng VIP được SORA BRIDAL chọn lọc kỹ lưỡng để bạn tự tin tỏa sáng trong ngày cưới mà không cần đắn đo về chi phí.',
                'cta_label' => 'Xem BST váy',
                'cta_url' => 'https://album.sorawedding.vn/soravaycuoi/vayluxury1/',
                'images' => [
                    ['src' => 'user/vayVip1.jpg', 'alt' => 'Váy VIP 1'],
                    ['src' => 'user/vayVip2.jpg', 'alt' => 'Váy VIP 2'],
                    ['src' => 'user/vayVip3.jpg', 'alt' => 'Váy VIP 3'],
                ],
            ],
            [
                'number' => '02',
                'title' => 'Váy luxury',
                'description' => 'Những thiết kế cao cấp với chất liệu sang trọng và đường may tinh xảo. Dòng Luxury không chỉ đẹp trên ảnh mà còn hoàn hảo để bạn mặc trong ngày trọng đại.',
                'cta_label' => 'Xem BST váy',
                'cta_url' => 'https://album.sorawedding.vn/soravaycuoi/radiancecouture/',
                'images' => [
                    ['src' => 'user/vayLux1.jpg', 'alt' => 'Váy Luxury 1'],
                    ['src' => 'user/vayLux2.jpg', 'alt' => 'Váy Luxury 2'],
                    ['src' => 'user/vayLux3.jpg', 'alt' => 'Váy Luxury 3'],
                ],
            ],
            [
                'number' => '03',
                'title' => 'Váy diamond',
                'description' => 'Dòng váy cao cấp nhất của SORA BRIDAL. Mỗi chiếc váy Diamond được thiết kế và may đo riêng theo số đo, phong cách và “ước mơ” của bạn. Không có chiếc váy nào giống chiếc váy nào – vì mỗi chiếc đều là độc bản.',
                'cta_label' => 'Xem BST váy',
                'cta_url' => 'https://album.sorawedding.vn/soravaycuoi/symphonycouture/',
                'images' => [
                    ['src' => 'user/vaySignature1.jpg', 'alt' => 'Váy Diamond 1'],
                    ['src' => 'user/vaySignature2.jpg', 'alt' => 'Váy Diamond 2'],
                    ['src' => 'user/vaySignature3.jpg', 'alt' => 'Váy Diamond 3'],
                ],
            ],
        ];
    }

    public function showDatLichForm()
    {
        return view('user.dat-lich');
    }

    private function normalizeBookingDate(string $value): ?string
    {
        $value = trim($value);

        if ($value === '') {
            return null;
        }

        foreach (['Y-m-d', 'd/m/Y'] as $format) {
            try {
                $date = Carbon::createFromFormat($format, $value);

                if ($date && $date->format($format) === $value) {
                    return $date->format('Y-m-d');
                }
            } catch (\Throwable $exception) {
                continue;
            }
        }

        return null;
    }
}
