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
            'beforeAfterItems' => $this->beforeAfterItems(),
            'homeBlogs' => $this->homeBlogs(),
            'feedbackImages' => $this->feedbackImages(),
        ]);
    }

    private function beforeAfterItems(): array
    {
        return [
            [
                'title' => 'Ảnh photoshop mặt cỏ trước & sau',
                'before_src' => 'user/anhPtsTruoc1.webp',
                'before_alt' => 'Trước retouch',
                'after_src' => 'user/anhPtsSau1.webp',
                'after_alt' => 'Sau retouch',
                'start' => 50,
            ],
            [
                'title' => 'Ảnh photoshop giả nắng trước & sau',
                'before_src' => 'user/anhPtsTruoc2.webp',
                'before_alt' => 'Trước retouch',
                'after_src' => 'user/anhPtsSau2.webp',
                'after_alt' => 'Sau retouch',
                'start' => 50,
            ],
        ];
    }

    private function homeBlogs(): array
    {
        return [
            [
                'image_src' => 'user/demo.jpg',
                'image_placeholder' => '420x230/f2e3da/b07d62?text=Bí+quyết',
                'image_alt' => 'Blog 1',
                'category' => 'Tư vấn cô dâu',
                'title' => '5 bí quyết chọn phong cách chụp ảnh cưới phù hợp nhất',
                'excerpt' => 'Phù hợp với từng dáng người, tính cách và câu chuyện tình yêu của bạn...',
                'url' => '#',
            ],
            [
                'image_src' => 'user/demo.jpg',
                'image_placeholder' => '420x230/eedfd6/b07d62?text=Xu+hướng',
                'image_alt' => 'Blog 2',
                'category' => 'Xu hướng 2025',
                'title' => 'Top 3 concept phim trường được yêu thích nhất năm 2025',
                'excerpt' => 'Minimalism, vintage và cổ điển châu Âu đang dẫn đầu xu hướng ảnh cưới...',
                'url' => '#',
            ],
            [
                'image_src' => 'user/demo.jpg',
                'image_placeholder' => '420x230/f3e3db/b07d62?text=Phim+trường',
                'image_alt' => 'Blog 3',
                'category' => 'Tin Sora',
                'title' => 'Ra mắt phim trường "Hoa Sữa" – lãng mạn mùa thu Hà Nội',
                'excerpt' => 'Không gian mới hoàn toàn dành riêng cho các cặp đôi yêu vẻ đẹp thu Hà Nội...',
                'url' => '#',
            ],
            [
                'image_src' => 'user/demo.jpg',
                'image_placeholder' => '420x230/e8e0d8/b07d62?text=Checklist',
                'image_alt' => 'Blog 4',
                'category' => 'Hướng dẫn',
                'title' => 'Checklist chuẩn bị ngày chụp ảnh cưới không bỏ sót điều gì',
                'excerpt' => 'Từ trang phục, phụ kiện đến lịch trình – tất cả trong một danh sách gọn gàng...',
                'url' => '#',
            ],
        ];
    }

    private function feedbackImages(): array
    {
        $files = glob(public_path('user/feedback/*.{jpg,jpeg,png,webp}'), GLOB_BRACE) ?: [];
        sort($files, SORT_NATURAL);

        return array_map(function (string $file) {
            $name = pathinfo($file, PATHINFO_FILENAME);

            return [
                'src' => 'user/feedback/' . basename($file),
                'alt' => 'Phản hồi khách hàng ' . $name,
            ];
        }, $files);
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
