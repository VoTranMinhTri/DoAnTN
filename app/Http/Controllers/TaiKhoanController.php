<?php

namespace App\Http\Controllers;

use App\Models\LoaiTaiKhoan;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TaiKhoanController extends Controller
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
     * @param  \App\Http\Requests\StoreTaiKhoanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taiKhoan = TaiKhoan::where('token', '=', $request->input('token'))->first();
        if (empty($taiKhoan)) {
            return redirect()->back()->with('thongbao', 'Thêm không thành công ! Token đã bị chỉnh sửa !');
        }
        if ($taiKhoan->loai_tai_khoan_id != 1 && $request->input('loaitaikhoan') == 1 || $request->input('loaitaikhoan') == 2 || $request->input('loaitaikhoan') == 3) {
            return redirect()->back()->with('thongbao', 'Tài khoản này không có quyền thêm loại tài khoản này !');
        }
        // Kiểm tra id loại tài khoản
        $danhSach = LoaiTaiKhoan::all();
        $chuoiId = '';
        $dem = 0;
        foreach ($danhSach as $tp) {
            if ($dem == 0) {
                $chuoiId = $tp->id;
            } else {
                $chuoiId = $chuoiId . ',' . $tp->id;
            }
            $dem++;
        }

        //Kiểm tra các trường input
        $validated = Validator::make(
            $request->all(),
            [
                'username' => 'required|min:6|max:20|regex:/^\S*$/u',
                'loaitaikhoan' => 'required|in:' . $chuoiId,
                'matkhau' => 'required|min:6|max:20|regex:/^\S*$/u',
                'matkhauxacnhan' => 'required|min:6|same:matkhau',
            ],
            $messages = [
                'required' => ':attribute là bắt buộc !',
                'min' => ':attribute tối thiểu 6 ký tự !',
                'max' => ':attribute tối đa 20 ký tự !',
                'same' => ':attribute không khớp với mật khẩu !',
                'regex' => ':attribute không hợp lệ !',
            ],
            [
                'username' => 'Username',
                'loaitaikhoan' => 'Loại tài khoản',
                'matkhau' => 'Mật khẩu',
                'matkhauxacnhan' => 'Mật khẩu xác nhận',
            ]
        )->validate();

        $ktUsername = TaiKhoan::where('username', '=', $request->input('username'))->first();
        if (empty($ktUsername)) {
            $taiKhoan = new TaiKhoan();
            $taiKhoan->fill([
                'loai_tai_khoan_id' => $request->input('loaitaikhoan'),
                'bac_tai_khoan_id' => 1,
                'username' => $request->input('username'),
                'password' => bcrypt($request->input('matkhau')),
                'diem_thuong' => 0,
                'token' => Str::random(60),
                'trang_thai' => 1,
            ]);
            if ($taiKhoan->save() == true) {
                return redirect()->back()->with('thongbao', 'Thêm tài khoản nhân viên thành công !');
            }
            return redirect()->back()->with('thongbao', 'Thêm tài khoản nhân viên không thành công !');
        }
        return redirect()->back()->with('thongbao', 'Thêm tài khoản nhân viên không thành công ! Username đã tồn tại !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaiKhoanRequest  $request
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaiKhoan $taiKhoan)
    {
        if ($taiKhoan->delete()) {
            return redirect()->back()->with('thongbao', 'Xóa thành công !');
        }
        return redirect()->back()->with('thongbao', 'Xóa không thành công !');
    }

    public function indexKhachHang()
    {
        $danhSachKhachHang = TaiKhoan::join('thong_tin_tai_khoans', 'thong_tin_tai_khoans.tai_khoan_id', '=', 'tai_khoans.id')
            ->join('bac_tai_khoans', 'bac_tai_khoans.id', '=', 'tai_khoans.bac_tai_khoan_id')
            ->join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
            ->where('loai_tai_khoan_id', '>', 4)
            ->select('tai_khoans.*', 'bac_tai_khoans.ten_bac_tai_khoan', 'loai_tai_khoans.ten_loai_tai_khoan', 'thong_tin_tai_khoans.ho_ten', 'thong_tin_tai_khoans.dia_chi', 'thong_tin_tai_khoans.so_dien_thoai', 'thong_tin_tai_khoans.email', 'thong_tin_tai_khoans.ngay_sinh', 'thong_tin_tai_khoans.gioi_tinh')
            ->get();
        foreach ($danhSachKhachHang as $tp) {
            $tp->ngay_sinh = Carbon::createFromFormat('Y-m-d', $tp->ngay_sinh)->format('d/m/Y');
        }
        return view('admin/management-page/customer', ['danhSachKhachHang' => $danhSachKhachHang]);
    }

    public function thayDoiTrangThaiTaiKhoan($taiKhoanId)
    {
        $taiKhoan = TaiKhoan::where('id', '=', $taiKhoanId)->first();
        if ($taiKhoan->trang_thai == 0) {
            if ($taiKhoan->update(['trang_thai' => 1]) == true) {
                return redirect()->back()->with('thongbao', 'Cập nhật trạng thái thành công !');
            }
            return redirect()->back()->with('thongbao', 'Cập nhật trạng thái không thành công !');
        } else {
            if ($taiKhoan->update(['trang_thai' => 0]) == true) {
                return redirect()->back()->with('thongbao', 'Cập nhật trạng thái thành công !');
            }
            return redirect()->back()->with('thongbao', 'Cập nhật trạng thái không thành công !');
        }
    }

    public function indexTaiKhoanNhanVien($token)
    {
        $taiKhoan = TaiKhoan::where('token', '=', $token)->first();
        if(empty($taiKhoan)){
            return redirect()->intended('/admin');
        }
        if ($taiKhoan->loai_tai_khoan_id == 1) {
            $danhSachTaiKhoan = TaiKhoan::join('thong_tin_tai_khoans', 'thong_tin_tai_khoans.tai_khoan_id', '=', 'tai_khoans.id')
                ->join('bac_tai_khoans', 'bac_tai_khoans.id', '=', 'tai_khoans.bac_tai_khoan_id')
                ->join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
                ->where('tai_khoans.id', '!=', $taiKhoan->id)
                ->where('loai_tai_khoans.id', '<', 5)
                ->select('tai_khoans.*', 'bac_tai_khoans.ten_bac_tai_khoan', 'loai_tai_khoans.ten_loai_tai_khoan', 'thong_tin_tai_khoans.ho_ten')
                ->get();
            return view('admin/management-page/staff-account', ['danhSachTaiKhoan' => $danhSachTaiKhoan]);
        } else {
            if ($taiKhoan->loai_tai_khoan_id == 2) {
                $taiKhoan = TaiKhoan::join('nhan_viens', 'nhan_viens.tai_khoan_id', '=', 'tai_khoans.id')
                    ->where('tai_khoans.id', '=', $taiKhoan->id)
                    ->select('tai_khoans.*', 'nhan_viens.cua_hang_id')
                    ->first();
                $danhSachTaiKhoan = TaiKhoan::join('thong_tin_tai_khoans', 'thong_tin_tai_khoans.tai_khoan_id', '=', 'tai_khoans.id')
                    ->join('nhan_viens', 'nhan_viens.tai_khoan_id', '=', 'tai_khoans.id')
                    ->join('bac_tai_khoans', 'bac_tai_khoans.id', '=', 'tai_khoans.bac_tai_khoan_id')
                    ->join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
                    ->where('tai_khoans.id', '!=', $taiKhoan->id)
                    ->where('loai_tai_khoans.id', '<', 5)
                    ->where('nhan_viens.cua_hang_id', '=', $taiKhoan->cua_hang_id)
                    ->select('tai_khoans.*', 'bac_tai_khoans.ten_bac_tai_khoan', 'loai_tai_khoans.ten_loai_tai_khoan', 'thong_tin_tai_khoans.ho_ten')
                    ->get();
                return view('admin/management-page/staff-account', ['danhSachTaiKhoan' => $danhSachTaiKhoan]);
            } else {
                $taiKhoan = TaiKhoan::join('nhan_viens', 'nhan_viens.tai_khoan_id', '=', 'tai_khoans.id')
                    ->where('tai_khoans.id', '=', $taiKhoan->id)
                    ->select('tai_khoans.*', 'nhan_viens.kho_id')
                    ->first();
                $danhSachTaiKhoan = TaiKhoan::join('thong_tin_tai_khoans', 'thong_tin_tai_khoans.tai_khoan_id', '=', 'tai_khoans.id')
                    ->join('nhan_viens', 'nhan_viens.tai_khoan_id', '=', 'tai_khoans.id')
                    ->join('bac_tai_khoans', 'bac_tai_khoans.id', '=', 'tai_khoans.bac_tai_khoan_id')
                    ->join('loai_tai_khoans', 'loai_tai_khoans.id', '=', 'tai_khoans.loai_tai_khoan_id')
                    ->where('tai_khoans.id', '!=', $taiKhoan->id)
                    ->where('loai_tai_khoans.id', '<', 5)
                    ->where('nhan_viens.kho_id', '=', $taiKhoan->kho_id)
                    ->select('tai_khoans.*', 'bac_tai_khoans.ten_bac_tai_khoan', 'loai_tai_khoans.ten_loai_tai_khoan', 'thong_tin_tai_khoans.ho_ten')
                    ->get();
                return view('admin/management-page/staff-account', ['danhSachTaiKhoan' => $danhSachTaiKhoan]);
            }
        }
    }

    public function createTaiKhoanNhanVien($token)
    {
        $taiKhoan = TaiKhoan::where('token', '=', $token)->first();
        if ($taiKhoan->loai_tai_khoan_id == 1) {
            $danhSachLoaiTaiKhoan = LoaiTaiKhoan::all();
            return view('admin/add-page/add-staff-account', ['danhSachLoaiTaiKhoan' => $danhSachLoaiTaiKhoan]);
        } else {
            $danhSachLoaiTaiKhoan = LoaiTaiKhoan::where('id', '=', 3)->get();
            return view('admin/add-page/add-staff-account', ['danhSachLoaiTaiKhoan' => $danhSachLoaiTaiKhoan]);
        }
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password'), 'trang_thai' => 1])) {
            $taiKhoan = TaiKhoan::where('username', '=', $request->input('username'))->first();
            $request->session()->regenerate();
            if ($taiKhoan->loai_tai_khoan_id < 5) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'error' => 'Tên đăng nhập hoặc mật khẩu không chính xác !',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/signin');
    }
}
