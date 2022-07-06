<!-- ====== Banner Section Start -->
<div class="
        relative
        z-10
        pt-[120px]
        md:pt-[130px]
        lg:pt-[160px]
        pb-[100px]
        bg-primary
        overflow-hidden
      ">
    <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4">
                <div class="text-center">
                    <h1 class="font-semibold text-white text-4xl">Produk Page</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <span class="absolute top-0 left-0 z-[-1]">
            <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white" stroke-opacity="0.08" stroke-width="12" />
            </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
            <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white" stroke-opacity="0.06" stroke-width="13" />
            </svg>
        </span>
    </div>
</div>
<!-- ====== Banner Section End -->

<!-- ====== Blog Section Start -->
<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <?php
            //ciptakan object dari class produk
            $obj = new Produk();
            //panggil fungsi menampilkan data produk
            $rs = $obj->getAll();
            //looping data produk
            foreach ($rs as $p) {
            ?>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-8">
                            <a href="blog-details.html" class="block">
                                <img src="assets/images/blog/blog-01.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
                            </a>
                        </div>
                        <div>
                            <span class="
                    bg-primary
                    rounded
                    inline-block
                    text-center
                    py-1
                    px-4
                    text-xs
                    leading-loose
                    font-semibold
                    text-white
                    mb-5
                  ">
                                Produk <?= $p['id'] ?>
                            </span>
                            <h3>
                                <a href="blog-details.html" class="
                      font-semibold
                      text-xl
                      sm:text-2xl
                      lg:text-xl
                      xl:text-2xl
                      mb-4
                      inline-block
                      text-dark
                      hover:text-primary
                    ">
                                    Minyak <?= $p['nama_produk'] ?>
                                </a>
                            </h3>
                            <p class="text-base text-body-color mb-3">
                                <b>Harga</b> : <?= $p['harga'] ?>
                            </p>

                        </div>
                        <div class="flex">
                            <?php
                            if (isset($user)) {
                                if ($role != 'pelanggan') {
                            ?>
                                    <a href="index.php?hal=edit_produk&id=<?= $p['id'] ?>" class="bg-primary
                            rounded
                            inline-block
                            text-center
                            py-1
                            px-4
                            text-xs
                            leading-loose
                            font-semibold
                            text-white
                            mb-5">Edit</a>
                                    <form action="produkController.php" method="post">
                                        <button type="submit" name="proses" value="hapus" class="bg-black
                            rounded
                            inline-block
                            text-center
                            py-1
                            px-4
                            text-xs
                            leading-loose
                            font-semibold
                            text-white
                            mb-5" onclick="return confirm('anda yakin data hapus?')">Hapus</button>
                                        <input type="hidden" name="idx" value="<?= $p['id'] ?>">
                                    </form>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            } ?>
        </div>
        <div class="text-center mx-auto mb-[60px] max-w-[620px] mt-4">
            <?php
            if (isset($user)) {
                if ($role != 'pelanggan') {
            ?>
                    <span class="font-semibold text-lg text-white bg-primary mb-2 block py-4 px-6 rounded">
                        <a href="index.php?hal=form_produk" class="text-center mx-auto mt-4">Tambah</a>
                    </span>
            <?php }
            }
            ?>
        </div>
    </div>
</section>
<!-- ====== Blog Section End -->