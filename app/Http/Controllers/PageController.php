<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	// print_r($slide); 	in mảng
    	// exit;
    	// return view('Page.trangchu',['slide'=> $slide]);
    	$new_product = Product::where('new',1)->get();
    	// dd($new_product);  //in
    	return view('Page.trangchu', compact('slide','new_product'));
    }

    public function getLoaiSp(){
    	return view('Page.loai_sanpham');
    }

    public function getChiTiet(){
    	return view('Page.chitiet_sanpham');
    }

    public function getLienHe(){
    	return view('Page.lienhe');
    }

    public function getGioiThieu(){
    	return view('Page.gioithieu');
    }

    public function getDangKi(){
    	return view('Page.dangki');
    }

    public function getDangNhap(){
    	return view('Page.dangnhap');
    }

    public function getDatHang(){
    	return view('Page.dathang');
    }

}
