@extends('admin_theme.admin_master')
@section('admin_content')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading text-right">
                <h3>المخزن  <span>/ أضافة تقرير يومي </span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
{{--        <div class="col-12 col-lg-auto mb-20">--}}
{{--            <div class="buttons-group">--}}
{{--                <button class="button button-outline button-primary">Save & Publish </button>--}}
{{--                <button class="button button-outline button-info">Save to Draft </button>--}}
{{--                <button class="button button-outline button-danger">Delete Product </button>--}}
{{--            </div>--}}
{{--        </div><!-- Page Button Group End -->--}}

    </div><!-- Page Headings End -->

    <!-- Add or Edit Product Start -->
    <div class="add-edit-product-wrap col-12">

        <div class="add-edit-product-form text-right">
            <form action="{{ route('store.report') }}" method="POST">
            @csrf
                <h4 class="title">أضافة التقرير</h4>
                <hr>

{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Name / Title*" /></div>--}}
{{--                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Sub-title" /></div>--}}
{{--                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Price*" /></div>--}}
{{--                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Product Discount" /></div>--}}
{{--                    <div class="col-12 mb-30"><textarea class="form-control" placeholder="Product Description*"></textarea></div>--}}
{{--                    <div class="col-lg-6 col-12 mb-30">--}}
{{--                        <select class="form-control select2">--}}
{{--                            <option value="status" />Status--}}
{{--                            <option value="publish" />Publish--}}
{{--                            <option value="draft" />Draft--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Meta Title" /></div>--}}
{{--                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Meta Keyword" /></div>--}}
{{--                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Aditional Description Image Link" /></div>--}}
{{--                </div>--}}

{{--                <h4 class="title">Product Gallery </h4>--}}

{{--                <div class="product-upload-gallery row flex-wrap">--}}
{{--                    <div class="col-12 mb-30">--}}
{{--                        <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2__. </p>--}}
{{--                        <input class="file-pond" type="file" multiple="" />--}}
{{--                    </div>--}}
{{--                </div>--}}

                <h4 class="title"> <i class="ti-angle-left ml-2"></i>الغير مفروز و التالف  </h4>
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-12 mb-30">
                        <label for="unFilter">غير مفروز</label>
                        <input name="unFilter" id="unFilter" class="form-control" type="number" placeholder="....."/>
                        @error('unFilter')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
{{--                    <div class="col-lg-5 col-12 mb-30"><label for="test">تالف</label><input class="form-control" type="number" placeholder="....." required/></div>--}}
                </div>
                <hr>
                <h4 class="title"> <i class="ti-angle-left ml-2"></i>فئة الرجالي</h4>

                <div class="row">
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="m_home_clothes_C">بيتي رجالي C</label>
                        <input name="m_home_clothes_C" id="m_home_clothes_C" class="form-control" type="number" placeholder="....."/>
                        @error('m_home_clothes_C')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="m_home_clothes_B">بيتي رجالي B</label>
                        <input name="m_home_clothes_B" id="m_home_clothes_B" class="form-control" type="number" placeholder="....."/>
                        @error('m_home_clothes_B')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="m_trouser">بنطلون و جينز</label>
                        <input name="m_trouser" id="m_trouser" class="form-control" type="number" placeholder="....."/>
                        @error('m_trouser')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="m_clothes_go_outs_C">قميص C</label>
                        <input name="m_clothes_go_outs_C" id="m_clothes_go_outs_C" class="form-control" type="number" placeholder="....."/>
                        @error('m_clothes_go_outs_C')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="m_clothes_go_outs_B">قميص B</label>
                        <input name="m_clothes_go_outs_B" id="m_clothes_go_outs_B" class="form-control" type="number" placeholder="....."/>
                        @error('m_clothes_go_outs_B')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="m_suit">بدل</label>
                        <input name="m_suit" id="m_suit" class="form-control" type="number" placeholder="....."/>
                        @error('m_suit')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="m_A_Class">مميز رجالي</label>
                        <input name="m_A_Class" id="m_A_Class" class="form-control" type="number" placeholder="....."/>
                        @error('m_A_Class')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr>






                <h4 class="title"> <i class="ti-angle-left ml-2"></i>فئة الحريمي </h4>
                <div class="row">
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="w_home_clothes_C">بيتي حريمي C</label>
                        <input name="w_home_clothes_C" id="w_home_clothes_C" class="form-control" type="number" placeholder="....."/>
                        @error('w_home_clothes_C')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="w_home_clothes_B">بيتي حريمي B</label>
                        <input name="w_home_clothes_B" id="w_home_clothes_B" class="form-control" type="number" placeholder="....."/>
                        @error('w_home_clothes_B')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="w_clothes_go_outs_C">خروج B</label>
                        <input name="w_clothes_go_outs_C" id="w_clothes_go_outs_C" class="form-control" type="number" placeholder="....."/>
                        @error('w_clothes_go_outs_C')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="w_clothes_go_outs_B">خروج C</label>
                        <input name="w_clothes_go_outs_B" id="w_clothes_go_outs_B" class="form-control" type="number" placeholder="....."/>
                        @error('w_clothes_go_outs_B')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="w_abaya">عبايات</label>
                        <input name="w_abaya" id="w_abaya" class="form-control" type="number" placeholder="....."/>
                        @error('w_abaya')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="w_headscarf">طرح</label>
                        <input name="w_headscarf" id="w_headscarf" class="form-control" type="number" placeholder="....."/>
                        @error('w_headscarf')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="w_A_Class">مميز حريمي</label>
                        <input name="w_A_Class" id="w_A_Class" class="form-control" type="number" placeholder="....."/>
                        @error('w_A_Class')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr>






                <h4 class="title"> <i class="ti-angle-left ml-2"></i>فئة الاطفالي </h4>
                <div class="row">
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="c_big_C">اطفالي C</label>
                        <input name="c_big_C" id="c_big_C" class="form-control" type="number" placeholder="....."/>
                        @error('c_big_C')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="c_big_B">اطفالي B</label>
                        <input name="c_big_B" id="c_big_B" class="form-control" type="number" placeholder="....."/>
                        @error('c_big_B')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="baby">حديثي الولاده</label>
                        <input name="baby" id="baby" class="form-control" type="number" placeholder="....."/>
                        @error('baby')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="c_A_Class">مميز اطفالي</label>
                        <input name="c_A_Class" id="c_A_Class" class="form-control" type="number" placeholder="....."/>
                        @error('c_A_Class')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr>





                <h4 class="title"> <i class="ti-angle-left ml-2"></i>فئات متنوعه  </h4>
                <div class="row">
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="shoes">احذيه</label>
                        <input name="shoes" id="shoes" class="form-control" type="number" placeholder="....."/>
                        @error('shoes')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="other">اخري</label>
                        <input name="other" id="other" class="form-control" type="number" placeholder="....."/>
                        @error('other')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="bags">شنط</label>
                        <input name="bags" id="bags" class="form-control" type="number" placeholder="....."/>
                        @error('c_A_Class')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="Toys">العاب</label>
                        <input name="Toys" id="Toys" class="form-control" type="number" placeholder="....."/>
                        @error('c_A_Class')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="Furniture">مفروشات</label>
                        <input name="Furniture" id="Furniture" class="form-control" type="number" placeholder="....."/>
                        @error('Furniture')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 mb-30">
                        <label for="brides">عرائس</label>
                        <input name="brides" id="brides" class="form-control" type="number" placeholder="....."/>
                        @error('brides')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <hr>


                <!-- Button Group Start -->
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-end col mbn-10">
                        <input class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" value="اضافة">
{{--                        <button class="button button-outline button-primary mb-10 ml-10 mr-0">Save & Publish </button>--}}
{{--                        <button class="button button-outline button-info mb-10 ml-10 mr-0">Save to Draft </button>--}}
{{--                        <button class="button button-outline button-danger mb-10 ml-10 mr-0">Delete Product </button>--}}
                    </div>
                </div><!-- Button Group End -->

            </form>
        </div>

    </div><!-- Add or Edit Product End -->
@endsection
