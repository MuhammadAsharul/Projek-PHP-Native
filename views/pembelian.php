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
                    <h1 class="font-semibold text-white text-4xl">Pembelian Page</h1>
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

<!-- ====== Features Section Start -->
<section class="pt-20 lg:pt-[120px] pb-8 lg:pb-[70px]">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="mb-12 lg:mb-20 max-w-[620px]">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        Pembelian
                    </span>
                    <h2 class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                ">
                        Berikut merupakan tabel pembelian
                    </h2>
                    <p class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                ">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <?php
            //ciptakan object dari class produk
            $obj = new Pembelian();
            //panggil fungsi menampilkan data produk
            $rs = $obj->getAll();
            //looping data produk
            foreach ($rs as $p) {
            ?>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                    <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".1s">
                        <div class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  relative
                  z-10
                ">
                            <span class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-primary bg-opacity-20
                    rounded-2xl
                    mb-8
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[25deg]
                    group-hover:rotate-45
                    duration-300
                  "></span>
                            <svg width="35" height="35" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.9313 11.7H38.9188C40.5438 10.9687 41.7626 9.99374 42.2501 8.69374C42.9001 6.98749 42.2501 5.19999 40.3001 3.33124C38.1876 1.29999 35.9938 0.568738 33.8001 1.13749C29.9813 2.11249 27.4626 7.06874 26.2438 9.99374C25.1063 7.06874 22.5876 2.11249 18.6876 1.13749C16.4938 0.568738 14.3001 1.29999 12.1876 3.33124C10.2376 5.19999 9.5876 6.98749 10.2376 8.69374C10.7251 9.99374 12.0251 10.9687 13.5688 11.7H7.06885C5.0376 11.7 3.4126 13.325 3.4126 15.3562V21.5312C3.4126 23.5625 5.0376 25.1875 7.06885 25.1875H7.71885V46.2312C7.71885 48.8312 9.83135 51.025 12.5126 51.025H40.1376C42.7376 51.025 44.9313 48.9125 44.9313 46.2312V25.1875C46.9626 25.1875 48.5876 23.5625 48.5876 21.5312V15.3562C48.5063 13.325 46.8813 11.7 44.9313 11.7ZM34.5313 3.98124C34.7751 3.89999 35.0188 3.89999 35.1813 3.89999C36.1563 3.89999 37.2126 4.38749 38.2688 5.52499C38.7563 6.01249 39.8126 7.06874 39.5688 7.79999C39.0001 9.34374 33.9626 10.6437 28.9251 11.05C30.0626 8.36874 32.1751 4.54999 34.5313 3.98124ZM13.0001 7.71874C12.7563 6.98749 13.8126 5.93124 14.3001 5.44374C15.4376 4.38749 16.4126 3.81874 17.3876 3.81874C17.6313 3.81874 17.8751 3.81874 18.0376 3.89999C20.4751 4.54999 22.5063 8.28749 23.6438 10.9687C18.6063 10.5625 13.5688 9.26249 13.0001 7.71874ZM42.0063 46.2312C42.0063 47.2875 41.1126 48.1812 40.0563 48.1812H12.4313C11.3751 48.1812 10.4813 47.2875 10.4813 46.2312V25.1875H41.9251V46.2312H42.0063ZM45.6626 21.5312C45.6626 22.0187 45.3376 22.3437 44.8501 22.3437H7.06885C6.6626 22.3437 6.25635 22.0187 6.25635 21.5312V15.3562C6.25635 14.95 6.6626 14.5437 7.06885 14.5437H44.8501C45.2563 14.5437 45.6626 14.8687 45.6626 15.3562V21.5312Z" fill="white" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-xl text-dark mb-3">
                            Pembelian Ke- <?= $p['id'] ?>
                        </h4>
                        <p class="text-body-color mb-2 lg:mb-2">
                            <b>Tanggal Pembelian</b> : <?= $p['tanggal'] ?>
                        </p>
                        <p class="text-body-color mb-2 lg:mb-2">
                            <b>ID Pemasok</b> : <?= $p['pemasok_id'] ?>
                        </p>
                    </div>
                    <div class="flex">
                        <?php
                        if (isset($user)) {
                            if ($role != 'pelanggan') {
                        ?>
                                <a href="index.php?hal=edit_pembelian&id=<?= $p['id'] ?>" class="bg-primary
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
                                <form action="pembelianController.php" method="post">
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
            <?php
            } ?>
        </div>
        <div class="text-center mx-auto mb-[60px] max-w-[620px] mt-4">
            <?php
            if (isset($user)) {
                if ($role != 'pelanggan') {
            ?>
                    <span class="font-semibold text-lg text-white bg-primary mb-2 block py-4 px-6 rounded">
                        <a href="index.php?hal=form_pembelian" class="text-center mx-auto mt-4">Tambah</a>
                    </span>
            <?php
                }
            }
            ?>
        </div>
</section>
<!-- ====== Features Section End -->