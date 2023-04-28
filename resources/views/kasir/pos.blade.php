<x-kasir-layout>


    <div class="page-wrapper">
        <div class="content">
            <div class="container container-xl px-0">
                <div class="row mt-2">
                    <div class="col-lg-7 col-sm-12 tabs_wrapper">
                        <div class="tab_control d-flex justify-content-between gap-2">
                            <div class="btn-group btn_category">
                                <button type="button" class="btn border text-dark dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kategori
                                </button>
                                <ul class="dropdown-menu py-1">
                                    <li><a class="dropdown-item" href="#">Semua</a></li>
                                    <li><a class="dropdown-item" href="#">Makanan</a></li>
                                    <li><a class="dropdown-item" href="#">Minuman</a></li>
                                </ul>
                            </div>
                            <form action="" class="search-box d-flex align-items-center">
                                <input type="text" class="form-control" placeholder="Search...">
                                <input type="submit" value="" class="search-control">
                                <i class='bx bx-search-alt fs-5'></i>
                            </form>
                        </div>

                        <div class="tabs_container mt-4">
                            <div class="tab_content active" data-tabs="fruits">
                                <div class="row">
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="col-lg-3 col-sm-6 d-flex">
                                            <button class="productset flex-fill" type="button" data-bs-toggle="modal" data-bs-target="#pilihProduk">
                                                <div class="productsetimg">
                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product" class="mt-1">
                                                    <div class="qty">
                                                        <div class="box">
                                                            Qty : 100
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="productsetcontent text-start">
                                                    <span>Category Product</span>
                                                    <h5>Product Name</h5>
                                                    <h4>Price/product</h4>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="modal fade" id="pilihProduk" tabindex="-1">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content border-0 rounded-3">
                                                    <div class="modal-header py-4 px-4">
                                                        <h5 class="modal-title">Pilih Produk</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
                                                    </div>
                                                    <div class="modal-body pt-4 pb-5 px-4">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="pick_detail_img">
                                                                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                                                </div>
                                                                <div class="productprice mt-3">
                                                                    <h4 class="mb-1 fw-bold">Orange</h4>
                                                                    <h5>Rp. 40.000,00</h5>
                                                                </div>
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                                                                <div class="increment-decrement">
                                                                    <div class="input-groups">
                                                                        <input type="button" value="-" class="button-minus dec button">
                                                                        <input type="text" name="child" value="0" class="quantity-field">
                                                                        <input type="button" value="+" class="button-plus inc button">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="" class="col-6 form_selectproduct">
                                                                <div class="form-group">
                                                                    <label for="variasi">Pilih Variasi</label>
                                                                    <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                                                        <option value="Original">Original</option>
                                                                        <option value="Pedas">Pedas</option>
                                                                        <option value="Pedas2">Pedas Banget</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Catatan</label>
                                                                    <textarea name="" id="" class="form-control"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn_addorder" value="Tambah ke Keranjang">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                    </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-sm-12 ml-4 card">
                        <div class="card card-order">
                            <div class="card-body p-2 pb-0">
                                <div class="order-list py-2 pb-3">
                                    <div class="orderid w-100">
                                        <div class="orderid_head py-2 border-1 border-bottom pb-3">
                                            <span class="opacity-5">#codePesan</span>
                                            <h3 class="fw-bolder">
                                                Pesanan Saat Ini
                                            </h3>
                                        </div>
                                        <div class="orderid-detail border-1 border-bottom py-2">
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <h5 class="fw-bolder opacity-7">Jenis Pesan :</h5>
                                                <span>Meja - Nama Meja</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <h5 class="fw-bolder opacity-7">Pelanggan :</h5>
                                                <span>Nama Pelanggan</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="card-body p-2 " style="margin-top: -49px;">
                                <div class="totalitem py-2 border-bottom border-1">
                                    <h4>Total items : 4</h4>
                                    <a href="javascript:void(0);">Clear all</a>
                                </div>
                                <div class="product-table">
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                            <ul class="product-lists">
                                            <li>
                                                <div class="productimg">
                                                    <div class="productimgs">
                                                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
                                                    </div>
                                                    <div class="productcontet">
                                                        <div class="qty d-flex gap-2 align-items-center">
                                                            <h4>Pineapple</h4><span class="text-secondary">x 1</span>
                                                        </div>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailPesanan" class="btn btn-warning d-flex align-items-center mt-2 border-0 outline-0 btn-sm text-white">
                                                            <i class='bx bx-info-circle text-white me-1'></i>
                                                            <h5 class="fs-7">Detail</h5>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>Rp. 3000.00 </li>
                                        </ul>
                                                                    </div>
                            </div>
                            <div class="split-card">
                            </div>

                            <div class="card-body p-2 pb-3">
                                <div class="setvalue py-2 border-1 border-bottom">
                                    <ul>
                                        <li>
                                            <h5>Subtotal </h5>
                                            <h6>55000</h6>
                                        </li>
                                        <li>
                                            <h5>Pajak </h5>
                                            <h6>5000</h6>
                                        </li>
                                        <li>
                                            <h5>Diskon </h5>
                                            <h6>- 10000</h6>
                                        </li>
                                        <li class="total-value">
                                            <h5>Total </h5>
                                            <h6>50000</h6>
                                        </li>
                                    </ul>
                                </div>

                                <div class="voucher_form d-flex justify-content-between gap-2 mt-4">
                                    <input type="text" class="form-control" placeholder="Masukan kode voucher"><button class="btn">Pakai</button>
                                </div>
                                <div class="point_form d-flex align-items-center justify-content-between gap-2 mt-3">
                                    <div class="point d-flex align-items-center gap-1">
                                        <p class="mb-0">Tukarkan Point</p><i class='bx bx-info-circle'></i><span>Rp.3000</span>
                                    </div>
                                    <input id="s1" type="checkbox" class="switch">
                                </div>
                                <div class="btn_group d-flex gap-2 mt-3" style="height:42px ;">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran-simpan" class="btn btn-warning text-white fs-6 fw-normal">
                                        <h5>Simpan</h5>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#pilihPembayaran" class="btn btn-success text-white fs-6 fw-normal">
                                        <h5>Bayar</h5>
                                    </button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pilihPembayaran" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Pilih Metode Bayar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body">
                <form class="setvaluecash" action="pembayaran.html">
                    <ul>
                        <li>
                            <a disabled class="paymentmethod">
                                <input type="checkbox">
                                <img src="assets/img/icons/cash.svg" alt="img" class="me-2">
                                Tunai
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/debitcard.svg" alt="img" class="me-2">
                                Transfer
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/scan.svg" alt="img" class="me-2">
                                E-Wallet
                            </a>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary w-100 mt-4">
                        Lanjut Pembayaran
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pilihPembayaran-simpan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Pilih Metode Bayar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body">
                <form class="setvaluecash" action="">
                    <ul>
                        <li>
                            <a disabled class="paymentmethod">
                                <input type="checkbox">
                                <img src="assets/img/icons/cash.svg" alt="img" class="me-2">
                                Tunai
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/debitcard.svg" alt="img" class="me-2">
                                Transfer
                            </a>
                        </li>
                        <li>
                            <a disabled class="paymentmethod">
                                <img src="assets/img/icons/scan.svg" alt="img" class="me-2">
                                E-Wallet
                            </a>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary w-100 mt-4" onclick="alert('Pesanan Berhasil Disimpan!')" data-bs-dismiss="modal">
                        Lanjut Pembayaran
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailPesanan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Detail Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body px-4">
                <div class="row">
                    <div class="col-4">
                        <div class="detail_img">
                            <img src="assets/img/product/product31.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <p class="mb-1">Nama Produk : Orange</p>
                        <p class="mb-1">Harga/pcs : Rp. 100.000,00</p>
                        <p class="mb-1">Variasi : Pedas</p>
                        <p class="mb-1">Jumlah : 1</p>
                        <p class="mb-1">Total : Rp. 100.000,00</p>
                    </div>
                    <div class="col-12 mt-3">
                        <p class="mb-1 ">Catatan :</p>
                        <p style="font-style: italic;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer px-4 border-top d-flex justify-content-end">
                <button type="button" data-bs-toggle="modal" data-bs-target="#ubahProduk" class="btn btn-primary btn_closedetail">Ubah</button>
                <a href="" class="btn btn-danger btn_closedetail">Hapus</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ubahProduk" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-header py-4 px-4">
                <h5 class="modal-title">Ubah Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x fs-4'></i></button>
            </div>
            <div class="modal-body pt-4 pb-5 px-4">
                <div class="row">
                    <div class="col-6">
                        <div class="pick_detail_img">
                            <img src="assets/img/product/product31.jpg" alt="">
                        </div>
                        <div class="productprice mt-3">
                            <h4 class="mb-1 fw-bold">Orange</h4>
                            <h5>Rp. 40.000,00</h5>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, ab! Explicabo aperiam similique deserunt eius!</p>
                        <div class="increment-decrement">
                            <div class="input-groups">
                                <input type="button" value="-" class="button-minus dec button">
                                <input type="text" name="child" value="0" class="quantity-field">
                                <input type="button" value="+" class="button-plus inc button">
                            </div>
                        </div>
                    </div>
                    <form action="" class="col-6 form_selectproduct">
                        <div class="form-group">
                            <label for="variasi">Pilih Variasi</label>
                            <select name="" id="variasi" class="form-control" style="font-size: 14px !important;">
                                <option value="Original">Original</option>
                                <option value="Pedas">Pedas</option>
                                <option value="Pedas2">Pedas Banget</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Catatan</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn_addorder" value="Ubah Pesanan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</x-kasir-layout>