<?php
if (isset($user)) {
    if ($role != 'pelanggan') {
?>
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
                            <h1 class="font-semibold text-white text-4xl">Pembelian Form</h1>
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
        <div class="px-4 w-full ">
            <div class="
                shadow-testimonial
                rounded-lg
                bg-white
                py-10
                px-8
                md:p-[60px]
                lg:p-10
                2xl:p-[60px]
                sm:py-12 sm:px-10
                lg:py-12 lg:px-10
                wow
                fadeInUp
              " data-wow-delay=".2s
              ">
                <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
                    Add Pembelian
                </h3>
                <form action="pembelianController.php" method="post">
                    <div class="mb-6">
                        <label for="tanggal" class="block text-xs text-dark">Tanggal*</label>
                        <input type="date" name="tanggal" placeholder="2022-10-13" class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    " />
                    </div>
                    <div class="mb-6">
                        <label for="Pemasok_id" class="block text-xs text-dark">ID Pemasok*</label>
                        <input type="text" name="pemasok_id" placeholder="id pemasok" class="
                      w-full
                      border-0 border-b border-[#f1f1f1]
                      focus:border-primary focus:outline-none
                      py-4
                    " />
                    </div>
                    <div class="mb-0">
                        <button type="submit" class="
                      inline-flex
                      items-center
                      justify-center
                      py-4
                      px-6
                      rounded
                      text-white
                      bg-primary
                      text-base
                      font-medium
                      hover:bg-dark
                      transition
                      duration-300
                      ease-in-out
                    " name="proses" value="simpan">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
<?php
    } else {
        include_once 'views/terlarang.php';
    }
} else {
    include_once 'views/terlarang.php';
}
?>