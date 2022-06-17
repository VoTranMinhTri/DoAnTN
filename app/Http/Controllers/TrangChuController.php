<?php

namespace App\Http\Controllers;

use App\Models\DienThoai;
use App\Models\KhuyenMai;
use App\Models\ChiTietDienThoai;
use App\Models\ChiTietKhuyenMai;
use App\Models\HinhAnhChungCuaDienThoai;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\DanhGia;

class TrangChuController extends Controller
{
    public function index()
    {
        $danhSachDienThoai = DB::select('SELECT dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh
        FROM dien_thoais, chi_tiet_dien_thoais, hinh_anh_chung_cua_dien_thoais
        WHERE chi_tiet_dien_thoais.dien_thoai_id = dien_thoais.id
        AND hinh_anh_chung_cua_dien_thoais.dien_thoai_id = dien_thoais.id
        AND hinh_anh_chung_cua_dien_thoais.loai_hinh = 0
        GROUP BY dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh');

        foreach ($danhSachDienThoai as $tp) {
            $tp->gia = ChiTietDienThoai::where('dien_thoai_id', '=', $tp->id)->min('gia');
            $khuyenMai = ChiTietKhuyenMai::where('dien_thoai_id', '=', $tp->id)->first();
            if (!empty($khuyenMai)) {
                $thoiGianKhuyenMai = KhuyenMai::where('id', '=', $khuyenMai->khuyen_mai_id)->first();
                if (strtotime($thoiGianKhuyenMai->ngay_ket_thuc) >= strtotime(date("Y-m-d"))) {
                    $tp->phan_tram_giam = $khuyenMai->phan_tram_giam;
                } else {
                    $tp->phan_tram_giam = 0;
                }
            } else {
                $tp->phan_tram_giam = 0;
            }
            $danhSachDanhGia = DanhGia::where('dien_thoai_id', '=', $tp->id)->get();
            if (count($danhSachDanhGia) > 0) {
                $temp = 0;
                foreach ($danhSachDanhGia as $dg) {
                    $temp += $dg->so_sao;
                }
                $tp->so_sao_trung_binh = $temp / count($danhSachDanhGia);
            } else {
                $tp->so_sao_trung_binh = 0;
            }
            $tp->so_luot_danh_gia = count($danhSachDanhGia);
        }
        return view('user/index', ['danhSachDienThoai' => $danhSachDienThoai]);
    }

    public function filterProduct(Request $request)
    {
        $output = '';
        if ($request->idBrand == 0) {
            $danhSachDienThoai = DB::select('SELECT dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh
            FROM dien_thoais, chi_tiet_dien_thoais, hinh_anh_chung_cua_dien_thoais
            WHERE chi_tiet_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.loai_hinh = 0
            GROUP BY dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh');

            foreach ($danhSachDienThoai as $tp) {
                $tp->gia = ChiTietDienThoai::where('dien_thoai_id', '=', $tp->id)->min('gia');
                $khuyenMai = ChiTietKhuyenMai::where('dien_thoai_id', '=', $tp->id)->first();
                if (!empty($khuyenMai)) {
                    $thoiGianKhuyenMai = KhuyenMai::where('id', '=', $khuyenMai->khuyen_mai_id)->first();
                    if (strtotime($thoiGianKhuyenMai->ngay_ket_thuc) >= strtotime(date("Y-m-d"))) {
                        $tp->phan_tram_giam = $khuyenMai->phan_tram_giam;
                    } else {
                        $tp->phan_tram_giam = 0;
                    }
                } else {
                    $tp->phan_tram_giam = 0;
                }
                $danhSachDanhGia = DanhGia::where('dien_thoai_id', '=', $tp->id)->get();
                if (count($danhSachDanhGia) > 0) {
                    $temp = 0;
                    foreach ($danhSachDanhGia as $dg) {
                        $temp += $dg->so_sao;
                    }
                    $tp->so_sao_trung_binh = $temp / count($danhSachDanhGia);
                } else {
                    $tp->so_sao_trung_binh = 0;
                }
                $tp->so_luot_danh_gia = count($danhSachDanhGia);
            }

            foreach ($danhSachDienThoai as $tp) {
                $output .= '<li class="item">
                    <a href="' . route('productDetail', ['sanPhamId' => $tp->id]) . '">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt=""
                                src=" ' . asset("storage/images/$tp->hinh_anh") . ' ">
                        </div>
                        <h3>
                        ' . $tp->ten_san_pham . '
                        </h3>
                        ';
                if ($tp->phan_tram_giam == 0) {
                    $output .= '<strong class="price"> ' . number_format($tp->gia, 0) . '₫</strong>';
                } else {
                    $output .= '<div class="box-p">
                            <p class="price-old black">' . number_format($tp->gia, 0) . '₫</p>
                            <span class="percent">-' . $tp->phan_tram_giam * 100 . '%</span>
                        </div>
                        <strong
                            class="price">' . number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) . '₫
                        </strong>';
                }
                $output .= '<div class="item-rating">';
                if ($tp->so_sao_trung_binh > 4.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 3.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 2.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 1.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 0.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } else {
                    $output .= ' <p>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                }
                $output .= ' <p class="item-rating-total">' . $tp->so_luot_danh_gia . '</p>
                    </div>
                </a>
                <div class="item-bottom">
                    <a href="#" class="shiping"></a>
                </div>
                <a href="javascript:;" class="item-ss">
                    <i></i>
                    So sánh
                </a>
            </li>';
            }
            return response()->json($output);
        } else {
            $danhSachDienThoai = DB::select('SELECT dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh
            FROM dien_thoais, chi_tiet_dien_thoais, hinh_anh_chung_cua_dien_thoais
            WHERE chi_tiet_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.loai_hinh = 0
            AND dien_thoais.thuong_hieu_id = ' . $request->idBrand . '
            GROUP BY dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh');

            foreach ($danhSachDienThoai as $tp) {
                $tp->gia = ChiTietDienThoai::where('dien_thoai_id', '=', $tp->id)->min('gia');
                $khuyenMai = ChiTietKhuyenMai::where('dien_thoai_id', '=', $tp->id)->first();
                if (!empty($khuyenMai)) {
                    $thoiGianKhuyenMai = KhuyenMai::where('id', '=', $khuyenMai->khuyen_mai_id)->first();
                    if (strtotime($thoiGianKhuyenMai->ngay_ket_thuc) >= strtotime(date("Y-m-d"))) {
                        $tp->phan_tram_giam = $khuyenMai->phan_tram_giam;
                    } else {
                        $tp->phan_tram_giam = 0;
                    }
                } else {
                    $tp->phan_tram_giam = 0;
                }
                $danhSachDanhGia = DanhGia::where('dien_thoai_id', '=', $tp->id)->get();
                if (count($danhSachDanhGia) > 0) {
                    $temp = 0;
                    foreach ($danhSachDanhGia as $dg) {
                        $temp += $dg->so_sao;
                    }
                    $tp->so_sao_trung_binh = $temp / count($danhSachDanhGia);
                } else {
                    $tp->so_sao_trung_binh = 0;
                }
                $tp->so_luot_danh_gia = count($danhSachDanhGia);
            }

            foreach ($danhSachDienThoai as $tp) {
                $output .= '<li class="item">
                    <a href="' . route('productDetail', ['sanPhamId' => $tp->id]) . '">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt=""
                                src=" ' . asset("storage/images/$tp->hinh_anh") . ' ">
                        </div>
                        <h3>
                        ' . $tp->ten_san_pham . '
                        </h3>
                        ';
                if ($tp->phan_tram_giam == 0) {
                    $output .= '<strong class="price"> ' . number_format($tp->gia, 0) . '₫</strong>';
                } else {
                    $output .= '<div class="box-p">
                            <p class="price-old black">' . number_format($tp->gia, 0) . '₫</p>
                            <span class="percent">-' . $tp->phan_tram_giam * 100 . '%</span>
                        </div>
                        <strong
                            class="price">' . number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) . '₫
                        </strong>';
                }
                $output .= '<div class="item-rating">';
                if ($tp->so_sao_trung_binh > 4.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 3.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 2.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 1.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 0.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } else {
                    $output .= ' <p>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                }
                $output .= '<p class="item-rating-total">' . $tp->so_luot_danh_gia . '</p>
                    </div>
                </a>
                <div class="item-bottom">
                    <a href="#" class="shiping"></a>
                </div>
                <a href="javascript:;" class="item-ss">
                    <i></i>
                    So sánh
                </a>
            </li>';
            }
            return response()->json($output);
        }
    }

    public function filterProductByPrice(Request $request)
    {
        $output = '';
        if ($request->idBrand == 0) {
            $danhSachDienThoai = DB::select('SELECT dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh
            FROM dien_thoais, chi_tiet_dien_thoais, hinh_anh_chung_cua_dien_thoais
            WHERE chi_tiet_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.loai_hinh = 0
            GROUP BY dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh');

            foreach ($danhSachDienThoai as $tp) {
                $tp->gia = ChiTietDienThoai::where('dien_thoai_id', '=', $tp->id)->min('gia');
                $khuyenMai = ChiTietKhuyenMai::where('dien_thoai_id', '=', $tp->id)->first();
                if (!empty($khuyenMai)) {
                    $thoiGianKhuyenMai = KhuyenMai::where('id', '=', $khuyenMai->khuyen_mai_id)->first();
                    if (strtotime($thoiGianKhuyenMai->ngay_ket_thuc) >= strtotime(date("Y-m-d"))) {
                        $tp->phan_tram_giam = $khuyenMai->phan_tram_giam;
                    } else {
                        $tp->phan_tram_giam = 0;
                    }
                } else {
                    $tp->phan_tram_giam = 0;
                }
                $danhSachDanhGia = DanhGia::where('dien_thoai_id', '=', $tp->id)->get();
                if (count($danhSachDanhGia) > 0) {
                    $temp = 0;
                    foreach ($danhSachDanhGia as $dg) {
                        $temp += $dg->so_sao;
                    }
                    $tp->so_sao_trung_binh = $temp / count($danhSachDanhGia);
                } else {
                    $tp->so_sao_trung_binh = 0;
                }
                $tp->so_luot_danh_gia = count($danhSachDanhGia);
            }

            if ($request->type == 1) {
                foreach ($danhSachDienThoai as $tp) {
                    $output .= '<li class="item">
                        <a href="' . route('productDetail', ['sanPhamId' => $tp->id]) . '">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img item-img_42">
                                <img class="thumb ls-is-cached lazyloaded" alt=""
                                    src=" ' . asset("storage/images/$tp->hinh_anh") . ' ">
                            </div>
                            <h3>
                            ' . $tp->ten_san_pham . '
                            </h3>
                            ';
                    if ($tp->phan_tram_giam == 0) {
                        $output .= '<strong class="price"> ' . number_format($tp->gia, 0) . '₫</strong>';
                    } else {
                        $output .= '<div class="box-p">
                                <p class="price-old black">' . number_format($tp->gia, 0) . '₫</p>
                                <span class="percent">-' . $tp->phan_tram_giam * 100 . '%</span>
                            </div>
                            <strong
                                class="price">' . number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) . '₫
                            </strong>';
                    }
                    $output .= '<div class="item-rating">';
                    if ($tp->so_sao_trung_binh > 4.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 3.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 2.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 1.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 0.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } else {
                        $output .= ' <p>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    }
                    $output .= '<p class="item-rating-total">' . $tp->so_luot_danh_gia . '</p>
                        </div>
                    </a>
                    <div class="item-bottom">
                        <a href="#" class="shiping"></a>
                    </div>
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                    </li>';
                }
                return response()->json($output);
            } else if ($request->type == 2) {
                // Đếm tổng số phần tử của mảng
                $sophantu = count($danhSachDienThoai);
                // Lặp để sắp xếp
                for ($i = 0; $i < $sophantu - 1; $i++) {
                    // Tìm vị trí phần tử lớn nhất
                    $max = $i;
                    for ($j = $i + 1; $j < $sophantu; $j++) {
                        if ($danhSachDienThoai[$j]->phan_tram_giam > $danhSachDienThoai[$max]->phan_tram_giam) {
                            $max = $j;
                        }
                    }
                    // Sau khi có vị trí lớn nhất thì hoán vị
                    // với vị trí thứ $i
                    $temp = $danhSachDienThoai[$i];
                    $danhSachDienThoai[$i] = $danhSachDienThoai[$max];
                    $danhSachDienThoai[$max] = $temp;
                }
            } else {
                // Đếm tổng số phần tử của mảng
                $sophantu = count($danhSachDienThoai);

                // Lặp để sắp xếp
                for ($i = 0; $i < $sophantu - 1; $i++) {
                    // Tìm vị trí phần tử nhỏ nhất
                    $min = $i;
                    for ($j = $i + 1; $j < $sophantu; $j++) {
                        if ($danhSachDienThoai[$j]->gia < $danhSachDienThoai[$min]->gia) {
                            $min = $j;
                        }
                    }

                    // Sau khi có vị trí nhỏ nhất thì hoán vị
                    // với vị trí thứ $i
                    $temp = $danhSachDienThoai[$i];
                    $danhSachDienThoai[$i] = $danhSachDienThoai[$min];
                    $danhSachDienThoai[$min] = $temp;
                }
            }
            foreach ($danhSachDienThoai as $tp) {
                $output .= '<li class="item">
                        <a href="' . route('productDetail', ['sanPhamId' => $tp->id]) . '">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img item-img_42">
                                <img class="thumb ls-is-cached lazyloaded" alt=""
                                    src=" ' . asset("storage/images/$tp->hinh_anh") . ' ">
                            </div>
                            <h3>
                            ' . $tp->ten_san_pham . '
                            </h3>
                            ';
                if ($tp->phan_tram_giam == 0) {
                    $output .= '<strong class="price"> ' . number_format($tp->gia, 0) . '₫</strong>';
                } else {
                    $output .= '<div class="box-p">
                                <p class="price-old black">' . number_format($tp->gia, 0) . '₫</p>
                                <span class="percent">-' . $tp->phan_tram_giam * 100 . '%</span>
                            </div>
                            <strong
                                class="price">' . number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) . '₫
                            </strong>';
                }
                $output .= '<div class="item-rating">';
                if ($tp->so_sao_trung_binh > 4.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 3.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 2.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 1.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } elseif ($tp->so_sao_trung_binh > 0.5) {
                    $output .= ' <p>
                            <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                } else {
                    $output .= ' <p>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                            <i class="icon-star-dark"></i>
                        </p>';
                }
                $output .= '<p class="item-rating-total">' . $tp->so_luot_danh_gia . '</p>
                        </div>
                    </a>
                    <div class="item-bottom">
                        <a href="#" class="shiping"></a>
                    </div>
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>';
            }
            return response()->json($output);
        } else {
            $danhSachDienThoai = DB::select('SELECT dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh
            FROM dien_thoais, chi_tiet_dien_thoais, hinh_anh_chung_cua_dien_thoais
            WHERE chi_tiet_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.dien_thoai_id = dien_thoais.id
            AND hinh_anh_chung_cua_dien_thoais.loai_hinh = 0
            AND dien_thoais.thuong_hieu_id = ' . $request->idBrand . '
            GROUP BY dien_thoais.id, dien_thoais.ten_san_pham, hinh_anh_chung_cua_dien_thoais.hinh_anh');
            foreach ($danhSachDienThoai as $tp) {
                $tp->gia = ChiTietDienThoai::where('dien_thoai_id', '=', $tp->id)->min('gia');
                $khuyenMai = ChiTietKhuyenMai::where('dien_thoai_id', '=', $tp->id)->first();
                if (!empty($khuyenMai)) {
                    $thoiGianKhuyenMai = KhuyenMai::where('id', '=', $khuyenMai->khuyen_mai_id)->first();
                    if (strtotime($thoiGianKhuyenMai->ngay_ket_thuc) >= strtotime(date("Y-m-d"))) {
                        $tp->phan_tram_giam = $khuyenMai->phan_tram_giam;
                    } else {
                        $tp->phan_tram_giam = 0;
                    }
                } else {
                    $tp->phan_tram_giam = 0;
                }
                $danhSachDanhGia = DanhGia::where('dien_thoai_id', '=', $tp->id)->get();
                if (count($danhSachDanhGia) > 0) {
                    $temp = 0;
                    foreach ($danhSachDanhGia as $dg) {
                        $temp += $dg->so_sao;
                    }
                    $tp->so_sao_trung_binh = $temp / count($danhSachDanhGia);
                } else {
                    $tp->so_sao_trung_binh = 0;
                }
                $tp->so_luot_danh_gia = count($danhSachDanhGia);
            }
            if ($request->type == 1) {
                foreach ($danhSachDienThoai as $tp) {
                    $output .= '<li class="item">
                    <a href="' . route('productDetail', ['sanPhamId' => $tp->id]) . '">
                        <div class="item-label">
                            <span class="lb-tragop">Trả góp 0%</span>
                        </div>
                        <div class="item-img item-img_42">
                            <img class="thumb ls-is-cached lazyloaded" alt=""
                                src=" ' . asset("storage/images/$tp->hinh_anh") . ' ">
                        </div>
                        <h3>
                        ' . $tp->ten_san_pham . '
                        </h3>
                        ';
                    if ($tp->phan_tram_giam == 0) {
                        $output .= '<strong class="price"> ' . number_format($tp->gia, 0) . '₫</strong>';
                    } else {
                        $output .= '<div class="box-p">
                            <p class="price-old black">' . number_format($tp->gia, 0) . '₫</p>
                            <span class="percent">-' . $tp->phan_tram_giam * 100 . '%</span>
                        </div>
                        <strong
                            class="price">' . number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) . '₫
                        </strong>';
                    }
                    $output .= '<div class="item-rating">';
                    if ($tp->so_sao_trung_binh > 4.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 3.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 2.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 1.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 0.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } else {
                        $output .= ' <p>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    }
                    $output .= '<p class="item-rating-total">' . $tp->so_luot_danh_gia . '</p>
                    </div>
                </a>
                <div class="item-bottom">
                    <a href="#" class="shiping"></a>
                </div>
                <a href="javascript:;" class="item-ss">
                    <i></i>
                    So sánh
                </a>
                </li>';
                }
                return response()->json($output);
            } else if ($request->type == 2) {
                // Đếm tổng số phần tử của mảng
                $sophantu = count($danhSachDienThoai);
                // Lặp để sắp xếp
                for ($i = 0; $i < $sophantu - 1; $i++) {
                    // Tìm vị trí phần tử lớn nhất
                    $max = $i;
                    for ($j = $i + 1; $j < $sophantu; $j++) {
                        if ($danhSachDienThoai[$j]->phan_tram_giam > $danhSachDienThoai[$max]->phan_tram_giam) {
                            $max = $j;
                        }
                    }
                    // Sau khi có vị trí lớn nhất thì hoán vị
                    // với vị trí thứ $i
                    $temp = $danhSachDienThoai[$i];
                    $danhSachDienThoai[$i] = $danhSachDienThoai[$max];
                    $danhSachDienThoai[$max] = $temp;
                }
                foreach ($danhSachDienThoai as $tp) {
                    $output .= '<li class="item">
                        <a href="' . route('productDetail', ['sanPhamId' => $tp->id]) . '">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img item-img_42">
                                <img class="thumb ls-is-cached lazyloaded" alt=""
                                    src=" ' . asset("storage/images/$tp->hinh_anh") . ' ">
                            </div>
                            <h3>
                            ' . $tp->ten_san_pham . '
                            </h3>
                            ';
                    if ($tp->phan_tram_giam == 0) {
                        $output .= '<strong class="price"> ' . number_format($tp->gia, 0) . '₫</strong>';
                    } else {
                        $output .= '<div class="box-p">
                                <p class="price-old black">' . number_format($tp->gia, 0) . '₫</p>
                                <span class="percent">-' . $tp->phan_tram_giam * 100 . '%</span>
                            </div>
                            <strong
                                class="price">' . number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) . '₫
                            </strong>';
                    }
                    $output .= '<div class="item-rating">';
                    if ($tp->so_sao_trung_binh > 4.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 3.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 2.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 1.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 0.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } else {
                        $output .= ' <p>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    }
                    $output .= '<p class="item-rating-total">' . $tp->so_luot_danh_gia . '</p>
                        </div>
                    </a>
                    <div class="item-bottom">
                        <a href="#" class="shiping"></a>
                    </div>
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>';
                }
                return response()->json($output);
            } else {
                // Đếm tổng số phần tử của mảng
                $sophantu = count($danhSachDienThoai);

                // Lặp để sắp xếp
                for ($i = 0; $i < $sophantu - 1; $i++) {
                    // Tìm vị trí phần tử nhỏ nhất
                    $min = $i;
                    for ($j = $i + 1; $j < $sophantu; $j++) {
                        if ($danhSachDienThoai[$j]->gia < $danhSachDienThoai[$min]->gia) {
                            $min = $j;
                        }
                    }

                    // Sau khi có vị trí nhỏ nhất thì hoán vị
                    // với vị trí thứ $i
                    $temp = $danhSachDienThoai[$i];
                    $danhSachDienThoai[$i] = $danhSachDienThoai[$min];
                    $danhSachDienThoai[$min] = $temp;
                }
                foreach ($danhSachDienThoai as $tp) {
                    $output .= '<li class="item">
                        <a href="' . route('productDetail', ['sanPhamId' => $tp->id]) . '">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img item-img_42">
                                <img class="thumb ls-is-cached lazyloaded" alt=""
                                    src=" ' . asset("storage/images/$tp->hinh_anh") . ' ">
                            </div>
                            <h3>
                            ' . $tp->ten_san_pham . '
                            </h3>
                            ';
                    if ($tp->phan_tram_giam == 0) {
                        $output .= '<strong class="price"> ' . number_format($tp->gia, 0) . '₫</strong>';
                    } else {
                        $output .= '<div class="box-p">
                                <p class="price-old black">' . number_format($tp->gia, 0) . '₫</p>
                                <span class="percent">-' . $tp->phan_tram_giam * 100 . '%</span>
                            </div>
                            <strong
                                class="price">' . number_format($tp->gia - $tp->gia * $tp->phan_tram_giam, 0) . '₫
                            </strong>';
                    }
                    $output .= '<div class="item-rating">';
                    if ($tp->so_sao_trung_binh > 4.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 3.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 2.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 1.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } elseif ($tp->so_sao_trung_binh > 0.5) {
                        $output .= ' <p>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    } else {
                        $output .= ' <p>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                                <i class="icon-star-dark"></i>
                            </p>';
                    }
                    $output .= '<p class="item-rating-total">' . $tp->so_luot_danh_gia . '</p>
                        </div>
                    </a>
                    <div class="item-bottom">
                        <a href="#" class="shiping"></a>
                    </div>
                    <a href="javascript:;" class="item-ss">
                        <i></i>
                        So sánh
                    </a>
                </li>';
                }
                return response()->json($output);
            }
        }
    }
}
