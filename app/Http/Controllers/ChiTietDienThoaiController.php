<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDienThoai;
use App\Models\DienThoai;
use App\Models\ManHinh;
use App\Models\MauSac;
use App\Models\CameraSau;
use App\Models\CameraTruoc;
use App\Models\BoNho_LuuTru;
use App\Models\ThongTinChung;
use App\Models\TienIch;
use App\Models\Pin_Sac;
use App\Models\KetNoi;
use App\Models\HeDieuHanh_CPU;
use App\Models\HinhAnhMauSacCuaDienThoai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChiTietDienThoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChiTietDienThoaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Kiểm tra id màn hình
        $danhSachManHinh = ManHinh::All();
        $chuoiIdMH = '';
        $dem = 0;
        foreach ($danhSachManHinh as $tp) {
            if ($dem == 0) {
                $chuoiIdMH = $tp->id;
            } else {
                $chuoiIdMH = $chuoiIdMH . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id màu sắc
        $danhSachMauSac = MauSac::All();
        $chuoiIdMS = '';
        $dem = 0;
        foreach ($danhSachMauSac as $tp) {
            if ($dem == 0) {
                $chuoiIdMS = $tp->id;
            } else {
                $chuoiIdMS = $chuoiIdMS . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id camera sau
        $danhSachCameraSau = CameraSau::All();
        $chuoiIdCMRS = '';
        $dem = 0;
        foreach ($danhSachCameraSau as $tp) {
            if ($dem == 0) {
                $chuoiIdCMRS = $tp->id;
            } else {
                $chuoiIdCMRS = $chuoiIdCMRS . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id camera trước
        $danhSachCameraTruoc = CameraTruoc::All();
        $chuoiIdCMRT = '';
        $dem = 0;
        foreach ($danhSachCameraTruoc as $tp) {
            if ($dem == 0) {
                $chuoiIdCMRT = $tp->id;
            } else {
                $chuoiIdCMRT = $chuoiIdCMRT . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id hệ điều hành
        $danhSachHeDieuHanh = HeDieuHanh_CPU::All();
        $chuoiIdHDH = '';
        $dem = 0;
        foreach ($danhSachHeDieuHanh as $tp) {
            if ($dem == 0) {
                $chuoiIdHDH = $tp->id;
            } else {
                $chuoiIdHDH = $chuoiIdHDH . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id bộ nhớ
        $danhSachBoNho = BoNho_LuuTru::All();
        $chuoiIdBN = '';
        $dem = 0;
        foreach ($danhSachBoNho as $tp) {
            if ($dem == 0) {
                $chuoiIdBN = $tp->id;
            } else {
                $chuoiIdBN = $chuoiIdBN . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id kết nối
        $danhSachKetNoi = KetNoi::All();
        $chuoiIdKN = '';
        $dem = 0;
        foreach ($danhSachKetNoi as $tp) {
            if ($dem == 0) {
                $chuoiIdKN = $tp->id;
            } else {
                $chuoiIdKN = $chuoiIdKN . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id pin
        $danhSachPin = Pin_Sac::All();
        $chuoiIdPin = '';
        $dem = 0;
        foreach ($danhSachPin as $tp) {
            if ($dem == 0) {
                $chuoiIdPin = $tp->id;
            } else {
                $chuoiIdPin = $chuoiIdPin . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id tiện ích
        $danhSachTienIch = TienIch::All();
        $chuoiIdTienIch = '';
        $dem = 0;
        foreach ($danhSachTienIch as $tp) {
            if ($dem == 0) {
                $chuoiIdTienIch = $tp->id;
            } else {
                $chuoiIdTienIch = $chuoiIdTienIch . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id thông tin chung
        $danhSachThongTinChung = ThongTinChung::All();
        $chuoiIdTTC = '';
        $dem = 0;
        foreach ($danhSachThongTinChung as $tp) {
            if ($dem == 0) {
                $chuoiIdTTC = $tp->id;
            } else {
                $chuoiIdTTC = $chuoiIdTTC . ',' . $tp->id;
            }
            $dem++;
        }

        //Kiểm tra thông tin các trường nhập vào
        $validated = Validator::make(
            $request->all(),
            [
                'manhinh' => 'required|in:' . $chuoiIdMH,
                'camerasau' => 'required|in:' . $chuoiIdCMRS,
                'cameratruoc' => 'required|in:' . $chuoiIdCMRT,
                'hedieuhanh' => 'required|in:' . $chuoiIdHDH,
                'bonholuutru' => 'required|in:' . $chuoiIdBN,
                'ketnoi' => 'required|in:' . $chuoiIdKN,
                'pinsac' => 'required|in:' . $chuoiIdPin,
                'tienich' => 'required|in:' . $chuoiIdTienIch,
                'thongtinchung' => 'required|in:' . $chuoiIdTTC,
                'mausac' => 'required|in:' . $chuoiIdMS,
                'gia' => 'required|numeric|min:0',
            ],
            $messages = [
                'required' => ':attribute không được bỏ trống !',
                'in' => ':attribute không đúng với dữ liệu hệ thống !',
                'numeric' => ':attribute phải là kiểu số !',
                'min' => ':attribute tối thiểu là 0 !'
            ],
            [
                'manhinh' => 'Màn hình',
                'camerasau' => 'Camera sau',
                'cameratruoc' => 'Camera trước',
                'hedieuhanh' => 'Hệ điều hành',
                'bonholuutru' => 'Bộ nhớ lưu trữ',
                'ketnoi' => 'Kết nối',
                'pinsac' => 'Pin sạc',
                'tienich' => 'Tiện ích',
                'thongtinchung' => 'Thông tin chung',
                'mausac' => 'Màu sắc',
                'gia' => 'Giá',
            ]
        )->validate();

        $dienThoai = DienThoai::where('id', '=', $request->input('dienthoaiid'))
            ->first();
        if (empty($dienThoai)) {
            return abort(404);
        }
        $chiTietDienThoai = new ChiTietDienThoai();
        $chiTietDienThoai->fill([
            'dien_thoai_id' => $request->input('dienthoaiid'),
            'man_hinh_id' => $request->input('manhinh'),
            'camera_sau_id' => $request->input('camerasau'),
            'camera_truoc_id' => $request->input('cameratruoc'),
            'he_dieu_hanh_cpu_id' => $request->input('hedieuhanh'),
            'bo_nho_luu_tru_id' => $request->input('bonholuutru'),
            'ket_noi_id' => $request->input('ketnoi'),
            'pin_sac_id' => $request->input('pinsac'),
            'tien_ich_id' => $request->input('tienich'),
            'thong_tin_chung_id' => $request->input('thongtinchung'),
            'mau_sac_id' => $request->input('mausac'),
            'gia' => $request->input('gia'),
        ]);
        if ($chiTietDienThoai->save() == true) {
            $kTMauSac = ChiTietDienThoai::where('dien_thoai_id', '=', $chiTietDienThoai->dien_thoai_id)
                ->where('mau_sac_id', '=', $chiTietDienThoai->mau_sac_id)
                ->where('id','!=',$chiTietDienThoai->id)
                ->first();
            if (empty($kTMauSac)) {
                $hinhAnhMauSac = new HinhAnhMauSacCuaDienThoai();
                $hinhAnhMauSac->fill([
                    'dien_thoai_id' => $chiTietDienThoai->dien_thoai_id,
                    'mau_sac_id' => $chiTietDienThoai->mau_sac_id,
                    'hinh_anh_dai_dien' => 1,
                    'hinh_anh' => 'default/default.png',
                ]);
                if ($hinhAnhMauSac->save() == true) {
                    return redirect()->back()->with('thongbao', 'Thêm chi tiết sản phẩm thành công !');
                }
                return redirect()->back()->with('thongbao', 'Thêm chi tiết sản phẩm không thành công ! Hình ảnh màu sắc đại diện của chi tiết có lỗi khi thêm vào hệ thống !');
            }
            return redirect()->back()->with('thongbao', 'Thêm chi tiết sản phẩm thành công !');
        }
        return redirect()->back()->with('thongbao', 'Thêm chi tiết sản phẩm không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChiTietDienThoai  $chiTietDienThoai
     * @return \Illuminate\Http\Response
     */
    public function show(ChiTietDienThoai $chiTietDienThoai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChiTietDienThoai  $chiTietDienThoai
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiTietDienThoai $chiTietDienThoai)
    {
        $danhSachManHinh = ManHinh::All();
        $danhSachMauSac = MauSac::All();
        $danhSachCameraSau = CameraSau::All();
        $danhSachCameraTruoc = CameraTruoc::All();
        $danhSachHeDieuHanh = HeDieuHanh_CPU::All();
        $danhSachBoNho = BoNho_LuuTru::All();
        $danhSachKetNoi = KetNoi::All();
        $danhSachTienIch = TienIch::All();
        $danhSachThongTinChung = ThongTinChung::All();
        $danhSachPin = Pin_Sac::All();
        $dienThoai = DienThoai::where('id', '=', $chiTietDienThoai->dien_thoai_id)->first();
        return view('admin/edit-page/edit-product-detail', [
            'chiTietDienThoai' => $chiTietDienThoai, 'dienThoai' => $dienThoai, 'danhSachManHinh' => $danhSachManHinh, 'danhSachMauSac' => $danhSachMauSac, 'danhSachCameraSau' => $danhSachCameraSau, 'danhSachCameraTruoc' => $danhSachCameraTruoc, 'danhSachHeDieuHanh' => $danhSachHeDieuHanh, 'danhSachBoNho' => $danhSachBoNho, 'danhSachKetNoi' => $danhSachKetNoi, 'danhSachTienIch' => $danhSachTienIch, 'danhSachThongTinChung' => $danhSachThongTinChung, 'danhSachPin' => $danhSachPin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChiTietDienThoaiRequest  $request
     * @param  \App\Models\ChiTietDienThoai  $chiTietDienThoai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiTietDienThoai $chiTietDienThoai)
    {
        // Kiểm tra id màn hình
        $danhSachManHinh = ManHinh::All();
        $chuoiIdMH = '';
        $dem = 0;
        foreach ($danhSachManHinh as $tp) {
            if ($dem == 0) {
                $chuoiIdMH = $tp->id;
            } else {
                $chuoiIdMH = $chuoiIdMH . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id màu sắc
        $danhSachMauSac = MauSac::All();
        $chuoiIdMS = '';
        $dem = 0;
        foreach ($danhSachMauSac as $tp) {
            if ($dem == 0) {
                $chuoiIdMS = $tp->id;
            } else {
                $chuoiIdMS = $chuoiIdMS . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id camera sau
        $danhSachCameraSau = CameraSau::All();
        $chuoiIdCMRS = '';
        $dem = 0;
        foreach ($danhSachCameraSau as $tp) {
            if ($dem == 0) {
                $chuoiIdCMRS = $tp->id;
            } else {
                $chuoiIdCMRS = $chuoiIdCMRS . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id camera trước
        $danhSachCameraTruoc = CameraTruoc::All();
        $chuoiIdCMRT = '';
        $dem = 0;
        foreach ($danhSachCameraTruoc as $tp) {
            if ($dem == 0) {
                $chuoiIdCMRT = $tp->id;
            } else {
                $chuoiIdCMRT = $chuoiIdCMRT . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id hệ điều hành
        $danhSachHeDieuHanh = HeDieuHanh_CPU::All();
        $chuoiIdHDH = '';
        $dem = 0;
        foreach ($danhSachHeDieuHanh as $tp) {
            if ($dem == 0) {
                $chuoiIdHDH = $tp->id;
            } else {
                $chuoiIdHDH = $chuoiIdHDH . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id bộ nhớ
        $danhSachBoNho = BoNho_LuuTru::All();
        $chuoiIdBN = '';
        $dem = 0;
        foreach ($danhSachBoNho as $tp) {
            if ($dem == 0) {
                $chuoiIdBN = $tp->id;
            } else {
                $chuoiIdBN = $chuoiIdBN . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id kết nối
        $danhSachKetNoi = KetNoi::All();
        $chuoiIdKN = '';
        $dem = 0;
        foreach ($danhSachKetNoi as $tp) {
            if ($dem == 0) {
                $chuoiIdKN = $tp->id;
            } else {
                $chuoiIdKN = $chuoiIdKN . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id pin
        $danhSachPin = Pin_Sac::All();
        $chuoiIdPin = '';
        $dem = 0;
        foreach ($danhSachPin as $tp) {
            if ($dem == 0) {
                $chuoiIdPin = $tp->id;
            } else {
                $chuoiIdPin = $chuoiIdPin . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id tiện ích
        $danhSachTienIch = TienIch::All();
        $chuoiIdTienIch = '';
        $dem = 0;
        foreach ($danhSachTienIch as $tp) {
            if ($dem == 0) {
                $chuoiIdTienIch = $tp->id;
            } else {
                $chuoiIdTienIch = $chuoiIdTienIch . ',' . $tp->id;
            }
            $dem++;
        }

        // Kiểm tra id thông tin chung
        $danhSachThongTinChung = ThongTinChung::All();
        $chuoiIdTTC = '';
        $dem = 0;
        foreach ($danhSachThongTinChung as $tp) {
            if ($dem == 0) {
                $chuoiIdTTC = $tp->id;
            } else {
                $chuoiIdTTC = $chuoiIdTTC . ',' . $tp->id;
            }
            $dem++;
        }

        //Kiểm tra thông tin các trường nhập vào
        $validated = Validator::make(
            $request->all(),
            [
                'manhinh' => 'required|in:' . $chuoiIdMH,
                'camerasau' => 'required|in:' . $chuoiIdCMRS,
                'cameratruoc' => 'required|in:' . $chuoiIdCMRT,
                'hedieuhanh' => 'required|in:' . $chuoiIdHDH,
                'bonholuutru' => 'required|in:' . $chuoiIdBN,
                'ketnoi' => 'required|in:' . $chuoiIdKN,
                'pinsac' => 'required|in:' . $chuoiIdPin,
                'tienich' => 'required|in:' . $chuoiIdTienIch,
                'thongtinchung' => 'required|in:' . $chuoiIdTTC,
                'mausac' => 'required|in:' . $chuoiIdMS,
                'gia' => 'required|numeric|min:0',
            ],
            $messages = [
                'required' => ':attribute không được bỏ trống !',
                'in' => ':attribute không đúng với dữ liệu hệ thống !',
                'numeric' => ':attribute phải là kiểu số !',
                'min' => ':attribute tối thiểu là 0 !'
            ],
            [
                'manhinh' => 'Màn hình',
                'camerasau' => 'Camera sau',
                'cameratruoc' => 'Camera trước',
                'hedieuhanh' => 'Hệ điều hành',
                'bonholuutru' => 'Bộ nhớ lưu trữ',
                'ketnoi' => 'Kết nối',
                'pinsac' => 'Pin sạc',
                'tienich' => 'Tiện ích',
                'thongtinchung' => 'Thông tin chung',
                'mausac' => 'Màu sắc',
                'gia' => 'Giá',
            ]
        )->validate();

        $dienThoai = DienThoai::where('id', '=', $request->input('dienthoaiid'))
            ->first();
        if (empty($dienThoai)) {
            return abort(404);
        }
        $chiTietDienThoai->fill([
            'dien_thoai_id' => $request->input('dienthoaiid'),
            'man_hinh_id' => $request->input('manhinh'),
            'camera_sau_id' => $request->input('camerasau'),
            'camera_truoc_id' => $request->input('cameratruoc'),
            'he_dieu_hanh_cpu_id' => $request->input('hedieuhanh'),
            'bo_nho_luu_tru_id' => $request->input('bonholuutru'),
            'ket_noi_id' => $request->input('ketnoi'),
            'pin_sac_id' => $request->input('pinsac'),
            'tien_ich_id' => $request->input('tienich'),
            'thong_tin_chung_id' => $request->input('thongtinchung'),
            'mau_sac_id' => $request->input('mausac'),
            'gia' => $request->input('gia'),
        ]);
        if ($chiTietDienThoai->save() == true) {
            $kTMauSac = ChiTietDienThoai::where('dien_thoai_id', '=', $chiTietDienThoai->dien_thoai_id)
                ->where('mau_sac_id', '=', $chiTietDienThoai->mau_sac_id)
                ->where('id','!=',$chiTietDienThoai->id)
                ->first();
            if (empty($kTMauSac)) {
                $hinhAnhMauSac = new HinhAnhMauSacCuaDienThoai();
                $hinhAnhMauSac->fill([
                    'dien_thoai_id' => $chiTietDienThoai->dien_thoai_id,
                    'mau_sac_id' => $chiTietDienThoai->mau_sac_id,
                    'hinh_anh_dai_dien' => 1,
                    'hinh_anh' => 'default/default.png',
                ]);
                if ($hinhAnhMauSac->save() == true) {
                    return redirect()->back()->with('thongbao', 'Cập nhật chi tiết sản phẩm thành công !');
                }
                return redirect()->back()->with('thongbao', 'Cập nhật chi tiết sản phẩm không thành công ! Hình ảnh màu sắc đại diện của chi tiết có lỗi khi thêm vào hệ thống !');
            }
            return redirect()->back()->with('thongbao', 'Cập nhật chi tiết sản phẩm thành công !');
        }
        return redirect()->back()->with('thongbao', 'Cập nhật chi tiết sản phẩm không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChiTietDienThoai  $chiTietDienThoai
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiTietDienThoai $chiTietDienThoai)
    {
        if ($chiTietDienThoai->delete()) {
            return redirect()->back()->with('thongbao', 'Xóa chi tiết sản phẩm thành công !');
        }
        return redirect()->back()->with('thongbao', 'Xóa chi tiết sản phẩm không thành công !');
    }

    public function createChiTietSanPham(Request $request)
    {
        $danhSachManHinh = ManHinh::All();
        $danhSachMauSac = MauSac::All();
        $danhSachCameraSau = CameraSau::All();
        $danhSachCameraTruoc = CameraTruoc::All();
        $danhSachHeDieuHanh = HeDieuHanh_CPU::All();
        $danhSachBoNho = BoNho_LuuTru::All();
        $danhSachKetNoi = KetNoi::All();
        $danhSachTienIch = TienIch::All();
        $danhSachThongTinChung = ThongTinChung::All();
        $danhSachPin = Pin_Sac::All();
        $dienThoai = DienThoai::where('id', '=', $request->sanPhamId)->first();
        if ($request->loaiThem == 0) {
            return view('admin/add-page/add-product-detail', [
                'dienThoai' => $dienThoai, 'danhSachManHinh' => $danhSachManHinh, 'danhSachMauSac' => $danhSachMauSac, 'danhSachCameraSau' => $danhSachCameraSau, 'danhSachCameraTruoc' => $danhSachCameraTruoc, 'danhSachHeDieuHanh' => $danhSachHeDieuHanh, 'danhSachBoNho' => $danhSachBoNho, 'danhSachKetNoi' => $danhSachKetNoi, 'danhSachTienIch' => $danhSachTienIch, 'danhSachThongTinChung' => $danhSachThongTinChung, 'danhSachPin' => $danhSachPin
            ]);
        } else {
            $chiTietDienThoai = ChiTietDienThoai::where('id', '=', $request->chitietsanpham)->first();
            return view('admin/add-page/add-product-detail', [
                'dienThoai' => $dienThoai, 'chiTietDienThoai' => $chiTietDienThoai, 'danhSachManHinh' => $danhSachManHinh, 'danhSachMauSac' => $danhSachMauSac, 'danhSachCameraSau' => $danhSachCameraSau, 'danhSachCameraTruoc' => $danhSachCameraTruoc, 'danhSachHeDieuHanh' => $danhSachHeDieuHanh, 'danhSachBoNho' => $danhSachBoNho, 'danhSachKetNoi' => $danhSachKetNoi, 'danhSachTienIch' => $danhSachTienIch, 'danhSachThongTinChung' => $danhSachThongTinChung, 'danhSachPin' => $danhSachPin
            ]);
        }
    }
}
